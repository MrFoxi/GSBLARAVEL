@extends("template")
@section('title', 'Ma Todo List')
@section('content')
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <div class="container">
        <div class="card">
            <div class="card-body">
                @if (Session::has('message'))
                    <p class="alert alert-danger">{{ Session::get('message') }}</p>
                @endif
                <!-- Action -->
                <form action="/action/add" method="post" class="add">
                    @csrf
                    <!-- << L'annotation ici ! -->
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1"><span class="oi oi-pencil"></span></span>
                        <input id="texte" name="texte" type="text" class="form-control" placeholder="Prendre une note..."
                            aria-label="My new idea" aria- describedby="basic-addon1">
                    </div>
                </form>
                Titre
                <!-- Liste -->
                <ul class="list-group">

                    @forelse ($todos as $todo)

                        <li class="list-group-item {{ $todo->termine ? 'termine' : 'encours' }}">
                            <span>{{ $todo->texte }}</span>
                            <!-- Action à ajouter pour Terminer et supprimer -->
                            <a class="btn btn-{{ $todo->termine ? 'success' : 'danger' }} btn-sm" id=""
                                href="{{ route('markAsDone', ['id' => $todo->id]) }}"><i class="fas fa-redo-alt fa-spin">      </i>{{ $todo->termine ? '   relancer' : '   Terminer' }} </a>
                            @if ($todo -> termine == 1)
                                    <a class="btn btn-primary" href="/action/delete/{{ $todo->id }}">
                                        <i class="fas fa-trash-alt fa-spin"></i>     Supprimer
                                    </a>                               
                            @endif
                            <a class="btn btn-danger" href="/action/important/{{ $todo->id }}">
                                {{ $todo->Importance ? '  Importance : Vrai' : '  Importance : Fausse' }}
                            </a>
                        </li>
                    @empty
                        <li class="list-group-item text-center">C'est vide !</li>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
@endsection
