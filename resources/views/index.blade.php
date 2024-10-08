@extends('master')

@section('content')
    <header>
        <div class="container mx-auto border border-indigo-600 border-t-0 sm:flex justify-around items-center text-center text-white h-[80vh] px-10 pt-10">
            <div>
                <h1 class="text-2xl sm:text-5xl mb-5 sm:mb-15">Smart Coders: Learn <br> Programming</h1>

                <button class="bg-indigo-900 transition px-7 py-3 rounded-full text-xl shadow-xl hover:bg-indigo-950">
                    Join: Programming Dem Team
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 inline-block text-red-500 ml-2 animate-ping">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                    </svg>                      
                </button>
            </div>

            <div>
                <img src="{{ asset('images/hero-img.png') }}" alt="" class="animate-pulse">
            </div>
        </div>
    </header>


    <main class="container mx-auto">

        <section class="my-24">
            <h2 class="text-white text-3xl text-center mb-12"> Our Services</h2>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">
                <div class="bg-gray-800 p-8 rounded-lg text-center border-4 border-[#1F2937] hover:border-indigo-700 cursor-pointer">
                    <img src="{{ asset('images/frontEnd.png')}}" alt="" class="w-1/2 mx-auto">
                    <h4 class="text-white my-5 text-lg underline underline-offset-8"> Front End Development </h4>
                    <p class="text-white">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit ipsam, odio tenetur debitis consectetur quia?</p>
                </div>

                <div class="bg-gray-800 p-8 rounded-lg text-center border-4 border-[#1F2937] hover:border-indigo-700 cursor-pointer">
                    <img src="{{ asset('images/frontEnd.png')}}" alt="" class="w-1/2 mx-auto">
                    <h4 class="text-white my-5 text-lg underline underline-offset-8"> Back End Development </h4>
                    <p class="text-white">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit ipsam, odio tenetur debitis consectetur quia?</p>
                </div>

                <div class="bg-gray-800 p-8 rounded-lg text-center border-4 border-[#1F2937] hover:border-indigo-700 cursor-pointer">
                    <img src="{{ asset('images/frontEnd.png')}}" alt="" class="w-1/2 mx-auto">
                    <h4 class="text-white my-5 text-lg underline underline-offset-8"> Javascript Development </h4>
                    <p class="text-white">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit ipsam, odio tenetur debitis consectetur quia?</p>
                </div>

                <div class="bg-gray-800 p-8 rounded-lg text-center border-4 border-[#1F2937] hover:border-indigo-700 cursor-pointer">
                    <img src="{{ asset('images/frontEnd.png')}}" alt="" class="w-1/2 mx-auto">
                    <h4 class="text-white my-5 text-lg underline underline-offset-8">NextJs Complete Course </h4>
                    <p class="text-white">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit ipsam, odio tenetur debitis consectetur quia?</p>
                </div>

                <div class="bg-gray-800 p-8 rounded-lg text-center border-4 border-[#1F2937] hover:border-indigo-700 cursor-pointer">
                    <img src="{{ asset('images/frontEnd.png')}}" alt="" class="w-1/2 mx-auto">
                    <h4 class="text-white my-5 text-lg underline underline-offset-8"> ReactJS Complete Course </h4>
                    <p class="text-white">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit ipsam, odio tenetur debitis consectetur quia?</p>
                </div>

                <div class="bg-gray-800 p-8 rounded-lg text-center border-4 border-[#1F2937] hover:border-indigo-700 cursor-pointer">
                    <img src="{{ asset('images/frontEnd.png')}}" alt="" class="w-1/2 mx-auto">
                    <h4 class="text-white my-5 text-lg underline underline-offset-8"> MongoDB Complete Course </h4>
                    <p class="text-white">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit ipsam, odio tenetur debitis consectetur quia?</p>
                </div>
            </div>
        </section>

        <section class="bg-slate-900 mb-24 py-16 md:py-48 grid place-content-center text-center">
            <div class="md:flex justify-center items-center text-white gap-5 sm:gap-8 md:gap-12 md:gap-x-48">

                <div class="text-lg sm:text-xl md:text-4xl">
                    <p class="text-yellow-500 mb-10 animate-bounce">My Clients</p>
                    <h2>My Take care of <br>more <span class="underline decoration-orange-500 underline-offset-8">than 500k</span> Customers</h2>
                </div>

                <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-5 sm:gap-8 md:gap-12">
                    <div>
                        <img src="{{ asset('images/client-01.png')}}" alt="" class="">
                        <h3>One Pulse</h3>
                    </div>

                    <div>
                        <img src="{{ asset('images/client-02.png')}}" alt="" class="">
                        <h3>Tencent</h3>
                    </div>

                    <div>
                        <img src="{{ asset('images/client-03.png')}}" alt="" class="">
                        <h3>Apple</h3>
                    </div>

                    <div>
                        <img src="{{ asset('images/client-04.png')}}" alt="" class="">
                        <h3>Microsoft</h3>
                    </div>

                    <div>
                        <img src="{{ asset('images/client-05.png')}}" alt="" class="">
                        <h3>Lenovo</h3>
                    </div>

                    <div>
                        <img src="{{ asset('images/client-06.png')}}" alt="" class="">
                        <h3>Huawei</h3>
                    </div>

                    <div>
                        <img src="{{ asset('images/client-07.png')}}" alt="" class="">
                        <h3>Nexus</h3>
                    </div>

                    <div>
                        <img src="{{ asset('images/client-08.png')}}" alt="" class="">
                        <h3>Tesla</h3>
                    </div>

                    <div>
                        <img src="{{ asset('images/client-09.png')}}" alt="" class="">
                        <h3>Brave</h3>
                    </div>

                </div>

            </div>
        </section>


        <section class="py-16 sm:py-24 bg-[#1F2937]">
            <div>
                <h3 class="text-center text-xl sm:text-3xl text-white mb-10"> Ask a question </h3>

                <form>
                    <input type="email" name="email" placeholder="Your Email" id="" class="block mx-auto mb-10 w-5/6 sm:w-1/2 h-12 border-2 border-orange-800 rounded placeholder:italic placeholder:text-orange-800 px-5">

                    <textarea name="description" id="" cols="30" rows="10" placeholder="Your Question" class="block mx-auto w-5/6 sm:w-1/2 border-2 border-orange-800 h-52  placeholder:italic placeholder:text-orange-800 px-5 py-5"></textarea>

                    <button class="block mx-auto bg-green-900 px-10 py-3 text-white text-xl mt-8 hover:bg-green-600">Send Now</button>
                </form>
            </div>
        </section>


        <section class="bg-slate-900 my-16 sm:my-20 py-12 sm:py-24 px-2">
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10 sm:gap-16 md:gap-20 justify-center items-center text-white">
                <div class="border p-10">
                    <h5> Basic Plane </h5>
                    <h2> $ <span class="text-xl sm:text-2xl md:text-5xl font-bold">19.00</span>/month </h2>

                    <hr class="my-10">
                    
                    <ul class="list-disc list-inside leading-10 text-xl">
                        <li> 5000 User Activities </li>
                        <li> Unlimited Access </li>
                        <li> No Hidde Charge </li>
                        <li> 03 Time Updates </li>
                        <li> Figma Source File </li>
                        <li> Many More Facilities </li>
                    </ul>
                    
                    <button class="bg-green-900 px-5 py-2 text-xl mt-10 hover:bg-green-600 transition rounded-full"> Purchase </button>
                </div>

                <div class="border p-10">
                    <h5> Basic Plane </h5>
                    <h2> $ <span class="text-xl sm:text-2xl md:text-5xl font-bold">19.00</span>/month </h2>

                    <hr class="my-10">
                    
                    <ul class="list-disc list-inside leading-10 text-xl">
                        <li> 5000 User Activities </li>
                        <li> Unlimited Access </li>
                        <li> No Hidde Charge </li>
                        <li> 03 Time Updates </li>
                        <li> Figma Source File </li>
                        <li> Many More Facilities </li>
                    </ul>
                    
                    <button class="bg-green-900 px-5 py-2 text-xl mt-10 hover:bg-green-600 transition rounded-full"> Purchase </button>
                </div>

                <div class="border p-10">
                    <h5> Basic Plane </h5>
                    <h2> $ <span class="text-xl sm:text-2xl md:text-5xl font-bold">19.00</span>/month </h2>

                    <hr class="my-10">
                    
                    <ul class="list-disc list-inside leading-10 text-xl">
                        <li> 5000 User Activities </li>
                        <li> Unlimited Access </li>
                        <li> No Hidde Charge </li>
                        <li> 03 Time Updates </li>
                        <li> Figma Source File </li>
                        <li> Many More Facilities </li>
                    </ul>
                    
                    <button class="bg-green-900 px-5 py-2 text-xl mt-10 hover:bg-green-600 transition rounded-full"> Purchase </button>
                </div>

            </div>
        </section>


        <section class="bg-lime-950 my-10 sm:my-16 md:my-20 lg:my-32 py-10 sm:py-16 md:py-20 bg-no-repeat bg-left" style="background-image: url('{{ asset('images/subscribe-bg.png') }}')">
            <div class="sm:flex justify-center items-center text-white gap-10 sm:gap-16 md:gap-20 lg:gap-32">

                <div class="text-center mb-10 sm:mb-0 sm:border-r-2 sm:pr-28">
                    <h2 class="text-xl"> Newsletter Subscription </h2>
                    <p> Get subscriber to our newsletter & receive latest lorem updates </p>
                </div>

                <div class="flex justify-center items-center gap-1">
                    <input type="email" name="email" placeholder="Your Email" class="h-10 border-none px-2">
                    <button class="bg-red-900 px-5 py-2 hover:bg-red-600 transition"> Subscribe </button>
                </div>
            </div>
        </section>
        
    </main>

    <footer>
        <div class="container mx-auto text-center sm:text-left">
            <div class="sm:flex justify-around text-white">
                <div>
                    <h2 class="text-xl sm:text-2xl mb-5"> My Account </h2>
                    <ul class="leading-10">
                        <li>
                            <a href="#"> Creator Dashboard </a>
                        </li>

                        <li>
                            <a href="#"> Wallet </a>
                        </li>

                        <li>
                            <a href="#"> Create Item </a>
                        </li>

                        <li>
                            <a href="#"> My Account </a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h2 class="text-xl sm:text-2xl mb-5"> Web Links </h2>
                    <ul class="leading-10">
                        <li>
                            <a href="#"> Collections </a>
                        </li>

                        <li>
                            <a href="#"> Item Details </a>
                        </li>

                        <li>
                            <a href="#"> Rankings </a>
                        </li>

                        <li>
                            <a href="#"> User Profile </a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h2 class="text-xl sm:text-2xl mb-5"> Community </h2>
                    <ul class="leading-10">
                        <li>
                            <a href="#"> Blog Category </a>
                        </li>

                        <li>
                            <a href="#"> Blog Autor </a>
                        </li>

                        <li>
                            <a href="#"> Blog </a>
                        </li>

                        <li>
                            <a href="#"> Blog Details </a>
                        </li>
                    </ul>
                </div>
                
                <div>
                    <h2 class="text-xl sm:text-2xl mb-5"> Contact </h2>
                    <ul class="leading-10">
                        <li>
                            <a href="#"> David Dem, P.O. 1334 Road, Côte d'Ivoire </a>
                        </li>

                        <li>
                            <a href="#"> BD Author </a>
                        </li>

                        <li>
                            <a href="#"> dem@gmail.com </a>
                        </li>

                        <li>
                            <a href="#"> Phone: 225 0555736487 </a>
                        </li>
                    </ul>
                </div>
            </div>

            <hr class="my-16">

            <div class="text-white sm:flex justify-between mb-20">
                <p>
                    &copy; Copyright - 2023 - Designed by <span class="text-green-700"> Programming David Dem - Copyright </span>
                </p>

                <p> Privacy Policy | Term of Services </p>
            </div>
        </div>
    </footer>

@endsection