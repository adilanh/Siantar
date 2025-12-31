<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Manfaat SIANTAR — Kesbangpol</title>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<style>
  body{font-family:Inter,Arial}
  .card{border-radius:18px;border:1px solid #E5E7EB;background:#fff}
  .shadow-soft{box-shadow:0 10px 25px rgba(0,0,0,.06)}
  .impact-box{background:#FFF;border-left:6px solid #F59E0B;border-radius:16px}
  .footer-bg{background:#272421}
</style>
</head>
<body class="bg-white">

@include('partials.header')

<!-- BACK BUTTON -->
<div class="max-w-7xl mx-auto px-6 py-4 text-[12px] flex items-center gap-2">
  <a href="{{ route('welcome') }}" class="inline-flex items-center gap-2 hover:text-orange-500 transition cursor-pointer">
    <i class="fa-solid fa-arrow-left text-gray-600"></i> <span class="text-gray-700">Kembali</span>
  </a>
</div>

<!-- TITLE -->
<div class="text-center mt-1">
  <span class="bg-[#FFF2D8] text-[#F97316] text-[11px] font-semibold px-3 py-1 rounded-full">KEUNGGULAN SISTEM</span>
  <h1 class="text-2xl md:text-3xl font-extrabold mt-3">Manfaat SIANTAR untuk Instansi</h1>
  <p class="text-[12px] text-gray-600 mt-2 max-w-3xl mx-auto leading-relaxed">
    Sistem Arsip Naskah dan Tata Persuratan (SIANTAR) memberikan solusi komprehensif untuk transformasi digital administrasi instansi pemerintahan.
    Dengan teknologi modern dan antarmuka yang intuitif, SIANTAR memungkinkan pengelolaan dokumen yang lebih efisien, aman, dan terintegrasi.
  </p>
</div>

<!-- TOP CARDS -->
<div class="bg-gray-50 py-16 mt-16">
  <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 px-6">

    <div class="rounded-2xl p-6 text-center bg-[#FFF2DC] shadow-soft">
      <div class="w-12 h-12 rounded-full bg-orange-500 flex items-center justify-center mx-auto mb-2 text-white">
        <i class="fa-solid fa-leaf"></i>
      </div>
      <p class="font-extrabold text-[22px] text-gray-900">100%</p>
      <p class="font-semibold text-[13px] mt-1">Paperless</p>
      <p class="text-[11px] text-gray-500 -mt-0.5">Bebas kertas sepenuhnya</p>
    </div>

    <div class="rounded-2xl p-6 text-center bg-[#E6FFEA] shadow-soft">
      <div class="w-12 h-12 rounded-full bg-[#22C55E] flex items-center justify-center mx-auto mb-2 text-white">
        <i class="fa-solid fa-rocket"></i>
      </div>
      <p class="font-extrabold text-[22px] text-gray-900">70%</p>
      <p class="font-semibold text-[13px] mt-1">Lebih Cepat</p>
      <p class="text-[11px] text-gray-500 -mt-0.5">Peningkatan kecepatan proses</p>
    </div>

    <div class="rounded-2xl p-6 text-center bg-[#E6F0FF] shadow-soft">
      <div class="w-12 h-12 rounded-full bg-blue-500 flex items-center justify-center mx-auto mb-2 text-white">
        <i class="fa-solid fa-shield-halved"></i>
      </div>
      <p class="font-semibold text-[13px] mt-1">Aman</p>
      <p class="text-[11px] text-gray-500 -mt-0.5">Terenkripsi</p>
      <p class="text-[11px] text-gray-500">Keamanan data terjamin</p>
    </div>

    <div class="rounded-2xl p-6 text-center bg-[#F3E6FF] shadow-soft">
      <div class="w-12 h-12 rounded-full bg-purple-500 flex items-center justify-center mx-auto mb-2 text-white">
        <i class="fa-solid fa-users"></i>
      </div>
      <p class="font-semibold text-[13px] mt-1">Multi</p>
      <p class="text-[11px] text-gray-500 -mt-0.5">User Access</p>
      <p class="text-[11px] text-gray-500">Akses banyak pengguna</p>
    </div>

  </div>
</div>

<!-- FEATURE CARDS -->
<div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-6 mt-16 px-6">

  <div class="card shadow-soft p-6">
    <div class="w-9 h-9 rounded-full bg-orange-100 text-[#FF8B00] flex items-center justify-center mb-2">
      <i class="fa-solid fa-folder-open"></i>
    </div>
    <p class="font-semibold text-[14px] mb-1">Kemudahan Pengarsipan Digital</p>
    <p class="text-[12px] text-gray-600">
      Sistem pengarsipan digital yang memungkinkan penyimpanan, pencarian, dan pengelolaan dokumen dengan mudah dan cepat tanpa memerlukan ruang fisik.
    </p>
  </div>

  <div class="card shadow-soft p-6">
    <div class="w-9 h-9 rounded-full bg-orange-100 text-[#FF8B00] flex items-center justify-center mb-2">
      <i class="fa-solid fa-paper-plane"></i>
    </div>
    <p class="font-semibold text-[14px] mb-1">Efisiensi Pengelolaan Surat</p>
    <p class="text-[12px] text-gray-600">
      Otomatisasi proses surat masuk dan keluar dengan tracking real-time, notifikasi otomatis, dan workflow yang dapat disesuaikan.
    </p>
  </div>

  <div class="card shadow-soft p-6">
    <div class="w-9 h-9 rounded-full bg-orange-100 text-[#FF8B00] flex items-center justify-center mb-2">
      <i class="fa-solid fa-list-check"></i>
    </div>
    <p class="font-semibold text-[14px] mb-1">Peningkatan Tertib Administrasi</p>
    <p class="text-[12px] text-gray-600">
      Standardisasi proses administrasi dengan template konsisten, approval workflow, dan monitoring kinerja.
    </p>
  </div>

  <div class="card shadow-soft p-6">
    <div class="w-9 h-9 rounded-full bg-orange-100 text-[#FF8B00] flex items-center justify-center mb-2">
      <i class="fa-solid fa-lock"></i>
    </div>
    <p class="font-semibold text-[14px] mb-1">Keamanan Data Terjamin</p>
    <p class="text-[12px] text-gray-600">
      Enkripsi, backup otomatis, kontrol akses berlapis, dan audit trail untuk menjaga keamanan data instansi.
    </p>
  </div>

</div>

<!-- IMPACT -->
<div class="bg-[#FFF8F0] py-16 mt-20">
  <div class="max-w-5xl mx-auto px-6">
    <div class="impact-box p-6 shadow-soft">
      <p class="font-semibold text-[15px] text-center mb-1">Dampak & Nilai Tambah</p>
      <p class="text-[12px] text-gray-700 text-center leading-relaxed">
        Dengan penerapan SIANTAR, instansi dapat meningkatkan efisiensi kerja hingga 70%, mengurangi ketergantungan pada arsip fisik secara total,
        serta mendukung transformasi digital administrasi pemerintahan yang berkelanjutan.
      </p>
    </div>
  </div>
</div>

<!-- LONG TERM BENEFITS -->
<div class="text-center mt-20">
  <p class="font-bold text-lg">Manfaat Jangka Panjang</p>
  <p class="text-[12px] text-gray-600 mt-1">Investasi teknologi untuk masa depan administrasi yang lebih baik</p>
</div>

<div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mt-8 px-6">

  <div class="rounded-2xl shadow-soft p-6 text-center bg-[#FFF2DC]">
    <div class="w-10 h-10 mx-auto rounded-full bg-[#FF8A00] flex items-center justify-center text-white mb-3">
      <i class="fa-solid fa-arrows-rotate text-[14px]"></i>
    </div>
    <p class="font-semibold text-[13px]">Transformasi Digital</p>
    <p class="text-[11px] text-gray-500 mt-1">Mendukung transformasi digital instansi pemerintah</p>
  </div>

  <div class="rounded-2xl shadow-soft p-6 text-center bg-[#E6F0FF]">
    <div class="w-10 h-10 mx-auto rounded-full bg-[#3B82F6] flex items-center justify-center text-white mb-3">
      <i class="fa-solid fa-shield text-[14px]"></i>
    </div>
    <p class="font-semibold text-[13px]">Minim Risiko</p>
    <p class="text-[11px] text-gray-500 mt-1">Meminimalkan risiko kehilangan dokumen</p>
  </div>

  <div class="rounded-2xl shadow-soft p-6 text-center bg-[#E6FFEA]">
    <div class="w-10 h-10 mx-auto rounded-full bg-[#22C55E] flex items-center justify-center text-white mb-3">
      <i class="fa-solid fa-arrow-trend-up text-[14px]"></i>
    </div>
    <p class="font-semibold text-[13px]">Produktivitas Tinggi</p>
    <p class="text-[11px] text-gray-500 mt-1">Meningkatkan produktivitas pegawai</p>
  </div>

  <div class="rounded-2xl shadow-soft p-6 text-center bg-[#F3E6FF]">
    <div class="w-10 h-10 mx-auto rounded-full bg-[#8B5CF6] flex items-center justify-center text-white mb-3">
      <i class="fa-solid fa-eye text-[14px]"></i>
    </div>
    <p class="font-semibold text-[13px]">Monitoring Mudah</p>
    <p class="text-[11px] text-gray-500 mt-1">Mempermudah monitoring dan evaluasi persuratan</p>
  </div>

</div>

<!-- CTA -->
<div class="text-center mt-16 mb-20">
  <p class="font-bold text-lg">Sistem Terintegrasi untuk Administrasi</p>
  <p class="font-bold text-lg -mt-1">Modern</p>
  <div class="flex justify-center gap-4 mt-4">
    <a href="{{ route('register') }}" class="bg-orange-500 text-white text-[12px] px-6 py-2 rounded-lg flex items-center gap-2 hover:bg-orange-600 transition">
      <i class="fa-solid fa-play"></i> Mulai Sekarang
    </a>
    <a href="{{ route('welcome') }}#tentang" class="border border-gray-400 text-[12px] px-6 py-2 rounded-lg flex items-center gap-2 hover:bg-gray-50 transition">
      <i class="fa-solid fa-book"></i> Pelajari SIANTAR
    </a>
  </div>
</div>

@include('partials.footer')

</body>
</html>