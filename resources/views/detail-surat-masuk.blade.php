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
@endpush

<x-app-layout>
  <div class="bg-[#f5f7fb]">
    <main class="container wrap py-4">
    <a href="{{ route('surat-masuk.index') }}" class="back-link"><i class="bi bi-arrow-left"></i> Kembali</a>

    <h1 class="page-title" style="margin-top:8px;">Permohonan Kerjasama Kegiatan</h1>
    <p class="page-sub">Informasi lengkap mengenai surat masuk (Permohonan Kerjasama Kegiatan)</p>

    <section class="card-box mt-3">
      <div class="detail-header d-flex align-items-start justify-content-between">
        <div class="d-flex gap-2 flex-wrap">
          <span class="pill pill-green">Diterima</span>
          <span class="pill pill-orange">Penting</span>
        </div>
        <button class="kebab" aria-label="menu"><i class="bi bi-three-dots-vertical"></i></button>
      </div>

      <div class="px-3 px-lg-4 pb-3 pb-lg-4">
        <div class="row g-4 detail-grid">
          <div class="col-lg-6">
            <div class="kv">
              <div class="k">Nomor Surat</div>
              <div class="v bold">012/PKK/III/2024</div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="kv">
              <div class="k">Pengirim</div>
              <div class="v bold">Dinas Pendidikan Kota Bandar Lampung</div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="kv">
              <div class="k">Tanggal Surat</div>
              <div class="v bold">10 Maret 2024</div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="kv">
              <div class="k">Perihal</div>
              <div class="v bold">Permohonan Kerja Sama Kegiatan</div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="kv">
              <div class="k">Tanggal Diterima</div>
              <div class="v bold">12 Maret 2024, 09:15 WIB</div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="kv">
              <div class="k">Kategori</div>
              <div class="v bold">Permohonan</div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="card-box mt-3">
      <div class="section-head">
        <span class="sec-ico"><i class="bi bi-file-earmark-text"></i></span>
        Ringkasan Isi Surat
      </div>
      <div class="section-body">
        <div class="paragraph">
          Dengan hormat, bersama surat ini kami mengajukan permohonan kerja sama kegiatan antara Dinas Pendidikan Kota Bandar Lampung dengan Badan Kesatuan Bangsa dan Politik Kota Bandar Lampung dalam rangka pelaksanaan kegiatan peningkatan wawasan kebangsaan dan partisipasi masyarakat.
          <br><br>
          Kegiatan direncanakan akan dilaksanakan pada:<br><br>
          <strong>Hari/Tanggal:</strong> Kamis, 28 Maret 2024<br>
          <strong>Waktu:</strong> 08.30 WIB – Selesai<br>
          <strong>Tempat:</strong> Aula Dinas Pendidikan Kota Bandar Lampung
          <br><br>
          Besar harapan kami agar permohonan ini dapat ditindaklanjuti. Atas perhatian dan kerja sama Bapak/Ibu, kami ucapkan terima kasih.
        </div>
      </div>
    </section>

    <section class="card-box mt-3">
      <div class="section-head">
        <span class="sec-ico"><i class="bi bi-paperclip"></i></span>
        Lampiran Dokumen
      </div>
      <div class="section-body">
        <div class="dl-line">
          <div class="file-ico">PDF</div>
          <div>
            <div class="file-name">Surat_Permohonan_Kerjasama.pdf</div>
            <div class="file-meta">PDF · 2.1 MB</div>
          </div>
          <div class="file-actions">
            <button class="btn btn-orange-outline">Lihat</button>
            <button class="btn btn-orange">Unduh</button>
          </div>
        </div>

        <div class="dl-line mt-3">
          <div class="file-ico word">W</div>
          <div>
            <div class="file-name">Proposal_Kegiatan.docx</div>
            <div class="file-meta">DOCX · 1.8 MB</div>
          </div>
          <div class="file-actions">
            <button class="btn btn-orange-outline">Lihat</button>
            <button class="btn btn-orange">Unduh</button>
          </div>
        </div>
      </div>
    </section>
    </main>
  </div>
</x-app-layout>








