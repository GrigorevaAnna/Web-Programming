<?php
/* Imagine a lot of code here */
$very_bad_unclear_name = "15 chicken wings";


// Write your code here:
$order = &$very_bad_unclear_name;
$order .= " and the same number of legs";

// Don't change the line below

echo "\nYour order is: $very_bad_unclear_name.";

/*-------------------------------------*/
          /*Numbers*/

$first_number = 19;
echo "\n$first_number";

$second_number = 19.5;
echo $second_number;

echo "\n";
echo 19 - 7;

$last_month = 1187.23;
$this_month = 1089.98;
$difference = $last_month - $this_month;
echo "\n$difference";

/*-------------------------------------*/
     /*Multiplication and division*/

$num_languages = 4;
$months = 11;

$days = $months * 16;

$days_per_language = $days / $num_languages;
echo "\n$days_per_language";

/*-------------------------------------*/
               /*Degree*/

echo "\n";
echo 8 ** 2;

/*-------------------------------------*/
        /*Assignment operators*/

$my_num = 19;
$answer = $my_num;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $my_num;
echo "\n$answer";

/*-------------------------------------*/
      /*Mathematical functions*/

$a = 10;
$b = 3;
$c = $a % $b;
echo "\n$c";

/*-------------------------------------*/

$a = 20;
$b = 2;
if ($a % $b == 0) {
    echo "\nДелится";
}
else {
    echo "\nДелится с остатком";
}

/*-------------------------------------*/

$st = (pow(2, 10));
$sqrt = sqrt(245);
echo "\n$st";
echo "\n$sqrt";


$array = [4, 2, 5, 19, 13, 0, 10];
$sum = 0;
foreach ($array as $k) {
    $sum += $k ** 2;
}
$sqrt = sqrt($sum);
echo "\n$sqrt";
