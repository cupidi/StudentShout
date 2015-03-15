<?php
include_once 'database.php';
if($_GET["id"]) {
    try {
        $return_arr = array();
        $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);
        $a = $_GET["id"];
        $sql = $conn->prepare("SELECT * FROM comments WHERE post_id = $a");
        $sql->setFetchMode(PDO::FETCH_OBJ);
        $sql->execute();
        while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
            $row_array['comment_id'] = $row['comment_id'];
            $row_array['post_id'] = $row['post_id'];
            $row_array['content'] = $row['content'];
            $row_array['date'] = $row['date'];
            array_push($return_arr, $row_array);
        }
        echo json_encode($return_arr);
    } catch (PDOException $pe) {
        die("Could not connect to the database $dbname :" . $pe->getMessage());
    }
}
?>