<!doctype html>
<html lang="pl">
        @include('shared.head')
    @include('shared.nav')

    <div id="create" class="container mt-3 mb-5">
        <a name="create">
            <h1>Dodaj nowy zabieg</h1>
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
        <form method="POST" action="{{route('surgerys.store')}}">
            @csrf
            <table>
                <tr><td>
            <div class="form-group mb-2">
            <label for="name">Nazwa</label></td>
            <td>
            <input id="name" name="name" type="text" class="@error('name') is-invalid @else is-valid @enderror">
            <div class="invalid-feedback">Nieprawidłowa nazwa!</div>
            </div></td></tr>
            <tr><td>
            <div class="form-group mb-2">
            <label for="cost">Cena</label></td>
            <td>
            <input id="cost" name="cost" type="text" class="@error('cost') is-invalid @else is-valid @enderror">
            <div class="invalid-feedback">Nieprawidłowy cena!</div>
            </div></td></tr>
            <tr><td>
            <div class="form-group mb-2">
            <label for="description">Opis</label></td>
            <td><textarea id="description" name="description"
            type="text" class="@error('description') is-invalid @else is-valid @enderror" cols="50" rows="3"></textarea>
            <div class="invalid-feedback">Nieprawidłowy opis!</div>
            </div></td></tr>
            <tr>
            <div class="form-group mb-2">
                <td><label for="doctor_id">Doktor</label></td>
                <td><select name="doctor_id" class="@error('description') is-invalid @else is-valid @enderror">
                    @forelse ($doctors as $doctor)
                    <option   value="{{$doctor->id}}">{{$doctor->name}} {{$doctor->surname}}</option>
                        @empty
                    <option  >Brak doktorow</option>
                    @endforelse</td>
                </select>
            </div></tr>
            </table>
            <input type="submit" value="Wyślij">
        </form>
    </div>
@include('shared.footer')
</html>
