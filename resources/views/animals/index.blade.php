<x-layout>
    <h1>HOME PAGE</h1>

    <ul>
    @foreach($animals as $animal)
        <div class="box">
            <div class="item-image">
                @if(isset($animal->image))
                    <img src="{{ $animal->image }}" alt="{{ $animal->alt_image }}" />
                @else
                    <img src="placeholder.jpg" alt="Placeholder Image" />
                @endif
            </div>
            <ul>
                <div class="item">
                    <a href="/show/{{ $animal->id }}">
                        <li>{{ $animal->name }}</li>
                    </a>
                </div>
                <div class="item">
                    <li>- {{ $animal->animal }}</li>
                </div>
                <div class="item">
                    <li>- {{ $animal->description }}</li>
                </div>
                <div class="item">
                    <li>- {{ $animal->age }}</li>
                </div>
            </ul>
        </div>
    @endforeach
    </ul>
</x-layout>