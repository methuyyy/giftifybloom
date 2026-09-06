<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login - Giftify Bloom</title>
        @fonts
        <!-- @vite(['resources/css/app.css', 'resources/js/app.js']) -->
    </head>
    <body class="bg-white antialiased min-h-screen flex items-center justify-center p-4 sm:p-6 lg:p-8">
        <main class="w-full max-w-7xl mx-auto">
            <div class="bg-white rounded-3xl shadow-2xl overflow-hidden border-2 border-[#6d2857] flex flex-col lg:flex-row">
                <div class="flex-1 p-8 sm:p-10 lg:p-16 flex flex-col justify-center items-center lg:items-start w-full lg:w-1/2">
                    <div class="w-full max-w-md flex flex-col items-center lg:items-start">
                        <h1 class="text-3xl sm:text-4xl font-bold text-gray-900 tracking-wide text-center lg:text-left">
                            Welcome back
                        </h1>

                        <div class="mt-2 mb-8 sm:mb-10 lg:mb-12">
                            <span style="font-family: 'Brush Script MT', 'Segoe Script', cursive; font-style: italic;">
                                <span class="text-3xl sm:text-4xl" style="color: #8b5cf6;">Giftify</span>
                                <span class="text-3xl sm:text-4xl" style="color: #d4a574;">&nbsp;Bloom</span>
                            </span>
                        </div>

                        @if ($errors->any())
                            <div class="w-full mb-4 p-3 bg-red-50 border border-red-200 rounded-2xl">
                                <ul class="text-sm text-red-500 space-y-1 list-none m-0 p-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('login.post') }}" class="w-full space-y-4">
                            @csrf

                            <div class="w-full">
                                <input
                                    id="email"
                                    type="email"
                                    name="email"
                                    value="{{ old('email') }}"
                                    placeholder="Email"
                                    required
                                    autocomplete="username"
                                    class="w-full px-6 py-4 text-base border-2 border-[#6d2857] rounded-full bg-white text-gray-800 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-[#8b5cf6] focus:border-transparent transition-all duration-200"
                                />
                            </div>

                            <div class="w-full">
                                <div class="relative">
                                    <input
                                        id="password"
                                        type="password"
                                        name="password"
                                        placeholder="Password"
                                        required
                                        autocomplete="current-password"
                                        class="w-full px-6 py-4 pr-12 text-base border-2 border-[#6d2857] rounded-full bg-white text-gray-800 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-[#8b5cf6] focus:border-transparent transition-all duration-200"
                                    />
                                    <button
                                        type="button"
                                        id="togglePassword"
                                        class="absolute right-4 top-1/2 -translate-y-1/2 p-1 text-gray-500 hover:text-[#6d2857] focus:outline-none cursor-pointer transition-colors duration-200"
                                        aria-label="Toggle password visibility"
                                    >
                                        <svg id="eyeIcon" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 fill-none stroke-current stroke-[2]" viewBox="0 0 24 24">
                                            <path id="eyePath" stroke-linecap="round" stroke-linejoin="round" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />
                                        </svg>
                                    </button>
                                </div>
                            </div>

                            <div class="flex justify-end w-full">
                                <a href="#" class="text-sm font-medium text-gray-900 hover:underline transition-colors duration-150">
                                    Forgot Password ?
                                </a>
                            </div>

                            <div class="w-full pt-2 sm:pt-4">
                                <button
                                    type="submit"
                                    class="w-full py-4 px-6 text-base font-semibold rounded-full text-[#6d2857] bg-[#ede9fe] hover:bg-[#ddd6fe] focus:outline-none focus:ring-2 focus:ring-[#8b5cf6] focus:ring-offset-0 transition-all duration-200 shadow-md hover:shadow-lg"
                                >
                                    Log In
                                </button>
                            </div>
                        </form>

                        <div class="w-full mt-6 text-center lg:text-left">
                            <span class="text-sm text-gray-800">Don't have an account? </span>
                            <a href="#" class="text-sm font-semibold text-[#6d2857] hover:underline transition-colors duration-150">
                                Sign Up
                            </a>
                        </div>
                    </div>
                </div>

                <div class="hidden lg:flex lg:w-1/2 items-center justify-center p-8 lg:p-12 bg-white">
                    <div class="w-full h-full max-h-[700px] aspect-[4/5] flex items-center justify-center">
                        <img
                            src="{{ asset('images/loginregister.png') }}"
                            alt="Giftify Bloom Welcome Illustration"
                            class="w-full h-full object-cover rounded-3xl shadow-xl"
                        />
                    </div>
                </div>

                <div class="flex lg:hidden w-full p-6 sm:p-8 items-center justify-center bg-white">
                    <div class="w-full max-w-md">
                        <img
                            src="{{ asset('images/loginregister.png') }}"
                            alt="Giftify Bloom Welcome Illustration"
                            class="w-full h-auto object-cover rounded-3xl shadow-xl"
                        />
                    </div>
                </div>
            </div>
        </main>

        <script>
            (function () {
                var btn = document.getElementById('togglePassword');
                var pwd = document.getElementById('password');
                if (!btn || !pwd) return;

                var ns = 'http://www.w3.org/2000/svg';
                var hideD = 'M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21';
                var showOuterD = 'M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z';
                var showInnerD = 'M15 12a3 3 0 11-6 0 3 3 0 016 0Z';

                function makePath(dAttr) {
                    var el = document.createElementNS(ns, 'path');
                    el.setAttribute('stroke-linecap', 'round');
                    el.setAttribute('stroke-linejoin', 'round');
                    el.setAttribute('d', dAttr);
                    return el;
                }

                function renderIcon(state) {
                    var svg = document.getElementById('eyeIcon');
                    while (svg.firstChild) svg.removeChild(svg.firstChild);
                    if (state === 'show') {
                        svg.appendChild(makePath(showOuterD));
                        svg.appendChild(makePath(showInnerD));
                    } else {
                        svg.appendChild(makePath(hideD));
                    }
                }

                btn.addEventListener('click', function () {
                    if (pwd.type === 'password') {
                        pwd.type = 'text';
                        renderIcon('show');
                    } else {
                        pwd.type = 'password';
                        renderIcon('hide');
                    }
                });
            })();
        </script>
    </body>
</html>
