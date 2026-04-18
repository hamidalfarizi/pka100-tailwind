<!-- Hero Header -->
<header class="relative pt-32 pb-20 px-6 overflow-hidden">
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-gradient-to-b from-emerald-950/40 via-emerald-900/60 to-slate-50 dark:to-slate-950"></div>
        <img src="assets/img/test-bg.jpeg" class="w-full h-full object-cover" alt="Background">
    </div>

    <div class="container relative z-10 mx-auto text-center">
        <h1 class="text-3xl md:text-5xl font-black text-white mb-4 tracking-tight uppercase">
            <span class="lang-txt" data-key="judul_1"></span><br>
            <span class="text-emerald-400 lang-txt" data-key="judul_2"></span>
        </h1>
        <div class="w-24 h-1.5 bg-emerald-500 mx-auto rounded-full mb-6"></div>
        <p class="text-lg text-emerald-50/80 font-medium max-w-2xl mx-auto lang-txt" data-key="slogan"></p>
    </div>
</header>

<!-- Narasi Section -->
<section class="py-16 px-6 bg-slate-50 dark:bg-slate-950 relative z-20">
    <div class="container mx-auto px-6 max-w-4xl">
        <div class="bg-white dark:bg-slate-900 rounded-[40px] p-10 md:p-16 shadow-2xl dark:shadow-emerald-900/10 -mt-24 relative z-20 border border-slate-100 dark:border-slate-800">
            <div class="flex justify-center mb-10">
                <div class="w-20 h-1.5 bg-emerald-100 dark:bg-emerald-900 rounded-full"></div>
            </div>
            <p class="text-slate-600 dark:text-slate-300 text-lg md:text-xl leading-relaxed text-center font-medium italic lang-txt" data-key="narasi_pembuka">
                <?php echo $t['narasi_pembuka'] ?? 'Melihat zaman yang semakin maju dan berkembang...'; ?>
            </p>
        </div>
    </div>
</section>

