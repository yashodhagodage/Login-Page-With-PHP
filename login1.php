<?php

session_start();
	
	$email = $_POST['email'];
    $password = md5($_POST['password']);    

    $link=mysqli_connect("localhost","pma","123");
    mysqli_select_db($link,"webss");
	
	
		
		
		$result = mysqli_query($link,"SELECT * FROM users WHERE email = '$email' AND password = '$password'");
		
		$row = mysqli_fetch_array($result);
		if($row['email'] == $email && $row['password'] == $password ){
			
			$_SESSION['uid']=$row['uid'];
			$_SESSION['fname']=$row['fname'];
			$_SESSION['lname']=$row['lname'];
			$_SESSION['phone']=$row['phone'];
            $_SESSION['email']=$row['email'];
            $_SESSION['type']=$row['type'];
            $_SESSION['status']=$row['status'];
			$_SESSION['nic']=$row['nic'];
            $_SESSION['time_stamp'] =time();
            

            
            
                if($row['status'] == 'pending'){
                   

			        header('Location: verify1.php');

                }elseif($row['type']=='admin'){
                    header('Location: admin.php');

                }else{
                    header('Location: customer-profile.php');
                }
			
			
			
			
		}else{
			
			echo "Failed to Login.Please try again!";

			header('Refresh: 2; URL=login.php');
			die();
		}

?>