<!doctype html>
<html lang="pl">
        @include('shared.head')
    @include('shared.nav')

    <div id="edit" class="container mt-3 mb-5">
    <a name="edit">
        <h1>Edytuj date wizyty</h1>
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
    <form method="POST" action="{{ route('cart.update', $carts) }}">
        @csrf
        @method('PUT')
        <div class="form-group mb-2">
            <label for="name">Data</label>
            <input id="vist_date" name="vist_date" type="date"  value="{{$carts->vist_date}}"
            class="@error('vist_date') is-invalid @else is-valid @enderror">
            <input id="surgery_id" name="surgery_id" type="number" hidden  value="{{$carts->surgery_id}}">
            <div class="invalid-feedback">Data jest zajeta lub stara </div>


        </div>
        <input type="submit" value="Zmień">

    </form><br>
    <a href="{{route('cart.show',Auth::id())}}"><button >Powrót</button></a>
</div>

@include('shared.footer')
</html>
