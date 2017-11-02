<?php

namespace App\Http\Controllers\Auth;

use App\Notifications\RegisterUser;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        return view('auth.Front.register');
    }


    public function confirm($id, $token){

        $user = User::where('id', $id)->where('confirmation_token', $token)->first();


        if($user){

            $user->update(['confirmation_token' => null]);
            $this->guard()->login($user);

            return  redirect($this->redirectPath())->with('success', 'Votre compte a été confirmé avec succès');
        } else {

            return redirect('/login')->with('error', 'Le lien n\'est plus valide');
        }
    }


    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        //$this->guard()->login($user);
        $user->notify(new RegisterUser());
        return $this->registered($request, $user)
            ?: redirect('/login')->with('success', 'Votre compte à bien été créer, 
                                                    comfirmer votre inscription grâce au mail que vous recevrez');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nom' => 'required|string|max:255|min:3',
            'prenom' => 'required|string|max:255|min:3',
            'email' => 'required|string|email|max:255|unique:users',
            'telephone' => 'required|string|max:13|min:8|unique:users',
            'adresse' => 'required|string|max:255',
            'ville' => 'required|string|max:255|min:5',
            'pays' => 'required|string|max:255|min:5',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'nom' => $data['nom'],
            'prenom' => $data['prenom'],
            'telephone' => $data['telephone'],
            'adresse' => $data['adresse'],
            'ville' => $data['ville'],
            'pays' => $data['pays'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'role' => null,
            'confirmation_token' => str_replace('/', '', bcrypt(str_random(16)))
        ]);
    }
}
