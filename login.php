<?php
include "connect.php";
include "data.php";

session_start();

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql= ("SELECT * FROM user where nama_user = '.$username.' and password_user = '$password'");
    $result = $db->query($sql);

    if ($result->num_rows > 0) {+
        $data = $result->fetch_assoc();
        $_SESSION['nama_user']=$data['nama_user'];
        $_SESSION['password_user']=$data['password_user'];
        $_SESSION['status_login']=true;
        echo "<script>alert('Login Berhasil');location.href='home.php';</script>";
    }

    else{
        echo "<script>alert('Login Gagal');location.href='index.php';</script>";
    }
}
?>

<body>
    <div class="w-100">
        <div>
            <img class="bg" src="photo/TMR1.jpg" alt="ini gambar background">
            <img class="bg2" src="photo/loginfade.png" alt="ini gambar fade">
        </div>

        <div class="w-100 p-4">
            <div class="w-25">
                <h2 class="w-75 text-center Title">The Malang Resto</h2>
            </div>
        </div>

        <!-- <div class="container-form">
            <div class="login-form">
                <h1 class="text-center">Login</h1>
                <div class="User mt-4 login-label">
                    <div class="form-floating mb-3 ">
                        <input type="email" class="form-control login-input" id="floatingInput" placeholder="">
                        <label class="name" for="floatingInput">Username or Email</label>
                    </div>
                    <div class="form-floating">
                        <input tpe="password" class="form-control login-input" id="floatingPassword" placeholder="">
                        <label class="name" for="floatingPassword">Password</label>
                    </div>
                    <div class="FG">
                        <button class=bt>Forgot Password?</button>
                    </div>
                </div>
            </div>
            <div class="w-100 mt-5">
                <button class="button-form">Login</button>
                <div class="flex container-divider">
                    <div class="divider"></div>
                    <p class="px-3 or">Or</p>
                    <div class="divider"></div>
                </div>
                <button class="button-form">Register</button>
            </div>
        </div> -->
    </div>

    <form method="post" action="">
                <label>Nama:</label><br>
                    <input type="text" name="nama"><br><br>
                <label>Password:</label><br>
                    <input type="password" name="password"><br><br>

            <div class="w-100 mt-5">
                <input type="submit" value="Login" name="login">
            </div>
            </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>