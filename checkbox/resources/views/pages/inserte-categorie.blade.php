@extends('dashboard')
@section('content')
<div class="main-content">
    <h1 class="titre text-center ">
   <strong>Ajouter categorie</strong>
   </h1>
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">

                            <!-- form -->
                            <div class="card-header">Ajouter categorie</div>
                            <div class="card-body">
                                
                            
                                <form action="{{route('afficher-categorie.store')}}"  method="POST" novalidate="novalidate"   enctype="multipart/form-data">
                                
                                
                                @csrf 
                                   <div class="row">
                
                                     </div>
                                     <div class="row">
                                        <div class="col-6">
                                            <div class="form-group ">
                                                <label for="cc-exp" class="control-label mb-1">Name</label>
                                                <input id="cc-exp" name="name_categorie" type="text" class="form-control cc-exp" value="" data-val="true" data-val-required="Please enter the card expiration"
                                                    data-val-cc-exp="Please enter a valid month and year"
                                                    autocomplete="cc-exp">
                                                <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                            </div>
                                        </div>
                                         <div class="col-6">
                                            <label for="cc-exp" class="control-label mb-1">ingredient</label>
                                            <select name="id_ingredient" id="select" class="form-control">                                    
                                            <option selected>Select category</option>
                                             @forelse ($ingredient as $value)
                                                 
                                              <option value="{{$value->id_ingredient}}">{{$value->name_ingredient}} </option>
          
          
                                              @empty
                                                 
                                              @endforelse
                                            </select>
                                            <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                        </div>
                                        
                                        
                                        
                                    </div>
                                       
                                        
                    
                                        
                                    </div>
                                    <div class="">
                                        <button class="btn btn-info au-btn--block " type="submit"> Ajouter </button>

                                      
                                    </div>
                                 </div>
                                
                                </form>
                            </div>
                        </div>
                        <!-- fin -->                        
                    <div class="col-md-12">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection