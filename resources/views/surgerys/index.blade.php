<!doctype html>
<html lang="pl">
    @include('shared.head')
    @include('shared.nav')
<div id="doctors" class="container mt-3 mb-5 ">
    <div class="navbar">
        <h1>Zabiegi</h1>
        <button><a class="text-decoration-none color-link-black" href="{{route('surgerys.create')}}">Dodaj nowy zabieg</a></button>
    </div>
    <div class="row">
    </div>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nazwa</th>
                <th scope="col">Koszt</th>
                <th scope="col">Opis</th>
                <th scope="col">Doktor</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($surgerys as $surgery)
                <tr>
                    <th scope="row">{{$surgery->id}}</a></th>
                    <td>{{$surgery->name}}</td>
                    <td>{{$surgery->cost}}</td>
                    <td>{{$surgery->description}}</td>
                    <td>{{$surgery->doctor->name}} {{$surgery->doctor->surname}}</td>
                    <td><button><a class="text-decoration-none color-link-black" href="{{route('surgerys.edit', $surgery)}}">Edycja</a></button></td>
                    <td>
                        <form method="POST" action="{{ route('surgerys.destroy', $surgery->id) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Usuń</button>
                        </form>
                    </td>
                </tr>
            @empty
            <tr>
                <th scope="row" colspan="6">Brak zabiegów.</th>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@include('shared.footer')
</html>
