<!doctype html>
<html lang="pl">
    @include('shared.head')
    @include('shared.nav')
<div id="doctors" class="container mt-3 mb-5 ">
    <div class="navbar">
        <h1>Doktorzy</h1>
        <button><a class="text-decoration-none color-link-black" href="{{route('doctors.create')}}">Dodaj nowego doktora</a></button>
    </div>
    <div class="row">
    </div>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Imie</th>
                <th scope="col">Nazwisko</th>
                <th scope="col">Opis</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($doctors as $doctor)
                <tr>
                    <th scope="row">{{$doctor->id}}</a></th>
                    <td>{{$doctor->name}}</td>
                    <td>{{$doctor->surname}}</td>
                    <td>{{$doctor->description}}</td>
                    <td><button><a class="text-decoration-none color-link-black" href="{{route('doctors.edit', $doctor)}}">Edycja</a></button></td>
                    <td>
                        <form method="POST" action="{{ route('doctors.destroy', $doctor->id) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Usuń</button>
                        </form>
                    </td>
                </tr>
            @empty
            <tr>
                <th scope="row" colspan="6">Brak doktorow.</th>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@include('shared.footer')
</html>
