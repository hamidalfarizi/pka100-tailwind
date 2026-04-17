<?php
$lang = isset($_GET['lang']) ? $_GET['lang'] : 'id'; // Default Indonesia

$daftar_kata = [
    'id' => [
        'judul_1' => 'PEKAN PERKENALAN',
        'judul_2' => "KHUTBATU-L-'ARSY",
        'slogan' => '"Gontor Berkomitmen Menanamkan Nilai-Nilai Islam"',
        'narasi_pembuka' => "Melihat zaman yang semakin maju dan berkembang, Pondok Modern Darussalam Gontor kembali datang untuk mengikuti Kemajuan zaman. Dengan selalu berkomitmen tidak meniggalkan serta akan terus menanam nilai-nilai islam yang telah menjadi shibghah Gontor sedari dulu.Melalui Pekan Perkenalan Khutbatu-L-'Arsy ini Gontor dengan berbagai ragam kegiatannya bisa meningkatkan serta terus berkembang dalam ranah pendidikan juga pengajaran demi menyongsong seratus tahun Pondok Modern Darussalam Gontor.",
        'menu_rentetan' => 'Rentetan Kegiatan PKA',
        'menu_data' => 'Data',
        'menu_acara' => 'Acara',
        'menu_serba' => 'Serba-Serbi',
        'redaksi' => 'Tim Redaksi',
        'menu_beranda' => 'Beranda',
        'menu_rentetan' => 'Rentetan Kegiatan',
        'menu_data' => 'Data',
        'menu_acara' => 'Acara',
        'menu_serba' => 'Serba-Serbi',
        'menu_keluar' => 'Keluar',
    ],
    'en' => [
        'judul_1' => 'ORIENTATION WEEK',
        'judul_2' => "KHUTBATU-L-'ARSY",
        'slogan' => '"Gontor Committed to Imbuing Islamic Values"',
        'narasi_pembuka' => 'Observing the increasingly advanced and developing era, Pondok Modern Darussalam Gontor returns to keep pace with the times...',
        'menu_rentetan' => 'Sequence of Events',
        'menu_data' => 'Data',
        'menu_acara' => 'Events',
        'menu_serba' => 'Miscellaneous',
        'redaksi' => 'Editorial Team',
        'menu_beranda' => 'Home',
        'menu_rentetan' => 'Event Schedule',
        'menu_data' => 'Data',
        'menu_acara' => 'Events',
        'menu_serba' => 'Miscellany',
        'menu_keluar' => 'Logout',
    ],
    'ar' => [
        'judul_1' => 'أسبوع التعارف',
        'judul_2' => "خطبة العرش",
        'slogan' => '"جونتور تلتزم بغرس القيم الإسلامية"',
        'narasi_pembuka' => 'رؤية للزمان المتقدم والمتطور، يعود معهد دار السلام كونتور للتربية الإسلامية الحديثة لمواكبة تطور الزمان...',
        'menu_acara' => 'البرامج',
        'menu_beranda' => 'الرئيسية',
        'menu_rentetan' => 'جدول البرامج',
        'menu_data' => 'البيانات',
        'menu_acara' => 'البرامج',
        'menu_serba' => 'متنوعات',
        'menu_keluar' => 'خروج',
    ]
];

$t = $daftar_kata[$lang];
?>
<script>
    const kamus = <?php echo json_encode($daftar_kata); ?>;
</script>