
@extends('layouts.master')

@section('content')

<form action="/notes" method="POST">
 	
 	{{ csrf_field() }}
   	
   	<div class="form-group">

    	<input type="text" class="form-control" placeholder="Remember to .." name="note">

	</div>
  
  	<button type="submit" class="btn btn-primary">Add Note </button>
</form>

@include('notes.erros')

@endsection