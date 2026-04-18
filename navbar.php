<?php 
    $rentetan = ['beranda','acara', 'data', 'serba_serbi', 'rentetan', 'kritik']; 
    $halaman_aktif = isset($_GET['halaman']) ? $_GET['halaman'] : null;
    $is_logged_in = (isset($_GET['akses']) || isset($_GET['halaman']));
?>

<!-- Navbar -->
<nav class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 glass-card dark:bg-slate-900/80 dark:border-slate-800 mx-2 mt-2 py-3 px-4 flex items-center justify-between shadow-xl">
    <div class="flex items-center gap-4">
        <?php if($is_logged_in): ?>
            <button onclick="toggleSidebar()" class="p-2 hover:bg-emerald-50 dark:hover:bg-emerald-900/30 rounded-lg text-emerald-900 dark:text-emerald-400 transition-colors">
                <i class="fa-solid fa-bars-staggered text-xl"></i>
            </button>
        <?php endif; ?>
        <a href="index.php" class="text-xl font-extrabold tracking-tighter text-emerald-900 dark:text-white uppercase transition-colors">
            Guidebook<span class="text-emerald-500">PKA</span>
        </a>
    </div>

    <div class="flex items-center gap-2">
        <!-- Dark Mode Toggle -->
        <button onclick="toggleDarkMode()" class="p-2 mr-2 rounded-xl bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-amber-400 hover:bg-slate-200 dark:hover:bg-slate-700 transition-all duration-300">
            <i class="fa-solid fa-moon dark:hidden"></i>
            <i class="fa-solid fa-sun hidden dark:block"></i>
        </button>

        <button id="btn-id" onclick="gantiBahasa('id')" class="btn-bahasa btn-bahasa-inactive">ID</button>
        <button id="btn-en" onclick="gantiBahasa('en')" class="btn-bahasa btn-bahasa-inactive">EN</button>
        <button id="btn-ar" onclick="gantiBahasa('ar')" class="btn-bahasa btn-bahasa-inactive">AR</button>
    </div>
</nav>

<!-- Sidebar Overlay -->
<div id="sidebarOverlay" onclick="toggleSidebar()" class="fixed inset-0 bg-slate-900/40 backdrop-blur-sm z-[60] opacity-0 pointer-events-none transition-opacity duration-300"></div>

