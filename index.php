<!DOCTYPE html>
<html>
<head>  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,500;1,300&display=swap" rel="stylesheet"> 

<style !important>
  *{
			font-family: 'Poppins', sans-serif;
            text-align: center;
		}
        h3 {
            color: red;
            font-size: 2em;
        }
        p {
            color: blueviolet;
            font-size: 1.5em;
        }
        span{
            color: teal;
            font-size: 1.8em;
            font-weight: 600;
        }

</style>
	<title>Php Assignment </title>
</head>
<body>

<br>
     <h1  align="center"><b>Student Information</b></h1> 

     <table border="0" align="center" width="80%" cellpadding="10"
     style="border-collapse: collapse; background: #3c48a3; color: white; border-radius: 20px;" >
        <thead>
            <tr >
                <th>Student ID</th>
                <th>Full Name</th>
                <th>Class Name</th>
                <th>Department</th>
                <th>Course</th>
            </tr>
            <tbody border="1" style="color: #fff; border:  1;  background: navy;
            ; text-align: center;" >
                <tr>
                    <td>C120284</td>
                    <td>Proff Mohamett Tahliil Mohamuod</td>
                    <td>CA204</td>
                    <td>Computer Application</td>
                    <td>PHP & MySQL	</td>
                </tr>
            </tbody>
        </thead>
     </table>
<div>

<h3 >QUESTION One</h3>
<p>1.	Write a program that calculates all arithmetic operations (+, -, *, /, %).</p>
<h3 >Answer</h3>
<span>
<?php
/* Variable definition and assignment */
$a=10;
$b=20;
echo "The Sum of the two numbers is ". ($a+$b) . ".<br>";

// /Subtraction/
echo "The Difference of two numbers is ". ($a-$b) .".<br>";

// /Multiplication/
echo "The Product of the two numbers is ". ($a*$b) .".<br>";

// /Division/
echo "The Quotient of the two numbers is ". ($a/$b) .".<br>";

// /Modulus/
echo "The Remainder of the two numbers is " . ($a%$b) .".<br> .<br>";
?>
</span>

<h3 >QUESTION Two</h3>
<p>2.	Write a program that prints whether the number is divisible by 3, 5, both, or none of them.</p>
<h3 >Answer</h3>
<span>
<?php
// Declare two integer variables
$num1 = 10;
$num2 = 20;

// Use ternary operator to find the greatest number
$greatest = ($num1 > $num2) ? $num1 : $num2;

// Print the greatest number
echo "The greatest number is: " . $greatest .".<br>.<br>";
?>
</span>

<!-- Stop -->
<h3 >QUESTION Three</h3>
<p>3.	Write a program that compares four integer numbers then specifies and then prints the greatest and the smallest ones (do not use built-in function such as min or max).</p>
<h3 >Answer</h3>
<span>
<?php
$a = 10;
$b = 20;
$c = 15;

if ($a < $b) {
    if ($a < $c) {
        $smallest = $a;
        if ($b < $c) {
            $largest = $c;
        } else {
            $largest = $b;
        }
    } else {
        $smallest = $c;
        $largest = $b;
    }
} else {
    if ($b < $c) {
        $smallest = $b;
        if ($a < $c) {
            $largest = $c;
        } else {
            $largest = $a;
        }
    } else {
        $smallest = $c;
        $largest = $a;
    }
}
?>
</span>

<h3 >QUESTION Four</h3>
<p>4.	Write a program that prints whether the number is even (divisible by 2) or odd.</p>
<h3 >Answer</h3>
<span>
<?php
function checkEvenOrOdd($number) {
    if ($number % 2 == 0) {
       
      echo "The number $number is even." .".<br>";
    } else {
      echo "The number $number is odd." .".<br>";
    }
  }

  checkEvenOrOdd(7);
?> 
</span>

<!-- stop -->

<h3 >QUESTION Five</h3>
<p>5.	Write a program that calculates the factorial of a given number (for example, factorial of 5 = 120).</p>
<h3 >Answer</h3>
<span>
<?php
function checkDivisibility($number) {
    if ($number % 15 == 0) {
        echo $number . " " . "divisible by both 3 and 5." .".<br>";
    } elseif ($number % 3 == 0) {
        echo $number ."The number is divisible by 3." .".<br>";
    } elseif ($number % 5 == 0) {
        echo $number ."The number is divisible by 5." .".<br>";
    } else {
        echo $number ."The number is not divisible by 3 or 5." .".<br>";
    }
}

