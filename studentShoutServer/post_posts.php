<?php
include_once 'database.php';
if($_POST["theme_id"] && $_POST["content"] && $_POST["date"] && $_POST["type"]) {
    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
        $theme_id = $_POST["theme_id"];
        $content = $_POST["content"];
        $date = $_POST["date"];
        $type = $_POST["type"];
        $sql = $conn->prepare("INSERT INTO posts(theme_id,content,date,type)
                                VALUES('$theme_id','$content','$date','$type')");
    } catch (PDOException $pe) {
        die("Could not connect to the database $dbname :" . $pe->getMessage());
    }
}
?>