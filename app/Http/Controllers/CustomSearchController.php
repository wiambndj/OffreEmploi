<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CustomSearchController extends Controller
{
    function index()
    {
     return view('search');
    }

    function action(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data =  DB::table('companies')
       ->join('jobs', 'jobs.user_id', '=', 'companies.id')
         ->where('jobs.intitule', 'like', '%'.$query.'%')
         ->orWhere('jobs.domaine', 'like', '%'.$query.'%')
         ->orWhere('jobs.type', 'like', '%'.$query.'%')
         ->orWhere('jobs.remun', 'like', '%'.$query.'%')
         ->orderBy('jobs.id', 'desc')
         ->get();
         
      }
      else
      {
       $data = DB::table('jobs')
         ->orderBy('id', 'desc')
         ->get();
      }
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
        $output .= '


        <tr>
        <td>
              <div class="col-lg-12 mt-4 pt-2">
        <div class="job-list-box border rounded">
            <div class="p-3">
                <div class="row align-items-center">
                    <div class="col-lg-2">
                        <div class="company-logo-img">
                            <img src="" alt="" class="img-fluid mx-auto d-block">
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-9">
                        <div class="job-list-desc">
                            <h6 class="mb-2"><a href="" class="text-dark">'.$row->intitule.'</a></h6>
                            <p class="text-muted mb-0"><i class="mdi mdi-bank mr-2"></i>'.$row->domaine.'</p>
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item mr-3">
                                    <p class="text-muted mb-0"><i class="mdi mdi-map-marker mr-2"></i>{'.$row->domaine.'</p>
                                </li>

                                <li class="list-inline-item">
                                    <p class="text-muted mb-0"><i class="mdi mdi-clock-outline mr-2"></i>'.$row->domaine.'</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="job-list-button-sm text-right">
                         

                            <div class="mt-3">
                                <a href="{{route ('emplois/', $job->id)}}"class="btn btn-sm btn-primary">Voi details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>










    </td>
        </tr>
        ';
       }
      }
      else
      {
       $output = '
       <tr>
        <td align="center" colspan="5">No Data Found</td>
       </tr>
       ';
      }
      $data = array(
       'table_data'  => $output,
       'total_data'  => $total_row
      );

      echo json_encode($data);
     }
    }
}