$number = 15; // Change this to the number you want to check
checkDivisibility($number);

?>
</span>

<h3 >QUESTION Six</h3>
<p>6. Write a program that prints odd numbers from 2 to 20.</p>
<h3 >Answer ODD</h3>
<span>
<?php
for ($i = 35; $i >= 7; $i--) {
    if ($i % 2 == 0) {
      
        echo $i . "\n" .".<br>";
    }
}
?>
</span>

<h3 >QUESTION Saven</h3>
<p>7.	Write a program that prints even numbers from 35 to 7.</p>
<h3 >Answer EVEN NUMBERS</h3>
<span>
<?php
for ($i = 2; $i <= 20; $i++) {
    if ($i % 2 == 1) {
      
        echo $i . "\n". "<br>";
    }
}
?>
</span>

<h3 >QUESTION Eight</h3>
<p>8.	Write a program that prints numbers divisible by 5 from 1 to 50.</p>
<h3 >Answer</h3>
<span>
<?php
for ($i = 1; $i <= 50; $i++) {
    if ($i % 5 == 0) {
      
        echo $i . " ". "<br>";
    }
}

?>
</span>

<h3 >QUESTION Nine</h3>
<p>9.	Write a program that prints numbers divisible by 2 and 5 at the same time from 50 to 2.</p>
<h3 >Answer</h3>
<span>
<?php
for ($i = 50; $i >= 2; $i--) {
    if ($i % 2 == 0 && $i % 5 == 0) {
        
        echo $i . " ". "<br>";
    }
}
?>
</span>

<h3 >QUESTION Ten</h3>
<p>10.	Write a program to find the reverse of a given number (for example, the reverse of 12345 = 54321, do not use any built-in function such as the strrev function).</p>
<h3 >Answer</h3>
<span>
<?php
    $num = 12345;
    $revNum = 0;
    while ($num > 0) {
        $revNum = ($revNum * 10) + ($num % 10);
        $num = ($num / 10);
    }
   
    echo $revNum ."<br>";


?>
</span>

<h3 >QUESTION 11</h3>
<p>11.	Write a program that calculates lowest common multiplier (LCM) of two positive integer numbers (for example, LCM of 8 and 12 = 24).</p>
<h3 >Answer</h3>
<span>
<?php
$a = 8;
$b = 12;
function gcd($a, $b) {
    if ($b == 0) {
        return $a;
    } else {
        return gcd($b, $a % $b) . "<br> <br>";
    }
}
?>
</span>

<h3 >QUESTION 12</h3>
<p>12.	Write a program to find common factors of two positive integer numbers (for example, common factors of 42 and 70 are: 2, 7 and 14).</p>
<h3 >Answer</h3>
<span>
<?php
function lcm($a, $b) {
    return ($a * $b);
}

$num1 = 8;
$num2 = 12;

echo "LCM of $num1 and $num2 is: " . lcm($num1, $num2) . "<br> <br>";
?>
</span>

<h3 >QUESTION 13</h3>
<p>13.	Write a program that calculates highest common factor (HCF) of two integer numbers (if any) (for example, HCF of 18 and 24 = 6).</p>
<h3 >Answer</h3>
<span>
<?php
function calculateHCF($num1, $num2) {
  
    if ($num2 != 0) {
        return calculateHCF($num2, $num1 % $num2);
    } else {
        return $num1;
    }
}
$num1 = 18;
$num2 = 24;
echo "HCF of $num1 and $num2 is: " . calculateHCF($num1, $num2) . "<br>";
?>
</span>

<h3 >QUESTION 14</h3>
<p>15.  QUESTION  factorial  </p>
<h3 >Answer</h3>
<span>
<?php
function factorial($number){ 
    $factorial = 1; 
    for ($i = 1; $i <= $number; $i++){ 
        $factorial = $factorial * $i; 
    } 
    return $factorial; 
} 

$number = 10; 
$fact = factorial($number); 
echo "QUESTION 14 <br>";
echo "Factorial = $fact". "<br> <br>"; 
?>
</span>

