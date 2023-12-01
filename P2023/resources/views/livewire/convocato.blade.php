<div>
    @foreach($convocatorias as $convocatorias)
    <a href="#" class=" flex flex-col shadow-2xl shadow-gray-500 items-center shadow-2xl shadow-gray-500 bg-gray border border-gray-300 rounded-lg md:flex-row md:max-w-xl   dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
        <img class="m-3 object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="https://img.freepik.com/vector-premium/concepto-plano-moderno-investigacion-cientifica-diseno-banner-web-cientifico-estudia-cerebro-analiza-datos_9209-8337.jpg" alt="">
        <div class="flex flex-col justify-between p-4 leading-normal">
            <h2 class="text-xl font-bold mb-2">{{$convocatorias->titulo}}</h2>
            <p class="text-gray-700 mb-4">{{$convocatorias->descripcion}}</p>
            <p class="text-gray-700">Fecha de Inicio: {{$convocatorias->fechainicio}}</p>
            <p class="text-gray-700">Fecha Final: {{$convocatorias->fechafin}}</p>
            <p class="text-gray-700">Vacantes: {{$convocatorias->vacante}}</p>
            <p class="text-gray-700">Jornada Laboral: {{$convocatorias->jornada}}</p>
        </div>
    </a>
    @endforeach
</div>