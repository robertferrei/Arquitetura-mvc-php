 <x-layout.app title="series"> 

    <a href="{{route('series.create')}}" class="btn btn-dark mb-2"> Adicionar</a>    
    <ul class="list-group">
         @foreach($series as $serie):
            <li class = "list-group-item d-flex justify-content-between align-items-center">{{$serie->nome}}
               <form action="{{route('series.destroy', $serie->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger btn-sm">x</button>
               </form>
            </li>            
         @endforeach            
        
    </ul>


</x-layout.app>