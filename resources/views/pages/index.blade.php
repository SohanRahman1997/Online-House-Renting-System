@extends('layouts.master')


@section('content')

<!-- Start Sidebar + Content -->

  <div class="container margin-top">
  	<div class="row">

      <!-- <div class="col-md-3">
  			<div class="list-group">
               <a href="{{url('student')}}" class="list-group-item list-group-item-action">Create Post</a>
               <a href="{{url('view')}}" class="list-group-item list-group-item-action">View Post</a>
               <a href="{{url('payment')}}" class="list-group-item list-group-item-action">Payment</a>
               <a href="{{url('review')}}" class="list-group-item list-group-item-action">Review</a>
               <a href="{{url('about')}}" class="list-group-item list-group-item-action">About Us</a>
            </div>
  		</div> -->

  		<div class="col-md-12">
  			<div class="widget">
  				<h3>Houses/Apartments</h3>
  				<div class="row">

  					<div class="col-md-4">
  					<div class="card">
                    <img class="card-img-top feature-img" src="{{ asset('images/houses/a.jpg')}}" alt="Card image">
                    <div class="card-body">
                    <h4 class="card-title">Mirpur</h4>
                    <p class="card-text">Apartment</p>
                    <a href="#" class="btn btn-primary">Learn More!</a>
                    </div>
                    </div>
  				    </div>

  				    <div class="col-md-4">
  					<div class="card">
                    <img class="card-img-top feature-img" src="{{ asset('images/houses/b.jpg')}}" alt="Card image">
                    <div class="card-body">
                    <h4 class="card-title">Badda</h4>
                    <p class="card-text">Apartment</p>
                    <a href="#" class="btn btn-primary">Learn More!</a>
                    </div>
                    </div>
  				    </div>

  				    <div class="col-md-4">
  					<div class="card">
                    <img class="card-img-top feature-img" src="{{ asset('images/houses/a.jpg')}}" alt="Card image">
                    <div class="card-body">
                    <h4 class="card-title">Gulshan</h4>
                    <p class="card-text">Apartment</p>
                    <a href="#" class="btn btn-primary">Learn More!</a>
                    </div>
                    </div>
  				    </div>

  				    <div class="col-md-4">
  					<div class="card">
                    <img class="card-img-top feature-img" src="{{ asset('images/houses/b.jpg')}}" alt="Card image">
                    <div class="card-body">
                    <h4 class="card-title">Niketon</h4>
                    <p class="card-text">Apartment</p>
                    <a href="#" class="btn btn-primary">Learn More!</a>
                    </div>
                    </div>
  				    </div>

  				    <div class="col-md-4">
  					<div class="card" >
                    <img class="card-img-top feature-img" src="{{ asset('images/houses/a.jpg')}}" alt="Card image">
                    <div class="card-body">
                    <h4 class="card-title">Gulshan</h4>
                    <p class="card-text">Apartment</p>
                    <a href="#" class="btn btn-primary">Learn More!</a>
                    </div>
                    </div>
  				    </div>

  				    <div class="col-md-4">
  					<div class="card">
                    <img class="card-img-top feature-img" src="{{ asset('images/houses/b.jpg')}}" alt="Card image">
                    <div class="card-body">
                    <h4 class="card-title">Banani</h4>
                    <p class="card-text">House</p>
                    <a href="#" class="btn btn-primary">Learn More!</a>
                    </div>
                    </div>
  				    </div>

  				    <div class="col-md-4">
  					<div class="card" >
                    <img class="card-img-top feature-img" src="{{ asset('images/houses/a.jpg')}}" alt="Card image">
                    <div class="card-body">
                    <h4 class="card-title">Gulshan</h4>
                    <p class="card-text">Apartment</p>
                    <a href="#" class="btn btn-primary">Learn More!</a>
                    </div>
                    </div>
  				    </div>

  				    <div class="col-md-4">
  					<div class="card">
                    <img class="card-img-top feature-img" src="{{ asset('images/houses/b.jpg')}}" alt="Card image">
                    <div class="card-body">
                    <h4 class="card-title">Banani</h4>
                    <p class="card-text">House</p>
                    <a href="#" class="btn btn-primary">Learn More!</a>
                    </div>
                    </div>
  				    </div>
  			</div>
  		</div>
  	</div>
  </div>
</div>

<!-- End Sidebar + Content -->



@endsection
