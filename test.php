<?php
include("service.php");
$sports_arr = array();
$sports_arr[] = "Basketball";
$sports_arr[] = "Baseball";
$sports_arr[] = "Football";

print_r($sports_arr);
echo "<br><br>";

$brands = getBrands();

print_r($brands);


$position = array();
$position['Basketball'][] = "Power Forward";
$position['Basketball'][] = "Small Forward";
$position['Basketball'][] = "Center";
$position['Soccer'][] = "Center Forward";
$position['Soccer'][] = "Right Wing";
$position['Soccer'][] = "Left Wing";
$position['Football'][] = "Halfback";
$position['Football'][] = "Fullback";
$position['Football'][] = "Wide Reciever";
$position['Football'][] = "Tight End";
$position['Football'][] = "Center";
?>

<div class="home">
    <select id="s1">
        <?php foreach($sports_arr as $sa) { ?>
        <option value="<?php echo $sa; ?>"><?php echo $sa; ?></option>
        <?php } ?>
    </select>
    <select id="s2">
    </select>
</div>

<div class="homeTest">
    <select id="t1">
        <?php 
        $brands = getBrands();
        foreach($brands as $sa) { ?>
        <option value="<?php echo $sa['name']; ?>"><?php echo $sa['name']; ?></option>
        <?php } ?>
    </select>
    <select id="t2">
    </select>
</div>

<script type="text/javascript">
var s1 = document.getElementById("s1");
var s2 = document.getElementById("s2");
onchange(); //Change options after page load
s1.onchange = onchange; // change options when s1 is changed

function onchange() {
    <?php foreach ($sports_arr as $sa) {?>
    if (s1.value == '<?php echo $sa; ?>') {
        option_html = "";
        <?php if (isset($position[$sa])) { ?> // Make sure position is exist
        <?php foreach ($position[$sa] as $value) { ?>
        option_html += "<option><?php echo $value; ?></option>";
        <?php } ?>
        <?php } ?>
        s2.innerHTML = option_html;
    }
    <?php } ?>
}
</script>

<script type="text/javascript">
var t1 = document.getElementById("t1");
var t2 = document.getElementById("t2");
onchange(); //Change options after page load
t1.onchange = onchange; // change options when s1 is changed

function onchange() {
    <?php foreach ($sports_arr as $sa) {?>
    if (s1.value == '<?php echo $sa; ?>') {
        option_html = "";
        <?php if (isset($position[$sa])) { ?> // Make sure position is exist
        <?php foreach ($position[$sa] as $value) { ?>
        option_html += "<option><?php echo $value; ?></option>";
        <?php } ?>
        <?php } ?>
        s2.innerHTML = option_html;
    }
    <?php } ?>
}
</script>