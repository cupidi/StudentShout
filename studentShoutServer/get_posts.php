<?php
include_once 'database.php';
try {
    $return_arr = array();
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $sql = $conn->prepare("SELECT * FROM posts");
    $sql->setFetchMode(PDO::FETCH_OBJ);
    $sql->execute();
    while ($row = $sql->fetch(PDO::FETCH_ASSOC)){
        $row_array['post_id'] = $row['post_id'];
        $row_array['content'] = $row['content'];
        $a = $row['theme_id'];
        $sql2 = $conn->prepare("SELECT name FROM themes,posts WHERE themes.theme_id = $a");
        $sql2->setFetchMode(PDO::FETCH_OBJ);
        $sql2->execute();
        $row2 = $sql2->fetch(PDO::FETCH_ASSOC);
        $row_array['name'] = $row2['name'];
        $row_array['date'] =  $row['date'] ;
        $row_array['type'] =  $row['type'] ;
        array_push($return_arr,$row_array);
    }
    echo json_encode($return_arr);
} catch (PDOException $pe) {
    die("Could not connect to the database $dbname :" . $pe->getMessage());
}
?>