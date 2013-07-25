<?php

class Home_Controller extends Base_Controller {

	/*
	|--------------------------------------------------------------------------
	| The Default Controller
	|--------------------------------------------------------------------------
	|
	| Instead of using RESTful routes and anonymous functions, you might wish
	| to use controllers to organize your application API. You'll love them.
	|
	| This controller responds to URIs beginning with "home", and it also
	| serves as the default controller for the application, meaning it
	| handles requests to the root of the application.
	|
	| You can respond to GET requests to "/home/profile" like so:
	|
	|		public function action_profile()
	|		{
	|			return "This is your profile!";
	|		}
	|
	| Any extra segments are passed to the method as parameters:
	|
	|		public function action_profile($id)
	|		{
	|			return "This is the profile for user {$id}.";
	|		}
	|
	*/

	
	public $restful = true;
	
	public function get_index() {
		$title = "Home";
		$session = Session::get('name');
		$thisuser = User::where('email', '=', $session)->first();
		
		$user = User::all();
		$topscores = Metric::order_by('updated_at','desc')->take(5)->get();
		
		return View::make('home.index')
			->with('title',$title)
			->with('thisuser', $thisuser)
			->with('cumulative', User::where('team','=', "Island of Misfit Toys")->get())
			->with('count',0)
			->with('user', $user)
			->with('topscores', $topscores);
	}
	
	public function post_index(){
		$input = Input::all();
		$session = Session::get('name');
		$thisuser = User::where('email', '=', $session)->first();
		Validator::register('positive', function($attribute, $value, $parameter){
			return $value > 0;
		});
		$rules = array(
			'steps'		=> 'integer|positive',
			'email' 	=> 'required|email',
			'password' 	=> 'required'
		);
		
		$v = Validator::make($input, $rules);
		
		if($v->fails()){
			return Redirect::to('login')
				->with('thisuser', $thisuser)
				->with_errors($v);
		} else {
			$credentials = array(
				'username' 	=> $input['email'],
				'password' 	=> $input['password']
			);
			
			if (Auth::attempt($credentials)) {
				Session::put('name',$credentials['username']);
				
				$thisuser = User::where('email', '=', $input['email'])->first();
				$metric 		= new Metric;
				$metric->steps 	= $input['steps'];
				$metric->email	= $thisuser->email;
				$metric->save();
				
				return Redirect::to('profile')
					->with('title', "Individual Metrics")
					->with('thisuser', $thisuser);
			} else {
				return Redirect::to('login')
					->with('thisuser', $thisuser);
			}
		}
	}

}