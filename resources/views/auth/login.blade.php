@extends('layouts.app')

@section('titulo')
Inicia Sesión en DevStagram
@endsection

@section('contenido')
<div class="md:flex md:justify-center md:gap-10 md:items-center pd-5">
    <div class="md:w-8/12">
        <img src="{{asset('img/login.jpg')}}" alt="imagen login de usuarios">
    </div>

    <div class="md:w-4/12 mb-10 bg-white p-6 rounded-lg shadow-xl">
    <form method="POST" action="{{ route('login')}}">
        @csrf

        @if(session('mensaje'))
        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{session('mensaje')}}</p>
        @endif

<div class="mb-5">
    <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">
    email
    </label>
<input
id="email"
name="email"
type="email"
placeholder="Tu email de Registro"
class="border p-3 w-full rounded-lg @error('email') border-red-500 
    @enderror"

/>
@error('email')
<p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
@enderror

</div>

<div class="mb-5">
    <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">
    Password
    </label>
<input
id="password"
name="password"
type="password"
placeholder="Password de registro"
class="border p-3 w-full rounded-lg @error('password') border-red-500 
    @enderror"

/>
@error('password')
<p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
@enderror
</div>

<div class="mb-5" >
<input type="checkbox" name="remember"><label class="text-gray-500 font-bold text-sm">Mantener mi sesión abierta</label>
</div>

<input
type="submit"
value="Iniciar Sesión"
class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg "

/>
        </form>
    </div>    

</div>   
@endsection