@extends ('layout')

@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_3.jpg');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <h1 class="mb-2 bread">Contact Us</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
                                class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i
                            class="ion-ios-arrow-forward"></i></span></p>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section contact-section bg-light">
    <div class="container">
        <div class="row d-flex contact-info">
            <div class="col-md-12">
                <div class="col-md-6 mb-4">
                    <h2 class="h4 font-weight-bold">Contact Information</h2>
                    <div class="w-100"></div>
                    <div class="">
                        <div class="dbox">
                            <p><span>Address:</span> Nairobi, Village Market</p>
                        </div>
                    </div>
                    <div class="">
                        <div class="dbox">
                            <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
                        </div>
                    </div>
                    <div class="">
                        <div class="dbox">
                            <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@pochakenya.com</a></p>
                        </div>
                    </div>
                    <div class="">
                        <div class="dbox">
                            <p><span>Website</span> <a href="#">yoursite.com</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <h2 class="h4 mb-5 font-weight-bold">Contact Us</h2>
                    @if(Session::has('success'))
   <div class="alert alert-success">
     {{ Session::get('success') }}
   </div>
@endif
@if(Session::has('fail'))
    <div class="alert alert-danger">
       {{Session::get('fail')}}
    </div>
@endif
                    <form method="POST" action="/contact">
                    @csrf
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <input type="text" name="email" class="form-control" placeholder="Your Email">
                        </div>
                        <div class="form-group">
                            <input type="text" name="subject" class="form-control" placeholder="Subject">
                        </div>
                        <div class="form-group">
                            <textarea name="message" id="" cols="30" rows="7" class="form-control"
                                placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb">
    <div class="container-fluid px-0">
        <div class="row no-gutters">
            <div class="col-md">
                <a href="#" class="instagram img d-flex align-items-center justify-content-center"
                    style="background-image: url(images/insta-1.jpg);">
                    <span class="ion-logo-instagram"></span>
                </a>
            </div>
            <div class="col-md">
                <a href="#" class="instagram img d-flex align-items-center justify-content-center"
                    style="background-image: url(images/insta-2.jpg);">
                    <span class="ion-logo-instagram"></span>
                </a>
            </div>
            <div class="col-md">
                <a href="#" class="instagram img d-flex align-items-center justify-content-center"
                    style="background-image: url(images/insta-3.jpg);">
                    <span class="ion-logo-instagram"></span>
                </a>
            </div>
            <div class="col-md">
                <a href="#" class="instagram img d-flex align-items-center justify-content-center"
                    style="background-image: url(images/insta-4.jpg);">
                    <span class="ion-logo-instagram"></span>
                </a>
            </div>
            <div class="col-md">
                <a href="#" class="instagram img d-flex align-items-center justify-content-center"
                    style="background-image: url(images/insta-5.jpg);">
                    <span class="ion-logo-instagram"></span>
                </a>
            </div>
        </div>
    </div>
</section>

@endsection ('content')
