<!DOCTYPE html>
<html lang="en">

@include('shared.head')

<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
        @include('shared.nav')
        <!-- Header-->
        <header class="bg-dark py-5 hero-section">
            <div class="hero-section-text">
                <h1> Beauty Clinic</h1>
                <p>Najlepsza klnika w polsce!</p>
            </div>
            </div>
        </header>
        <!-- Chooseus Section Begin -->
        <section class="chooseus spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="section-title">
                            <h2>Oferujemy tobie</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-8 col-sm-8">
                        <div class="chooseus__item">
                            <img src="img/c1.png" alt="">
                            <h5>Zaawansowany sprzęt</h5>
                            <p>Posiadamy najbardziej zaawansowany sprzęt medyczny.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-8 col-sm-8">
                        <div class="chooseus__item">
                            <img src="img/c2.png" alt="">
                            <h5>Wykwalifikowani lekarze</h5>
                            <p>Nasi lekarze są jednym z najlepszych specjalistów w Europie.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-8 col-sm-8">
                        <div class="chooseus__item">
                            <img src="img/c3.png" alt="">
                            <h5>Certyfikowane usługi</h5>
                            <p>Nasze usługi posiadają certyfikaty jakości.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Features section-->
         <section class="py-5" id="features">
            <div class="container my-5">
                <a name="Zabiegi">
                    <h1>Zabiegi</h1>
                </a>
                @forelse ($surgerys as $surgery)
                    @if ($loop->index % 4 == 0)
                        <div class="row my-3">
                    @endif
                    <div class="col-12 col-sm-6  col-md-6 col-lg-3 mx-auto">
                        <div class="card">
                            <img src="{{ asset('img/surgery' . $surgery->id . '.jpg') }}" class="card-img-top"
                                style="height: 12vw" alt="...">
                            <div class="card-body ">
                                <h5 class="card-title">{{ $surgery->name }}</h5>
                                <p class="card-text text-zaw " style="height: 15vw">{{ $surgery->description }}</p>
                                <a href={{ route('surgerysUser.show', $surgery->id) }}><button class="btn btn-primary">Wiecej szczegółow</button></a>

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

         <section class="py-5" id="doctors">
            <div class="container my-5">
                <a name="Doktorzy">
                    <h1>Doktorzy</h1>
                </a>
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @forelse ($doctors as $doctor)
                            @if ($loop->first)
                                <div class="carousel-item active">
                                    <div class="row d-flex justify-content-center">
                                        <div class="col-md-6">
                                            <div class="card mb-2">
                                                <img class="card-img-top text-center"
                                                src="{{ asset('img/doctor' . $doctor->id . '.jpg') }}"
                                                    alt="Card image cap">
                                                <div class="card-body">
                                                    <h4 class="card-title">{{$doctor->name}} {{$doctor->surname}}</h4>
                                                    <p class="card-text">{{$doctor->description}}</p>
                                                </div> <!-- Add div close here -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="carousel-item ">
                                    <div class="row d-flex justify-content-center">
                                        <div class="col-md-6">
                                            <div class="card mb-2">
                                                <img class="card-img-top text-center"
                                                src="{{ asset('img/doctor' . $doctor->id . '.jpg') }}"
                                                    alt="Card image cap">
                                                <div class="card-body">
                                                    <h4 class="card-title">{{$doctor->name}} {{$doctor->surname}}</h4>
                                                    <p class="card-text">{{$doctor->description}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            @endif
                        @empty
                        @endforelse
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                        <br />
                    </div>
                </div>
        </section>

        <!-- Testimonial section-->
        <div class="py-5 bg-light">
            <div class="container px-5 my-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-10 col-xl-7">
                        <div class="text-center">
                            <div class="fs-4 mb-4 fst-italic">"Chirurgia plastyczna to jedna z najstarszych dziedzin medycyny.
                                Bardzo mocno rozwinęła się ona na przestrzeni lat i pomaga pacjentom uporać się z różnymi niedoskonałościami urody."</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer-->
        @include('shared.footer')

</body>

</html>
