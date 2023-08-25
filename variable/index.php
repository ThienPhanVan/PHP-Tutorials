<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable</title>
</head>

<body>

    <?php
    $txt = "<h1>Hello world!</h1>";
    echo "This ", "string ", "was ", "made ", "with multiple parameters.";
    $x = 5;
    $y = 10.5;

    echo $txt;

    echo "x + y = ", $x + $y;
    print "x + y = $x + $y <br/>";


    // string
    $x = "Hello world! ";


    //integer 
    $x = 5985;
    var_dump($x);


    //float 
    $x = 598.5;
    var_dump($x);

    //boolean
    $x = true;
    $y = false;
    var_dump($x);


    //array
    $cars = array("Volvo", "BMW", "Vinfast");
    var_dump($cars);

    // doi tuong openssl_csr_get_subject
    class Car
    {
        public string $model;


        function __construct()
        {
            $this->model = "VW";
        }
    }

    // create an object
    $herbie = new Car();
    echo $herbie->model;


    //null
    $x = null;
    var_dump($x);
    ?>
</body>

</html>