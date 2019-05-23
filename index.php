<?php
include ('partials/_head.php');

?>



<body>
    <?php
      include ('partials/_nav.php');

        if (isset($_GET['showroom'])){
            include ('showroom.php');  
        }
        elseif (isset($_GET['home'])){
            include ('home.php'); 
        } 
        include ('partials/_footer.php');
    ?>
</body>

</html>