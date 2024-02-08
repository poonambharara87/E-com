<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User;
use DataTables;

class UserController extends Controller
{
    use HasFactory;


    public function index(Request $request)
    {
        $users = User::all();
        return view('users/index')->with(['users' => $users]);
    }

    public function forgot_password(Request $request)
    {
        try{

            $user = User::where('email', $request->email)->get();

            if(count($user) > 0)
            {
                $token = Str::random(40);
                $domain = URL::to('/');
                $url = $domain.'/reset-password?token'.$token;

                $data['url'] = $domain;
                $data['email'] = $request->email;
                $data['title'] = "Password Reset";
                $data['body'] = "Please click on below link to reset your password";

                Mail::send('ForgotPasswordMail', ['data' => $data], function($message) use ($data){
                    $message->to($data['email'])->subject($data['title']);
                });

                $datetime = Carbon::now()->forgot('Y-m-d H:i:s');
                PasswordReset::updateOrCreate([
                    ['email' => $request->email],
                    [
                        'email' => $request->email,
                        'token' => $token,
                        'created_at' => $datetime,
                    ]
                ]);
                return response()->json(['success'=>true, 'Please Check Your Mail Reset']);
            }else{
                return response()->json(['404', 'Record not Found']);
            }
        }catch(Exception $e){

        }
    }


    public function reset_password_forgot()
    {
        $resetData = PasswordReset::where('token', $request->token)->get();
        if(isset($request->token) && count($resetData) > 0)
        {
            $user = User::where('email', $resetData[0]['email'])->get();
            return view('resetPassword', compact('user'));
        }else{
            return view('404');
        }
    }
}

