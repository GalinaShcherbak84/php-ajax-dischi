<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--  style -->
    <link rel="stylesheet" href="./style.css">
    <!-- font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,500;1,300&display=swap" rel="stylesheet">
</head>
<body>
   <?php
        include __DIR__ . './script.php';
        //var_dump($database);
    ?>
    <div class="app">
        <!-- header -->
        <header>
            <img src="./php-dischi/logo.png" alt="">
        </header>
        <!-- main -->
        <div class="container">
            <!-- disco -->
            
                <?php foreach($database as $card){ ?>
                    <div class="card">
                    <img src="<?php echo $card['poster']; ?>" alt="">
                    <h3> <?php echo $card['title']; ?> </h3>
                    <p> <?php echo $card['author']; ?> </p>
                    <h3> <?php echo $card['year']; ?> </h3>
                    <p> <?php echo $card['genre']; ?> </p>
                    </div>
                <?php } ?>
                
        </div>
    </div>
</body>
</html>