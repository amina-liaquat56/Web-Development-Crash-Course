<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>class 05</title>
</head>
<body>
    <?php
    
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

#while loop
$i = 1;

while ($i < 6) {
  echo $i;
  echo"<br>";
  $i++;
} 

#do while loop
do {
  echo $i;
  echo"<br>";
  $i++;
} while ($i < 6);

#foreach loop

$colors = array("red", "green", "blue", "yellow"); 

foreach ($colors as $x) {
  echo "$x <br>";
}

  
?>
</body>
</html>
