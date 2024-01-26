@extends('layouts.web')

@section('title', 'JOGUINHO - Cassino Online | Jogos de Slot e Apostas em Futebol')

@section('seo')
    <link rel="canonical" href="{{ url()->current() }}" />
    <meta name="description" content="Bem-vindo à JOGUINHO - o melhor cassino online com uma ampla seleção de jogos de slot, apostas em jogos de futebol e uma experiência de aposta fácil e divertida. Jogue Fortune Tiger, Fortune OX e muito mais!">
    <meta name="keywords" content="JOGUINHO, cassino online, jogos de slot, apostas em futebol, Fortune Tiger, Fortune OX">

    <meta property="og:locale" content="pt_BR" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="JOGUINHO - Apostas Online | Jogos de Slot e Apostas em Futebol" />
    <meta property="og:description" content="Bem-vindo à JOGUINHO - o melhor cassino online com uma ampla seleção de jogos de slot, apostas em jogos de futebol e uma experiência de aposta fácil e divertida. Jogue Fortune Tiger, Fortune OX e muito mais!" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:site_name" content="JOGUINHO - Apostas Online | Jogos de Slot e Apostas em Futebol" />
    <meta property="og:image" content="{{ asset('/assets/images/banner-1.png') }}" />
    <meta property="og:image:secure_url" content="{{ asset('/assets/images/banner-1.png') }}" />
    <meta property="og:image:width" content="1024" />
    <meta property="og:image:height" content="571" />

    <meta name="twitter:title" content="JOGUINHO - Apostas Online | Jogos de Slot e Apostas em Futebol">
    <meta name="twitter:description" content="Bem-vindo à JOGUINHO - o melhor cassino online com uma ampla seleção de jogos de slot, apostas em jogos de futebol e uma experiência de aposta fácil e divertida. Jogue Fortune Tiger, Fortune OX e muito mais!">
    <meta name="twitter:image" content="{{ asset('/assets/images/banner-1.png') }}"> <!-- Substitua pelo link da imagem que deseja exibir -->
    <meta name="twitter:url" content="{{ url('/') }}"> <!-- Substitua pelo link da sua página -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/splide-core.min.css') }}">
@endpush

@section('content')
    <div class="container">
        @include('includes.navbar_left')

        <div class="page__content">
            @include('includes.navbar_top')

              <section class="modelo-destaque-jogos">

                <section id="image-carousel" class="splide" aria-label="">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <img src="assets/images/slide1.png" alt="">
                            </li>
                            <li class="splide__slide">
                                <img src="assets/images/slide2.png" alt="">
                            </li>
                            <li class="splide__slide">
                                <img src="assets/images/slide3.png" alt="">
                            </li>
                            <li class="splide__slide">
                                <img src="assets/images/banner1.png" alt="">
                            </li>
                        </ul>
                    </div>
                </section>



         
                @if(count($events))
                    <div class="mt-2">
                        @include('includes.title', ['link' => route('web.bets.index'), 'title' => 'Esportes', 'icon' => 'fa-solid fa-futbol'])
                    </div>

                    <div class="row mt-2">
                        <div class="col-lg-4 mb-3">
                            <a href=""><img src="{{ asset('assets/images/aposta_relampago.jpg') }}" alt="" class="img-fluid rounded-4 w-full"></a>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <a href=""><img src="{{ asset('assets/images/sistema_unico.jpg') }}" alt="" class="img-fluid rounded-4 w-full"></a>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <a href=""><img src="{{ asset('assets/images/aposte_no_seu_time.jpg') }}" alt="" class="img-fluid rounded-4 w-full"></a>
                        </div>
                    </div>

                    <section id="splide-soccer" class=" splide">
                        <div class="splide__track">
                            <ul class="splide__list">
                                @foreach($events as $matche)
                                    @php
                                        $createdAt = \Carbon\Carbon::parse($matche->event_day);
                                        $dataFormatada = $createdAt->format('d/m');
                                        $nomeDiaSemana = $createdAt->translatedFormat('l');
                                        $horaFormatada = $createdAt->format('H:i');
                                    @endphp

                                    <li class="splide__slide">
                                        <div class="splide-box">
                                            @include('includes.futbol-card', [
                                               'title' => $matche->name,
                                               'reward' => $matche->betsAmounts > 0 ?  \Helper::amountFormatDecimal($matche->betsAmountsWithPercent) : 'Calculando...',
                                               'cover' => $matche->cover,
                                               'result_team_a' => $matche->event_result_a,
                                               'logo_team_a' => asset('storage/'.$matche->event_a_logo),
                                               'title_team_a' => $matche->event_a,
                                               'result_team_b' => $matche->event_result_b,
                                               'logo_team_b' => asset('storage/'.$matche->event_b_logo),
                                               'title_team_b' => $matche->event_b,
                                               'url' => url('/bets/'. base64_encode($matche->id)),
                                               'date' => $dataFormatada.' &#x2022; '.$nomeDiaSemana.' &#x2022; '.$horaFormatada,
                                               'istoday' => \Carbon\Carbon::parse($matche->event_day)->isToday(),
                                                'category' => $matche->betCategory->name
                                           ])
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </section>
                @endif
