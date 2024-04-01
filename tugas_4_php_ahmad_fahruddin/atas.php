<?php 
include_once 'webmenu.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Web Ahmad</title>
    <style>
        body {
            background-image: url('');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            color: black;
        }

        .menu-container {
            text-align: center;
            background-color: aqua;
            padding: 50px;
        }

        .menu-container a {
            color: black; 
            text-decoration: none; 
            margin: 0 10px; 
        }
    </style>
</head>
<body>
    <div class="menu-container">
        <!-- Home | Produk | Pesan | Galeri | Gesbuk -->
        <h1>Web Ahmad</h1>
        <?php 
            // Looping foreach dari web menu.php
            foreach ($menu_atas as $key => $value) {
                echo "<a href='$menu_bawah[$key]'>$value</a>";
            }
        ?>
    </div>
</body>
</html>
