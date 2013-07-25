<?php

class User_Controller extends Base_Controller {
	public $restful = true;
	
	public function get_index(){
		$title = "Login";
		return View::make('user.index')	
			->with('title',$title);
	}
	
	public function post_index(){
		$input = Input::all();
		
		$rules = array(
			'email' 	=> 'required|email',
			'password' 	=> 'required'
		);
		
		$v = Validator::make($input, $rules);
		
		if($v->fails()){
			return Redirect::to('login')->with_errors($v);
		} else {
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
	
	public function get_register(){
		$title = "Register";
		return View::make('user.register')
			->with('title',$title);		
	}
	
	public function post_register() {
		$input = Input::all();
		
		$rules = array(
			'email' 	=> 'required|unique:users|email',
			'password'	=> 'required'
		);
		
		$v = Validator::make($input, $rules);
		
		if($v->fails()) {
			return Redirect::to('register')->with_errors($v);
		} else {
			$password = $input['password'];
			$password = Hash::make($password);
			
			$user = new User;
			$user->email 	= $input['email'];
			$user->name		= $input['name'];
			$user->team		= $input['team'];
			$user->password	= $password;
			$user->save();
			
			return Redirect::to('login');
		}
	}
	
	public function get_profile() {
		$session = Session::get('name');
		
		$thisuser = User::where('email', '=', $session)->first();
		$teammembers = User::where('team','=',$thisuser->team)->get("email");
		
		$allmetrics = Metric::where('email','=',$session)->get();
					  
		$foo = 0;
		foreach($allmetrics as $steps){
			$foo += $steps->steps;
		}
		
		$thisuser->cumulative = $foo;	
		$thisuser->save();
		$counter = 0;
		
		$title = $thisuser->name . "'s Profile";
				
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
	
	public function get_logout(){
		Auth::logout();
		return Redirect::to('/');
	}
	
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
	
	public function get_edit(){
		$session = Session::get('name');
		$team = User::where('email', '=', $session)->first();
		return View::make('user.edit')
			->with('title','Edit your profile')
			->with('thisuser', User::where('email','=',$session)->first())
			->with('team', User::where('team','=',$team->team)->get());
	}
	
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
