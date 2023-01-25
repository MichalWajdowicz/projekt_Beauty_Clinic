<!doctype html>
<html lang="pl">
    @include('shared.head')
    @include('shared.nav')
<div id="doctors" class="container mt-3 mb-5 ">
    <div class="navbar">
        <h1>Wizyty</h1>
    </div>
    <div class="row">
    </div>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th scope="col">Zabieg</th>
                <th scope="col">Data</th>
                <th scope="col">Doktor</th>
                <th scope="col">Cena</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($visits as $visit)
                <tr>
                    <td>{{$visit->surgery->name}}</td>
                    <td>{{$visit->vist_date}}</td>
                    <td>{{$visit->surgery->doctor->name}} {{$visit->surgery->doctor->surname}}</td>
                    <td>{{$visit->cost}}</td>
                </tr>
            @empty
            <tr>
                <th scope="row" colspan="6">Brak wizyt.</th>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@include('shared.footer')
</html>
