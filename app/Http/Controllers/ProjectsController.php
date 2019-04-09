<?php

namespace App\Http\Controllers;

// use App\Game;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    //
    // public function index() {
    //     $games = \App\Game::all();
    //     // return $games;
    //     return view('games', compact('games')); 
    // }
    public function create() {
        // $games = \App\Game::all();
        // return $games;
        return view('create'); 
    }

    public function show() {
        return view ('login');
    }
    public function store() {
        // $games = \App\Game::all();
        // return $games;



        // request()->validate([
        //     'name' => ['required', 'min:3'],
        //     'password' => 'required'
        // ]);

        $customer = new \App\Customer();
        $customer->customer_name = request('name');
        // dd('I am here 1');

        $customer->username = request('username');
        // dd('I am here 2');

        $customer->password = request('password');

        $customer->save();

        // return redirect('/projects');

            dd('SUCCESSFULLY CREATED');

        // return view('create'); 
    }


    public function login() {
        // $Items = \App\Item::all();
        $username = request('username');
        $password = request('password');
        // $customer_id = 2;
        // $customer = \App\Customer::all()->where('username', '=' , "bisso");
        $customer = \App\Customer::find($username);
    
        $dbPassword = $customer->password; 

        if($password == $dbPassword ) {
            $customer->login_status=1;
            $customer->save();
            dd('login success');
        }

    }






    
    public function edit($id) {
        // $games = \App\Game::all();
        // return $games;
        $project =  \App\Game::findOrFail($id);

        return view('edit',compact('project')); 
    }

    public function update($id) {
        $project =  \App\Game::find($id);
        $project->title = request('title');
        $project->description = request('description');
        $project->save();
        return redirect('/projects');

        // dd(request()->all());
    }



    public function destroy($id) {
        // $games = \App\Game::all();
        // return $games;
        $project =  \App\Game::find($id)->delete();
        return redirect('/projects');

    }

    // public function store () {
    //     // $games = \App\Game::all();
    //     // return $games;


    //     request()->validate([
    //         'title' => ['required', 'min:3'],
    //         'description' => 'required'
    //     ]);

    //     $project = new \App\Game();
    //     $project->title = request('title');
    //     $project->description = request('description');
    //     $project->save();
    //     return redirect('/projects');
    //     // return view('create'); 
    // }
 }
