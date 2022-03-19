@extends("template")
@section('content')
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<style>{
font-family: arial, sans-serif;
  border-collapse: collapse;
  widtd: 100%;
}

td, td {
  border: 2px solid #000000;
  text-align: left;
  padding: 8px;
}

</style>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <form action="action.php" metdod="post">
                </form>
                    <table>
                        <tr>
                            <td>Numero rapport</td>
                            <td>Numero praticien</td>
                            <td>Date</td>
                            <td>Bilan</td>
                            <td>Motif</td>
                        </tr>
                        @foreach($rapport_visite as $rapport)
                            <tr>
                                <td>{{$rapport['RAP_NUM']}}</td>
                                <td>{{$rapport['PRA_NUM']}}</td>
                                <td>{{$rapport['RAP_DATE']}}</td>
                                <td>{{$rapport['RAP_BILAN']}}</td>
                                <td>{{$rapport['RAP_MOTIF']}}</td>
                            </tr>
                        @endforeach
                    </table>
            </div>
        </div>
    </div>
@endsection

