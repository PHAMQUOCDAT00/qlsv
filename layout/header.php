<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Quản lý sinh viên</title>
    <link rel="stylesheet" href="../public/vendor/bootstrap-4.5.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/vendor/fontawesome-free-5.15.1-web/css/all.min.css">
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="shortcut icon" href="../public/favicon.ico" type="image/x-icon">
</head>

<body>
    <?php
    $request_url = $_SERVER['REQUEST_URI'];
    // trim($request_url, '/'): Xóa dấu / trước và sau chuỗi
    $request_url = trim($request_url, '/');
    // explode('/', $request_url): cắt chuỗi dựa vào dấu /
    $temp = explode('/', $request_url);
    $component = $temp[0];
    ?>
    <div class="container" style="margin-top:20px;">
        <a href="../student" class="<?= $component == 'student' ? 'active' : '' ?> btn btn-info">Students</a>
        <a href="../subject" class="<?= $component == 'subject' ? 'active' : '' ?> btn btn-info">Subject</a>
        <a href="../register" class="<?= $component == 'register' ? 'active' : '' ?> btn btn-info">Register</a>
        <?php
        session_start();
        $message = '';
        $class = '';
        if (!empty($_SESSION['success'])) {
            $message = $_SESSION['success'];
            unset($_SESSION['success']);
            $class = 'alert-success';
        } else if (!empty($_SESSION['error'])) {
            $message = $_SESSION['error'];
            unset($_SESSION['error']);
            $class = 'alert-danger';
        }

        ?>
        <?php if ($message) : ?>
            <div class="alert <?= $class ?> mt-3"><?= $message ?></div>
        <?php endif ?>