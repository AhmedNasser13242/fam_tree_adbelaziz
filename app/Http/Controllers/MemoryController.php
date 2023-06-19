<?php

namespace App\Http\Controllers;

use App\User;
use App\Memory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\MemoryRequest;

class MemoryController extends Controller
{
    public function AllMemory(){
        $memories = Memory::latest()->get();
        return view('users.memory.memory_all',compact('memories'));
    }

    public function ViewMemory($user){
        $users = User::findOrFail($user);
        $memories = Memory::where('user_id', $user)->get();
        return view('users.memory.memory_view',compact('users','memories'));
    }

    public function AddMemory($id){
        $user = User::findOrFail($id);
        return view('users.memory.memory_add',compact('user'));
    }

    public function StoreMemory(MemoryRequest $request){
        $validated = $request->validated();
        Memory::create($request->post());
        return redirect()->route('all.memory');
    }

    public function EditMemory($id){
        $memories = Memory::findOrFail($id);
        return view('users.memory.memory_edit',compact('memories'));
    }

    public function UpdateMemory(MemoryRequest $request){
        $validated = $request->validated();
        $memory_id = $request->id;
        Memory::findOrFail($memory_id)->update($request->post());
        return redirect()->route('all.memory');
    }

    public function DeleteMemory($id){
        Memory::findOrFail($id)->delete();
        return redirect()->back();
    }


}