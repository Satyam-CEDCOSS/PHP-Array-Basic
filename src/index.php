<!-- Insertion Task -->
<?php
echo "<h1>Insert</h1>";
$insert_array = array(1,2,3,4,5);
echo "Orginal array:<br>";
print_r($insert_array);
echo "<br>";
array_splice($insert_array,2,0,"$");
echo "After inserting '$' the array is:<br>";
print_r($insert_array);
echo "<hr>"
?>

<!-- Reading Task -->
<?php
echo "<h1>Read</h1>";
$temprature = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
$temprature_average = array_sum($temprature)/count($temprature);
echo "Average Temperature is: $temprature_average";
echo "<br>";
sort($temprature);
echo "List of seven lowest temperature: $temprature[0],$temprature[1],$temprature[2],$temprature[3],$temprature[4],$temprature[5],$temprature[6]";
echo "<br>";
echo "List of seven highest temperature: $temprature[23],$temprature[24],$temprature[25],$temprature[26],$temprature[27],$temprature[28],$temprature[29]";
echo "<hr>";
?>

<!-- Updation Task -->
<?php
echo "<h1>Update</h1>";
$first_array = array('c1' => 'Red', 'c2' => 'Green', 'c3' => 'White', 'c4' => 'Black');
var_dump(array_filter($first_array, function($k) {
    $second_array = ['c2', 'c4'];
    return $k == $second_array[0] || $k == $second_array[1];
}, ARRAY_FILTER_USE_KEY));
echo "<hr>";
?>

<!-- Deletion Task -->
<?php
echo "<h1>Delete</h1>";
$delete_array = [0,1,2,3,4,5];
echo "Before Deletion: ";
print_r($delete_array);
echo "<br>";
$delete_array = (array_filter($delete_array, function($v) {
    return $v != 3;
}));
echo "After Deletion: ";
print_r($delete_array);
echo "<hr>";
?>

<!-- Counting Task -->
<?php
echo "<h1>Count</h1>";
$count_array = [3, -1, -1, -1, 2, 3, -1, 3, -1, 2, 4, 9, 3];
print_r($count_array);
$count_array = array_count_values($count_array);
arsort($count_array);
$count_new_array = array_keys($count_array);
echo "<br>";
echo "Most Repeating Element is: ";
print_r($count_new_array[0]);
echo "<hr>";
?>

<!-- Sorting Task -->
<?php
echo "<h1>Sort</h1>";
function sorting($first_value,$second_value){
    return strlen($second_value)-strlen($first_value);
}
$sort_array = ["Telescopes", "Glasses", "Eyes", "Monocles"];
echo "Before Sort: ";
print_r($sort_array);
echo "<br>";
usort($sort_array,"sorting");
echo "After Sort: ";
print_r($sort_array);
echo "<hr>";
?>

<!-- URL Explode Task -->
<?php
echo "<h1>URL Explode</h1>";
$url = "http://localhost:8080/kill/bill";
$parts = explode('/', $url);
$last = end($parts);
$second_last = $parts[sizeof($parts)-2];
echo "$second_last $last";
echo "<hr>";
?>

<!-- Array Require Task -->
<?php
echo "<h1>Array Require</h1>";
$url = "http://localhost:8080/kill/bill";
$parts = explode('/', $url);
$last = end($parts);
$second_last = $parts[sizeof($parts)-2];
echo file_exists($last.".php");
echo "<br>";
echo file_exists($second_last.".php");
if(file_exists($last.".php")){
    require $last.".php";
}
if(file_exists($second_last.".php")){
    require $second_last.".php";
}
clearstatcache();
echo "<hr>";
?>