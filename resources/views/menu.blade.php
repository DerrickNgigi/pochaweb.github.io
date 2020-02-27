@extends ('layout')

@section ('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url('imaxges/bg_3.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <h1 class="mb-2 bread">Our Specialties</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Menu <i class="ion-ios-arrow-forward"></i></span></p>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container-fluid px-4">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <span class="subheading">Specialties</span>
                <h2 class="mb-4">Our Menu</h2>
            </div>
        </div>
        <div class="row">
        @foreach( $menu as $menu)
            <div class="col-md-6 col-lg-4 menu-wrap">
                <div class="menus d-flex ftco-animate">
                    <div class="menu-img img" style="background-image: url('{{$menu->picture}} ');"></div>
                    <div class="text">
                        <div class="d-flex">
                            <div class="one-half">
                                <h3>{{$menu->name}}</h3>
                            </div>
                            <div class="one-forth">
                                <span class="price">Ksh {{$menu->price}}</span>
                            </div>
                        </div>
                        <p><span>{{$menu->description}}</span></p>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
    </div>
</section>

@endsection ('content')
