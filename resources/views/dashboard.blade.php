@push('styles')
@endpush

<x-app-layout>
  @php
    $quickActions = [
      ['icon' => 'bi-file-earmark-plus', 'title' => 'Buat Surat Baru', 'desc' => 'Buat surat keluar baru', 'href' => route('tambah-surat')],
      ['icon' => 'bi-inbox', 'title' => 'Input Surat Masuk', 'desc' => 'Catat surat masuk baru', 'href' => route('tambah-surat-masuk')],
      ['icon' => 'bi-search', 'title' => 'Cari Arsip', 'desc' => 'Telusuri arsip surat', 'href' => route('cari-arsip')],
      ['icon' => 'bi-bar-chart', 'title' => 'Lihat Laporan', 'desc' => 'Statistik dan laporan', 'href' => '#'],
    ];

    $incomingStats = [
      ['icon' => 'bi-envelope-fill', 'label' => 'Total Surat Masuk', 'value' => 124, 'rowClass' => 'bg-blue-50', 'iconClass' => 'text-blue-600', 'valueClass' => 'text-blue-600'],
      ['icon' => 'bi-exclamation-circle-fill', 'label' => 'Belum Diproses', 'value' => 12, 'rowClass' => 'bg-red-50', 'iconClass' => 'text-red-500', 'valueClass' => 'text-red-600'],
      ['icon' => 'bi-check-circle-fill', 'label' => 'Sudah Diproses', 'value' => 35, 'rowClass' => 'bg-green-50', 'iconClass' => 'text-green-500', 'valueClass' => 'text-green-600'],
    ];

    $outgoingStats = [
      ['icon' => 'bi-reply-fill', 'label' => 'Total Surat Keluar', 'value' => 23, 'rowClass' => 'bg-green-50', 'iconClass' => 'text-green-500', 'valueClass' => 'text-green-600', 'rotate' => true],
      ['icon' => 'bi-clock-fill', 'label' => 'Menunggu Persetujuan', 'value' => 5, 'rowClass' => 'bg-yellow-50', 'iconClass' => 'text-yellow-500', 'valueClass' => 'text-yellow-600'],
      ['icon' => 'bi-check2-all', 'label' => 'Sudah Dikirim', 'value' => 18, 'rowClass' => 'bg-blue-50', 'iconClass' => 'text-blue-600', 'valueClass' => 'text-blue-600'],
    ];

    $activities = [
      ['icon' => 'bi-inbox-fill', 'title' => 'Surat masuk baru dari Dinas Pendidikan', 'time' => '2 jam yang lalu', 'status' => 'Baru', 'pillClass' => 'bg-blue-50 text-blue-600 border-blue-200', 'iconClass' => 'bg-blue-50 text-blue-600'],
      ['icon' => 'bi-check-circle-fill', 'title' => 'Surat keluar telah disetujui', 'time' => '4 jam yang lalu', 'status' => 'Selesai', 'pillClass' => 'bg-green-50 text-green-600 border-green-200', 'iconClass' => 'bg-green-50 text-green-600'],
      ['icon' => 'bi-clock-fill', 'title' => 'Surat undangan rapat menunggu tindakan', 'time' => '1 hari yang lalu', 'status' => 'Pending', 'pillClass' => 'bg-yellow-50 text-yellow-700 border-yellow-200', 'iconClass' => 'bg-yellow-50 text-yellow-600'],
    ];

    $latestLetters = [
      ['no' => '001/SM/XII/2024', 'date' => '18 Des 2024', 'subject' => 'Undangan Rapat Koordinasi Keamanan Wilayah', 'type' => 'Masuk', 'typeClass' => 'bg-blue-50 text-blue-600', 'status' => 'Menunggu', 'statusClass' => 'bg-yellow-50 text-yellow-700 border-yellow-200'],
      ['no' => '045/SK/XII/2024', 'date' => '17 Des 2024', 'subject' => 'Laporan Kegiatan Sosialisasi Wawasan Kebangsaan', 'type' => 'Keluar', 'typeClass' => 'bg-green-50 text-green-600', 'status' => 'Terkirim', 'statusClass' => 'bg-green-50 text-green-600 border-green-200'],
      ['no' => '002/SM/XII/2024', 'date' => '16 Des 2024', 'subject' => 'Permohonan Data Organisasi Kemasyarakatan', 'type' => 'Masuk', 'typeClass' => 'bg-blue-50 text-blue-600', 'status' => 'Perlu Tindak Lanjut', 'statusClass' => 'bg-red-50 text-red-600 border-red-200'],
      ['no' => '044/SK/XII/2024', 'date' => '15 Des 2024', 'subject' => 'Surat Tugas Monitoring Kegiatan Politik', 'type' => 'Keluar', 'typeClass' => 'bg-green-50 text-green-600', 'status' => 'Terkirim', 'statusClass' => 'bg-green-50 text-green-600 border-green-200'],
      ['no' => '003/SM/XII/2024', 'date' => '14 Des 2024', 'subject' => 'Pemberitahuan Kegiatan Hari Pahlawan Nasional', 'type' => 'Masuk', 'typeClass' => 'bg-blue-50 text-blue-600', 'status' => 'Selesai', 'statusClass' => 'bg-gray-100 text-gray-600 border-gray-200'],
    ];
  @endphp

  <div class="min-h-screen bg-[#f5f7fb] text-gray-900">
    <main class="max-w-[1180px] mx-auto px-4 sm:px-6 py-6 space-y-4">
      <!-- HERO -->
      <section class="rounded-2xl p-6 text-white shadow-[0_10px_30px_rgba(17,24,39,0.06)] bg-[linear-gradient(90deg,#ff7a00_0%,#ff8b1a_55%,#ff9b2b_100%)]">
        <h4 class="text-xl font-extrabold tracking-tight">Selamat Datang di SIANTAR, Do Kyungsoo</h4>
        <p class="text-sm font-medium mt-1">Kelola surat masuk dan keluar dengan mudah dan efisien</p>
        <small class="text-[12px] text-orange-100 mt-2 block">Badan Kesatuan Bangsa dan Politik (Kesbangpol)</small>
      </section>

      <!-- QUICK ACTIONS -->
      <section>
        <h6 class="font-bold mb-3">Aksi Cepat</h6>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
          @foreach ($quickActions as $action)
            <a href="{{ $action['href'] }}" class="bg-orange-50 border border-orange-100 rounded-2xl p-4 flex gap-3 hover:border-orange-200 hover:bg-orange-100/70 transition">
              <div class="w-10 h-10 rounded-xl bg-orange-100 text-orange-500 grid place-items-center text-lg flex-shrink-0">
                <i class="bi {{ $action['icon'] }}"></i>
              </div>
              <div>
                <p class="font-extrabold text-sm">{{ $action['title'] }}</p>
                <p class="text-xs text-gray-500 mt-1">{{ $action['desc'] }}</p>
              </div>
            </a>
          @endforeach
        </div>
      </section>

      <!-- SUMMARY CARDS -->
      <section class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <div class="bg-white border border-[#e6eaf2] rounded-[14px] shadow-[0_8px_20px_rgba(17,24,39,0.05)] p-6">
          <div class="flex gap-3 items-start">
            <div class="w-10 h-10 rounded-xl bg-blue-50 text-blue-600 grid place-items-center text-lg">
              <i class="bi bi-inbox-fill"></i>
            </div>
            <div>
              <div class="text-[15px] font-extrabold">Surat Masuk</div>
              <div class="text-xs text-gray-500 mt-1">Kelola surat yang diterima</div>
            </div>
          </div>

          @foreach ($incomingStats as $stat)
            <div class="mt-3 flex items-center justify-between rounded-xl px-3 py-2 text-sm {{ $stat['rowClass'] }}">
              <div class="flex items-center gap-2 font-medium text-gray-700">
                <span class="text-base {{ $stat['iconClass'] }}"><i class="bi {{ $stat['icon'] }}"></i></span>
                <span>{{ $stat['label'] }}</span>
              </div>
              <strong class="{{ $stat['valueClass'] }}">{{ $stat['value'] }}</strong>
            </div>
          @endforeach

          <button class="mt-4 w-full rounded-xl bg-orange-500 text-white font-bold py-3 shadow-[0_10px_18px_rgba(255,127,0,0.22)] hover:bg-orange-600">
            Lihat Detail <i class="bi bi-arrow-right ms-1"></i>
          </button>
        </div>

        <div class="bg-white border border-[#e6eaf2] rounded-[14px] shadow-[0_8px_20px_rgba(17,24,39,0.05)] p-6">
          <div class="flex gap-3 items-start">
            <div class="w-10 h-10 rounded-xl bg-green-50 text-green-600 grid place-items-center text-lg">
              <i class="bi bi-send-fill"></i>
            </div>
            <div>
              <div class="text-[15px] font-extrabold">Surat Keluar</div>
              <div class="text-xs text-gray-500 mt-1">Kelola surat yang dikirim</div>
            </div>
          </div>

          @foreach ($outgoingStats as $stat)
            <div class="mt-3 flex items-center justify-between rounded-xl px-3 py-2 text-sm {{ $stat['rowClass'] }}">
              <div class="flex items-center gap-2 font-medium text-gray-700">
                <span class="text-base {{ $stat['iconClass'] }} {{ !empty($stat['rotate']) ? '-rotate-180' : '' }}">
                  <i class="bi {{ $stat['icon'] }}"></i>
                </span>
                <span>{{ $stat['label'] }}</span>
              </div>
              <strong class="{{ $stat['valueClass'] }}">{{ $stat['value'] }}</strong>
            </div>
          @endforeach

          <button class="mt-4 w-full rounded-xl bg-orange-500 text-white font-bold py-3 shadow-[0_10px_18px_rgba(255,127,0,0.22)] hover:bg-orange-600">
            Lihat Detail <i class="bi bi-arrow-right ms-1"></i>
          </button>
        </div>
      </section>

      <!-- ACTIVITY -->
      <section class="bg-white border border-[#e6eaf2] rounded-[14px] shadow-[0_8px_20px_rgba(17,24,39,0.05)] p-6">
        <div class="flex items-center justify-between mb-3">
          <h6 class="font-extrabold">Aktivitas Terbaru</h6>
          <div class="text-sm text-gray-400">Hari ini</div>
        </div>

        <div class="space-y-2">
          @foreach ($activities as $activity)
            <div class="flex items-center justify-between gap-4 px-2 py-3 border-t border-gray-100 bg-gray-50 first:border-t-0 rounded-lg">
              <div class="flex items-center gap-3">
                <div class="w-9 h-9 rounded-full grid place-items-center {{ $activity['iconClass'] }}">
                  <i class="bi {{ $activity['icon'] }}"></i>
                </div>
                <div>
                  <p class="text-sm font-bold">{{ $activity['title'] }}</p>
                  <p class="text-xs text-gray-400">{{ $activity['time'] }}</p>
                </div>
              </div>
              <span class="text-xs font-bold px-3 py-1 rounded-full border {{ $activity['pillClass'] }}">{{ $activity['status'] }}</span>
            </div>
          @endforeach
        </div>
      </section>

      <!-- LATEST LETTERS -->
      <section class="bg-white border border-[#e6eaf2] rounded-[14px] shadow-[0_8px_20px_rgba(17,24,39,0.05)] p-6">
        <div class="flex items-start justify-between flex-wrap gap-2 mb-4">
          <div>
            <h6 class="font-bold">Surat Terbaru</h6>
            <div class="text-sm text-gray-400">5 surat terakhir yang masuk ke sistem</div>
          </div>
          <a href="{{ route('tambah-surat') }}" class="rounded-xl bg-orange-500 text-white font-extrabold px-4 py-2 shadow-[0_10px_18px_rgba(255,127,0,0.22)] hover:bg-orange-600">
            <i class="bi bi-plus-lg me-1"></i> Tambah Surat
          </a>
        </div>

        <div class="overflow-x-auto">
          <table class="min-w-full text-sm">
            <thead>
              <tr class="text-left text-gray-500 bg-[#f5f7fb]">
                <th class="py-3 px-4 font-bold">No. Surat</th>
                <th class="py-3 px-4 font-bold">Tanggal</th>
                <th class="py-3 px-4 font-bold">Perihal</th>
                <th class="py-3 px-4 font-bold">Jenis</th>
                <th class="py-3 px-4 font-bold text-center">Status</th>
                <th class="py-3 px-4 font-bold text-right">Aksi</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
              @foreach ($latestLetters as $letter)
                <tr>
                  <td class="py-3 px-4 bg-gray-50">{{ $letter['no'] }}</td>
                  <td class="py-3 px-4 bg-gray-50">{{ $letter['date'] }}</td>
                  <td class="py-3 px-4 bg-gray-50">{{ $letter['subject'] }}</td>
                  <td class="py-3 px-4 bg-gray-50">
                    <span class="inline-flex items-center rounded-full px-3 py-1 text-xs font-extrabold {{ $letter['typeClass'] }}">
                      {{ $letter['type'] }}
                    </span>
                  </td>
                  <td class="py-3 px-4 bg-gray-50 text-center">
                    <span class="inline-flex items-center rounded-full px-3 py-1 text-xs font-bold border {{ $letter['statusClass'] }}">
                      {{ $letter['status'] }}
                    </span>
                  </td>
                  <td class="py-3 px-4 bg-gray-50 text-right">
                    <a class="font-extrabold text-orange-500 hover:text-orange-600 hover:underline" href="#">Lihat Detail</a>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </section>
    </main>

  </div>
</x-app-layout>






