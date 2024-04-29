<x-layout>
    HI

    <ul>
    @foreach($animals as $animal)
        <a href="/show/{{$animal->id}}">
        <li> {{$animal->name}}</li>
        </a>
        <li style="none">- {{$animal->animal}}</li>
        <li style="none">- {{$animal->description}}</li>
        <li style="none">- {{$animal->age}}</li>
    @endforeach
    </ul>
</x-layout>