<!-- Sidebar -->
<aside id="sidebar" class="fixed top-0 left-0 bottom-0 w-80 bg-white dark:bg-slate-900 shadow-2xl z-[70] translate-x-[-100%] transition-transform duration-300 ease-out flex flex-col">
    <!-- Sidebar Header -->
    <div class="p-6 border-b border-slate-100 dark:border-slate-800 flex items-center justify-between">
        <h5 class="text-sm font-bold text-slate-400 dark:text-slate-500 uppercase tracking-widest">MENU NAVIGASI</h5>
        <button onclick="toggleSidebar()" class="p-2 hover:bg-slate-50 dark:hover:bg-slate-800 rounded-lg text-slate-500 dark:text-slate-400">
            <i class="fa-solid fa-xmark"></i>
        </button>
    </div>

    <!-- Sidebar Content -->
    <div class="flex-1 overflow-y-auto p-4 space-y-2">
        <a href="index.php?akses=masuk" class="flex items-center gap-4 p-4 rounded-xl text-slate-700 dark:text-slate-300 hover:bg-emerald-50 dark:hover:bg-emerald-900/30 hover:text-emerald-700 dark:hover:text-emerald-400 transition-all group <?php echo ($halaman_aktif == null) ? 'bg-emerald-50 dark:bg-emerald-900/30 text-emerald-700 dark:text-emerald-400 font-bold' : ''; ?>">
            <div class="w-10 h-10 flex items-center justify-center rounded-lg bg-emerald-100 dark:bg-emerald-900/50 text-emerald-600 dark:text-emerald-400 group-hover:bg-emerald-600 group-hover:text-white transition-colors">
                <i class="fas fa-home"></i>
            </div>
            <span class="lang-txt" data-key="menu_beranda">Beranda</span>
        </a>

        <a href="index.php?halaman=rentetan" class="flex items-center gap-4 p-4 rounded-xl text-slate-700 dark:text-slate-300 hover:bg-emerald-50 dark:hover:bg-emerald-900/30 hover:text-emerald-700 dark:hover:text-emerald-400 transition-all group <?php echo ($halaman_aktif == 'rentetan') ? 'bg-emerald-50 dark:bg-emerald-900/30 text-emerald-700 dark:text-emerald-400 font-bold' : ''; ?>">
            <div class="w-10 h-10 flex items-center justify-center rounded-lg bg-emerald-100 dark:bg-emerald-900/50 text-emerald-600 dark:text-emerald-400 group-hover:bg-emerald-600 group-hover:text-white transition-colors">
                <i class="fas fa-calendar-alt"></i>
            </div>
            <span class="lang-txt" data-key="menu_rentetan">Rentetan</span>
        </a>

        <a href="index.php?halaman=data" class="flex items-center gap-4 p-4 rounded-xl text-slate-700 dark:text-slate-300 hover:bg-emerald-50 dark:hover:bg-emerald-900/30 hover:text-emerald-700 dark:hover:text-emerald-400 transition-all group <?php echo ($halaman_aktif == 'data') ? 'bg-emerald-50 dark:bg-emerald-900/30 text-emerald-700 dark:text-emerald-400 font-bold' : ''; ?>">
            <div class="w-10 h-10 flex items-center justify-center rounded-lg bg-emerald-100 dark:bg-emerald-900/50 text-emerald-600 dark:text-emerald-400 group-hover:bg-emerald-600 group-hover:text-white transition-colors">
                <i class="fas fa-database"></i>
            </div>
            <span class="lang-txt" data-key="menu_data">Data</span>
        </a>

        <a href="index.php?halaman=acara" class="flex items-center gap-4 p-4 rounded-xl text-slate-700 dark:text-slate-300 hover:bg-emerald-50 dark:hover:bg-emerald-900/30 hover:text-emerald-700 dark:hover:text-emerald-400 transition-all group <?php echo ($halaman_aktif == 'acara') ? 'bg-emerald-50 dark:bg-emerald-900/30 text-emerald-700 dark:text-emerald-400 font-bold' : ''; ?>">
            <div class="w-10 h-10 flex items-center justify-center rounded-lg bg-emerald-100 dark:bg-emerald-900/50 text-emerald-600 dark:text-emerald-400 group-hover:bg-emerald-600 group-hover:text-white transition-colors">
                <i class="fas fa-star"></i>
            </div>
            <span class="lang-txt" data-key="menu_acara">Acara</span>
        </a>

        <a href="index.php?halaman=serba_serbi" class="flex items-center gap-4 p-4 rounded-xl text-slate-700 dark:text-slate-300 hover:bg-emerald-50 dark:hover:bg-emerald-900/30 hover:text-emerald-700 dark:hover:text-emerald-400 transition-all group <?php echo ($halaman_aktif == 'serba_serbi') ? 'bg-emerald-50 dark:bg-emerald-900/30 text-emerald-700 dark:text-emerald-400 font-bold' : ''; ?>">
            <div class="w-10 h-10 flex items-center justify-center rounded-lg bg-emerald-100 dark:bg-emerald-900/50 text-emerald-600 dark:text-emerald-400 group-hover:bg-emerald-600 group-hover:text-white transition-colors">
                <i class="fas fa-shapes"></i>
            </div>
            <span class="lang-txt" data-key="menu_serba">Serba-Serbi</span>
        </a>

        <div class="pt-4 mt-4 border-t border-slate-100 dark:border-slate-800">
            <a href="index.php" class="flex items-center gap-4 p-4 rounded-xl text-red-600 dark:text-red-400 hover:bg-red-50 dark:hover:bg-red-900/20 transition-all group">
                <div class="w-10 h-10 flex items-center justify-center rounded-lg bg-red-100 dark:bg-red-900/30 text-red-600 dark:text-red-400 group-hover:bg-red-600 group-hover:text-white transition-colors">
                    <i class="fas fa-sign-out-alt"></i>
                </div>
                <span class="lang-txt" data-key="menu_keluar">Keluar</span>
            </a>
        </div>
    </div>
</aside>

<script>
function toggleSidebar() {
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('sidebarOverlay');
    const isOpen = sidebar.style.transform === 'translateX(0%)';

    if (isOpen) {
        sidebar.style.transform = 'translateX(-100%)';
        overlay.classList.add('opacity-0', 'pointer-events-none');
    } else {
        sidebar.style.transform = 'translateX(0%)';
        overlay.classList.remove('opacity-0', 'pointer-events-none');
    }
}
</script>