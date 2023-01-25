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
        <form method="POST" action="{{route('users.store')}}">
            @csrf
            <div class="form-group mb-2">
                <label for="name">Imie</label>
                <input id="imie" name="imie" type="text">
            </div>
            <div class="form-group mb-2">
                <label for="nazwisko">Nazwisko</label>
                <input id="nazwisko" name="nazwisko" type="text">
            </div>
            <div class="form-group mb-2">
                <label for="hasło">Hasło</label>
                <input id="hasło" name="hasło" type="password">
            </div>
            <div class="form-group mb-2">
                <label for="description">Płeć</label>
                <input id="płeć" type="radio" name="płeć" value="female" >Kobieta
                <input id="płeć" type="radio" name="płeć" value="male"   >Mężczyzna
            </div>
            <div class="form-group mb-2">
                <label for="email">Email</label>
                <input id="email" name="email" type="text">
            </div>
            <div class="form-group mb-2">
                <label for="telefon">Nr Telefonu</label>
                <input id="telefon" name="telefon" type="text">
            </div>
            <div class="form-group mb-2">
                <label for="rola">Rola</label>
                <select name="rola">
                    <option value="1">Admin</option>
                    <option selected value="2">Uzytkownik</option>
                </select>
            </div>
            <input class="btn btn-primary" type="submit" value="Wyślij">
        </form>
    </div>
@include('shared.footer')
</html>
