@extends('pages.principal')
@section('content')

<div class="container-fluid px-4">
    <h1 class="mt-4">Tableau des recettes</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('afficher-recette.create')}}">Ajouter recette</a></li>
        <li class="breadcrumb-item active">Tables</li>
    </ol>
    
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            DataTable Example
        </div>
        <div class="card-body col-lg-10">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>PHOTO</th>
                        <th>NAME</th>
                        <th>Description</th>
                        <th>ingredients</th>
                        <th >ACTION</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($recettes as $value)
                    
                

                    <tr>
                        <td style="width: 20%"><div class="uImg"><img src="img/{{$value ->photo_recette}}" alt="" style="width: 100px"></div></td>
                        <td >{{$value ->nom_recette}}</td>
                        <td >{{$value ->description_recette}}</td>
                        <td >{{$value ->ingredients}}</td>
                        <td style="width: 6%">
                                {{-- <a href=""><i class="item-action fa fa-eye" data-toggle="modal"
                                        data-target="#labelModal"></i></a> --}}
                                <a href="{{route('afficher-recette.edit',$value->id_recette)}}"><i class="item-action fa fa-edit" data-toggle="modal"
                                        data-target="#labelModal"></i></a>
                               
                               <form action="{{route('afficher-recette.destroy',$value->id_recette)}}" method="POST">
                                      @csrf
                                @method("DELETE")
                                <button> <i class="item-action fa fa-trash" data-toggle="modal"
                                        data-target="#deleteItemModal"></i></button>
                            
                                    </form>
                            
                        </td>
                    </tr>
                    @empty
                    
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection