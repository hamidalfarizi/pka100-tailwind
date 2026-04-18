<!-- Hero Header -->
<header class="relative pt-32 pb-20 px-6 overflow-hidden">
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-gradient-to-b from-emerald-950/40 via-emerald-900/60 to-slate-50 dark:to-slate-950"></div>
        <img src="assets/img/demo-image-01.jpg" class="w-full h-full object-cover" alt="Background">
    </div>

    <div class="container relative z-10 mx-auto text-center">
        <h1 class="text-3xl md:text-5xl font-black text-white mb-4 tracking-tight uppercase">
            RENTETAN KEGIATAN<br>
            <span class="text-emerald-400">PKA 100 GONTOR</span>
        </h1>
        <div class="w-24 h-1.5 bg-emerald-500 mx-auto rounded-full mb-6"></div>
        <p class="text-lg text-emerald-50/80 font-medium max-w-2xl mx-auto italic">Sunnah Pondok Modern Darussalam Gontor di Awal Tahun Ajaran</p>
    </div>
</header>

<!-- Intro Section -->
<section class="py-16 px-6 bg-slate-50 dark:bg-slate-950">
    <div class="container mx-auto max-w-4xl text-center">
        <p class="text-slate-600 dark:text-slate-400 leading-relaxed text-lg md:text-xl font-medium">
            Pekan Perkenalan Khutbatu-l-'Arsy merupakan salah satu sunnah Pondok Modern Darussalam Gontor yang diadakan setiap awal tahun ajaran baru di Kulliyatu-l-Mu'alimat Al-Islamiyah. Seluruh santriwati dan guru berkumpul untuk memperbaharui niat dan memahami kembali nilai-nilai serta jati diri pondok.
        </p>
    </div>
</section>

<!-- Activities Grid -->
<section class="pb-24 px-6 bg-slate-50 dark:bg-slate-950">
    <div class="container mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <?php 
            $kegiatan = [
                ['Apel Tahunan', 'Penjelasan umum mengenai kegiatan apel tahunan di sini.', 'demo-image-01.jpg', 'apel_tahunan'],
                ['Kuliah Umum', 'Penjelasan umum mengenai kegiatan kuliah umum di sini.', 'demo-image-02.jpg', 'kuliah_umum'],
                ['Latihan Baris', 'Penjelasan umum mengenai kegiatan Latihan ketangkasan baris-berbaris di sini.', 'demo-image-01.jpg', 'latihan_baris'],
                ['PORSENI', 'Penjelasan mengenai kegiatan Pekan Olahraga dan Seni di sini.', 'demo-image-02.jpg', 'PORSENI'],
                ['Hymne Oh Pondokku', 'Penjelasan mengenai kegiatan latihan menyanyi Hymne Oh Pondokku.', 'demo-image-01.jpg', 'oh_pondokku'],
                ['Lomba CCA', 'Penjelasan mengenai kegiatan Lomba Cerdas Cermat di sini.', 'demo-image-02.jpg', 'CCA'],
                ['Hadrah', 'Penjelasan mengenai kegiatan Hadrah antar angkatan di sini.', 'demo-image-01.jpg', 'hadrah'],
                ['Lomba Baris', 'Penjelasan mengenai kegiatan Lomba Ketangkasan Baris-berbaris.', 'demo-image-02.jpg', 'lomba_baris'],
                ['Single Song', 'Penjelasan umum mengenai kegiatan Single Song di sini.', 'demo-image-01.jpg', 'single_song'],
                ['Live Music', 'Penjelasan mengenai kegiatan Live Music di sini.', 'demo-image-02.jpg', 'live_music'],
                ['Aneka Nusantara', 'Penjelasan mengenai kegiatan Aneka Ria Nusantara.', 'demo-image-01.jpg', 'aneka_nusantara'],
                ['Drama Arena', 'Penjelasan mengenai kegiatan Drama Arena di sini.', 'demo-image-01.jpg', 'DA'],
                ['Panggung Gembira', 'Penjelasan mengenai kegiatan Panggung Gembira di sini.', 'demo-image-02.jpg', 'PG']
            ];

            foreach($kegiatan as $k):
            ?>
            <div class="group relative bg-white dark:bg-slate-900 rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 border border-slate-100 dark:border-slate-800 flex flex-col">
                <div class="relative h-56 overflow-hidden">
                    <img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" src="assets/img/<?php echo $k[2]; ?>" alt="<?php echo $k[0]; ?>" />
                    <div class="absolute inset-0 bg-gradient-to-t from-emerald-950/60 dark:from-black/80 to-transparent"></div>
                </div>
                <div class="p-8 flex-1 flex flex-col justify-between">
                    <div>
                        <h4 class="text-xl font-black text-slate-800 dark:text-emerald-50 uppercase tracking-tight mb-2"><?php echo $k[0]; ?></h4>
                        <p class="text-slate-500 dark:text-slate-400 text-sm leading-relaxed mb-6"><?php echo $k[1]; ?></p>
                    </div>
                    <a href="index.php?halaman=<?php echo $k[3]; ?>" class="flex items-center gap-3 text-emerald-600 dark:text-emerald-400 font-black text-xs uppercase tracking-widest hover:text-emerald-500 dark:hover:text-emerald-300 transition-colors group">
                        Selengkapnya <i class="fa-solid fa-arrow-right-long transform group-hover:translate-x-2 transition-transform"></i>
                    </a>
                </div>
            </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>