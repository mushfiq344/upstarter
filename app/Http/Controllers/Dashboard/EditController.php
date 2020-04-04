<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Auth\ResetPasswordController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use File;
use Validator;
use App\User;
class EditController extends Controller
{
    public function delete_image(Request $request){
        if($request->ajax())
        {
            FunctionController::deleteImage($request->src);
            return Response('done');
        }
    }

    public function delete_object_call(Request $request){
        if($request->ajax()) {
            FunctionController::delete_object($request->id,$request->type);
            return Response($request);
        }

    }


    public function get_states(Request $request){
        if($request->ajax())
        {
            return Response(FunctionController::get_states($request->country_id));
        }
    }
    public function get_cities(Request $request){
        if($request->ajax())
        {

            return Response(FunctionController::get_cities($request->state_id));
        }
    }

    public function inc_application(Request $request){
        if($request->ajax())
        {
            FunctionController::inc_application($request->id,$request->type);
            return Response('done');

        }
    }

    public function saveChangePassword(Request $request)
    {


        $validator = Validator::make($request->all(), [
            'old_password' => 'required',
            'new_password' => 'required|string|min:8|confirmed:new_password_confirmation',
        ]);

        if($validator->fails()){
            return back()->withErrors($validator)->withInput($request->all());

        }

        if( ! \Hash::check($request->input('old_password'),\Auth::user()->password)){
            return back()->with('error', 'Credentials does not match. Please try again');
        }

        $user = User::find(\Auth::user()->id);
        $user->password = bcrypt($request->input('new_password'));

        if(!$user->save()){
            return back()->with('error', 'Something went wrong. please try again');
        }

        return back()->with('success', 'Password updated succfully');
    }


}
