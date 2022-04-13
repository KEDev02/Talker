<?php
$website = 'http://www.google.at';
?>

<!DOCTYPE html>  
<head>  
 <title>Hello World!</title>
</head>

<body>  
 <h1>Hello World!</h1>
 <a href="<?php echo $website; ?>"><?php echo "Google Websearch: $website"; ?></a>
 <?php
 $trueValue = true;
 $falseValue = false;
 ?>
 <p><?php echo "This is the Value of trueValue: $trueValue"; ?></p>
 <p><?php echo "This is the Value of falseValue: $falseValue"; ?></p>

 <p>
     <?php
     $countries = array('Finland', 'France', 'Spain');
     print_r($countries);
     $countries[] = 'Italy';
     print_r($countries);
     ?>
 </p>

 <script>
     var cars = ["Mercedes", "Volvo", "BMW", "Tesla"];
     for (i in cars) {
         console.log("The current car is " + cars[i]);
     }
 </script>

 <?php
    $cars = ["Mercedes", "Volvo", "BMW", "Tesla"];
    foreach ($cars as $i) {
        echo "The current car is $i<br>";
    }
 ?>

 <p>
     <?php
        class carBluePrint {
            //Properties and Methods
            
            //Constructor
            public function __construct($newColor, $newMake) {
                $this->color = $newColor;
                $this->make = $newMake;
            }

            //setter method
            public function setColor($newColor) {
                $this->color = $newColor;
            }

            //getter method
            public function getColor() {
                return "<br>New color is: " . $this->color . "<br>";
            }
        }

        $firstRealCar = new carBluePrint('green', 'Volvo');
        var_dump($firstRealCar);
        echo $firstRealCar->color;
        echo $firstRealCar->getColor();

        $secondRealCar = new carBluePrint('brown', 'Mercedes');
        echo $secondRealCar->getColor();
        var_dump($secondRealCar);
     ?>
 </p>

 <p>
    <?php
        class sportsCarBluePrint extends carBluePrint {
            //constructor
            public function __construct($newColor, $newMake, $newSpoiler) {
                parent::__construct($newColor, $newMake);
                $this->spoiler = $newSpoiler;
            }

            public function activateSpoiler() {
                return "<br><strong>SPOILER ACTIVE</strong><br>";
            }
        }

        $firstSportCar = new sportsCarBluePrint('magenta', 'Porsche', 'tail');
        $firstSportCar->setColor("PINK");
        var_dump($firstSportCar);
        $firstSportCar->activateSpoiler();
    ?>
 </p>

</body>