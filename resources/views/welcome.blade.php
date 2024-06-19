@extends('layoutsUser.app')

@section('title')
    <title>Urbain 5</title>
@endsection

@section('content')

    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top">
        <video autoplay muted loop id="bg-video">
            <source src="https://urbainfive.com/img/videocomplexe.mp4" type="video/mp4"/>
        </video>

        <div class="video-overlay header-text">
            <div class="caption">
                <h6>Travaillez plus dur, devenez plus fort</h6>
                <h2>Urbain5 Marrakech <em>Marrakech</em></h2>
                <div class="main-button scroll-to-section">
                    <a href="#features">Devenir membre</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Features Item Start ***** -->
    <section class="section" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Choisissez <em> Un Programme</em></h2>
                        <img src="assets/images/line-dec.png" alt="waves">
                        <p>URBAIN FIVE est un COMPLEXE SPORTIF de 5000 M2 dédié au sport. URBAIN FIVE propose une impressionnante gamme d’activités pour toute la famille, une équipe dynamique et professionnelle répondant à toutes vos demandes. En choisissant URBAIN FIVE vous ne serez pas déçus car c’est : Le plus grand complexe sportif à Marrakech Des installations intérieure et extérieure haut de gamme Des équipements sportifs de dernière génération Des coaches diplômés et à votre écoute Du sport pour les grands et les petits : football, fitness, boxe, karaté, Jiujitsu… Une académie de football parmi les meilleurs de Marrakech Des terrains de football à la location avec des pelouses neuves et sous couches pour votre confort cértifiée par la FIFA</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="https://cdn-icons-png.flaticon.com/128/3482/3482605.png " alt="First One">
                            </div>
                            <div class="right-content">
                                <h4>Fitness Mixte</h4>
                                <p>Le Fitness Mixte mélange le fitness, le crossfit, le kick boxing ainsi que l’entraînement cardio. En plus, de brûler des calories et d’améliorer votre condition cardio vasculaire, vous travaillez la musculation. Cela permet d’affiner la silhouette et de renforcer vos muscles afin de réduire le risque de blessures lors de futures activités sportives.</p>
                                <a href="#" class="text-button">Découvrir plus</a>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="https://cdn-icons-png.flaticon.com/128/2964/2964546.png" alt="second one">
                            </div>
                            <div class="right-content">
                                <h4>Fitness 100% Femmes</h4>
                                <p>Un environnement exclusivement féminin pour un confort optimal. Nos espaces dédiés offrent une atmosphère accueillante où chaque femme peut s’entraîner en toute confiance.</p>
                                <a href="#" class="text-button">Découvrir plus</a>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="https://cdn-icons-png.flaticon.com/128/2548/2548532.png" alt="third gym training">
                            </div>
                            <div class="right-content">
                                <h4>Musculation</h4>
                                <p>Tu débutes la musculation, le fitness et cherches le meilleur programme de musculation selon ton objectif ? Tu as déjà quelques années de pratique et tu as besoin de conseils pour progresser ? Urbain 5 partage avec toi son savoir-faire à travers des programmes musculation gratuits homme ou femme pour te permettre d’aller plus loin dans tes résultats : prise de masse, prise de muscle, sèche, fitness ou perte de poids.</p>
                                <a href="#" class="text-button">Découvrir plus</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="https://cdn-icons-png.flaticon.com/128/4049/4049083.png" alt="fourth muscle">
                            </div>
                            <div class="right-content">
                                <h4>Football</h4>
                                <p>Au football, on peut différencier deux temps forts à savoir la pré-saison et la saison. Lors de la pré-saison, vous allez, certes vous octroyer quelques semaines de repos mais il est important de ne pas rester inactif durant 2 mois. Généralement, un programme inter-saison dure entre 4 et 6 semaines. C’est le moment idéal pour gagner de la masse musculaire, tout en améliorant sa condition physique générale.</p>
                                <a href="#" class="text-button">Découvrir plus</a>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="https://www.slotstemple.com/img/game_tiles/cage-fight.jpg" alt="training fifth">
                            </div>
                            <div class="right-content">
                                <h4>Free Fight</h4>
                                <p>Le Free Fight Club est géré par un coache diplomé d'état.
                                Il entraîne une équipe de combattants professionnels mais s'adresse aussi aux pratiquants loisir, enfants et adultes recherchant une méthode d'entretien physique ou de self-défense.
                                </p>
                                <a href="#" class="text-button">Découvrir plus</a>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="https://t4.ftcdn.net/jpg/05/12/73/49/240_F_512734977_NvQ72scbjiNVlQyBNxW0aLhnlCJzdsEg.jpg" alt="gym training">
                            </div>
                            <div class="right-content">
                                <h4>Jiu-Jitsu Brésilien</h4>
                                <p> Jiu Jitsu Brésilien vous accueille et propose un ensemble de services et d'activités : Ju-Jitsu traditionnel, et autres.  Jiu Jitsu Brésilien est un club des arts martiaux pour enfants et adultes.</p>
                                <a href="#" class="text-button">Découvrir plus</a>
                            </div> 
                            </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="https://icon2.cleanpng.com/20180531/hyt/kisspng-nada-ku-kobe-sport-nishi-ku-kobe-hygo-ku-kobe-bubble-soccer-5b0fb3756c36e2.5496464115277556374433.jpg" alt="gym training">
                            </div>
                            <div class="right-content">
                                <h4>Bubble Football</h4>
                                <p>Urbain 5 vous offre une nouvelle activité sportive « Le Bubble Football » qui associe le football traditionnel à un costume sous forme de bulle vous permettant de frapper dans un ballon tout en rebondissant, flottant, roulant et s’entrechoquant en toute sécurité.
