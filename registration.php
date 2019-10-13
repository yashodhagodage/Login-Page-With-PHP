<?php 

$link=mysqli_connect("localhost","pma","123");
  mysqli_select_db($link,"webss");

?>
<!DOCTYPE html>
<html>
<head>

    <title>Sign Up</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/global.css">

</head>


<body>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>

<section class="container-fluid bg1" >
    <section class="row justify-content-center">
        <section class="col-12 col-sm-6 col-md-3">

        <form class ="form-container " action="" method="post" name="register1">
                <center><label for="exampleInputPassword1"><b>Sign Up<b></label></center>
                <div class="form-group">
                    
                    <input type="text" class="form-control" id="fname" name = "fname" placeholder="First Name" required>
                    
                </div>
                <div class="form-group">
                
                    <input type="text" class="form-control" id="lname" name = "lname" placeholder="Last Name" required>
                </div>
                <div class="form-group">
                    
                    <input type="text" class="form-control" id="phone" name = "phone"  placeholder="Phone No" required>
                    
                </div>
                <div class="form-group">
                    
                <input type="email" class="form-control" id="exampleInputEmail1" name = "email" aria-describedby="emailHelp" placeholder="Enter email" required>
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    
                    <input type="text" class="form-control" id="nicno" name = "nic"  placeholder=" nic/passpor no" required>
                    
                </div>
                <div class="form-group">
                <small id="emailHelp" class="form-text text-muted">Address</small>
                    
                    <input type="text" class="form-control" id="Line1" name="line1" placeholder="Line 1" required>
                </div>
                <div class="form-group">
                    
                <input type="text" class="form-control" id="Line2" name="line2" placeholder="Line 2" required>
                </div>
                <div class="form-group">
                    
                    <input type="text" class="form-control" id="city" name="city" placeholder="City" required>
                </div>
                <div class="form-group">
                    
                    <input type="text" class="form-control" id="country" name = "country" placeholder="Country" required>
                   
                </div>
                <div class="form-group">
                    
                    <input type="text" class="form-control" id="postal" name="postal" placeholder="Postal Code" required>
                </div>
                <div class="form-group">
                    
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password" required>
                </div>
                <div class="form-group">
                    
                    <input type="password" class="form-control" id="exampleInputPassword2" name="password1" placeholder="Re-Type Password" required>
                </div>
                
                <button type="submit" name="submit1" class="btn btn-primary btn-block">Sign Up</button>
                <small id="emailHelp" class="form-text text-muted">Already have an account?Go back to <a href="login.php">login</a>.</small>

               
        </form>


        <?php
        if(isset($_POST["submit1"]))
        {

            $password = md5($_POST["password"]);
            
        
           if($_POST['password']==$_POST['password1']){
            
            mysqli_query($link,"insert into users values('','$_POST[fname]','$_POST[lname]','$_POST[phone]','$_POST[email]','$_POST[nic]','$_POST[line1]','$_POST[line2]','$_POST[city]','$_POST[country]','$_POST[postal]','$password','customer','pending')");
        
            ?>
            
            <script type="text/javascript">
                alert("Book Added Successfully! We have set the activation link to your email");
                window.location="login.php";
                </script>
            
            <?php

            }else {
                ?>
                    <script type="text/javascript">
                    alert("Two passwords do not match!");
                </script>
                
                
                <?php
            }


           }
           ?>


        </section>
    </section>
</section>

            



</body>
</html>



