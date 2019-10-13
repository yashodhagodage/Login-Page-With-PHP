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
                                    
                                    ?><img src=<?php echo $row1["image"]; ?> height="150" width="150" ><?php


                                }

                            ?>

                            

                            

                            <br>
                            <br><br>
                                <table>
                                <tr>
                                <td><h4>User ID :</h4></td>
                                <td><h4><?php echo $row["uid"];  ?><h4></td>

                                </tr>
                                
                                </tr>
                                <tr>
                                <td><h4>Email :</h4></td>
                                <td><h4><?php echo $row["email"];  ?><h4></td>

                                </tr>
                                </tr>
                                <tr>
                                <td><h4>Phone No:</h4></td>
                                <td><h4><?php echo $row["phone"];  ?><h4></td>

                                </tr>
                                </tr>
                                <tr>
                                <td><h4>Address :</h4></td>
                                <td><h4><?php echo $row["line1"].",".$row["line2"];  ?><h4></td>

                                </tr>
                                <tr>
                                <td><h4>City :</h4></td>
                                <td><h4><?php echo $row["city"];  ?><h4></td>

                                </tr>

                                </tr>
                                <tr>
                                <td><h4>Country :</h4></td>
                                <td><h4><?php echo $row["country"];  ?><h4></td>

                                </tr>

                                </tr>
                                <tr>
                                <td><h4>Postal Code :</h4></td>
                                <td><h4><?php echo $row["postal"];  ?><h4></td>

                                </tr>


                                <tr>
                                <td><h4>NIC No :</h4></td>
                                <td><h4><?php echo $row["nic"];  ?><h4></td>

                                </tr>
                                
                                <tr>
                                <td><h4>Status :</h4></td>
                                <td><h4><?php echo $row["status"];  ?><h4></td>

                                </tr>
                                
                                </table>
                                 
                               
                                    <a href="edit-profile.php"> <button type="button" name="submit1" class="btn btn-primary btn-block">Edit</button>  </a>






                            </div>

        



        </section>
    </section>
</section>

            



</body>



</html>
