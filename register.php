<?php
include "connect.php";
include "data.php";

// Fungsi untuk membersihkan input
// function cleanInput($input) {
//     global $conn;
//     return mysqli_real_escape_string($conn, htmlspecialchars($input));
// }

// Proses ketika form disubmit
if (isset($_POST['submit'])) {
    // Bersihkan input dari form
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Query untuk menyimpan data ke database
    $query = "INSERT INTO user (nama_user, email_user, password_user) VALUES ('$nama', '$email', '$password')";
    $register = mysqli_query($koneksi,$query);

}
?>

<body>
    <div class="w-100">
        <div>
            <img class="img1" src="photo/TMR1.jpg" alt="ini gambar">
            <img class="img2" src="photo/loginfade.png" alt="ini gambar">
        </div>

        <div class="w-100 p-4">
            <div class="w-25">
                <h2 class="w-75 text-center Title">The Malang Resto</h2>
            </div>
        </div>

            <h2>Registrasi</h2>
            <form method="post" action="">
                <label>Nama:</label><br>
                    <input type="text" name="nama"><br><br>
                <label>Email:</label><br>
                    <input type="email" name="email"><br><br>
                <label>Password:</label><br>
                    <input type="password" name="password"><br><br>

            <div class="w-100 mt-5">
                <input type="submit" value="Register" name="submit">
            </div>
            </form>
        </div>
    </div>
</body>