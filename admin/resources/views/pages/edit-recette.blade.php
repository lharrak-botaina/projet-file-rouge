@extends('pages.principal')
@section('content')


    <!-- PAGE CONTAINER-->

    <!-- HEADER DESKTOP-->


    <!-- MAIN CONTENT-->
    <div class="main-content">
        <h1 class="titre text-center ">
            <strong>MODIFIER LE recette</strong>
        </h1>
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">

                            <!-- form -->
                            <div class="card-header">Modifier</div>
                            <div class="card-body ">
                                <div class="row tm-edit-product-row  ">
                                    <div class="col-xl-6 col-lg-12 col-md-12">

                                        <!-- start modifier -->
                                        @forelse ($edit as $value)
                                        <form method="POST" action="{{route('afficher-recette.update',$value->id_recette)}}" enctype='multipart/form-data'                               
                                            class="tm-edit-product-form">
                                            @method("put")
                                             @csrf
                                          
                                                
                                           
                                            <div class="form-group mb-3">
                                                <input type="hidden"name="id" value="{{$value->id_recette}}">
                                                <label for="">Name</label>
                                                <input id="name" name="name_recette" type="text"
                                                    class="form-control validate" required
                                                    value="{{$value->nom_recette}}">
                                            </div>
                                            <div class="form-group mb-3">
                                                <input type="hidden"name="recette_ingredient" value="{{$value->ingredients}}">
                                                <input type="hidden"name="id" value="{{$value->id_recette}}">
                                                <label for="">Description</label>
                                                <input id="name" name="description_recette" type="text"
                                                    class="form-control validate" required
                                                    value="{{$value->description_recette}}">
                                            </div>
                                            @foreach ($ingredients as $item)
                                                    
                                               
                                                <div>
                                                    <input name="ingredient[]" type="checkbox" id="horns" value="{{$item->name_ingredient}}">
                                                    <label for="horns">{{$item->name_ingredient}}</label>
                                                </div>
                                                @endforeach
                                           
            
                                            
                                            

                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 ">
                                        <div class=" mx-auto">
                                            <img src="{{asset('img')}}/{{$value->photo_recette}}"
                                                class="tm-product-img-dummy mx-auto" alt="">
                                        </div>
                                        <div class="custom-file mt-3 mb-3">
                                            <input type="hidden"name="img"  value="{{$value->photo_recette}}">
                                            <input class="btn btn-primary btn-block mx-auto col-lg-6"
                                                value="" type="file" name="photo_ingredient" />
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit"
                                            class="btn btn-primary btn-block text-uppercase">Ajouter</button>
                                    </div>
                                    @empty
                                                
                                    @endforelse
                                    </form>
                                </div>
                            </div>





                        </div>

                    </div>
                </div>
                <!-- fin -->
                <div class="col-md-12">

                </div>
            </div>
        </div>
    </div>


@endsection