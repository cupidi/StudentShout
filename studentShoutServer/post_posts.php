<?php
include_once 'database.php';

    try {
		$data = json_decode(file_get_contents('php://input'), true);
        $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);
        $theme_id = $data["theme_id"];
        $content = $data["content"];
        $date = date('Y-m-d H:i:s');
        $type = $data["type"];
        $sql = $conn->prepare("INSERT INTO posts(theme_id,content,date,type)
                                VALUES('$theme_id','$content','$date','$type')");
		$sql->execute();
    } catch (PDOException $pe) {
        die("Could not connect to the database $dbname :" . $pe->getMessage());
    }

?>