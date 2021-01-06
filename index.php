

<?php 
$myFood = array('banana', 'pizza', 'hamburger','milkshake')
?>

<?php 

$count = 0;

while($count < count($myFood)) {
    echo "<li>$myFood[$count]</li>";
    $count ++;
}

?>