Les bulles entourent les joueurs de la mi-cuisse jusqu’à 15-20 cm au-dessus de la tête. Ils peuvent aisément courir, taper dans la balle, et éclater les autres joueurs en toute sécurité pour marquer.
Venez donc nombreux fêter de manière originale votre anniversaire ou organiser votre team building ou simplement vous amuser.</p>
                                <a href="#" class="text-button">Découvrir plus</a>
                            </div> 
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Item End ***** -->

    <!-- ***** Call to Action Start ***** -->
    <section class="section" id="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <h2>Ne <em>pensez pas</em>, commencez <em>aujourd'hui</em>!</h2>
                        <p>Gagner, ce n’est pas finir en première position. Ce n’est pas battre les autres. Gagner c’est se vaincre soi-même. Vaincre notre corps, nos limites et nos peurs. Gagner, c’est se dépasser soi-même et transformer les rêves en réalité.</p>
                        <div class="main-button scroll-to-section">
                            <a href="#our-classes">Devenir membre</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Call to Action End ***** -->

    <!-- ***** Our Classes Start ***** -->
    <section class="section" id="our-classes">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Nos <em>Cours</em></h2>
                        <img src="assets/images/line-dec.png" alt="">
                        <p>Notre salle vous présente plusieurs cours comme on a différents activités que se soit individulles ou collectives.</p>
                    </div>
                </div>
            </div>
            <div class="row" id="tabs">
                <div class="col-lg-4">
                    <ul>
                        <li><a href='#tabs-1'><img src="assets/images/tabs-first-icon.png" alt="">Premier Cours d'entrainement</a>
                        </li>
                        <li><a href='#tabs-2'><img src="assets/images/tabs-first-icon.png" alt="">Deuxième Cours d'entrainement</a></a></li>
                        <li><a href='#tabs-3'><img src="assets/images/tabs-first-icon.png" alt="">Troisième Cours d'entrainement</a></a></li>
                        <li><a href='#tabs-4'><img src="assets/images/tabs-first-icon.png" alt="">Quatrième Cours d'entrainement</a></a></li> 
                        <li><a href='#tabs-5'><img src="assets/images/tabs-first-icon.png" alt="">Cinquième Cours d'entrainement</a></a></li> 
                        <li><a href='#tabs-6'><img src="assets/images/tabs-first-icon.png" alt="">Sixième Cours d'entrainement</a></a></li> 
                        <li><a href='#tabs-7'><img src="assets/images/tabs-first-icon.png" alt="">Septième Cours d'entrainement</a></a></li> 
                        <div class="main-rounded-button"><a href="#">Voir Tous Les Emplois</a></div>
                    </ul>
                </div>
                <div class="col-lg-8">
                    <section class='tabs-content'>
                        <article id='tabs-1'>
                            <img src="https://previews.123rf.com/images/oneinchpunch/oneinchpunch1908/oneinchpunch190800075/128958084-mixed-race-group-of-athlete-at-the-gym.jpg" alt="Premier Cours">
                            <h4>Premier Cours d'entrainement</h4>
                            <p>Fitness Mixte vous apprend à effectuer des séries d’exercices de cardio, de gainage et de musculation.

