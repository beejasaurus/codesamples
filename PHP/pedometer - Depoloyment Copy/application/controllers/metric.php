<?php

class Metric_Controller extends Base_Controller {
	public $restful = true;
	
	public function get_index(){
		return View::make('metric.index');
	}
	
	public function post_individual() {
		$session = Session::get('name');
		$thisuser = User::where('email', '=', $session)->first();
		
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
			$metric 		= new Metric;
			$metric->steps 	= $input['steps'];
			$metric->email	= $thisuser->email;
			$metric->save();
			
			
			return Redirect::to('profile')
				->with('title', $thisuser->name . "'s Profile")
				->with('thisuser', $thisuser);
		}
	}	
	
	public function post_destroy() {
		$session = Session::get('name');
		$thisuser = User::where('email', '=', $session)->first();
		
		$metric = Metric::find(Input::get('id'))->first();
		$thisuser->cumulative = $thisuser->cumulative - $metric->steps;
		Metric::find(Input::get('id'))->delete();
		return Redirect::to('profile')
			->with('thisuser', $thisuser)
			->with('message','The metric was deleted successfully!')
			->with('steps',$metric->steps);
	}
}
