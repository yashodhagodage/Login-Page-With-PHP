<?php 

session_start();
   
            $_SESSION['uid'];
			$_SESSION['fname'];
			$_SESSION['lname'];
			$_SESSION['phone'];
            $_SESSION['email'];
            $_SESSION['type'];
            $_SESSION['status'];
			$_SESSION['nic'];
            $_SESSION['time_stamp'];

    if(empty($_SESSION['uid'])){
        
        ?>
        
                                     <script type="text/javascript">
                                     alert("Please Login to view this page !");
                                     window.location="login.php";
                                     </script>
        
        <?php
    }if ((time() - $_SESSION['time_stamp'])>90000000) {
        ?>
                                    <script type="text/javascript">
                                     alert("You were Automatically logged out Due to inactivity!");
                                     window.location="login.php";
                                     </script>


        <?php
    }
    



    $link=mysqli_connect("localhost","pma","123");
    mysqli_select_db($link,"webss");





$res=mysqli_query($link,"SELECT * FROM users WHERE uid = $_SESSION[uid]");
$row = mysqli_fetch_array($res);

?>

<!DOCTYPE html>
<html>
<head>

    <title>Profile</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/global.css">

</head>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Online Auction</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          My Account
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="customer-profile.php">Profile</a>
          <a class="dropdown-item" href="edit-profile.php">Edit Details </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Cart</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#">About</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      <a href="login.php" > <button class="btn btn-outline-danger my-2 my-sm-0" type="button"> logout </button> </a>
    </form>
  </div>
</nav>


<body>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>

<section class="container-fluid bg1" >
                                <section class="row justify-content-center">
                                    <section class="col-12 col-sm-6 col-md-3">

        <div class="clearfix"></div>
                <div class="row" style="min-height:500px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">

                                <h2><?php echo $row["fname"]." ".$row["lname"]; ?></h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">

                            <div class="black-letter" style="position:relative; left:0px;">

                            <?php
                            $res1=mysqli_query($link,"SELECT * FROM image WHERE uid = $_SESSION[uid]");
                            $row1 = mysqli_fetch_array($res1);

                                if(empty($row1["image"])){
                                    ?><img src="images/default.png" height="150" width="150" > <?php


                                }else{
                                    
                                    ?><img src=<?php echo $row1["image"]; ?> height="150" width="150" > <?php


                                }

                            ?>

                            <form name="form1" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Select a custom profile picture</label>
                                <input type="file" class="form-control-file" name ="f1" >
                                <input type ="submit" class="form-control-submit" name="submit1" value="Upload">


                            </div>
                            </form>

                            <?php
                                    
                                    if(isset($_POST["submit1"]))
                                    {

                                        $tm=md5(time());
                                    $fnm=$_FILES["f1"]["name"];
                                    $dst="./images/".$tm.$fnm;
                                    $dst1="images/".$tm.$fnm; 

                                    move_uploaded_file($_FILES["f1"]["tmp_name"],$dst);


                                    $res2=mysqli_query($link,"SELECT * FROM image WHERE uid = $_SESSION[uid]");
                                    $row2 = mysqli_fetch_array($res2);

                                        if(empty($row2["image"])){
                                            mysqli_query($link,"INSERT INTO image values('$_SESSION[uid]','$dst1')");

                                        }else{
                                            mysqli_query($link,"UPDATE image SET image= '$dst1' WHERE uid = '$_SESSION[uid]' ");
                                        }


                                    }
                                ?>

                            
                                        <?php 
                                        
                                        $res3=mysqli_query($link,"SELECT * FROM users WHERE uid = $_SESSION[uid]");
                                        $row3 = mysqli_fetch_array($res3);
                                        
                                        ?>
                            

                                            <form name ="form2" method="post">
                                            <div class="form-group">
                                                <label for="formGroupExampleInput">Name</label>
                                                <input type="text" class="form-control" name="firstname" value = <?php echo $row3['fname'] ?>  placeholder="First Name" required="">
                                                <input type ="text" class="form-control" name="lastname" value = <?php echo $row3['lname'] ?> placeholder="Last Name" required="">
                                            </div>
                                            <div class="form-group">
                                                <label for="formGroupExampleInput2">Billing Address</label>
                                                <input type="text" class="form-control" name="line1" value = <?php echo $row3['line1'] ?> placeholder="Line 1" required="">
                                                <input type="text" class="form-control" name="line2" value = <?php echo $row3['line2'] ?> placeholder="Line 2" required="">
                                                <input type="text" class="form-control" name="city" value = <?php echo $row3['city'] ?> placeholder="City" required="">
                                                <input type="text" class="form-control" name="country" value = <?php echo $row3['country'] ?> placeholder="Country" required="">
                                                <input type="text" class="form-control" name="postal" value = <?php echo $row3['postal'] ?> placeholder="postal Code" required="">
                                            </div>
                                            <div class="form-group">
                                                <label for="formGroupExampleInput2">Contact Details</label>
                                                <input type="text" class="form-control" name="phone" value = <?php echo $row3['phone'] ?> placeholder="Phone Number" required="">
                                            </div>
                                            <div class="form-group">
                                                <label for="formGroupExampleInput2">NIC/Passport No</label>
                                                <input type="text" class="form-control" name="nic" value = <?php echo $row3['nic'] ?> placeholder="NIC/Passport No" required="">
                                            </div>
                                            <div class="form-group">
                                            <input type="submit" name="submit2" class="btn btn-primary btn-block" value ="Save">
                                            </div>
                                            </form>
                                            
                                        <?php
                                               
                                                if(isset($_POST["submit2"]))
                                                
                                                {
                                                    mysqli_query($link,"UPDATE users SET fname='$_POST[firstname]',lname='$_POST[lastname]',line1='$_POST[line1]',line2='$_POST[line2]',city='$_POST[city]',country='$_POST[country]',postal='$_POST[postal]',phone='$_POST[phone]',nic='$_POST[nic]' WHERE uid ='$_SESSION[uid]'");
                                                    ?> 
                                   
                                                    <script type="text/javascript">
                                                        alert("Update successfully!");
                                                        window.location="customer-profile.php";
                                                        </script>

                                                    <?php
                                                }
                                        ?>





                            </div>


                            



        </section>
    </section>
</section>

            



</body>



</html>