<!-- Main Grid -->
<section class="pb-24 px-6 bg-slate-50 dark:bg-slate-950">
    <div class="container mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-12">
            
            <!-- Rentetan Kegiatan Card -->
            <div class="group relative bg-white dark:bg-slate-900 rounded-3xl overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-500 flex flex-col border border-slate-100 dark:border-slate-800">
                <div class="relative h-64 overflow-hidden">
                    <img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" src="assets/img/22 UST AMAL.jpg" alt="Rentetan" />
                    <div class="absolute inset-0 bg-gradient-to-t from-emerald-950/80 dark:from-black/90 to-transparent"></div>
                    <div class="absolute bottom-6 left-6">
                        <span class="px-3 py-1 bg-emerald-500 text-emerald-950 text-[10px] font-black uppercase tracking-widest rounded-full mb-2 inline-block">KEGIATAN</span>
                        <h4 class="text-2xl font-bold text-white uppercase tracking-tight lang-txt" data-key="menu_rentetan"></h4>
                    </div>
                </div>
                <div class="p-8 flex-1 flex flex-col justify-between">
                    <p class="text-slate-500 dark:text-slate-400 mb-8 leading-relaxed">Penjelasan rinci mengenai seluruh rangkaian kegiatan PKA 100 Gontor dari awal hingga akhir.</p>
                    <a href="index.php?halaman=rentetan" class="flex items-center justify-center w-14 h-14 rounded-2xl bg-emerald-500 text-emerald-950 hover:bg-emerald-400 group-hover:scale-110 transition-all shadow-lg shadow-emerald-500/30">
                        <i class="fa-solid fa-arrow-right text-xl"></i>
                    </a>
                </div>
            </div>

            <!-- Data Revisitasi Card -->
            <div class="group relative bg-white dark:bg-slate-900 rounded-3xl overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-500 flex flex-col border border-slate-100 dark:border-slate-800">
                <div class="relative h-64 overflow-hidden">
                    <img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" src="assets/img/bg-masthead.jpg" alt="Data" />
                    <div class="absolute inset-0 bg-gradient-to-t from-indigo-950/80 dark:from-black/90 to-transparent"></div>
                    <div class="absolute bottom-6 left-6">
                        <span class="px-3 py-1 bg-indigo-500 text-white text-[10px] font-black uppercase tracking-widest rounded-full mb-2 inline-block">STATISTIK</span>
                        <h4 class="text-2xl font-bold text-white uppercase tracking-tight lang-txt" data-key="menu_data"></h4>
                    </div>
                </div>
                <div class="p-8 flex-1 flex flex-col justify-between">
                    <p class="text-slate-500 dark:text-slate-400 mb-8 leading-relaxed">Kumpulan data statistik dan informasi penting terkait peserta, panitia, dan logistik PKA.</p>
                    <a href="index.php?halaman=data" class="flex items-center justify-center w-14 h-14 rounded-2xl bg-indigo-500 text-white hover:bg-indigo-400 group-hover:scale-110 transition-all shadow-lg shadow-indigo-500/30">
                        <i class="fa-solid fa-arrow-right text-xl"></i>
                    </a>
                </div>
            </div>

            <!-- Seputar Acara Card -->
            <div class="group relative bg-white dark:bg-slate-900 rounded-3xl overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-500 flex flex-col border border-slate-100 dark:border-slate-800">
                <div class="relative h-64 overflow-hidden">
                    <img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" src="assets/img/_MG_6117.jpg" alt="Acara" />
                    <div class="absolute inset-0 bg-gradient-to-t from-amber-950/80 dark:from-black/90 to-transparent"></div>
                    <div class="absolute bottom-6 left-6">
                        <span class="px-3 py-1 bg-amber-500 text-amber-950 text-[10px] font-black uppercase tracking-widest rounded-full mb-2 inline-block">HIGHLIGHTS</span>
                        <h4 class="text-2xl font-bold text-white uppercase tracking-tight lang-txt" data-key="menu_acara"></h4>
                    </div>
                </div>
                <div class="p-8 flex-1 flex flex-col justify-between">
                    <p class="text-slate-500 dark:text-slate-400 mb-8 leading-relaxed">Jadwal dan rincian acara pada hari-H pelaksanaan PKA 100 Gontor.</p>
                    <a href="index.php?halaman=acara" class="flex items-center justify-center w-14 h-14 rounded-2xl bg-amber-500 text-amber-950 hover:bg-amber-400 group-hover:scale-110 transition-all shadow-lg shadow-amber-500/30">
                        <i class="fa-solid fa-arrow-right text-xl"></i>
                    </a>
                </div>
            </div>

            <!-- Serba Serbi Card -->
            <div class="group relative bg-white dark:bg-slate-900 rounded-3xl overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-500 flex flex-col border border-slate-100 dark:border-slate-800">
                <div class="relative h-64 overflow-hidden">
                    <img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" src="assets/img/demo-image-02.jpg" alt="Serba Serbi" />
                    <div class="absolute inset-0 bg-gradient-to-t from-rose-950/80 dark:from-black/90 to-transparent"></div>
                    <div class="absolute bottom-6 left-6">
                        <span class="px-3 py-1 bg-rose-500 text-white text-[10px] font-black uppercase tracking-widest rounded-full mb-2 inline-block">INFO LAIN</span>
                        <h4 class="text-2xl font-bold text-white uppercase tracking-tight lang-txt" data-key="menu_serba"></h4>
                    </div>
                </div>
                <div class="p-8 flex-1 flex flex-col justify-between">
                    <p class="text-slate-500 dark:text-slate-400 mb-8 leading-relaxed">Informasi pelengkap lainnya, tata tertib, dan panduan umum selama PKA.</p>
                    <a href="index.php?halaman=serba_serbi" class="flex items-center justify-center w-14 h-14 rounded-2xl bg-rose-500 text-white hover:bg-rose-400 group-hover:scale-110 transition-all shadow-lg shadow-rose-500/30">
                        <i class="fa-solid fa-arrow-right text-xl"></i>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>
