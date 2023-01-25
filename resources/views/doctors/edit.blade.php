<!doctype html>
<html lang="pl">
        @include('shared.head')
    @include('shared.nav')

    <div id="edit" class="container mt-3 mb-5">
    <a name="edit">
        <h1>Edytuj doktora</h1>
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
    <form method="POST" action="{{ route('doctors.update', $doctor) }}">
        @csrf
        @method('PUT')
        <div class="form-group mb-2">
            <label for="imie">Imie</label>
            <input id="imie" name="imie" type="text" value="{{ $doctor->name }}">
        </div>
        <div class="form-group mb-2">
            <label for="nazwisko">Nazwisko</label>
            <input id="nazwisko" name="nazwisko" type="text" value="{{ $doctor->surname }}">
        </div>
        <div class="form-group mb-2">
            <label for="opis">Opis</label>
            <input id="opis" name="opis" type="text" value="{{ $doctor->description }}">
        </div>
        <input class="btn btn-primary" type="submit" value="Wyślij">
    </form>
</div>

@include('shared.footer')
</html>
