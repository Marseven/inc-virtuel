<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function __construct(){

        $this->middleware('auth');
    }

    public function edit(){


        $user = Auth::user();

        return view('front.users.edit', compact('user'));
    }

    public function update(Request $request){

        $user = Auth::user();
        $this->validate($request,
                [
                    'nom' => 'required|string|max:255|min:3',
                    'prenom' => 'required|string|max:255|min:3',
                    'telephone' => "required|string|max:13|min:8|unique:users,telephone, {$user->id}",
                    'adresse' => 'required|string|max:255',
                    'ville' => 'required|string|max:255|min:5',
                    'pays' => 'required|string|max:255|min:5',
                ]
        );

        $user->update($request->only('nom', 'prenom', 'telephone', 'adresse', 'ville', 'pays'));

        return redirect()->back()->with('success', 'Votre modification a bien été effectué');
    }
}
