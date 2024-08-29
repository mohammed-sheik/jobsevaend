@extends('layouts.app')
@section('content')

<section>
    <div class="container mx-auto py-16 px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-8">
            <div class="max-w-lg">
                <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl"><span class="text-color-blue">Jobseva </span>- The Direct Job Search Application</h2>
                <p class="mt-4 text-gray-600 text-lg sm:text-justify">With 190K+ verified recruiters and 3.8M+ verified candidates, Hirect offers candidates the opportunity to directly connect with the decision-makers. Moreover, the AI algorithm ensures that candidates are only recommended for jobs that are a good fit for their skill set, experience, and professional goals. In addition to direct chat, Hirect has an in-built video call feature that allows the entire hiring process to take place without hassle on the app itself.</p>
                <div class="mt-8">
                    <a href="#" class="text-blue-500 hover:text-blue-600 font-medium">Learn more about us
                        <span class="ml-2">&#8594;</span></a>
                </div>
            </div>
            <div class="mt-12 md:mt-0">
                <img src="/img/job3.jpg" alt="About Us Image" class="object-cover rounded-lg shadow-md">
            </div>
        </div>
    </div>
</section>

<section class="job-seeker-section py-12">
    <div class="job-seeker">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center">
                <!-- Left Section - Image -->
                <div class="w-full md:w-1/2 px-4 mb-8 md:mb-0 lg:ml-10 flex justify-center">
                    <div class="chat-now-img-hero">
                        <img src="/img/add1.png" loading="lazy" alt="banner image" class="max-w-full h-auto rounded-md shadow-md" />
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

<section id="stephiring" class="py-8 ">
    <div class="container mx-auto px-4">
        <div class="text-center mb-8">
            <h3 class="text-2xl md:text-3xl font-semibold">Get Hired in 3 Easy Steps</h3>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="flex flex-col items-center">
                <div class="text-lg font-bold mb-2">Step 1</div>
                <div class="relative w-24 h-24 bg-gray-200 rounded-full flex justify-center items-center mb-2">
                    <img src="https://cdn-icons-png.flaticon.com/128/9483/9483127.png" alt="step-img" class="w-20 h-20 object-cover">
                    <img src="https://cdn-icons-png.flaticon.com/128/5290/5290058.png" alt="check" class="absolute bottom-0 right-0 w-6 h-6">
                </div>
                <div class="text-lg font-bold">Build a Profile</div>
              
            </div>
            <div class="flex flex-col items-center">
                <div class="text-lg font-bold mb-2">Step 2</div>
                <div class="relative w-24 h-24 bg-gray-200 rounded-full flex justify-center items-center mb-2">
                    <img src="https://cdn-icons-png.freepik.com/256/3677/3677301.png?ga=GA1.1.1925375963.1722407082" alt="step-img" class="w-20 h-20 object-cover">
                    <img src="https://cdn-icons-png.flaticon.com/128/5290/5290058.png" alt="check" class="absolute bottom-0 right-0 w-6 h-6">
                </div>
                <div class="text-lg font-bold">Chat Directly with Decision-Makers</div>
             
            </div>
            <div class="flex flex-col items-center">
                <div class="text-lg font-bold mb-2">Step 3</div>
                <div class="relative w-24 h-24 bg-gray-200 rounded-full flex justify-center items-center mb-2">
                    <img src="https://cdn-icons-png.flaticon.com/128/15541/15541734.png" alt="step-img" class="w-20 h-20 object-cover">
                    <img src="https://cdn-icons-png.flaticon.com/128/5290/5290058.png" alt="check" class="absolute bottom-0 right-0 w-6 h-6">
                </div>
                <div class="text-lg font-bold">Get Hired</div>
              
            </div>
        </div>
        <div class="flex justify-center mt-8">
            <a href="https://play.google.com/store/apps/details?id=com.meritlife.tech.jobseva" class="bg-color-blue text-white font-bold py-2 px-4 rounded hover:bg-blue-600 transition duration-300">Hire Now</a>
        </div>
    </div>
</section>



@endsection