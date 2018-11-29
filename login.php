<html>
<head>
    <title>Login | Database</title>
    <!-- <link rel="stylesheet" type="text/css" href="/bootstrap.min.css"> -->
    <link rel="stylesheet" type="text/css" href="./css/login.css">
</head>

<body>
<?php
//including the database connection file
    if(isset($_POST['Login'])) {
        include_once("config.php");
        $username = mysqli_real_escape_string($mysqli, $_POST['username']);
        $password = mysqli_real_escape_string($mysqli, $_POST['password']);
        echo "$username";
        $sql = "SELECT * FROM doctors WHERE login = '$username' and password = '$password'";

        $result = mysqli_query($mysqli,$sql);
        print_r($result);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $active = $row['active'];

        $count = mysqli_num_rows($result);

        if($count == 1) {
            session_start();
            $_SESSION["username"] = $username;
            header('Location: ' . "./", true);

        }else {
            echo "<script>
            alert('Incorrect username or password');
            window.location.href='./';
            </script>";
        }
    }




//     if(isset($_POST['register'])) {
//         include_once("config.php");

//         $name = mysqli_real_escape_string($mysqli, $_POST['name']);
//         $username = mysqli_real_escape_string($mysqli, $_POST['username']);
//         $password = mysqli_real_escape_string($mysqli, $_POST['password']);
//         $phone = mysqli_real_escape_string($mysqli, $_POST['phone']);
//         echo $name;
//         $check_email = mysqli_query($mysqli, "SELECT * FROM users WHERE username = '$username'");
//         $count = mysqli_num_rows($check_email);

//         if($count==1){
//             echo "<script>
//             alert('Email already taken');
//             window.location.href='./';
//             </script>";
//         }
//         else{
//         // checking empty fields
//         //insert data to database
//         $result = mysqli_query($mysqli, "INSERT INTO users(name,username,password,phone) VALUES('$name','$username','$password','$phone')");

//         function Redirect($url, $permanent = false)
//         {
//             if (headers_sent() === false) {
//                 header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
//             }

//             exit();
//         }
//         session_start();
//         $_SESSION["username"] = $username;
//         Redirect('./', false);
//         }

// }


?>


<div class="login-wrap">
    <div class="login-html">
        <div class="log-box container">
            <img class="logo" src="./img/logo.png">
        </div>
        <input id="tab-1" type="radio" name="tab" class="sign-in" checked>
        <label for="tab-1" class="tab">Sign In</label>
        <input id="tab-2" type="radio" name="tab" class="sign-up">
        <!-- <label for="tab-2" class="tab">Sign Up</label> -->
        <label for="tab-2" class="tab"></label>
        <div class="login-form">
            <div class="sign-in-htm">
                <form action="./login.php" method="POST">

                    <div class="group">
                        <label for="username" class="label">Email</label>
                        <input id="username" name="username" type="text" class="input" required>
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Password</label>
                        <input id="password" name="password" type="password" class="input" data-type="password" required>
                    </div>
                    <div class="group">
                        <input type="submit" name="Login" class="button" value="Login">
                    </div>
                </form>
                <div class="hr"></div>
                <div class="foot-lnk">
                    <a href="#forgot">Forgot Password?</a>
                </div>
            </div>
            
        </div>
    </div>
</div>

</body>
</html>
