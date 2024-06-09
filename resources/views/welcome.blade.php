@extends('layoutsUser.app')

@section('title')
    <title>Urban 5</title>
@endsection

@section('content')

    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top">
        <video autoplay muted loop id="bg-video">
            <source src="assets/images/gym-video.mp4" type="video/mp4"/>
        </video>

        <div class="video-overlay header-text">
            <div class="caption">
                <h6>Travaillez plus dur, devenez plus fort</h6>
                <h2>Facile avec notre <em>salle de sport</em></h2>
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
                        <p>Le Studio de Formation est un modèle CSS gratuit pour les gymnases et les centres de fitness.
                            Vous êtes
                            autorisé à utiliser cette mise en page pour votre site Web d'entreprise.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets/images/features-first-icon.png" alt="First One">
                            </div>
                            <div class="right-content">
                                <h4>Fitness de Base</h4>
                                <p>Please do not re-distribute this template ZIP file on any template collection
                                    website. This is not
                                    allowed.</p>
                                <a href="#" class="text-button">Discover More</a>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets/images/features-first-icon.png" alt="second one">
                            </div>
                            <div class="right-content">
                                <h4>Nouvelle Formation en Salle de Sport</h4>
                                <p>If you wish to support TemplateMo website via PayPal, please feel free to contact us.
                                    We appreciate
                                    it a lot.</p>
                                <a href="#" class="text-button">Discover More</a>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets/images/features-first-icon.png" alt="third gym training">
                            </div>
                            <div class="right-content">
                                <h4>Basic Muscle Course</h4>
                                <p>Credit goes to <a rel="nofollow" href="https://www.pexels.com" target="_blank">Pexels
                                        website</a> for
                                    images and video background used in this HTML template.</p>
                                <a href="#" class="text-button">Discover More</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets/images/features-first-icon.png" alt="fourth muscle">
                            </div>
                            <div class="right-content">
                                <h4>Advanced Muscle Course</h4>
                                <p>You may want to browse through <a rel="nofollow"
                                                                     href="https://templatemo.com/tag/digital-marketing"
                                                                     target="_parent">Digital Marketing</a> or <a
                                        href="https://templatemo.com/tag/corporate">Corporate</a> HTML CSS templates on
                                    our website.</p>
                                <a href="#" class="text-button">Discover More</a>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets/images/features-first-icon.png" alt="training fifth">
                            </div>
                            <div class="right-content">
                                <h4>Yoga Training</h4>
                                <p>This template is built on Bootstrap v4.3.1 framework. It is easy to adapt the columns
                                    and sections.
                                </p>
                                <a href="#" class="text-button">Discover More</a>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets/images/features-first-icon.png" alt="gym training">
                            </div>
                            <div class="right-content">
                                <h4>Body Building Course</h4>
                                <p>Suspendisse fringilla et nisi et mattis. Curabitur sed finibus nisi. Integer nibh
                                    sapien, vehicula et
                                    auctor.</p>
                                <a href="#" class="text-button">Discover More</a>
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
                        <p>Ut consectetur, metus sit amet aliquet placerat, enim est ultricies ligula, sit amet dapibus
                            odio augue
                            eget libero. Morbi tempus mauris a nisi luctus imperdiet.</p>
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
                        <p>Nunc urna sem, laoreet ut metus id, aliquet consequat magna. Sed viverra ipsum dolor,
                            ultricies fermentum
                            massa consequat eu.</p>
                    </div>
                </div>
            </div>
            <div class="row" id="tabs">
                <div class="col-lg-4">
                    <ul>
                        <li><a href='#tabs-1'><img src="assets/images/tabs-first-icon.png" alt="">Premier Cours de
                                Formation</a>
                        </li>
                        <li><a href='#tabs-2'><img src="assets/images/tabs-first-icon.png" alt="">Deuxième Cours de
                                Formation</a></a></li>
                        <li><a href='#tabs-3'><img src="assets/images/tabs-first-icon.png" alt="">Troisième Cours de
                                Formation</a></a></li>
                        <li><a href='#tabs-4'><img src="assets/images/tabs-first-icon.png" alt="">Quatrième Cours de
                                Formation</a></a></li>
                        <div class="main-rounded-button"><a href="#">Voir Tous les Programmes</a></div>
                    </ul>
                </div>
                <div class="col-lg-8">
                    <section class='tabs-content'>
                        <article id='tabs-1'>
                            <img src="assets/images/training-image-01.jpg" alt="Premier Cours">
                            <h4>Premier Cours de Formation</h4>
                            <p>Phasellus convallis mauris sed elementum vulputate. Donec posuere leo sed dui eleifend
                                hendrerit. Sed
                                suscipit suscipit erat, sed vehicula ligula. Aliquam ut sem fermentum sem tincidunt
                                lacinia gravida
                                aliquam nunc. Morbi quis erat imperdiet, molestie nunc ut, accumsan diam.</p>
                            <div class="main-button">
                                <a href="#">Voir Programme</a>
                            </div>
                        </article>
                        <article id='tabs-2'>
                            <img src="assets/images/training-image-02.jpg" alt="Deuxième Formation">
                            <h4>Deuxième Cours de Formation</h4>
                            <p>Integer dapibus, est vel dapibus mattis, sem mauris luctus leo, ac pulvinar quam tortor a
                                velit.
                                Praesent ultrices erat ante, in ultricies augue ultricies faucibus. Nam tellus nibh,
                                ullamcorper at
                                mattis non, rhoncus sed massa. Cras quis pulvinar eros. Orci varius natoque penatibus et
                                magnis dis
                                parturient montes, nascetur ridiculus mus.</p>
                            <div class="main-button">
                                <a href="#">Voir Programme</a>
                            </div>
                        </article>
                        <article id='tabs-3'>
                            <img src="assets/images/training-image-03.jpg" alt="Troisième Cours">
                            <h4>Troisième Cours de Formation</h4>
                            <p>Fusce laoreet malesuada rhoncus. Donec ultricies diam tortor, id auctor neque posuere sit
                                amet. Aliquam
                                pharetra, augue vel cursus porta, nisi tortor vulputate sapien, id scelerisque felis
                                magna id felis.
                                Proin neque metus, pellentesque pharetra semper vel, accumsan a neque.</p>
                            <div class="main-button">
                                <a href="#">Voir Programme</a>
                            </div>
                        </article>
                        <article id='tabs-4'>
                            <img src="assets/images/training-image-04.jpg" alt="Quatrième Formation">
                            <h4>Quatrième Cours de Formation</h4>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                                egestas. Aenean
                                ultrices elementum odio ac tempus. Etiam eleifend orci lectus, eget venenatis ipsum
                                commodo et.</p>
                            <div class="main-button">
                                <a href="#">Voir Programme</a>
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
                        <h2>Programme des <em>Cours</em></h2>
                        <img src="assets/images/line-dec.png" alt="">
                        <p>Nunc urna sem, laoreet ut metus id, aliquet consequat magna. Sed viverra ipsum dolor,
                            ultricies fermentum
                            massa consequat eu.</p>
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

                                        <td class="ts-item {{ strtolower($day) }} {{ strtolower($day) === 'lundi' ? 'show' : '' }}" data-tsmeta="{{ strtolower($day) }}">
                                            {{ $morningSchedule ?? '//' }}
                                        </td>
                                        <td class="ts-item {{ strtolower($day) }} {{ strtolower($day) === 'lundi' ? 'show' : '' }}" data-tsmeta="{{ strtolower($day) }}">
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
                        <p>Nunc urna sem, laoreet ut metus id, aliquet consequat magna. Sed viverra ipsum dolor,
                            ultricies fermentum
                            massa consequat eu.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="assets/images/first-trainer.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <span>Entraîneur en Force</span>
                            <h4>Bret D. Bowers</h4>
                            <p>Distillerie tatouée de clichés amers 8-bit. Keytar succulentes église végétalienne sans
                                gluten clé
                                verser seitan flanelle.</p>
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
                            <img src="assets/images/second-trainer.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <span>Entraîneur Musculaire</span>
                            <h4>Hector T. Daigl</h4>
                            <p>Distillerie tatouée de clichés amers 8-bit. Keytar succulentes église végétalienne sans
                                gluten clé
                                verser seitan flanelle.</p>
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
                            <img src="assets/images/third-trainer.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <span>Entraîneur en Yoga</span>
                            <h4>Paul D. Newman</h4>
                            <p>Distillerie tatouée de clichés amers 8-bit. Keytar succulentes église végétalienne sans
                                gluten clé
                                verser seitan flanelle.</p>
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
                            src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed"
                            width="100%" height="600px" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="contact-form">
                        <form id="contact" action="" method="post">
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                        <input name="name" type="text" id="name" placeholder="Votre nom" required="">
                                    </fieldset>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                        <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*"
                                               placeholder="Votre adresse email"
                                               required="">
                                    </fieldset>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="subject" type="text" id="subject" placeholder="Objet" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <textarea name="message" rows="6" id="message" placeholder="Votre message"
                                                  required=""></textarea>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="main-button">Envoyer le message
                                        </button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Contact Us Area Ends ***** -->

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const filters = document.querySelectorAll(".schedule-filter li");
            const items = document.querySelectorAll(".ts-item");

            filters.forEach(filter => {
                filter.addEventListener("click", function() {
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
