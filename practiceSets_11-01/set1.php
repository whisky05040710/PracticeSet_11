<?php
    require ('vendor/autoload.php');

    $faker = Faker\Factory::create();
    $conn = mysqli_connect('localhost','root','','faker');

    if(!$conn)
    {   
    die(mysqli_error());
    }  
     
    $faker = Faker\Factory::create();
    for ($i = 1; $i <= 200; $i++) {
        
    
        $email = mysqli_real_escape_string($conn, $faker->email);
        $lastname = mysqli_real_escape_string($conn, $faker->lastname);
        $firstname = mysqli_real_escape_string($conn, $faker->firstname);
        $username = mysqli_real_escape_string($conn, $faker->username);
        $password = mysqli_real_escape_string($conn, $faker->password);

        $sql = "INSERT INTO faker.names(email, lastname, firstname, username, password) VALUES ('$email','$lastname','$firstname','$username', '$password')";
        mysqli_query($conn, $sql);
    }   
?>
