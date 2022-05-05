<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Modification Info Personnelle') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{route('profilVisiteur')}}" method="POST">
                        @csrf 
                        <p>Nom</p>
                        <input type="text" value="{{ Auth::user()->VIS_NOM }}" name="nom">
                        <p>Prenom</p>
                        <input type="text" value="{{ Auth::user()->Vis_PRENOM }}" name="prenom">
                        <p>Adresse</p>
                        <input type="text" value="{{ Auth::user()->VIS_ADRESSE }}" name="adresse">
                        <p>Code Postale</p>
                        <input type="text" value="{{ Auth::user()->VIS_CP }}" name="cp">
                        <p>Ville</p>
                        <input type="text" value="{{ Auth::user()->VIS_VILLE }}" name="ville">
                        <br/>
                        <br/>
                        <br/>
                        <button class="btn">Créer</button>

                        <center><a href="rapport">Retour</a></center>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>