@extends('layouts.app')
@section('content')

<div class="page-container">
            <div class="main-content">
            <div class="section__content section__content--p30">
            <div class="container-fluid">
                    </div>
                    
            <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <img src="{{$user->avatar}}" alt="" class="img-rounded img-responsive" />
                    </div>
                    <div class="col-sm-6 col-md-8">
                        <h4>
                           {{$user->customRadio}} {{$user->name}}  {{$user->lastname}}</h4>
                        <small><cite title="San Francisco, USA">{{$user->phone}}<i class="glyphicon glyphicon-map-marker">
                        </i></cite></small>
                        <p>
                            <i class="glyphicon glyphicon-envelope"></i>{{$user->email}}
                            <br />
                            <i class="glyphicon glyphicon-globe"></i><a href="http://www.jquery2dotnet.com">www.jquery2dotnet.com</a>
                            <br />
                            <i class="glyphicon glyphicon-gift"></i>June 02, 1988</p>
                        <!-- Split button -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary">
                                Social</button>
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                <span class="caret"></span><span class="sr-only">Social</span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Twitter</a></li>
                                <li><a href="https://plus.google.com/+Jquery2dotnet/posts">Google +</a></li>
                                <li><a href="https://www.facebook.com/jquery2dotnet">Facebook</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Github</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <div class="col-lg-12"><br>
                    <h4 class="text-dark">About Us :</h4>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 mt-3">
                    <div class="border rounded p-4">
                        <p class="text-muted">Aliquam erat volutpat Etiam vitae tortor Morbi vestibulum volutpat enim Aliquam nunc Nunc sed turpis sed mollis eros et ultrices tempus mauris ipsum aliquam libero non adipiscing dolor urna a orci Nulla porta dolor. Class aptent taciti sociosqu ad litora torquent per conubia nostra inceptos hymenaeos pellentesque dapibus hendrerit tortor Praesent egestas tristique nibh sed a libero cras us varius donec vitae orci sed dolor rutrum auctor fusce egestas elit eget lorem.</p>

                        <p class="text-muted">Libero venenatis faucibus ullam quis ante tiam sit amet orci eget eros faucibus tincidunt ed fringilla mauris sit amet nibh Donec sodales sagittis magna ed consequat leo eget bibendum sodales augue velit cursus nunc quis gravida magna mi libero usce vulputate eleifend sapien estibulum purus qua scelerisque ut mollis sed nonummy id metus ullam accumsan lorem Vivamus elementum semper enean vulputate eleifend tellus enean leo ligula porttitor.</p>
                        
                        <ul class="list-inline pt-3 border-top mb-0">
                            <li class="list-inline-item mr-3">
                                <a href="" class="text-muted f-15 mb-0"><i class="mdi mdi-map-marker mr-2"></i>3659 Turkey Pen Road Manhattan, NY 10016</a>
                            </li>

                            <li class="list-inline-item mr-3">
                                <a href="" class="text-muted f-15 mb-0"><i class="mdi mdi-web mr-2"></i>Www.webthemes.co.in</a>
                            </li>

                            <li class="list-inline-item mr-3">
                                <a href="" class="text-muted f-15 mb-0"><i class="mdi mdi-email mr-2"></i>Webthemes.ltd@gmail.com</a>
                            </li>

                            <li class="list-inline-item mr-3">
                                <a href="" class="text-muted f-15 mb-0"><i class="mdi mdi-cellphone-iphone mr-2"></i>123 456 7890</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 mt-4 pt-2">
                    <h4 class="text-dark">Competences:</h4>
                </div>
            </div>

            <div class="row">
            @foreach($competances as $competance)
                <div class="col-lg-12 mt-3">
                    <div class="border rounded p-4 bg-white ">
                        <div class="job-detail-desc bg-white ">
                            <p class="text-muted f-14 mb-3 bg-white ">{{$competance->description}}</p>

                           
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="row">
                <div class="col-lg-12 mt-4 pt-2">
                    <h4 class="text-dark">Formations :</h4>
                </div>
            </div>

            <div class="row">
  
            @foreach($formations as $formation)
                <div class="col-lg-4 col-md-6 mt-4 pt-5  ">
                    <div class="border rounded candidates-profile-education text-center text-muted bg-white ">
                        <div class="profile-education-icon border rounded-pill bg-white text-primary">
                            <i class="mdi mdi-36px mdi-school"></i>
                        </div>
                        <br>
                        <h6 class="text-uppercase f-17 bg-white " ><a href="#" class="text-muted">{{$formation->titre}}</a></h6>
                        <p class="f-14 mb-1 bg-white ">{{$formation->debut}} - {{$formation->fin}}</p>
                        <p class="pb-3 mb-0">Diplome {{$formation->diplome}} ,domaine {{$formation->domaine}}</p>
                        <p class="pb-3  mb-0">{{$formation->description}}.</p>
                    </div>
                </div>
