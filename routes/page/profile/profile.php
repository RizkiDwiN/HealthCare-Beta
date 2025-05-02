<?php 
	
	$name = $_GET['name'];

	$sql = $koneksi->query("SELECT * FROM pasien WHERE pasien_name = '$name' ");
	$data = $sql->fetch_assoc();
	
?>
<section class="bg-primary-custom rounded-3 p-3 mb-4 d-flex align-items-center gap-3">
    <i class="bi bi-person-badge icon-bg"></i>
    <div class="text-dark-custom small-text">
     <p class="mb-1">Nama<span class="d-inline-block" style="width:1rem;"></span>:<span class="d-inline-block" style="width:0.5rem;"> <?php echo $data['pasien_name']; ?></span></p>
     <p class="mb-1">Alamat<span class="d-inline-block" style="width:0.5rem;"></span>:<span class="d-inline-block" style="width:0.5rem;"> ?</span></p>
     <p class="mb-1">Tempat Tanggal Lahir<span class="d-inline-block" style="width:0.25rem;"></span>:<span class="d-inline-block" style="width:250px;"> 
        <?php
            $tanggal = $data['pasien_birthday'];
            echo date('d F Y', strtotime('$tanggal'));
        ?>
    </span></p>
     <p class="mb-1">Jenis Kelamin<span class="d-inline-block" style="width:0.5rem;"></span>:<span class="d-inline-block" style="width:0.5rem;"> <?php echo $data['pasien_gender']; ?></span></p>
     <p class="mb-0">Agama<span class="d-inline-block" style="width:3rem;"></span>:<span class="d-inline-block" style="width:0.5rem;"> ?</span></p>
    </div>
   </section>
   <!-- Health History -->
   <section class="bg-dark-custom rounded-3 p-3 text-primary-custom small-text mb-5">
    <h2 class="font-extrabold fs-6 mb-3">RIWAYAT KESEHATAN</h2>
    <div class="mb-3">
     <p class="font-semibold mb-1">Pemeriksaan Fisik</p>
     <p class="mb-1">Tinggi Badan<span class="d-inline-block" style="width:1rem;"></span>:<span class="d-inline-block" style="width:0.5rem;"></span></p>
     <p class="mb-1">Berat Badan<span class="d-inline-block" style="width:1rem;"></span>:<span class="d-inline-block" style="width:0.5rem;"></span></p>
     <p class="mb-1">Tekanan Darah<span class="d-inline-block" style="width:0.5rem;"></span>:<span class="d-inline-block" style="width:0.5rem;"></span></p>
     <p class="mb-0">Frekuensi Nadi<span class="d-inline-block" style="width:0.5rem;"></span>:<span class="d-inline-block" style="width:0.5rem;"></span></p>
    </div>
    <div class="mb-3">
     <p class="font-semibold mb-1">Riwayat Penyakit</p>
     <p class="mb-1">Diagnosa Medis<span class="d-inline-block" style="width:1rem;"></span>:<span class="d-inline-block" style="width:0.5rem;"></span></p>
     <p class="mb-0">Diagnosa Keperawatan<span class="d-inline-block" style="width:0.5rem;"></span>:<span class="d-inline-block" style="width:0.5rem;"></span></p>
    </div>
    <p class="mb-4">Perawatan <span class="font-semibold">Yang Dilakukan</span> :</p>
    <p class="text-center" style="font-size: 8px;">Terakhir Diperbarui 9 Maret 2025</p>
   </section>
   <!-- Care Calendar -->
   <section class="bg-primary-custom rounded-3 p-3 d-flex align-items-center gap-3">
    <img alt="Illustration of a calendar with red rings on top and blue squares representing dates" class="flex-shrink-0" height="64" src="https://storage.googleapis.com/a1aa/image/718d1622-67f2-4ad8-59dd-7008ede21c44.jpg" width="64"/>
    <div class="text-dark-custom small-text">
     <p class="font-extrabold mb-1">KALENDER PERAWATAN</p>
     <p class="mb-1">Punya Jadwal Perawatan?</p>
     <p class="mb-1">Segera Simpan Jadwalmu</p>
     <p class="mb-0">Agar kami bisa mengingatkanmu!</p>
    </div>
   </section>