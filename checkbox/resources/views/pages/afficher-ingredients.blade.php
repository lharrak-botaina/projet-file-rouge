
 
<form action=" {{route('stock.store')}}" method="post">
@csrf
 

 
                 <tbody>
                  @forelse ($ingredients as $value)
                  <tr>
                   <td>
                    <input type="checkbox" class="larger" name="ingredients"  value="{{$value->id_ingredient}}" >{{$value->name_ingredient}}
                   </td>
                  </tr>
                  @empty
     
                  @endforelse
                   
                </tbody>
            
           </table>
<button>ajouter</button>
          </form>