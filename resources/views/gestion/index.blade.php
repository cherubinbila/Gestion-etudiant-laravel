@extends('base')
@section('content')
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen lg:py-16 lg:px-6 h-dvh">
            <div class="mx-auto w-screen text-center h-dvh">
                <p class="mb-4 text-3xl tracking-tight font-bold text-gray-900 md:text-4xl dark:text-gray-200">Bienvenu sur
                    notre</p>
                <h1 class="mb-4 text-7xl tracking-tight font-extrabold lg:text-9xl text-primary-600 dark:text-white">
                    Application de Gestion des Etudiants</h1>
                <form action="{{ route('liste') }}"><button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-2xl px-5 py-2.5 me-2 my-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Voir
                        la liste</button></form>

            </div>
        </div>
    </section>
@endsection
