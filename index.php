<!-- Descrizione:
Create un array di 10 dischi (con, per ciascun disco, informazioni su titolo, autore, anno, genere e percorso della copertina) in un file database.php.
Importate questo file in un file index.php nel quale stampare, lato server, una card per ogni disco. -->

<?php
    require 'db/database.php';
    // var_dump($albums);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Music Streaming</title>
</head>
<body>
    <header>
     <div class="logo">
         <img src="img/vinyl.png" alt="logo">
     </div>
    </header>
    <main>
        <div class="container">
            <?php
                foreach ($albums as $album) { ?>
                    <div class="card">
                        <div class="img"><img src="<?php echo $album["copertina"]?>" alt="<?php echo $album["titolo"]?>"></div>
                        <div class="text">
                            <h1><?php echo $album["titolo"]?></h1>
                            <h2><?php echo $album["autore"]?></h2>
                            <h5><?php echo $album["anno"]?></h5>
                            <h6><?php echo $album["genere"]?></h6>
                        </div>
                    </div>
                <?php };
            ?>
        </div>
    </main>
    <footer>

    </footer>
</body>
</html>