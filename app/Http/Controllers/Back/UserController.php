<?php

namespace App\Http\Controllers\Back;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{

    public function __construct(){

        $this->middleware('auth');
    }
    
    public function index(){
        
        $users = User::all();
        
        return view('back.users.index', compact('users'));
    }
    
    public function destroy($id){

        $user = User::findOrFail($id);
        

        $user->delete();

        return redirect("admin/user")
            ->with('success', 'L\'utilisateur a bien été supprimé');
    }

    public function edit($id){
        
        $user = User::findOrFail($id);

        return view('back.users.edit', compact('user'));
    }

    public function update(Request $request, $id){

        $this->validate($request,
            [
                'role' => 'nullable|string|in:editeur,responsable'
            ]
        );

        $user = User::findOrFail($id);
        $user->update($request->only('role'));

        return redirect("admin/users")
            ->with('success', 'L\'Utilisateur a bien été modifié');
    }

}
