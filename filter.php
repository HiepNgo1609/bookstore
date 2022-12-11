<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include "./connection/connect.php";

if (isset($_POST['filter-list'])) {
    $filter_list = $_POST['filter-list'];

    $query = "";

    // GET CATEGORY
    if (isset($filter_list['category'])) {
        $category_list = $filter_list['category'];
        $category_query = get_category_query($category_list);
        $query .= $category_query;
    }

    // DEFAULT PRICE
    $price_query = " price >= 0";

    // GET PRICE LIMIT
    if (isset($filter_list['priceLimit'])) {
        $price_limit = $filter_list['priceLimit'];
        $price_query = get_price_limit_query($price_limit);
    }
    $query .= $price_query;

    if (isset($filter_list['name'])) {
        $name = $filter_list['name'];
        $query .= " AND products.name LIKE '%" . $name . "%'";
    }

    // GET PRODUCT SORT
    if (isset($filter_list['sort'])) {
        $product_sort = $filter_list['sort'];
        $product_query = get_product_sort($product_sort);
        $query .= ($product_query);
    }



    $result = mysqli_query($db, "SELECT *
                                 FROM products
                                 LEFT OUTER JOIN
                                    (SELECT product_id,
                                            COUNT(product_id) AS nums_of_review,
                                            AVG(rate_star) AS avg_star
                                    FROM ratings
                                    GROUP BY product_id) AS r
                                 ON products.id = r.product_id

                                 INNER JOIN
                                    (SELECT id as c_id,
                                            name as c_name
                                    FROM category) AS c
                                 ON (products.category_id = c.c_id)

                                 WHERE" . $query);
    $data = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }

    echo json_encode($data);

} else {
    echo json_encode(
        array('message' => 'No Products Found!')
    );
}

function get_category_query($category_list)
{
    $category_query = "";

    foreach ($category_list as $filter_item) {
        $filter_item = trim($filter_item);

        $category_query .= (" c.c_name = '" . $filter_item . "' AND");
    }

    return $category_query;
}

function get_price_limit_query($price_limit)
{
    $floor = min($price_limit['floor']);
    $ceil = max($price_limit['ceil']);

    $price_query = "(price * (100-discount) / 100 >= " . $floor . " AND price * (100-discount) / 100 <= " . $ceil . ")";

    return $price_query;
}

function get_product_sort($product_sort)
{
    if ($product_sort == "newest")
        return " ORDER BY created_at DESC";
    else
        return " ORDER BY avg_star DESC";
}
?>