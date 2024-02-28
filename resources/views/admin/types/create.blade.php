@extends("layouts.admin")

@section("content")
<div class="container">
    <div class="row">
        <div class="col-12">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            <h2 class="text-center">Inserisci nuovo progetto</h2>
        </div>
        <div class="col-12">
            <form action="{{ route("admin.types.store")}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="mt-3" for="name">Titolo</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Nome tipologia" required  value="{{ old("name") }}">
                @error('name')
                    <div class ="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <a href="{{ route("admin.projects.index")}}"><button type="submit" class="btn btn-primary mt-3 ">Salva</button></a>
            
            </form>
        </div>
    </div>
</div>
</body>
@endsection