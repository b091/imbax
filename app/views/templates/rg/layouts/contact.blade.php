@extends('templates.npg.layout')

@section('content')

<div id="contact">
    <div class="container">
        <div class="section_header">
            <h3>Skontaktuj się z nami</h3>
        </div>
        <div class="row contact">
            <p>
                We’d love to hear from you. Interested in working together? Fill out the form below with some info about your project and I will get back to you as soon as I can. Please allow a couple days for me to respond.</p>

            <form>
                <div class="row form">
                    <div class="col-sm-6 row-col">
                        <div class="box">
                            <input class="name form-control" type="text" placeholder="Name">
                            <input class="mail form-control" type="text" placeholder="Email">
                            <input class="phone form-control" type="text" placeholder="Phone">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="box">
                            <textarea placeholder="Type a message here..." class="form-control"></textarea>
                        </div>
                    </div>
                </div>

                <div class="row submit">
                    <div class="col-md-5 box">
                        <label class="checkbox">
                            <input type="checkbox"> Sign up for newsletter
                        </label>
                    </div>
                    <div class="col-md-3 right">
                        <input type="submit" value="Send your message">
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="map">
        <div class="container">
            <div class="box_wrapp">
                <div class="box_cont">
                    <div class="head">
                        <h6>Contact</h6>
                    </div>
                    <ul class="street">
                        <li>2301 East Lamar Blvd. Suite 140.</li>
                        <li>City, Arlington. United States,</li>
                        <li>Zip Code, TX 76006.</li>
                        <li class="icon icontop">
                            <span class="contacticos ico1"></span>
                            <span class="text">1 817 274 2933</span>
                        </li>
                        <li class="icon">
                            <span class="contacticos ico2"></span>
                            <a class="text" href="contact.html#">bootstrap@twitter.com</a>
                        </li>
                    </ul>

                    <div class="head headbottom">
                        <h6>Work with us</h6>
                    </div>
                    <p>We’ve prepared a simple project planner to get to know you and your project better.</p>

                    <a href="contact.html#" class="btn">Let's get started</a>
                </div>
            </div>
        </div>

        <iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.mx/?ie=UTF8&amp;ll=23.625269,-102.540613&amp;spn=23.625269,-102.540613&amp;t=m&amp;z=13&amp;output=embed"></iframe>
    </div>
</div>


@stop