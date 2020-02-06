<?php
    include "includes/header.php";
    
    //write PHP here...
    $weight = 180;
    $age = 48;
    $firstName = "Scott";
    $lastName = "Fincham";
    $kg = "num";
    
Function poundsToKg ($kg){
    global $weight, $kg;
return $kg = $weight * (1/2.2);
}
$result = poundsToKg ($kg);
    
?>

<body>
<!-- Scott Fincham
assignment04
INFO2340.WW
Thoendel
WINTER 2020
-->

<p>Good morning, ladies and gentlemen!</p>
<p>My name is <?php echo $firstName ?>  <?php echo $lastName; ?> !
<p>I am <?php echo $age; ?> years old. I weigh <?php echo $weight; ?> pounds, which is <?php echo $kg; ?> kg!</p>

</body>
<?php
    include "includes/footer.php";

?>