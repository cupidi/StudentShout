<?php
$host = "localhost";
$dbname = "studentShout";
$user = "root";
$password = "";
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $sql = "
CREATE TABLE IF NOT EXISTS studentShout.themes (
  `theme_id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `value` VARCHAR(45) NOT NULL,
  `type` BOOLEAN NOT NULL,
  PRIMARY KEY (`theme_id`))
  ENGINE = InnoDB;
CREATE TABLE IF NOT EXISTS studentShout.posts (
  `post_id` INT NOT NULL AUTO_INCREMENT,
  `theme_id` INT NOT NULL,
  `content` VARCHAR(200) NOT NULL,
  `date` DATETIME NOT NULL,
  `type` INT NOT NULL,
  PRIMARY KEY (`post_id`),
  CONSTRAINT `theme_id`
    FOREIGN KEY (`theme_id`)
    REFERENCES studentShout.themes (`theme_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE
    )
  ENGINE = InnoDB;
CREATE TABLE IF NOT EXISTS studentShout.comments (
  `comment_id` INT NOT NULL AUTO_INCREMENT,
  `post_id` INT NOT NULL,
  `content` VARCHAR(200) NOT NULL,
  `date` DATETIME NOT NULL,
  PRIMARY KEY (`comment_id`),
  CONSTRAINT `post_id`
    FOREIGN KEY (`post_id`)
    REFERENCES studentShout.posts (`post_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE
    )
    ENGINE = InnoDB;
";
    $q = $conn->query($sql);
    $q->setFetchMode(PDO::FETCH_ASSOC);
} catch (PDOException $pe) {
    die("Could not connect to the database $dbname :" . $pe->getMessage());
}