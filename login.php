<?php  
 include 'database.php';  
 
 
 session_start();  
 $data = new Databases;  
 $message = '';  
 if(isset($_POST["login"]))  
 {  
      $field = array(  
           'username'     =>     $_POST["username"],  
           'password'     =>     $_POST["password"]  
      );  
      if($data->required_validation($field))  
      {  
           if($data->can_login("users", $field))  
           {  
                $_SESSION["username"] = $_POST["username"];  
                header("location:insert.php");  
           }  
           else  
           {  
                $message = $data->error;  
           }  
      }  
      else  
      {  
           $message = $data->error;  
      }  
 }  
  
include ('partials/_head.php');
include ('partials/_nav.php');
?>

<div class="wrapper mx-auto p-3 m-5 bg-dark">


    <?php  
      if(isset($message))  
     {  
     echo '<label class="text-danger">'.$message.'</label>';  
     }  
     ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <h3>Login </h3>
        <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
            <label class="float-left">Username</label>
            <input type="text" class="form-control" name="username" />
            <span class="help-block"><?php echo $username_err; ?></span>
        </div>
        <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
            <label class="float-left">Password</label>
            <input type="password" name="password" class="form-control" />
            <span class="help-block"><?php echo $password_err; ?></span>
        </div>

        <input type="submit" name="login" class="btn btn-info form-control mt-3 mb-5 p-0" value="Login" />
    </form>
</div>