Cette classe est pratiquée en groupe avec un coach sportif, une dynamique s’installe on repousse ses limites physiques.</p>
                            <div class="main-button">
                                <a href="#">Voir Emploi</a>
                            </div>
                        </article>
                        <article id='tabs-2'>
                            <img src="https://centre-nobelium.fr/wp-content/uploads/2020/07/salle-de-sport-femme-lyon-1.jpg" alt="Deuxième Formation">
                            <h4>Deuxième Cours d'entrainement</h4>
                            <p>Fitness 100% Femmes propose des circuits fitness et minceur dédiés aux femmes. La spécificité de ces salles est qu’elles répondent à des besoins typiquement féminins. Elles permettent également de s’entrainer entre femmes et être encadrées par des femmes. Cela peut avoir pour avantage de se sentir avancer dans une atmosphère cocooning. Pour les plus pudiques c’est également une bonne alternative..</p>
                            <div class="main-button">
                                <a href="#">Voir Emploi</a>
                            </div>
                        </article>
                        <article id='tabs-3'>
                            <img src="https://www.ericfavre.com/lifestyle/wp-content/uploads/2020/06/methode-de-muscu.jpg" alt="Troisième Cours">
                            <h4>Troisième Cours d'entrainement</h4>
                            <p>Musculation est un programme qui entrainera l’ensemble des muscles de votre corps dans une même séance. L’objectif est de vous faire répéter chaque geste, chaque mouvement plusieurs fois par semaine afin qu’il soit bien réalisé et en toute sécurit.</p>
                            <div class="main-button">
                                <a href="#">Voir Emploi</a>
                            </div>
                        </article>
                        <article id='tabs-4'>
                            <img src="https://www.truro-penwith.ac.uk/app/uploads/2023/01/Male-Football-Academy.jpg" alt="Quatrième Formation">
                            <h4>Quatrième Cours d'entrainement</h4>
                            <p>Le football est plus qu’un simple sport; c’est une passion, un mode de vie et, pour beaucoup, un chemin vers le succès personnel et professionnel. 

Au cœur de cette quête de gloire se trouve le club de football, des institutions dédiées à la formation et au développement des talents de demain.</p>
                            <div class="main-button">
                                <a href="#">Voir Emploi</a>
                            </div>
                        </article> 
                        <article id='tabs-5'>
                            <img src="https://freemmatrainingworkouts.com/wp-content/uploads/2021/02/3-550x360.jpg" alt="Cinquième Formation">
                            <h4>Cunquième Cours d'entrainement</h4>
                            <p>Free Fight est plus qu’un simple sport; c’est une passion, un mode de vie et, pour beaucoup, un chemin vers le succès personnel et professionnel. 

