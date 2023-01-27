<?php

require 'class/classPDO.php';

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="./assets/images/svg/icone.svg">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Programmation Orientée Objet</title>
</head>

<body>
    <header></header>
    <main>

        <div class="preloader">
            <span class="loader"></span>
        </div>

        <h1>Programmation orientée objet</h1>

        <p>

            <?php
        require 'class/classAnimal.php';

        $animal = new Animal("Chat");
        $animal->manger();
        $animal->deplacer();
        $animal->parler();
        
    ?>

        </p>
    </main>

    <footer>
        <p>Copyright &copy; <script>
            document.write(new Date().getFullYear())
            </script> Enzo Tang. All Rights Reserved.</p>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./assets/js/script/main.js"></script>
</body>

</html>