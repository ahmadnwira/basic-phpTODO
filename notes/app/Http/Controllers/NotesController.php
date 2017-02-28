<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Note;


class NotesController extends Controller{
    

	public function index(){

		$notes = Note::all();
		
		return view('notes.notes',compact('notes'));
	}


	public function create(){

		return view('notes.create');
	}


	public function store(Request $request){
		
		$note = new Note;

		$note->note = $request->note;
		
		$note->save();

		return redirect('notes');
	}


	public function edite($id){
		
		$note = Note::find($id);

		return view('notes.edite',compact('note'));
	}

	public function update(Request $request , $id){
		
		$note = Note::where('id',$id)->update(['note'=>$request->note]);

		return redirect('/notes');
	}



	public function delete($id){
		
		Note::destroy($id);

		return redirect('/notes');
	}
}
