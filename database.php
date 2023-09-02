<?php
session_start();
$con = new PDO('mysql:host=localhost;dbname=todo_app', 'root', '');

if (isset($_GET['user_id']) && (!isset($_SESSION['user_id']) ||  $_SESSION['user_id'] != $_GET['id'])) {
    deleteUser($con, $_GET['user_id']);
    $_SESSION['user_id'] = $_GET['user_id'];
    var_dump($_SERVER);
}

$users = getUsers($con);

require('./users.php');

function getUsers($con)
{
    $sql = $con->query('SELECT * FROM users');
    return $sql->fetchAll(PDO::FETCH_ASSOC);
}
function deleteUser($con, $id)
{
    $sql = $con->prepare("DELETE FROM users where id = $id");
    return $sql->execute();
}