<x-layout>
    <h1>Lista anime</h1>
    <div class="container">
        <div class="row">
            <div class="col-4">
                @foreach ($dati as $anime)
                    <ul>
                        <li><a href="{{route('generi',['genre'=>$anime['mal_id']])}}">{{$anime['name']}}</a></li>
                    </ul>
                @endforeach
            </div>
        </div>
    </div>
</x-layout>