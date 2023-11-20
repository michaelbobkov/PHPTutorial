<?php
    session_start();
    if($_SERVER['QUERY_STRING'] == 'noname'){
        session_unset();
    }
    $name = $_SESSION['name'] ?? 'Guest';

    $gender =$_COOKIE['gender'] ?? 'Unknown';
?>
<head>
    <title>Products</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style type="text/css">
        .brand{
            background: #77ff !important;
        }
        .brand-text{
            color: #77ff !important;
        }
        form{
            max-width: 460px;
            margin: 20px auto;
            padding: 20px;
        }
        .image{
            width: 100px;
            margin: 40px auto 0px;
            display: block;
            position: relative;

        }
    </style>
</head>
<body class="grey lighten-4">
<nav class="white z-depth-0">
    <div class="container">
        <a href="index.php" class="brand-logo brand-text">Order Products</a>
        <ul id="nav-mobile" class="right hide-on-small-and-down">
            <li class="grey-text">Hello, <?php echo htmlspecialchars($name) ?></li>
            <li class="grey-text">(<?php echo htmlspecialchars($gender) ?>)</li>
            <li><a href="add.php" class="btn brand z-depth-0">Add a Product</a></li>
        </ul>
    </div>
</nav>