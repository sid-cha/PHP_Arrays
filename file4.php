<html>
<head>
	
<title>Question 3</title>
</head>
<body>
<?php

echo "<h1>#4 - Multidimensional array</h1>";

$array = [
    [1,2,3,4,5],
    [6,7,8,9,10],
    [11,12,13]
];
/////////////////////////////////////
echo "<h1>Q4(b) </h1>";
for($i=0 ; $i<count($array);$i++){
    for($j=0;$j<count($array[$i]);$j++){
        if($array[$i][$j]==8){
            echo "[".$i."][".$j."]";
        }
     //echo $v2." ";
    }
}
$array[2][]=14;
$array[]=[15,16,17];
$array[]=18;

//////////////////////////////////

echo "<h1>Q4(d) </h1>";
echo var_dump($array);
foreach($array as $key=>$value){
    if(!is_array($value)){
        echo "[".$key."] : ".$value;
    }
    else{
    foreach($value as $item=>$items)
    {
        echo "[".$key."][".$item."] : ".$items;
    }
    echo "</br>";
}
}

/////////////////////////////////////////////
echo "<h1>Q4(e) </h1>";

for ($i=0; $i< count($array); $i++){
        if(!is_array($array[$i])){
            echo $array[$i];
        }
        else{
    for($j=0;$j< count($array[$i]);$j++){
    echo ($array[$i][$j]);
    echo " ";
}
echo "<br>";
        }
    }

//////////////////////////////////////////////

echo "<h1>Q4(g) </h1>";

$array2=[

    "name"=>["first"=>"Siddharth","last"=>"chauhan"],
    "address"=>["street"=>"123 Main St","city"=>"Rochester","state"=>"NY","zip"=>"14623"]
];

foreach($array2 as $key=>$value){
    echo"<h2>$key</h2>";
    foreach($value as $key2=>$value2){

        echo"[$key][$key2]: $value2<br/>";

    }
    
}
$array2["name"]["middle"]="none";
$array2["name"][]=["my"=>"name"];
$array2["name"][]=25;
$array2[]=[1,2,3,4,5];
$array2[][]=["testing"=>"yes"];



//////////////////////////////////
echo "<h1>Q4(i) </h1>";
echo var_dump($array2);
foreach($array2 as $key=>$value){ 

    foreach($value as $key2=>$value2){
        if(!is_array($value2))
        echo "[$key][$key2]:$value2<br />";
        else{
        foreach($value2 as $key3=>$value3){
           
            echo "[$key][$key2][$key3]: $value3<br />";

        }

    }
}
}
?>

</body>
</html>