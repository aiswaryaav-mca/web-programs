
<?php
 $students =["Alice","Bob","Charlie","Diana","Eve"];

echo "Original Array:<br>";
print_r($students);
echo "<br><br>";
asort($students);
echo "Array sorted in Ascending Order:<br>";
print_r($students);
echo "<br><br>";

asort($students);
echo "Array sorted in Desending Order:<br>";
print_r($students);
?>
