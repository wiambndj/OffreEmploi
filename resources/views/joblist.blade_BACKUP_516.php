@extends('layouts.master')
@section('titre','job')
@section('content1')
<body>
<script>
$(document).ready(function(){
    <?php $maxP=count($jobs);
    for($i=0;$i<$maxP;$i++){?>
   $('#cartBtn<?php echo $i;?>').click(function(){
var pro_id <?php echo $i;?> = $('#pro_id<?php echo $i;?>').val();
alert(pro_id<?php echo $i;?>);
  });
 <?php    } ?>
});
</script>
    <!-- Navbar End -->
    
    <!-- Start home -->
    <section class="bg-half page-next-level" style="background: url('/images/img2.jpg') center center;"> 
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="text-center text-white">
                        <h4 class="text-uppercase title mb-4">La liste des offres</h4>
                        <ul class="page-next d-inline-block mb-0">
                            <li><a href="#" class="text-uppercase font-weight-bold">Accueil</a></li>
                            <li><a href="#" class="text-uppercase font-weight-bold">Offres</a></li> 
                            <li>
                                <span class="text-uppercase text-white font-weight-bold">Liste des offres </span> 
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end home -->

    <div class="container">
        <div class="home-form-position">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="home-registration-form job-list-reg-form bg-light shadow p-4 mb-3">
                        <form class="registration-form" action="{{ route('recherche') }}" method="GET">
                            <div class="row">
                                <div class="col-lg-3 col-md-6">
                                    <div class="registration-form-box">
                                        <i class="fa fa-briefcase"></i>
                                        <select id="select-country" class="demo-default" name="poste">
                                              <option value="">Poste</option>
                                              @foreach($offres as $job)
               <option value="{{$job->intitule}}">{{$job->intitule}}</option>
               
                                                     @endforeach
                                                    </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="registration-form-box">
                                        <i class="fa fa-location-arrow"></i>
                                        <select id="select-country" class="demo-default"name="ville" >
                                                        <option value="">Region</option>
                                                        @foreach($jobs as $job)
               <option value="{{$job->lieu}}">{{$job->lieu}}</option>
               
                                                     @endforeach
                                                    </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="registration-form-box">
                                        <i class="fa fa-list-alt"></i>
                                        <select id="select-category" class="demo-default"name="job">
                                              <option value="">Categorie</option>
                                              @foreach($jobs as $job)
               <option value="{{$job->domaine}}">{{$job->domaine}}</option>
               
                                                     @endforeach
                                                    </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="registration-form-box">
                                        <input type="submit" id="submit" name="send" class="submitBnt btn btn-primary btn-block" value="Rechercher">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JOB LIST START -->
    <section class="section pt-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center mb-4 pb-2">
                        <h4 class="title title-line pb-5">Emplois disponibles pour vous</h4>
                        <p class="text-muted para-desc mx-auto mb-1">Choisir l'offre qui vous convient, et faites nous connaitre vos connaissances.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3">
                    <div class="left-sidebar">
                        <div class="accordion" id="accordionExample">
                            <div class="card rounded mt-4">
                                <a data-toggle="collapse" href="#collapseOne" class="job-list" aria-expanded="true" aria-controls="collapseOne">
                                    <div class="card-header" id="headingOne">
                                        <h6 class="mb-0 text-dark f-18">Date Posted</h6>
                                    </div>
                                </a>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne">
                                    <div class="card-body p-0">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                            <label class="custom-control-label ml-1 text-muted" for="customRadio1">Last Hour</label>
                                        </div>

                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                            <label class="custom-control-label ml-1 text-muted" for="customRadio2">Last 24 hours</label>
                                        </div>

                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
                                            <label class="custom-control-label ml-1 text-muted" for="customRadio3">Last 7 days</label>
                                        </div>

                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
                                            <label class="custom-control-label ml-1 text-muted" for="customRadio4">Last 14 days</label>
                                        </div>

                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio5" name="customRadio" class="custom-control-input">
                                            <label class="custom-control-label ml-1 text-muted" for="customRadio5">Last 30 days</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- collapse one end -->
                            <div class="card rounded mt-4">
                                <a data-toggle="collapse" href="#collapsetwo" class="job-list" aria-expanded="true" aria-controls="collapsetwo">
                                    <div class="card-header" id="headingtwo">
                                        <h6 class="mb-0 text-dark f-18">Categories</h6>
                                    </div>
                                </a>
                                <div id="collapsetwo" class="collapse show" aria-labelledby="headingtwo">
                                    <div class="card-body p-0">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio7" name="customRadio1" class="custom-control-input">
                                            <label class="custom-control-label ml-1 text-muted f-15" for="customRadio7">Digital & Creative</label>
                                        </div>

                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio8" name="customRadio1" class="custom-control-input">
                                            <label class="custom-control-label ml-1 text-muted f-15" for="customRadio8">Accountancy</label>
                                        </div>

                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio9" name="customRadio1" class="custom-control-input">
                                            <label class="custom-control-label ml-1 text-muted f-15" for="customRadio9">Banking</label>
                                        </div>

                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio10" name="customRadio1" class="custom-control-input">
                                            <label class="custom-control-label ml-1 text-muted f-15" for="customRadio10">IT Contractor</label>
                                        </div>

                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio11" name="customRadio1" class="custom-control-input">
                                            <label class="custom-control-label ml-1 text-muted f-15" for="customRadio11">Graduate</label>
                                        </div>

                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio12" name="customRadio1" class="custom-control-input">
                                            <label class="custom-control-label ml-1 text-muted f-15" for="customRadio12">Estate Agency</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- collapse one end -->
                            <div class="card rounded mt-4">
                                <a data-toggle="collapse" href="#collapsethree" class="job-list" aria-expanded="true" aria-controls="collapsethree">
                                    <div class="card-header" id="headingthree">
                                        <h6 class="mb-0 text-dark f-18">Experince</h6>
                                    </div>
                                </a>
                                <div id="collapsethree" class="collapse show" aria-labelledby="headingthree">
                                    <div class="card-body p-0">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio13" name="customRadio2" class="custom-control-input">
                                            <label class="custom-control-label ml-1 text-muted f-15" for="customRadio13">1Year to 2Year</label>
                                        </div>

                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio14" name="customRadio2" class="custom-control-input">
                                            <label class="custom-control-label ml-1 text-muted f-15" for="customRadio14">2Year to 3Year</label>
                                        </div>

                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio15" name="customRadio2" class="custom-control-input">
                                            <label class="custom-control-label ml-1 text-muted f-15" for="customRadio15">3Year to 4Year</label>
                                        </div>

                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio16" name="customRadio2" class="custom-control-input">
                                            <label class="custom-control-label ml-1 text-muted f-15" for="customRadio16">IT Contractor</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- collapse one end -->
                            <div class="card rounded mt-4">
                                <a data-toggle="collapse" href="#collapsefour" class="job-list" aria-expanded="true" aria-controls="collapsefour">
                                    <div class="card-header" id="headingfour">
                                        <h6 class="mb-0 text-dark f-18">Gender</h6>
                                    </div>
                                </a>
                                <div id="collapsefour" class="collapse show" aria-labelledby="headingfour">
                                    <div class="card-body p-0">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio17" name="customRadio3" class="custom-control-input">
                                            <label class="custom-control-label ml-1 text-muted f-15" for="customRadio17">Male</label>
                                        </div>

                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio18" name="customRadio3" class="custom-control-input">
                                            <label class="custom-control-label ml-1 text-muted f-15" for="customRadio18">Female</label>
                                        </div>

                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio19" name="customRadio3" class="custom-control-input">
                                            <label class="custom-control-label ml-1 text-muted f-15" for="customRadio19">Others</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- collapse one end -->
                        </div>
                    </div>
                </div>

                <div class="col-lg-9 mt-4 pt-2">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="show-results">
                                <div class="float-left">
                                    <h5 class="text-dark mb-0 pt-2 f-18">nombre de resultat   {{$jobs->count()}}</h5>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                    <div class="row">
                    @foreach($offres as $job)
                        <div class="col-lg-12 mt-4 pt-2">
                            <div class="job-list-box border rounded">
                                <div class="p-3">
                                    <div class="row align-items-center">
                                        <div class="col-lg-2">
                                            <div class="company-logo-img">
                                                <img src="{{$job->logo}}" alt="" class="img-fluid mx-auto d-block">
                                            </div>
                                        </div>
                                        <div class="col-lg-7 col-md-9">
                                            <div class="job-list-desc">
