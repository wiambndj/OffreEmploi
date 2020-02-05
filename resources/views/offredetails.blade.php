@extends('layouts.app')
@section('content')

<div class="page-container">
            <div class="main-content">
            <div class="section__content section__content--p30">


            <div class="row">
                <div class="col-lg-8 col-md-7">
                    <div class="job-detail border rounded p-4" style="background: white;">
                        <div class="job-detail-content" >
                            <img src="images/{{$job->logo}}" alt="" class="img-fluid float-left mr-md-3 mr-2 mx-auto d-block">
                            <div class="job-detail-com-desc overflow-hidden d-block">
                                <h4 class="mb-2"><a href="#" class="text-dark">{{$job->intitule}}</a></h4>
                                <p class="text-muted mb-0"><i class="mdi mdi-link-variant mr-2"></i>{{$job->entreprise}}</p>
                                <p class="text-muted mb-0"><i class="mdi mdi-map-marker mr-2"></i>{{$job->lieu}}</p>
                            </div>
                        </div>

                        <div class="job-detail-desc mt-4">
                            <p class="text-muted mb-3">{{$job->competence}}</p>

                         
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <h5 class="text-dark mt-4" > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Description  d'offre</h5>
                        </div>
                    </div>

                    <div class="row" >
                        <div class="col-lg-12">
                            <div class="job-detail border rounded mt-2 p-4"style="background: white;">
                                <div class="job-detail-desc">
                                    <p class="text-muted mb-3">{{$job->description}}</p>

                                   
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <h5 class="text-dark mt-4"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Qualification :</h5>
                        </div>
                    </div>

                    <div class="row m-t-30">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>Nom</th>
                                                <th>Prenom</th>
                                                <th>Email</th>
                                                <th>status</th>
                                                <th>Cv</th>
                                                <th>lettre de motivation</th>
                                                <th>Consultez leur profile</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($postuler as $postule)
                                            <tr> 
                                                <td>{{$postule->name}}</td>
                                                <td>{{$postule->lastname}}</td>
                                                <td>{{$postule->email}}</td>
                                                <td class="process"><a href=""></td>
                                                <td class="process"><a href="{{ url('condidature/spontane/postuler/'.$postule->doc) }}">{{$postule->nom}}</a></td>
                                                <td>
<A HREF="{{$postule->lettre}}"> <i class="fa fa-download"></i> Télécharger</A>

                                       </td>
                                       <td>
<a href="{{ url('condidature/'.$postule->user_id) }}"> voir</a>

                                       </td>
                             
                                            </tr>
                                        
@endforeach
                                        </tbody>
                                    </table>
                                </div>
                        </div>
                    </div>

                  

               
                </div>

                <div class="col-lg-4 col-md-5 mt-4 mt-sm-0" >
                    <div class="job-detail border rounded p-4" style="background: white;">
                        <h5 class="text-muted text-center pb-2"><i class="mdi mdi-map-marker mr-2"></i>Location</h5>

                        <div class="job-detail-location pt-4 border-top">
                            <div class="job-details-desc-item">
                                <div class="float-left mr-2">
                                    <i class="mdi mdi-bank text-muted"></i>
                                </div>
                                <p class="text-muted mb-2">{{$job->lieu}}</p>
                            </div>

                            <div class="job-details-desc-item">
                                <div class="float-left mr-2">
                                    <i class="mdi mdi-email text-muted"></i>
                                </div>
                                <p class="text-muted mb-2">: Webthemescom@gmail.com</p>
                            </div>

                            <div class="job-details-desc-item">
                                <div class="float-left mr-2">
                                    <i class="mdi mdi-web text-muted"></i>
                                </div>
                                <p class="text-muted mb-2">: https://www.WebThemes.com</p>
                            </div>

                            <div class="job-details-desc-item">
                                <div class="float-left mr-2">
                                    <i class="mdi mdi-cellphone-iphone text-muted"></i>
                                </div>
                                <p class="text-muted mb-2">: 1987 6543 21</p>
                            </div>

                            <div class="job-details-desc-item">
                                <div class="float-left mr-2">
                                    <i class="mdi mdi-currency-usd text-muted"></i>
                                </div>
                                <p class="text-muted mb-2">:{{$job->remun}}DA</p>
                            </div>

                            <div class="job-details-desc-item">
                                <div class="float-left mr-2">
                                    <i class="mdi mdi-security text-muted"></i>
                                </div>
                                <p class="text-muted mb-2">:{{$job->experience}} ans</p>
                            </div>

                            <div class="job-details-desc-item">
                                <div class="float-left mr-2">
                                    <i class="mdi mdi-clock-outline text-muted"></i>
                                </div>
                                <p class="text-muted mb-2">:{{$job->depot}}</p>
                            </div>

                          
                        </div>
                    </div>


                
     
                </div>
      </div><div></div>
     
   @endsection