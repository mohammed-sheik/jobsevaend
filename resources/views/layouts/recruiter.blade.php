@extends('layouts.app')

@section('content')
<!------->
<section>
    <div class="container mx-auto py-16 px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-8">
            <div class="max-w-lg">
                <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl"><span class="text-color-blue">Jobseva </span>- Simplifying the Hiring Process</h2>
                <p class="mt-4 text-gray-600 text-lg sm:text-justify">Jobseva, a direct hiring platform for founders and hiring managers, is committed to meeting its users' definitions of success. This chat-based platform is created to help high-growth startups meet their hiring needs in absence of middlemen.

                    Jobseva caters to the hiring needs of 190K+ verified recruiters. The AI algorithm's ability to correctly match recruiters to relevant candidates based on skills, experience, profile activity, location preferences, etc., makes hiring simple and effective.</p>
                <div class="mt-8">
                    <a href="#" class="text-blue-500 hover:text-blue-600 font-medium">Learn more about us
                        <span class="ml-2">&#8594;</span></a>
                </div>
            </div>
            <div class="mt-12 md:mt-0">
                <img src="https://www.hirect.in/_nuxt/img/hiring-process.a680e46.png" alt="About Us Image" class="object-cover rounded-lg shadow-md">
            </div>
        </div>
    </div>
</section>

