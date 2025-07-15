<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Webinar Excellent Team</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-poppins">
    <section class="md:min-h-[700px] bg-[url('../../public/img/general/bg-banner.webp')] bg-cover bg-no-repeat bg-top">
        <div class="absolute top-0 left-0">
            <img src="{{ asset('img/general/clips.webp') }}" class="w-1/2 md:w-full" alt="clips">
        </div>
        <div class="container mx-auto p-6 py-20">
            <div class="flex justify-center mb-5">
                <img src="{{ asset('img/general/logo.png') }}" class="w-32 xl:w-52" alt="logo">
            </div>
            <div class="flex flex-col items-center justify-center">
                <span class="text-white relative text-2xl lg:text-6xl mb-5 uppercase font-light tracking-[0.5em]">
                    Webinar
                </span>
                <h1
                    class="text-white relative font-prompt flex flex-col mb-5 capitalize items-center text-center font-bold">
                    <div class="text-4xl md:text-8xl lg:text-9xl lg:mb-2">
                        gak pakai AI
                    </div>
                    <span
                        class="inline-block font-poppins lg:my-5 lg:absolute lg:top-1/2 lg:left-1/2 lg:-translate-x-1/2 lg:-translate-y-1/2 bg-primary text-xl md:text-5xl lg:w-1/2 text-white font-bold uppercase px-4 py-1 rotate-[-3deg]">
                        sama dengan
                    </span>
                    <div class="text-3xl md:text-7xl lg:text-8xl lg:mt-2">
                        jemput bangkrut
                    </div>
                </h1>
                <p
                    class="text-white text-base text-center md:text-start md:text-xl lg:text-2xl mb-5 capitalize font-light">
                    strategi gila masuk market dalam sekejap dengan bantuan AI
                </p>
                <div class="flex flex-col md:flex-row items-center justify-center gap-5 mb-5">
                    <div
                        class="flex gap-2 cursor-pointer items-center py-1.5 px-4 rounded-full bg-white capitalize font-semibold transition-all duration-300 ease-in-out hover:bg-secondary hover:text-white hover:scale-105 hover:shadow-xl group">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none"
                            class="transition-all duration-300 ease-in-out group-hover:scale-125 group-hover:-rotate-6">
                            <path
                                d="M2 9C2 7.114 2 6.172 2.586 5.586C3.172 5 4.114 5 6 5H18C19.886 5 20.828 5 21.414 5.586C22 6.172 22 7.114 22 9C22 9.471 22 9.707 21.854 9.854C21.707 10 21.47 10 21 10H3C2.529 10 2.293 10 2.146 9.854C2 9.707 2 9.47 2 9ZM2 18C2 19.886 2 20.828 2.586 21.414C3.172 22 4.114 22 6 22H18C19.886 22 20.828 22 21.414 21.414C22 20.828 22 19.886 22 18V13C22 12.529 22 12.293 21.854 12.146C21.707 12 21.47 12 21 12H3C2.529 12 2.293 12 2.146 12.146C2 12.293 2 12.53 2 13V18Z"
                                fill="#81dade"" />
                            <path d="M7 3V6M17 3V6" stroke="#81dade" stroke-width="2" stroke-linecap="round" />
                        </svg>
                        kamis, 25 juli 2025
                    </div>
                    <div
                        class="flex gap-2 cursor-pointer items-center py-1.5 px-4 rounded-full bg-white capitalize font-semibold transition-all duration-300 ease-in-out hover:bg-secondary hover:text-white hover:scale-105 hover:shadow-xl group">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none"
                            class="transition-all duration-300 ease-in-out group-hover:scale-125 group-hover:-rotate-6">
                            <path
                                d="M12 2C17.523 2 22 6.477 22 12C22 17.523 17.523 22 12 22C6.477 22 2 17.523 2 12C2 6.477 6.477 2 12 2ZM12 6C11.7348 6 11.4804 6.10536 11.2929 6.29289C11.1054 6.48043 11 6.73478 11 7V12C11.0001 12.2652 11.1055 12.5195 11.293 12.707L14.293 15.707C14.4816 15.8892 14.7342 15.99 14.9964 15.9877C15.2586 15.9854 15.5094 15.8802 15.6948 15.6948C15.8802 15.5094 15.9854 15.2586 15.9877 14.9964C15.99 14.7342 15.8892 14.4816 15.707 14.293L13 11.586V7C13 6.73478 12.8946 6.48043 12.7071 6.29289C12.5196 6.10536 12.2652 6 12 6Z"
                                fill="#81dade" />
                        </svg>
                        sesi 1: 12.00-13.00 WIB
                    </div>
                    <div
                        class="flex gap-2 cursor-pointer items-center py-1.5 px-4 rounded-full bg-white capitalize font-semibold transition-all duration-300 ease-in-out hover:bg-secondary hover:text-white hover:scale-105 hover:shadow-xl group">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none"
                            class="transition-all duration-300 ease-in-out group-hover:scale-125 group-hover:-rotate-6">
                            <path
                                d="M12 2C17.523 2 22 6.477 22 12C22 17.523 17.523 22 12 22C6.477 22 2 17.523 2 12C2 6.477 6.477 2 12 2ZM12 6C11.7348 6 11.4804 6.10536 11.2929 6.29289C11.1054 6.48043 11 6.73478 11 7V12C11.0001 12.2652 11.1055 12.5195 11.293 12.707L14.293 15.707C14.4816 15.8892 14.7342 15.99 14.9964 15.9877C15.2586 15.9854 15.5094 15.8802 15.6948 15.6948C15.8802 15.5094 15.9854 15.2586 15.9877 14.9964C15.99 14.7342 15.8892 14.4816 15.707 14.293L13 11.586V7C13 6.73478 12.8946 6.48043 12.7071 6.29289C12.5196 6.10536 12.2652 6 12 6Z"
                                fill="#81dade" />
                        </svg>
                        sesi 2: 13.30-15.30 WIB
                    </div>
                </div>
                <div class="flex flex-col md:flex-row justify-between gap-4 w-full max-w-6xl my-5">
                    <div
                        class="border-b-white border-b-2 md:border-b-0 pb-5 md:pb-0 md:border-r-white w-full md:border-r-2 px-5 flex flex-col items-center justify-center text-center">
                        <div class="text-white text=base md:text-xl lg:text-2xl italic font-normal">
                            30% Teori
                        </div>
                        <div class="text-white text=base md:text-xl lg:text-2xl italic font-semibold">
                            70% Praktik
                        </div>
                    </div>
                    <div
                        class="border-b-white border-b-2 md:border-b-0 pb-5 md:pb-0 md:border-r-white w-full md:border-r-2 px-5 flex flex-col items-center justify-center text-center">
                        <div class="text-white text=base md:text-xl lg:text-2xl italic font-normal">
                            Kuota
                        </div>
                        <div class="text-white text=base md:text-xl lg:text-2xl italic font-semibold">
                            Terbatas!
                        </div>
                    </div>
                    <div class="px-5 w-full flex flex-col items-center justify-center text-center">
                        <div class="text-white text=base md:text-xl lg:text-2xl italic font-normal">
                            Live Via
                        </div>
                        <div class="text-white text=base md:text-xl lg:text-2xl italic font-semibold">
                            ZOOM
                        </div>
                    </div>
                </div>
                <div class="flex w-full justify-center text-center py-5">
                    <a href="#" target="_blank"
                        class="text-white capitalize font-semibold text-xl md:text-3xl py-5 px-10 bg-primary transition-all duration-300 ease-in-out rounded-lg shadow-lg hover:bg-secondary hover:scale-105 hover:shadow-2xl hover:-translate-y-1 hover:ring-4 hover:ring-orange-200">
                        Daftar Sekarang
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20">
        <div class="container mx-auto p-6">
            <div class="flex flex-col md:flex-row">
                <div class="flex-1">
                    <img src="{{ asset('img/general/profile.webp') }}" class="w-full h-full object-cover"
                        alt="profile">
                </div>
                <div class="flex-1 flex flex-col justify-center">
                    <div
                        class="text-secondary text-4xl md:text-5xl lg:text-7xl 2xl:text-8xl capitalize font-bold text-end leading-tight">
                        kenapa <br>
                        harus ikut <br>
                        <span class="relative inline-block">
                            <span class="font-bold bg-primary text-white leading-none px-2">
                                Webinar
                            </span>
                        </span> ini?
                    </div>
                    <div class="text-secondary capitalize text-end text-base md:text-lg mt-6">
                        Waktunya kamu pakai AI sebagai tim marketing <br class="hidden lg:block">
                        kamu sendiri! Kami akan tunjukkan langsung <br class="hidden lg:block">
                        caranya – <span class="font-semibold">tanpa harus jadi tech expert.</span>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container mx-auto p-6">
            <h2
                class="text-secondary text-4xl md:text-5xl lg:text-7xl 2xl:text-8xl capitalize font-bold text-center leading-tight mb-10">
                apa yang akan <br class="block 2xl:hidden"> kamu pelajari?
            </h2>

            <div class="relative flex justify-center items-center my-5">
                <!-- Background Orange Bar -->
                <div class="absolute left-0 right-0 top-1/2 -translate-y-1/2 h-50 bg-primary z-0"></div>
                <!-- Sesi Cards -->
                <div class="relative flex flex-col items-center md:flex-row gap-8 w-full justify-center z-10">
                    <!-- Sesi 1 -->
                    <div
                        class="bg-biru rounded-tl-[48px] rounded-tr-lg rounded-br-lg rounded-bl-lg shadow-lg p-8 w-full max-w-sm flex flex-col">
                        <div class="text-white text-3xl md:text-5xl font-extrabold mb-5">SESI 1</div>
                        <div class="flex items-center text-base font-extrabold mb-4 gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="27" viewBox="0 0 25 27"
                                fill="none">
                                <path
                                    d="M13.242 26.1424L13.2282 26.1449L13.1395 26.1886L13.1145 26.1936L13.097 26.1886L13.0082 26.1449C12.9949 26.1407 12.9849 26.1428 12.9782 26.1511L12.9732 26.1636L12.952 26.6986L12.9582 26.7236L12.9707 26.7399L13.1007 26.8324L13.1195 26.8374L13.1345 26.8324L13.2645 26.7399L13.2795 26.7199L13.2845 26.6986L13.2632 26.1649C13.2599 26.1515 13.2528 26.144 13.242 26.1424ZM13.5732 26.0011L13.557 26.0036L13.3257 26.1199L13.3132 26.1324L13.3095 26.1461L13.332 26.6836L13.3382 26.6986L13.3482 26.7074L13.5995 26.8236C13.6153 26.8278 13.6274 26.8245 13.6357 26.8136L13.6407 26.7961L13.5982 26.0286C13.594 26.0136 13.5857 26.0045 13.5732 26.0011ZM12.6795 26.0036C12.6739 26.0003 12.6674 25.9992 12.6611 26.0006C12.6548 26.002 12.6493 26.0058 12.6457 26.0111L12.6382 26.0286L12.5957 26.7961C12.5965 26.8111 12.6036 26.8211 12.617 26.8261L12.6357 26.8236L12.887 26.7074L12.8995 26.6974L12.9045 26.6836L12.9257 26.1461L12.922 26.1311L12.9095 26.1186L12.6795 26.0036Z"
                                    fill="#ffff" />
                                <path
                                    d="M12.5 0C19.4037 0 25 5.59625 25 12.5C25 19.4037 19.4037 25 12.5 25C5.59625 25 0 19.4037 0 12.5C0 5.59625 5.59625 0 12.5 0ZM12.5 5C12.1685 5 11.8505 5.1317 11.6161 5.36612C11.3817 5.60054 11.25 5.91848 11.25 6.25V12.5C11.2501 12.8315 11.3818 13.1494 11.6163 13.3837L15.3663 17.1337C15.602 17.3614 15.9178 17.4874 16.2455 17.4846C16.5732 17.4817 16.8868 17.3503 17.1185 17.1185C17.3503 16.8868 17.4817 16.5732 17.4846 16.2455C17.4874 15.9178 17.3614 15.602 17.1337 15.3663L13.75 11.9825V6.25C13.75 5.91848 13.6183 5.60054 13.3839 5.36612C13.1495 5.1317 12.8315 5 12.5 5Z"
                                    fill="#ffff" />
                            </svg>
                            <span class="text-white">10.00 – 12.00 WIB</span>
                        </div>
                        <ul class="list-disc text-white text-sm space-y-1">
                            <li>Realita keras dunia bisnis tanpa AI</li>
                            <li>Langkah cepat buat strategi Go-To-Market kilat</li>
                            <li>Praktik langsung riset pasar & persona pakai AI tools</li>
                        </ul>
                    </div>
                    <!-- Sesi 2 -->
                    <div
                        class="bg-biru rounded-tr-lg rounded-tl-[48px] rounded-br-lg rounded-bl-lg shadow-lg p-8 w-full max-w-sm flex flex-col">
                        <div class="text-white text-3xl md:text-5xl font-extrabold mb-5">SESI 2</div>
                        <div class="flex items-center text-base font-extrabold mb-4 gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="27"
                                viewBox="0 0 25 27" fill="none">
                                <path
                                    d="M13.242 26.1424L13.2282 26.1449L13.1395 26.1886L13.1145 26.1936L13.097 26.1886L13.0082 26.1449C12.9949 26.1407 12.9849 26.1428 12.9782 26.1511L12.9732 26.1636L12.952 26.6986L12.9582 26.7236L12.9707 26.7399L13.1007 26.8324L13.1195 26.8374L13.1345 26.8324L13.2645 26.7399L13.2795 26.7199L13.2845 26.6986L13.2632 26.1649C13.2599 26.1515 13.2528 26.144 13.242 26.1424ZM13.5732 26.0011L13.557 26.0036L13.3257 26.1199L13.3132 26.1324L13.3095 26.1461L13.332 26.6836L13.3382 26.6986L13.3482 26.7074L13.5995 26.8236C13.6153 26.8278 13.6274 26.8245 13.6357 26.8136L13.6407 26.7961L13.5982 26.0286C13.594 26.0136 13.5857 26.0045 13.5732 26.0011ZM12.6795 26.0036C12.6739 26.0003 12.6674 25.9992 12.6611 26.0006C12.6548 26.002 12.6493 26.0058 12.6457 26.0111L12.6382 26.0286L12.5957 26.7961C12.5965 26.8111 12.6036 26.8211 12.617 26.8261L12.6357 26.8236L12.887 26.7074L12.8995 26.6974L12.9045 26.6836L12.9257 26.1461L12.922 26.1311L12.9095 26.1186L12.6795 26.0036Z"
                                    fill="#ffff" />
                                <path
                                    d="M12.5 0C19.4037 0 25 5.59625 25 12.5C25 19.4037 19.4037 25 12.5 25C5.59625 25 0 19.4037 0 12.5C0 5.59625 5.59625 0 12.5 0ZM12.5 5C12.1685 5 11.8505 5.1317 11.6161 5.36612C11.3817 5.60054 11.25 5.91848 11.25 6.25V12.5C11.2501 12.8315 11.3818 13.1494 11.6163 13.3837L15.3663 17.1337C15.602 17.3614 15.9178 17.4874 16.2455 17.4846C16.5732 17.4817 16.8868 17.3503 17.1185 17.1185C17.3503 16.8868 17.4817 16.5732 17.4846 16.2455C17.4874 15.9178 17.3614 15.602 17.1337 15.3663L13.75 11.9825V6.25C13.75 5.91848 13.6183 5.60054 13.3839 5.36612C13.1495 5.1317 12.8315 5 12.5 5Z"
                                    fill="#ffff" />
                            </svg>
                            <span class="text-white">13.30 – 15.30 WIB</span>
                        </div>
                        <ul class="list-disc text-white text-sm space-y-1">
                            <li>Buat konten & campaign 30 hari dalam 2 jam</li>
                            <li>Strategi funnel & otomatisasi WA untuk closing lebih cepat</li>
                            <li>Demo AI yang bisa ganti kerja 3 orang dalam 1 klik</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container mx-auto p-6">
            <div class="flex flex-col item-center xl:flex-row">
                <div
                    class="flex w-full xl:w-1/2 2xl:w-[60%] flex-col gap-10 md:gap-0 item-center md:justify-between md:min-h-[50vh] lg:min-h-[60vh] relative">
                    <div class="flex max-w-xl container mx-auto">
                        <div
                            class="text-4xl md:text-5xl lg:text-7xl font-bold text-secondary capitalize leading-tight">
                            <span class="bg-primary text-white leading-none px-2">
                                Bonus
                            </span>
                            untuk <br>
                            peserta <br>
                            webinar
                        </div>
                    </div>

                    <div class="md:w-3/4 lg:min-h-60 relative z-10">
                        <img src="{{ asset('img/general/program.webp') }}"
                            class="w-full h-full rounded-tr-[50px] md:rounded-tr-[67px] object-cover" alt="program">
                    </div>
                    <div class="absolute hidden md:block top-3/5 -right-0 transform -translate-x-1/2 -translate-y-1/2">
                        <img src="{{ asset('img/general/clips2.webp') }}" alt="clips2">
                    </div>
                </div>
                <div
                    class="flex w-full xl:w-[50%] 2xl:w-[40%] flex-wrap gap-6 self-center justify-center xl:justify-start items-start mt-10 xl:mt-0">
                    <!-- Card 1 -->
                    <div
                        class="bg-biru rounded-tl-[32px] rounded-tr-lg rounded-br-lg rounded-bl-lg p-6 w-[260px] min-h-[200px] flex flex-col justify-between h-60 gap-4 shadow-2xl drop-shadow-2xl">
                        <svg xmlns="http://www.w3.org/2000/svg" width="76" height="76" viewBox="0 0 76 76"
                            fill="none">
                            <path
                                d="M66.5 7.125C66.5 6.49511 66.2498 5.89102 65.8044 5.44562C65.359 5.00022 64.7549 4.75 64.125 4.75C63.4951 4.75 62.891 5.00022 62.4456 5.44562C62.0002 5.89102 61.75 6.49511 61.75 7.125V9.5H59.375C58.7451 9.5 58.141 9.75022 57.6956 10.1956C57.2502 10.641 57 11.2451 57 11.875C57 12.5049 57.2502 13.109 57.6956 13.5544C58.141 13.9998 58.7451 14.25 59.375 14.25H61.75V16.625C61.75 17.2549 62.0002 17.859 62.4456 18.3044C62.891 18.7498 63.4951 19 64.125 19C64.7549 19 65.359 18.7498 65.8044 18.3044C66.2498 17.859 66.5 17.2549 66.5 16.625V14.25H68.875C69.5049 14.25 70.109 13.9998 70.5544 13.5544C70.9998 13.109 71.25 12.5049 71.25 11.875C71.25 11.2451 70.9998 10.641 70.5544 10.1956C70.109 9.75022 69.5049 9.5 68.875 9.5H66.5V7.125ZM20.957 9.1485C21.4225 6.90175 23.389 4.75 26.125 4.75C28.861 4.75 30.8275 6.90175 31.2978 9.1485C31.8848 12.0593 33.3115 14.7344 35.4018 16.8435C37.5102 18.9355 40.1854 20.3639 43.0968 20.9522C45.3435 21.4177 47.4953 23.3842 47.4953 26.1297C47.4953 28.8657 45.3435 30.8323 43.0968 31.2978C40.1854 31.8861 37.5102 33.3145 35.4018 35.4065C33.3115 37.5156 31.8848 40.1907 31.2978 43.1015C30.8323 45.3435 28.8658 47.5 26.1203 47.5C23.3843 47.5 21.4178 45.3483 20.9523 43.1015C20.3648 40.1885 18.9363 37.5115 16.8435 35.4018C14.7344 33.3115 12.0593 31.8848 9.14851 31.2978C6.90651 30.8323 4.75476 28.8705 4.75001 26.1345C4.74526 23.389 6.90176 21.4177 9.14851 20.9522C12.0593 20.3652 14.7344 18.9385 16.8435 16.8482C18.9355 14.7398 20.3639 12.0646 20.9523 9.15325M52.25 26.125C52.25 25.289 52.155 24.4973 51.965 23.75H54.625C57.7745 23.75 60.7949 25.0011 63.0219 27.2281C65.2489 29.4551 66.5 32.4756 66.5 35.625V54.625C66.5 57.7744 65.2489 60.7949 63.0219 63.0219C60.7949 65.2489 57.7745 66.5 54.625 66.5H35.625C32.4756 66.5 29.4551 65.2489 27.2281 63.0219C25.0011 60.7949 23.75 57.7744 23.75 54.625V51.965C25.3102 52.3475 26.9398 52.3475 28.5 51.965V54.625C28.5 56.5147 29.2507 58.3269 30.5869 59.6631C31.9231 60.9993 33.7353 61.75 35.625 61.75H54.625C56.5147 61.75 58.327 60.9993 59.6631 59.6631C60.9993 58.3269 61.75 56.5147 61.75 54.625V35.625C61.75 33.7353 60.9993 31.9231 59.6631 30.5869C58.327 29.2507 56.5147 28.5 54.625 28.5H51.965C52.155 27.7527 52.25 26.961 52.25 26.125ZM38 40.375C38 39.7451 38.2502 39.141 38.6956 38.6956C39.141 38.2502 39.7451 38 40.375 38H52.25C52.8799 38 53.484 38.2502 53.9294 38.6956C54.3748 39.141 54.625 39.7451 54.625 40.375C54.625 41.0049 54.3748 41.609 53.9294 42.0544C53.484 42.4998 52.8799 42.75 52.25 42.75H40.375C39.7451 42.75 39.141 42.4998 38.6956 42.0544C38.2502 41.609 38 41.0049 38 40.375ZM40.375 47.5C39.7451 47.5 39.141 47.7502 38.6956 48.1956C38.2502 48.641 38 49.2451 38 49.875C38 50.5049 38.2502 51.109 38.6956 51.5544C39.141 51.9998 39.7451 52.25 40.375 52.25H47.5C48.1299 52.25 48.734 51.9998 49.1794 51.5544C49.6248 51.109 49.875 50.5049 49.875 49.875C49.875 49.2451 49.6248 48.641 49.1794 48.1956C48.734 47.7502 48.1299 47.5 47.5 47.5H40.375ZM11.875 57C12.5049 57 13.109 57.2502 13.5544 57.6956C13.9998 58.141 14.25 58.7451 14.25 59.375V61.75H16.625C17.2549 61.75 17.859 62.0002 18.3044 62.4456C18.7498 62.891 19 63.4951 19 64.125C19 64.7549 18.7498 65.359 18.3044 65.8044C17.859 66.2498 17.2549 66.5 16.625 66.5H14.25V68.875C14.25 69.5049 13.9998 70.109 13.5544 70.5544C13.109 70.9998 12.5049 71.25 11.875 71.25C11.2451 71.25 10.641 70.9998 10.1956 70.5544C9.75023 70.109 9.50001 69.5049 9.50001 68.875V66.5H7.12501C6.49512 66.5 5.89103 66.2498 5.44563 65.8044C5.00023 65.359 4.75001 64.7549 4.75001 64.125C4.75001 63.4951 5.00023 62.891 5.44563 62.4456C5.89103 62.0002 6.49512 61.75 7.12501 61.75H9.50001V59.375C9.50001 58.7451 9.75023 58.141 10.1956 57.6956C10.641 57.2502 11.2451 57 11.875 57Z"
                                fill="white" />
                        </svg>
                        <div class="text-white text-base">
                            Template Prompt AI<br>
                            (Riset Market, Persona, Copywriting)
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div
                        class="bg-biru rounded-tl-[32px] xl:mt-10 rounded-tr-lg rounded-br-lg rounded-bl-lg p-6 w-[260px] min-h-[200px] flex flex-col justify-between h-60 gap-4 shadow-2xl drop-shadow-2xl">
                        <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" viewBox="0 0 70 70"
                            fill="none">
                            <path d="M35 17.0762V61.252" stroke="white" stroke-width="3.9375" />
                            <path
                                d="M14.584 26.2503L26.2507 29.167M14.584 37.917L26.2507 40.8337M55.4173 37.917L43.7506 40.8337M55.4173 16.042V27.7378C55.4173 28.5428 55.4173 28.9453 55.1402 29.1087C54.8632 29.272 54.4869 29.0882 53.7286 28.7295L50.1061 27.0087C49.8494 26.8862 49.7211 26.8278 49.584 26.8278C49.4469 26.8278 49.3186 26.8862 49.0619 27.0087L45.4394 28.7295C44.6811 29.0882 44.3019 29.2691 44.0277 29.1087C43.7507 28.9424 43.7506 28.5399 43.7506 27.7378V20.2712"
                                stroke="white" stroke-width="3.9375" stroke-linecap="round" />
                            <path
                                d="M48.1256 10.1744L47.4986 8.07437V8.07729L48.1256 10.1744ZM66.3548 30.7369C66.3548 30.1567 66.1243 29.6003 65.7141 29.1901C65.3039 28.7798 64.7475 28.5494 64.1673 28.5494C63.5872 28.5494 63.0308 28.7798 62.6205 29.1901C62.2103 29.6003 61.9798 30.1567 61.9798 30.7369H66.3548ZM61.9798 20.4177C61.9798 20.9979 62.2103 21.5543 62.6205 21.9645C63.0308 22.3747 63.5872 22.6052 64.1673 22.6052C64.7475 22.6052 65.3039 22.3747 65.7141 21.9645C66.1243 21.5543 66.3548 20.9979 66.3548 20.4177H61.9798ZM3.64648 30.8302C3.64648 31.4104 3.87695 31.9668 4.28719 32.377C4.69742 32.7872 5.25382 33.0177 5.83398 33.0177C6.41415 33.0177 6.97054 32.7872 7.38078 32.377C7.79102 31.9668 8.02148 31.4104 8.02148 30.8302H3.64648ZM8.02148 40.8344C8.02148 40.2542 7.79102 39.6978 7.38078 39.2876C6.97054 38.8773 6.41415 38.6469 5.83398 38.6469C5.25382 38.6469 4.69742 38.8773 4.28719 39.2876C3.87695 39.6978 3.64648 40.2542 3.64648 40.8344H8.02148ZM58.4973 6.61604C55.1752 6.73271 50.8381 7.07687 47.4986 8.07729L48.7527 12.2685C51.5236 11.4402 55.3852 11.1048 58.649 10.991L58.4973 6.61604ZM47.4986 8.07729C44.5965 8.94646 41.3327 10.641 38.7865 12.114L40.9798 15.9027C43.459 14.4677 46.3611 12.986 48.7527 12.2685L47.4986 8.07729ZM11.4807 11.1515C14.2982 11.3265 17.489 11.6619 19.8602 12.289L20.9744 8.05687C18.1744 7.31604 14.6277 6.96312 11.749 6.78521L11.4807 11.1515ZM19.8602 12.289C22.6661 13.0298 26.1194 14.6485 28.969 16.1535L31.0106 12.286C28.1086 10.7519 24.2877 8.93187 20.9744 8.05687L19.8602 12.289ZM40.7756 60.4635C43.6661 58.9235 47.2477 57.226 50.1411 56.459L49.0269 52.2298C45.6144 53.131 41.6594 55.0356 38.7194 56.6048L40.7756 60.4635ZM50.1411 56.459C52.4831 55.8435 55.6302 55.5052 58.4273 55.3302L58.1531 50.964C55.2948 51.1448 51.8006 51.4977 49.0269 52.2298L50.1411 56.459ZM31.2819 56.6048C28.3419 55.0356 24.3898 53.131 20.9744 52.2298L19.8602 56.459C22.7536 57.2231 26.3352 58.9235 29.2227 60.4635L31.2819 56.6048ZM20.9744 52.2298C18.2036 51.5006 14.7036 51.1448 11.8452 50.964L11.574 55.3302C14.3711 55.5052 17.5211 55.8435 19.8602 56.459L20.9744 52.2298ZM61.9798 47.0848C61.9798 49.0827 60.3231 50.8298 58.1531 50.964L58.4273 55.3302C62.7265 55.0619 66.3548 51.5648 66.3548 47.0848H61.9798ZM66.3548 14.389C66.3548 10.119 62.9569 6.46146 58.4973 6.61604L58.649 10.991C60.4427 10.9269 61.9798 12.3998 61.9798 14.386L66.3548 14.389ZM3.64648 47.0848C3.64648 51.5648 7.27482 55.0619 11.574 55.3302L11.8452 50.964C9.67523 50.8298 8.02148 49.0827 8.02148 47.0848H3.64648ZM38.7194 56.6048C37.5741 57.2126 36.2972 57.5274 35.0006 57.5274C33.7041 57.5274 32.4272 57.2126 31.2819 56.6048L29.2257 60.4635C31.004 61.4084 32.9869 61.9024 35.0006 61.9024C37.0144 61.9024 38.9973 61.4084 40.7756 60.4635L38.7194 56.6048ZM38.7865 12.114C37.6097 12.7936 36.2804 13.1654 34.9217 13.195C33.563 13.2246 32.2189 12.9109 31.0136 12.2831L28.969 16.1535C30.8297 17.128 32.9067 17.613 35.0066 17.5692C37.1066 17.5253 39.1614 16.954 40.9798 15.9027L38.7865 12.114ZM8.02148 14.5785C8.02148 12.5456 9.63148 11.0406 11.4807 11.1515L11.749 6.78521C7.20482 6.50812 3.64648 10.2094 3.64648 14.5785H8.02148ZM66.3548 47.0848V30.7369H61.9798V47.0848H66.3548ZM66.3548 20.4177V14.389L61.9798 14.386V20.4177H66.3548ZM8.02148 30.8302V14.5785H3.64648V30.836L8.02148 30.8302ZM8.02148 47.0848V40.8344H3.64648V47.0848H8.02148Z"
                                fill="white" />
                        </svg>
                        <div class="text-white text-base">
                            E-book “Blueprint Go-<br>To-Market dengan AI”
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div
                        class="bg-biru rounded-tl-[32px] rounded-tr-lg rounded-br-lg rounded-bl-lg p-6 w-[260px] min-h-[200px] flex flex-col justify-between h-60 gap-4 shadow-2xl drop-shadow-2xl">
                        <svg xmlns="http://www.w3.org/2000/svg" width="66" height="66" viewBox="0 0 66 66"
                            fill="none">
                            <path
                                d="M33 30.25C37.5563 30.25 41.25 26.5563 41.25 22C41.25 17.4437 37.5563 13.75 33 13.75C28.4437 13.75 24.75 17.4437 24.75 22C24.75 26.5563 28.4437 30.25 33 30.25Z"
                                stroke="white" stroke-width="5.5" stroke-linecap="round" />
                            <path
                                d="M41.9844 21.9994C42.3429 21.3688 42.8226 20.8154 43.3958 20.371C43.9691 19.9266 44.6246 19.6 45.3246 19.4099C46.0246 19.2199 46.7553 19.1702 47.4746 19.2637C48.1938 19.3571 48.8875 19.592 49.5157 19.9547C50.1439 20.3173 50.6941 20.8007 51.1347 21.3769C51.5753 21.9531 51.8975 22.6107 52.0829 23.312C52.2683 24.0132 52.3132 24.7442 52.2149 25.4629C52.1167 26.1815 51.8772 26.8736 51.5104 27.4994C50.7759 28.7523 49.5756 29.6638 48.1714 30.0351C46.7673 30.4063 45.2734 30.2071 44.0156 29.4809C42.7578 28.7547 41.8383 27.5605 41.4578 26.1588C41.0772 24.7572 41.2666 23.2619 41.9844 21.9994ZM14.4844 21.9994C14.8429 21.3688 15.3226 20.8154 15.8958 20.371C16.4691 19.9266 17.1246 19.6 17.8246 19.4099C18.5246 19.2199 19.2553 19.1702 19.9746 19.2637C20.6938 19.3571 21.3875 19.592 22.0157 19.9547C22.6439 20.3173 23.1941 20.8007 23.6347 21.3769C24.0753 21.9531 24.3975 22.6107 24.5829 23.312C24.7683 24.0132 24.8132 24.7442 24.7149 25.4629C24.6167 26.1815 24.3772 26.8736 24.0104 27.4994C23.2759 28.7523 22.0756 29.6638 20.6714 30.0351C19.2673 30.4063 17.7734 30.2071 16.5156 29.4809C15.2578 28.7547 14.3383 27.5605 13.9578 26.1588C13.5772 24.7572 13.7666 23.2619 14.4844 21.9994Z"
                                stroke="white" stroke-width="5.5" />
                            <path
                                d="M46.4247 49.5L43.7297 50.0418L44.1697 52.25H46.4247V49.5ZM40.6442 40.4553L38.9832 38.2635L35.8014 40.6808L39.1949 42.79L40.6442 40.4553ZM54.6362 46.75H46.4274L46.4247 52.25H54.6362V46.75ZM54.3887 47.4045C54.3594 47.3129 54.3547 47.2152 54.375 47.1213C54.3896 47.0233 54.4305 46.9311 54.4932 46.8545C54.5812 46.7445 54.6554 46.75 54.6362 46.75V52.25C57.7877 52.25 60.8869 49.28 59.5724 45.5675L54.3887 47.4045ZM46.7492 41.25C51.2647 41.25 53.3574 44.4978 54.3887 47.4045L59.5724 45.5675C58.2937 41.9622 54.8562 35.75 46.7492 35.75V41.25ZM42.3107 42.6442C43.3667 41.8412 44.7747 41.25 46.7492 41.25V35.75C43.5537 35.75 40.9824 36.7455 38.9832 38.2635L42.3107 42.6442ZM39.1949 42.79C42.0522 44.5665 43.2484 47.663 43.7269 50.0418L49.1169 48.9582C48.5202 45.98 46.8509 41.074 42.0989 38.1178L39.1949 42.79ZM25.3542 40.4525L26.8034 42.79L30.1969 40.6808L27.0152 38.2635L25.3542 40.4525ZM19.5737 49.5V52.25H21.8259L22.2714 50.0418L19.5737 49.5ZM19.2492 41.25C21.2237 41.25 22.6317 41.8412 23.6877 42.6442L27.0152 38.2635C25.0159 36.7455 22.4447 35.75 19.2492 35.75V41.25ZM11.6097 47.4045C12.6409 44.4978 14.7337 41.25 19.2492 41.25V35.75C11.1422 35.75 7.70469 41.9622 6.42594 45.5675L11.6097 47.4045ZM11.3622 46.75C11.3457 46.75 11.4172 46.7445 11.5079 46.8545C11.5697 46.9314 11.6096 47.0236 11.6234 47.1213C11.6437 47.2152 11.639 47.3129 11.6097 47.4045L6.42594 45.5675C5.11419 49.28 8.21344 52.25 11.3649 52.25L11.3622 46.75ZM19.5737 46.75H11.3622L11.3649 52.25H19.5737V46.75ZM22.2687 50.0418C22.7499 47.663 23.9462 44.5665 26.8062 42.79L23.8967 38.115C19.1447 41.0712 17.4754 45.98 16.8759 48.9555L22.2687 50.0418Z"
                                fill="white" />
                            <path
                                d="M32.9976 38.5C42.8206 38.5 45.6256 45.5153 46.4258 49.5248C46.7256 51.0125 45.5183 52.25 43.9976 52.25H21.9976C20.4796 52.25 19.2696 51.0125 19.5693 49.5248C20.3696 45.5125 23.1746 38.5 32.9976 38.5Z"
                                stroke="white" stroke-width="5.5" stroke-linecap="round" />
                        </svg>
                        <div class="text-white text-base">
                            Akses ke Grup<br>
                            Komunitas WA Pebisnis
                        </div>
                    </div>
                    <!-- Card 4 -->
                    <div
                        class="bg-biru rounded-tl-[32px] xl:mt-10 rounded-tr-lg rounded-br-lg rounded-bl-lg p-6 w-[260px] min-h-[200px] flex flex-col justify-between h-60 gap-4 shadow-2xl drop-shadow-2xl">
                        <svg xmlns="http://www.w3.org/2000/svg" width="76" height="76" viewBox="0 0 76 76"
                            fill="none">
                            <path
                                d="M9.5 15.5C9.5 12.1863 12.1863 9.5 15.5 9.5H60.5C63.8137 9.5 66.5 12.1863 66.5 15.5V23.3858H60.1667V15.8333H15.8333V44.3333H29.5545V50.6667H15.5C12.1863 50.6667 9.5 47.9804 9.5 44.6667V15.5Z"
                                fill="white" />
                            <path
                                d="M40.1659 32.5752C42.9336 35.5043 45.2927 37.9997 50.6666 37.9997H56.9999C58.6796 37.9997 60.2905 38.6669 61.4782 39.8547C62.666 41.0424 63.3332 42.6533 63.3332 44.333V47.4997C63.3332 48.6114 63.0406 49.7035 62.4847 50.6663C61.9288 51.629 61.1293 52.4285 60.1666 52.9843V69.6663H50.6666V44.333C42.3794 44.333 38.1392 39.7413 35.3399 36.7172C34.9604 36.3003 34.5729 35.8906 34.1777 35.4885L38.6554 31.0108C39.1811 31.5386 39.6846 32.0601 40.1659 32.5752ZM60.1666 30.083C60.1666 31.3428 59.6661 32.551 58.7753 33.4418C57.8845 34.3326 56.6763 34.833 55.4166 34.833C54.1568 34.833 52.9486 34.3326 52.0578 33.4418C51.167 32.551 50.6666 31.3428 50.6666 30.083C50.6666 28.8232 51.167 27.615 52.0578 26.7242C52.9486 25.8335 54.1568 25.333 55.4166 25.333C56.6763 25.333 57.8845 25.8335 58.7753 26.7242C59.6661 27.615 60.1666 28.8232 60.1666 30.083Z"
                                fill="white" />
                        </svg>
                        <div class="text-white text-base">
                            Penawaran Eksklusif<br>
                            Training 3 Hari “Market Hacking with AI”
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-10 lg:py-20">
        <div class="container mx-auto p-6">
            <div class="flex flex-col lg:flex-row">
                <div class="flex-1">
                    <div class="text-secondary text-4xl md:text-5xl lg:text-7xl 2xl:text-8xl capitalize font-bold">
                        untuk <span class="text-white bg-primary font-bold leading-snug px-2">siapa</span> webinar
                        ini?
                    </div>
                    <div class="mt-10">
                        <ul class="list-none text-secondary text-lg space-y-4">
                            <li class="flex items-start gap-2">
                                <img src="{{ asset('img/general/list.webp') }}" alt="list icon" class="w-5 h-5 mt-1">
                                <span>Pemilik bisnis & startup yang ingin tumbuh cepat</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <img src="{{ asset('img/general/list.webp') }}" alt="list icon" class="w-5 h-5 mt-1">
                                <span>Digital marketer & tim promosi</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <img src="{{ asset('img/general/list.webp') }}" alt="list icon" class="w-5 h-5 mt-1">
                                <span>Entrepreneur & freelancer yang ingin scale layanan</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <img src="{{ asset('img/general/list.webp') }}" alt="list icon" class="w-5 h-5 mt-1">
                                <span>Siapa pun yang ingin belajar AI secara praktis untuk ekspansi market</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="flex-1">
                    <div class="flex justify-center lg:justify-end">
                        <img src="{{ asset('img/general/profile2.webp') }}" alt="profile">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="lg:py-20">
        <div class="container mx-auto p-6">
            <div class="flex">
                <div class="text-secondary text-4xl md:text-5xl lg:text-7xl 2xl:text-8xl capitalize font-bold">
                    Testimoni <br>
                    <span class="text-white bg-primary font-bold leading-snug px-2">alumnni</span>
                </div>
            </div>
            <div class="flex flex-col md:flex-row justify-center gap-5 mt-20 relative">
                <div class="absolute top-1/2 left-0 xl:left-20 2xl:left-52 transform -translate-y-1/2">
                    <img src="{{ asset('img/general/clips3.webp') }}" alt="clips3">
                </div>
                <div
                    class="bg-biru rounded-lg relative z-10 shadow-lg p-8 w-full max-w-sm flex flex-col justify-center items-center">
                    <div class="mb-5 bg-white rounded-full w-32 h-32 flex items-center justify-center overflow-hidden">
                        <img src="{{ asset('img/general/nuh.webp') }}" class="w-full h-full object-cover"
                            alt="nuh">
                    </div>
                    <div class="text-white text-2xl md:text-4xl font-bold">
                        Nuh Akbar
                    </div>
                    <div class="text-white font-light text-xl mb-5">
                        Pemilik Brand Kontraktor
                    </div>
                    <div class="text-white italic font-light text-justify text-sm leading-normal">
                        Sebelumnya saya hanya tahu ChatGPT sebatas iseng. Tapi setelah ikut sesi ini, langsung bisa
                        bikin kalender konten dan ngerjain 3 kampanye promosi dalam sehari.
                    </div>
                </div>

                <div
                    class="bg-biru rounded-lg relative z-10 shadow-lg p-8 w-full max-w-sm flex flex-col justify-center items-center">
                    <div class="mb-5 bg-white rounded-full w-32 h-32 flex items-center justify-center overflow-hidden">
                        <img src="{{ asset('img/general/amna.webp') }}" class="w-full h-full object-cover"
                            alt="nuh">
                    </div>
                    <div class="text-white text-2xl md:text-4xl font-bold">
                        Amna Hamdalah
                    </div>
                    <div class="text-white font-light text-xl mb-5">
                        Murid Rumah Qur’an Prapanca
                    </div>
                    <div class="text-white italic font-light text-justify text-sm leading-normal">
                        Gak pakai teori panjang. Langsung praktik. Hasilnya? Dalam 1 minggu saya sudah pakai semua
                        tools-nya.
                    </div>
                </div>
                <div class="absolute top-1/2 right-0 xl:right-20 2xl:right-52 transform -translate-y-1/2">
                    <img src="{{ asset('img/general/clips3.webp') }}" alt="clips3">
                </div>
            </div>
        </div>
    </section>

    <section class="py-10">
        <div class="container mx-auto p-6">
            <div class="max-w-5xl mx-auto">
                <div class="flex flex-col justify-center text-center gap-5">
                    <div
                        class="text-secondary text-4xl md:text-5xl lg:text-7xl 2xl:text-8xl capitalize font-bold leading-normal">
                        kuota sangat <br>
                        <span class="text-white bg-primary font-bold leading-snug px-2">terbatas!</span>
                    </div>

                    <div class="text-secondary text-base md:text-lg mt-6 font-semibold text-center">
                        Kami batasi peserta agar sesi interaktif tetap efektif dan kamu bisa benar-benar praktik. Jangan
                        tunggu sampai bisnis kamu ketinggalan. Kalau AI bisa bantu kamu capai 10x lebih cepat, kenapa
                        masih
                        manual?
                    </div>
                </div>
                <div class="flex flex-col items-center mt-8">
                    <div class="w-full max-w-3xl">
                        <div
                            class="bg-biru flex flex-col md:flex-row justify-between items-center py-6 px-4 md:px-12 gap-6 md:gap-0">
                            <div
                                class="flex-1 flex flex-col items-center text-center border-b md:border-b-0 md:border-r border-white pb-4 md:pb-0 md:pr-8">
                                <span class="text-white text-sm md:text-xl italic">30% Teori</span>
                                <span class="text-white text-lg md:text-2xl font-bold mt-1">70% Praktek</span>
                            </div>
                            <div
                                class="flex-1 flex flex-col items-center text-center border-b md:border-b-0 md:border-r border-white pb-4 md:pb-0 md:px-8">
                                <span class="text-white text-sm md:text-xl italic">Kuota</span>
                                <span class="text-white text-lg md:text-2xl font-bold italic mt-1">Terbatas!</span>
                            </div>
                            <div class="flex-1 flex flex-col items-center text-center md:pl-8">
                                <span class="text-white text-sm md:text-xl italic">Live Via</span>
                                <span class="text-white text-lg md:text-2xl font-bold italic mt-1">ZOOM</span>
                            </div>
                        </div>
                    </div>
                    <a href="#" target="_blank"
                        class="mt-8 bg-primary cursror-pointer text-center hover:bg-orange-600 text-white font-semibold py-3 px-10 text-2xl shadow-md transition">
                        Daftar Sekarang
                    </a>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-secondary">
        <div class="w-full max-w-screen-xl p-4 py-6 mx-auto lg:py-8">
            <div class="flex flex-col justify-center md:flex-row">
                <div class="flex-col flex-1 mb-6">
                    <a href="/" class="flex items-center justify-center">
                        <img src="{{ asset('img/general/logo.png') }}" class="h-20 me-3" alt="FlowBite Logo" />
                    </a>
                    <div class="flex items-center justify-center gap-8 mt-6 sm:gap-6">
                        <a href="https://www.instagram.com/inovasika.digital/" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="54" height="54"
                                viewBox="0 0 54 54" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M1 27.3659C1 41.5231 12.4767 52.9998 26.6339 52.9998C40.7912 52.9998 52.2679 41.5231 52.2679 27.3659C52.2679 13.2086 40.7912 1.73193 26.6339 1.73193C12.4767 1.73193 1 13.2086 1 27.3659ZM26.6339 0.731934C11.9244 0.731934 0 12.6564 0 27.3659C0 42.0754 11.9244 53.9998 26.6339 53.9998C41.3434 53.9998 53.2679 42.0754 53.2679 27.3659C53.2679 12.6564 41.3434 0.731934 26.6339 0.731934Z"
                                    fill="white" />
                                <path
                                    d="M23.074 27.6318C23.074 25.5184 24.7868 23.8047 26.9003 23.8047C29.0137 23.8047 30.7275 25.5184 30.7275 27.6318C30.7275 29.7451 29.0137 31.4588 26.9003 31.4588C24.7868 31.4588 23.074 29.7451 23.074 27.6318ZM21.0051 27.6318C21.0051 30.8875 23.6444 33.5267 26.9003 33.5267C30.1562 33.5267 32.7954 30.8875 32.7954 27.6318C32.7954 24.376 30.1562 21.7368 26.9003 21.7368C23.6444 21.7368 21.0051 24.376 21.0051 27.6318ZM31.6511 21.5031C31.6508 22.2639 32.2674 22.881 33.0283 22.8813C33.7891 22.8816 34.4062 22.265 34.4065 21.5042C34.4068 20.7433 33.7902 20.1263 33.0294 20.126C32.2689 20.1264 31.6518 20.7426 31.6511 21.5031ZM22.2621 36.9763C21.1428 36.9254 20.5344 36.7389 20.1301 36.5814C19.5941 36.3728 19.2117 36.1242 18.8096 35.7227C18.4075 35.3212 18.1586 34.9391 17.9508 34.4031C17.7932 33.999 17.6067 33.3905 17.5559 32.2712C17.5002 31.0611 17.4891 30.6976 17.4891 27.6318C17.4891 24.5661 17.5011 24.2036 17.5559 22.9925C17.6068 21.8732 17.7947 21.2659 17.9508 20.8606C18.1595 20.3246 18.408 19.9421 18.8096 19.5401C19.2111 19.138 19.5932 18.8891 20.1301 18.6813C20.5342 18.5237 21.1428 18.3373 22.2621 18.2864C23.4723 18.2308 23.8358 18.2197 26.9003 18.2197C29.9648 18.2197 30.3287 18.2317 31.5398 18.2864C32.6591 18.3374 33.2665 18.5252 33.6718 18.6813C34.2078 18.8891 34.5903 19.1385 34.9924 19.5401C35.3945 19.9416 35.6425 20.3246 35.8511 20.8606C36.0087 21.2647 36.1952 21.8732 36.2461 22.9925C36.3017 24.2036 36.3128 24.5661 36.3128 27.6318C36.3128 30.6976 36.3017 31.0601 36.2461 32.2712C36.1951 33.3905 36.0077 33.9988 35.8511 34.4031C35.6425 34.9391 35.3939 35.3215 34.9924 35.7227C34.5908 36.1239 34.2078 36.3728 33.6718 36.5814C33.2677 36.739 32.6591 36.9255 31.5398 36.9763C30.3297 37.032 29.9662 37.0431 26.9003 37.0431C23.8344 37.0431 23.4719 37.032 22.2621 36.9763ZM22.167 16.2211C20.9449 16.2768 20.1097 16.4705 19.3804 16.7543C18.625 17.0474 17.9856 17.4406 17.3466 18.0785C16.7077 18.7164 16.3155 19.3568 16.0224 20.1121C15.7386 20.8419 15.5448 21.6766 15.4892 22.8987C15.4326 24.1228 15.4196 24.5141 15.4196 27.6318C15.4196 30.7494 15.4326 31.1407 15.4892 32.3648C15.5448 33.587 15.7386 34.4216 16.0224 35.1514C16.3155 35.9062 16.7078 36.5473 17.3466 37.185C17.9855 37.8227 18.625 38.2153 19.3804 38.5092C20.1111 38.793 20.9449 38.9867 22.167 39.0424C23.3918 39.0981 23.7825 39.1119 26.9003 39.1119C30.0181 39.1119 30.4094 39.099 31.6335 39.0424C32.8558 38.9867 33.6904 38.793 34.4202 38.5092C35.1751 38.2153 35.8149 37.8229 36.4539 37.185C37.0929 36.5471 37.4842 35.9062 37.7781 35.1514C38.0619 34.4216 38.2566 33.5869 38.3114 32.3648C38.367 31.1398 38.38 30.7494 38.38 27.6318C38.38 24.5141 38.367 24.1228 38.3114 22.8987C38.2557 21.6765 38.0619 20.8415 37.7781 20.1121C37.4842 19.3573 37.0919 18.7174 36.4539 18.0785C35.816 17.4396 35.1751 17.0474 34.4211 16.7543C33.6904 16.4705 32.8557 16.2758 31.6344 16.2211C30.4103 16.1654 30.019 16.1516 26.9012 16.1516C23.7834 16.1516 23.3918 16.1645 22.167 16.2211Z"
                                    fill="white" />
                            </svg>
                        </a>
                        <a href="https://www.facebook.com/profile.php?id=100075086829896" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="54" height="54"
                                viewBox="0 0 54 54" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M1.28571 27.3659C1.28571 41.5231 12.7624 52.9998 26.9196 52.9998C41.0769 52.9998 52.5536 41.5231 52.5536 27.3659C52.5536 13.2086 41.0769 1.73193 26.9196 1.73193C12.7624 1.73193 1.28571 13.2086 1.28571 27.3659ZM26.9196 0.731934C12.2101 0.731934 0.285706 12.6564 0.285706 27.3659C0.285706 42.0754 12.2101 53.9998 26.9196 53.9998C41.6291 53.9998 53.5536 42.0754 53.5536 27.3659C53.5536 12.6564 41.6291 0.731934 26.9196 0.731934Z"
                                    fill="white" />
                                <path
                                    d="M28.414 20.4369H32.0709V16.2775H28.414C25.5893 16.2775 23.2953 18.4558 23.2953 21.1268V23.2065H20.3718V27.3659H23.2953V38.4542H27.6857V27.3659H31.3427L32.0761 23.2065H27.6857V21.1268C27.6805 20.7523 28.0186 20.4369 28.414 20.4369Z"
                                    fill="white" />
                            </svg>
                        </a>
                        <a href="https://www.linkedin.com/in/inovasika/" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="54" height="54"
                                viewBox="0 0 54 54" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M1 26.6339C1 40.7912 12.4767 52.2679 26.6339 52.2679C40.7912 52.2679 52.2679 40.7912 52.2679 26.6339C52.2679 12.4767 40.7912 1 26.6339 1C12.4767 1 1 12.4767 1 26.6339ZM26.6339 0C11.9244 0 0 11.9244 0 26.6339C0 41.3434 11.9244 53.2679 26.6339 53.2679C41.3434 53.2679 53.2679 41.3434 53.2679 26.6339C53.2679 11.9244 41.3434 0 26.6339 0Z"
                                    fill="white" />
                                <path
                                    d="M36.3732 16.0002H17.6268C17.416 15.9972 17.2068 16.0356 17.011 16.1131C16.8152 16.1906 16.6367 16.3056 16.4856 16.4517C16.3345 16.5978 16.2139 16.772 16.1306 16.9644C16.0473 17.1568 16.0029 17.3637 16 17.5731V36.4269C16.0029 36.6363 16.0473 36.8432 16.1306 37.0356C16.2139 37.228 16.3345 37.4022 16.4856 37.5483C16.6367 37.6944 16.8152 37.8094 17.011 37.8869C17.2068 37.9644 17.416 38.0028 17.6268 37.9998H36.3732C36.584 38.0028 36.7932 37.9644 36.989 37.8869C37.1848 37.8094 37.3633 37.6944 37.5144 37.5483C37.6655 37.4022 37.7861 37.228 37.8694 37.0356C37.9527 36.8432 37.9971 36.6363 38 36.4269V17.5731C37.9971 17.3637 37.9527 17.1568 37.8694 16.9644C37.7861 16.772 37.6655 16.5978 37.5144 16.4517C37.3633 16.3056 37.1848 16.1906 36.989 16.1131C36.7932 16.0356 36.584 15.9972 36.3732 16.0002ZM22.673 34.4139H19.3531V24.514H22.673V34.4139ZM21.0131 23.1281C20.5552 23.1281 20.1161 22.9473 19.7924 22.6255C19.4686 22.3036 19.2867 21.8672 19.2867 21.4121C19.2867 20.957 19.4686 20.5205 19.7924 20.1987C20.1161 19.8769 20.5552 19.6961 21.0131 19.6961C21.2562 19.6687 21.5024 19.6926 21.7356 19.7664C21.9687 19.8401 22.1836 19.962 22.3661 20.124C22.5486 20.286 22.6946 20.4844 22.7946 20.7064C22.8946 20.9284 22.9463 21.1689 22.9463 21.4121C22.9463 21.6553 22.8946 21.8958 22.7946 22.1177C22.6946 22.3397 22.5486 22.5382 22.3661 22.7002C22.1836 22.8622 21.9687 22.9841 21.7356 23.0578C21.5024 23.1315 21.2562 23.1555 21.0131 23.1281ZM34.6469 34.4139H31.327V29.101C31.327 27.77 30.8511 26.901 29.6449 26.901C29.2716 26.9037 28.9081 27.0201 28.6033 27.2345C28.2986 27.4489 28.0673 27.7509 27.9406 28.1C27.854 28.3585 27.8165 28.6308 27.83 28.903V34.4029H24.5101V24.503H27.83V25.9C28.1316 25.3798 28.5702 24.9513 29.0987 24.6606C29.6271 24.3698 30.2254 24.2279 30.829 24.25C33.0423 24.25 34.6469 25.669 34.6469 28.716V34.4139Z"
                                    fill="white" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="flex-1">
                    <div>
                        <ul class="font-medium text-white">
                            <li class="mb-4 text-sm md:text-base">
                                <div class="flex items-center self-center gap-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26"
                                        viewBox="0 0 26 26" fill="none">
                                        <path
                                            d="M4.33333 4.3335H21.6667C22.8583 4.3335 23.8333 5.3085 23.8333 6.50016V19.5002C23.8333 20.6918 22.8583 21.6668 21.6667 21.6668H4.33333C3.14167 21.6668 2.16667 20.6918 2.16667 19.5002V6.50016C2.16667 5.3085 3.14167 4.3335 4.33333 4.3335Z"
                                            stroke="white" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M23.8333 6.5L13 14.0833L2.16667 6.5" stroke="white" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg> inovasikadigital@gmail.com
                                </div>
                            </li>
                            <li class="mb-4 text-sm md:text-base">
                                <div class="flex items-center self-center gap-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <path
                                            d="M22 16.9201V19.9201C22.0011 20.1986 21.9441 20.4743 21.8325 20.7294C21.7209 20.9846 21.5573 21.2137 21.3521 21.402C21.1469 21.5902 20.9046 21.7336 20.6407 21.8228C20.3769 21.912 20.0974 21.9452 19.82 21.9201C16.7428 21.5857 13.787 20.5342 11.19 18.8501C8.77383 17.3148 6.72534 15.2663 5.19 12.8501C3.49998 10.2413 2.44824 7.27109 2.12 4.1801C2.09501 3.90356 2.12787 3.62486 2.2165 3.36172C2.30513 3.09859 2.44757 2.85679 2.63477 2.65172C2.82196 2.44665 3.0498 2.28281 3.30379 2.17062C3.55778 2.05843 3.83234 2.00036 4.11 2.0001H7.11C7.59531 1.99532 8.06579 2.16718 8.43376 2.48363C8.80173 2.80008 9.04208 3.23954 9.11 3.7201C9.23662 4.68016 9.47145 5.62282 9.81 6.5301C9.94454 6.88802 9.97366 7.27701 9.89391 7.65098C9.81415 8.02494 9.62886 8.36821 9.36 8.6401L8.09 9.9101C9.51356 12.4136 11.5865 14.4865 14.09 15.9101L15.36 14.6401C15.6319 14.3712 15.9752 14.1859 16.3491 14.1062C16.7231 14.0264 17.1121 14.0556 17.47 14.1901C18.3773 14.5286 19.3199 14.7635 20.28 14.8901C20.7658 14.9586 21.2094 15.2033 21.5265 15.5776C21.8437 15.9519 22.0122 16.4297 22 16.9201Z"
                                            stroke="white" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg> 0852-1329-8462
                                </div>
                            </li>
                            <li class="text-sm md:text-base">
                                <div class="flex items-center self-center gap-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <path
                                            d="M21 10C21 17 12 23 12 23C12 23 3 17 3 10C3 7.61305 3.94821 5.32387 5.63604 3.63604C7.32387 1.94821 9.61305 1 12 1C14.3869 1 16.6761 1.94821 18.364 3.63604C20.0518 5.32387 21 7.61305 21 10Z"
                                            stroke="white" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M12 13C13.6569 13 15 11.6569 15 10C15 8.34315 13.6569 7 12 7C10.3431 7 9 8.34315 9 10C9 11.6569 10.3431 13 12 13Z"
                                            stroke="white" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                    Perum Palem Ganda Asri, <br> Jl. Tupai Raya PGA No.1, Meruyung, <br
                                        class="hidden sm:block"> Kec. Limo,
                                    Kota
                                    Depok, Jawa Barat 16512
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>

</html>
