@push('styles')
<style>
    :root{
      --brand:#ff7f00;
      --brand-dark:#f36f00;
      --bg:#f5f7fb;
      --card-border:#e6eaf2;
      --muted:#6b7280;
      --text:#111827;
      --shadow: 0 8px 20px rgba(17,24,39,.05);
    }
    *{ color:var(--text);}
    .wrap{max-width:1180px; padding-left:18px; padding-right:18px}
    .topbar{
      background:#fff;
      border-bottom:1px solid #e9edf5;
      box-shadow:0 4px 14px rgba(17,24,39,.04);
    }
    .brand-wrap{gap:.65rem}
    .brand-title{font-weight:900; letter-spacing:.2px; line-height:1}
    .brand-sub{font-size:.75rem; color:#9aa3b2; margin-top:2px; line-height:1}
    .nav-center .nav-link{
      color:var(--text);
      font-weight:600;
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
      color:#fff; font-size:11px; font-weight:900;
      display:grid; place-items:center;
      border:2px solid #fff;
    }
    .user-name{font-weight:800; font-size:.9rem; line-height:1.1}
    .user-role{font-size:.75rem; color:#9aa3b2; line-height:1.1}
    .back-link{
      color:#6b7280;
      text-decoration:none;
      font-weight:700;
      display:inline-flex;
      align-items:center;
      gap:8px;
    }
    .back-link:hover{color:#111827}

    .card-box{
      background:#fff;
      border:1px solid var(--card-border);
      border-radius:16px;
      box-shadow:var(--shadow);
    }

    .btn-orange{
      background:var(--brand);
      border:none;
      color:#fff;
      font-weight:900;
      border-radius:10px;
      padding:.62rem 1rem;
      box-shadow:0 10px 18px rgba(255,127,0,.22);
      white-space:nowrap;
      font-size:13px;
    }
    .btn-orange:hover{background:var(--brand-dark); color:#fff}

    .btn-orange-outline{
      background:#fff;
      border:1.5px solid var(--brand);
      color:var(--brand);
      font-weight:900;
      border-radius:10px;
      padding:.55rem .95rem;
      font-size:13px;
    }
    .btn-orange-outline:hover{background:#fff7ef; color:var(--brand)}

    .page-title{font-weight:900; font-size:34px; margin:6px 0 2px}
    .page-sub{color:var(--muted); margin:0 0 18px 0; font-weight:500}

    .pill{
      display:inline-flex; align-items:center; justify-content:center;
      padding:.22rem .6rem;
      border-radius:999px;
      font-weight:800;
      font-size:12px;
      border:1px solid transparent;
      white-space:nowrap;
    }
    .pill-blue{background:#e8f0ff; color:#2563eb; border-color:#d7e5ff;}
    .pill-green{background:#dcfce7; color:#166534; border-color:#bbf7d0;}
    .pill-yellow{background:#fef3c7; color:#92400e; border-color:#fde68a;}
    .pill-gray{background:#eef2f7; color:#374151; border-color:#e5e7eb;}
    .pill-orange{background:#ffedd5; color:#9a3412; border-color:#fed7aa;}
    .pill-emerald{background:#d1fae5; color:#065f46; border-color:#a7f3d0;}
    .pill-red{background:#fee2e2; color:#b91c1c; border-color:#fecaca;}

    .table-wrap{
      overflow:hidden;
      border-radius:14px;
      border:1px solid var(--card-border);
      background:#fff;
      box-shadow:var(--shadow);
    }
    table{margin:0}
    thead th{
      background:#f8fafc;
      color:#6b7280;
      font-weight:900;
      font-size:12px;
      letter-spacing:.2px;
      border-bottom:1px solid #edf1f7 !important;
      padding:14px 16px !important;
    }
    tbody td{
      padding:16px !important;
      border-top:1px solid #eef2f7 !important;
      color:#374151;
      font-weight:600;
      font-size:13px;
      vertical-align:middle;
    }
    tbody tr:hover{background:#fafcff}
    .muted{color:#6b7280; font-weight:600}

    .filter-box{padding:18px 18px;}
    .filter-label{font-weight:900; font-size:12px; color:#374151; margin-bottom:8px;}
    .form-control, .form-select{
      border-radius:10px;
      border:1px solid #e6eaf2;
      padding:.68rem .85rem;
      font-size:13px;
      background:#fff;
    }
    .input-icon{position:relative}
    .input-icon .bi{
      position:absolute;
      right:12px; top:50%;
      transform:translateY(-50%);
      color:#9aa3b2;
      pointer-events:none;
    }

    .stat-card{
      background:#fff;
      border:1px solid var(--card-border);
      border-radius:14px;
      box-shadow:var(--shadow);
      padding:16px 18px;
      display:flex;
      align-items:center;
      justify-content:space-between;
      gap:14px;
      height:100%;
      position:relative;
      overflow:hidden;
    }
    .stat-left .label{font-weight:800; color:#6b7280; font-size:12px}
    .stat-left .value{font-weight:900; font-size:26px; margin-top:4px}
    .stat-ico{
      width:44px; height:44px;
      border-radius:999px;
      display:grid; place-items:center;
      font-size:18px;
    }
    .stat-accent{
      position:absolute;
      left:0; top:0; bottom:0;
      width:4px;
      border-radius:14px 0 0 14px;
    }
    .accent-orange{background:var(--brand)}
    .accent-yellow{background:#f59e0b}
    .accent-green{background:#22c55e}

    .ico-orange{background:#fff3ea; color:var(--brand); border:1px solid #ffe1c7;}
    .ico-yellow{background:#fff7db; color:#b45309; border:1px solid #fde68a;}
    .ico-green{background:#eafff2; color:#16a34a; border:1px solid #bbf7d0;}

    .report-btn-row{display:flex; justify-content:flex-end; margin-top:14px}

    .pager{
      display:flex; gap:8px; align-items:center; justify-content:flex-end;
    }
    .pg{
      width:32px; height:32px;
      display:grid; place-items:center;
      border-radius:8px;
      background:#fff;
      border:1px solid #e6eaf2;
      color:#374151;
      font-weight:900;
      font-size:12px;
      box-shadow:0 10px 18px rgba(17,24,39,.04);
    }
    .pg.active{background:var(--brand); border-color:var(--brand); color:#fff}
    .pg.icon{font-size:14px}

    .kebab{
      width:36px;height:36px;border-radius:10px;
      display:grid;place-items:center;
      border:1px solid #eef2f7;
      background:#fff;
      color:#9aa3b2;
    }

    .detail-header{padding:18px 18px;}
    .detail-grid{border-top:1px solid #edf1f7; margin-top:12px; padding-top:14px}
    .kv{display:grid; grid-template-columns: 1fr; gap:4px;}
    .k{color:#9aa3b2; font-weight:900; font-size:12px}
    .v{color:#111827; font-weight:800; font-size:13px}
    .v.bold{font-size:15px; font-weight:900}

    .section-head{
      display:flex; align-items:center; gap:10px;
      padding:18px 18px 0 18px;
      font-weight:900; font-size:18px;
    }
    .sec-ico{
      width:28px;height:28px;border-radius:8px;
      display:grid;place-items:center;
      background:#fff3ea;
      color:var(--brand);
      border:1px solid #ffe1c7;
      font-size:14px;
    }
    .section-body{padding:14px 18px 18px}
    .paragraph{color:#374151; font-weight:600; line-height:1.7; font-size:13px}
    .dl-line{display:flex; gap:10px; align-items:center; padding:14px 14px; border:1px solid #eef2f7; border-radius:12px;}
    .file-ico{
      width:34px;height:34px;border-radius:10px;
      display:grid;place-items:center;
      background:#ffeaea;
      border:1px solid #ffd2d2;
      color:#dc2626;
      font-weight:900;
      font-size:12px;
    }
    .file-ico.word{background:#eaf2ff; border-color:#d6e6ff; color:#2563eb}
    .file-name{font-weight:900; font-size:13px; color:#111827}
    .file-meta{font-size:12px; color:#9aa3b2; font-weight:800}
    .file-actions{margin-left:auto; display:flex; gap:10px}
    .footer{
      background:#343a40;
      color:#e5e7eb;
      margin-top:56px;
      padding:52px 0 28px;
    }
    .footer h6{font-weight:900}
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
      .page-title{font-size:30px}
    }
  </style>

  <style>
    .center-head{text-align:center; margin-top:6px}
    .h-title{font-weight:900; font-size:36px; margin:10px 0 6px}
    .h-sub{color:var(--muted); margin:0; font-weight:500}
    .search-card{padding:26px 22px}
    .search-input{max-width:720px; margin:0 auto}
    .search-btn{display:flex; justify-content:center; margin-top:18px}
    .filters{padding:20px 22px}
    .reset-row{display:flex; justify-content:flex-end; align-items:flex-end}
    .quick{padding:18px 22px}
    .btn-darkish{
      background:#4b5563;
      color:#fff;
      border:none;
      font-weight:900;
      border-radius:10px;
      padding:.6rem .95rem;
      box-shadow:0 10px 18px rgba(17,24,39,.14);
      font-size:13px;
    }
    .btn-darkish:hover{background:#374151; color:#fff}
  </style>
@endpush

<x-app-layout>
  <main class="container wrap py-4">
    <a href="{{ route('dashboard') }}" class="back-link"><i class="bi bi-arrow-left"></i> Kembali</a>

    <div class="center-head">
      <div class="h-title">Cari Arsip</div>
      <p class="h-sub">Telusuri arsip surat masuk dan surat keluar dengan mudah</p>
    </div>

    <section class="card-box search-card mt-4">
      <div class="search-input">
        <div class="input-icon">
          <input class="form-control" style="height:46px;" placeholder="Cari berdasarkan nomor surat, perihal, atau instansi..." />
          <i class="bi bi-search"></i>
        </div>
      </div>
      <div class="search-btn">
        <button class="btn btn-orange" style="min-width:160px;"><i class="bi bi-search me-2"></i> Cari Arsip</button>
      </div>
    </section>

    <section class="card-box filters mt-3">
      <div class="fw-black" style="font-weight:900; margin-bottom:14px;">Filter Lanjutan</div>
      <div class="row g-3 align-items-end">
        <div class="col-lg-3">
          <div class="filter-label">Jenis Surat</div>
          <select class="form-select">
            <option selected>Semua</option>
            <option>Surat Masuk</option>
            <option>Surat Keluar</option>
          </select>
        </div>
        <div class="col-lg-3">
          <div class="filter-label">Kategori Surat</div>
          <select class="form-select">
            <option selected>Semua Kategori</option>
            <option>Undangan</option>
            <option>Permohonan</option>
            <option>Laporan</option>
          </select>
        </div>
        <div class="col-lg-3">
          <div class="filter-label">Status Surat</div>
          <select class="form-select">
            <option selected>Semua Status</option>
            <option>Menunggu</option>
            <option>Terkirim</option>
            <option>Selesai</option>
          </select>
        </div>
        <div class="col-lg-3">
          <div class="filter-label">Rentang Tanggal</div>
          <div class="d-flex gap-2">
            <div class="input-icon w-100">
              <input class="form-control" placeholder="mm/dd/yyyy" />
              <i class="bi bi-calendar3"></i>
            </div>
            <div class="input-icon w-100">
              <input class="form-control" placeholder="mm/dd/yyyy" />
              <i class="bi bi-calendar3"></i>
            </div>
          </div>
        </div>
        <div class="col-12 reset-row">
          <button class="btn btn-orange"><i class="bi bi-arrow-counterclockwise me-2"></i> Reset Filter</button>
        </div>
      </div>
    </section>

    <section class="card-box mt-3">
      <div style="padding:18px 18px 8px;">
        <div style="font-weight:900;">Hasil Pencarian Arsip</div>
        <div class="muted" style="font-size:12px;">Menampilkan 3 dari 156 arsip ditemukan</div>
      </div>

      <div class="table-wrap" style="border:none; box-shadow:none; border-top:1px solid #edf1f7; border-radius:0 0 16px 16px;">
        <table class="table">
          <thead>
            <tr>
              <th style="width:150px">Nomor Surat</th>
              <th style="width:130px">Tanggal</th>
              <th style="width:130px">Jenis</th>
              <th>Perihal</th>
              <th>Instansi</th>
              <th style="width:120px">Status</th>
              <th style="width:130px" class="text-end">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>001/SM/2024</td>
              <td class="muted">15 Jan 2024</td>
              <td><span class="pill pill-blue">Surat Masuk</span></td>
              <td class="muted">Undangan Rapat Koordinasi Keamanan Wilayah</td>
              <td class="muted">Polda Sumut</td>
              <td><span class="pill pill-gray">Selesai</span></td>
              <td class="text-end"><button class="btn btn-orange">Lihat Detail</button></td>
            </tr>
            <tr>
              <td>002/SK/2024</td>
              <td class="muted">16 Jan 2024</td>
              <td><span class="pill pill-green">Surat Keluar</span></td>
              <td class="muted">Laporan Kegiatan Sosialisasi Pemilu</td>
              <td class="muted">KPU Sumut</td>
              <td><span class="pill pill-emerald">Terkirim</span></td>
              <td class="text-end"><button class="btn btn-orange">Lihat Detail</button></td>
            </tr>
            <tr>
              <td>003/SM/2024</td>
              <td class="muted">17 Jan 2024</td>
              <td><span class="pill pill-blue">Surat Masuk</span></td>
              <td class="muted">Permohonan Data Ormas Terdaftar</td>
              <td class="muted">Kemendagri</td>
              <td><span class="pill pill-yellow">Menunggu</span></td>
              <td class="text-end"><button class="btn btn-orange">Lihat Detail</button></td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="d-flex justify-content-between align-items-center px-3 py-3">
        <div class="muted" style="font-size:12px; font-weight:800;">Menampilkan hasil dari 1 sampai 156</div>
        <div class="pager">
          <div class="pg icon"><i class="bi bi-chevron-left"></i></div>
          <div class="pg active">1</div>
          <div class="pg">2</div>
          <div class="pg">3</div>
          <div class="muted" style="font-weight:900; padding:0 6px;">...</div>
          <div class="pg">16</div>
          <div class="pg icon"><i class="bi bi-chevron-right"></i></div>
        </div>
      </div>
    </section>

    <section class="card-box quick mt-3">
      <div style="font-weight:900; margin-bottom:14px;">Aksi Cepat</div>
      <div class="d-flex" style="gap:12px;">
        <button class="btn btn-orange"><i class="bi bi-inbox me-2"></i> Input Surat Masuk</button>
        <button class="btn btn-darkish"><i class="bi bi-send me-2"></i> Buat Surat Keluar</button>
      </div>
    </section>
  </main>
</x-app-layout>







