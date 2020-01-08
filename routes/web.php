<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/',['uses' => 'JobController@accueil','as' => 'accueil']);


Route::get('/joblist', function () {
    return view('joblist');
});
Route::get('/jobdetails', function () {
    return view('jobdetails');
});

Route::get('/resume', function () {
    return view('resume');});
    Route::get('/contact', function () {
        return view('contact');
    });
    Route::get('/company', function () {
        return view('company');
});
Route::get('/modifierpro', function () {
    return view('modifierpro');
});
Route::get('/about', function () {
    return view('about');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/login/custom',['uses' => 'LoginController@login','as' => 'login.custom']);
Route::group(['middleware' => 'auth'],function(){
Route::get('/home',function(){
   return view('home'); 
})->name('home');
Route::resource('cvs', 'CvController');
Route::resource('exp', 'ExperienceController');
Route::resource('for', 'FormationController');
Route::resource('cmp', 'CompetanceController');
Route::resource('lang', 'LangueController');

Route::resource('jobs', 'JobController');
Route::resource('companies', 'CompanyController');
Route::get('cv/experience/create/{id}','CvController@cvExperienceCreate');
Route::get('cv/experience/show/{id}', 'CvController@cvExperienceShow');
Route::get('experiences/{id}', 'CvController@index1');
Route::get('emplois/{id}', 'JobController@indexjob');
Route::get('Accpt/{id}', 'PostulesController@accept');
Route::get('refuse/{id}', 'PostulesController@refuse');
Route::get('spontaneaccpt/{id}', 'SpontanesController@accept');
Route::get('spontanerefuse/{id}', 'SpontanesController@refuse');
Route::get('condidature/{id}', 'profilesController@indexprofile');
Route::get('condidature/spontane/postuler/{name}', 'CvController@afficher');
Route::get('entreprise/{id}', 'CompanyController@index2');
Route::post('/profiles/modifier//a/b/c/d/e/r/f',['uses' => 'ExperienceController@update','as' => 'exp.update']);
Route::get('experience/{id}', 'ExperienceController@create');
Route::get('offre', 'JobController@create');
Route::get('profiles/createexp', 'ExperienceController@create');
Route::get('profiles/createcmp', 'CompetanceController@create');
Route::post('/offres/create','OffreController@storeOffre');
Route::get('/profiles/changepassword',['uses' => 'ProfilesController@changePasswordForm','as' => 'changepassword']);
Route::get('/profiles/{name}',['uses' => 'ProfilesController@index','as' => 'profile']);
Route::get('/profiles/{name}/a/',['uses' => 'ProfilesController@index1','as' => 'profilerec']);
Route::get('/profiles/modifier//a',['uses' => 'ProfilesController@edit1','as' => 'profilerec.editrec']);
Route::post('/profiles/modifier//a/b',['uses' => 'ProfilesController@update1','as' => 'profilerec.update1']);
Route::get('/profiles/edit/profile',['uses' => 'ProfilesController@edit','as' => 'profile.edit']);
Route::get('/profiles/edit/profile/a/a/a/a/a/a/a/a/a/a/a/a/a/a/a/a/a/a',['uses' => 'CompanyController@edit','as' => 'company.edit']);
Route::get('/profiles/cv/profile/a',['uses' => 'CvController@modifier','as' => 'profile.cv']);
Route::post('/profiles/update/profile/a',['uses' => 'CvController@store','as' => 'profile.store']);
Route::post('/profiles/update/profile/a/b/c/{id}',['uses' => 'ExperienceController@store','as' => 'experience.store']);
Route::post('/profiles/update/profile/a/b/c/d/e/f/c/{id}',['uses' => 'ExperienceController@update','as' => 'experience.update']);
Route::post('/profiles/update/profile/a/b/c/d/e/f/c/d/d/a/{id}',['uses' => 'FormationController@update','as' => 'formation.update']);
Route::post('/profiles/update/profile/a/b/c/b/{id}',['uses' => 'CompetanceController@store','as' => 'competance.store']);
Route::post('/profiles/update/profile/a/b/c/b/c/{id}',['uses' => 'FormationController@store','as' => 'formation.store']);
Route::post('/profiles/update/profile/a/b/c/d/e/f/g/{id}',['uses' => 'langueController@store','as' => 'langue.store']);
Route::post('/profiles/update/profile/a/b/c/d/e/f/g/f/a/{id}',['uses' => 'JobController@storeOffre','as' => 'offre.store']);
Route::post('/profiles/update/profile',['uses' => 'ProfilesController@update','as' => 'profile.update']);
Route::post('/profiles/update/password',['uses' => 'ProfilesController@changePassword','as' => 'profile.updatepassword']);
Route::post('/profiles/update/profile/company',['uses' => 'CompanyController@updatecompany','as' => 'company.update']);
Route::get('offres', 'JobController@index1');
Route::get('emploi', 'JobController@index2');
Route::get('/dashboard',function(){
    return view('dashboard'); 
 })->name('dashboard');
}

);


//Route::post('company/create/infor',['uses' => 'CompanyController@storeCompany','as' => 'company.store']);
Route::post('company/create/information/spontane/{id}',['uses' => 'SpontanesController@store','as' => 'spontane.store']);
Route::post('/offre/create/{id}',['uses' => 'JobController@storeOffre','as' => 'offre.store']);
Route::get('/inbox', function () {
    return view('inbox');
});
Route::get('/profilsettings', function () {
    return view('profilsettings');
});
Route::get('/offrelist', function () {
    return view('offrelist');
});
Route::get('/listcandida', function () {
    return view('listcandida');
});
Route::get('/mycompany', function () {
    return view('mycompany');
});
Route::get('companiess', 'CompanyController@index1');


Route::post('/profiles/update/job/{id}',['uses' => 'JobController@update','as' => 'offre.update']);
Route::post('/profiles/update/profile/a/b/{id}',['uses' => 'PostulesController@store','as' => 'postuler.store']);
Route::get('/accueil/recherche/offre',['uses' => 'JobController@barrerecherche','as' => 'recherche']);