
<html>
<head>
	
<title>Question 2</title>
</head>
<body>
<?php

echo "<h1>#1 - Displaying average of several test scores</h1>";
$array1= [87,75,93,95];
$sum=0;
for($i=0;$i<count($array1);$i++){
$sum=$sum+$array1[$i];
//echo $array1[$i]."<br/>";
}
$n=count($array1);
$result=$sum/$n;
echo "The calculated average: $result";?>
</body>
</html>
