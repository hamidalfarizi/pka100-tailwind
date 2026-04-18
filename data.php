<!-- Hero Header -->
<header class="relative pt-32 pb-20 px-6 overflow-hidden">
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-gradient-to-b from-emerald-950/40 via-emerald-900/60 to-slate-50 dark:to-slate-950"></div>
        <div class="w-full h-full bg-emerald-500/20 absolute"></div>
    </div>

    <div class="container relative z-10 mx-auto text-center">
        <h1 class="text-3xl md:text-5xl font-black text-white mb-4 tracking-tight uppercase">
            Data Revisitasi<br>
            <span class="text-emerald-400">PKA 100 GONTOR</span>
        </h1>
        <div class="w-24 h-1.5 bg-emerald-500 mx-auto rounded-full mb-6"></div>
        <p class="text-lg text-emerald-50/80 font-medium max-w-2xl mx-auto italic">Statistik & Informasi Lengkap Pondok Modern Darussalam Gontor</p>
    </div>
</header>

<section class="py-12 bg-slate-50 dark:bg-slate-950">
    <div class="container mx-auto px-6">
        <!-- Data Cards Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-12">
            <!-- Guru Per-Bagian -->
            <button onclick="muatData('guru')" class="bg-white dark:bg-slate-900 p-6 rounded-3xl shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 text-left border border-slate-100 dark:border-slate-800 group border-b-4 border-b-emerald-500">
                <div class="w-12 h-12 bg-emerald-50 dark:bg-emerald-900/50 rounded-2xl flex items-center justify-center text-emerald-600 dark:text-emerald-400 mb-4 group-hover:bg-emerald-500 group-hover:text-white transition-colors">
                    <i class="fas fa-users text-xl"></i>
                </div>
                <p class="text-[10px] font-black uppercase tracking-widest text-emerald-500 mb-1">Data Guru</p>
                <h5 class="text-slate-800 dark:text-emerald-50 font-bold leading-tight">Berdasarkan Bagian</h5>
            </button>

            <!-- Santriwati -->
            <button onclick="muatData('santriwati')" class="bg-white dark:bg-slate-900 p-6 rounded-3xl shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 text-left border border-slate-100 dark:border-slate-800 group border-b-4 border-b-teal-500">
                <div class="w-12 h-12 bg-teal-50 dark:bg-teal-900/50 rounded-2xl flex items-center justify-center text-teal-600 dark:text-teal-400 mb-4 group-hover:bg-teal-500 group-hover:text-white transition-colors">
                    <i class="fas fa-calendar-check text-xl"></i>
                </div>
                <p class="text-[10px] font-black uppercase tracking-widest text-teal-500 mb-1">Data Santriwati</p>
                <h5 class="text-slate-800 dark:text-emerald-50 font-bold leading-tight">Data Per-Kelas</h5>
            </button>

            <!-- Konsulat -->
            <button onclick="muatData('konsulat')" class="bg-white dark:bg-slate-900 p-6 rounded-3xl shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 text-left border border-slate-100 dark:border-slate-800 group border-b-4 border-b-indigo-500">
                <div class="w-12 h-12 bg-indigo-50 dark:bg-indigo-900/50 rounded-2xl flex items-center justify-center text-indigo-600 dark:text-indigo-400 mb-4 group-hover:bg-indigo-500 group-hover:text-white transition-colors">
                    <i class="fas fa-map-location-dot text-xl"></i>
                </div>
                <p class="text-[10px] font-black uppercase tracking-widest text-indigo-500 mb-1">Konsulat</p>
                <h5 class="text-slate-800 dark:text-emerald-50 font-bold leading-tight">30 Konsulat</h5>
            </button>

            <!-- Panitia -->
            <button onclick="muatData('panitiaguru')" class="bg-white dark:bg-slate-900 p-6 rounded-3xl shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 text-left border border-slate-100 dark:border-slate-800 group border-b-4 border-b-amber-500">
                <div class="w-12 h-12 bg-amber-50 dark:bg-amber-900/50 rounded-2xl flex items-center justify-center text-amber-600 dark:text-amber-400 mb-4 group-hover:bg-amber-500 group-hover:text-white transition-colors">
                    <i class="fas fa-id-badge text-xl"></i>
                </div>
                <p class="text-[10px] font-black uppercase tracking-widest text-amber-500 mb-1">Panitia PKA</p>
                <h5 class="text-slate-800 dark:text-emerald-50 font-bold leading-tight">Panitia Guru</h5>
            </button>
        </div>

        <!-- Display Area -->
        <div class="bg-white dark:bg-slate-900 rounded-[32px] shadow-xl shadow-emerald-950/5 overflow-hidden border border-slate-100 dark:border-slate-800">
            <div class="p-6 border-b border-slate-100 dark:border-slate-800 flex items-center justify-between">
                <h6 class="font-black text-slate-800 dark:text-emerald-50 uppercase tracking-widest text-sm" id="judul-chart">Memuat data...</h6>
                <div id="loading-spinner" class="hidden flex items-center gap-2">
                    <div class="w-4 h-4 border-2 border-emerald-500 border-t-transparent rounded-full animate-spin"></div>
                    <span class="text-xs font-bold text-emerald-600">Syncing...</span>
                </div>
            </div>
            <div class="p-0 overflow-x-auto min-h-[400px]" id="wadah-chart">
                <div id="myAreaChart" class="p-6 transition-opacity duration-500 opacity-0"></div>
            </div>
        </div>
    </div>
</section>

