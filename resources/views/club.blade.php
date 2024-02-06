<x-layout>
    @foreach ($anime as $anime)
        <div class="card" style="width: 18rem;">
            <img src="{{ $anime['images']['jpg']['image_url'] }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $anime['name'] }}</h5>
                <p class="card-text">{{ $anime['members'] }} membri</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    @endforeach
</x-layout>
