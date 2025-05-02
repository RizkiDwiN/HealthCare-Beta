<?php  
    include "app/database/config.php";

    session_start();

    // Mengatur zona waktu ke "Asia/Jakarta"
   date_default_timezone_set('Asia/Jakarta');

    if($_SESSION['pasien_email']==""){
            header("location:app/auth/welcome");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Health Care</title>
  <link href="public/css/bootstrap.min.css" rel="stylesheet">
  <link href="public/css/custom.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
  <!-- Cards Grid -->
  <div class="container-ratio bg">
    <div class="container my-4">
    <header class="d-flex justify-content-between align-items-center mb-4">
    <div class="d-flex align-items-center gap-2">
     <img alt="Icon of a nurse call device with a cross and a microphone" height="32" src="https://storage.googleapis.com/a1aa/image/5da724f6-fa19-4797-7750-d1e4500f6a94.jpg" width="32"/>
     <div class="text-primary-custom fs-5 fw-bold lh-1">
      <div>NURSE</div>
      <div>1 CALL</div>
     </div>
    </div>
    <a href="app/auth/logout"><i class="bi bi-arrow-left fs-2 text-dark-custom"></i></a>
   </header>
    <?php 

        $page = isset($_GET['page']) ? $_GET['page'] : '';
        $aksi = isset($_GET['aksi']) ? $_GET['aksi'] : '';

        switch ($page) {
            case "":
            case "home":
                if ($aksi == "") {
                    include "routes/page/home.php";
                }
                break;
                
            case "history":
                if ($aksi == "") {
                    include "routes/page/history/history.php";
                }
                break;
            
            case "service":
              if ($aksi == "") {
                  include "routes/page/layanan/layanan.php";
              }else if ($aksi == "service-care") {
                  include "routes/page/layanan/perawatan.php";
              }else if ($aksi == "form") {
                  include "routes/page/layanan/form.php";
              }else if ($aksi == "payment") {
                  include "routes/page/layanan/payment.php";
              }else if ($aksi == "service-detail") {
                  include "routes/page/layanan/detail.php";
              }else if ($aksi == "chat") {
                include "routes/page/layanan/chat.php";
              }
              break;
            
            case "self-care":
              if ($aksi == "") {
                  include "routes/page/self-care/self-care.php";
              }
              break;

            case "profile":
                if ($aksi == "") {
                    include "routes/page/profile/profile.php";
                }
                break;

            case "version":
              if ($aksi == "") {
                  include "routes/page/version.php";
              }  
              break;
            
            default:
                header("Location: ?page=home");
                exit;
        }
        ?>
    </div>
  </div>

  <!-- Bottom Navbar -->
  <nav class="navbar fixed-bottom navbar-light bg-light">
    <div class="container-fluid">
      <ul class="navbar-nav d-flex flex-row justify-content-around w-100">
        <li class="nav-item">
          <a class="nav-link text-center" href="?page=home">
            <i class="bi bi-house"></i><br>Beranda
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-center" href="?page=history">
            <i class="bi bi-clock-history"></i><br>Riwayat
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-center" href="?page=service">
            <i class="bi bi-heart-pulse"></i><br>Layanan
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-center" href="?page=self-care">
            <i class="bi bi-bandaid"></i><br>Self-Care
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-center" href="?page=profile&name=<?php echo $_SESSION['pasien_name']; ?>">
            <i class="bi bi-person"></i><br>Akun
          </a>
        </li>
      </ul>
    </div>
  </nav>

  <script src="public/js/bootstrap.bundle.min.js"></script>
</body>
</html>