<script>
function muatData(jenis) {
    const wadah = document.getElementById('myAreaChart'); 
    const judul = document.getElementById('judul-chart');
    const spinner = document.getElementById('loading-spinner');

    spinner.classList.remove('hidden'); 
    wadah.style.opacity = '0'; 

    setTimeout(() => {
        if (jenis === 'guru') {
            judul.innerText = "Daftar Data Guru Per-Bagian";
            wadah.innerHTML = `
                <table class="w-full text-left border-collapse">
                    <thead class="bg-slate-50 dark:bg-slate-800 border-b border-slate-100 dark:border-slate-700">
                        <tr>
                            <th class="px-6 py-4 text-xs font-black text-slate-400 dark:text-slate-500 uppercase tracking-widest">Bagian</th>
                            <th class="px-6 py-4 text-xs font-black text-slate-400 dark:text-slate-500 uppercase tracking-widest">Jumlah Personil</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-50 dark:divide-slate-800">
                        ${[
                            ['Pengasuhan', 7], ['Administrasi', 5], ['Sekertaris', 5], ['Pusat Data', 5], 
                            ['DRS', 11], ['KMI', 7], ['Perpustakaan', 5], ['Kebersihan', 5]
                        ].map(([title, count]) => `
                            <tr class="hover:bg-emerald-50/50 dark:hover:bg-emerald-900/20 transition-colors">
                                <td class="px-6 py-4 font-bold text-slate-700 dark:text-slate-300">${title}</td>
                                <td class="px-6 py-4">
                                    <span class="px-3 py-1 bg-emerald-100 dark:bg-emerald-900 text-emerald-700 dark:text-emerald-400 rounded-full font-black text-xs">${count} GURU</span>
                                </td>
                            </tr>
                        `).join('')}
                    </tbody>
                </table>`;
        } 
        else if (jenis === 'santriwati') {
            judul.innerText = "Rekapitulasi Santriwati Per-Kelas";
            wadah.innerHTML = `
                <div class="overflow-x-auto">
                    <table class="w-full text-sm border-collapse min-w-[800px]">
                        <thead class="bg-emerald-950 dark:bg-black text-white">
                            <tr>
                                <th class="px-4 py-3 border border-emerald-900 dark:border-slate-800">Kelas</th>
                                ${['B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R'].map(l => `<th class="px-2 py-3 border border-emerald-900 dark:border-slate-800">${l}</th>`).join('')}
                                <th class="px-4 py-3 border border-emerald-900 dark:border-slate-800">Total</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100 dark:divide-slate-800">
                            ${[
                                ['1', [19,19,19,17,22,0,0,0,0,0,0,0,0,0,0,0,0], 96],
                                ['1 Int', [12,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0], 12],
                                ['2', [21,21,21,21,22,22,22,21,22,0,0,0,0,0,0,0,0], 193],
                                ['3', [21,21,21,20,19,18,21,21,21,21,20,0,0,0,0,0,0], 224]
                            ].map(([kls, vals, total]) => `
                                <tr class="hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors">
                                    <td class="px-4 py-3 font-black text-slate-800 dark:text-slate-200 bg-slate-50 dark:bg-slate-800/50">${kls}</td>
                                    ${vals.map(v => `<td class="px-2 py-3 text-center ${v == 0 ? 'text-slate-300 dark:text-slate-700' : 'text-slate-600 dark:text-slate-400 font-medium'}">${v == 0 ? '-' : v}</td>`).join('')}
                                    <td class="px-4 py-3 font-black text-emerald-600 dark:text-emerald-400 text-center">${total}</td>
                                </tr>
                            `).join('')}
                            <tr class="bg-emerald-600 dark:bg-emerald-800 text-white font-black uppercase text-xs tracking-widest">
                                <td colspan="18" class="px-4 py-4 text-center">TOTAL KESELURUHAN</td>
                                <td class="px-4 py-4 text-center text-emerald-100 uppercase">1508</td>
                            </tr>
                        </tbody>
                    </table>
                </div>`;
        }
        else if (jenis === 'konsulat') {
             judul.innerText = "Data Konsulat Aktif";
            wadah.innerHTML = `
                <table class="w-full text-left border-collapse">
                    <thead class="bg-slate-50 dark:bg-slate-800 border-b border-slate-100 dark:border-slate-700">
                        <tr>
                            <th class="px-6 py-4 text-xs font-black text-slate-400 dark:text-slate-500 uppercase tracking-widest">No</th>
                            <th class="px-6 py-4 text-xs font-black text-slate-400 dark:text-slate-500 uppercase tracking-widest">Konsulat</th>
                            <th class="px-6 py-4 text-xs font-black text-slate-400 dark:text-slate-500 uppercase tracking-widest">Populasi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-50 dark:divide-slate-800">
                         <tr class="hover:bg-indigo-50/50 dark:hover:bg-indigo-900/20 transition-colors">
                            <td class="px-6 py-4 text-slate-400 dark:text-slate-600 font-medium">01</td>
                            <td class="px-6 py-4 font-bold text-slate-700 dark:text-slate-300">Konsulat Jakarta</td>
                            <td class="px-6 py-4 font-black text-indigo-600 dark:text-indigo-400">150 Personel</td>
                        </tr>
                        <tr class="hover:bg-indigo-50/50 dark:hover:bg-indigo-900/20 transition-colors">
                            <td class="px-6 py-4 text-slate-400 dark:text-slate-600 font-medium">02</td>
                            <td class="px-6 py-4 font-bold text-slate-700 dark:text-slate-300">Konsulat Surabaya</td>
                            <td class="px-6 py-4 font-black text-indigo-600 dark:text-indigo-400">120 Personel</td>
                        </tr>
                    </tbody>
                </table>`;
        }

        spinner.classList.add('hidden');
        wadah.style.opacity = '1';
    }, 500);
}

document.addEventListener('DOMContentLoaded', () => {
    muatData('guru');
});
</script>