Au cœur de cette quête de gloire se trouve le club de football, des institutions dédiées à la formation et au développement des talents de demain.</p>
                            <div class="main-button">
                                <a href="#">Voir Emploi</a> 
                                </div>  
                                </article> 
                        <article id='tabs-6'>
                            <img src="https://www.jjblyon.com/uploads/3/7/8/9/37892651/751708.jpg?505" alt="Sixième Formation">
                            <h4>Sixième Cours d'entrainement</h4>
                            <p>Jiu-Jitsu Brésilien est  un art martial brésilien dérivé du jujitsu japonais traditionnel (et qu’on connaît aujourd’hui sous le nom de judo) qui se pratique principalement au sol et dont le but est de soumettre l’adversaire par étranglement ou clé d’articulation. Les frappes (coups de pied, poing, coude, tête et genou) volontaires sont interdites dans la pratique officielle.</p>
                            <div class="main-button">
                                <a href="#">Voir Emploi</a> 
                                </div>  
                                </article> 
                                <article id='tabs-7'>
                            <img src="https://assets.londonist.com/uploads/2014/07/i640/bubble-football.png" alt="Septième Formation">
                            <h4>Septième Cours d'entrainement</h4>
                            <p>Football et bulles gonflables n’avaient jamais fait si bon ménage. Si le beach soccer, le futsal ou encore le foot à 5 ne vous sont pas inconnus, le bubble foot est le tout nouveau venu au bataillon. La discipline consiste en fait à jouer au foot tout en étant cloisonné à l’intérieur d’une bulle gonflable. Ces deux composantes, a priori complètements opposées, peuvent pourtant donner un mélange des plus amusants et surtout des plus explosifs.</p>
                            <div class="main-button">
                                <a href="#">Voir Emploi</a> 
                                </div>  
                        </article> 
                    </section>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Our Classes End ***** -->

    <section class="section" id="schedule">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading dark-bg">
                        <h2>Horaires des <em>Cours</em></h2>
                        <img src="assets/images/line-dec.png" alt="">
                        <p>Notre Emploi présente les différents cours avec l'horaire et le coache associé.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="filters">
                        <ul class="schedule-filter">
                            <li class="active" data-tsfilter="lundi">Lundi</li>
                            <li data-tsfilter="mardi">Mardi</li>
                            <li data-tsfilter="mercredi">Mercredi</li>
                            <li data-tsfilter="jeudi">Jeudi</li>
                            <li data-tsfilter="vendredi">Vendredi</li>
                            <li data-tsfilter="samedi">Samedi</li>
                            <li data-tsfilter="dimanche">Dimanche</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-10 offset-lg-1">
                    <div class="schedule-table filtering">
                        <table>
                            <tbody>
                            @php
                                $daysOfWeek = ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'];
                            @endphp

                            @foreach($classes as $class)
                                <tr>
                                    <td class="day-time">{{ $class->libelle }}</td>

                                    @foreach($daysOfWeek as $day)
                                        @php
                                            $morningSchedule = null;
                                            $afternoonSchedule = null;
                                        @endphp

                                        @foreach($class->schedules->where('jour', $day) as $schedule)
                                            @php
                                                $startTime = \Carbon\Carbon::parse($schedule->start_time);
                                            @endphp
                                            @if($startTime->lt(now()->setHour(12)))
                                                @php
                                                    $morningSchedule = $schedule->display_time;
                                                @endphp
                                            @else
                                                @php
                                                    $afternoonSchedule = $schedule->display_time;
                                                @endphp
                                            @endif
                                        @endforeach

                                        <td class="ts-item {{ strtolower($day) }} {{ strtolower($day) === 'lundi' ? 'show' : '' }}"
                                            data-tsmeta="{{ strtolower($day) }}">
                                            {{ $morningSchedule ?? '//' }}
                                        </td>
                                        <td class="ts-item {{ strtolower($day) }} {{ strtolower($day) === 'lundi' ? 'show' : '' }}"
                                            data-tsmeta="{{ strtolower($day) }}">
                                            {{ $afternoonSchedule ?? '//' }}
                                        </td>
                                    @endforeach

                                    <td>{{ $class->coach ? $class->coach->user->nom : '--' }} {{ $class->coach ? $class->coach->user->prenom : '--' }}</td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- ***** Testimonials Starts ***** -->
    <section class="section" id="trainers">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Entraîneurs <em>Experts</em></h2>
                        <img src="assets/images/line-dec.png" alt="">
                        <p>Notre salle vous présentes des Entraîneurs Experts qui contribue significativement à l’obtention d’une performance athlétique supérieure à celle des concurrents (pour le sportif).</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="assets/images/second-trainer.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <span>Entraîneur Fitness Mixte</span>
                            <h4>Nizar Dehbi</h4>
                            <p></p>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="https://www.kinecalifornie.com/wp-content/uploads/2020/03/coaching-sportif-casablanca.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <span>Entraîneur Fitness 100% femmes</span>
                            <h4>Salma Motawakil</h4>
                            <p></p>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="https://thumbs.dreamstime.com/b/gym-trainer-welcome-customer-24614579.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <span>Entraîneur Musculation </span>
                            <h4>Omar Benkirane</h4>
                            <p></p>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div> 
                </div> 
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="https://pdafootball.co.uk/wp-content/uploads/2022/08/IMG_1193-scaled.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <span>Entraîneur Football </span>
                            <h4>Ayoub Lahlou</h4>
                            <p></p>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div> 
                </div>  
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="https://images.squarespace-cdn.com/content/v1/592b427c03596ef189778bef/1543505483677-9O6DSDI1DVR4PVYZVVQE/Coaching+Sportif+Franck+Grandsart+I" alt="">
                        </div>
                        <div class="down-content">
                            <span>Entraîneur Free Fight </span>
                            <h4>Mohamed Chraibi</h4>
                            <p></p>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div> 
                </div> 
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="https://contents.mediadecathlon.com/b72240/k$61be2794bb049f6e4520fa09d71738f2/1920x0/625pt625/1250xcr1250/PHOTO_INT_ARTS_MARTIAUX_Thibaut_" alt="">
                        </div>
                        <div class="down-content">
                            <span>Entraîneur Jiu-Jitsu Brésilien</span>
                            <h4>Ali Bennani</h4>
                            <p></p>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div> 
                </div>  
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="https://media.sudouest.fr/3213170/1000x500/larochelle-aunis-re-9b0d851754f2435ca97cc2fdfdbb8fce-092231-ph0.jpg?v=1626200979" alt="">
                        </div>
                        <div class="down-content">
                            <span>Entraîneur Bubble Football </span>
                            <h4>Anas Bennis</h4>
                            <p></p>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div> 
                </div> 
            </div>
        </div>
    </section>
    <!-- ***** Testimonials Ends ***** -->

    <!-- ***** Contact Us Area Starts ***** -->
    <section class="section" id="contact-us">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div id="map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13589.034415684082!2d-8.04783!3d31.6267691!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdafe94a941672ed%3A0xde67cdd2a606be45!2sComplexe%20Urbain%205!5e0!3m2!1sfr!2sma!4v1717935718633!5m2!1sfr!2sma"
                            width="100%" height="600px" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="contact-form">
                        <form id="contact" method="post" action="{{ route('contact.create') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                        <input name="nom" type="text" id="name" placeholder="Votre nom *" required="">
                                    </fieldset>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                        <input name="email" type="email" id="email" placeholder="Votre adresse email *"
                                               required="">
                                    </fieldset>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="objet" type="text" id="subject" placeholder="Objet *" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <textarea name="msg" rows="6" id="message" placeholder="Votre message *"
                                                  required=""></textarea>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="main-button">Envoyer le message
                                        </button>
                                    </fieldset>
                                </div>
                                @if(session('success'))
                                    <div class="alert alert-success" style="margin-top: 30px">
                                        {{ session('success') }}
                                    </div>
                                @endif
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Contact Us Area Ends ***** -->

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const filters = document.querySelectorAll(".schedule-filter li");
            const items = document.querySelectorAll(".ts-item");

            filters.forEach(filter => {
                filter.addEventListener("click", function () {
                    filters.forEach(f => f.classList.remove("active"));
                    this.classList.add("active");

                    const day = this.getAttribute("data-tsfilter");

                    items.forEach(item => {
                        if (item.classList.contains(day)) {
                            item.classList.add("show");
                        } else {
                            item.classList.remove("show");
                        }
                    });
                });
            });

            filters[0].click();
        });

    </script>

@endsection
