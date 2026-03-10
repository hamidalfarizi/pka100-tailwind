<?php 
    include 'header.php'; 
?>
<style>
    /* Global Font Fix */
    body, h1, h2, h3, h4, h5, h6, p, a, button {
        font-family: 'Times New Roman', Times, serif !important;
    }

    /* Navigation Bar Styling */
    #mainNav .nav-link {
        font-weight: 700 !important;
        font-size: 16px !important;
        text-transform: uppercase !important;
        letter-spacing: 0.1rem !important;
    }

    #mainNav .navbar-brand {
        font-weight: 800 !important;
        letter-spacing: 2px !important;
    }

    /* Masthead / Judul Utama */
    .masthead h1 {
        font-size: 3.5rem !important;
        line-height: 1.2; 
    }

    .masthead h2 {
        font-size: 1.2rem !important;
        max-width: 100% !important;
        margin: 0 auto !important;
    }

    /* Perbaikan Tombol Sidebar agar tetap di pojok kiri */
    .btn-sidebar-nav {
        background: #212529 !important;
        color: white !important;
        border: none !important;
        padding: 8px 15px !important;
        position: absolute;
        left: 10px;
        top: 10px;
        z-index: 9999;
    }
</style>

<body id="page-top">

<?php 
    // 1. Definisikan semua halaman yang BOLEH diakses
    $rentetan = ['acara', 'data', 'serba_serbi', 'rentetan', 'denah', 'kritik']; 
    
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
            <a class="nav-link text-white hover-link" href="index.php?akses=masuk"><i class="fas fa-home me-2"></i> Beranda</a>
          </li>
          <li class="nav-item mb-2">
            <a class="nav-link text-white hover-link" href="index.php?halaman=rentetan"><i class="fas fa-book-open me-2"></i> Rentetan Kegiatan PKA</a>
          </li>
          <li class="nav-item mb-2">
            <a class="nav-link text-white hover-link" href="index.php?halaman=data"><i class="fas fa-book-open me-2"></i> Data</a>
          </li>
          <li class="nav-item mb-2">
            <a class="nav-link text-white hover-link" href="index.php?halaman=serba_serbi"><i class="fas fa-book-open me-2"></i> Serba-Serbi</a>
          </li>
          <hr>
          <li class="nav-item mb-2">
            <a class="nav-link text-danger" href="index.php"><i class="fas fa-sign-out-alt me-2"></i> Keluar</a>
          </li>
        </ul>
      </div>
    </div>
<?php endif; ?>

<?php if(isset($_GET['akses']) || isset($_GET['halaman'])): ?>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class=" px-4 px-lg-5">
            
            <?php if(isset($_GET['halaman']) && in_array($_GET['halaman'], $rentetan)): ?>
                <button class="btn btn-sidebar-nav" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarPKA">
                    <i class="fa-solid fa-bars"></i>
                </button>
            <?php endif; ?>

            <a class="navbar-brand ms-4">GUIDEBOOK PKA </a>
            
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </nav>
    <?php endif; ?>

    <div id="content-display">
        <?php 
            if(isset($_GET['akses']) && $_GET['akses'] == 'masuk'){
                include "beranda.php";
            } 
            elseif(isset($_GET['halaman'])){
                $hal = $_GET['halaman'];
                if(file_exists($hal . ".php")){
                    include $hal . ".php";
                } else {
                    echo "<h2 class='text-white text-center mt-5'>Halaman Tidak Ditemukan!</h2>";
                }
            }
            else {
                include "landing_page.php";
            }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
</body>
</html>