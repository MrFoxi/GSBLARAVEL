<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Page Rapport') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{route('rapportVisiteur')}}" method="POST">
                        @csrf 
                        <p> Praticiens </p>

                        <select name="praticien">
                            <option selected="selected" disabled>Choisissez un Praticien</option>
                            @foreach ($praticiens as $info)
                                <option value="{{ $info->PRA_NUM }}">{{ $info->PRA_NOM." ".$info->PRA_PRENOM }}</option>
                            @endforeach
                        </select>

                        <p> Date </p>

                        <input type="date" name="date"/>

                        <p> Bilan </p>

                        <input type="text" name="bilan"/>

                        <p> Motif </p>

                        <input type="text" name="motif"/>
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