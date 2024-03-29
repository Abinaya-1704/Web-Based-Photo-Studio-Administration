<!DOCTYPE html>
<html>
<body>

<?php
$str = "Visit W3Schools W3Schools w3schools w3schools  w3schoo2ls ";
$pattern = "/W3Schools/i";
echo preg_match($pattern, $str); //1(found or not)
echo preg_match_all($pattern, $str);  //count of occurrences


$str1 = preg_replace($pattern, "myschool", $str,2);

echo $str;
echo "<br/>";
echo $str1;


echo "------------------------------------------------<br/>";


$str = "Visit india  indira indian indy sindia";
$pattern = "/\bindi/i"; //here 'i' is case insensitive , \b is for beginning
echo preg_match($pattern, $str); //1(found or not)
echo preg_match_all($pattern, $str);  //count of occurrences



$str = "Visit 9090 9090909090 8989897867 8989897878 indira indian indy sindia";
$pattern = "/\d{10}/"; //here 'i' is case insensitive , \b is for beginning
echo preg_match_all($pattern, $str,$elementsfound); //1(found or not)
echo "<br/>Mobile no is " ;

#print_r($elementsfound);

echo $elementsfound[0][1];


//echo "Elements are :";
/*
for($i=0;$i<count($elementsfound);$i++)
{
echo $elementsfound[$i] . "<br/>";
}
*/



//echo preg_match_all($pattern, $str);  //count of occurrences


?>

</body>
</html>
