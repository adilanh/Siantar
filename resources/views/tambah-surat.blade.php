@push('styles')
<style>
    :root{
      --brand:#ff7f00;
      --brand-dark:#f36f00;
      --bg:#f5f7fb;
      --card-border:#e6eaf2;
      --muted:#6b7280;
      --text:#111827;
    }
    *{ color:var(--text);}
    .wrap{max-width:1180px; padding-left:18px; padding-right:18px}
    .topbar{
      background:#fff;
      border-bottom:1px solid #e9edf5;
      box-shadow:0 4px 14px rgba(17,24,39,.04);
    }
    .brand-wrap{gap:.65rem}
    .brand-title{font-weight:800; letter-spacing:.2px; line-height:1}
    .brand-sub{font-size:.75rem; color:#9aa3b2; margin-top:2px; line-height:1}
    .nav-center .nav-link{
      color:var(--text);
      font-weight:500;
      padding:.45rem .6rem;
      border-radius:10px;
    }
    .nav-center .nav-link:hover{color:var(--brand)}
    .icon-btn{
      width:36px;height:36px;border-radius:12px;
      display:grid;place-items:center;
      color:#6b7280;background:#fff;
      border:1px solid #eef2f7;
    }
    .icon-btn:hover{border-color:#e6eaf2;color:var(--brand)}
    .notif-dot{
      position:absolute; top:-6px; right:-6px;
      width:18px;height:18px;border-radius:999px;
      background:var(--brand);
      color:#fff; font-size:11px; font-weight:700;
      display:grid; place-items:center;
      border:2px solid #fff;
    }
    .user-name{font-weight:700; font-size:.9rem; line-height:1.1}
    .user-role{font-size:.75rem; color:#9aa3b2; line-height:1.1}
    .back-link{
      color:#6b7280;
      text-decoration:none;
      font-weight:600;
      display:inline-flex;
      align-items:center;
      gap:8px;
    }
    .back-link:hover{color:#111827}
    .card-box{
      background:#fff;
      border:1px solid var(--card-border);
      border-radius:16px;
      box-shadow:0 8px 20px rgba(17,24,39,.05);
    }
    .btn-orange{
      background:var(--brand);
      border:none;
      color:#fff;
      font-weight:800;
      border-radius:12px;
      padding:.72rem 1rem;
      box-shadow:0 10px 18px rgba(255,127,0,.22);
      white-space:nowrap;
    }
    .btn-orange:hover{background:var(--brand-dark); color:#fff}

    .footer{
      background:#343a40;
      color:#e5e7eb;
      margin-top:56px;
      padding:52px 0 28px;
    }
    .footer h6{font-weight:800}
    .footer small{color:#cbd5e1}
    .footer .contact li{margin-bottom:10px}
    .footer .contact i{color:var(--brand); margin-right:10px}
    .copy{
      border-top:1px solid rgba(255,255,255,.12);
      margin-top:28px;
      padding-top:18px;
      text-align:center;
      font-size:.85rem;
      color:#b6c0cf;
    }
    @media (max-width: 992px){
      .nav-center{display:none;}
    }
  </style>

  <style>
    .center-head{text-align:center; margin-top:10px}
    .h-title{font-weight:900; font-size:40px; margin:10px 0 6px}
    .h-sub{color:var(--muted); margin:0; font-weight:500}
    .choice-card{
      background:#fff;
      border:1px solid var(--card-border);
      border-radius:18px;
      box-shadow:0 14px 28px rgba(17,24,39,.10);
      padding:34px 28px 26px;
      text-align:center;
      height:100%;
    }
    .choice-ico{
      width:74px;height:74px;border-radius:999px;
      background:var(--brand);
      display:grid;place-items:center;
      margin:0 auto 18px;
      box-shadow:0 12px 20px rgba(255,127,0,.25);
      color:#fff;
      font-size:28px;
    }
    .choice-title{font-weight:900; font-size:26px; margin:2px 0 10px}
    .choice-desc{color:var(--muted); margin:0 auto 22px; max-width:320px}
    .btn-choice{width:100%; max-width:320px}
    .info-note{
      background:#eef6ff;
      border:1px solid #bcd7ff;
      border-radius:12px;
      padding:16px 18px;
      color:#1d4ed8;
      display:flex; gap:12px; align-items:center;
      max-width:760px;
      margin:30px auto 0;
      font-weight:600;
      font-size:13px;
    }
    .info-note i{font-size:18px}
    @media (max-width: 992px){
      .h-title{font-size:34px}
      .choice-card{padding:28px 22px}
    }
  </style>
@endpush
<x-app-layout>
<div class="bg-[#f5f7fb]">
<main class="container wrap py-4">
    <a href="{{ route('dashboard') }}" class="back-link"><i class="bi bi-arrow-left"></i> Kembali</a>

    <div class="center-head">
      <h1 class="h-title">Tambah Surat</h1>
      <p class="h-sub">Pilih jenis surat yang ingin Anda tambahkan ke dalam sistem.</p>
    </div>

    <div class="row justify-content-center g-4 mt-4">
      <div class="col-lg-5">
        <div class="choice-card">
          <div class="choice-ico"><i class="bi bi-inbox-fill"></i></div>
          <div class="choice-title">Surat Masuk</div>
          <p class="choice-desc">Digunakan untuk mencatat dan mengelola surat yang diterima dari instansi atau pihak lain.</p>
          <button class="btn btn-orange btn-choice">Tambah Surat Masuk</button>
        </div>
      </div>

      <div class="col-lg-5">
        <div class="choice-card">
          <div class="choice-ico"><i class="bi bi-send-fill"></i></div>
          <div class="choice-title">Surat Keluar</div>
          <p class="choice-desc">Digunakan untuk membuat dan mencatat surat yang akan dikirim ke instansi atau pihak lain.</p>
          <button class="btn btn-orange btn-choice">Tambah Surat Keluar</button>
        </div>
      </div>
    </div>

    <div class="info-note">
      <i class="bi bi-info-circle-fill"></i>
      <div>Setelah memilih jenis surat, Anda akan diarahkan ke formulir pengisian data surat sesuai dengan jenis yang dipilih.</div>
    </div>
  </main>
</div>
</x-app-layout>












