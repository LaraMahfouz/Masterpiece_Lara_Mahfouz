<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\AuthenticatesUsers;



class UserController extends Controller
{
    use AuthenticatesUsers;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
    
        // $user = User::all();
        $users = 'user';        
        // $admins = User::find($admin);
        $user = User::query()
        ->where('admin', 'LIKE', $users)
        ->get();
        // return view('dashboardviews.admindash', compact('admins'));

        return view('dashboardviews.usersdash', [
            "x" => $user
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
 
       /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param User $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('public.edit',compact('user'));
    }

    public function edituser($id)
    {
        $user = User::find($id);
        return view('editprofile',compact('user'));
    }

 /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param User $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if 
        ($request->hasFile('admin_image')) {
            $file = $request->file('admin_image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('imager', $filename);
        }
        else {
            $filename = "defult.jpg";
           
        }

        User::where("id",$id)->update([
            'user_name'=>$request['name'],
            'user_bio'=>$request['user_bio'],
            'last_seen'=>$request['last_seen'],
            'user_password'=>Hash::make('password'),
            'user_email'=>$request['email'],
            'user_image'=>$filename,
            'user_mobile'=>$request['user_mobile'],
            'user_social_fb'=>$request['user_social_fb'],
            'user_social_in'=>$request['user_social_in'],
        ]) ;
        return redirect("usersdash");
}


 /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param User $user
     * @return \Illuminate\Http\Response
     */
    public function adminupdate(Request $request, $id)
    {
        if 
        ($request->hasFile('admin_image')) {
            $file = $request->file('admin_image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('imager', $filename);
        }
        else {
          
            $filename = User::find($id)->user_image;
        }
        User::where("id",$id)->update([
            'name'=>$request['admin_name'],
            'email'=>$request['admin_email'],
            'password'=>Hash::make('admin_password'),
            'user_image'=>$filename,
            // 'user_mobile'=>$request['user_mobile'],
            // 'user_social_fb'=>$request['user_social_fb'],
            // 'user_social_in'=>$request['user_social_in'],
        ]) ;
        return redirect("admindash");
}


public function updateuser(Request $request, $id)
    {
        if 
        ($request->hasFile('user_image')) {
            $file = $request->file('user_image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('imager', $filename);
        }
        else {
          
            $filename = User::find($id)->user_image;

           
        }

        User::where("id",$id)->update([
            'name'=>$request['name'],
            'user_bio'=>$request['user_bio'],
            'last_seen'=>$request['last_seen'],
            'password'=>Hash::make('password'),
            'email'=>$request['email'],
            'user_image'=>$filename,
            'user_mobile'=>$request['user_mobile'],
            'user_social_fb'=>$request['user_social_fb'],
            'user_social_in'=>$request['user_social_in'],
        ]) ;
        return redirect("profile");

        // return back();
}
/**
     * Remove the specified resource from storage.
     *
     * @param User $user
     * @return \Illuminate\Http\Response
     */

 

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect('usersdash');
    }

}