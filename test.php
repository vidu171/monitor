  <?php
  if(isset($_POST['Login'])) {
        include_once("config.php");
        $username = mysqli_real_escape_string($mysqli, $_POST['username']);
        $password = mysqli_real_escape_string($mysqli, $_POST['password']);
        echo "$username";
        echo "$password";
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

    ?>