<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CPX</title>

    {{-- CSS --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

    {{-- JS --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="{{asset('js/ScrollMagic.min.js')}}"></script>
    <script src="{{asset('js/animation.gsap.min.js')}}"></script>
</head>
<body>
    <div class="cpx-container">
        <section class="landing" id="landing">
            <div class="landing__navbar">
                <ul>
                    <li><a href="#landing">Home</a></li>
                    <li><a href="#aboutus">About Us</a></li>
                    <li><a href="#service">Service</a></li>
                    <li><a href="#technology">Technology</a></li>
                    <li><a href="#locations">Locations</a></li>
                    <li><a href="#contactus">Contact Us</a></li>
                </ul>
            </div>
            <div class="landing__text">
                <img class="landing__text--logo" src="{{url('assets/img/logo_HD.png')}}" alt="">
                <h1 class="landing__text--h1">WELCOME TO <br>CITIPOS EXPRESS</h1>
                <p class="landing__text--tagline">Smart Pos for Smart City</p>
                <p class="landing__text--uses">Citipos will help you track your packages <br>and make you easy to manage your time</p>
                {{-- <a class="landing__text--plays" href="https://play.google.com/store/apps" target="_blank" rel="noopener noreferrer"> 
                    <img src="{{url('assets/img/download_on.png')}}" alt="">
                </a>
                <a class="landing__text--apps" href="https://www.apple.com/id/app-store/" target="_blank" rel="noopener noreferrer"> 
                    <img src="{{url('assets/img/download_on_apps.png')}}" alt="">
                </a> <br> --}}
                <a href="#aboutus">
                    <button class="landing__text--btn">SEE MORE</button>
                </a>
            </div>
        </section>
        <section class="aboutus" id="aboutus">
            {{-- <div class="aboutus-container">
                <div class="aboutus-container__left">
                    <h1 class="aboutus-container__left--h1">
                        About Us
                    </h1>
                    <p>
                        Citipos express or CPX is a company that engaged in logistic fields. We focused on efficiency by minimizing the time and cost of shipping and maximizing the quality of our service. In this modern world we believe everything runs by gadget and technologies and that is why we develop an app that will makes it easier for users or customers to ship items and to check datas, we also very transparent about our datas to customer so customer wont have to be worried about the shipping process they will be able to check the status on their apps
                    </p>
                </div>
                <div class="aboutus-container__right">
                    <img src="{{url('assets/img/parcel.png')}}" alt="" style="width:250px;">
                </div>
            </div> --}}
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="aboutus-container">
                        <div class="aboutus-container__left">
                            <h1 class="aboutus-container__left--h1">
                                About Us
                            </h1>
                            <p>
                                Citipos express or CPX is a company that engaged in logistic fields. We focused on efficiency by minimizing the time and cost of shipping and maximizing the quality of our service. In this modern world we believe everything runs by gadget and technologies and that is why we develop an app that will makes it easier for users or customers to ship items and to check datas, we also very transparent about our datas to customer so customer wont have to be worried about the shipping process they will be able to check the status on their apps
                            </p>
                        </div>
                        <div class="aboutus-container__right">
                            <img src="{{url('assets/img/parcel.png')}}" alt="" style="width:250px;">
                        </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                      <div class="aboutus-container">
                          <div class="aboutus-container__left">
                            <h1 class="aboutus-container__left--h1-motto">
                                Our Motto
                            </h1> <br>
                            <h2>Vision</h2>
                            <p>We would like to provide our customer <br>convenience and efficiency in delivery <br>process.</p>
                            <h2>Mission</h2>
                            <p>Making CPX a widely known brand that <br>becomes the benchmark in the delivery <br>industry.</p>
                          </div>
                          <div class="aboutus-container__right">
                            <img src="{{url('assets/img/truck 2.svg')}}" alt="" style="width:400px;">
                          </div>
                      </div>
                  </div>
                  <div class="carousel-item">
                    <div class="our-team">
                        <h1>our team</h1>
                        <div class="our-team__container">
                            <div class="our-team__container--content">
                                <img src="{{url('assets/img/user.svg')}}" alt="" style="width:150px;">
                                <h2>CEO</h2>
                                <p>Nadeem Rasheed</p>                          
                            </div>
                            <div class="our-team__container--content">
                                <img src="{{url('assets/img/user.svg')}}" alt="" style="width:150px;">   
                                <h2>CTO</h2>
                                <p>Naufal Maulana</p>                            
                            </div>
                            <div class="our-team__container--content">
                                <img src="{{url('assets/img/user.svg')}}" alt="" style="width:150px;">   
                                <h2>COO</h2>
                                <p>Tafan Pangestu</p>                            
                            </div>
                            {{-- <div class="our-team__container--content">
                                <img src="{{url('assets/img/user.svg')}}" alt="" style="width:150px;">   
                                <h2>CMO</h2>
                                <p>Dania Hamzah</p>                            
                            </div> --}}
                        </div>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
            </div>
        </section>
        <section class="service" id="service">
            <h1>Our Services</h1>
            <div class="services">
                <div class="services__section">
                    <div class="services__section--img">
                        <img src="{{url('assets/img/scoot.svg')}}" alt="">
                    </div>
                    <div class="services__section--desc">
                        <h2>Regular</h2>
                        <p> <img src="{{url('assets/img/stopwatch.svg')}}" alt=""> Estimated Time: 2-3 Days </p> 
                        <p> <img src="{{url('assets/img/location.svg')}}" alt=""> Coverage: All over Indonesia </p>
                        {{-- <span data-toggle="modal" data-target="#readmore1">Read More</span> --}}
                    </div>
                </div>
                <div class="services__section">
                    <div class="services__section--img">
                        <img src="{{url('assets/img/services.svg')}}" alt="">
                    </div>
                    <div class="services__section--desc">
                        <h2>Hello Tomorrow</h2>
                        <p> <img src="{{url('assets/img/stopwatch.svg')}}" alt=""> Estimated Time: The Next Day </p> 
                        <p> <img src="{{url('assets/img/location.svg')}}" alt=""> Coverage: All over Indonesia </p>
                        {{-- <span data-toggle="modal" data-target="#readmore2">Read More</span> --}}
                    </div>
                </div>
                <div class="services__section">
                    <div class="services__section--img">
                        <img src="{{url('assets/img/rocket.svg')}}  " alt="">
                    </div>
                    <div class="services__section--desc">
                        <h2>My Day One</h2>
                        <p> <img src="{{url('assets/img/stopwatch.svg')}}" alt=""> Estimated Time: Same Day </p> 
                        <p> <img src="{{url('assets/img/location.svg')}}" alt=""> Coverage: All over Indonesia </p>
                        {{-- <span data-toggle="modal" data-target="#readmore3">Read More</span> --}}
                    </div>
                </div>
            </div>
        </section>
        <section class="technology" id="technology">
            <h1>Features</h1>
            <div class="techs">
                <div class="techs__section">
                    <div class="techs__section--content">
                        <img src="{{url('assets/img/Tracking.png')}}" alt="">
                        <h2>Real Time Tracking </h2>
                        <p>We will notify every <br> movements of your <br>package real time</p> 
                    </div>
                </div>
                <div class="techs__section">
                    <div class="techs__section--content">
                        <img src="{{url('assets/img/handphone.svg')}}" alt="">
                        <h2>Online Service</h2>
                        <p>Everything is accesible <br>through your phone <br>via your browser</p> 
                    </div>
                </div>
                <div class="techs__section">
                    <div class="techs__section--content">
                        <img src="{{url('assets/img/PDF.png')}}" alt="">
                        <h2>PDF Format</h2>
                        <p>All of your reports will <br>be emailed in PDF format</p> 
                    </div>
                </div>
                <div class="techs__section">
                    <div class="techs__section--content">
                        <img src="{{url('assets/img/Cities.png')}}" alt="">
                        <h2>Reaching Many Cities <br>Accross The Country</h2>
                        <p>Our services reach <br>more than 50 cities <br>around Indonesia</p> 
                    </div>
                </div>
            </div>
        </section>
        <section class="locations" id="locations">
            <h1>Locations</h1>
            <div class="locations__container">
                <div class="locations__container--content">
                    <img src="{{url('assets/img/bali.png')}}" alt="">
                </div>
                <div class="locations__container--content">
                    <img src="{{url('assets/img/makassar.png')}}" alt="">
                </div>
                <div class="locations__container--content">
                    <img src="{{url('assets/img/surabaya.png')}}" alt="">
                </div>
                <div class="locations__container--content">
                    <img src="{{url('assets/img/jakarta.png')}}" alt="">
                </div>
            </div>
            <div class="locations__dots">
                <img src="{{url('assets/img/dots.png')}}" alt="">
            </div>
        </section>
        <section class="contactus" id="contactus">
            <div class="contactus__left">
                <h1>Contact Us</h1>
                <p>Questions or concerns? Just fill out the form below and our support <br>team will get back to you within 24 hours</p>
            </div>
            <div class="contactus__right">
                <form action="">     
                    <div class="contactus__right--names">
                        <input type="text" placeholder="First Name">
                        <input type="text" placeholder="Last Name">
                    </div>
                    <div class="contactus__right--emails">
                        <input type="email" placeholder="Email">
                    </div>
                    <div class="contactus__right--numbers">
                        <input type="number" placeholder="Phone Number" min="0">
                    </div>
                    <div class="contactus__right--textarea">
                        <textarea name="message" id="" cols="30" rows="10" placeholder="Send Message"></textarea>
                    </div>
                    <button type="submit">Send Message</button>
                </form>
            </div>
        </section>
    </div>
    @include('inc.readmore1')
    @include('inc.readmore2')
    @include('inc.readmore3')

    <footer>
        <div class="footer">
            <div class="footer__container">
                <div class="footer__container--content">
                    <h2>Address</h2>
                    <p>Pipang Ltd, Griva Digeni, <br>
                        81-83 Jacovides Tower, 1st Floor <br>
                        1090 Picosia USA</p>
                </div>
                {{-- <div class="footer__container--content">
                    <h2>Apps</h2>
                    <a href="https://play.google.com/store/apps" target="_blank" rel="noopener noreferrer">
                        <img class="app_img" src="{{url('assets/img/download_on2.png')}}" alt=""> <br>
                    </a>
                    <a href="https://www.apple.com/id/app-store/" target="_blank" rel="noopener noreferrer">
                        <img class="app_img" src="{{url('assets/img/download_on2_apps.png')}}" alt="">
                    </a>
                </div> --}}
                <div class="footer__container--content">
                    <h2>Get In Touch</h2>
                    <p>info@citiposexpress.com</p>
                    <p>+62 852-1640-4696</p>
                    <img class="social_img" src="{{url('assets/img/Social.svg')}}" alt="">
                </div>
                <div class="footer__container--content">
                    <h2>We Support</h2>
                    <img class="payments_img" src="{{url('assets/img/payments.png')}}" alt="">
                </div>
            </div>
            <div class="footer__copyright">
                <span>Copyright 2021 @ CitiposExpress All Rights Reserved</span>
            </div>
        </div>
    </footer>

    <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();

            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
    });
});
    </script>
</body>
</html>