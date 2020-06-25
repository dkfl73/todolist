<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\todotask;

class taskController extends Controller
{
	public function submit_post(Request $task){
		$check = $task->validate(['task'=>'required']); // check errors

		$tsk = new todotask();
		$tsk->tasks = $task->input('task'); //insert in db
		$tsk->save();
		return redirect()->route('select');//insert->select->main
	}

	public function select() {	
	return view('TODO-list', ['data' =>todotask::all()]); //select from db
	}

	public function delete($id) {	
	todotask::find($id)->delete();//delete from db
	return redirect()->route('select');//delete->select->main
	}

}