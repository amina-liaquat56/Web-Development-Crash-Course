<?php

        # Conditional Statement

          #   if statement

      $number = 8;

      if ($number % 2 == 0) {

        echo "$number is even.";
      }


          # if else statement

       $isLoggedIn = false;

       if ($isLoggedIn) {

        echo "Welcome back!";
       }
       else{
        echo "Please Log in";
       }

         # if else if statement

       $age = 65;

       if ($age < 12 ){

        echo "Child ticket: $5";
       }
       elseif($age < 60 ){

        echo "Adult ticket: $10";
       }
       else{

        echo "Senior ticket: $7";
       }
           
        # switch statement

       $theme = "dark";

       switch ($theme){
        case "light":
            echo "Light theme is selected";
        break;
        case "dark":
            echo "Dark theme is selected";
        break;
        case "blue":
            echo "Blue theme is selected";
        break;

        default:
            echo "Default theme";

       }

         # Loops in PHP

       # For loop

   for ($i = 1; $i < 10; $i += 2) {
    echo "$i is an odd number<br>";
}

     # While loop

  // Print countdown from 5
$count = 5;

while ($count >= 1) {
    echo "Countdown: $count<br>";
    $count--;
}

    # do while loop

// Ask password until correct
$password = "admin";
$userInput = "123"; // test input

do {
    echo "Wrong password!<br>";
    $userInput = "admin"; // Simulate correct input
} while ($userInput != $password);

echo "Access granted.";

    # for each loop

$fruits = ["Apple", "Banana", "Cherry"];

foreach ($fruits as $fruit) {
    echo "I like $fruit<br>";
}

$person = [
    "Name" => "Amina",
    "Age" => 24,
    "City" => "Faisalabad"
];

foreach ($person as $key => $value) {
    echo "$key: $value<br>";
}

   ?>
