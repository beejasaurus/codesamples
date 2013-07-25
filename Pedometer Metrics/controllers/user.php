<?php

class User_Controller extends Base_Controller {
	public $restful = true;
	
	// Initial login page if not logged in
	public function get_index(){
		$title = "Login";
		return View::make('user.index')	
			->with('title',$title);
	}
	
	// Function if user attempts to login
	public function post_index(){
		
		// Accept user input and validate to see if form has been filled out and email contains a valid email address
		$input = Input::all();
		$rules = array(
			'email' 	=> 'required|email',
			'password' 	=> 'required'
		);
		
		$v = Validator::make($input, $rules);
		
		if($v->fails()){
			return Redirect::to('login')->with_errors($v);
		} else {
		// If input is valid, then passes data to database via Auth::attempt and stores the name in the session
			$credentials = array(
				'username' 	=> $input['email'],
				'password' 	=> $input['password']
			);
			
			if (Auth::attempt($credentials)) {
				Session::put('name',$credentials['username']);
				return Redirect::to('profile');
			} else {
				return Redirect::to('login');
			}
		}
	}
	
	// Sets the title for the registration page
	public function get_register(){
		$title = "Register";
		return View::make('user.register')
			->with('title',$title);		
	}
	
	// If a user attempts to register
	public function post_register() {
		$input = Input::all();
		
		// email and password must be provided. Email must be unique
		$rules = array(
			'email' 	=> 'required|unique:users|email',
			'password'	=> 'required'
		);
		
		$v = Validator::make($input, $rules);
		
		if($v->fails()) {
			return Redirect::to('register')->with_errors($v);
		} else {
		// Hash password and use the $user class to stick in database
			$password = $input['password'];
			$password = Hash::make($password);
			
			$user = new User;
			$user->email 	= $input['email'];
			$user->name	= $input['name'];
			$user->team	= $input['team'];
			$user->password	= $password;
			$user->save();
			
			return Redirect::to('login');
		}
	}
	
	// If user is logged in, view their profile
	public function get_profile() {
		$session = Session::get('name');
		
		// Get info on user, team and how many steps they have from session
		$thisuser = User::where('email', '=', $session)->first();
		$teammembers = User::where('team','=',$thisuser->team)->get("email");
		
		$allmetrics = Metric::where('email','=',$session)->get();
		
		// Number of steps is set 
		$foo = 0;
		foreach($allmetrics as $steps){
			$foo += $steps->steps;
		}
		
		$thisuser->cumulative = $foo;	
		$thisuser->save();
		$counter = 0;
		
		// Set title using User's name
		$title = $thisuser->name . "'s Profile";
		
		// Generates a CSV table so I can run more detailed metrics in excel if I want to, or send people their files for their own keeping.
		$table = Metric::where('email','=',$session)->get(array('updated_at','steps'));
		$usersalt = "public/data/USER_" . $thisuser->name ."_";
	    $file = fopen($usersalt . 'metrics.csv', 'w'); //for tsv, change to metrics.tsv
	    foreach ($table as $row) {
	        fputcsv($file, $row->to_array()); //for tsv, add ,"\t"
	    }
	    fclose($file);
		
		if ($table != null){
			foreach($table as $row) {
				$data[] = $row->to_array();
			}
		} else {
			$data = array(0,0);
		}
		
		// Set variables used for filling in the individual user page template
		return View::make('user.profile')
			->with('title',$title)
			->with('users', User::all())
			->with('metrics', Metric::all())
			->with('usermetrics', Metric::where('email','=',$session)->get())
			->with('thisuser', User::where('email','=',$session)->first())
			->with('team', User::where('team','=', $thisuser->team)->get())
			->with('count', $counter)
			->with('input', $session)
			->with('data',$data)
			->with('cumulative',$thisuser->cumulative);
	}
	
	// Logs user out
	public function get_logout(){
		Auth::logout();
		return Redirect::to('/');
	}
	
	// If user wants to view the rest of their team's metrics
	public function get_team() {
		$session = Session::get('name');
		$team = User::where('email', '=', $session)->first();
		//$title = User::where('email','=',$session)->first()->team;
		return View::make('user.team')
			->with('title', "Team Page")
			->with('thisuser', User::where('email','=',$session)->first())
			->with('users', User::all())
			->with('team', User::where('team','=', $team->team)->get());
	}
	
	// When a user wants to edit their email address or what team they're on
	public function get_edit(){
		$session = Session::get('name');
		$team = User::where('email', '=', $session)->first();
		return View::make('user.edit')
			->with('title','Edit your profile')
			->with('thisuser', User::where('email','=',$session)->first())
			->with('team', User::where('team','=',$team->team)->get());
	}
	
	// If changes are made, this function called to commit them to database
	public function post_edit() {
		$session = Session::get('name');
		$thisuser = User::where('email','=',$session)->first();
		$input = Input::all();
		
		$rules = array();
		
		
		$v = Validator::make($input, $rules);
		
		
		if($v->fails()) {
			return Redirect::to('edit')
				->with_errors($v)
				->with('title', "FAILURE")
				->with('thisuser', $thisuser)
				->with('message', "FAILS");
		} else {
			User::update($thisuser->id, array(
				'name'=>$input['name'],
				'team'=>$input['team']
			));
			
			return Redirect::to('profile')
				->with('title', "NOTHING HAS HAPPENED Edit your profile")
				->with('thisuser', $thisuser)
				->with('message','Profile updated successfully!');
		}
	}
}
