<?php
include ('partials/_head.php');
include ('partials/_nav.php');

include("service.php");
include("car.php");
 
 ?>



<div class="container-fluid">
    <select id="s1">
        <?php
        $brand = getBrands();
        foreach($brand as $sa) { ?>
        <option value="<?php echo $sa['name']; ?>"><?php echo $sa['name']; ?></option>
        <?php } ?>
    </select>
    <select id="s2">
    </select>
    <select id="s3">
    </select>
</div>

<script type="text/javascript">
var s1 = document.getElementById("s1");
var s2 = document.getElementById("s2");
var s3 = document.getElementById("s3");

onchange(); //Change options after page load
s1.onchange = onchange; // change options when s1 is changed

function onchange() {
    <?php
        $brand = getBrands();
        foreach ($brand as $sa) {?>
    if (s1.value == '<?php echo $sa['name']; ?>') {
        option_html = "";
        <?php
            $modelId = $sa['id'];
            $models = getModelsByBrand($modelId);
            if (isset($models)) { ?> // Make sure position is exist
        <?php foreach ($models as $value) { ?>
        option_html += "<option><?php echo $value['name']; ?></option>";
        <?php } ?>
        <?php } ?>
        s2.innerHTML = option_html;
    }
    <?php } ?>
}
</script>