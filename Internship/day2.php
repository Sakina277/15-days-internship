<?php

echo "hello world"."<br>";
?>

<?php
$name="sakina";
echo $name."<br>";
echo isset($name)."<br>";

?>
<?php
$num=123;
$temp=$num;
$reverse=0;
$rem;

while($temp){
    $rem=$temp%10;
    $reverse= $reverse*10 + $rem;
    $temp=$temp/10;
}
if($reverse == $num){
    echo "number is palindrome";
}else{
    echo "number is not palindrome";
}

?>