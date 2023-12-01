<x-app-layout>
    <div class="container">
        <h2>Formulario</h2>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ url('convocatoria') }}" method="post" class=" border-8 border-black ml-10 mr-10 p-5 mb-5">
            @csrf
            <div class="">
                <div class="grid grid-cols-2 gap-8 mr-10 ml-10">
                <label for="titulo">Título:</label>
                <input type="text" name="titulo" value="{{ old('titulo') }}" required>

                <label for="descripcion">Descripción:</label>
                <textarea name="descripcion" value="{{ old('descripcion') }}" required></textarea>

                <label for="fechaInicio">Fecha de Inicio:</label>
                <input type="date" name="fechaInicio" value="{{ old('fechaInicio') }}" required>

                <label for="fechaFin">Fecha de Fin:</label>
                <input type="date" name="fechaFin" value="{{ old('fechaFin') }}"  required>

                <label for="empresa" class="Nombre w-[304px] text-black text-2xl font-bold font-['Mulish']">Empresa:</label>
                        <select name="empresa" id="empresa" class="w-[394px] h-[70px] pl-[20px] pr-[20px] pt-[20px] pb-[20px] bg-white rounded-[10px] text-black text-opacity-50 text-2xl font-normal form-select" required>
                            <option value="">Seleccionar Empresa</option>
                            @foreach ($empresas as $empresa)
                                <option value="{{$empresa->id}}">{{$empresa->nombre}}</option>
                            @endforeach
                        </select>

                <label for="vacante">Vacante:</label>
                <input type="number" name="vacante" value="{{ old('vacante') }}" required>

                <label for="jornada">Jornada:</label>
                <input type="text" name="jornada" value="{{ old('jornada') }}" required>
                </div>
            </div>

            <button type="submit">Guardar</button>
        </form>
    </div>
</x-app-layout>
