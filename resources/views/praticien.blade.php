<x-app-layout>

  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Page Praticien') }}
    </h2>
</x-slot>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div class="container">
                            <div class="card">
                                <div class="card-body">
                                    <form action="action.php" metdod="post">
                                        <label for="label">recherche de praticien</label>
                                        <input type="text" name="browser" id="browser" class="form-control"/>
                                        </br>
                                            <table class="table table-dark table-striped" id="praticien">
                                                <thead>
                                                    <th>Num</th>
                                                    <th>Nom</th>
                                                    <th>Prenom</th>
                                                    <th>Adresse</th>
                                                    <th>Code postal</th>
                                                    <th>Ville</th>
                                                    <th>Notoriété</th>
                                                    <th>Type de praticien</th>
                                                </thead>
                                            @foreach($praticiens as $praticiens)
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
                    </div>
                </div>
            </div>
        </div>

<script>
    $(document).ready(function(){
        $('#browser').keyup(function(){
            search_table($(this).val()); 
        }); 

    function search_table(value){
        $('#praticien tbody tr').each(function(){
            var found = 'false';
            $(this).each(function(){
                console.log(this);
                if($(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0){
                    found ='true';
                }
            });
            if(found == 'true'){
                $(this).show();
            }
            else{
                $(this).hide();
            } 
        });
    }
    });

</script>




    
</x-app-layout>
 