<div class="row mt-2">
                        <div class="col-lg-4 mb-3">
                            <img src="assets/images/minibanner1.png" alt="" class="img-fluid rounded-4 w-full">
                        </div>
                        <div class="col-lg-4 mb-3">
                            <img src="assets/images/minibanner2.png" alt="" class="img-fluid rounded-4 w-full">
                        </div>
                        <div class="col-lg-4 mb-3">
                            <img src="assets/images/minibanner3.png" alt="" class="img-fluid rounded-4 w-full">
                        </div>

                    </div>
                @if(count($gamesExclusives) > 0)
                    <div class="mt-5">
                        @include('includes.title', ['link' => url('/games?tab=exclusives'), 'title' => 'Jogos da Casa', 'icon' => 'fa-regular fa-gamepad-modern'])
                    </div>

                    
         
                    
                   

               <div class="d-steam-cards js-steamCards">
                                                    <a href="vgames/exclusive/mario"
                            class="d-steam-card-wrapper js-steamCard-link"
                            data-uuid="mario"
                            data-need-bet="yes">
                                <div class="d-steam-card js-steamCard" style="background-image: url('/assets/images/mario123.jpeg')"></div>
                            </a>
                                                    <a href="vgames/exclusive/sub"
                            class="d-steam-card-wrapper js-steamCard-link"
                            data-uuid="sub"
                            data-need-bet="yes">
                                <div class="d-steam-card js-steamCard" style="background-image: url('/assets/images/yzQ2SPY5RgBlRqmbRTezWP80Bb2zPf-metaY2FwYTIuanBn-.jpg')"></div>
                            </a>
                                                    <a href="vgames/exclusive/flappy"
                            class="d-steam-card-wrapper js-steamCard-link"
                            data-uuid="flappy"
                            data-need-bet="yes">
                                <div class="d-steam-card js-steamCard" style="background-image: url('/assets/images/EIHae6TkR8uzMRVdiz6fmj2yFdMq6C-metaY2FwYTMuanBn-.jpg')"></div>
                            </a>
                                                    <a href="vgames/exclusive/fruit"
                            class="d-steam-card-wrapper js-steamCard-link"
                            data-uuid="fruit"
                            data-need-bet="yes">
                                <div class="d-steam-card js-steamCard" style="background-image: url('/assets/images/CAQNfi9k4nl5IvPxNpEavm31iJpc7J-metaY2FwYTQuanBn-.jpg')"></div>
                            </a>
                                            </div>
                
                

                    <div class="d-steam-cards js-steamCards">
                        <?php 
                            $novo = array_filter( array_map(function($item) {
                                return (!in_array($item['uuid'], ['sub','mario','flappy','fruit'])) ? $item : null;
                            }, $gamesExclusives->toArray()));

                            foreach($novo as $gamee) : 
                        
                        ?>
                            <a href="{{ route('web.vgames.show', ['game' => $gamee['uuid']]) }}"
                            class="d-steam-card-wrapper js-steamCard-link"
                            data-uuid="{{ $gamee['uuid'] }}"
                            data-need-bet="{{ in_array($gamee['uuid'], ['sub','mario','flappy','fruit']) ? 'yes' : 'no' }}">
                                <div class="d-steam-card js-steamCard" style="background-image: url('storage/{{ $gamee['cover'] }}')"></div>
                            </a>
                        <?php endforeach; ?>
                    </div>
               


               

                @endif

                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                    var links = document.querySelectorAll('.js-steamCard-link');

                    links.forEach(function(link) {
                        link.addEventListener('click', function(event) {
                            var needBet = this.getAttribute('data-need-bet');
                            var gameUuid = this.getAttribute('data-uuid');
                            
                            if (needBet === 'yes') {
                                event.preventDefault();
                                
                                // Inicia o SweetAlert2 para escolha do valor da aposta
                                Swal.fire({
                                    title: 'Escolha o valor da aposta',
                                    text: 'Sua meta é 3x o valor apostado! O jogo encerra sozinho após isso.',
                                    input: 'radio',
                                    inputOptions: {
                                        '1': '1,00',
                                        '2': '2,00',
                                        '3': '3,00'
                                    },
                                    inputValidator: (value) => {
                                        if (!value) {
                                            return 'Você precisa escolher um valor!';
                                        }
                                    },
                                    confirmButtonText: 'Apostar',
                                    showCancelButton: true,
                                    cancelButtonText: 'Cancelar'
                                }).then((result) => {
                                    if (result.isConfirmed && result.value) {
                                        window.location.href = this.href + '/' + result.value;
                                    }
                                });
                            }
                        });
                    });
                });

                </script>

				{{-- @if(count($gamesExclusives) > 0)
                    <div class="mt-5">
                        -- @include('includes.title', ['link' => url('/games?tab=pragmatic'), 'title' => 'Jogos Pragmatic', 'icon' => 'fa-regular fa-gamepad-modern'])
                    </div>

                    <div class="d-steam-cards js-steamCards">
                        @foreach($gamesPragmatic as $game)
                            <a href="{{ route('web.kscinus.go', ['game' => $game->key, 'type' => $game->type]) }}" class="d-steam-card-wrapper">
                                <div class="d-steam-card js-steamCard" style="background-image: url('storage/{{ $game->cover }}')"></div>
                            </a>
                        @endforeach
                    </div>
                @endif --}}

                @if(count($gamesPopulars) > 0)
                    @include('includes.title', ['link' => url('/games?tab=popular'), 'title' => 'Populares', 'icon' => 'fa-duotone fa-stars'])

                    <div class="row mt-3">
                        @foreach($gamesPopulars as $gamep)
                            <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6 caixa-loop-elementos">
                                <a href="{{ route('web.vgames.show', ['game' => $gamep->uuid]) }}" class="inner-loop-elementos">
                                    <img src="{{ asset('storage/'.$gamep->image) }}" alt="{{ $gamep->name }}" class="img-fluid rounded-3">
                                </a>
                            </div>
                        @endforeach
                    </div>
                @endif

                @if(count($games) > 0)
                    @include('includes.title', ['link' => url('/games?tab=all'), 'title' => 'Todos os Jogos', 'icon' => 'fa-duotone fa-gamepad-modern'])

                    <div class="row mt-3">
                        @foreach($games as $game)
                            <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6 caixa-loop-elementos">
                                <a href="{{ route('web.game.index', ['slug' => $game->slug]) }}" class="inner-loop-elementos">
                                    <img src="{{ asset('storage/'.$game->image) }}" alt="{{ $game->name }}" class="img-fluid rounded-3">
                                </a>
                            </div>
                        @endforeach
                    </div>
                @endif
            </section>

            <div class="mt-5">
                @include('includes.title', ['link' => url('painel/affiliates'), 'title' => 'Afiliados', 'icon' => 'fa-light fa-face-tongue-money', 'labelLink' => 'Menu'])
            </div>

           <section class="affiliate-block">
    <div class="affiliate-block-body">
        <div class="row">
            <div class="col-lg-4">
                <img src="{{ asset('/assets/images/business_afiliado.png') }}" alt="" class="img-fluid">
            </div>
            <div class="col-lg-8">
                <div class="affiliate-info my-3">
                    <h1>SAIBA MAIS SOBRE NOSSO <span>PROGRAMA DE AFILIADOS</span></h1>
                    <p>
                        Trabalhe conosco como afiliado e obtenha lucros significativos por meio de suas indicações.
                        Oferecemos condições especiais exclusivas para nossos afiliados.
                    </p>
                    <div class="text-center mt-3">
                        <!-- Substitua 'LINK_DO_SEU_CHAT' pelo link direto para o seu chat -->
                        <a href="LINK_DO_SEU_CHAT" class="btn btn-primary btn-lg">
                            <i class="fab fa-telegram"></i> Contate-nos!
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



            <div class="mt-5">
                @include('includes.title', ['link' => url('como-funciona'), 'title' => 'F.A.Q', 'icon' => 'fa-light fa-circle-info', 'labelLink' => 'Saiba mais'])
            </div>

            @include('web.home.sections.faq')

            @include('includes.footer')
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('assets/js/splide.min.js') }}"></script>
    <script>
        document.addEventListener( 'DOMContentLoaded', function () {
            var elemento = document.getElementById('splide-soccer');

            if (elemento) {
                new Splide( '#splide-soccer', {
                    type   : 'loop',
                    drag   : 'free',
                    focus  : 'center',
                    autoplay: 'play',
                    perPage: 3,
                    arrows: false,
                    pagination: false,
                    breakpoints: {
                        640: {
                            perPage: 1,
                        },
                    },
                    autoScroll: {
                        speed: 1,
                    },
                }).mount();
            }

            new Splide( '#image-carousel', {
                arrows: false,
                pagination: false,
                type    : 'loop',
                autoplay: 'play',
            }).mount();
        } );
    </script>
@endpush

