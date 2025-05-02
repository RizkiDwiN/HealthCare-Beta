<?php
  include "../../database/config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Health Care</title>
  <link href="../../../public/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../../public/css/custom.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
 <!-- Content -->
  <div class="container-ratio bg">
    <img src="../../../public/img/web/top-img.jpg" width="578" height="285" alt="Profile Image">
    
    <h3 class="mb-3 teks mx-5"><b>Registrasi pengguna baru</b></h3>
    <div class="d-flex justify-content-center">
      <div class="col-md-6 d-flex flex-column align-items-center gap-3">
        <form method="POST">
          <label for="nama" class="form-label"><b>Nama Lengkap Pengguna</b></label>
            <div class="input-icon-wrapper mb-3">
              <i class="bi bi-person-fill input-icon-left"></i>
              <input type="text" class="input-custom" name="pasien_name" placeholder="Masukkan Nama Lengkap">
            </div>
          <label for="GENDER" class="form-label"><b>Gender & Tanggal Lahir (Sesuai Kartu Identitas)</b></label>
            <div class="row g-2 align-items-center mb-3">
              <div class="col-md-6 position-relative">
                <i class="bi bi-gender-male input-icon-left"></i>
                <input type="text" class="form-control input-custom-short ps-5" name="pasien_gender" placeholder="Laki-laki">
              </div>
              <div class="col-md-6">
                <input type="date" class="form-control input-custom-short" name="pasien_birthday" placeholder="dd/mm/yyyy">
              </div>
            </div>
            <div class="input-icon-wrapper mb-3">
              <i class="bi bi-telephone-fill input-icon-left"></i>
              <input type="text" class="input-custom" name="pasien_contact" placeholder="Masukan Whatsapp / Phone Anda">
            </div>
            <label for="emial" class="form-label"><b>Email Pengguna </b></label>
            <div class="input-icon-wrapper mb-3">
              <i class="bi bi-envelope input-icon-left"></i>
              <input type="email" class="input-custom" name="pasien_email" placeholder="Masukkan Email Anda">
            </div>
            <div class="input-icon-wrapper mb-3">
              <i class="bi bi-key-fill input-icon-left"></i>
              <input type="password" class="input-custom" name="pasien_password" placeholder="Masukan Password Anda">
            </div>
            <div class="input-icon-wrapper mb-3">
              <i class="bi bi-key-fill input-icon-left"></i>
              <input type="password" class="input-custom" name="pasien_password" placeholder="Ulangi Password Anda">
            </div>
            <div class="input-icon-wrapper mb-3">
              <input class="form-check-input" type="checkbox" id="tanggungjawab" required>
              <label class="form-check-label" for="tanggungjawab">
                <b>Saya bertanggung jawab dengan informasi yang saya kirim</b>
              </label>
            </div>
             <div class="d-flex justify-content-center">
              <div class="col-md-6 d-flex flex-column align-items-center gap-3">
                <input type="submit" class="btn btn-custom-1 btn-lg rounded-pill" name="register" value="Registrasi">
              </div>
            </div>
        </form>
      </div>
    </div>

  </div>

  <script src="../../../public/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php

  if (isset($_POST['register'])) {

    include "token.php";
                        			
    $pid = "PSNH" . getToken(4);
    $name = $_POST['pasien_name'];
    $gender = $_POST['pasien_gender'];
    $birthday = $_POST['pasien_birthday'];
    $contact = $_POST['pasien_contact'];
    $email = $_POST['pasien_email'];
    $password = md5($_POST['pasien_password']);
    $asurance = 0;

    $sql = $koneksi->query("INSERT INTO pasien (pasien_id, pasien_name, pasien_gender, pasien_birthday, pasien_contact, pasien_email, pasien_password, pasien_asurance) VALUES ('$pid','$name','$gender','$birthday','$contact','$email','$password','$asurance')");


    if ($sql) {
      ?>

        <script type="text/javascript">
          alert('Data Berhasil Disimpan');
          window.location.href="../login";
        </script>

      <?php
    }

  }

?>
