<?php 
    // 1. Definisikan semua halaman yang BOLEH diakses
    $rentetan = ['beranda','acara', 'data', 'serba_serbi', 'rentetan', 'kritik']; 
    
    // 2. Ambil nilai dari URL (biar nulisnya lebih pendek nanti)
    $halaman_aktif = isset($_GET['halaman']) ? $_GET['halaman'] : null;
    $akses_masuk = (isset($_GET['akses']) && $_GET['akses'] == 'masuk');

    // Tampilkan Sidebar HANYA jika halaman ada di daftar valid
    if(in_array($halaman_aktif, $rentetan)): 
?>
    <div class="offcanvas offcanvas-start bg-dark text-white" tabindex="-1" id="sidebarPKA" aria-labelledby="offcanvasExampleLabel">
      <div class="offcanvas-header border-bottom border-secondary">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel">MENU NAVIGASI</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="nav flex-column">
          <li class="nav-item mb-2">
    <a class="nav-link text-white hover-link" href="index.php?akses=masuk">
        <i class="fas fa-home me-2"></i> 
        <span class="lang-txt" data-key="menu_beranda">Beranda</span>
    </a>
</li>
          <li class="nav-item mb-2">
            <a class="nav-link text-white hover-link" href="index.php?halaman=rentetan">
              <i class="fas fa-book-open me-2"></i>
              <span class="lang-txt" data-key="menu_rentetan">Rentetan</span></a>
          </li>
          <li class="nav-item mb-2">
    <a class="nav-link text-white hover-link" href="index.php?halaman=data">
        <i class="fas fa-book-open me-2"></i> 
        <span class="lang-txt" data-key="menu_data">Data</span>
    </a>
</li>
          <li class="nav-item mb-2">
            <a class="nav-link text-white hover-link" href="index.php?halaman=acara">
              <i class="fas fa-book-open me-2"></i>
            <span class="lang-txt" data-key="menu_acara">Acara</span>
          </a>
          </li>
           <li class="nav-item mb-2">
            <a class="nav-link text-white hover-link" href="index.php?halaman=serba_serbi">
              <i class="fas fa-book-open me-2"></i> 
              <span class="lang-txt" data-key="menu_serba">Serba-Serbi</span></a>
          </li>
          <hr>
          <li class="nav-item mb-2">
            <a class="nav-link text-danger" href="index.php">
              <i class="fas fa-sign-out-alt me-2"></i>
              <span class="lang-txt" data-key="menu_keluar">Keluar</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
<?php endif; ?>



 <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container-fluid px-4 px-lg-5 d-flex align-items-center">
         <?php if(isset($_GET['halaman']) && in_array($_GET['halaman'], $rentetan)): ?>
            <button class="btn btn-dark me-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarPKA">
                <i class="fa-solid fa-bars"></i>
            </button>
        <?php endif; ?>

        <a class="navbar-brand fw-bold">GUIDEBOOK PKA</a>
        
    </div>
    <div class="ms-auto d-flex">
    <button id="btn-id" onclick="gantiBahasa('id')" class="btn btn-sm btn-bahasa btn-success me-1">ID</button>
    <button id="btn-en" onclick="gantiBahasa('en')" class="btn btn-sm btn-bahasa btn-outline-dark me-1">EN</button>
    <button id="btn-ar" onclick="gantiBahasa('ar')" class="btn btn-sm btn-bahasa btn-outline-dark">AR</button>
</div>
</nav>