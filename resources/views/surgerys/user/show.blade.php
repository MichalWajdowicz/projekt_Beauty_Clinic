<!doctype html>
<html lang="pl">
    @include('shared.head')
    @include('shared.nav')
<div id="doctors" class="container mt-3 mb-5 ">
    <div class="row">
    </div>
    <section class="py-3">
        <div class="container my-3">
                    <div class="row my-3">
                <div class="col-12 col-sm-6  col-md-6 col-lg-3 mx-auto">
                    <div class="card">
                        <img src="{{ asset('img/surgery' . $surgery->id . '.jpg') }}" class="card-img-top"
                            style="height: 12vw" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $surgery->name }}</h5>
                            <p class="card-text">{{ $surgery->description }}</p>
                            <p class="card-text">Doktor prowadzący zabieg {{ $surgery->doctor->name }} {{ $surgery->doctor->surname }}</p>
                            <p class="card-text">Cena za zabieg {{ $surgery->cost }} zł</p>
                                <form action="{{ route('cart.store') }}" method="POST">
                                    @csrf
                                    <input type="hidden" value="{{ $surgery->id }}" name="surgery_id">
                                    <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">
                                    <input id="vist_date" name="vist_date" type="date"  value=""
                                         class="@error('vist_date') is-invalid @else is-valid @enderror">
                                         <div class="invalid-feedback">Data jest zajeta lub stara</div>
                                         <div></div>
                                    <button class="btn btn-primary">Dodaj do koszyka</button>
                                </form>
                        </div>
                    </div>
                </div>
        </div>
        </div>
    </section>

</div>
@include('shared.footer')
</html>
