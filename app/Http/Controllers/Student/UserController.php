<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Mail\test;
use App\Models\Country;
use App\Models\Job;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function GuzzleHttp\Promise\all;

class UserController extends Controller
{
    public function index_account()
    {

  $details = User::select('id','name','email')->get();
        $Country = Country::select('name')->get();
        return view('site.account', compact('Country','details'));
    }

    public function register(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            $usersCount = User::where('email', $data['email'])->count();
            if ($usersCount > 0) {
                return redirect()->back()->with('error_message', 'Email Already Exist');

            } else {
                $user = new User;
                $user->name = $data['name'];
                $user->email = $data['email'];
                $user->password = bcrypt($data['password']);
                $user->save();
                if (Auth::attempt(['email' => $data['email'], 'password' => $data['password']])) {
//                    Session::put('frontSession',$data['email']);
                    return redirect('/');

                }
            }

        }
        return view('auth.register');
    }

    public function login(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            if (Auth::attempt(['email' => $data['email'], 'password' => $data['password']])) {
                return redirect()->route('Account');
            } else {
                return redirect()->back();
            }
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function account(Request $request)
    {
        $user_id = Auth::user()->id;
        $userDetails = User::find($user_id,'email','name');
        $countries = Country::get();

        if ($request->isMethod('post')) {
            $data = $request->except('email','name');
            /*echo "<pre>"; print_r($data); die;*/



            if (empty($data['address'])) {
                $data['address'] = '';
            }

            if (empty($data['city'])) {
                $data['city'] = '';
            }

            if (empty($data['state'])) {
                $data['state'] = '';
            }

            if (empty($data['country'])) {
                $data['country'] = '';
            }

            if (empty($data['pincode'])) {
                $data['pincode'] = '';
            }

            if (empty($data['mobile'])) {
                $data['mobile'] = '';
            }

            $user = User::find($user_id);
//            $user->name = $data['name'];
            $user->address = $data['address'];
            $user->city = $data['city'];
            $user->state = $data['state'];
            $user->country = $data['country'];
            $user->pincode = $data['pincode'];
            $user->mobile = $data['mobile'];
            $user->save();
            return redirect()->to('/')->with('flash_message_success', 'Your account details has been successfully updated!');
        }

        return view('site.account')->with(compact('countries', 'userDetails'));


    }
    public function form(){
        return view('student.form');
    }
    public  function send(Request $request){
        $file = $request->file('file');
        $data = [
          'name'=>$request->nama ,
            'file'=>$request->file('file'),

        ];
        $to = 'mmsh7398@gmail.com';
\Mail::to($to)->send( new \App\Mail\test($data));
echo 'sent suvccc';

    }
    public function show(){
        $Jobs = Job::Selection()->paginate(PAGINATION_COUNT);
        return view('Student.jobShow',compact('Jobs'));

    }

}
