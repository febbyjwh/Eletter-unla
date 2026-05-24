<div class="login-scene relative min-h-screen overflow-hidden px-4 py-8 sm:px-6 lg:px-8 flex items-center justify-center">
    <style>
        .login-scene {
            background:
                linear-gradient(rgba(73, 112, 171, 0.07) 1px, transparent 1px),
                linear-gradient(90deg, rgba(73, 112, 171, 0.07) 1px, transparent 1px),
                radial-gradient(circle at 12% 12%, rgba(62, 102, 198, 0.18), transparent 30%),
                radial-gradient(circle at 88% 88%, rgba(58, 115, 191, 0.2), transparent 34%),
                #eef4fb;
            background-size: 32px 32px, 32px 32px, 100% 100%, 100% 100%, 100% 100%;
        }

        .login-shape {
            position: absolute;
            border-radius: 34px;
            pointer-events: none;
            filter: blur(0.2px);
        }

        .login-shape-one {
            width: 132px;
            height: 132px;
            left: max(24px, calc(50% - 560px));
            top: 22%;
            background: rgba(96, 174, 147, 0.16);
            transform: rotate(14deg);
        }

        .login-shape-two {
            width: 138px;
            height: 138px;
            right: max(24px, calc(50% - 590px));
            bottom: 14%;
            border-radius: 999px;
            background: rgba(176, 150, 104, 0.16);
        }

        .login-left-panel {
            background:
                linear-gradient(rgba(255, 255, 255, 0.055) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255, 255, 255, 0.055) 1px, transparent 1px),
                linear-gradient(155deg, #1f4f82 0%, #1f4f8d 54%, #3157d4 100%);
            background-size: 34px 34px, 34px 34px, 100% 100%;
        }

        .login-wave {
            position: absolute;
            left: 0;
            right: 0;
            bottom: 0;
            height: 112px;
            opacity: 0.38;
        }

        .login-card-shell {
            box-shadow: 0 26px 80px rgba(32, 65, 110, 0.2);
        }
    </style>

    <div class="login-shape login-shape-one"></div>
    <div class="login-shape login-shape-two"></div>

    <div class="login-card-shell relative z-10 w-full max-w-5xl overflow-hidden rounded-3xl bg-white border border-white border-opacity-80">
        <div class="grid grid-cols-1 md:grid-cols-2">
            <div class="login-left-panel relative px-8 py-10 text-white sm:px-10 lg:px-12 flex flex-col justify-center overflow-hidden">
                <svg class="login-wave" viewBox="0 0 720 160" preserveAspectRatio="none" aria-hidden="true">
                    <path d="M0 110 C80 92 118 50 202 72 C282 94 300 145 382 116 C470 84 492 34 596 56 C642 66 680 82 720 96" fill="none" stroke="rgba(255,255,255,0.46)" stroke-width="5" />
                    <path d="M0 132 C98 114 128 78 210 95 C284 111 312 154 390 130 C492 98 512 56 600 76 C652 88 690 112 720 122 L720 160 L0 160 Z" fill="rgba(255,255,255,0.08)" />
                </svg>

                <div class="relative">
                    <div class="mb-8 flex items-center gap-4">
                        <div class="h-14 w-14 rounded-2xl bg-white bg-opacity-95 p-2 shadow-lg flex items-center justify-center">
                            <img src="{{ asset('assets/img/logo-unla2.png') }}" alt="Logo UNLA" class="h-full w-full object-contain">
                        </div>
                        <div>
                            <p class="text-xs uppercase tracking-wider text-blue-100">Universitas Langlangbuana</p>
                            <h1 class="text-xl font-bold leading-tight">E-Letter UNLA</h1>
                        </div>
                    </div>

                    <h2 class="text-3xl font-extrabold leading-tight sm:text-4xl">
                        Kelola Surat Lebih Rapi dan Terarah
                    </h2>

                    <p class="mt-4 max-w-md text-sm leading-6 text-blue-50 sm:text-base">
                        Sistem pengelolaan surat masuk, surat keluar, disposisi, arsip, dan laporan
                        dalam satu tempat yang mudah dipantau.
                    </p>

                    <div class="mt-8 space-y-4">
                        <div class="flex items-start gap-3">
                            <div class="mt-0.5 h-6 w-6 rounded-full bg-white bg-opacity-20 flex items-center justify-center">
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <span class="text-sm text-blue-50">Monitoring surat masuk dan keluar secara cepat</span>
                        </div>

                        <div class="flex items-start gap-3">
                            <div class="mt-0.5 h-6 w-6 rounded-full bg-white bg-opacity-20 flex items-center justify-center">
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <span class="text-sm text-blue-50">Disposisi dan arsip dokumen lebih terkontrol</span>
                        </div>

                        <div class="flex items-start gap-3">
                            <div class="mt-0.5 h-6 w-6 rounded-full bg-white bg-opacity-20 flex items-center justify-center">
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <span class="text-sm text-blue-50">Dashboard dan laporan untuk kebutuhan administrasi</span>
                        </div>
                    </div>

                    <p class="relative z-10 mt-10 text-sm text-blue-100">
                        Belum punya akun?<br>
                        <span class="font-semibold text-white underline">Hubungi Administrator E-Letter UNLA</span>
                    </p>
                </div>
            </div>

            <div class="px-8 py-10 sm:px-10 lg:px-12 flex flex-col justify-center">
                <div class="mb-8">
                    <p class="text-sm font-semibold text-gray-800">Secure Login</p>
                    <h3 class="mt-5 text-3xl font-extrabold text-gray-900">Silakan Login</h3>
                    <p class="mt-2 text-sm text-gray-500">Masuk ke sistem E-Letter UNLA menggunakan akun Anda.</p>
                </div>

                @if (session()->has('error'))
                    <div class="mb-5 rounded-lg border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-600">
                        {{ session('error') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="mb-5 rounded-lg border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-600">
                        <strong class="block font-semibold">Login gagal.</strong>
                        <span>{{ $errors->first() }}</span>
                    </div>
                @endif

                <form wire:submit.prevent="login" class="space-y-5">
                    <div>
                        <label for="email" class="sr-only">Email</label>
                        <input
                            id="email"
                            type="email"
                            wire:model="email"
                            class="w-full rounded-xl border border-gray-200 bg-gray-50 px-4 py-4 text-sm font-semibold text-gray-900 outline-none transition focus:border-blue-600 focus:bg-white focus:ring-2 focus:ring-blue-100"
                            placeholder="Masukkan email"
                            required
                            autofocus
                        >
                    </div>

                    <div>
                        <label for="password" class="sr-only">Password</label>
                        <input
                            id="password"
                            type="password"
                            wire:model="password"
                            class="w-full rounded-xl border border-gray-200 bg-gray-50 px-4 py-4 text-sm font-semibold text-gray-900 outline-none transition focus:border-blue-600 focus:bg-white focus:ring-2 focus:ring-blue-100"
                            placeholder="Masukkan password"
                            required
                        >
                    </div>

                    <div class="flex items-center justify-between gap-4 text-sm">
                        <label class="flex items-center gap-2 text-gray-600">
                            <input type="checkbox" wire:model="remember" class="h-4 w-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                            <span>Ingat saya</span>
                        </label>

                        <a href="{{ route('password.request') }}" class="font-semibold text-blue-600 hover:text-blue-700">
                            Lupa Password?
                        </a>
                    </div>

                    <button
                        type="submit"
                        class="inline-flex w-full items-center justify-center gap-2 rounded-xl px-4 py-4 text-base font-bold text-white shadow-xl transition hover:opacity-95 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2"
                        style="background: linear-gradient(90deg, #24548d 0%, #3151d4 100%); box-shadow: 0 16px 28px rgba(42, 78, 182, 0.24);"
                    >
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 3h4a2 2 0 012 2v14a2 2 0 01-2 2h-4M10 17l5-5-5-5M15 12H3" />
                        </svg>
                        Silahkan Login
                    </button>
                </form>

                <div class="mt-8 flex items-start gap-3 rounded-xl border border-gray-200 bg-gray-50 px-4 py-3 text-sm text-gray-600">
                    <svg class="mt-0.5 h-5 w-5 flex-none text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5-5v6c0 5-3.5 9.5-8 10-4.5-.5-8-5-8-10V5l8-3 8 3z" />
                    </svg>
                    <span>Data surat dan arsip hanya dapat diakses oleh pengguna yang berwenang.</span>
                </div>

                <p class="mt-8 text-center text-xs text-gray-400">
                    © {{ date('Y') }} Universitas Langlangbuana. All rights reserved.
                </p>
            </div>
        </div>
    </div>
</div>
