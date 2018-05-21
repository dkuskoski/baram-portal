<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\ActivationService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class RegisterController extends Controller {
	/*
	 * |--------------------------------------------------------------------------
	 * | Register Controller
	 * |--------------------------------------------------------------------------
	 * |
	 * | This controller handles the registration of new users as well as their
	 * | validation and creation. By default this controller uses a trait to
	 * | provide this functionality without requiring any additional code.
	 * |
	 */
	
	use RegistersUsers;
	
	/**
	 * Where to redirect users after registration.
	 *
	 * @var string
	 */
	protected $redirectTo = '/home';
	protected $activationService;
	
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct(ActivationService $activationService) {
		$this->middleware ( 'guest' );
		$this->activationService = $activationService;
	}
	
	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param array $data        	
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	protected function validator(array $data) {
		return Validator::make ( $data, [ 
				'f_name' => 'required|max:255',
				'l_name' => 'required|max:255',
				'email' => 'required|email|max:255|unique:users',
				'password' => 'required|min:6|confirmed',
				'username' => 'required|min:4|max:25',
				'about' => 'max:2500' 
		] );
	}
	
	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param array $data        	
	 * @return User
	 */
	protected function create(array $data) {
		
		// $this->activationService->sendActivationMail($user);
		return User::create ( [ 
				'name' => '',
				'email' => $data ['email'],
				'password' => bcrypt ( $data ['password'] ),
				'f_name' => $data ['f_name'],
				'l_name' => $data ['l_name'],
				'username' => $data ['username'],
				'level' => 0,
				'status' => 0,
				'about' => $data ['about'],
				'image' => $data ['image'] 
		] );
	}
	public function create_user(Request $data) {
		$rules = array (
				'f_name' => 'required|max:255',
				'l_name' => 'required|max:255',
				'email' => 'required|email|max:255|unique:users',
				'password' => 'required|min:6|confirmed',
				'username' => 'required|min:4|max:25'
				//'about' => 'max:2500' 
		);
		
		$validator = Validator::make ( Input::all (), $rules );
		if ($validator->fails ()) {
			
			// get the error messages from the validator
			$messages = $validator->messages ();
			
			// redirect our user back to the form with the errors from the validator
			return back ()->withErrors ( $validator );
		} else {
			$user = new User ();
			$user->name = '';
			$user->email = $data ['email'];
			$user->password = bcrypt ( $data ['password'] );
			$user->f_name = $data ['f_name'];
			$user->l_name = $data ['l_name'];
			$user->username = $data ['username'];
			$user->level = 0;
			$user->status = 0;
			$user->about = '';
			$user->image = 'user.png';
			$user->suspension = null;
			$user->save ();
			
			$this->activationService->sendActivationMail ( $user );
			return redirect ( '/login' )->with ( 'status', 'We sent you an activation code. Check your email.' );
		}
	}
}
