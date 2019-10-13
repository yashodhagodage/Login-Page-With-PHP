<html>
    <head>
        <title>Reset Password</title>

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/global.css">



    <head>



        <body> 

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="js/bootstrap.min.js"></script>
            

            <div class="jumbotron jumbotron-fluid">
            <div class="container ">
                <center><h1 class="display-4">Forgot Your Password?</h1></center>
                <center> <p class="lead">Don't worry we can help you to reset your password!</p></center>
                <center> <p class="lead">Please fill the following form to reset your password</p></center>
                </br>

                <form name = "form1" action="reset1.php" method ="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email" required="">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="">Phone Number</label>
                        <input type="text" class="form-control" name="phone" placeholder="Phone Number" required="">
                    </div>
                    <div class="form-group">
                        <label for="">NIC/Passport Number</label>
                        <input type="text" class="form-control" name="nic" placeholder="NIC/Passport" required="">
                    </div>
                    <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" name="pass1" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" name="pass2" placeholder="Password">
                </div>
                    
                   <center> <input type="submit" name ="submit1" class="btn btn-primary" value ="Reset" ></center>
                    </form>
                    <center><a href ="login.php" <Button type="button" name ="button" class="btn btn-primary" >Go Back!</button></a></center>

            </div>
            </div>

            

    
        </body>
    
    </html>