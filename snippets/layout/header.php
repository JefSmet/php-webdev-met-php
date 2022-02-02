<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $res[$page.'.title'] ?? 'My consulting website'; ?></title>
    <meta name="description" content="My company website bla bla bla"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="/resources/css/bootstrap.min.css" rel="stylesheet">
    <link href="/resources/css/main.css" rel="stylesheet">
    <link href="/resources/css/responsive.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="/resources//resources/images/favicon.png" type="image/x-icon">
    <link rel="icon" href="/resources//resources/images/favicon.png" type="image/x-icon">
    <meta name="msapplication-TileImage" content="/resources//resources/images/favicon.png" />
</head>

<body>

<div class="page-wrapper">

    <!-- Main Header-->
    <header class="main-header<?= parseClass($page, $headerStyles); ?>">

		<?php include('snippets/components/topbanner.php'); ?>
    	<?php include('snippets/components/navigation.php'); ?>

    </header>
    <!--End Main Header -->
