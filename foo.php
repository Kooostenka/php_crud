<?php

require_once 'db.php';


$name = $_POST['name'];
$email = $_POST['email'];


//Create

if (isset($_POST["add"])) {
    $sql = ("INSERT INTO user_3(name, email) VALUES(?,?)");
    $query = $pdo->prepare($sql);
    $query->execute([$name, $email]);
    if ($query) {
        header("Location: ".$_SERVER['HTTP_REFERER']);
    }
}

//Read

$sql = $pdo->prepare("SELECT * FROM user_3");
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_OBJ);

//Update
$edit_name = $_POST["edit_name"];
$edit_email = $_POST['edit_email'];
$get_id = $_GET['id'];

if (isset($_POST['edit-submit'])) {
    $sql = ("UPDATE user_3 SET name=?, email=? WHERE id=?");
    $query = $pdo->prepare($sql);
    $query->execute([$edit_name, $edit_email, $get_id]);
    if ($query) {
        header("Location: ".$_SERVER['HTTP_REFERER']);
    }
}

//Delete

if (isset($_POST['delete'])) {
    $sql = ("DELETE FROM user_3 WHERE id = ?");
    $query = $pdo->prepare($sql);
    $query->execute([$get_id]);
    if ($query) {
        header("Location: ".$_SERVER['HTTP_REFERER']);
    }
}

?>