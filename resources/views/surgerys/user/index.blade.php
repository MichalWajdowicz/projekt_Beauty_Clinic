<!doctype html>
<html lang="pl">
    @include('shared.head')
    @include('shared.nav')
<div id="doctors" class="container mt-3 mb-5 ">
    <div class="navbar">
        <h1>Zabiegi</h1>
    </div>
    <div class="row">
    </div>
    <section class="py-5">
        <div class="container my-5">
            @forelse ($surgerys as $surgery)
                @if ($loop->index % 4 == 0)
                    <div class="row my-3">
                @endif
                <div class="col-12 col-sm-6  col-md-6 col-lg-3 mx-auto">
                    <div class="card">
                        <img src="{{ asset('img/surgery' . $surgery->id . '.jpg') }}" class="card-img-top"
                            style="height: 12vw" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $surgery->name }}</h5>
                            <p class="card-text text-zaw " style="height: 15vw">{{ $surgery->description }}</p>
                            <p class="card-text">Doktor prowadzący zabieg {{ $surgery->doctor->name }} {{ $surgery->doctor->surname }}</p>
                            <p class="card-text">Cena za zabieg {{ $surgery->cost }} zł</p>
                            <a  href = "{{ route('surgerysUser.show', $surgery->id) }}"><button class="btn btn-primary">Wybierz oferte</button></a>
                        </div>
                    </div>
                </div>
                @if ($loop->iteration % 4 == 0)
        </div>
        @endif
    @empty
        @endforelse
        </div>
    </section>

</div>
@include('shared.footer')
</html>
