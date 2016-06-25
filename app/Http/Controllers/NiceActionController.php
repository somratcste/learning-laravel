<?php
namespace App\Http\Controllers;
use \Illuminate\Http\Request;

class NiceActionController extends Controller 
{
	public function getNiceAction($action , $name= null)
	{
		return view('actions.' . $action , ['name' => $name] );
	}

	public function postNiceAction(Request $request)
	{
		if(isset($request['action']) && isset($request['name']))
		{
			if(strlen($request['action']) > 0 )
			return view('actions.nice' , ['action' => $request['action'] , 'name' => $request['name']]);
		}
		return redirect()-back();
	}
}