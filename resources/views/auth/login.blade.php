<x-app-layout>
    <div class="w-full min-h-screen relative overflow-hidden">
        <div class="absolute inset-0">
            <img src="{{ asset('image/bg.png') }}" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-br from-black/40 via-black/30 to-orange-900/20"></div>
        </div>

        <div class="absolute top-6 left-6 z-20">
            <a href="{{ url('/') }}" class="flex items-center text-white font-medium gap-2 hover:text-orange-300 transition bg-white/10 backdrop-blur-sm px-4 py-2 rounded-xl border border-white/20">
                <i class="bi bi-arrow-left"></i> Kembali
            </a>
        </div>

        <div class="relative z-10 w-full min-h-screen flex items-center justify-center px-4 py-12">
            <div class="bg-white w-full max-w-md rounded-3xl shadow-2xl p-8 text-center border border-gray-100">

                <div class="w-20 h-20 mx-auto mb-6 rounded-2xl bg-gradient-to-br from-orange-400 to-orange-600 flex items-center justify-center shadow-orange-lg">
                    <img src="{{ asset('image/logo.png') }}" class="w-12 h-12" />
                </div>

                <h2 class="text-xl font-bold text-gray-900 mb-1">
                    Selamat Datang di
                </h2>
                <h1 class="text-3xl font-black text-gray-900 mb-4">SIANTAR</h1>

                <div class="w-16 h-1 bg-orange-500 mx-auto rounded-full mb-4"></div>

                <p class="text-sm text-gray-500 mb-1">
                    Sistem Arsip Naskah dan Tata Persuratan
                </p>
                <p class="text-sm font-semibold text-gray-700">
                    Badan Kesatuan Bangsa dan Politik
                </p>

                <form method="POST" action="{{ route('login') }}" class="space-y-5 text-left mt-8">
                    @csrf
                    <div>
                        <label for="email" class="text-sm font-bold text-gray-700 flex items-center gap-2 mb-2">
                            <i class="bi bi-person-fill text-orange-500"></i> Email
                        </label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus placeholder="Masukkan email"
                            class="w-full px-4 py-3 rounded-xl bg-gray-50 border {{ $errors->has('email') ? 'border-red-500 ring-2 ring-red-200' : 'border-gray-200' }} focus:border-orange-500 focus:ring-2 focus:ring-orange-200 focus:bg-white outline-none transition duration-200">
                        @if ($errors->has('email'))
                        <p class="text-red-500 text-xs mt-1 flex items-center gap-1"><i class="bi bi-exclamation-circle"></i> {{ $errors->first('email') }}</p>
                        @endif
                    </div>

                    <div>
                        <label for="password" class="text-sm font-bold text-gray-700 flex items-center gap-2 mb-2">
                            <i class="bi bi-lock-fill text-orange-500"></i> Kata Sandi
                        </label>
                        <div class="relative">
                            <input type="password" id="password" name="password" required placeholder="Masukkan kata sandi"
                                class="w-full px-4 py-3 rounded-xl bg-gray-50 border {{ $errors->has('password') ? 'border-red-500 ring-2 ring-red-200' : 'border-gray-200' }} focus:border-orange-500 focus:ring-2 focus:ring-orange-200 focus:bg-white outline-none pr-12 transition duration-200">
                            <button type="button" class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 hover:text-orange-500 transition" onclick="togglePassword()">
                                <i class="bi bi-eye text-lg" id="password-icon"></i>
                            </button>
                        </div>
                        @if ($errors->has('password'))
                        <p class="text-red-500 text-xs mt-1 flex items-center gap-1"><i class="bi bi-exclamation-circle"></i> {{ $errors->first('password') }}</p>
                        @endif
                    </div>

                    <div class="flex items-center justify-between">
                        <label class="flex items-center cursor-pointer">
                            <input type="checkbox" name="remember" class="w-4 h-4 rounded border-gray-300 text-orange-500 shadow-sm focus:ring-orange-500 focus:ring-offset-0">
                            <span class="ml-2 text-sm text-gray-600">Ingat Saya</span>
                        </label>
                        @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-sm text-orange-500 font-semibold hover:text-orange-600 transition">Lupa Kata Sandi?</a>
                        @endif
                    </div>

                    <button type="submit" class="w-full bg-orange-500 text-white font-bold py-3.5 rounded-xl shadow-orange-lg flex items-center justify-center gap-2 hover:bg-orange-600 active:bg-orange-700 transition duration-200">
                        <i class="bi bi-box-arrow-in-right text-lg"></i> Masuk
                    </button>
                </form>

                <p class="text-sm text-gray-600 mt-6">
                    Belum memiliki akun? <a href="{{ route('contact') }}" class="font-bold text-orange-500 hover:text-orange-600 transition">Hubungi admin</a>
                </p>

                <div class="mt-6 flex justify-center">
                    <div class="flex items-center gap-2 bg-orange-50 px-4 py-2 rounded-full text-xs font-semibold text-orange-700 border border-orange-100">
                        <i class="bi bi-shield-lock-fill"></i>
                        Koneksi Aman & Terenkripsi
                    </div>
                </div>

            </div>
        </div>

        <script>
            function togglePassword() {
                const passwordInput = document.getElementById('password');
                const icon = document.getElementById('password-icon');
                if (passwordInput.type === 'password') {
                    passwordInput.type = 'text';
                    icon.classList.remove('bi-eye');
                    icon.classList.add('bi-eye-slash');
                } else {
                    passwordInput.type = 'password';
                    icon.classList.remove('bi-eye-slash');
                    icon.classList.add('bi-eye');
                }
            }
        </script>
    </div>
</x-app-layout>