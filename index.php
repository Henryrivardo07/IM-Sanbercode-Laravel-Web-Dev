<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <?php
         require_once 'animal.php';
         require_once 'ape.php';
         require_once 'frog.php';
          
         $sheep = new Animal("sheep");
         echo "Name: " . $sheep->name;
         echo "<br>";
         echo "legs: " . $sheep->legs;
         echo "<br>";
         echo "cold blooded: " . $sheep->cold_blooded;
         echo "<br>";
        echo "<br>";

        $Frog = new Frog("Buduk");
        echo "Name: " . $Frog->name;
        echo "<br>";
        echo "legs: " . $Frog->legs;
        echo "<br>";
        echo "cold blooded: " . $Frog->cold_blooded;
        echo "<br>";
        echo "Jump: ";
        $Frog->jump();
    echo "<br> <br>";
    

        $ape = new Ape("Kera Sakti");
        echo "Name: " . $ape->name;
        echo "<br>";
        echo "legs: " . $ape->legs;
        echo "<br>";
        echo "cold blooded: " . $ape->cold_blooded;
        echo "<br>";
        echo "Yell: ";
        $ape->yell();
        ?>
    </main>
</body>
</html>