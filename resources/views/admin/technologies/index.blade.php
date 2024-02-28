@extends("layouts.admin")

@section("content")
    <div class="container">
        <div class="row">
            <div class="col-12 mt-4">
               <div class="d-flex justify-content-between">
                    <div>
                        <h2>All Technologies</h2>
                    </div>
                    <a href=" {{ route("admin.technologies.create") }}"><button class="btn btn-primary">Add New tech</button></a>
               </div>
               <div>
            </div>    
            </div>
            <div class="col-12">
                <table class=" table mt-3 table-stipred">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Project count</th>
                            <th>Tools</th>
                        </tr>
                    </thead>
                    <tbody>
                          @foreach($technologies as $technology)
                            <tr>
                                <td>{{ $technology->id}}</td>
                                <td>{{ $technology->name}}</td>
                                <td>{{ $technology->slug}}</td>
                                <td>{{ count($technology->projects) }}</td> 
                                <td>
                                    <a href="{{ route("admin.technologies.show", ["technology" => $technology->id])}}" class="btn btn-sm btn-square btn-primary"><i class=" fa-solid fa-eye"></i></a>
                                    <a href="{{ route("admin.technologies.edit", ["technology" => $technology->id])}}" class="btn btn-sm btn-square btn-warning"><i class=" fa-solid fa-edit"></i></a>
                                    <button class="btn btn-sm btn-square btn-danger" data-bs-toggle="modal" 
                                        data-bs-target="#modal_technology_delete-{{ $technology->id }}" 
                                        data-id= "{{ $technology->id }}" data-name="{{ $technology->name }}"  data-technology="technologies">Elimina
                                    </button>
                                     @include("admin.technologies.modal_tech_delete") 
                                </td>
                            </tr>
                            @endforeach  
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
    @endsection