<<<<<<< HEAD
                                            <input type="hidden" id="pro_id" value="{{$job->id}}"/>

=======
>>>>>>> 6a0a3d7fd1171263ddf582c56320df1ef9278b9b
                                                <h6 class="mb-2"><a href="{{ url('emplois/'.$job->id) }}" class="text-dark">{{$job->intitule}}</a></h6>
                                                <p class="text-muted mb-0"><i class="mdi mdi-bank mr-2"></i>{{$job->domaine}}</p>
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item mr-3">
                                                        <p class="text-muted mb-0"><i class="mdi mdi-map-marker mr-2"></i>{{$job->lieu}}</p>
                                                    </li>

                                                    <li class="list-inline-item">
                                                        <p class="text-muted mb-0"><i class="mdi mdi-clock-outline mr-2"></i>{{$job->depot}}</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3">
                                            <div class="job-list-button-sm text-right">
<<<<<<< HEAD
                                            <div class="modal-header">
                                            @guest
                                      
                                                <div class="mt-3">
                                                    <a href= "{{ url('favorite/'.$job->id) }}" ><i class="far fa-heart"></i></a></div>  @else    
                                            <?php        $co =DB::table('post_users')->where('job_id','=',$job->id)->where('user_id','=',Auth::user()->id)->get();       
                           
                                      
                                    if ($co->count()>0)            { ?>            <div class="mt-3">
                                        <a href= "{{ url('favorite/sup/'.$job->id) }}" > <i class="fa fa-heart"></i></a></div>  <?php } 
                                    
                                    
                                    else  { ?><div class="mt-3">
                                    <a href= "{{ url('favorite/'.$job->id) }}" ><i class="far fa-heart"></i></a></div><?php }?>  @endguest
                                                    <div class="mt-3">
                                                    <a href= "{{ url('emplois/'.$job->id) }}" class="btn btn-sm btn-primary">Voi details</a>
