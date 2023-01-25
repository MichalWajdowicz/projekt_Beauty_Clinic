<!doctype html>
<html lang="pl">
    @include('shared.head')
    @include('shared.nav')

<div id="doctors" class="container mt-3 mb-5 ">
    <div class="navbar">
        <h1>Twój koszyk</h1>
        <button><a class="text-decoration-none color-link-black" href="{{route('surgerysUser.index')}}">Dodaj nowy zabieg</a></button>
    </div>
    <div class="row">
    </div>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th scope="col">Nazwa</th>
                <th scope="col">Koszt</th>
                <th scope="col">Data</th>
                <th scope="col">Doktor</th>
            </tr>
        </thead>
        <tbody>

            @forelse ($carts as $cart)
                <tr>
                    <td>{{$cart->surgery->name}}</td>
                    <td>{{$cart->surgery->cost}}</td>
                    <td>{{$cart->vist_date}}  <button><a class="text-decoration-none color-link-black" href="{{route('cart.edit', $cart)}}">Zmień date</a></button></td>
                    <td>{{$cart->surgery->doctor->name}} {{$cart->surgery->doctor->surname}}</td>
                    <td>
                        <form method="POST" action="{{ route('cart.destroy', $cart->id) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Usuń</button>
                        </form>
                    </td>
                </tr>
            @empty
            <tr>
                <th scope="row" colspan="6">Brak zabiegów w koszyku</th>
            </tr>
            @endforelse
        </tbody>
        <tr>
            <td>Cena {{$carts->sum('surgery.cost')}}</td>
            <td><a class="text-decoration-none color-link-black" href="{{route('cart.create')}}"><button class="btn btn-secondary">Zapłać</button></a></td>
        </tr>
    </table>
</div>

@include('shared.footer')
</html>
