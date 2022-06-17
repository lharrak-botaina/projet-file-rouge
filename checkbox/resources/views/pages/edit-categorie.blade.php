@extends('dashboard')
@section('content')


    <!-- PAGE CONTAINER-->

    <!-- HEADER DESKTOP-->


    <!-- MAIN CONTENT-->
    <div class="main-content">
        <h1 class="titre text-center ">
            <strong>MODIFIER CATEGORIE</strong>
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
    

                                        <form method="POST" action="{{route('afficher-categorie.update',$value->id)}}" enctype='multipart/form-data'
                                            class="tm-edit-product-form">
                                            @method('PUT')
                                            @csrf
                                            <div class="form-group mb-3">
                                                <input type="hidden" name="id" value="">
                                                <label for="name">Name
                                                </label>
                                                <input id="name" name="name_categorie" type="text"
                                                    class="form-control validate" required
                                                    value="{{$value->name}}">
                                            </div>
                                            {{-- <div class="col-6">
                                                <label for="cc-exp" class="control-label mb-1">ingredient</label>
                                                <select name="id" id="select" class="form-control">                                    
                                                <option selected value="{{$value->id}}">{{$value->name}}</option>
                                                
                                                @forelse ($categorie as $valuee)
                                                     
                                                    
                                                  <option value="{{$valuee->id}}">{{$valuee->name}} </option>
              
              
                                                  @empty
                                                     
                                                  @endforelse
                                                </select>
                                                <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                            </div> --}}
                                            
                                            
                                            
                                           

                                    </div>
                                    
                                    <div class="col-12">
                                        <button type="submit"
                                            class="btn btn-primary btn-block text-uppercase">Ajouter</button>
                                    </div>
                                    </form>
                                    @empty
    
                                    @endforelse
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