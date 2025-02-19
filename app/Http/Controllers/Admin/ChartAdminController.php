<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Job;
use App\Company;
use App\Postule;
use Auth;
use App\Spontane;
use Illuminate\Support\Facades\DB;
use App\Charts\UserChart;
class ChartController extends Controller
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function index($annee)
    {
 $a=Auth::user()->company->id;
     $record['chart'] = Job::select(\DB::raw("COUNT(*) as count"))
                    ->whereYear('created_at', $annee)
                    ->where('jobs.user_id','=',$a)
                    ->groupBy(\DB::raw("Month(created_at)"))
                    ->pluck('count');
      
      return view('chart', $record);
    }

/*
    public function index2(Request $request)
    {$a=Auth::user()->company->id;
        $q=$request->get('annee');
     $record['chart'] = Job::select(\DB::raw("COUNT(*) as count"))
     ->where('jobs.user_id','=',$a)
                    ->whereYear('created_at', $q)
                    ->groupBy(\DB::raw("Month(created_at)"))
                    ->pluck('count');
      
      return view('chart', $record);
    }    
    public function highchart()
{
    $viewer['chart'] = Postule::select(\DB::raw("COUNT(*) as count"))

->groupBy(DB::raw("year(created_at)"))
->get()->toArray();
              
$viewer = array_column($viewer, 'count');

$click = Spontane::select(DB::raw("COUNT(*) as count"))

->groupBy(DB::raw("year(created_at)"))
->get()->toArray();
$click = array_column($click, 'count');
return view('highchart')
->with('viewer',json_encode($viewer,JSON_NUMERIC_CHECK))
->with('click',json_encode($click,JSON_NUMERIC_CHECK));
}

public function highchart3()
{

    

/*
   $record['chart'] = Job::select(\DB::raw("COUNT(*) as count"))
    ->whereYear('created_at', 2019)
    ->groupBy(\DB::raw("Month(created_at)"))
    ->pluck('count');

return view('chart2', $record);}
*/
$data=[];

 $record['chart'] = Job::select(\DB::raw("lieu,COUNT(*) as count"))
                ->groupBy(\DB::raw("lieu"))
                ->pluck('count');
              
  return view('chart2', $record);
}

/*$jumLelaki =Job::selectRaw( 'COUNT(*) as count')

->groupBy('lieu')
->get();
$count = $jumLelaki->count;

$response = array(
    'status' => 'success',
    'user_count' => $count
    );
return Response::json($response);*/
/*
public function index5()
{
    $borderColors = [
        "rgba(255, 99, 132, 1.0)",
        "rgba(22,160,133, 1.0)",
        "rgba(255, 205, 86, 1.0)",
        "rgba(51,105,232, 1.0)",
        "rgba(244,67,54, 1.0)",
        "rgba(34,198,246, 1.0)",
        "rgba(153, 102, 255, 1.0)",
        "rgba(255, 159, 64, 1.0)",
        "rgba(233,30,99, 1.0)",
        "rgba(205,220,57, 1.0)"
    ];
    $fillColors = [
        "rgba(255, 99, 132, 0.2)",
        "rgba(22,160,133, 0.2)",
        "rgba(255, 205, 86, 0.2)",
        "rgba(51,105,232, 0.2)",
        "rgba(244,67,54, 0.2)",
        "rgba(34,198,246, 0.2)",
        "rgba(153, 102, 255, 0.2)",
        "rgba(255, 159, 64, 0.2)",
        "rgba(233,30,99, 0.2)",
        "rgba(205,220,57, 0.2)"

    ];
    $data = collect([]);
    $data->push(Job::whereDate('lieu', today()->subDays()->count());
    $usersChart = new UserChart;
    $usersChart->minimalist(true);
    $usersChart->labels(['Jan', 'Feb', 'Mar']);
    $usersChart->dataset('Users by trimester', 'doughnut', $data)
        ->color($borderColors)
        ->backgroundcolor($fillColors);
    return view('users', [ 'usersChart' => $usersChart ] );
}*/
function viewChartBar(){
    $offres = Job::select(\DB::raw("COUNT(type) as count"))
    ->whereYear('created_at', date('Y'))
    ->groupBy(\DB::raw('Month(created_at)'),\DB::raw('type'))
    ->pluck('count');

  return view('barChart', compact('offres'));

}

function  charbar(Request $request ){
    $q=$request->get('annee');
  $offres = Job::select(\DB::raw("COUNT(type) as count"))
    ->whereYear('created_at', $q)
    ->groupBy(\DB::raw('Month(created_at)'),\DB::raw('type'))
    ->pluck('count');
    return view('barChart', compact('offres'));}


function  charbar2(Request $request ){
    $q=$request->get('annee');
    $viewer['chart'] = Postule::select(\DB::raw("COUNT(*) as count"))
    ->whereYear('created_at', 2020)
    ->groupBy(DB::raw("year(created_at)"))
    ->get()->toArray();
                  
    $viewer = array_column($viewer, 'count');
    
    $click = Spontane::select(DB::raw("COUNT(*) as count"))
    ->whereYear('created_at', 2020)
    ->groupBy(DB::raw("year(created_at)"))
    ->get()->toArray();
    $click = array_column($click, 'count');
    return view('highchart')
    ->with('viewer',json_encode($viewer,JSON_NUMERIC_CHECK))
    ->with('click',json_encode($click,JSON_NUMERIC_CHECK));} 
}



