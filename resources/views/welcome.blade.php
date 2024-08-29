@extends('layouts.app')

@section('content')
<main>
    <section id='home'>
        <div class="dark:bg-color white">
            <div class="dark:bg-transparent">
                <div class="mx-auto flex flex-col items-center py-12 sm:py-24">
                    <div class="w-11/12 sm:w-2/3 lg:flex justify-center items-center flex-col mb-5 sm:mb-10">
                        <h1
                            class="text-3xl sm:text-4xl md:text-5xl lg:text-5xl xl:text-6xl text-center text-gray-800 dark:text-black font-black leading-tight sm:leading-snug md:leading-normal">
                            Direct <span class="text-color-blue dark:text-color-blue">Hiring App</span> for Founders, Team Leaders, and Hiring Managers
                        </h1>
                        <p class="mt-5 sm:mt-10 lg:w-10/12 text-gray-600 dark:text-black font-normal text-center text-base sm:text-lg md:text-xl">
                            Jobseva simplifies the hiring process. Directly chatting with verified candidates matched by the AI algorithm ensures a simple, quick, and effective hiring experience.
                        </p>
                    </div>
                    <div class="flex w-11/12 md:w-8/12 xl:w-6/12">
                        <div class="flex rounded-md w-full">
                            <input type="text" name="q"
                                class="w-full p-3 rounded-md rounded-r-none  border-2 border-gray-300 placeholder-current dark:bg-gray-500  dark:text-gray-300 dark:border-none "
                                placeholder="keyword" />
                            <button
                                class="inline-flex items-center gap-2 bg-color-blue text-white text-lg font-semibold py-3 px-6 rounded-r-md">
                                <span>Find</span>
                                <svg class="text-gray-200 h-5 w-5 p-0 fill-current" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px"
                                    viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;"
                                    xml:space="preserve">
                                    <path
                                        d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section>
        <div class="flex flex-wrap justify-around space-y-8 sm:space-y-0 text-center">
            <div class="w-full sm:w-1/2 md:w-1/4 px-4">
                <div class="flex justify-center mb-4">
                    <img src="/img/resume.png" alt="" class="h-16 w-16">
                </div>
                <p class="text-2xl font-bold">190K+</p>
                <span class="text-gray-700">Verified Recruiters</span>
            </div>
            <div class="w-full sm:w-1/2 md:w-1/4 px-4">
                <div class="flex justify-center mb-4">
                    <img src="/img/joboffer.png" alt="" class="h-16 w-16">
                </div>
                <p class="text-2xl font-bold">500K+</p>
                <span class="text-gray-700">Jobs Posted</span>
            </div>
            <div class="w-full sm:w-1/2 md:w-1/4 px-4">
                <div class="flex justify-center mb-4">
                    <img src="/img/chat1.png" alt="" class="h-16 w-16">
                </div>
                <p class="text-2xl font-bold">25M+</p>
                <span class="text-gray-700">Chat Conversations</span>
            </div>
            <div class="w-full sm:w-1/2 md:w-1/4 px-4">
                <div class="flex justify-center mb-4">
                    <img src="/img/interview.png" alt="" class="h-16 w-16">
                </div>
                <p class="text-2xl font-bold">3.8M+</p>
                <span class="text-gray-700">Job Seekers</span>
            </div>
        </div>
    </section>

    <section class="job-seeker-section py-12">
        <div class="job-seeker">
            <div class="container mx-auto px-4">
                <div class="flex flex-col md:flex-row items-center">
                    <!-- Left Section - Image -->
                    <div class="w-full md:w-1/2 px-4 mb-8 md:mb-0 lg:ml-5 flex justify-center">
                        <div class="chat-now-img-hero">
                            <img src="/img/about12.png" loading="lazy" alt="banner image" class="max-w-full h-auto rounded-md shadow-md" />
                        </div>
                    </div>
                    <!-- Right Section - App Download -->
                    <div class="w-full md:w-1/2 px-4">
                        <div class="content">
                            <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">Download Our App</h2>
                            <p class="mt-4 text-gray-600 text-lg sm:text-justify">
                                Find your dream job with ease using our app. Whether you're looking for a new opportunity
                                or want to explore different career options, our app is designed to help you discover
                                the best job listings available. Stay updated with real-time notifications, apply with
                                just a tap, and manage your applications on the go. Download now and take the next step in your career!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

  

    <section class="text-gray-700 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap -m-4 text-center">
                <!-- IT Engineering -->
                <div class="p-4 md:w-1/4 sm:w-full w-full">
                    <div class="border-2 border-gray-600 px-4 py-6 rounded-lg transform transition duration-500 hover:scale-110 flex flex-col items-center justify-center">
                        <img src="https://cdn-icons-png.flaticon.com/128/2562/2562288.png" alt="" class="w-12 h-12 mb-3">
                        <h3 class="title-font font-medium text-3xl text-gray-900 sm:text-2xl">IT Engineering</h3>
                        <p class="leading-relaxed sm:text-base text-sm sm:text-justify">685K+ Candidates</p>
                    </div>
                </div>
                <!-- Operations -->
                <div class="p-4 md:w-1/4 sm:w-full  lg:w-fullw-full">
                    <div class="border-2 border-gray-600 px-4 py-6 rounded-lg transform transition duration-500 hover:scale-110 flex flex-col items-center justify-center">
                        <img src="https://cdn-icons-png.flaticon.com/128/1570/1570102.png" alt="" class="w-12 h-12 mb-3">
                        <h3 class="title-font font-medium text-3xl text-gray-900 sm:text-2xl">Operations</h3>
                        <p class="leading-relaxed sm:text-base text-sm sm:text-justify">490K+ Candidates</p>
                    </div>
                </div>
                <!-- BPO & KPO -->
                <div class="p-4 md:w-1/4 sm:w-full  w-full">
                    <div class="border-2 border-gray-600 px-4 py-6 rounded-lg transform transition duration-500 hover:scale-110 flex flex-col items-center justify-center">
                        <img src="https://cdn-icons-png.flaticon.com/128/3734/3734873.png" alt="" class="w-12 h-12 mb-3">
                        <h3 class="title-font font-medium text-3xl text-gray-900 sm:text-2xl">BPO & KPO</h3>
                        <p class="leading-relaxed sm:text-base text-sm sm:text-justify">360K+ Candidates</p>
                    </div>
                </div>
                <!-- Sales & BD -->
                <div class="p-4 md:w-1/4 sm:w-full  w-full">
                    <div class="border-2 border-gray-600 px-4 py-6 rounded-lg transform transition duration-500 hover:scale-110 flex flex-col items-center justify-center">
                        <img src="https://cdn-icons-png.flaticon.com/128/3211/3211590.png" alt="" class="w-12 h-12 mb-3">
                        <h3 class="title-font font-medium text-3xl text-gray-900 sm:text-2xl">Sales & BD</h3>
                        <p class="leading-relaxed sm:text-base text-sm sm:text-justify">350K+ Candidates</p>
                    </div>
                </div>
                <!-- Finance -->
                <div class="p-4 md:w-1/4 sm:w-full  w-full">
                    <div class="border-2 border-gray-600 px-4 py-6 rounded-lg transform transition duration-500 hover:scale-110 flex flex-col items-center justify-center">
                        <img src="https://cdn-icons-png.flaticon.com/128/1077/1077976.png" alt="" class="w-12 h-12 mb-3">
                        <h3 class="title-font font-medium text-3xl text-gray-900 sm:text-2xl">Finance</h3>
                        <p class="leading-relaxed sm:text-base text-sm sm:text-justify">320K+ Candidates</p>
                    </div>
                </div>
                <!-- Marketing -->
                <div class="p-4 md:w-1/4 sm:w-full  w-full">
                    <div class="border-2 border-gray-600 px-4 py-6 rounded-lg transform transition duration-500 hover:scale-110 flex flex-col items-center justify-center">
                        <img src="https://cdn-icons-png.flaticon.com/128/945/945467.png" alt="" class="w-12 h-12 mb-3">
                        <h3 class="title-font font-medium text-3xl text-gray-900 sm:text-2xl">Marketing</h3>
                        <p class="leading-relaxed sm:text-base text-sm sm:text-justify">255K+ Candidates</p>
                    </div>
                </div>
                <!-- Real Estate -->
                <div class="p-4 md:w-1/4 sm:w-full w-full">
                    <div class="border-2 border-gray-600 px-4 py-6 rounded-lg transform transition duration-500 hover:scale-110 flex flex-col items-center justify-center">
                        <img src="https://cdn-icons-png.flaticon.com/128/2238/2238332.png" alt="" class="w-12 h-12 mb-3">
                        <h3 class="title-font font-medium text-3xl text-gray-900 sm:text-2xl">Real Estate</h3>
                        <p class="leading-relaxed sm:text-base text-sm sm:text-justify">307K+ Candidates</p>
                    </div>
                </div>
                <!-- Manufacturing -->
                <div class="p-4 md:w-1/4 sm:w-full w-full">
                    <div class="border-2 border-gray-600 px-4 py-6 rounded-lg transform transition duration-500 hover:scale-110 flex flex-col items-center justify-center">
                        <img src="https://cdn-icons-png.flaticon.com/128/2933/2933942.png" alt="" class="w-12 h-12 mb-3">
                        <h3 class="title-font font-medium text-3xl text-gray-900 sm:text-2xl">Manufacturing</h3>
                        <p class="leading-relaxed sm:text-base text-sm sm:text-justify">337K+ Candidates</p>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <!----------------->


</main>
<script>
    //Mobile view


    const toggleBtn = document.getElementById('toggleBtn');
    const card_1_front = document.querySelector("#card_1_front");
    const card_1_back = document.querySelector("#card_1_back");

    const card_2_front = document.querySelector("#card_2_front");
    const card_2_back = document.querySelector("#card_2_back");

    const card_3_front = document.querySelector("#card_3_front");
    const card_3_back = document.querySelector("#card_3_back");

    toggleBtn.addEventListener('change', () => {
        card_1_front.classList.toggle('-rotate-y-180');
        card_1_back.classList.toggle('rotate-y-180');

        card_2_front.classList.toggle('-rotate-y-180');
        card_2_back.classList.toggle('rotate-y-180');

        card_3_front.classList.toggle('-rotate-y-180');
        card_3_back.classList.toggle('rotate-y-180');
    })

    var swiper = new Swiper('.mySwiper', {
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
</script>
@endsection