<?php


                $link=mysqli_connect("localhost","pma","123");
                mysqli_select_db($link,"webss");





                $res=mysqli_query($link,"SELECT * FROM users WHERE email = '$_POST[email]'");
                $row = mysqli_fetch_array($res);
                $email = $row["email"];
                
                if(isset($_POST["submit1"])){

                    if($_POST["phone"] == $row["phone"] && $_POST["nic"] == $row["nic"]){
                        if($_POST["pass1"]== $_POST["pass2"]){

                            $temp1= md5($_POST["pass1"]);    

                            mysqli_query($link,"UPDATE users set password ='$temp1' WHERE email ='$email'");

                            ?> 
                                   
                            <script type="text/javascript">
                                alert("Reset successfully!");
                                window.location="login.php";
                                </script>

                            <?php



                        }else{

                            ?> 
                                   
                            <script type="text/javascript">
                                alert("Passwords not matching");
                                window.location="reset-password.php";
                                </script>

                            <?php

                        }
                        
                    }else{
                        ?> 
                                   
                            <script type="text/javascript">
                                alert("Verification Failed");
                                window.location="reset-password.php";
                                </script>

                            <?php

                    }

                    
                                    
                }
                                            

                                    
            
            ?>