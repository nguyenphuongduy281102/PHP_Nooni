<?php
require_once 'mysql.php';
$pdo = get_pdo();

function get_all_products(){
    global $pdo;

    $sql = "SELECT * FROM PRODUCTS";
    $stmt = $pdo->prepare($sql);
    

    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC); 
     
    // Lấy danh sách kết quả
    $result = $stmt->fetchAll();
     
    $product_list = array();

    // Lặp kết quả
    foreach ($result as $row){
        $product_list[] = array(
            'id' => $row['id'],
            'image' => $row['image'],
            'name' => $row['name'],
            'description' => $row['description'],
            'productscol' => $row['productscol'],
            'price' => $row['price'],
            'quantity' => $row['quantity'],
            'category_id' => $row['category_id']
        );
    }
    
    return $product_list;
}

function get_products_by_page($page){
    global $pdo;

    $perPage = 8;
    $begin = ($page - 1) * $perPage;

    $sql = "SELECT * FROM PRODUCTS LIMIT $begin, $perPage";
    $stmt = $pdo->prepare($sql);
    

    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC); 
     
    // Lấy danh sách kết quả
    $result = $stmt->fetchAll();
    
     
    $product_list = array();

    // Lặp kết quả
    foreach ($result as $row){
        $product = array(
            'id' => $row['id'],
            'image' => $row['image'],
            'description' => $row['description'],
            'price' => $row['price'],
            'name' => $row['name'],
            'quantity' => $row['quantity'],
        );
        array_push($product_list, $product);
    }
    
    return $product_list;
}

/**
 * Get Product detail
 * host/product-detail.php?id=1
 * @id id of product
 */
function get_products($products){
    global $pdo;

    $sql = "SELECT * FROM PRODUCTS WHERE ID=:id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $products);
    

    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC); 
     
    // Lấy danh sách kết quả
    $result = $stmt->fetchAll();

    // Lặp kết quả
    foreach ($result as $row){
        return array(
            'id' => $row['id'],
            'image' => $row['image'],
            'name' => $row['name'],
            'description' => $row['description'],
            'price' => $row['price'],
            'quantity' => $row['quantity'],
            'category_id' => $row['category_id'],
        );
    }

    return null;
}

function delete_products($products_id){
    global $pdo;

    $sql = "DELETE FROM PRODUCTS WHERE ID=:id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $products_id);

    $stmt->execute();

}

function insert_products($products){
    global $pdo;
    $sql = "INSERT INTO PRODUCTS(ID, IMAGE, NAME, DESCRIPTION, PRICE, QUANTITY , CATEGORY_ID) VALUES(NULL, :image, :name, :description, :price, :quantity, :category_id)";
    $stmt = $pdo->prepare($sql);
    
   
    $stmt->bindParam(':image', $products['image']);
    $stmt->bindParam(':name', $products['name']);
    $stmt->bindParam(':description', $products['description']);
    $stmt->bindParam(':price', $products['price']);
    $stmt->bindParam(':quantity', $products['quantity']);
    $stmt->bindParam(':category_id', $products['category_id']);
    
    $stmt->execute();
}

/**
 * Get product list by category
 */
function get_products_by_category($category_id){
    global $pdo;

    $sql = "SELECT * FROM PRODUCTS WHERE CATEGORY_ID=:category_id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':category_id', $category_id);
    

    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC); 
     
    // Lấy danh sách kết quả
    $result = $stmt->fetchAll();
     
    $product_list = array();

    // Lặp kết quả
    foreach ($result as $row){
        $product_list[] = array(
            'id' => $row['id'],
            'image' => $row['image'],
            'name' => $row['name'],
            'productscol' => $row['productscol'],
            'description' => $row['description'],
            'price' => $row['price'],
            'category_id' => $row['category_id']
        );
    }
    
    return $product_list;
}


/**
 * Get product by name
 */
function get_products_by_name($name){
    global $pdo;

    $sql = "SELECT * FROM PRODUCTS WHERE NAME LIKE :name";
    $stmt = $pdo->prepare($sql);

    $name = "%$name%";
    $stmt->bindParam(':name', $name);
    

    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC); 
     
    // Lấy danh sách kết quả
    $result = $stmt->fetchAll();
     
    $product_list = array();

    // Lặp kết quả
    foreach ($result as $row){
        $product_list[] = array(
            'id' => $row['id'],
            'image' => $row['image'],
            'name' => $row['name'],
            'productscol' => $row['productscol'],
            'description' => $row['description'],
            'price' => $row['price'],
            'category_id' => $row['category_id']
        );
    }
    
    return $product_list;
}

/**
 * Get product related
 */
function get_products_related($product_id, $category_id){
    global $pdo;

    $sql = "SELECT * FROM PRODUCTS WHERE ID != :product_id AND CATEGORY_ID = :category_id LIMIT 4";
    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':product_id', $product_id);
    $stmt->bindParam(':category_id', $category_id);
    

    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC); 
     
    // Lấy danh sách kết quả
    $result = $stmt->fetchAll();
     
    $product_list = array();

    // Lặp kết quả
    foreach ($result as $row){
        $product_list[] = array(
            'id' => $row['id'],
            'image' => $row['image'],
            'name' => $row['name'],
            'productscol' => $row['productscol'],
            'description' => $row['description'],
            'price' => $row['price'],
            'category_id' => $row['category_id']
        );
    }
    
    return $product_list;
}

function update_products($products){
    global $pdo;
    $sql = "UPDATE PRODUCTS SET IMAGE=:image, NAME=:name,DESCRIPTION=:description, PRICE=:price, QUANTITY=:quantity,CATEGORY_ID=:category_id WHERE ID=:id";
    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':id', $products['id']);
    $stmt->bindParam(':image', $products['image']);
    $stmt->bindParam(':name', $products['name']);
    $stmt->bindParam(':description', $products['description']);
    $stmt->bindParam(':price', $products['price']);
    $stmt->bindParam(':quantity', $products['quantity']);
    $stmt->bindParam(':category_id', $products['category_id']);
    
    $stmt->execute();
}
