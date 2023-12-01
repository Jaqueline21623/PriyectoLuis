
<x-app-layout>
    <head>
        <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.0.0/uicons-brands/css/uicons-brands.css'>
    <div class="flex justify-between items-center">
        <div class="p-7w-[755px] h-[100px] m-5relative bg-blue-800 rounded-[10px] text-8xl m-10 underline decoration-3 text-white">Convocatorias</div>
        <a href="{{ url('convocatoria/create') }}" class="w-40 h-14 bg-gradient-to-r from-blue-500 to-purple-500 text-white px-4 py-2 rounded hover:bg-blue-600 mr-10 flex justify-center items-center"><div>Crear</div></a>
    </div>

        <div class="flex flex-wrap ml-6">
            @foreach ($convocatoria as $item)
                <div class=" p-10 w-[403px] h-[539px] m-4 relative bg-blue-800 shadow border border-white  rounded-[31px]"style="background-image: url(img/2.jpg); background-size: cover; background-position: center;">
                    <div class="m-3 left-[26px] top-[16px] text-white text-3xl font-extrabold font-['Mulish']">{{ $item->titulo }}</div>
                    <div class="m-3 left-[26px] top-[53px] text-white text-2xl font-extrabold font-['Mulish']">{{ $item->jornada }}</div>
                    <div class="m-3 left-[26px] top-[90px] text-white text-2xl font-extrabold font-['Mulish']">
                        @php
                            $empresa = \App\Models\empresa::find($item->emp_id);
                        @endphp
                        {{ $empresa ? $empresa->nombre : 'Nombre no encontrado' }}
                    </div>
                    <div class="absolute bottom-28 w-[350px] ml-3 text-white text-3xl font-extrabold font-['Mulish']">{{ $item->descripcion }}</div>
                    <div class="flex absolute bottom-14">
                        <button class="h-8 bg-yellow-400 w-20 mr-10 rounded-xl">Editar</button>
                        <button class="h-8 bg-red-500 w-20 mr-10 rounded-xl">Eliminar</button>
                    </div>

                    <div class="w-[200px] h-10 absolute bottom-0 right-0">
                        <a href="{{ route('masinfo', ['id' => $item->id]) }}" class="MasInformacion text-xl text-white font-bold font-['Mulish']">
                            Más información
                        </a>
                    </div>

                </div>
            @endforeach
        </div>
        <footer class="mt-12 border-t pt-4 text-center bg-gradient-to-r from-blue-500 to-purple-500 text-white">

            <div class="m-6 col-span-12 sm:col-span-6 md:col-span-2">

                <ul class="list-none p-0">
                    <li><a href="maintenance.html" class="text-white hover:underline">Register Now</a></li>
                    <li><a href="contact.html" class="text-white hover:underline">Advice</a></li>
                    <li><a href="about.html" class="text-white hover:underline">Videos</a></li>
                    <li><a href="about.html" class="text-white hover:underline">Blog</a></li>
                    <li><a href="about.html" class="text-white hover:underline">Services</a></li>
                </ul>
            </div>



            <div class="flex justify-center space-x-4">
                <a href="https://www.facebook.com/?locale=es_LA" class="text-white transition duration-300">
                    <i class="fi fi-brands-facebook"></i>
                </a>
                <a href="https://twitter.com/home?lang=es" class="text-white transition duration-300">
                    <i class="fi fi-brands-twitter"></i>
                </a>
                <a href="https://chat.whatsapp.com/LSVezvCPY3X5t5vrsiKrW8" class="text-white transition duration-300">
                    <i class="fi fi-brands-whatsapp"></i>
                </a>
                <a href="https://www.instagram.com" class="text-white transition duration-300">
                    <i class="fi fi-brands-instagram"></i>
                </a>
            </div>
            <p class="text-gray-600 text-sm mt-4 text-white">&copy; 2023 Mis Convocatorias Todos los derechos reservados.</p>
        </footer>
    </head>
</x-app-layout>
