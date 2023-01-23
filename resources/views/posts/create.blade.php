@extends ('posts.posts')

@section('content')
@vite('resources/css/app.css')
{{--
<form action="{{ route('posts.store') }}" method="post">
    @csrf
    <label for="titulo">
        Titulo de la publicación 

        <input type="text" id="titulo" name="titulo" value="{{ old('titulo') }}">
    </label>

    <label for="extracto">
        Extracto Publicación 

        <input type="text" id="extracto" name="extracto" value="{{ old('extracto') }}">
    </label>


    <label for="contenido">
        Contenido publicación 
    
        <input type="text" id="contenido" name="contenido" value="{{ old('contenido') }}">
    </label>
    

    <button type="submit">Crear Publicación</button>
</form>


<form class="w-full max-w-sm" action="{{ route('posts.store') }}" method="post">
    <div class="md:flex md:items-center mb-6">
      <div class="md:w-1/3">
        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="titulo">
        Titulo de la publicación
        </label>
      </div>
      <div class="md:w-2/3">
        <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="titulo" type="text" value="{{ old('titulo') }}">
      </div>
    </div>

    <div class="md:flex md:items-center mb-6">
        <div class="md:w-1/3">
          <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="extracto">
          Extracto de la publicación
          </label>
        </div>
        <div class="md:w-2/3">
          <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="extracto" type="text" value="{{ old('extracto') }}">
        </div>
      </div>

      <div class="md:flex md:items-center mb-6">
        <div class="md:w-1/3">
          <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="content">
          Contenido de la publicación
          </label>
        </div>
        <div class="md:w-2/3">
          <textarea class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="contenido" type="text" value="{{ old('contenido') }}"></textarea>
        </div>
      </div>

      
    <div class="md:flex md:items-center">
      <div class="md:w-1/3"></div>
      <div class="md:w-2/3">
        <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="button">
          Sign Up
        </button>
      </div>
    </div>
  </form>

  --}}





<form class="p-10 flex flex-col" action="{{ route('posts.store') }}" method="post">
  @csrf

  <div>
    <label class="block">
      <span class="text-gray-700">Título de la publicación</span>
      <input type="text" class="border-2 form-input mt-1 block w-full" placeholder="Ingresa aquí el título" id="titulo" name="titulo" value="{{ old('titulo') }}">
    </label>
  </div>

  <div>
    <label class="block">
      <span class="text-gray-700">Extracto de la publicación</span>
      <input type="text" class="border-2 form-input mt-1 block w-full" placeholder="Ingresa aquí el extracto" id="extracto" name="extracto" value="{{ old('extracto') }}">
    </label>
  </div>

  <div>
    <label class="block">
      <span class="text-gray-700">Contenido de la publicación</span>
      <textarea class="border-2 form-textarea mt-1 block w-full" rows="2" placeholder="Ingresa el contenido" id="contenido" name="contenido" value="{{ old('contenido') }}"></textarea>
    </label>
  </div>

  


  <div class="block">
    <div class="mt-2">
      <div>
        <label class="inline-flex items-center">
          <input type="checkbox" class="border-2 mt-1 form-checkbox" name="caducable" id="caducable">
          <span class="ml-2">Caducable</span>
        </label>
      </div>
      <div>
        <label class="inline-flex items-center">
          <input type="checkbox" class="border-2 mt-1 form-checkbox" name="comentable" id="comentable">
          <span class="ml-2">Comentable</span>
        </label>
      </div>
    </div>
  </div>

  <label class="block">
    <span class="text-gray-700">Selecciona la privacidad</span>
    <select class="border-2 form-select block w-full mt-1" name="select">
      <option name="privado" value="true">Privado</option>
      <option name="publico" value="false">Público</option>
    </select>
  </label>

  <button class="mt-5 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full w-1/4 self-center" type="submit">
    Enviar
  </button>

</form>



