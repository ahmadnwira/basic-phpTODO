

@extends('layouts.master')


@section('content')



@foreach($notes as $note)

	<div class="card">
		
		<div class="card-block">

			<p class="card-text">{{$note->note}}</p>
		
			<a href="notes/{{$note->id}}/edite" class="card-link">Edite</a>
			<a href="notes/{{$note->id}}" class="card-link delete" >Delete</a>
		</div>	
	</div>

@endforeach

@endsection
