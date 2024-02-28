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
            <h2 class="text-center">Modifica tipologia di post</h2>
        </div>
        <div class="col-12">
            <form action="{{ route("admin.types.update", $type->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method("PUT")
            <div class="form-group">
                <label class="mt-3" for="name">Nome</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Nome tipologia" required  value="{{ old("name") ?? $type->name }}">
                @error('name')
                    <div class ="text-danger">{{ $message }}</div>
                @enderror
            </div>

            
            </form>
        </div>
    </div>
</div>
</body>
@endsection