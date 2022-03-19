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
                            @foreach($praticien as $praticiens)
                             <option value="{{$praticiens['PRA_NOM']}} {{$praticiens['PRA_PRENOM']}}">
                            @endforeach
                        </datalist>
                </form>
            </div>
        </div>
    </div>
@endsection

