@extends('components.layout')

@section('titulo', "HOME")

@section('conteudo')
<body class="bg-slate-50">

    <div class="flex flex-col justify-center items-center py-5">

        <div>
            <h1 class="my-5 text-4xl text-gray-700 font-bold">Contato</h1>
        </div>

        <form action="{{route('contact')}}" method="post">
            @csrf

            <!--NOME-->
            <div class="col-span-full">
                <label for="Nome" class="block text-sm font-medium leading-6 text-gray-700">Nome</label>
                <div class="mt-2">
                    <input type="text" name="Nome" id="Nome" class="block w-96 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 pl-2 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>

            <!--TELEFONE-->
            <div class="my-5 col-span-full">
                <label for="tel" class="block text-sm font-medium leading-6 text-gray-700">Telefone</label>
                <div class="mt-2">
                    <input type="tel" name="tel" id="tel" class="block w-96 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 pl-2 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>

            <!--TELEFONE-->
            <div class="my-5 col-span-full">
                <label for="adress" class="block text-sm font-medium leading-6 text-gray-700">Endereço</label>
                <div class="mt-2">
                    <input type="text" name="adress" id="adress" class="block w-96 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 pl-2 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>

            <!--SEXO-->
            <div class="my-5 sm:col-span-3">
                <label for="sexo" class="block text-sm font-medium leading-6 text-gray-700">Sexo</label>
                <div class="mt-2">
                    <select id="sexo" name="sexo" class="block w-48 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                    <option>Masculino</option>
                    <option>Feminino</option>
                    <option>Outro</option>
                    </select>
                </div>
            </div>

            <!--BTN-->
            <div class="mt-6 flex items-center justify-end gap-x-6">
                <button type="submit" class="rounded-md bg-gray-700 px-3 py-2 w-96 text-sm font-semibold text-white shadow-sm  focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Enviar</button>
            </div>

        </form>
    </div>
    <div class="mb-40"></div>
    <div class="mb-10"><p>⠀</p></div>
    <div class="mb-10"><p>⠀</p></div>
    </body>
@endsection
