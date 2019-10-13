
<!DOCTYPE html>
<html>
<head>

    <title>Login Form</title>
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

        <form class ="form-container " action="login1.php"  method="post" name="login1">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name = "email" aria-describedby="emailHelp" placeholder="Enter email" required>
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password" required>
                </div>
                
                <button type="submit" name="submit1" class="btn btn-primary btn-block">Login</button>

                <small id="emailHelp" class="form-text text-muted"><a href="reset-password.php">Need help?.</a></small> <small id="emailHelp" class="form-text text-muted"><a href="registration.php">Create an account.</a></small>
        </form>



        </section>
    </section>
</section>

            



</body>



</html>
