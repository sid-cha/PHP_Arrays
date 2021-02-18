
<html>
<head>
	
<title>Question 3</title>
</head>
<body>
<?php

echo "<h1>#1 - Displaying average of several test scores</h1>";
$array1= [87,75,93,95];
unset($array1[1]);
//$array1[1]=0;
$sum=0;
foreach($array1 as $v1)
{
$sum=$sum+$v1;
echo $v1."<br/>";
}
//$n=count($array1);
$result=$sum/count($array1);
echo "The calculated average: $result";?>
</body>
</html>