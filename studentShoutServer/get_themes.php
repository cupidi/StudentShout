<?php
include_once 'database.php';
try {
    $return_arr = array();
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $sql = $conn->prepare("SELECT * FROM themes");
    $sql->setFetchMode(PDO::FETCH_OBJ);
    $sql->execute();
    while ($row = $sql->fetch(PDO::FETCH_ASSOC)){
        $row_array['theme_id'] = $row['theme_id'];
        $row_array['name'] = $row['name'];
        $row_array['value'] =  $row['value'] ;
        $row_array['type'] =  $row['type'] ;
        array_push($return_arr,$row_array);
    }
    echo json_encode($return_arr);
} catch (PDOException $pe) {
    die("Could not connect to the database $dbname :" . $pe->getMessage());
}
?>