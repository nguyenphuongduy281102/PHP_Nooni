<?php
require_once 'mysql.php';
$pdo = get_pdo();

function get_all_users(){
    global $pdo;

    $sql = "SELECT * FROM USERS";
    $stmt = $pdo->prepare($sql);
    

    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC); 
     
    // Lấy danh sách kết quả
    $result = $stmt->fetchAll();
     
    $user_list = array();

    // Lặp kết quả
    foreach ($result as $row){
        $user = array(
            'id' => $row['id'],
            'email' => $row['email'],
            'password' => $row['password'],
            'role' => $row['role'],
        );
        array_push($user_list, $user);
    }
    
    return $user_list;
}

function delete_users($user_id){
    global $pdo;

    $sql = "DELETE FROM USERS WHERE ID=:id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $user_id);

    $stmt->execute();

}

function insert_users($user){
    global $pdo;
    $sql = "INSERT INTO USERS(ID, EMAIL, PASSWORD, ROLE) VALUES(NULL, :email, :password, :role)";
    $stmt = $pdo->prepare($sql);
    
   
    $stmt->bindParam(':email', $user['email']);
    $stmt->bindParam(':password', $user['password']);
    $stmt->bindParam(':role', $user['role']);

    $stmt->execute();
}

function get_user($user_id){
    global $pdo;

    $sql = "SELECT * FROM USERS WHERE ID=:id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $user_id);
    

    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC); 
     
    // Lấy danh sách kết quả
    $result = $stmt->fetchAll();

    // Lặp kết quả
    foreach ($result as $row){
        return array(
            'id' => $row['id'],
            'email' => $row['email'],
            'password' => $row['password'],
            'role' => $row['role']
        );
    }

    return null;
}

function update_users($user){
    global $pdo;
    $sql = "UPDATE USERS SET EMAIL=:email, PASSWORD=:password, ROLE=:role WHERE ID=:id";
    $stmt = $pdo->prepare($sql);

   
    $stmt->bindParam(':id', $user['id']);
    $stmt->bindParam(':email', $user['email']);
    $stmt->bindParam(':password', $user['password']);
    $stmt->bindParam(':role', $user['role']);

    $stmt->execute();
}

function get_by_email_users($email){
    global $pdo;

    $sql = "SELECT * FROM USERS WHERE EMAIL=:email";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':email', $email);
    

    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC); 
     
    // Lấy danh sách kết quả
    $result = $stmt->fetchAll();

    // Lặp kết quả
    foreach ($result as $row){
        return array(
            'id' => $row['id'],
            'email' => $row['email'],
            'password' => $row['password'],
            'role' => $row['role']
        );
    }

    return null;
}

function get_all_users_customers(){
    global $pdo;

    $sql = "SELECT COUNT(id) as user
    FROM users
    WHERE ROLE = 'user';";
    $stmt = $pdo->prepare($sql);

    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC); 
     
    // Lấy danh sách kết quả
    $result = $stmt->fetchAll();
     
    $users_list = array();

    // Lặp kết quả
    foreach ($result as $row){
        $users= array(
            'user' => $row['user']
        );
        array_push($users_list, $users);
    }
    
    return $users_list;
}