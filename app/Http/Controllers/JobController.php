<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Job;
use Auth;
use Session;
use App\Http\Requests\cvRequest;

class JobController extends Controller
{
   
    public function create() {
        
        return view('offre');
     }
     
    public function storeOffre(Request $request ) {
        $job = new Job();

        $job->intitule = $request->input('intitule');
        $job->domaine = $request->input('domaine');
        $job->diplome = $request->input('diplome');
        $job->experience = $request->input('experience');
        $job->description = $request->input('description');
        $job->lieu = $request->input('lieu');
        $job->competence = $request->input('competence');
        $job->remun = $request->input('remun');
        $job->debut = $request->input('debut');
        $job->depot = $request->input('depot');
        $job->type = $request->input('type');
        $job->delai = $request->input('delai');

        $job->user_id = Auth::user()->id;
        
        $job->save();
                    
     }
}
