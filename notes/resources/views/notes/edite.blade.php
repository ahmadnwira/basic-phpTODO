
@extends('layouts.master')

@section('content')

<form action="/notes/{{$note->id}}/edite" method="POST">
 	
 	{{ csrf_field() }}
   	
   	<div class="form-group">

    	<input type="text" class="form-control" placeholder="Remember to .." name="note"
    		value="{{$note->note}}">

	</div>
  
  	<button type="submit" class="btn btn-primary">Update Note </button>
</form>

@endsection