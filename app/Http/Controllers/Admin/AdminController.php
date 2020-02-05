<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Company;
use Illuminate\Support\Facades\Auth;
class AdminController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index(){

        return view('admin.home');
    }
    public function affichage() {
        
    
        $list = User::where('admin','=','0')->get();

      return view('admin.listecandi',['lists' => $list]);
  }
  public function affichageRec() {
        
    
    $list = User::where('admin','=','1')->get();

  return view('admin.listerec',['lists' => $list]);
}

public function affichageComp() {
        
    
    $list = Company::All();

  return view('admin.listecomp',['lists' => $list]);
} 

  public function destroy(Request $request,$id){
    $list= User::find($id);
    $list->delete();
    return redirect()->back();


}
public function destroyComp(Request $request,$id){
    $listcomp= Company::find($id);
    $listcomp->delete();
    return redirect()->back();


}

}
