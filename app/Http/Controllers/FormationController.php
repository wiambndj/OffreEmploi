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


<<<<<<< HEAD

=======
    public function index() {
        
    
        $listcv = Cv::where('user_id',Auth::user()->id)->get();
        
      
      

      return view('profiles.index', ['cvs' => $listcv]);
  }
>>>>>>> 00ba623784c1670fcf9ed4e4d70096915b0c2792
   public function edit($id) {

  $formation =Formation ::find($id);

 

<<<<<<< HEAD
  return view('profiles.editform', ['formation' => $formation ]);
  
=======
  return view('profiles.editform', ['formation ' => $formation ]);
     return redirect('exp');
>>>>>>> 00ba623784c1670fcf9ed4e4d70096915b0c2792

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

<<<<<<< HEAD
  $formation ->type = $request->input('type');
  
  $formation->save();
  return redirect()->back();
=======
  
  $formation->save();

  return redirect('exp');
>>>>>>> 00ba623784c1670fcf9ed4e4d70096915b0c2792
}
public function destroy(Request $request,$id){
 $formation = Formation::find($id);
 $formation->delete();
<<<<<<< HEAD
 return redirect()->back();
=======
 return redirect('exp');
>>>>>>> 00ba623784c1670fcf9ed4e4d70096915b0c2792


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
