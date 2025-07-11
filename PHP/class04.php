<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class 04</title>
</head>
<body>

           <!-- Conditional Statements in PHP -->
    <?php
      
            #if Statement
    $age = 18;

    if ( $age >= 18) {
       
        echo "You are an adult.";
    }

         # if else Statement

    $age = 15;

    if ($age >= 18) {

        echo "You can vote";
    }
    else {

        echo "You are too young to vote";
    }

        # The else if statement

    $marks = 75;

    if ($marks >= 90) {

       echo "Grade: A+";

    } elseif ($marks >= 80) {

        echo "Grade: A";

    } elseif ($marks >= 70) {

        echo "Grade: B";

    } else {

       echo "Grade: C or below";
    }

              # Switch Statement 

   $day = "Tuesday";

   switch ($day) {
    case "Monday":
        echo "Start of the week!";
        break;
    case "Tuesday":
        echo "Second day of the week.";
        break;
    case "Friday":
        echo "Almost weekend!";
        break;
    default:
        echo "It's just another day.";
    }

          # Loops in PHP

        # For loop

    for ($i = 1; $i <= 5; $i++) {
    echo "Iteration: $i <br>";
    }
#for loop
$a = 0; 
$b = 0; 
for( $i=0; $i<5; $i++ ) 
{  
    #$a = $a+10
$a += 10; 
$b += 5; 
} 
echo ("At the end of the loop a=$a and b=$b" );           
    ?>
</body>
</html>
