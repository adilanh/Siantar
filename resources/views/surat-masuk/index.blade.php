@push('styles')
<style>
    :root{
      --brand:#ff7f00;
      --brand-dark:#f36f00;
      --bg:#f5f7fb;
      --card-border:#e6eaf2;
      --muted:#6b7280;
      --text:#111827;
      --shadow:0 10px 30px rgba(17,24,39,.06);
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
    .page-title{font-weight:800; font-size:34px; margin:8px 0 4px}
    .page-sub{color:#6b7280; margin:0 0 18px 0}

    .card-box{
      background:#fff;
      border:1px solid var(--card-border);
      border-radius:16px;
      box-shadow:0 8px 20px rgba(17,24,39,.05);
    }

    .metric{
      border-radius:14px;
      padding:16px 18px;
      display:flex;
      align-items:center;
      justify-content:space-between;
      height:100%;
      background:#fff;
      border:1px solid #eef2f7;
      box-shadow:0 6px 16px rgba(17,24,39,.04);
      position:relative;
      overflow:hidden;
    }
    .metric:before{
      content:"";
      position:absolute;
      left:0; top:0; bottom:0;
      width:4px;
      background:var(--brand);
      border-radius:14px 0 0 14px;
    }
    .metric.yellow:before{background:#f59e0b}
    .metric.green:before{background:#22c55e}

    .metric .label{color:#6b7280; font-weight:600; font-size:13px}
    .metric .value{font-weight:800; font-size:28px; line-height:1; margin-top:6px}
    .metric-ico{
      width:44px;height:44px;border-radius:999px;
      display:grid;place-items:center;
      font-size:18px;
      background:#fff3ea;
      color:var(--brand);
      flex:0 0 auto;
    }
    .metric.yellow .metric-ico{background:#fff7e6; color:#f59e0b}
    .metric.green .metric-ico{background:#ecfdf5; color:#22c55e}

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

    .filter-box{padding:18px;border-radius:16px;}
    .filter-label{font-weight:700;font-size:13px;color:#374151;margin-bottom:8px;}
    .input-wrap{position:relative;}
    .input-ico{position:absolute;left:12px;top:50%;transform:translateY(-50%);color:#9aa3b2;font-size:16px;pointer-events:none;}
    .form-control, .form-select{border-radius:12px;border:1px solid #e6eaf2;padding:.72rem .9rem;background:#fff;}
    .form-control.ps-5{padding-left:40px !important}
    .form-select{padding-right:38px}
    .date-wrap .input-ico{left:auto;right:12px;}

    .table thead th{
      background:#f5f7fb;
      color:#6b7280;
      font-weight:800;
      font-size:12px;
      border-bottom:1px solid #e9edf5;
      padding:12px 14px;
    }
    .table tbody td{
      border-top:1px solid #f0f3f8;
      padding:14px;
      vertical-align:middle;
      font-size:13px;
      color:#111827;
    }
    .table tbody td.muted{color:#6b7280}

    .pill{
      border-radius:999px;
      padding:6px 12px;
      font-weight:800;
      font-size:11px;
      border:1px solid transparent;
      display:inline-flex;
      align-items:center;
      justify-content:center;
      min-width:84px;
    }
    .pill.blue{background:#eaf2ff; color:#2563eb; border-color:#d8e7ff}
    .pill.yellow{background:#fff1cf; color:#b45309; border-color:#ffe3a1}
    .pill.orange{background:#ffedd5; color:#c2410c; border-color:#fed7aa}
    .pill.green{background:#e9fff0; color:#16a34a; border-color:#d7f7e1}

    .btn-detail{
      background:var(--brand);
      border:none;
      color:#fff;
      font-weight:800;
      border-radius:10px;
      padding:.5rem .9rem;
      box-shadow:0 10px 18px rgba(255,127,0,.20);
      font-size:12px;
    }
    .btn-detail:hover{background:var(--brand-dark); color:#fff}

    .pager{display:flex;align-items:center;justify-content:flex-end;gap:8px;}
    .page-btn{
      width:34px;height:34px;border-radius:10px;display:grid;place-items:center;
      border:1px solid #e6eaf2;background:#fff;color:#6b7280;font-weight:800;text-decoration:none;
    }
    .page-btn.active{background:var(--brand);border-color:var(--brand);color:#fff;box-shadow:0 10px 18px rgba(255,127,0,.20);}
    .dots{color:#9aa3b2;font-weight:800;padding:0 6px}

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
      .page-title{font-size:30px}
    }
  </style>
@endpush

<x-app-layout>

  <main class="container wrap py-4">

    <a href="{{ route('dashboard') }}" class="back-link"><i class="bi bi-arrow-left"></i> Kembali</a>

    <h1 class="page-title">Surat Masuk</h1>
    <p class="page-sub">Daftar seluruh surat masuk yang Anda terima</p>

    <div class="row g-3 align-items-stretch">
      <div class="col-lg-4">
        <div class="metric">
          <div>
            <div class="label">Total Surat Masuk</div>
            <div class="value">124</div>
          </div>
          <div class="metric-ico"><i class="bi bi-send-fill"></i></div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="metric yellow">
          <div>
            <div class="label">Belum Diproses</div>
            <div class="value">8</div>
          </div>
          <div class="metric-ico"><i class="bi bi-clock-fill"></i></div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="metric green">
          <div>
            <div class="label">Sudah Diproses</div>
            <div class="value">116</div>
          </div>
          <div class="metric-ico"><i class="bi bi-check-circle-fill"></i></div>
        </div>
      </div>
      
    </div>

    <div class="d-flex justify-content-end mt-3">
      <button class="btn btn-orange"><i class="bi bi-list-task me-2"></i> Lihat Laporan Bulanan</button>
    </div>

    <section class="card-box filter-box mt-4">
      <div class="row g-3">
        <div class="col-lg-6">
          <div class="filter-label">Pencarian</div>
          <div class="input-wrap">
            <i class="bi bi-search input-ico"></i>
            <input class="form-control ps-5" type="text" placeholder="Cari nomor surat atau perihal..." />
          </div>
        </div>
        <div class="col-lg-3">
          <div class="filter-label">Status</div>
          <select class="form-select">
            <option selected>Semua Status</option>
            <option>Baru</option>
            <option>Menunggu</option>
            <option>Diproses</option>
            <option>Selesai</option>
          </select>
        </div>
        <div class="col-lg-3">
          <div class="filter-label">Tanggal</div>
          <div class="input-wrap date-wrap">
            <input class="form-control" type="text" placeholder="mm/dd/yyyy" />
            <i class="bi bi-calendar3 input-ico"></i>
          </div>
        </div>
      </div>
    </section>

    <section class="card-box mt-4 p-3 p-lg-4">
      <div class="table-responsive">
        <table class="table align-middle">
          <thead>
            <tr>
              <th style="min-width:140px">Nomor Surat</th>
              <th style="min-width:120px">Tanggal</th>
              <th style="min-width:160px">Pengirim</th>
              <th>Perihal</th>
              <th style="min-width:120px; text-align:center;">Status</th>
              <th style="min-width:130px; text-align:center;">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="fw-bold">001/KB/2024</td>
              <td class="muted">15 Jan 2024</td>
              <td class="muted">Dinas Pendidikan</td>
              <td class="muted">Permohonan Kerjasama Kegiatan</td>
              <td class="text-center"><span class="pill blue">Baru</span></td>
              <td class="text-center"><a class="btn btn-detail" href="{{ route('detail-surat-masuk') }}">Lihat Detail</a></td>
            </tr>
            <tr>
              <td class="fw-bold">002/KB/2024</td>
              <td class="muted">14 Jan 2024</td>
              <td class="muted">Kepolisian Resort</td>
              <td class="muted">Laporan Keamanan Wilayah</td>
              <td class="text-center"><span class="pill yellow">Menunggu</span></td>
              <td class="text-center"><a class="btn btn-detail" href="{{ route('detail-surat-masuk') }}">Lihat Detail</a></td>
            </tr>
            <tr>
              <td class="fw-bold">003/KB/2024</td>
              <td class="muted">13 Jan 2024</td>
              <td class="muted">Bappeda</td>
              <td class="muted">Koordinasi Program Pembangunan</td>
              <td class="text-center"><span class="pill orange">Diproses</span></td>
              <td class="text-center"><a class="btn btn-detail" href="{{ route('detail-surat-masuk') }}">Lihat Detail</a></td>
            </tr>
            <tr>
              <td class="fw-bold">004/KB/2024</td>
              <td class="muted">12 Jan 2024</td>
              <td class="muted">Sekretariat Daerah</td>
              <td class="muted">Undangan Rapat Koordinasi</td>
              <td class="text-center"><span class="pill green">Selesai</span></td>
              <td class="text-center"><a class="btn btn-detail" href="{{ route('detail-surat-masuk') }}">Lihat Detail</a></td>
            </tr>
            <tr>
              <td class="fw-bold">005/KB/2024</td>
              <td class="muted">11 Jan 2024</td>
              <td class="muted">Dinas Sosial</td>
              <td class="muted">Bantuan Sosial Masyarakat</td>
              <td class="text-center"><span class="pill green">Selesai</span></td>
              <td class="text-center"><a class="btn btn-detail" href="{{ route('detail-surat-masuk') }}">Lihat Detail</a></td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="d-flex align-items-center justify-content-between mt-3">
        <div class="text-muted" style="font-size:13px;">Menampilkan 1-5 dari 124 surat masuk</div>
        <div class="pager">
          <a class="page-btn" href="#" aria-label="Prev"><i class="bi bi-chevron-left"></i></a>
          <a class="page-btn active" href="#">1</a>
          <a class="page-btn" href="#">2</a>
          <a class="page-btn" href="#">3</a>
          <span class="dots">...</span>
          <a class="page-btn" href="#">26</a>
          <a class="page-btn" href="#" aria-label="Next"><i class="bi bi-chevron-right"></i></a>
        </div>
      </div>
    </section>

  </main>
</x-app-layout>








