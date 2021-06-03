<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }} - {{ config('app.subtitle') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="header">
            @include('includes.nav')
            <div class="content container">
                <div class="banner">
                    <h3 class="text-center lead">The <b>ultimate</b> learning resource <br>for all the <b>creators</b></h3>
                    <p class="text-center text-light">Monthly tutorials to guide your journey to be a master.</p>
                    <a href="/courses" class="btn btn-outline-success rounded-pill px-5 py-2 mt-3">Explore Courses</a>
                </div>
            </div>
        </div>
        <div class="featured">
            <div class="row nopadding">
                <div class="col-md-4 nopadding">
                    <img src="img/featured1.png" class="img img-fluid d-none d-sm-none d-md-block" alt="">
                </div>
                <div class="col-md-6 nopadding">
                    <h2 class="pt-3 col-sm-12 text-light font-weight-bold">Our courses will guide you along your journey, whether you’re beginner, intermediate, or advanced. This is the best choice so make it!</h2>
                    <p class="text-light-1 col-sm-12 pt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, deserunt eos eveniet libero nemo nesciunt, nisi optio porro possimus quod reprehenderit totam voluptates! Aliquid aspernatur cumque eius magnam omnis, reprehenderit eius magnam omnis, reprehenderit?</p>
                    <div class="pt-3 d-none d-sm-none d-md-block">
                        <div class="row">
                            <div class="col-md-3 ">
                                <img src="img/Idea.svg" alt="" height="70px" width="70px">
                                <p class="text text-light-1 pt-1">Creativity</p>
                            </div>
                            <div class="col-md-3">
                                <img src="img/development.svg" alt="" height="70px" width="70px">
                                <p class="text text-light-1 pt-1">Development</p>
                            </div>
                            <div class="col-md-3">
                                <img src="img/path.svg" alt="" height="70px" width="70px">
                                <p class="text text-light-1 pt-1">Follow Path</p>
                            </div>
                            <div class="col-md-3">
                                <img src="img/communication.svg" alt="" height="70px" width="70px">
                                <p class="text text-light-1 pt-1">Communication</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="call-to-action">
            <div class="row justify-content-center">
                <h3 class="col-md-12 text-center pb-2"><b>Motivation</b></h3>
                <h2 class="pb-2 col-md-12 text-center font-weight-bolder" style="color: #9754cb">Increase Prosperity With Positive Thinking</h2>
                <p class="text-center col-md-7 text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto atque eum illo itaque? Asperiores autem consequuntur necessitatibus. Architecto cum distinctio, dolorem ea iure labore non obcaecati, quaerat quia unde voluptates!</p>
                <div class="col-md-12 text-center">
                    <a href="#" class="btn btn-outline-dark rounded-pill m-2">Our Courses</a>
                    <a href="#" class="btn btn-outline-success rounded-pill m-2">Contact Us</a>
                </div>
            </div>
        </div>
        <div class="pricing">
            <h2 class="text-center text-light font-weight-bold">Choose your Plan</h2>
            <p class="text-light text-center px-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi architecto.</p>
            <div class="container mt-5">
                <div class="row justify-content-center">
                    <div class="col-md-3 m-1 text-center" style="padding: 30px 5px; background-color: #ffffff; border-radius: 20px">
                        <h4 class=""><b>Basic</b></h4>
                        <h1 style="color: #9754cb">Free</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                        <p>dolor sit amet, consectetur</p>
                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                        <p>dolor sit amet, consectetur</p>
                        <a href="#" class="btn btn-outline-dark rounded-pill mt-2">Start For Free</a>
                    </div>
                    <div class="col-md-3 m-3 text-center" style="padding: 30px 5px; background-color: #deacf5; border-radius: 20px">
                        <h4 class="pt-3 font-weight-bold text-light">Premium</h4>
                        <h1 style="color: #28104e">$4.99</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                        <p>dolor sit amet, consectetur</p>
                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                        <p>dolor sit amet, consectetur</p>
                        <a href="#" class="btn btn-outline-info rounded-pill mt-2">Start Free Trial</a>
                    </div>
                    <div class="col-md-3 m-1 text-center" style="padding: 30px 5px; background-color: #ffffff; border-radius: 20px">
                        <h4 class="pt-3"><b>Professional</b></h4>
                        <h1 style="color: #9754cb">$9.99</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                        <p>dolor sit amet, consectetur</p>
                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                        <p>dolor sit amet, consectetur</p>
                        <a href="#" class="btn btn-outline-dark rounded-pill mt-2">Start Free Trial</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="">
            @include('includes.footer')
        </div>
    </body>
</html>