<h3 >QUESTION 15</h3>
<p>15.	Write a program to find all factors of a positive integer number (for example, factors of 42 are: 1, 2, 3, 6, 7, 14, 21 and 42).</p>
<h3 >Answer</h3>
<span>
<?php
echo "<table style='border-collapse: collapse'>"; // Start the table with some CSS

for ($i = 1; $i <= 12; $i++) {
    echo "<tr>"; // Start a new row

    for ($j = 1; $j <= 12; $j++) {
        $product = $i * $j;
        echo "<td style='border: 1px solid black; text-align: center; padding: 5px;'>" . $i . " x " . $j . " = " . $product . "</td>"; // Output the product in a styled cell
    }

    echo "</tr>"; // End the row
}

echo "</table>" . "<br><br>";
?>
</span>

<h3 >QUESTION 16</h3>
<p>16.	Write a program to find prime factors of a positive integer number (for example, prime factors of 42 are: 2, 3 and 7).</p>
<h3 >Answer</h3>
<span>
<?php
function isPrime($number) {
    if ($number <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}
$number = 31;
if (isPrime($number)) {
    echo "$number is a prime number.". "<br>";
} else {
    echo "$number is not a prime number.". "<br>";
}
?>
</span>

<h3 >QUESTION 17</h3>
<p>17.	Write a program that prints whether the number is a prime (whole number greater than 1 which is exactly divisible by itself and 1 but no other number) or non-prime.</p>
<h3 >Answer</h3>
<span>
<?php
function SPrime($num) {
    if ($num < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

for ($i = 10; $i <= 50; $i++) {
    if (SPrime($i)) {
        echo $i . " <br>";
    }
    
}
?>
</span>

<h3 >QUESTION 18</h3>
<p>18.	Write a program that produces a multiplication table (up to 12*12) using nested loops. Format the output in a table.</p>
<h3 >Answer</h3>
<span>
<?php
function Prime($number){
    if ($number == 1)
        return false;
    for ($i = 2; $i <= sqrt($number); $i++){
        if ($number % $i == 0)
            return false;
    }
    return true;
}
for ($i = 2; $i <= 25; $i++) {
    if (Prime($i)) {
        continue;
    }
    echo $i . "\n". "<br>";;
}
?>
</span>

<h3 >QUESTION 19</h3>
<p>19.	Write a program that prints prime numbers from 10 to 50.</p>
<h3 >Answer</h3>
<span>
<?php
function checkPrime($number) {
    if ($number < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

for ($i = 100; $i >= 6; $i--) {
    if (checkPrime($i)) {
        echo $i . "<br> ";
    }
    

}
?>
</span>

<h3 >QUESTION 20</h3>
<p>20.	Write a program that prints non-prime numbers from 90 to 12.</p>
<h3 >Answer</h3>
<span>
<?php
$start = 12;
$end = 90;
// Loop over each number in the range
for ($i = $start; $i <= $end; $i++) {
    // Assume the number is prime
    $isPrime = true;

    // Check if the number is divisible by any other number
    for ($j = 2; $j < $i; $j++) {
        if ($i % $j == 0) {
            // If it is divisible, it's not prime
            $isPrime = false;
            break;
        }
    }

    // If the number is prime, print it
    if ($isPrime) {
        echo $i . "\n". "<br>";;
    }
}
?>
</span>

<h3 >QUESTION 21</h3>
<p>21.	Write a program that prints Fibonacci series, a series of numbers in which each number is the sum of the two preceding numbers. For example, 0, 1, 1, 2, 3, 5, 8, 13, 21, 34, etc.</p>
<h3 >Answer</h3>
<span>
<?php
function solveQuadratic($a, $b, $c) {
    $discriminant = $b * $b - 4 * $a * $c;

    if ($discriminant < 0) {
        echo "This equation has imaginary roots.". "<br>";
    } elseif ($discriminant == 0) {
        $root = -$b / (2 * $a);
        echo "This equation has one root: $root". "<br>";
    } else {
        $root1 = (-$b + sqrt($discriminant)) / (2 * $a);
        $root2 = (-$b - sqrt($discriminant)) / (2 * $a);
        echo "This equation has two roots: $root1 and $root2". "<br>";
    }
}
solveQuadratic(1, -3, 2);
?>
</span>



<h2> End Thank You For Watching</h1>


</div>



</body>
</html>


