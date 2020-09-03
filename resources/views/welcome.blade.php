<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/element-ui/lib/theme-chalk/index.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    </head>
    <body>
        <header class="heading">
            <div class="logo"></div>
            <h1>EXAMPLE DEMO</h1>
        </header>
        <div id="app" class="container">
            <section class="row">
                <div class="col-md-6 col-xs-12 line-container-one">
                    <span class="section_number">01</span>
                    <h2>Heading</h2>
                    <p class="line">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</p>
                    <a href="#bookingForm" class="button">Book Now</a>
                </div>
            </section>
            <section class="row">
                <div class="col-xs-12">
                    <img src="{{asset('images/image-water.png')}}"/>
                </div>
                <div class="col line-container-two">
                    <span class="section_number">02</span>
                    <h3 class="line"> Lorem ipsum dolor sit amet, consetetur.</h3>
                </div>
            </section>
            <section class="line-container-one">
                <div class="row">
                    <div class="col">
                        <span class="section_number">03</span>
                        <h2 class="line">Heading</h2>
                        <a id="bookingForm"></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5">
                        <h3>Lorem ipsum dolor sit amet, consetetur.</h3>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua, vero eos et accusam et justo duo dolores et ea rebum.</p>
                    </div>
                    <div class="col-sm-5">
                        <booking-form v-on:update="updateBookings"></booking-form>
                    </div>
                </div>
            </section>
            <booking-list v-bind:bookings="bookings"></booking-list>
        </div>
        <footer class="row">
            <div class="col-md">
                <div class="logo"></div>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy.</p>
                <a href="#bookingForm">Book Now</a>
                <span>© 2019 RIVER. All Rights Reserved.</span>
            </div>
            <div class="col-sm">
                <h2>Menu</h2>
                <ul>
                    <li>heading</li>
                    <li>heading</li>
                    <li>heading</li>
                    <li>heading</li>
                </ul>
            </div>
            <div class="col-sm">
                <h2>Menu</h2>
                <ul>
                    <li>heading</li>
                    <li>heading</li>
                    <li>heading</li>
                </ul>
            </div>
            <div class="col-sm">
                <h2>Menu</h2>
                <ul>
                    <li>heading</li>
                    <li>heading</li>
                </ul>
            </div>
            <div class="col-sm">
                <h2>Menu</h2>
                <ul>
                    <li>heading</li>
                    <li>heading</li>
                    <li>heading</li>
                </ul>
            </div>
        </footer>
    </body>

    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script src="https://unpkg.com/vuejs-datepicker"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</html>
