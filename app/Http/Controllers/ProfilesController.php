<?php

namespace App\Http\Controllers;
use Auth;
use Session;
use App\user;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index($name)
    {
        $user = User::where('name', $name)->first();
        return view('profiles.profile')
            ->with('user', $user);
    }
    public function index1($name)
    {
        $user = User::where('name', $name)->first();
        return view('profiles.profilerec')
            ->with('user', $user);
    }
    public function edit()
    {
        return view('profiles.edit')->with('info', Auth::user());
    
    }
    public function update(Request $r)
    {
        $this->validate($r, [
            'location' => 'required',
            'date_naissance' => 'required',
            'name' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'phone' => 'required'
        ]);
        Auth::user()->profile()->update([
            'location' => $r->location,
            'date_naissance' => $r->date_naissance
        ]);
        Auth::user()->update([
            'name' => $r->name,
            'lastname' => $r->lastname,
            'email' => $r->email,
            'phone' => $r->phone
        ]);
        if(request()->has('avatar')){
            $avataruploaded = request()->file('avatar');
            $avatarname = time() .'.'. $avataruploaded->getClientOriginalExtension();
            $avatarpath = public_path('/images/');
            $avataruploaded->move($avatarpath,$avatarname);
            Auth::user()->update([
                'avatar' => '/images/' .$avatarname
            ]);
        }
        Session::flash('success', 'Profile updated.');
        return redirect()->back();}

        public function changePasswordForm()
        {
           
            return view('profiles.changepassword') ->with('info', Auth::user());
                
        }
        public function edit1()
        {
            return view('profiles.editrec')->with('info', Auth::user());
        
        }
        public function update1(Request $r)
        {
            $this->validate($r, [
         
                'name' => 'required',
                'lastname' => 'required',
                'email' => 'required',
                'phone' => 'required'
            ]);
       
            Auth::user()->update([
                'name' => $r->name,
                'lastname' => $r->lastname,
                'email' => $r->email,
                'phone' => $r->phone
            ]);
           
            Session::flash('success', 'Profile updated.');
            return redirect()->back();}
}
