<?php

namespace App\Http\Controllers;

use App\Admin;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use SebastianBergmann\Environment\Console;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


class AdminController extends Controller
{
    use AuthenticatesUsers;

    public function index()
    {
        // $admins = User::all();
        $admin = 'admin';
        // $admins = User::find($admin);
        $admins = User::query()
            ->where('admin', 'LIKE', $admin)
            ->get();

        return view('dashboardviews.admindash', compact('admins'));
        // $superadmin ='superadmin';
        // $superadmins = User::query()
        // ->where('admin', 'LIKE', $superadmin)
        // ->get();
        // return view('dashboardviews.admindash', compact('admins','superadmin'));


    }
    public function validation($request)
    {
        // $request->validate([
        //     'name'               => 'required',
        //     'email'              => 'required|email',
        //     'password'           => 'required|min:8|max:16',
        //     'user_image'         => 'mimes:jpeg,jpg,png,gifmax:10000',
        // ]);


    }


    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $validate = [
        //     'name'       => 'required',
        //     'email'      => ['required','unique:users'],

        // ];
        // $this->validate($request, $validate);


        if ($request->hasFile('admin_image')) {
            $file = $request->file('admin_image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('imager', $filename);
            error_log('yes ok');
        } else {
            $filename = "defult.jpg";
            error_log('not ok');
        }

        User::create([
            "name"           => $request->admin_name,
            "email"          => $request->admin_email,
            'password'       => Hash::make($request->admin_password),
            'admin'          => $request->super_admin,
            "user_image"     => $filename,
        ]);

        return redirect('admindash');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param admin $admin
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $admin = User::where('id', $id)->get()->first();
        // return view('dashboardviews.editadmin', compact('admin'));
        return view('dashboardviews.editadmin', [
            "Admin" => $admin
        ]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param admin $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $id)
    {

        $this->validation($request);
        if ($request->hasFile('admin_image')) {
            $file = $request->file('admin_image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('imager', $filename);
        } else {
            $filename = User::find($id)->user_image;
        }

        User::where('id', $id)->update([
            "name"           => $request->admin_name,
            "email"          => $request->admin_email,
            'password'       => Hash::make($request->admin_password),
            'admin'          => $request->super_admin,
            "user_image"     => $filename,

        ]);
        return redirect('admindash');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param admin $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $admins = User::findOrFail($id);
        $admins->delete();
        return redirect('admindash');
    }
}
