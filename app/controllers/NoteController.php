<?php 
class NoteController extends BaseController{

	// Home
	public function index()
	{
		$lists = Note::all();
		$site_title= "Note";

		return View::make('note.index', compact('site_title', 'lists'));
	}
	
	// For Create Note
	public function create()
	{
		$site_title = "Create Note";
		$note = new Note();
		if(is_post())
		{
			$note->title = Input::get('title');
			$note->content= Input::get('content');
			$note->save();
			return Redirect::to('note')->with('success', 'Successfully Create');
		}
		return View::make('note.form', compact('site_title', 'note'));
	}

	// For Edit Note
	public function edit($id)
	{
		$site_title = "Edit Note";
		$note = Note::find($id);
		if(is_post())
		{
			$note->title = Input::get('title');
			$note->content= Input::get('content');
			$note->save();
			return Redirect::to('note')->with('edited-note', 'Successfully Updated');
		}
		return View::make('note.form', compact('site_title', 'note'));
	}
	// For Delet Note
	public function delete($id)
	{
		$note = Note::find($id);
		if(! is_null($note))
		{
			$note->delete();
		}
		return Redirect::to('note')->with('deleted-note', 'Successfully Deleted!');;
	}
}

 ?>