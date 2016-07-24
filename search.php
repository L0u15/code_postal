<?php
//Array
$arr[] = "USA";
$arr[] = "UK";
$arr[] = "Russia";
$arr[] = "Canada";
$arr[] = "India";
$arr[] = "Australia";
$arr[] = "China";
$arr[] = "Argentina";
$arr[] = "Singapore";

//get the parameter from URL
$a = $_REQUEST["a"];
$search = "";

//lookup al searchs from array if $a is differents from ""
if($a !==""){
    $a = strtolower($a);
    $len=strlen($a);
    foreach($arr as $name){
        if(stristr($a, substr($name,0,$len))){
            if($search ===""){
                $search = $name;
            }else{
                $search.=", $name";
            }
        }
    }
}
// Output"No Result" if no search was found or output correct values
echo $search ==="" ? "No resultat" : $search;
