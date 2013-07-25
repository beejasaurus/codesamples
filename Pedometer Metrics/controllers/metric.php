<?php

// Functions used for individual metrics pages

class Metric_Controller extends Base_Controller {
	public $restful = true;
	
	public function get_index(){
		return View::make('metric.index');
	}
	
	// Called when a user POSTS an individual metric addition (A logged in user can add their number of steps)
	public function post_individual() {
		$session = Session::get('name'); // Get user's name from their session data
		$thisuser = User::where('email', '=', $session)->first(); // Queries database for user's row with info
		
		// Takes user input and validates it as a postive integer
		$input = Input::all();
		Validator::register('positive', function($attribute, $value, $parameter){
			return $value > 0;
		});
		$rules = array(
			'steps'	=> 'required|integer|positive'
		);
		
		$v = Validator::make($input, $rules);
		
		if($v->fails()) {
			return Redirect::to('profile')
				->with_errors($v)
				->with('title', $thisuser->name . "'s Profile")
				->with('thisuser', $thisuser);
		} else {
			// Valid data will use the Metric object to add a new database entry with the number of steps and the user it belongs to. Date time info is automatically performed
			$metric 		= new Metric;
			$metric->steps 	= $input['steps'];
			$metric->email	= $thisuser->email;
			$metric->save();
			
			// Return user to their page
			return Redirect::to('profile')
				->with('title', $thisuser->name . "'s Profile")
				->with('thisuser', $thisuser);
		}
	}	
	
	// Function is called when a user wants to delete an entry (if they put something in by error, etc.)
	public function post_destroy() {
		$session = Session::get('name');
		$thisuser = User::where('email', '=', $session)->first();
		
		// HTML has a form which will post the primary key ID of the specific metric to destroy
		// Finds metric in database via ID and subtracts number from user's cumulative total
		// Deletes ID and return user to their page with updated status
		$metric = Metric::find(Input::get('id'))->first();
		$thisuser->cumulative = $thisuser->cumulative - $metric->steps;
		Metric::find(Input::get('id'))->delete();
		return Redirect::to('profile')
			->with('thisuser', $thisuser)
			->with('message','The metric was deleted successfully!')
			->with('steps',$metric->steps);
	}
}
