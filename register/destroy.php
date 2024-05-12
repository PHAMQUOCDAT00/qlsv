<?php
require '../config.php';
require '../connectDb.php';
$id = $_GET['id'];

$sql = "DELETE FROM subject WHERE id=$id";
session_start();
if ($conn->query($sql)) {
    $_SESSION['success'] = 'Đã xóa môn học thành công';
    header('location: index.php');
    exit;
}
$_SESSION['error'] = $sql . '<br>' . $conn->error;
header('location: index.php');
