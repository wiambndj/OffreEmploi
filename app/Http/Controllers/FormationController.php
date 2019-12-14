<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Cv;
use App\Experience;
use App\Formation;
use Auth;
use Session;
use App\Http\Requests\cvRequest;


class FormationController extends Controller
{


    public function index() {
        
    
        $listcv = Cv::where('user_id',Auth::user()->id)->get();
        
      
      

      return view('profiles.index', ['cvs' => $listcv]);
  }
   public function edit($id) {

  $formation =Formation ::find($id);

 

  return view('profiles.editform', ['formation ' => $formation ]);
     return redirect('exp');

}
public function update(Request $request, $id) {
       
  $formation = Formation ::find($id);



  $formation ->titre = $request->input('titre');
  $formation ->diplome = $request->input('diplome');
  $formation ->domaine = $request->input('domaine');
  $formation ->etablissement = $request->input('etablissement');
  $formation ->lieu = $request->input('lieu');
  $formation ->debut = $request->input('debut');
  $formation ->fin = $request->input('fin');
  $formation ->description = $request->input('description');

  
  $formation->save();

  return redirect('exp');
}
public function destroy(Request $request,$id){
 $formation = Formation::find($id);
 $formation->delete();
 return redirect('exp');


}

  public function create() {
      
     return view('profiles.createform');
  }
  public function store(Request $request,$id){
    $cv = Cv::find($id);
      $formation = new Formation();
      $formation->cv_id =$cv->id;
      $formation->titre = $request->input('titre');
      $formation->diplome = $request->input('diplome');
      $formation->domaine = $request->input('domaine');
      $formation->etablissement = $request->input('etablissement');
      $formation->lieu = $request->input('lieu');
      $formation->type = $request->input('type');
      $formation->debut = $request->input('debut');
      $formation->fin = $request->input('fin');
      $formation->description = $request->input('description');
      $formation->save();
      return redirect()->back();
  }
}
