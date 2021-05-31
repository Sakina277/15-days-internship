<?php

// Numeric Array
$fruits=["banana","mango","apple","papaya"];
echo "<pre>" ;
var_dump($fruits);
echo "</pre>" ;

for($i=0;$i<count($fruits);$i++){
  echo "<br>".$fruits[$i];
}


// Associative Array

$person=[

      "name"=>"sakina",
      "qualification"=>"BE",
      "age"=>"21"

        ];
        var_dump($person)."<br>";


        foreach($person as  $i=>$value){
          echo  "<br>".$i."".$value;
        }
        echo "<br>";



// 1) methods of array 
// count()..count number of element in the array 
$arr=["c","php","android","java","php"];
echo count($arr);
echo "<br>";

// 2)array_count_values()
// this function return associative array with the array value as the key and their counts in the value here c is one times php is 2 times so this 1 , 2 is counts
$newarray= array_count_values($arr);
foreach($newarray as $key=>$value){
  echo "<br>".$key."".$value;
  // o/p=c 1  php 2  java 1 android 1

}
echo '<br>';
echo '<br>';


// 3)array_sum()
     // sum of all the values within an array
$sum=[10,20,30,40,50];
echo array_sum($sum);

echo '<br>';
echo '<br>';
// 4)array_product()
echo array_product($sum);

echo '<br>';
echo '<br>';

// 5)array_reverse()
print_r(array_reverse($sum));
echo '<br>';
echo '<br>';

// 6)in_array
// look certain value exit return true(1)/false(0)

$inarray=["c","php","java","android","pyhton"];
echo in_array("php",$inarray);

echo '<br>';
echo '<br>';

// 7) array_rand()
// return array index randomly select one or more keys from array at random
// echo array_rand($sum);
echo '<br>';
echo '<br>';

// 8)select multiple keys at random
$random= array_rand($inarray ,2);
foreach($random as $key=>$value){
  echo  "<br>".$key."".$inarray[$value];
}
echo '<br>';
echo '<br>';

// 9) array_unique()
// remove all duplicate values from an array
print_r(($arr));
echo '<br>';
echo '<br>';

// 10)array_merge()
$arr1=["c","c++","android","php","javascript"];
$arr2=["java","laravel","Django"];
$merg=array_merge($arr1 ,$arr2);
var_dump($merg);
echo '<br>';
echo '<br>';


// 11)_array_search()
// o.p 3
echo array_search("php", $arr1);
echo '<br>';
echo '<br>';

// 12)range()
// create a new array using a specified range u can use letter or number as 
// o/p 0a 1b 2c ...............25z
$arr3=range("a","z");
foreach($arr3 as $key=>$value){
  echo "<br>".$key.$value;
}
echo '<br>';
echo '<br>';

// 13)sort()
// sort an array by its value from lowest to highest
// it will sort letters and numbers in ascending order

$arr4=[80,60,50,40,8,74];
 sort($arr4);
 print_r($arr4);
 echo '<br>';
 sort($inarray);
 print_r($inarray);//[0]android [1]c [2]java...

 echo '<br>';
echo '<br>';


// 14)rsort() 
// sorting in descending order
rsort($arr4);
print_r($arr4);
echo '<br>';
echo '<br>';

//15) asort()
// sort according to value
$asso=["name"=>"sakina","age"=>21,"degree"=>"BE","car"=>"none"];
asort($asso);
print_r($asso);
echo '<br>';
echo '<br>';

// 16)ksort()
// sort according to its key
ksort($asso);
print_r($asso);
echo '<br>';
echo '<br>';

//17) krsort()
// sort an array in reverse according to the key
krsort($asso);
print_r($asso);
echo '<br>';
echo '<br>';


// 18)shuffle()
// randomly suffle the order of element in the array;
// sakina none 21 BE
shuffle($asso);
foreach($asso as $value){
  "<br>".print_r($value);
}
echo '<br>';
echo '<br>';


//19) array_key_exists()
// return true/false
// take 2 parameters  1st is key that u wish to find out and 2nd is  target array
echo array_key_exists("age", $asso);
echo '<br>';
echo '<br>';

// 20)array_combine
// used to craete an array by using 1 array as key and other one as value
// Array ( [0] => comb1 [1] => comb2 [2] => comb3 )
$arrcomb1=["comb1","comb2","comb3"];
$arrcomb2=[0,1,2];
// $newone= array_combine(keys, values);
$newone=array_combine($arrcomb2, $arrcomb1);
print_r($newone);

echo '<br>';
echo '<br>';

//21) end()
// return value of the last element in array
//   o/p php
print_r(end($arr));
echo '<br>';
echo '<br>';

//22) craete an array from variables and their value
// Array ( [firstname] => sakina [lastname] => rampurwala )
$firstname="sakina";
$lastname="rampurwala";
$comp=compact("firstname","lastname");
print_r($comp);
echo '<br>';
echo '<br>';


//23) flip() flip all the keys with their associative values
// o/p Array ( [sakina] => a [computer] => b )
$fliparr=["a"=>"sakina","b"=>"computer"];
print_r(array_flip($fliparr));
echo"<br>";
echo '<br>';

// 24)array_diff
// compare the values of 2 array and return the difference

//25) array_intersect()
// return new array compare values of 2 array return associative array with all matches found in arrays


$arr5=["sunday","monday","tuesday","wednesday"];
$arr6=["thursday","friday","saturday","sunday","monday"];
print_r(array_intersect($arr5,$arr6));
// Array ( [0] => sunday [1] => monday )
echo "<br>";
echo "<br>";  

print_r(array_diff($arr5, $arr6));
// Array ( [2] => tuesday [3] => wednesday )
echo "<br>";
echo "<br>";


// 26)array_values()
// return new array made up of the values from target array
$arr7=["i"=>"c","want"=>"c++","learn"=>"java"];
$myarr = array_values($arr7);
foreach($myarr as $key=>$value){
  print_r( $key."".$value);
}
// 0c1c++2java
echo "<br>";
echo "<br>";

// 27)array_push
// 28)array_pop

$pushpop=["banana","mango"];
array_push($pushpop,"pear");
print_r($pushpop);

echo "<br>";
echo "<br>";
array_pop($pushpop);
print_r($pushpop);
echo "<br>";
echo "<br>";

// 29)implode()
// banana&mango
// used to convert the arry into string
print_r(implode("&", $pushpop ));

// 30)explode()
// used to break the string into array
$str="hello guys my name is sakina";
print_r(explode(" ",$str));
// Array ( [0] => hello [1] => guys [2] => my [3] => name [4] => is [5] => sakina )




?>

