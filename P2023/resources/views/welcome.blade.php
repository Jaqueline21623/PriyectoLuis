<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">




</head>

<body class="antialiased">
    <div class="relative sm:justify-center  min-h-screen bg-dots-darker bg-center selection:bg-red-500 selection:text-white">
        <nav class=" bg-blue-900 text-white p-3 flex items-center justify-between">
            <img src="img/descarga.png" alt="logo" class="h-8 mr-4">
            <ul class="flex ">
                <li class="mr-4 sm:right-0"><a href="#" class="hover:text-yellow-500 font-bold">Convocatorias</a></li>
                <li class="mr-4"><a href="#" class="hover:text-yellow-500 font-bold">Documentos</a></li>
                <li><a href="#" class="hover:text-yellow-500 font-bold">Plan</a></li>
            </ul>
            @if (Route::has('login'))
            <div class="sm:top-0 sm:right-0 p-6 text-right z-10">
                @auth
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    <a href="{{ url('/dashboard') }}" class="font-semibold text-white-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log In</a>
                </button>
                @else
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    <a href="{{ route('login') }}" class="font-semibold text-white-600 focus:outline focus:outline-2 focus:rounded-sm ">Log in</a>
                </button>

                @if (Route::has('register'))

                @endif
                @endauth
            </div>
            @endif
        </nav>


        <div class=" mx-auto">
            <div class="flex justify-center">
                <img src="img/bg.png" alt="" style="width: 140em;">
            </div>

            <!-- Cards -->
            <div class="flex justify-center mt-8">
                <div class=" grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                    <div class="mr-5">
                        @livewire('convocato') 
                    </div>

                    <div>
                        @livewire('convocato')
                    </div>
                </div>
            </div>


            <!-- pie de pagina -->
            <footer class="bg-blue-900 rounded-lg shadow  mt-7">
                <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
                    <div class="sm:flex sm:items-center sm:justify-between">
                        <a href="#" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                            <img src="https://scontent.faqp2-1.fna.fbcdn.net/v/t39.30808-6/275377580_10158514689403091_417287186094086712_n.jpg?_nc_cat=1&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeFGLIRhkJDT9Yc1HTL5sQp5hNGS6fkk0n2E0ZLp-STSfS8CxdFBPd9A2JfzOBxhPMJh2nPg0YJhlT4wZZcSoIaz&_nc_ohc=FQ75xgULtMEAX_Vh6Hn&_nc_ht=scontent.faqp2-1.fna&oh=00_AfAmxE3MYssxtEilE8pyPFwXCvohst5QvQg-njPXTnb84w&oe=65668B59" class="h-8" alt="Flowbite Logo" />
                        </a>
                        <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                            <li>
                                <a href="#" class="hover:underline me-4 md:me-6">About</a>
                            </li>
                            <li>
                                <a href="#" class="hover:underline me-4 md:me-6">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="#" class="hover:underline me-4 md:me-6">Licensing</a>
                            </li>
                            <li>
                                <a href="#" class="hover:underline">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
                    <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="https://flowbite.com/" class="hover:underline">Flowbite™</a>. All Rights Reserved.</span>
                </div>
            </footer>



        </div>
    </div>
</body>

</html>