<section class="recruiter-section py-6 sm:py-12">
    <div class="recruiter-banner">
        <div class="container mx-auto px-2 sm:px-4">
            <div class="flex flex-col lg:flex-row items-center lg:space-x-8">
                <!-- Left Section -->
                <div class="lg:w-1/2 w-full px-2 sm:px-4 py-2 sm:py-4">
                    <div class="recruiter-banner-details text-center lg:text-left">
                        <h3 class="text-2xl sm:text-3xl lg:text-4xl font-bold mb-4">
                            Want to <span class="text-color-blue">Hire</span> <br class="hidden lg:block" />
                            Instantly?
                        </h3>
                        <p class="text-sm sm:text-lg sm:text-justify sm:text-gray-600 mb-4 sm:mb-6">
                            Jobseva is a job app that enables Founders/CXOs/Hiring Managers/Business Owners to chat directly with relevant, AI-filtered candidates, without consultants, and with 100% data privacy.
                        </p>
                        <div class="recruiter-banner-img">
                            <img src="/img/job2.jpg" loading="lazy" alt="recruiter banner" class="w-full h-auto rounded-md shadow-md" />
                        </div>
                    </div>
                </div>
                <!-- Right Section -->
                <div class="lg:w-1/2 w-full px-2 sm:px-4 py-2 sm:py-4">
                    <div class="schedule-call bg-white p-4 sm:p-6 rounded-lg shadow-md">
                        <p class="text-lg sm:text-xl font-semibold text-gray-700 mb-4 text-center lg:text-left">
                            Let us Simplify the Hiring Process
                        </p>
                        <p class="text-sm sm:text-lg sm:text-justify sm:text-gray-600 mb-4 sm:mb-6 text-center lg:text-left">
                            Register to find your Next Hire. Get Started Soon.
                        </p>
                        <div class="space-y-2 sm:space-y-4">
                            <div class="input-item">
                                <input type="text" autocomplete="off" id="user-name" placeholder="Name" class="w-full p-2 sm:p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-400" />
                                <p class="text-red-500 mt-1 sm:mt-2 hidden">Your name is required</p>
                            </div>
                            <div class="input-item flex">
                                <div class="el-select w-1/3 lg:w-1/4">
                                    <div class="relative">
                                        <select class="w-full p-2 sm:p-3 border border-gray-300 rounded-l-md focus:outline-none focus:ring-2 focus:ring-green-400">
                                            <option>+91</option>
                                            <option>+1</option>
                                            <option>+65</option>
                                            <option>+44</option>
                                        </select>
                                    </div>
                                </div>
                                <input type="text" autocomplete="off" id="phone-number" maxlength="10" placeholder="Enter 10-digit mobile number" class="w-2/3 lg:w-3/4 p-2 sm:p-3 border border-gray-300 rounded-r-md focus:outline-none focus:ring-2 focus:ring-green-400" />
                                <p class="text-red-500 mt-1 sm:mt-2 hidden">Your mobile is required</p>
                            </div>
                            <div class="input-item">
                                <input type="text" autocomplete="off" id="user-email" placeholder="Official Email" class="w-full p-2 sm:p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-400" />
                                <p class="text-red-500 mt-1 sm:mt-2 hidden">Enter valid work email</p>
                            </div>
                            <div class="input-item">
                                <input type="text" autocomplete="off" id="company-name" placeholder="Company Name" class="w-full p-2 sm:p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-400" />
                                <p class="text-red-500 mt-1 sm:mt-2 hidden">Your Company Name is Required</p>
                            </div>
                            <div class="input-item">
                                <select id="user-position" class="w-full p-2 sm:p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-400">
                                    <option readonly>Select Designation</option>
                                </select>
                                <p class="text-red-500 mt-1 sm:mt-2 hidden">Your Designation is Required</p>
                            </div>
                            <label class="flex items-center text-gray-700">
                                <input type="checkbox" class="form-checkbox text-green-400 rounded" />
                                <span class="ml-2 text-sm sm:text-base">I would like to receive updates via WhatsApp.</span>
                            </label>
                            <button type="button" class="bg-color-blue text-white py-2 px-4 sm:px-6 rounded-full w-full lg:w-auto">
                                Submit
                            </button>
                        </div>
                    </div>
                    <div class="text-center mt-2 sm:mt-4">
                        <a href="/enterprise-hiring" class="text-blue-500 hover:underline text-sm sm:text-base">Have Multiple Positions to Fill?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="keyhiring" class="py-12">
    <div class="container mx-auto px-4">
        <div class="text-center mb-8">
            <h3 class="text-2xl md:text-3xl font-bold">Key Features</h3>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <!-- Feature 1 -->
            <div class="flex flex-col items-center">
                <img src="https://www.hirect.in/_nuxt/img/Relevant-Candidates-(AI-Algorithm).33b11ec.svg" alt="Relevant Candidates (AI Algorithm)" class="h-full w-full md:h-auto md:w-auto mb-2">
                <div class="text-center text-sm md:text-base font-medium">
                    Relevant Candidates
                </div>
            </div>
            <!-- Feature 2 -->
            <div class="flex flex-col items-center">
                <img src="https://www.hirect.in/_nuxt/img/Direct-Chat-and-Instant-Response.38cb13b.svg" alt="Direct Chat and Instant Response" class="h-full w-full md:h-auto md:w-auto mb-2">
                <div class="text-center text-sm md:text-base font-medium">
                    Direct Chat and Instant
                </div>
            </div>
            <!-- Feature 3 -->
            <div class="flex flex-col items-center">
                <img src="https://www.hirect.in/_nuxt/img/Direct-Chat-and-Instant-Response.38cb13b.svg" alt="Direct Chat and Instant Response" class="h-full w-full md:h-auto md:w-auto mb-2">
                <div class="text-center text-sm md:text-base font-medium">
                    Contact 
                </div>
            </div>
            <!-- Feature 4 -->
            <div class="flex flex-col items-center">
                <img src="https://www.hirect.in/_nuxt/img/100_-Data-Privacy.8d049e2.svg" alt="100% Data Privacy" class="h-full w-full md:h-auto md:w-auto mb-2">
                <div class="text-center text-sm md:text-base font-medium">
                    100% Data Privacy
                </div>
            </div>
        </div>
        <div class="mt-8 text-center">
            <a href="https://play.google.com/store/apps/details?id=com.meritlife.tech.jobseva" class="px-6 py-2 bg-color-blue text-white rounded-lg hover:bg-blue-500 transition duration-300">Hire Now</a>
        </div>
    </div>
</section>


