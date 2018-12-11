<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibraryController extends Controller
{
	/*
	 * This function receives a @request in form of an array and returns
	 * a @response in Json format
	*/
    public function index(Request $request){
    	$final = $request->all();
    	// check if it is an associative or normal array
    	if (!$request->reg &&  !empty($request)) {
    		foreach ($request->all() as $key) {
    			$final = array(
    				'reg' => $key[0],
    				'book' => $key[1],
    				'date' => $key[2]
    			 );
    		}
    	}
    	// more logic to save into a database.
    	return $final;
    }
}
