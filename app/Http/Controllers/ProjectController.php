<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectRequest;
use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    public function ViewCompany(){

        return view('users.project.project_view',);
    }
    public function AddCompany(){
        $users = Auth::user()->id;
        return view('users.project.project_add',compact('users'));
    }
    public function StoreCompany(ProjectRequest $request){
        $validated = $request->validated();
        Project::create($request->post());
        return redirect()->back();
    }
}