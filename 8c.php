<?php  
$a1 = Array('0' => Array('0' => 1,'1' => 2),'1' => Array('0' => 4,'1' => 5)); 
 
 
$a2 = Array('0' => Array('0' => 1,'1' => 2),'1' => Array('0' => 4,'1' => 5)); 
 
$result = array(); 
for($i=0; $i<=1; $i++) { 
for($j=0; $j<=1; $j++) { 
for($k=0;$k<=1;$k++){ 
$result[$i][$j] = $result[$i][$j]+$a1[$i][$k] * $a2[$k][$j]; 
} 
 
 
} 
} 
echo "<p> Matrix one </p>"; 
echo "<pre/>";print_r($a1); 

echo "<p> Matrix Two</p>"; 
echo "<pre/>";print_r($a2); 
echo "<p> Matrix Multiplication</p>"; 
echo "<pre/>";print_r($result); 
?> 
 
