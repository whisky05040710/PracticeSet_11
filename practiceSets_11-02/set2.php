<?php
    require ('vendor/autoload.php');

    $faker = Faker\Factory::create('en_PH');
    $conn = mysqli_connect('localhost','root','','faker');

    if(!$conn)
    {   
    die(mysqli_error());
    }  
     
    $faker = Faker\Factory::create();

    for ($i = 0; $i < 20; $i++) {

        $creditCardType= $faker->creditCardType;
        $creditCardNumber ="".$faker->ean13;
        $creditCardExpirationDate = $faker->date($format = 'Y-m-d H:i:s', $max = 'now');
        $userIdNumber = $faker->numberBetween(1, 100);
    
        $sql = "INSERT INTO faker.card (creditCardType, creditCardNumber, creditCardExpirationDate, userIdNumber) VALUES ( $creditCardType, $creditCardNumber, $creditCardExpirationDate, $userIdNumber)";
        mysqli_query($conn, $sql);
    }
    ?>