@endforeach
            

            
            </div>

            <div class="row">
                <div class="col-lg-12 mt-4 pt-2">
                    <h4 class="text-dark">Experiences :</h4>
                </div>
            </div>

            <div class="row">
            @foreach($experiences as $experience)
                <div class="col-md-6 mt-3 mt-md-0 pt-3">
                    <div class="border rounded job-list-box p-4"style="background: white;">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="company-brand-logo text-center mb-4">
                                    <img src="/images/expe.png" alt="" class="img-fluid mx-auto d-block">
                                </div>
                            </div>

                            <div class="col-lg-9">
                                <div class="job-list-desc candidates-profile-exp-desc">
                                    <h5 class="f-19 mb-2"><a href="#" class="text-dark">{{$experience->intitule}}</a></h5>
                                    <p class="text-muted mb-0 f-16">{{$experience->description}}</p>
                                    <p class="text-muted mb-0 f-16">{{$experience->debut}} - {{$experience->fin}}</p>
                                    <p class="text-muted mb-0 f-16"><i class="mdi mdi-map-marker mr-2"></i>{{$experience->lieu}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


          

                @endforeach
                
            </div>

            <div class="row">
                <div class="col-lg-12 mt-4 pt-2">
                    <h4 class="text-dark">Skills :</h4>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-6 mt-4 pt-2">
                    <h6 class="mb-0 text-uppercase">Language Knowledge :</h6>
                    <div class="progress-box mt-4">
                        <h6 class="title text-muted">Spanish</h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped position-relative bg-primary" style="width:84%;">
                                <div class="progress-value d-block text-muted h6">84%</div>
                            </div>
                        </div>
                    </div><!--end process box-->
                    <div class="progress-box mt-4">
                        <h6 class="title text-muted">Japanese</h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped position-relative bg-primary" style="width:75%;">
                                <div class="progress-value d-block text-muted h6">75%</div>
                            </div>
                        </div>
                    </div><!--end process box-->
                    <div class="progress-box mt-4">
                        <h6 class="title text-muted">Arabic</h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped position-relative bg-primary" style="width:79%;">
                                <div class="progress-value d-block text-muted h6">79%</div>
                            </div>
                        </div>
                    </div><!--end process box-->
                    <div class="progress-box mt-4">
                        <h6 class="title text-muted">English</h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped position-relative bg-primary" style="width:95%;">
                                <div class="progress-value d-block text-muted h6">95%</div>
                            </div>
                        </div>
                    </div><!--end process box-->
                </div>

                <div class="col-md-6 mt-4 pt-2">
                    <h6 class="mb-0 text-uppercase">Coding Expertise :</h6>
                    <div class="progress-box mt-4">
                        <h6 class="title text-muted">WordPress</h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped position-relative bg-primary" style="width:84%;">
                                <div class="progress-value d-block text-muted h6">84%</div>
                            </div>
                        </div>
                    </div><!--end process box-->
                    <div class="progress-box mt-4">
                        <h6 class="title text-muted">PHP / MYSQL</h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped position-relative bg-primary" style="width:75%;">
                                <div class="progress-value d-block text-muted h6">75%</div>
                            </div>
                        </div>
                    </div><!--end process box-->
                    <div class="progress-box mt-4">
                        <h6 class="title text-muted">Angular / JavaScript</h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped position-relative bg-primary" style="width:79%;">
                                <div class="progress-value d-block text-muted h6">79%</div>
                            </div>
                        </div>
                    </div><!--end process box-->
                    <div class="progress-box mt-4">
                        <h6 class="title text-muted">HTML / CSS</h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped position-relative bg-primary" style="width:95%;">
                                <div class="progress-value d-block text-muted h6">95%</div>
                            </div>
                        </div>
                    </div><!--end process box-->
                </div>
            </div>         
        </div>











       </div><div>
     
     @endsection