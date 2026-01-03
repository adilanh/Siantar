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
    .page-title{font-weight:900; font-size:34px; margin:8px 0 2px}
    .page-sub{color:var(--muted); margin:0 0 18px 0; font-weight:500}
    .section-title{
      font-weight:900;
      display:flex;
      align-items:center;
      gap:10px;
      margin:0;
      color:#111827;
      font-size:15px;
    }
    .section-title .sec-ico{
      width:26px;height:26px;border-radius:8px;
      display:grid;place-items:center;
      background:#fff3ea;
      color:var(--brand);
      border:1px solid #ffe1c7;
      font-size:14px;
    }
    .label{
      font-weight:800;
      font-size:12px;
      color:#374151;
      margin-bottom:8px;
    }
    .label .req{color:#ef4444}
    .help{font-size:12px; color:#9aa3b2; display:flex; align-items:center; gap:8px; margin-top:10px}
    .form-control, .form-select, textarea{
      border-radius:10px;
      border:1px solid #e6eaf2;
      padding:.68rem .85rem;
      font-size:13px;
      background:#fff;
    }
    textarea{min-height:98px; resize:none}
    .textarea-lg{min-height:120px}
    .input-icon{position:relative;}
    .input-icon .bi{
      position:absolute;
      right:12px; top:50%;
      transform:translateY(-50%);
      color:#9aa3b2;
      pointer-events:none;
    }
    .upload{
      border:2px dashed #d7dde8;
      border-radius:12px;
      padding:32px 18px;
      text-align:center;
      background:#fff;
    }
    .upload .cloud{font-size:36px;color:#9aa3b2;margin-bottom:10px;}
    .upload h6{font-weight:900;margin:0 0 6px}
    .upload p{color:#6b7280;margin:0 0 14px;font-size:12px}
    .btn-lightish{
      background:#fff;
      border:1px solid #e6eaf2;
      border-radius:10px;
      padding:.55rem .9rem;
      font-weight:800;
      font-size:12px;
      color:#374151;
      box-shadow:0 10px 18px rgba(17,24,39,.04);
    }
    .btn-lightish:hover{border-color:#d7dde8}
    .btn-orange-sm{
      background:var(--brand);
      border:none;
      color:#fff;
      font-weight:900;
      border-radius:10px;
      padding:.55rem .95rem;
      box-shadow:0 10px 18px rgba(255,127,0,.20);
      font-size:12px;
    }
    .btn-orange-sm:hover{background:var(--brand-dark); color:#fff}
    .note-blue{
      background:#eef6ff;
      border:1px solid #bcd7ff;
      border-radius:10px;
      padding:12px 14px;
      color:#1d4ed8;
      font-weight:700;
      font-size:12px;
      display:flex;
      align-items:flex-start;
      gap:10px;
      margin-top:14px;
    }
    .note-blue i{margin-top:1px}
    .warn{
      background:#fff8db;
      border:1px solid #fde68a;
      border-radius:10px;
      padding:12px 14px;
      color:#92400e;
      font-weight:700;
      font-size:12px;
      display:flex;
      align-items:flex-start;
      gap:10px;
      margin-top:16px;
    }
    .warn i{margin-top:1px}
    .action-bar{
      display:flex;
      justify-content:flex-end;
      gap:12px;
      margin-top:18px;
    }
    .btn-cancel{
      background:#fff;
      border:1px solid #e6eaf2;
      border-radius:10px;
      padding:.6rem 1rem;
      font-weight:900;
      font-size:12px;
      color:#374151;
      box-shadow:0 10px 18px rgba(17,24,39,.04);
    }
    .btn-cancel:hover{border-color:#d7dde8}
  </style>
@endpush
<x-app-layout>
<div class="bg-[#f5f7fb]">
<main class="container wrap py-4">
    <a href="{{ route('surat-keluar.index') }}" class="back-link"><i class="bi bi-arrow-left"></i> Kembali</a>

    <h1 class="page-title">Tambah Surat Keluar</h1>
    <p class="page-sub">Gunakan formulir berikut untuk membuat dan mencatat surat keluar.</p>

    <section class="card-box p-3 p-lg-4">
      <div class="section-title mb-3">
        <span class="sec-ico"><i class="bi bi-envelope-fill"></i></span>
        Informasi Surat
      </div>

      <div class="row g-3">
        <div class="col-lg-6">
          <div class="label">Nomor Urut Surat <span class="req">*</span></div>
          <input class="form-control" placeholder="Masukkan nomor surat" />
        </div>
        <div class="col-lg-6">
          <div class="label">Alamat Penerima <span class="req">*</span></div>
          <input class="form-control" placeholder="Nama instansi/organisasi pengirim" />
        </div>

        <div class="col-lg-6">
          <div class="label">Tanggal Surat <span class="req">*</span></div>
          <div class="input-icon">
            <input class="form-control" placeholder="mm/dd/yyyy" />
            <i class="bi bi-calendar3"></i>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="label">Jenis Surat <span class="req">*</span></div>
          <input class="form-control" value="Surat Keluar" />
        </div>

        <div class="col-lg-6">
          <div class="label">Sifat Surat <span class="req">*</span></div>
          <select class="form-select">
            <option selected>Pilih sifat surat</option>
            <option>Biasa</option>
            <option>Penting</option>
            <option>Rahasia</option>
          </select>
        </div>
        <div class="col-lg-6">
          <div class="label">Kategori Surat <span class="req">*</span></div>
          <select class="form-select">
            <option selected>Pilih kategori surat</option>
            <option>Undangan</option>
            <option>Laporan</option>
            <option>Permohonan</option>
          </select>
        </div>

        <div class="col-12">
          <div class="label">Perihal <span class="req">*</span></div>
          <input class="form-control" placeholder="Masukkan perihal surat" />
        </div>

        <div class="col-12">
          <div class="label">Ringkasan Isi Surat <span class="text-muted">(Opsional)</span></div>
          <textarea class="form-control textarea-lg" placeholder="Dengan hormat, Sehubungan dengan... Demikian surat ini kami sampaikan, atas perhatian dan kerjasamanya kami ucapkan terima kasih."></textarea>
          <div class="help"><i class="bi bi-info-circle"></i> Ringkasan isi surat digunakan sebagai gambaran umum isi dokumen.</div>
        </div>

        <div class="col-12 mt-2">
          <div class="label" style="font-size:13px; font-weight:900; color:#374151;">Data Tambahan <span class="text-muted">(Opsional)</span></div>
        </div>
        <div class="col-lg-4">
          <div class="label">Nomor Berkas <span class="text-muted">(Opsional)</span></div>
          <input class="form-control" placeholder="Nomor berkas" />
        </div>
        <div class="col-lg-4">
          <div class="label">Nomor Petunjuk <span class="text-muted">(Opsional)</span></div>
          <input class="form-control" placeholder="Nomor petunjuk" />
        </div>
        <div class="col-lg-4">
          <div class="label">Nomor Paket <span class="text-muted">(Opsional)</span></div>
          <input class="form-control" placeholder="Nomor paket" />
        </div>
      </div>
    </section>

    <section class="card-box p-3 p-lg-4 mt-3">
      <div class="section-title mb-3">
        <span class="sec-ico"><i class="bi bi-paperclip"></i></span>
        Lampiran Dokumen
      </div>

      <div class="upload">
        <div class="cloud"><i class="bi bi-cloud-arrow-up"></i></div>
        <h6>Unggah atau Ambil Foto Surat</h6>
        <p>Format yang didukung: PDF, JPG, PNG, DOC, DOCX | Maksimal 10 MB</p>
        <div class="d-flex justify-content-center gap-2">
          <button class="btn btn-lightish"><i class="bi bi-folder2-open me-2"></i>Pilih File</button>
          <button class="btn btn-orange-sm"><i class="bi bi-camera me-2"></i>Buka Kamera</button>
        </div>
      </div>

      <div class="note-blue">
        <i class="bi bi-info-circle-fill"></i>
        <div><strong>Catatan:</strong> Digunakan untuk menyimpan arsip digital dari surat keluar.</div>
      </div>
    </section>

    <section class="card-box p-3 p-lg-4 mt-3">
      <div class="section-title mb-3">
        <span class="sec-ico"><i class="bi bi-diagram-3-fill"></i></span>
        Status &amp; Alur <span class="text-muted">(Opsional)</span>
      </div>

      <div class="row g-3">
        <div class="col-lg-6">
          <div class="label">Status Awal Surat</div>
          <select class="form-select">
            <option selected>Menunggu Persetujuan</option>
            <option>Diproses</option>
            <option>Selesai</option>
          </select>
          <div class="help"><i class="bi bi-info-circle"></i> Surat akan diproses sesuai alur persetujuan yang berlaku.</div>
        </div>
      </div>
    </section>

    <div class="action-bar">
      <button class="btn btn-cancel">Batal</button>
      <button class="btn btn-orange"><i class="bi bi-floppy me-2"></i> Simpan Surat Masuk</button>
    </div>

    <div class="warn">
      <i class="bi bi-exclamation-triangle-fill"></i>
      <div>Pastikan data surat telah diisi dengan benar sebelum disimpan.</div>
    </div>

  </main>
</div>
</x-app-layout>












