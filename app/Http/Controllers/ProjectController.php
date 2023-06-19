<?php

namespace App\Http\Controllers;

use App\User;
use App\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ProjectRequest;
use Symfony\Component\DomCrawler\Image;

class ProjectController extends Controller
{
    public function ViewCompany($user){
        $users = User::findOrFail($user);
        $projects = Project::where('user_id', $user)->get();
        return view('users.project.project_view',compact('projects', 'users'));
    }
    public function AddCompany($id){
        $users = User::findOrFail($id);
        return view('users.project.project_add',compact('users'));
    }
    public function StoreCompany(ProjectRequest $request){
        $validated = $request->validated();
        if ($image = $request->file('company_image')) {
            $destinationPath = 'company_image/';
            $profileImage = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);

            
            $input = $profileImage;
    
            $postData = ['user_id' => $request->user_id,
            'company_phone' => $request->company_phone,
            'company_facebook' => $request->company_facebook,
            'company_twitter' => $request->company_twitter,
            'company_instagram' => $request->company_instagram,
            'company_links' => $request->company_links,
            'company_name' => $request->company_name,
            'company_address' => $request->company_address,
            'company_image' => $input];
                    Project::insert($postData);
        }

        
        return redirect()->route('profile');
    }
    public function EditCompany($id){
        $project = Project::findOrFail($id);
        return view('users\project\project_edit', compact('project'));
    }
    public function UpdateCompany(ProjectRequest $request){
        $validated = $request->validated();
        $project_id = $request->id;
    
        if ($image = $request->file('company_image')) {
            $destinationPath = 'company_image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input = "$profileImage";
            $postData = [
                'user_id' => $request->user_id,
                'company_phone' => $request->company_phone,
                'company_facebook' => $request->company_facebook,
                'company_twitter' => $request->company_twitter,
                'company_instagram' => $request->company_instagram,
                'company_links' => $request->company_links,
                'company_name' => $request->company_name,
                'company_address' => $request->company_address,
                'company_image' => $input
            ];
        }else{
            $postData = [
                'user_id' => $request->user_id,
                'company_phone' => $request->company_phone,
                'company_facebook' => $request->company_facebook,
                'company_twitter' => $request->company_twitter,
                'company_instagram' => $request->company_instagram,
                'company_links' => $request->company_links,
                'company_name' => $request->company_name,
                'company_address' => $request->company_address,
            ];
        }

            
        Project::findOrFail($project_id)->update($postData);
        return redirect()->route('profile');
    }
    public function DeleteCompany($id){
        Project::findOrFail($id)->delete();
        return redirect()->back();
    }


    public function AllCompany(){
        $projects = project::latest()->get();
        return view('users.project.project_all',compact('projects'));
    }
}