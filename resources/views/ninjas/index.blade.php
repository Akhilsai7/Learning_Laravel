
<x-layout>
   <h2>Currently Available Ninjas</h2>
        @foreach ($ninjas as $ninja)
            <li>
               <x-card href="{{ route('ninjas.show', $ninja->id)}}" :highlight="$ninja['Skill'] > 80">
                   <div>
                    <h3>{{$ninja->name}}</h3>
                    <p>{{$ninja->dojo->name}}</p>
                   </div>
               </x-card>
            </li>

        @endforeach
   </ul>

   {{ $ninjas->links() }}
</x-layout>


