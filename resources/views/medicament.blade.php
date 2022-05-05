<x-app-layout>
    <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Page Medicament') }}
    </h2>
    </x-slot>            
                
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('medicamentByID') }}" method="GET">
                        @csrf
                        <div class="form-group w-50">
                            <label for="selectMedId">Choisir Medicament :</label>
                            <select name="selectMedId" id=""
                                class="form-control bg-dark text-light mb-2 mt-2 w-25">
                                @if (isset($medicament))
                                    <option value="{{ $medicament->MED_DEPOTLEGAL }}" disabled selected>
                                        {{ $medicament->MED_NOMCOMMERCIAL }}</option>
                                    </option>
                                @endif
                                @foreach ($medicaments as $medicamentselect)
                                    <option value="{{ $medicamentselect->MED_DEPOTLEGAL }}">
                                        {{ $medicamentselect->MED_NOMCOMMERCIAL }}</option>
                                @endforeach
                            </select>
                            <button class="btn btn-success">Chercher</button>
                            <a class="btn btn-warning" href="{{ route('medicaments') }}">Afficher tout</a>

                        </div>
                    </form>
                    <div class="table-responsive">
                        <table class="table table-bordered text-light ">
                            <thead>
                                <th>Nom</th>
                                <th>Effets</th>
                                <th>Contre-Indiqué</th>
                            </thead>
                            <tbody>
                                @if (isset($medicament))
                                    <tr>
                                        <td>{{ $medicament->MED_NOMCOMMERCIAL }}</td>
                                        <td>{{ $medicament->MED_EFFETS }}</td>
                                        <td>{{ $medicament->MED_CONTREINDIC }}</td>
                                    </tr>
                                @else
                                    @foreach ($medicaments as $eachMedicament)
                                        <tr>
                                            <td>{{ $eachMedicament->MED_NOMCOMMERCIAL }}</td>
                                            <td>{{ $eachMedicament->MED_EFFETS }}</td>
                                            <td>{{ $eachMedicament->MED_CONTREINDIC }}</td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>