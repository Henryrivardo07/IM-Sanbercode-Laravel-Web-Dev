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
          class Animal {

            public $legs = 4;
            public $cold_blooded = "no";

            public $name;
            public function __construct($string){
                $this->name = $string;
            }
          }
        ?>
    </main>
</body>
</html>