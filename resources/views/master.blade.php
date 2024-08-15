<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Project 2</title>
        @vite('resources/css/app.css')
    </head>

    <body class="bg-[#2B2D33]">

        <nav class="bg-[#2B2D33] shadow-xl sticky top-0 z-10">
            <div class="container mx-auto">

                <div class="sm:flex justify-between items-center py-5">

                    <div class="text-center mb-3">
                        <a href="http://" target="" class="text-white text-xl sm:text-3xl font-bold"> 
                            <span class="text-[#F65023]">S</span>mart Cod<span class="text-[#F65023]">ers</span>
                        </a>
                    </div>

                    <ul class="sm:flex text-xl text-white text-center border-t sm:border-none">
                        <li class="mt-4 sm:mt-0"> <a href="http://" class="p-3 text-[#F65023]">Home</a> </li>
                        <li> <a href="http://" class="p-3 hover:text-[#F65023]">Products</a> </li>
                        <li> <a href="http://" class="p-3 hover:text-[#F65023]">Blogs</a> </li>
                        <li> <a href="http://" class="p-3 hover:text-[#F65023]">Portfolio</a> </li>
                        <li> <a href="http://" class="p-3 hover:text-[#F65023]">Contact</a> </li>
                    </ul>

                </div>


            </div>
            
        </nav>

        @yield('content')

    </body>

</html>