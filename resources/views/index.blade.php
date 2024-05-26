@extends('components.layout')

@section('titulo', "HOME")

@section('conteudo')
<h1 class = "text-5xl font-bold flex justify-center items-center mt-7">Etec Zona Leste</h1>
  <div class="flex justify-center items-center bg-white mt-10 mb-10" >

      <img src="{{ asset('img/banner.webp') }}" alt="Paisagem Escola Etec Zona Leste">
  </div>



@endsection
