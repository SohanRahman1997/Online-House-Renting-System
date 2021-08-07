@extends('layouts.master')

@section('content')

<div class="row">
 <div class="col-md-12">
  <br />
  <h3>Edit Record</h3>
  <br />
  @if(count($errors) > 0)

  <div class="alert alert-danger">
         <ul>
         @foreach($errors->all() as $error)
          <li>{{$error}}</li>
         @endforeach
         </ul>
  @endif
  <form method="post" action="{{action('PostController@update', $id)}}">
   {{csrf_field()}}
   <input type="hidden" name="_method" value="PATCH" />
   <div class="form-group">
    <input type="text" name="name" class="form-control" value="{{$post->name}}" placeholder="Enter Your Name" />
   </div>
   <div class="form-group">
    <input type="text" name="address" class="form-control" value="{{$post->address}}" placeholder="Enter Your Address" />
   </div>
   <div class="form-group">
    <!-- <input type="text" name="category" class="form-control" value="{{$post->category}}" placeholder="Enter Category" /> -->
    <label>Category:</label>
            <select name="category" >
                <option value="House">House</option>
                <option value="Apartment">Apartment</option>
            </select>
   </div>
   <div class="form-group">
    <input type="text" name="details" class="form-control" value="{{$post->details}}" placeholder="Enter Details" />
   </div>
   <div class="form-group">
    <input type="submit" class="btn btn-primary" value="Save" />
   </div>
  </form>
 </div>
</div>

@endsection
