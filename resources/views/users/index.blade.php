<!doctype html>
<html lang="pl">
    @include('shared.head')
    @include('shared.nav')
<div id="doctors" class="container mt-3 mb-5 ">
    <div class="navbar">
        <h1>Użytkownicy</h1>
        <button><a class="text-decoration-none color-link-black" href="{{route('users.create')}}">Dodaj nowego uzytkownika</a></button>
    </div>
    <div class="row">
    </div>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Imie</th>
                <th scope="col">Nazwisko</th>
                <th scope="col">Płec</th>
                <th scope="col">Email</th>
                <th scope="col">Nr Telefonu</th>
                <th scope="col">Rola</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
                <tr>
                    <th scope="row">{{$user->id}}</a></th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->surname}}</td>
                    <td>{{$user->gender}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->number}}</td>
                    <td>{{$user->role->name}}</td>
                    <td><button><a class="text-decoration-none color-link-black" href="{{route('users.edit', $user)}}">Edycja</a></button></td>
                    <td>
                        <form method="POST" action="{{ route('users.destroy', $user->id) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Usuń</button>
                        </form>
                    </td>
                </tr>
            @empty
            <tr>
                <th scope="row" colspan="6">Brak uzytkowników.</th>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@include('shared.footer')
</html>
