@extends('base')

@section('title', $etudiant->exists ? 'Modifier un étudiant' : 'Ajouter un étudiant')

@section('content')
    <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5 h-dvh w-screen items-center justify-center flex">
        <form class="max-w-sm mx-auto flex-1"
            action="{{ route($etudiant->exists ? 'etudiants.update' : 'etudiants.store', $etudiant) }}" method="POST">
            @csrf
            @method($etudiant->exists ? 'put' : 'post')

            @include('input', ['label' => 'Nom', 'name' => 'nom', 'value' => old('nom', $etudiant->nom)])

            @include('input', [
                'label' => 'Prénom',
                'name' => 'prenom',
                'value' => old('prenom', $etudiant->prenom),
            ])

            @include('input', [
                'label' => 'Téléphone',
                'name' => 'telephone',
                'type' => 'tel',
                'value' => old('telephone', $etudiant->telephone),
            ])

            @include('input', [
                'label' => 'Adresse',
                'name' => 'adresse',
                'value' => old('adresse', $etudiant->adresse),
            ])

            @include('input', [
                'label' => 'Date de naissance',
                'name' => 'dateNaiss',
                'type' => 'date',
                'value' => old('dateNaiss', $etudiant->dateNaiss),
            ])

            @include('input', [
                'label' => 'Niveau',
                'name' => 'niveau',
                'value' => old('niveau', $etudiant->niveau),
            ])

            @include('input', [
                'label' => 'Filière',
                'name' => 'filiere',
                'value' => old('filiere', $etudiant->filiere),
            ])

            @include('input', [
                'label' => 'Genre',
                'name' => 'genre',
                'value' => old('genre', $etudiant->genre),
            ])

            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                @if ($etudiant->exists)
                    Modifier l'étudiant
                @else
                    Ajouter l'étudiant
                @endif
            </button>
        </form>
    </section>
@endsection
