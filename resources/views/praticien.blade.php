@extends("template")
@section('content')
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<style>
    
</style>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <form action="action.php" metdod="post">
                    <label for="label">recherche</label>
                    <input list="browsers" name="browser" id="browser">
                        <datalist id="browsers">
                        </datalist>
                        <table class="table table-dark table-striped">
                            <tr>
                                <th>Num</th>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Adresse</th>
                                <th>Code postal</th>
                                <th>Ville</th>
                                <th>Notoriété</th>
                                <th>Type de praticien</th>
                            </tr>
                        @foreach($praticien as $praticiens)
                            <tr>
                                <td>{{$praticiens['PRA_NUM']}}</td>
                                <td>{{$praticiens['PRA_NOM']}}</td>
                                <td>{{$praticiens['PRA_PRENOM']}}</td>
                                <td>{{$praticiens['PRA_ADRESSE']}}</td>
                                <td>{{$praticiens['PRA_CP']}}</td>
                                <td>{{$praticiens['PRA_VILLE']}}</td>
                                <td>{{$praticiens['PRA_COEFNOTORIETE']}}</td>
                                <td>{{$praticiens['TYP_CODE']}}</td>
                            </tr>
                        @endforeach
                    </table>
                </form>
            </div>
        </div>
    </div>
@endsection

