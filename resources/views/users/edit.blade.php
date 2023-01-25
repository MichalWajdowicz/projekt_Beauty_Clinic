<!doctype html>
<html lang="pl">
        @include('shared.head')
    @include('shared.nav')

    <div id="edit" class="container mt-3 mb-5">
    <a name="edit">
        <h1>Edytuj uzytkownika</h1>
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
    <form method="POST" action="{{ route('users.update', $user) }}">
        @csrf
        @method('PUT')
        <div class="form-group mb-2">
            <label for="name">Imie</label>
            <input id="imie" name="imie" type="text" value="{{ $user->name }}">
        </div>
        <div class="form-group mb-2">
            <label for="nazwisko">Nazwisko</label>
            <input id="nazwisko" name="nazwisko" type="text" value="{{ $user->surname }}">
        </div>
        <div class="form-group mb-2">
            <label for="description">Płec</label>
            <input id="płeć" type="radio" name="płeć" value="female" @if($user->gender == 'female') checked @endif>Kobieta
            <input id="płeć" type="radio" name="płeć" value="male"   @if($user->gender == 'male') checked @endif>Mężczyzna
        </div>
        <div class="form-group mb-2">
            <label for="email">Email</label>
            <input id="email" name="email" type="text" value="{{ $user->email }}">
        </div>
        <div class="form-group mb-2">
            <label for="telefon">Nr Telefonu</label>
            <input id="telefon" name="telefon" type="text" value="{{ $user->number }}">
        </div>
        <div class="form-group mb-2">
            <label for="rola">Rola</label>
            <select name="rola">
                <option @if($user->role_id == '1') selected @endif value="1">Admin</option>
                <option @if($user->role_id == '2') selected @endif value="2">Uzytkownik</option>
            </select>
        </div>
        <input type="submit" value="Wyślij">
    </form>
    <br>
    <a href="{{route('users.index')}}"><button >Powrót</button></a>
</div>

@include('shared.footer')
</html>
