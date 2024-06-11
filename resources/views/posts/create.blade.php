@extends('layouts.app')

@section('titulo')
Crea una nueva Publicación
@endsection


@push('styles')
<script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
@endpush

@section('contenido')
<div class="md:flex md:items-center">
    <div class="md:w-1/2 px-10">
            <form action="{{ route('imagenes.store')}}" method="POST" enctype="multipart/form-data" id="dropzone" class="dropzone border-dash border-2 w-full h-96 rounded flex flex-col justify-center items-center">
            @csrf
            </form>
    </div>

    <div class="md:w-1/2 p-10  bg-white rounded-lg shadow-xl mt-10 md:mt-0">
        <form action="{{route('register')}}" method="POST">
            @csrf
    <div class="mb-5">
        <label for="descripción" class="mb-2 block uppercase text-gray-500 font-bold">
        Titulo
        </label>
    <input
    id="descripción"
    name="descripción"
    placeholder="Titulo de la Publicacion"
    class="border p-3 w-full rounded-lg @error('name') border-red-500 
        @enderror"
    
    />
    
    @error('name')
    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
    @enderror
    
    </div>


    <div class="mb-5">
        <label for="titulo" class="mb-2 block uppercase text-gray-500 font-bold">
        Descripción
        </label>
    <textarea
    id="titulo"
    name="titulo"
    type="text"
    placeholder="Descripción de la Publicacion"
    class="border p-3 w-full rounded-lg @error('name') border-red-500 
        @enderror"
    
    ></textarea>
    
    @error('name')
    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
    @enderror
    
    </div>
    <input
type="submit"
value="Crear Publicación"
class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg "

/>
        </form>
    </div>
</div>
@endsection