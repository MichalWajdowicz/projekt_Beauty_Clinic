<!doctype html>
<html lang="pl">
        @include('shared.head')
    @include('shared.nav')

    <div id="create" class="container mt-3 mb-5">
        <a name="create">
            <h1>Dodaj nowego doktora</h1>
        </a>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" action="{{route('doctors.store')}}">
            @csrf
            <table>
                <tr><td>
            <div class="form-group mb-2">
            <label for="ime">Imie</label></td>
            <td>
            <input id="imie" name="imie" type="text">
            </div></td></tr>
            <tr><td>
            <div class="form-group mb-2">
            <label for="surname">Nazwisko</label></td>
            <td>
            <input id="nazwisko" name="nazwisko" type="text">
            </div></td></tr>
            <tr><td>
            <div class="form-group mb-2">
            <label for="opis">Opis</label></td>
            <td><textarea id="opis" name="opis"
            type="text" cols="50" rows="3"></textarea>
            <div class="invalid-feedback">Nieprawidłowa opis!</div>
            </div></td></tr>
            </table>
            <input class="btn btn-primary" type="submit" value="Wyślij">
        </form>
    </div>
@include('shared.footer')
</html>
