<section class="relative min-h-screen flex items-center justify-center overflow-hidden">
    <!-- Background Gradient & Image -->
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-gradient-to-br from-emerald-950/90 via-emerald-900/80 to-emerald-800/90 dark:from-black dark:via-emerald-950/80 dark:to-black mix-blend-multiply"></div>
        <img src="assets/img/test-bg.jpeg" class="w-full h-full object-cover" alt="Background">
    </div>

    <!-- Animated Shapes -->
    <div class="absolute top-[-10%] left-[-10%] w-[50%] h-[50%] bg-emerald-500/10 blur-[120px] rounded-full animate-pulse"></div>
    <div class="absolute bottom-[-10%] right-[-10%] w-[50%] h-[50%] bg-teal-500/10 blur-[120px] rounded-full animate-pulse"></div>

    <div class="container relative z-10 px-6 py-20 mx-auto">
        <div class="flex flex-col items-center text-center max-w-4xl mx-auto">
            <!-- IMMERSIVE GLASS CARD -->
            <div class="glass-card dark:bg-slate-900/40 dark:border-slate-800 p-10 md:p-16 w-full shadow-2xl shadow-emerald-950/50 animate-float border border-white/20 rounded-[40px] backdrop-blur-xl">
                <div class="mb-8">
                    <span class="inline-block px-4 py-1.5 mb-6 text-[10px] font-black tracking-[0.3em] text-emerald-400 uppercase bg-emerald-400/10 rounded-full border border-emerald-400/20">
                        GP3 - 1447/2026
                    </span>
                    <h1 class="text-4xl md:text-6xl font-extrabold text-white mb-4 leading-tight tracking-tight">
                        <span class="lang-txt" data-key="judul_1"><?php echo $t['judul_1'] ?? 'PEKAN PERKENALAN'; ?></span><br>
                        <span class="text-emerald-400 lang-txt" data-key="judul_2"><?php echo $t['judul_2'] ?? "KHUTBATU-L-'ARSY"; ?></span>
                    </h1>
                    <p class="text-lg md:text-xl text-emerald-50/70 font-medium max-w-2xl mx-auto leading-relaxed lang-txt" data-key="slogan">
                        <?php echo $t['slogan'] ?? '"Gontor Berkomitmen Menanamkan Nilai-Nilai Islam"'; ?>
                    </p>
                </div>

                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                    <a href="index.php?akses=masuk" class="w-full sm:w-auto px-10 py-4 bg-emerald-500 hover:bg-emerald-400 text-emerald-950 font-black text-lg rounded-2xl shadow-xl shadow-emerald-500/20 transition-all duration-300 transform hover:-translate-y-1 active:scale-95 flex items-center justify-center gap-3">
                        <span class="lang-txt" data-key="menu_beranda">BERANDA</span>
                        <i class="fas fa-arrow-right-long"></i>
                    </a>
                </div>
            </div>

            <!-- Scroll Indicator -->
            <div class="mt-12 opacity-60 flex flex-col items-center gap-2">
                <span class="text-[10px] font-black text-emerald-200 tracking-[0.3em] uppercase">Scroll Down</span>
                <div class="w-px h-12 bg-gradient-to-b from-emerald-400 to-transparent"></div>
            </div>
        </div>
    </div>
</section>


<style>
@keyframes fadeInUp {
    from { opacity: 0; transform: translateY(30px); }
    to { opacity: 1; transform: translateY(0); }
}

@keyframes float {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-10px); }
}

.glass-card {
    animation: fadeInUp 1s cubic-bezier(0.16, 1, 0.3, 1) forwards, float 6s ease-in-out infinite transition-all;
}
</style>