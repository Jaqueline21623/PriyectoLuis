<x-app-layout>
    <div class="container">
        <div class="m-10 flex justify-center">
            <div class="flex justify-center p-5 w-[755px] h-[100px] relative  bg-gradient-to-r from-blue-200 to-purple-200 rounded-[10px] text-7xl underline decoration-3 text-blue-600">
                Formulario
            </div>
        </div>


        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ url('convocatoria') }}" method="post" class=" border-8 border-blue-500 ml-10 mr-10 p-5 rounded-lg bg-gradient-to-r from-blue-200 to-purple-200 ">
            @csrf
            <div class="bg-blue-100 p-6 rounded-md">
                <div class="grid grid-cols-2 gap-8">
                    <label for="titulo" class="text-black text-2xl font-bold">Título:</label>
                    <input type="text" name="titulo" value="{{ old('titulo') }}" required
                        class="border border-blue-500 rounded p-2 focus:outline-none focus:border-blue-700">

                    <label for="descripcion" class="text-black text-2xl font-bold">Descripción:</label>
                    <textarea name="descripcion" value="{{ old('descripcion') }}" required
                        class="border border-blue-500 rounded p-2 focus:outline-none focus:border-blue-700"></textarea>

                    <label for="fechaInicio" class="text-black text-2xl font-bold">Fecha de Inicio:</label>
                    <input type="date" name="fechaInicio" value="{{ old('fechaInicio') }}" required
                        class="border border-blue-500 rounded p-2 focus:outline-none focus:border-blue-700">

                    <label for="fechaFin" class="text-black text-2xl font-bold">Fecha de Fin:</label>
                    <input type="date" name="fechaFin" value="{{ old('fechaFin') }}" required
                        class="border border-blue-500 rounded p-2 focus:outline-none focus:border-blue-700">

                    <label for="empresa" class="text-black text-2xl font-bold">Empresa:</label>
                    <select name="empresa" id="empresa"
                        class="border border-blue-500 rounded p-2 focus:outline-none focus:border-blue-700" required>
                        <option value="">Seleccionar Empresa</option>
                        @foreach ($empresas as $empresa)
                        <option value="{{ $empresa->id }}">{{ $empresa->nombre }}</option>
                        @endforeach
                    </select>

                    <label for="vacante" class="text-black text-2xl font-bold">Vacante:</label>
                    <input type="number" name="vacante" value="{{ old('vacante') }}" required
                        class="border border-blue-500 rounded p-2 focus:outline-none focus:border-blue-700">

                    <label for="jornada" class="text-black text-2xl font-bold">Jornada:</label>
                    <input type="text" name="jornada" value="{{ old('jornada') }}" required
                        class="border border-blue-500 rounded p-2 focus:outline-none focus:border-blue-700">
                </div>
            </div>
<div class="flex justify-center">
            <button type="submit" class="bg-gradient-to-r from-blue-500 to-purple-500 text-white px-8 py-3 rounded hover:bg-blue-600 ">Guardar</button>
</div>

</x-app-layout>
