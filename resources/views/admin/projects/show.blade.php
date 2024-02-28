@extends("layouts.admin")

@section("content")

<div class="container">
    <div class="row">
        <div class="col-12 mt-3">
            <h2>Nome Progetto: {{ $project->name }}</h2><hr>
            <h4 class="my-3">Immagine rappresentativa del progetto:</h4>
            @if($project->cover_image !== null)
                <img src="{{ asset("/storage/" . $project->cover_image) }}" alt="{{ $project->name}}" width="150" >
            @else
            <img src="{{ asset("/img/placeholder1.jpg") }}" alt="{{ $project->name}}" width="150">
            @endif
            <p class="my-2">
                <h4>Tech utilizzata/e:</h4>
                @forelse($project->technologies as $technology)
                #{{ $technology->name }}
                @empty
                    Nessuna tech selezionata per questo progetto
                @endforelse
            </p><hr>
            <p><h4>Descrizione:</h4>{{ $project->description }}</p><hr>
            <p><h4>Tipologia di progetto:</h4> {{ $project->type->name }}</p><hr>
            <p><h4>Progetto assegnato da:</h4> {{ $project->assigned_by }}</p><hr>
            </div>
    </div>
</div>


@endsection