<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>class 03</title>
</head>
<body>
    <?php
        
        // Local and Global variables

    $x = 5;          #  global scope
    echo $x;
    function assignx()
     {
        $x = 2;       # local scope
        echo $x;
     }
    
    
    assignx ();

            //  Operators in PHP

        //    Arithmetic Operators

$a = 10;
$b = 3;

echo $a + $b; // 13
echo $a - $b; // 7
echo $a * $b; // 30
echo $a / $b; // 3.333...
echo $a % $b; // 1 (remainder)
echo $a ** $b; // 1000 (10^3)


            //   Assignment Operators

$a = 5;     // Assign 5 to $a

$a += 2;    // $a = $a + 2 → $a becomes 7
$a -= 1;    // $a = $a - 1 → $a becomes 6
$a *= 3;    // $a = $a * 3 → $a becomes 18
$a /= 6;    // $a = $a / 6 → $a becomes 3
$a %= 2;    // $a = $a % 2 → $a becomes 1       

            // Comparision operators

$a = 5;
$b = "5";

var_dump($a == $b);   // true (same value)
var_dump($a === $b);  // false (different type)
var_dump($a != $b);   // false
var_dump($a !== $b);  // true
var_dump($a > 3);     // true
var_dump($a < 10);    // true
var_dump($a >= 5);    // true
var_dump($a <= 4);    // false
var_dump(5 <=> 5);    // 0 (equal)
var_dump(5 <=> 3);    // 1 (left is greater)
var_dump(3 <=> 5);    // -1 (left is smaller)

            //    Logical operators

$a = true;
$b = false;

var_dump($a && $b);   // false (both must be true)
var_dump($a || $b);   // true (one is true)
var_dump(!$a);        // false (not true)
var_dump($a xor $b);  // true (only one is true)

    ?>
 

</body>
</html>
