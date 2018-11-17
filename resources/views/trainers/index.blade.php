@extends('layouts.app')

@section('title', 'Trainers Create')

@section('content')

	@include('common.success')

	<div class="row">	
		@foreach($trainers as $trainer)
			<div class="col-sm">
				<div class="card text-center"  style="width: 18rem; margin-top: 50px">
					<img  style="height: 150px; width: 150px; background-color: #EFEFEF; margin: 50px" class="card-img-top rounded-circle mx-auto d-block" src="images/{{$trainer->avatar}}">
					  <div class="card-body">
					    <h5 class="card-title">{{$trainer->name}}</h5>
					    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					    <a href="/trainers/{{$trainer->slug}}" class="btn btn-primary">Ver Mas...</a>
					  </div>
				</div>
			</div>
		@endforeach
	</div>
@endsection

