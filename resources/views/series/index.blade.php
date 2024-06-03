 <x-layout.app title="series"> 
 

    <ul>
         @foreach($series as $serie):
            <li>{{$serie}}</li>            
         @endforeach            
        
    </ul>


</x-layout.app>