<section>
    <div class="px-2 py-20 w-full flex justify-center">
        <div class="bg-white lg:mx-8 lg:flex lg:max-w-5xl lg:shadow-lg rounded-lg">
            <div class="lg:w-1/2">
                <div class="lg:scale-110 h-80 bg-cover lg:h-full rounded-b-none border lg:rounded-lg"
                    style="background-image:url('https://media.istockphoto.com/id/1429811846/photo/hrm-or-human-resource-management-magnifier-glass-focus-to-manager-icon-which-is-among-staff.jpg?s=612x612&w=0&k=20&c=cbmZ3FZlLj1xenhXDpZAXa9m_Is3x3G-EFTisf0NdB0=')">
                </div>
            </div>
            <div class="py-12 px-6 lg:px-12 max-w-xl lg:max-w-5xl lg:w-1/2 rounded-t-none border lg:rounded-lg">
                <h2 class="text-3xl text-gray-800 font-bold">
                    Extensive <span class="text-color-blue">Job</span> Listings

                </h2>
                <p class="mt-4 text-gray-600">
                    Explore a vast array of job opportunities from leading companies across various industries. Our platform aggregates the latest and most relevant job listings to help you find the perfect match for your skills and career goals.
                </p>
                <div class="mt-8">
                    <a href="https://play.google.com/store/apps/details?id=com.meritlife.tech.jobseva" class="bg-color-blue text-gray-100 px-5 py-3 font-semibold rounded">Start Now</a>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="stephiring" class="py-8 ">
    <div class="container mx-auto px-4">
        <div class="text-center mb-8">
            <h3 class="text-2xl md:text-3xl font-semibold">Start Hiring in 3 Easy Steps</h3>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="flex flex-col items-center">
                <div class="text-lg font-bold mb-2">Step 1</div>
                <div class="relative w-24 h-24 bg-gray-200 rounded-full flex justify-center items-center mb-2">
                    <img src="https://cdn-icons-png.flaticon.com/128/2815/2815429.png" alt="step-img" class="w-20 h-20 object-cover">
                    <img src="https://cdn-icons-png.flaticon.com/128/5290/5290058.png" alt="check" class="absolute bottom-0 right-0 w-6 h-6">
                </div>
                <div class="text-lg font-bold">Build a Profile</div>
                <p class="text-center text-gray-600 mt-2">Create a detailed profile to attract the best candidates.</p>
            </div>
            <div class="flex flex-col items-center">
                <div class="text-lg font-bold mb-2">Step 2</div>
                <div class="relative w-24 h-24 bg-gray-200 rounded-full flex justify-center items-center mb-2">
                    <img src="https://cdn-icons-png.flaticon.com/128/1063/1063376.png" alt="step-img" class="w-20 h-20 object-cover">
                    <img src="https://cdn-icons-png.flaticon.com/128/5290/5290058.png" alt="check" class="absolute bottom-0 right-0 w-6 h-6">
                </div>
                <div class="text-lg font-bold">Post a Job in 5 Minutes</div>
                <p class="text-center text-gray-600 mt-2">Quickly create and post job listings to attract candidates.</p>
            </div>
            <div class="flex flex-col items-center">
                <div class="text-lg font-bold mb-2">Step 3</div>
                <div class="relative w-24 h-24 bg-gray-200 rounded-full flex justify-center items-center mb-2">
                    <img src="https://cdn-icons-png.flaticon.com/128/2076/2076218.png" alt="step-img" class="w-20 h-20 object-cover">
                    <img src="https://cdn-icons-png.flaticon.com/128/5290/5290058.png" alt="check" class="absolute bottom-0 right-0 w-6 h-6">
                </div>
                <div class="text-lg font-bold">Chat Directly with Relevant Candidates</div>
                <p class="text-center text-gray-600 mt-2">Communicate instantly with potential hires.</p>
            </div>
        </div>
        <div class="flex justify-center mt-8">
            <a href="https://play.google.com/store/apps/details?id=com.meritlife.tech.jobseva" class="bg-color-blue text-white font-bold py-2 px-4 rounded hover:bg-blue-500 transition duration-300">Hire Now</a>
        </div>
    </div>
</section>





<!----------->




<!--------->
@endsection