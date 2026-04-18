<?php 
    include 'header.php'; 
    include 'bahasa.php';
?>
<body id="page-top" class="font-sans antialiased bg-slate-50 dark:bg-slate-950 text-slate-900 dark:text-slate-100 min-h-screen transition-colors duration-300">

<?php include 'navbar.php'; ?>

    <main id="content-display" class="relative">
        <?php 
            if(isset($_GET['akses']) && $_GET['akses'] == 'masuk'){
                include "beranda.php";
            } 
            elseif(isset($_GET['halaman'])){
                $hal = $_GET['halaman'];
                if(file_exists($hal . ".php")){
                    include $hal . ".php";
                } elseif(file_exists("rentetan/" . $hal . ".php")) {
                    include "rentetan/" . $hal . ".php";
                } else {
                    echo "<div class='flex flex-col items-center justify-center min-h-[60vh]'>
                            <h2 class='text-emerald-900 dark:text-emerald-400 text-3xl font-bold'>Halaman Tidak Ditemukan!</h2>
                            <a href='index.php' class='mt-4 btn-primary'>Kembali ke Beranda</a>
                          </div>";
                }
            }
            else {
                include "landing_page.php";
            }
        ?>
    </main>

    <!-- Modern Footer -->
    <footer class="bg-emerald-950 dark:bg-black text-emerald-50 pt-20 pb-10 border-t border-emerald-900/50">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 pb-16 border-b border-emerald-900/50">
                <!-- Redaksi -->
                <div class="lg:col-span-8">
                    <h5 class="text-xs font-black uppercase tracking-[0.2em] text-emerald-500 mb-8">Tim Redaksi</h5>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-8">
                        <div class="space-y-4">
                            <div>
                                <p class="text-[10px] uppercase font-bold text-emerald-500/50 mb-1">Penasihat</p>
                                <p class="font-bold text-emerald-50 dark:text-emerald-100">Al-Ustadz Dr. Nurul Salis Alamin, M.Pd.I.</p>
                            </div>
                            <div>
                                <p class="text-[10px] uppercase font-bold text-emerald-500/50 mb-1">Pembimbing</p>
                                <p class="font-bold text-emerald-50 dark:text-emerald-100">Al-Ustadz Farouq Muhammad Syarif, S.Fill.I.</p>
                            </div>
                        </div>
                        <div class="space-y-4">
                            <div>
                                <p class="text-[10px] uppercase font-bold text-emerald-500/50 mb-1">Tim Penulis</p>
                                <p class="text-emerald-100/70 text-sm leading-relaxed font-medium">Nabila Fatihatunnada, A'izzaty Alfatul Urfi, Dea El Syifana Qurratu'ain</p>
                            </div>
                            <div>
                                <p class="text-[10px] uppercase font-bold text-emerald-500/50 mb-1">Tim Layout</p>
                                <p class="text-emerald-100/70 text-sm leading-relaxed font-medium">Maghfiro Ihzani Maulania, Siti Avila Amadea, Aufa Syahma Nabila</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Credits -->
                <div class="lg:col-span-4 lg:text-right flex flex-col justify-between">
                    <div>
                        <h5 class="text-xl font-black tracking-tighter text-white mb-2 text-balance">GUIDEBOOK PKA 100</h5>
                        <p class="text-emerald-400 font-bold mb-1">Pondok Modern Darussalam Gontor</p>
                        <p class="text-emerald-100/50 text-sm">Panitia PKA 100 Gontor 2026</p>
                    </div>
                    <div class="pt-10">
                        <p class="text-xs text-emerald-500/40 uppercase tracking-widest">Copyright &copy; 2026 Gontor</p>
                    </div>
                </div>
            </div>
            <div class="pt-8 text-center">
                 <a href="#page-top" class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-emerald-900 dark:bg-emerald-800 text-emerald-500 hover:bg-emerald-500 hover:text-emerald-950 transition-all shadow-lg">
                    <i class="fa-solid fa-chevron-up"></i>
                 </a>
            </div>
        </div>
    </footer>

    <script src="js/scripts.js"></script>
    <script>
function gantiBahasa(pilihan) {
    const elemenTeks = document.querySelectorAll('.lang-txt');
    elemenTeks.forEach(el => {
        const kunci = el.getAttribute('data-key');
        if (kamus[pilihan][kunci]) {
            el.innerHTML = kamus[pilihan][kunci];
        }
    });

    if (pilihan === 'ar') {
        document.body.setAttribute('dir', 'rtl');
    } else {
        document.body.setAttribute('dir', 'ltr');
    }

    // Update buttons
    ['id', 'en', 'ar'].forEach(lang => {
        const btn = document.getElementById('btn-' + lang);
        if (btn) {
            if (lang === pilihan) {
                btn.classList.add('btn-bahasa-active');
                btn.classList.remove('btn-bahasa-inactive');
            } else {
                btn.classList.add('btn-bahasa-inactive');
                btn.classList.remove('btn-bahasa-active');
            }
        }
    });
    
    localStorage.setItem('bahasaDipilih', pilihan);
}

function toggleDarkMode() {
    const isDark = document.documentElement.classList.toggle('dark');
    localStorage.setItem('darkMode', isDark ? 'enabled' : 'disabled');
}

window.onload = function() {
    const bahasaTerakhir = localStorage.getItem('bahasaDipilih') || 'id';
    gantiBahasa(bahasaTerakhir);
};
</script>
</body>
</html>