=======
                                                <span class="badge badge-success">Full-Time</span>

                                                <div class="mt-3">
                                                    <a href="#" class="btn btn-sm btn-primary">Apply</a>
>>>>>>> 6a0a3d7fd1171263ddf582c56320df1ef9278b9b
                                                </div>
                                            </div>
                                        </div>
                                    </div>
<<<<<<< HEAD
                                    </div>
=======
>>>>>>> 6a0a3d7fd1171263ddf582c56320df1ef9278b9b
                                </div>
                            </div>
                        </div>
                        @endforeach
                        
                       
                  
                  
                        
                        <div class="col-lg-12 mt-4 pt-2">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination job-pagination mb-0 justify-content-center">
                                  
                                    <li class="page-item ">{{$offres->links()}}</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- JOB LIST START -->

    

 
    <!-- Footer End -->

    <!-- Back to top -->
    <a href="#" class="back-to-top rounded text-center" id="back-to-top"> 
        <i class="mdi mdi-chevron-up d-block"> </i> 
    </a>
    <!-- Back to top -->

    <!-- javascript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/plugins.js"></script>

    <!-- selectize js -->
    <script src="js/selectize.min.js"></script>

    <script src="js/jquery.nice-select.min.js"></script>

    <script src="js/app.js"></script>
</body>
@endsection('content')