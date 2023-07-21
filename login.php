

<html>

<head>
    <title> Cash Free Canteen</title> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel = "stylesheet" type = "text/css" href = "loginCSS.css">
    <link href="https://fonts.googleapis.com/css2?family=Kdam+Thmor+Pro&family=Poppins&family=Roboto+Mono:wght@300&display=swap" rel="stylesheet">
    <script>

        function disablescroll() {
            // To get the scroll position of current webpage
            TopScroll = window.pageYOffset || document.documentElement.scrollTop;
            LeftScroll = window.pageXOffset || document.documentElement.scrollLeft,
            
            // if scroll happens, set it to the previous value
            window.onscroll = function() {
            window.scrollTo(LeftScroll, TopScroll);
                    };
        }

        function loginUserOutHide() {
                var loginOut = document.getElementById("loginUserOut");
                loginOut.classList.toggle("loginUserOutHide");
        }
        function signupPopupFunc() {
            document.getElementsByClassName("signupPopup")[0].classList.add("active");
            loginUserOutHide();
        }
        

        function signupPopupHide() {
            document.getElementsByClassName("signupPopup")[0].classList.remove("active");
            loginUserOutFunc();
        }
        

    </script>
</head>

<body>

<div style = "border: 1px solid blue;">
<div class="displayerror" id = "displayerror">
        <?php
        @include 'configTest2.php';

        if (isset ($_POST ['registrationSubmit'] )) {
            $username = $_POST['regusername'];
            $mail = $_POST['regmail'];
            $pswd = md5($_POST['regpswd']);
            $checkpswd = md5($_POST['regpswd2']);

            $select = "SELECT * FROM userregister WHERE name = '$username' OR mail = '$mail' OR pswd = '$pswd' ";


            $selectres = mysqli_query($conn, $select);

            if (mysqli_num_rows($selectres) > 0) {
                $error[] = 'user already exists';
                echo '<script type="text/javascript"> document.getElementsByClassName("displayerror")[0].classList.add("active"); </script>';
                echo '<div class = "userpopupdetails2"> redirecting to User Registration </div>';
                echo '<script>  setTimeout(exitdisplayerror,3000); setTimeout(regtoggle, 3000); </script>';
            } 

            else {
                if ($pswd != $checkpswd ) {
                    $error[] = 'password does not match!';
                    echo '<script type="text/javascript"> document.getElementsByClassName("displayerror")[0].classList.add("active"); </script>';
                    echo '<div class = "userpopupdetails2"> <br> redirecting to User Registration </div>';
                    echo '<script>  setTimeout(exitdisplayerror,3000); setTimeout(regtoggle, 3000); </script>';
                } else {
                    $ins = "INSERT INTO userregister (name, mail, pswd,  checkpswd)
                    VALUES ('$username','$mail','$pswd','$checkpswd')";

                    mysqli_query($conn, $ins); 
                    echo '<script type="text/javascript"> document.getElementsByClassName("displayerror")[0].classList.add("active");  </script>';
                    echo '<div class = "userwelcome"> <br> Registered Successfully <br><br> </div>';
                    echo '<div class = "userpopupdetails2"> <br> redirecting to User Login </div>';
                    echo '<script> setTimeout(exitdisplayerror,3000); setTimeout(toggle, 3000); </script>';
                    
                    
                }
            }
        };
        ?>

        
        <?php   
            if (isset($error)) {
                        foreach ($error as $error) {
                            echo '<div class = "userwelcome">' . $error . '</div> <br> <div class = "userpopupdetails"> Choose a different username or password </div> <br>' ;
                        };    
            }; 
        ?>   
    </div>
</div>


<div class = "display">
    <div class = "content"> <span id = "cashfree">cashfree</span><br><span id = "canteen">canteen</span> </div>
    <div class = "loginUserOut" id = "loginUserOut">
        <div class = "loginUser">
            <div class = "loginUserWelcome"> <center> Welcome</center> </div>
        
            <form id = "loginForm" action = "" method = "post">
            
                <div class = "loginUserIn">
                    <label for="loginRoll"> &nbsp;Roll No </label><br>
                    <input id="loginroll" name="loginroll" type="text" required>
                    <div class="error"> </div>
                </div>

                <div class = "loginUserIn">
                    <label for="loginPswd"> &nbsp;Password </label><br>
                    <input id="loginpswd" name="loginpswd" type="password" required>                        
                    <div class="error"></div>
                </div>
                <button type="submit" name = "loginSubmit" class = "loginbtn"> login </button>
            </form>
        </div>
    
        <button type = "submit" name = "signupbtn" class = "signupBtn" id="signupbtn" onclick="signupPopupFunc()"> signup </button>
        
    </div>

</div>

    <!-- sign up popup-->
<div class = "signupPopup"> 

    <div class = "signupUser"> <center> User Signup</center> </div>

    <form id = "signUpForm" action = "" method = "post"> 
        <div class = "signupUserIn">
            <label for="signupRoll"> &nbsp;Roll No </label><br>
            <input id="signuproll" name="signuproll" type="text" required>                        
            <div class="error"></div>
        </div>

        <div class = "signupUserIn">
            <label for="signupPhone"> &nbsp;Phone </label><br>
            <input id="signupphone" name="signupphone" type="text" required>                        
            <div class="error"></div>
        </div>

        <div class = "signupUserIn">
            <label for="signupPswd"> &nbsp;Password </label><br>
            <input id="signuppswd" name="signuppswd" type="password" required>                        
            <div class="error"></div>
        </div>

        <div class = "signupUserIn">
            <label for="signupConfPswd"> &nbsp;Confirm Password </label><br>
            <input id="signupconfpswd" name="signupconfpswd" type="password" required>                        
            <div class="error"></div>
        </div>

    <button type = "submit" name = "signupSubmit" class = "signupSubmitBtn" onclick="" id="signupsubmitbtn" > signup </button>
    <div style = "text-align: center; font-size: 15px;" onclick = "signupPopupHide()" > back to login</div>
    
    </form>

</div>

</body>

</html>