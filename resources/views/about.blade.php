<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About Us — Giftify Bloom</title>
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <script src="https://cdn.tailwindcss.com"></script>
    @endif
</head>
<body class="bg-gradient-to-b from-[#f6efff] via-[#faf4ff] to-[#f4ebff] antialiased min-h-screen w-full overflow-x-hidden">

<x-marquee-ticker />

    <x-navbar />

    <section class="w-full pt-6 sm:pt-8 pb-12 sm:pb-16 lg:pb-20">
        <div class="w-full max-w-4xl mx-auto px-4 sm:px-6 lg:px-10">

            <div class="w-full flex flex-col items-center text-center mb-10 sm:mb-14">
                <h1 class="text-2xl sm:text-3xl lg:text-4xl font-semibold italic text-[#6d2857] mb-2"
                    style="font-family: 'Brush Script MT', 'Segoe Script', cursive;">
                    About Giftify Bloom
                </h1>
                <p class="text-sm sm:text-base text-[#6d2857] font-medium">
                    Add a personal message to your bouquet
                </p>
            </div>

            <div class="w-full flex flex-col gap-6 sm:gap-8">

                <article class="w-full bg-white/70 backdrop-blur-sm rounded-2xl border-2 border-[#6d2857] p-5 sm:p-6 lg:p-7 shadow-[0_10px_30px_rgba(109,40,87,0.06)]">
                    <h3 class="text-sm sm:text-base font-bold text-[#6d2857] mb-2 tracking-wide">
                        About Giftify Bloom
                    </h3>
                    <p class="text-xs sm:text-sm text-[#3e2146] leading-relaxed">
                        Platform buket digital interaktif sekaligus toko bunga online (e-commerce) untuk merangkai, memilih, dan mengirimkan bunga fisik maupun digital dengan pesan yang penuh makna.
                    </p>
                </article>

                <article class="w-full bg-white/70 backdrop-blur-sm rounded-2xl border-2 border-[#6d2857] p-5 sm:p-6 lg:p-7 shadow-[0_10px_30px_rgba(109,40,87,0.06)]">
                    <h3 class="text-sm sm:text-base font-bold text-[#6d2857] mb-2 tracking-wide">
                        Apa itu Giftify Bloom?
                    </h3>
                    <p class="text-xs sm:text-sm text-[#3e2146] leading-relaxed">
                        Giftify Bloom adalah platform all-in-one tempat kamu bisa merangkai buket bunga digital secara gratis, membeli bunga asli maupun toko online kami, serta menemukan inspirasi kata-kata dan makna bunga. Baik ingin mengirim hadiah instan lewat tautan digital maupun memesan buket segar yang dikirim langsung ke pintu penerima, Giftify Bloom siap membantu kamu menyampaikannya.
                    </p>
                </article>

                <article class="w-full bg-white/70 backdrop-blur-sm rounded-2xl border-2 border-[#6d2857] p-5 sm:p-6 lg:p-7 shadow-[0_10px_30px_rgba(109,40,87,0.06)]">
                    <h3 class="text-sm sm:text-base font-bold text-[#6d2857] mb-3 tracking-wide">
                        Mengapa kami membuat Giftify Bloom?
                    </h3>
                    <p class="text-xs sm:text-sm text-[#3e2146] leading-relaxed mb-4">
                        Giftify Bloom hadir untuk menjembatani perasaan dan tindakan. Terkadang kita ingin mengungkapkan kepedulian, rasa terima kasih, atau kasih sayang, tetapi bingung memilih bunga yang tepat atau kata-kata yang pas.
                    </p>
                    <p class="text-xs sm:text-sm text-[#3e2146] leading-relaxed">
                        Kami percaya bahwa memberi bunga—baik berupa buket fisik yang harum maupun buket digital yang interaktif—harus terasa hangat, bermakna, dan personal. Oleh karena itu, Giftify Bloom menggabungkan kemudahan e-commerce dengan panduan makna bunga dan penyesuaian pesan agar kiriman terasa special.
                    </p>
                </article>

                <article class="w-full bg-white/70 backdrop-blur-sm rounded-2xl border-2 border-[#6d2857] p-5 sm:p-6 lg:p-7 shadow-[0_10px_30px_rgba(109,40,87,0.06)]">
                    <h3 class="text-sm sm:text-base font-bold text-[#6d2857] mb-3 tracking-wide">
                        Layanan & Cara Menggunakan Giftify Bloom
                    </h3>
                    <ul class="space-y-2 sm:space-y-2.5 pl-0.5 list-none">
                        <li class="flex gap-2 text-xs sm:text-sm text-[#3e2146] leading-relaxed">
                            <span class="mt-1 inline-flex w-1 h-1 rounded-full bg-[#6d2857] shrink-0"></span>
                            <span><b>Katalog & E-commerce Bunga Fisik:</b> Jelajahi koleksi bunga segar, blooming box, hingga hadiah spesial untuk dikirim langsung ke alamat tujuan.</span>
                        </li>
                        <li class="flex gap-2 text-xs sm:text-sm text-[#3e2146] leading-relaxed">
                            <span class="mt-1 inline-flex w-1 h-1 rounded-full bg-[#6d2857] shrink-0"></span>
                            <span><b>Buket Digital Interaktif (Builder):</b> Buat bunga digital secara instan dan gratis! Pilih jenis bunga, latar belakang, kartu ucapan, lalu bagikan tautan uniknya kepada penerima.</span>
                        </li>
                        <li class="flex gap-2 text-xs sm:text-sm text-[#3e2146] leading-relaxed">
                            <span class="mt-1 inline-flex w-1 h-1 rounded-full bg-[#6d2857] shrink-0"></span>
                            <span><b>Panduan Bunga (Flower Guides):</b> Pelajari simbolisme dan makna di balik setiap jenis bunga agar kamu tidak salah memilih momen.</span>
                        </li>
                        <li class="flex gap-2 text-xs sm:text-sm text-[#3e2146] leading-relaxed">
                            <span class="mt-1 inline-flex w-1 h-1 rounded-full bg-[#6d2857] shrink-0"></span>
                            <span><b>Inspirasi Kata-kata:</b> Temukan ide ucapan terbaik untuk berbagai momen—seperti ulang tahun, kelulusan, anniversary, permintaan maaf, atau sekadar memberi semangat.</span>
                        </li>
                    </ul>
                </article>

                <article class="w-full bg-white/70 backdrop-blur-sm rounded-2xl border-2 border-[#6d2857] p-5 sm:p-6 lg:p-7 shadow-[0_10px_30px_rgba(109,40,87,0.06)]">
                    <h3 class="text-sm sm:text-base font-bold text-[#6d2857] mb-3 tracking-wide">
                        Cara Kerja Platform
                    </h3>
                    <p class="text-xs sm:text-sm text-[#3e2146] leading-relaxed mb-2">
                        Giftify Bloom dirancang agar fleksibel kebutuhan:
                    </p>
                    <ol class="space-y-1.5 pl-5 list-decimal list-inside">
                        <li class="text-xs sm:text-sm text-[#3e2146] leading-relaxed">
                            Beli Bunga Fisik: Pilih buket favorit dari katalog e-commerce kami, sesuaikan kartu ucapan, isi detail pengiriman, dan kami akan mengirimkan dengan aman.
                        </li>
                        <li class="text-xs sm:text-sm text-[#3e2146] leading-relaxed">
                            Kirim Buket Digital: Jika terhalang jarak atau ingin memberikan kejutan instan, gunakan fitur Buket Builder untuk merangkai dan mengirimkan buket digital dalam hitungan detik.
                        </li>
                    </ol>
                </article>

                <article class="w-full bg-white/70 backdrop-blur-sm rounded-2xl border-2 border-[#6d2857] p-5 sm:p-6 lg:p-7 shadow-[0_10px_30px_rgba(109,40,87,0.06)]">
                    <h3 class="text-sm sm:text-base font-bold text-[#6d2857] mb-2 tracking-wide">
                        Apa Yang Membuat Giftify Bloom Berbeda?
                    </h3>
                    <p class="text-xs sm:text-sm text-[#3e2146] leading-relaxed">
                        Giftify Bloom bukan sekadar toko bunga online biasa. Kami memadukan kemudahan berbelanja bunga asli (e-commerce) dengan kreativitas buket digital secara panduan pesan yang mendalam. Kami memastikan setiap tangkai bunga dan tiap baris kata yang kamu pilih memiliki arti mendalam bagi si penerima.
                    </p>
                </article>

            </div>

        </div>
    </section>

    <section class="w-full py-12 sm:py-16 lg:py-20">
        <div class="w-full max-w-6xl mx-auto px-4 sm:px-6 lg:px-10">
            <div class="w-full grid grid-cols-1 lg:grid-cols-[0.9fr_1.1fr] gap-10 lg:gap-16 items-start">

                <div class="w-full flex flex-col">
                    <p class="text-xs sm:text-sm text-[#8b7a9a] font-semibold tracking-widest uppercase mb-3">
                        Contact us
                    </p>
                    <h2 class="text-xl sm:text-2xl lg:text-[30px] font-extrabold text-[#6d2857] leading-tight mb-4 tracking-tight">
                        Tanyakan Saja ! Kami<br>
                        Selalu Di Sini Untuk<br>
                        Membantu.
                    </h2>
                    <p class="text-xs sm:text-sm text-[#4c3a58] leading-relaxed mb-8 max-w-sm">
                        Punya pertanyaan atau butuh informasi? Pilih cara terbaik untuk menghubungi kami di bawah ini!
                    </p>

                    <div class="w-full flex flex-col gap-4 sm:gap-5">

                        <div class="w-full max-w-sm flex items-center gap-4 rounded-2xl border-2 border-dashed border-[#d4bb5e] bg-white/80 px-4 sm:px-5 py-3.5 shadow-[0_8px_24px_rgba(109,40,87,0.05)]">
                            <div class="w-10 h-10 sm:w-11 sm:h-11 rounded-2xl bg-[#fff8cc] border-2 border-[#d4bb5e] flex items-center justify-center shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 sm:w-[22px] sm:h-[22px] text-[#8a6f1f]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15A2.25 2.25 0 0 0 2.25 6.75m19.5 0V9c0 .72-.348 1.358-.879 1.764M2.25 6.75V9c0 .72.348 1.358.879 1.764m17.742-4.014L12 13.5 3.129 10.764"></path>
                                </svg>
                            </div>
                            <div class="flex flex-col min-w-0">
                                <span class="text-xs sm:text-sm font-bold text-[#6d2857]">Email Address</span>
                                <span class="text-[11px] sm:text-xs text-[#6b5a76] truncate">giftifybloom@gmail.com</span>
                            </div>
                        </div>

                        <div class="w-full max-w-sm flex items-center gap-4 rounded-2xl border-2 border-dashed border-[#d4bb5e] bg-white/80 px-4 sm:px-5 py-3.5 shadow-[0_8px_24px_rgba(109,40,87,0.05)]">
                            <div class="w-10 h-10 sm:w-11 sm:h-11 rounded-2xl bg-[#fff8cc] border-2 border-[#d4bb5e] flex items-center justify-center shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 sm:w-[22px] sm:h-[22px] text-[#8a6f1f]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.018 12.018 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25z"></path>
                                </svg>
                            </div>
                            <div class="flex flex-col min-w-0">
                                <span class="text-xs sm:text-sm font-bold text-[#6d2857]">Telepon langsung</span>
                                <span class="text-[11px] sm:text-xs text-[#6b5a76] truncate">+62 881-0366-24551</span>
                            </div>
                        </div>

                        <div class="w-full max-w-sm flex items-center gap-4 rounded-2xl border-2 border-dashed border-[#d4bb5e] bg-white/80 px-4 sm:px-5 py-3.5 shadow-[0_8px_24px_rgba(109,40,87,0.05)]">
                            <div class="w-10 h-10 sm:w-11 sm:h-11 rounded-2xl bg-[#fff8cc] border-2 border-[#d4bb5e] flex items-center justify-center shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 sm:w-[22px] sm:h-[22px] text-[#8a6f1f]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0z"></path>
                                </svg>
                            </div>
                            <div class="flex flex-col min-w-0">
                                <span class="text-xs sm:text-sm font-bold text-[#6d2857]">Kunjungi kantor kami</span>
                                <span class="text-[11px] sm:text-xs text-[#6b5a76] leading-snug">
                                    Timoho Raya No.23, Kacamatan Klojen,<br>Kota Malang, Jawa Timur 65137
                                </span>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="w-full flex flex-col gap-4 sm:gap-5">

                    <div class="w-full grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-5">

                        <div class="w-full flex flex-col gap-1.5">
                            <label for="contact-name" class="sr-only">Your Name</label>
                            <input
                                id="contact-name"
                                type="text"
                                placeholder="Your Name"
                                maxlength="80"
                                class="w-full px-5 sm:px-6 py-3.5 sm:py-4 rounded-full bg-white text-[#2d1532] text-xs sm:text-sm
                                       placeholder:text-[#a7a2b1] border border-[#ede3f4] focus:outline-none focus:ring-2
                                       focus:ring-[#8b5cf6]/50 focus:border-[#8b5cf6] shadow-[0_8px_24px_rgba(109,40,87,0.06)] transition-all"
                            />
                        </div>

                        <div class="w-full flex flex-col gap-1.5">
                            <label for="contact-email" class="sr-only">Your Email</label>
                            <input
                                id="contact-email"
                                type="email"
                                placeholder="Your email"
                                maxlength="120"
                                class="w-full px-5 sm:px-6 py-3.5 sm:py-4 rounded-full bg-white text-[#2d1532] text-xs sm:text-sm
                                       placeholder:text-[#a7a2b1] border border-[#ede3f4] focus:outline-none focus:ring-2
                                       focus:ring-[#8b5cf6]/50 focus:border-[#8b5cf6] shadow-[0_8px_24px_rgba(109,40,87,0.06)] transition-all"
                            />
                        </div>

                    </div>

                    <div class="w-full">
                        <label for="contact-message" class="sr-only">Your Message</label>
                        <textarea
                            id="contact-message"
                            rows="6"
                            maxlength="1000"
                            placeholder="Enter Your Message"
                            class="w-full px-5 sm:px-6 py-4 sm:py-5 rounded-3xl bg-white text-[#2d1532] text-xs sm:text-sm leading-relaxed
                                   placeholder:text-[#a7a2b1] border border-[#ede3f4] focus:outline-none focus:ring-2
                                   focus:ring-[#8b5cf6]/50 focus:border-[#8b5cf6] shadow-[0_8px_24px_rgba(109,40,87,0.06)] resize-y transition-all"
                        ></textarea>
                    </div>

                    <div class="w-full flex items-center justify-between gap-4 pt-2">
                        <button
                            id="btn-submit"
                            type="button"
                            class="inline-flex items-center justify-center px-8 sm:px-10 py-3.5 sm:py-[15px] rounded-full
                                   text-xs sm:text-sm font-semibold text-white tracking-wide
                                   bg-gradient-to-r from-[#8b5cf6] to-[#6d2857] hover:from-[#7c3aed] hover:to-[#5c1f49]
                                   shadow-[0_12px_28px_rgba(109,40,87,0.28)] hover:shadow-[0_16px_34px_rgba(109,40,87,0.35)]
                                   transition-all duration-200"
                        >
                            Submit Message
                        </button>

                        <div class="hidden sm:flex items-center justify-end gap-2" aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-[#c8b9f0]" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 .587l3.526 7.22 7.978 1.137-5.832 5.62 1.41 7.99L12 18.896l-7.082 3.658 1.41-7.99L.496 8.944l7.978-1.137L12 .587z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 text-[#8b5cf6]" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 .587l3.526 7.22 7.978 1.137-5.832 5.62 1.41 7.99L12 18.896l-7.082 3.658 1.41-7.99L.496 8.944l7.978-1.137L12 .587z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-[#6d2857]" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 1.5l2.39 5.08 5.61.79-4.14 3.95 1.04 5.68L12 14.77l-4.9 2.23 1.04-5.68L3.99 7.37l5.61-.79L12 1.5z"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-[#8b5cf6]" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 1.5l2.39 5.08 5.61.79-4.14 3.95 1.04 5.68L12 14.77l-4.9 2.23 1.04-5.68L3.99 7.37l5.61-.79L12 1.5z"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-[#c8b9f0]" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 1.5l2.39 5.08 5.61.79-4.14 3.95 1.04 5.68L12 14.77l-4.9 2.23 1.04-5.68L3.99 7.37l5.61-.79L12 1.5z"/>
                            </svg>
                        </div>
                    </div>

                    <p id="contact-status" class="text-xs sm:text-sm font-medium text-[#6d2857] min-h-[18px] mt-1" aria-live="polite"></p>

                </div>

            </div>
        </div>
    </section>

    <x-footer />

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const btnSubmit = document.getElementById('btn-submit');
            const nameInput = document.getElementById('contact-name');
            const emailInput = document.getElementById('contact-email');
            const msgInput = document.getElementById('contact-message');
            const statusEl = document.getElementById('contact-status');

            function validateEmail(value) {
                return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value.trim());
            }

            btnSubmit.addEventListener('click', function () {
                const name = nameInput.value.trim();
                const email = emailInput.value.trim();
                const msg = msgInput.value.trim();

                if (name === '' || email === '' || msg === '') {
                    statusEl.textContent = 'Please fill in Name, Email, and Your Message.';
                    statusEl.classList.remove('text-[#8b5cf6]');
                    statusEl.classList.add('text-[#b91c1c]');
                    return;
                }

                if (!validateEmail(email)) {
                    statusEl.textContent = 'Please enter a valid email address.';
                    statusEl.classList.remove('text-[#8b5cf6]');
                    statusEl.classList.add('text-[#b91c1c]');
                    return;
                }

                statusEl.textContent = 'Thank you, ' + name + '! Your message has been received 🌸';
                statusEl.classList.remove('text-[#b91c1c]');
                statusEl.classList.add('text-[#8b5cf6]');

                nameInput.value = '';
                emailInput.value = '';
                msgInput.value = '';
            });
        });
    </script>

</body>
</html>
