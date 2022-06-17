@extends('dashboard')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Tableau des categories</h1>
    <ol class="breadcrumb mb-3">
        <li class="breadcrumb-item"><a href="{{route('afficher-categorie.create')}}">Ajouter categorie</a></li>
        <li class="breadcrumb-item active">Tables</li>
    </ol>
    
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            DataTable Example
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                       
                        <th>NAME</th>
                       
                        <th>ACTION</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($categorie as $value)
                        
                  
                    <tr>
                       
                       
                        <td>{{$value->name}}</td>
                        
                       
                        <td>                        
                            {{-- <a href=""><i class="item-action fa fa-eye" data-toggle="modal"
                                    data-target="#labelModal"></i></a> --}}
                            <a href="{{route('afficher-categorie.edit',$value->id)}}"><i class="item-action fa fa-edit" data-toggle="modal"
                                    data-target="#labelModal"></i></a>
                            
                                    <form action="{{route('afficher-categorie.destroy',$value->id)}}" method="POST">
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

@endsection