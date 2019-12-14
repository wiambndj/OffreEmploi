<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Cv;
use App\Experience;
use Auth;
use Session;
use App\Http\Requests\cvRequest;
class ExperienceController extends Controller
{    
       public function index() {
        
    
          $listcv = Cv::where('user_id',Auth::user()->id)->get();
          
        
        

        return view('profiles.index', ['cvs' => $listcv]);
    }
     public function edit($id) {

    $experience = Experience::find($id);

   

    return view('profiles.editexp', ['experience' => $experience]);
       return redirect('exp');

 }
 public function update(Request $request, $id) {
         
    $experience= Experience::find($id);

  

    $experience->intitule = $request->input('intitule');
    $experience->lieu = $request->input('lieu');
    $experience->debut = $request->input('debut');
    $experience->fin = $request->input('fin');
    $experience->description = $request->input('description');

    
    $experience->save();
    return redirect('exp');
}
public function destroy(Request $request,$id){
   $experience = Experience::find($id);
   $experience->delete();
   return redirect('exp');


}

    public function create() {
        
       return view('profiles.createexp');
    }
    public function store(Request $request,$id){
        $cv = Cv::find($id);
        $experience = new Experience();
        $experience->cv_id =$cv->id;
        $experience->intitule = $request->input('intitule');
        $experience->lieu = $request->input('lieu');
        $experience->debut = $request->input('debut');
        $experience->fin = $request->input('fin');
    	$experience->description = $request->input('description');
        $experience->save();
        return redirect()->back();
    }
}
