<!doctype html>
<html lang="pl">
        @include('shared.head')
    @include('shared.nav')

    <div id="edit" class="container mt-3 mb-5">
    <a name="edit">
        <h1>Edytuj zabieg</h1>
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
    <form method="POST" action="{{ route('surgerys.update', $surgery) }}">
        @csrf
        @method('PUT')
        <div class="form-group mb-2">
            <label for="nazwa">Nazwa</label>
            <input id="nazwa" name="nazwa" type="text" value="{{ $surgery->name }}">
        </div>
        <div class="form-group mb-2">
            <label for="cena">Cena</label>
            <input id="cena" name="cena" type="text" value="{{ $surgery->cost }}">
        </div>
        <div class="form-group mb-2">
            <label for="opis">Opis</label>
            <input id="opis" name="opis" type="text" value="{{ $surgery->description }}">
        </div>
            <div class="form-group mb-2">
                <label for="doctor_id">Doktor</label>
                <select name="doctor_id" class="@error('doctor') is-invalid @else is-valid @enderror">
                    @forelse ($doctors as $doctor)
                    <option   value="{{$doctor->id}}" @if ($doctor->id == $surgery ->doctor_id) selected @endif>{{$doctor->name}} {{$doctor->surname}}</option>
                        @empty
                    <option  >Brak doktorów</option>
                    @endforelse
                </select>
            </div>
        <input type="submit" value="Wyślij">
    </form>
</div>

@include('shared.footer')
</html>
