
<?php
require_once __DIR__ . '/database.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DISCHI-PHP</title>
    <link rel="stylesheet" href="./main.css">
</head>
<body>

    <header class="header">
        <section class="container">
            <img class="logo" src="./logo.png" alt="logo">
        </section>

    </header>

    <main>
        <section class="vetrina ">

             <?php foreach ($database as $value) {?>
                    <div class="copertina">
                        <img class='img-copertina' src= <?php echo $value['poster'] ?> alt="">
                        <h3> <?php echo $value["title"]; ?></h3>
                        <p class=" f13"> <?php echo $value["author"]; ?></p>
                        <p> <?php echo $value["year"]; ?></p>
                        <p class=" f13"> <?php echo $value["genre"]; ?></p>

                    </div>
               <?php }?>

        </section>
    </main>






</body>
</html>