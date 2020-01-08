<?php

namespace App\Http\Controllers;
<<<<<<< HEAD
use Hash;
=======
>>>>>>> 00ba623784c1670fcf9ed4e4d70096915b0c2792
use Auth;
use Session;
use App\user;
use Illuminate\Http\Request;
<<<<<<< HEAD
use Illuminate\Validation\Validator;
=======

>>>>>>> 00ba623784c1670fcf9ed4e4d70096915b0c2792
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
<<<<<<< HEAD
        public function changePassword(Request $request)
        {
            if(!(Hash::check($request->get('current_password'), Auth::user()->password))){

                return back()->with('error','votre mot de passe actuel correspond à ce que vous avez fourni');
            }
            if(strcmp($request->get('current_password'),$request->get('new_password'))==0)
            {
                return back()->with('error','votre mot de passe actuel ne peut pas être le même que le nouveau mot de passe');
            }
            $request->validate([
            'current_password'=>'required',
            'new_password'=>'required|string|min:8|confirmed'
            ]);
            $user =Auth::user();
            $user->password=bcrypt($request->get('new_password'));
            $user->save();
           return back()->with('message','Le mot de passe a été changé avec succès');
           
                
        }
=======
>>>>>>> 00ba623784c1670fcf9ed4e4d70096915b0c2792
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
