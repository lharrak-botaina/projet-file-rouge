@forelse ($recettes as $item)
    

{{$item->nom_recette}}

@empty
    
@endforelse