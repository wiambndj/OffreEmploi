<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Cv;
use App\Experience;
use App\Langue;
use Auth;
use Session;
use App\Http\Requests\cvRequest;

class LangueController extends Controller
{
    public function store(Request $request,$id){
        $cv = Cv::find($id);
        $langue = new Langue();
        $langue->cv_id =$cv->id;
    	$langue->lang = $request->input('lang');
        $langue->save();
        return redirect()->back();
      
}
}