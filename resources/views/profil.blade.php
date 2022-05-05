<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Mon Profil') }}
        </h2>
    </x-slot>

    <br/>
      <div class="flex w-full justify-center">
        <div id="tab" class=" w-10 h-10 focus:text-teal-500 hover:text-teal-500 flex py-1 justify-center">
          <a href="#">
            <svg xmlns="http://www.w3.org/2000/svg" class="text-green-400 h-16 w-16 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>         
            </svg>
          </a>
        </div>
      </div>

      <div class="py-12">
        <div class="  mx-auto w-64  mb-24 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <x-label for="nom" :value="__('Nom')" />
            <p> {{ Auth::user()->VIS_NOM }} </p>
            <x-label for="nom" :value="__('Prénom')" />
            <p> {{ Auth::user()->Vis_PRENOM }} </p>
            <x-label for="nom" :value="__('Adresse')" />
            <p> {{ Auth::user()->VIS_ADRESSE }} </p>
            <x-label for="nom" :value="__('Code Postal')" />
            <p> {{ Auth::user()->VIS_CP }} </p>
            <x-label for="nom" :value="__('Ville')" />
            <p> {{ Auth::user()->VIS_VILLE }} </p>
            <x-label for="nom" :value="__('Date Embauche')" />
            <p> {{ Auth::user()->VIS_DATEEMBAUCHE }} </p>
        </div>
      </div>

      <center><a href="editprofil">Modifier le profil</a></center>

</x-app-layout>
