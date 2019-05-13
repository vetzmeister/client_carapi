<?php
include ('partials/_head.php');
include ('partials/main_nav.php');
 
?>



<body>
    <?php
       
        if (isset($_GET['whatever'])){
            // include ('whatever.php');
            echo "whatever";
        }
        elseif (isset($_GET['insert'])){
        include ('showroom.php');
            // echo "insert";
        }
        elseif (isset($_GET['landing'])){
        include ('home.php'); 
        }
    ?>


</body>

</html>