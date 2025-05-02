<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bottom Navbar with Cards</title>
  <link href="../../../public/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../../public/css/custom.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
 <!-- Content -->
  <div class="container-ratio bg">
  <?php 
if (isset($_GET['pesan']) && $_GET['pesan'] == "gagal") {
    echo "<div class='alert alert-danger mt-2 mb-2'>Email dan Password tidak sesuai!</div>";
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include "../../database/config.php";
    session_start();

    $pasien_email = mysqli_real_escape_string($koneksi, $_POST['pasien_email']);
    $pasien_password = md5($_POST['pasien_password']); // penting!

    $login = mysqli_query($koneksi, "SELECT * FROM pasien WHERE pasien_email='$pasien_email' AND pasien_password='$pasien_password'");
    $cek = mysqli_num_rows($login);

    if ($cek > 0) {
        $data = mysqli_fetch_assoc($login);

        $_SESSION['pasien_email'] = $pasien_email;
        $_SESSION['pasien_id'] = $data['pasien_id'];
        $_SESSION['pasien_name'] = $data['pasien_name'];

        header("Location: https://healthcare.wenginard.cloud");
        exit();
    } else {
        header("Location: https://healthcare.wenginard.cloud/app/auth/login/?pesan=gagal");
        exit();
    }
}
?>


    <img src="../../../public/img/web/top-img.jpg" width="578" height="285" alt="Profile Image">
    
    <h3 class="mb-3 teks mx-5"><b>Silahkan Login<br> untuk Melanjutkan </b></h3>
    <div class="d-flex justify-content-center">
      <div class="col-md-6 d-flex flex-column align-items-center gap-3">
        <form method="POST">
            <label for="emial" class="form-label"><b>E-mail Address</b></label>
            <div class="input-icon-wrapper mb-3">
              <i class="bi bi-envelope input-icon-left"></i>
              <input type="email" class="input-custom" name="pasien_email" placeholder="Masukkan Email Anda">
            </div>
            <label for="emial" class="form-label"><b>Password</b></label>
            <div class="input-icon-wrapper mb-3">
              <i class="bi bi-key-fill input-icon-left"></i>
              <input type="password" class="input-custom" name="pasien_password" placeholder="Masukan Password Anda">
            </div>
             <div class="row justify-content-center">
              <div class="col-md-6">
                <div class="row align-items-center">
                  <div class="col">
                    <input type="submit" class="btn btn-custom-1 btn-lg rounded-pill" value="Masuk" name="masuk">
                  </div>
                  <div class="col text-end">
                    <a href="#" class="text-decoration-none" style="color: #0e3d3d; font-weight: 500;">
                      Lupa Kata Sandi?
                    </a>
                  </div>
                </div>
              </div>
            </div>

        </form>
      </div>
    </div>

  </div>

  <script src="../../../public/js/bootstrap.bundle.min.js"></script>
</body>
</html>

