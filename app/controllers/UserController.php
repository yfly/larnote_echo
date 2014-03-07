<?php 

class UserController extends BaseController {
	public function login()
	{
		$site_title= "Login";

		if(is_post()){
			$v= Validator::make(Input::all(), array(
					'username'	=> 'required',
					'password'	=> 'required'
			));
			if($v->passes()){
				$credentials = array(
					'username'	=> Input::get('username'),
					'password'	=> Input::get('password')
			);
			if(Auth::attempt($credentials)){
				return Redirect::to('note');
			}
			}
			return Redirect::to('login')->with('message', 'Username / Password is invalid!');
		}	
	return View::make('user.login', compact('site_title'));
	}

	public function logout()
	{
		Auth::logout();

		return Redirect::to('/note')->with('logout', 'SuccessFully Logout!');
	}
}
?>