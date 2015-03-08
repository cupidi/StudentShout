<?php
include_once 'database.php';
if($_POST["post_id"] && $_POST["content"] && $_POST["date"]) {
    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
        $post_id = $_POST["theme_id"];
        $content = $_POST["content"];
        $date = $_POST["date"];
        $sql = $conn->prepare("INSERT INTO comments(post_id,content,date)
                                VALUES('$post_id','$content','$date','$type')");
    } catch (PDOException $pe) {
        die("Could not connect to the database $dbname :" . $pe->getMessage());
    }
}
?>