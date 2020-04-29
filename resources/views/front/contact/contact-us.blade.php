@extends('layouts.master')
@section('title', 'Contact Us')
@section('content')
<div class="wrapage">
	<div class="layer">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="asset/img/Layer-281.jpg" alt="Chania" >
      </div>
      <div class="item">
        <img src="asset/img/Layer-222.jpg" alt="Chania" >
      </div>
      <div class="item">
        <img src="asset/img/Layer-38.jpg" alt="Flower">
      </div>
    </div>
</div>
		<div class="container container_header">
				<div class="row row_top">
					<div class="col-sm-12 ">
						<h1>Contacts</h1>
						<ol class="breadcrumb">
					 		<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page">Contacts</li>

						</ol>

					</div>
				</div>
			</div>
	</div>
</div>
</header>
<main>

<div class="wrappage">
	<div class="container our">
		<div class="row">
			<div class="col-md-4 col-sm-4 col-xs-4">
				<span class="address"></span>
				<h4>Our Address</h4>
				<p>New York, NY 256364,United States</p>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-4">
				<span class="email"></span>
				<h4>Our Email</h4>
				<p>contact@example.com</p>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-4">
				<span class="phone"></span>
				<h4>Our Phone</h4>
				<p>1-800-123-4567 or 1-800-7654-321</p>
			</div>
		</div>
	</div>
</div>
<div class="wrappage">

		<div id="googlemap1" class="map"></div>

</div>

<div class="wrappage talk-to">
	<div class="container">
		<div class="row">
			<div class="col-md-12 our-core">
				<h5>CONTACT</h5>
				<h1>Talk To Us About New Work</h1>
				<p>Our core clients are from the Europe countries, but we are happy to work with clients
from all over the globe.</p>
            </div>
            @include('layouts.errors')
        <form method="POST" action="{{url('storeContactInfo')}}">
                {{csrf_field()}}
			<div class="col-md-6 col-sm-6 col-xs-12 input-contact">
            <input name="name" placeholder="Full name *" value="{{old('name')}}" style="border:{{ $errors->has('name') ? '1px solid #fc6a55' : ''}}">
                        @if($errors->has('name'))
                            <p class="help-block" style="color: #fc6a55">
                                {{ $errors->first('name') }}
                            </p>
                        @endif
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12 input-contact">
                <input name="company" placeholder="Company *" value="{{old('company')}}"  style="border:{{ $errors->has('name') ? '1px solid #fc6a55' : ''}}">
                @if($errors->has('company'))
                <p class="help-block" style="color: #fc6a55">
                    {{ $errors->first('company') }}
                </p>
            @endif
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12 input-contact">
                <input name="email" type="email" placeholder="Email *" value="{{old('email')}}"  style="border:{{ $errors->has('name') ? '1px solid #fc6a55' : ''}}">
                @if($errors->has('email'))
                <p class="help-block" style="color: #fc6a55">
                    {{ $errors->first('email') }}
                </p>
            @endif
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12 input-contact">
                <input name="mobile" type="number" placeholder="Telephone *" value="{{old('mobile')}}"  style="border:{{ $errors->has('name') ? '1px solid #fc6a55' : ''}}">
                @if($errors->has('mobile'))
                <p class="help-block" style="color: #fc6a55">
                    {{ $errors->first('mobile') }}
                </p>
            @endif
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12 button-contact">
				<button type="submit">SUBMIT US YOUR REQUEST <span></span><span class="xoay"></span></button>
			</div>
        </div>
           </form>
	</div>
</div>
<div class="wrappage">
	<div class="container-fluid over">
		<div class="row">
			<div class="col-lg-12">
				<h5>WE COMBINE DISIGN THINKING AND CRAFT</h5>
				<h1> Over 10 years we have been helping<br> build brands in the world</h1>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever<br> since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
				<img src="asset/img/Layer-contact.jpg" alt="">
			</div>
		</div>
	</div>
</div>

</main>


@endsection
