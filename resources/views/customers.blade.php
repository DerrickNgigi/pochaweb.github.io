@extends('layout')
@section('customers')

    <section id="testimonials" class="tm-section-pad-top tm-parallax-2">
        <div class="container tm-testimonials-content">
            <div class="row">
                <div class="col-lg-12 tm-content-box">
                    <h2 class="text-white text-center mb-4 tm-section-title">Testimonials</h2>
                    <p class="mx-auto tm-section-desc text-center">
                        Nulla dictum sem non eros euismod, eu placerat tortor lobortis. Suspendisse id velit eu libero pellentesque interdum. Etiam quis congue eros.
                    </p>
                    <div class="mx-auto tm-gallery-container tm-gallery-container-2">
                        <div class="tm-testimonials-carousel">
                            @foreach($feedback  as $feedback )
                                <figure class="tm-testimonial-item">
                                    <img src="img/testimonial-img-01.jpg" alt="Image" class="img-fluid mx-auto">
                                    <blockquote>{{$feedback ->message}}</blockquote>
                                    <figcaption>{{$feedback ->Name}}</figcaption>
                                </figure>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tm-bg-overlay"></div>
    </section>
@endsection
