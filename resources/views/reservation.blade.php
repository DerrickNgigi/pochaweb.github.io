@extends ('layout')

@section ('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_3.jpg');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <h1 class="mb-2 bread">Reservation</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
                                class="ion-ios-arrow-forward"></i></a></span> <span>Reservation <i
                            class="ion-ios-arrow-forward"></i></span></p>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section ftco-no-pt ftco-no-pb">
    <div class="container-fluid px-0">
        <div class="row d-flex no-gutters">
            <div class="col-md-6 order-md-last ftco-animate makereservation p-4 p-md-5 pt-5">
                <div class="py-md-5">
                    <div class="heading-section ftco-animate mb-5">
                        <span class="subheading">Book a table</span>
                        <h2 class="mb-4">Make Reservation</h2>
                    </div>
                    @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                    @endif
                    {!! Form::open(['route'=>'reservation-form']) !!}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                {!! Form::label('Full Name') !!}
                                {!! Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Enter
                                Name']) !!}
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                                {!! Form::label('Email') !!}
                                {!! Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Enter
                                Email']) !!}
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }}">
                                {!! Form::label('Phone Number') !!}
                                {!! Form::text('phone', old('phone'), ['class'=>'form-control', 'placeholder'=>'Enter
                                Phone number (include country code)']) !!}
                                <span class="text-danger">{{ $errors->first('phone') }}</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group {{ $errors->has('date') ? 'has-error' : '' }}">
                                {!! Form::label('Date') !!}
                                {!! Form::text('date', old('date'), ['class'=>'form-control', 'placeholder'=>'Enter
                                date', 'id'=>'book_date']) !!}
                                <span class="text-danger">{{ $errors->first('phone') }}</span>
                            </div>
                        </div>
                        <div class="col-md-6">
						<div class="form-group {{ $errors->has('time') ? 'has-error' : '' }}">
                                {!! Form::label('Time') !!}
                                {!! Form::text('time', old('time'), ['class'=>'form-control', 'placeholder'=>'Select time', 'id'=>'book_time']) !!}
                                <span class="text-danger">{{ $errors->first('time') }}</span>
                            </div>
                        </div>
                        <div class="col-md-6">
						<div class="form-group {{ $errors->has('date') ? 'has-error' : '' }}">
                                {!! Form::label('Physical Address') !!}
                                {!! Form::text('address', old('address'), ['class'=>'form-control', 'placeholder'=>'Enter
                                Physical Address', 'id'=>'book_address']) !!}
                                <span class="text-danger">{{ $errors->first('address') }}</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Food</label>
                                <div class="select-wrap one-third">
                                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                    <select name="" id="" class="form-control">
                                        <option value="">Select</option>
                                        <option value="">Teriyaki</option>
                                        <option value="">Teriyaki</option>
                                        <option value="">Teriyaki</option>
                                        <option value="">Teriyaki</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Person</label>
                                <div class="select-wrap one-third">
                                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                    <select name="" id="" class="form-control">
                                        <option value="">Person</option>
                                        <option value="">1</option>
                                        <option value="">2</option>
                                        <option value="">3</option>
                                        <option value="">4+</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">More Information</label>
                                <textarea name="more-info" class="form-control" id="" cols="30" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12 mt-3">
                            <div class="form-group">
                                <input type="submit" value="Make a Reservation" class="btn btn-primary py-3 px-5">
                            </div>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
            <div class="col-md-6 d-flex align-items-stretch pb-5 pb-md-0">
                <img src="images/reservation.jpg" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</section>

@endsection ('content')
