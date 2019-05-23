<?php
include ('partials/_head.php');
include ('partials/_nav.php');

include("service.php");
include("car.php");
 
 ?>


<!-- ************************************************************************************ -->
<div class="container-fluid pt-5 text-light" id="insert">


    <form action="insert.incl.php" method="post" enctype="multipart/form-data">
        <table class="wrapper  bg-dark" align="center" width="750" border="1">
            <tr align="center">
                <td colspan="6"><strong>Add new car</strong></td>
            </tr>
            <tr>
                <td align="center">Brand </td>
                <td>
                    <select id="s1" class="text-light" name="brand">
                        <?php
                        $brand = getBrands();
                        foreach($brand as $sa) { ?>
                        <option value="<?php echo $sa['name']; ?>"><?php echo $sa['name']; ?></option>
                        <?php } ?>
                    </select>
                </td>
            </tr>

            <tr>
                <td align="center">Model</td>
                <td>
                    <select id="s2" class="text-light" name="model">
                    </select>
                    <input type="hidden" name="model_id" />
                </td>
            </tr>
            <!-- <tr>
                <td class="bg-dark" align="center">Serie</td>
                <td><input type="text" class="text-light" name="serie" size="50" required /></td>

            </tr> -->
            <tr>
                <td align="center">Image </td>
                <td><input class="text-light" type="file" name="image" required /></td>
            </tr>
            <tr>
                <td align="center"> Price </td>
                <td><input class="text-light" type="text" name="price" size="50" required /></td>
            </tr>
            <tr>
                <td align="center">Description</td>
                <td><textarea class="text-light" name="description" rows="10"></textarea></td>
            </tr>
            <tr align="center">
                <td colspan="8"><input type="submit" name="insert_car" value="Insert product" /></td>
            </tr>
        </table>
    </form>

</div>


<!-- *********************************************************** -->


<!-- <div class="container-fluid">
    <select id="s1">
        <?php
        // $brand = getBrands();
        foreach($brand as $sa) { ?>
        <option value="<?php echo $sa['name']; ?>"><?php echo $sa['name']; ?></option>
        <?php } ?>
    </select>
    <select id="s2">
    </select>
    <select id="s3">
    </select>
</div> -->

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


<style>
input[type="text"],
textarea,
select {
    background-color: rgb(52, 58, 64);
}

select,
textarea,
input[type="file"] {
    width: 31rem;
    border-style: none;
}
</style>