@extends('layouts.master')
@section('titre','Resume')
@section('content1')
<<<<<<< HEAD
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Spontanee</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form  action="{{ route('spontane.store',[$companies->id]) }}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
 
          <div class="form-group" id="mobileno_textbox2">
            <label for="recipient-name" class="col-form-label">Mon cv<span style="color: red;">*</span></label>
     <select name="doc" class="form-control"  > 
     @foreach($cvs as $cv)
               <option value="{{$cv->titre}}">{{$cv->titre}}</option>
               @endforeach
            </select>
          </div>
              
          <div class="form-group">
            <label for="message-text" class="col-form-label">Lettre de motivation</label>
              <input type="file" class="form-control" name="lettre" >
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Description</label>
              <textarea  class="form-control" name="description" cols="30" rows="10"></textarea>
          </div>
     

           <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
        <button type="submit" class="btn btn-primary">Spontane</button>
      </div>
        </form>
      </div>
     
    </div>
  </div>
</div>
=======
>>>>>>> 00ba623784c1670fcf9ed4e4d70096915b0c2792
<section class="bg-half page-next-level"> 
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="text-center text-white">
                        <h4 class="text-uppercase title mb-4">Company Detail</h4>
                        <ul class="page-next d-inline-block mb-0">
                            <li><a href="index.html" class="text-uppercase font-weight-bold">Home</a></li>
                            <li><a href="#" class="text-uppercase font-weight-bold">Pages</a></li> 
                            <li><a href="#" class="text-uppercase font-weight-bold">Employer</a></li> 
                            <li>
                                <span class="text-uppercase text-white font-weight-bold">Company Detail</span> 
                            </li> 
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end home -->

    <!-- EMPLOYERS DETAILS START -->
    <section class="section">
        <div class="container">
            <div class="row">
<<<<<<< HEAD
            <div class="col-lg-12">
            @if(session('message'))
                    <div class="alert alert-success" role="alert">
                    {{session('message')}}
                    @endif
                    @if(session('error'))
                    <div class="alert alert-danger" role="alert">
                    {{session('error')}}
                    @endif
                    </div>
                <div class="col-lg-12">
       
                                        <button type="button"class="btn btn-success mb-1" data-toggle="modal" data-target="#exampleModal" > <i class="fa fa-download"></i>Spontane
                                        </button>
                 
                    <div class="text-sm-center">
                        <img src="{{$companies->logo}}"alt="" class="img-fluid mx-md-auto d-block">
                        <h4 class="mt-3"><a href="#" class="text-dark">{{$companies->entreprise}}</a></h4>
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item mr-3">
                                <p class="text-muted mb-0"><i class="mdi mdi-map-marker mr-2"></i>{{$companies->adresse}},{{$companies->wilaya}},{{$companies->pays}}</p>
=======
                <div class="col-lg-12">
                    <div class="text-sm-center">
                        <img src="images/featured-job/img-3.png" alt="" class="img-fluid mx-md-auto d-block">
                        <h4 class="mt-3"><a href="#" class="text-dark">Themes code Pvt.Ltd</a></h4>
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item mr-3">
                                <p class="text-muted mb-0"><i class="mdi mdi-map-marker mr-2"></i>4102 Aviation Way Los Angeles, CA 90017</p>
>>>>>>> 00ba623784c1670fcf9ed4e4d70096915b0c2792
                            </li>

                            <li class="list-inline-item">
                                <p class="text-success mb-0"><i class="mdi mdi-bookmark-check mdi-18px mr-2"></i>Verified</p>
                            </li>
                        </ul>

                        <ul class="list-inline mb-2">
                            <li class="list-inline-item mr-3 ">
<<<<<<< HEAD
                                <p class="text-muted"><i class="mdi mdi-earth mr-2"></i>{{$companies->site}}</p>
                            </li>

                            <li class="list-inline-item mr-3">
                                <p class="text-muted"><i class="mdi mdi-email mr-2"></i>{{$companies->email}}</p>
                            </li>

                            <li class="list-inline-item">
                                <p class="text-muted"><i class="mdi mdi-cellphone-iphone mr-2"></i>{{$companies->tlp}}</p>
=======
                                <p class="text-muted"><i class="mdi mdi-earth mr-2"></i>Themescodeltd.co.in</p>
                            </li>

                            <li class="list-inline-item mr-3">
                                <p class="text-muted"><i class="mdi mdi-email mr-2"></i>Themescodeltd2018@gmail.com</p>
                            </li>

                            <li class="list-inline-item">
                                <p class="text-muted"><i class="mdi mdi-cellphone-iphone mr-2"></i>123 456 7890</p>
>>>>>>> 00ba623784c1670fcf9ed4e4d70096915b0c2792
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="border-top border-bottom pt-4 pb-4">
                        <div class="row justify-content-sm-center">
                            <div class="col-lg-2 col-md-3 col-6">
                                <div class="text-sm-center m-14">
                                    <h5 class="text-dark mb-2">Employer</h5>
                                    <p class="text-muted mb-0">5540 +</p>
                                </div>
                            </div>

                            <div class="col-lg-2 col-md-3 col-6">
                                <div class="text-sm-center m-14">
                                    <h5 class="text-dark mb-2">Type</h5>
<<<<<<< HEAD
                                    <p class="text-muted mb-0">{{$companies->type}}</p>
=======
                                    <p class="text-muted mb-0">Create Website</p>
>>>>>>> 00ba623784c1670fcf9ed4e4d70096915b0c2792
                                </div>
                            </div>

                            <div class="col-lg-2 col-md-3 col-6">
                                <div class="text-sm-center m-14">
                                    <h5 class="text-dark mb-2">Experience</h5>
                                    <p class="text-muted mb-0">4 Years + Exp.</p>
                                </div>
                            </div>

                            <div class="col-lg-2 col-md-3 col-6">
                                <div class="text-sm-center m-14">
                                    <h5 class="text-dark mb-2">Salary</h5>
                                    <p class="text-muted mb-0">$700 - $2000/month</p>
                                </div>
                            </div>

                            <div class="col-lg-2 col-md-3 col-6">
                                <div class="text-sm-center m-14">
                                    <h5 class="text-dark mb-2">Followers</h5>
                                    <p class="text-muted mb-0">584230 +</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 mt-4 pt-2">
<<<<<<< HEAD
                    <h4>Description d'entreprise:</h4>
                    <div class="rounded border p-4 mt-3">
                        <p class="text-muted">{{$companies->description}}.</p>
=======
                    <h4>Company Overview :</h4>
                    <div class="rounded border p-4 mt-3">
                        <p class="text-muted">At vero eos accusamus iusto odio dignissimos ducimus blanditiis praesentium voluptatum deleniti that is atque corrupti dolores et quas molestias excepturi sint occaecati cupiditate non at provident similique sunt in culpa qui officia deserunt mollitia animi id est laboru at dolorum fuga Nam libero tempore cum soluta nobis est eligendi optio cumque nihil impedit quo minus quod maxime placeat facere possimus omnis voluptas assumenda est omnis dolor repellendus at enim ipsam voluptatem quia voluptas aut odit aut fugit Cum sociis natoque penatibus magnis dis parturient montes nascetur ridiculus mus donec quam felis ultricies nec pellentesque eu pretium quis sem that phasellus viverra nulla ut metus varius laoreet.</p>
                        <p class="text-muted">Nobis est eligendi optio cumque nihil impedit quo minus quod maxime at placeat facere possimus omnis voluptas assumenda est omnis dolor repellendus at enim ipsam eligendi optio cumque nihil impedit quo minus quod maxime placeat voluptatem quia that voluptas aut odit aut fugit Cum sociis natoque penatibus magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec this pellentesque eu pretium quis sem hasellus viverra nulla ut metus varius laoreet uisque rutrum enean imperdie tiam ultricies nisi vel augue.</p>
                        <p class="text-muted mb-0">Optio cumque nihil impedit quo minus quod maxime at placeate facere possimuse omnis voluptas assumenda est omnis dolor repellendus at enim ipsam voluptatem quia voluptas aut odit aut fugit um sociis natoque penatibus magnis dis parturient montes nascetur at ridiculus mus onec quam felis ultricies nec nihil impedit quo minus quod maxime at placeat facere possimuse omnis voluptas assumenda est omnis dolor repellendus at enime pellentesque eu pretium quis sem Phasellus viverra nulla ut metus varius laoreet uisque rutrum enean imperdiet tiam ultricies nisi vel augue Donec elit libero sodales nec volutpat a suscipit non turpis ullam sagittis Suspendisse pulvinar at augue ac venenatis condimentum sem libero volutpat nibh nec pellentesque velit pede quis nunc estibulum ante ipsum primis in faucibus orci luctus et ultrices as cubilia Curae usce id purus varius tincidunt libero Phasellus dolor.</p>
>>>>>>> 00ba623784c1670fcf9ed4e4d70096915b0c2792
                    </div>
                </div>
            </div>

<<<<<<< HEAD
    

            <div class="row">
                <div class="col-lg-12 mt-4 pt-2">
                    <h4>Mes offres:</h4>
                </div>
                @foreach($jobs as $job)
                <div class="col-lg-8 col-md-7">
                    <div class="shadow rounded p-4 mt-4">
                        <img src="{{$companies->logo}}" alt="" height="90" class="float-left shadow rounded-pill mr-3">
                        <div class="d-block overflow-hidden">
                            <h6 class="text-muted font-weight-light float-right mb-0"><i class="mdi mdi-clock-outline mr-1"></i>{{$job->created_at}}</h6>
                            <h5 class="mb-1"><a href="{{ url('emplois/'.$job->id) }}"  class="text-dark">{{$job->intitule}}</a></h5>
                            <small class="text-muted font-weight-bold">{{$job->domaine}}</small>
                           
                      
                        </div>
                    </div>

   

                

                </div>@endforeach

              
=======
            <div class="row">
                <div class="col-lg-12 mt-4 pt-2">
                    <h4>Services :</h4>
                    <div class="rounded border p-4 mt-3">
                        <p class="text-muted">Aenean tellus metus bibendum sed posuere ac mattis non nunc estibulum fringilla pede sit amet augue n turpis Pellentesque posuere raesent turpis enean posuere tortor sed cursus feugiat nunc augue blandit nunc sollicitudin at dolor sagittis lacus estibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae Sed aliquam nisi quis porttitor congue elit erat euismod orci ac placerat dolor lectus quis orci repellendus at enime pellentesque eu pretium quis sem Phasellus viverra nulla hasellus consectetuer vestibulum elit.</p>
                        <h6 class="text-dark">Details :</h6>
                        <p class="text-muted"><i class="mdi mdi-check text-success"></i> Morbi mattis ullamcorper velit hasellus gravida semper nisi nullam vel sem.</p>
                        <p class="text-muted"><i class="mdi mdi-check text-success"></i> Phasellus viverra nulla ut metus varius laoreet uisque rutrum enean imperdiet.</p>
                        <p class="text-muted"><i class="mdi mdi-check text-success"></i> Etiam ultricies nisi vel augue Curabitur ullamcorper ultricies nisi am eget dui tiam rhoncus.</p>
                        <p class="text-muted"><i class="mdi mdi-check text-success"></i> Donec mollis hendrerit risus hasellus nec sem in justo pellentesque facilisis.</p>
                        <p class="text-muted"><i class="mdi mdi-check text-success"></i> Praesent congue erat at massa Sed cursus turpis vitae tortor onec posuere vulputate arcu.</p>
                        <p class="text-muted"><i class="mdi mdi-check text-success"></i> Donec elit libero, sodales nec volutpat a suscipit non turpis ullam sagittis.</p>
                        <p class="text-muted mb-0"><i class="mdi mdi-check text-success"></i> Aenean tellus metus bibendum sed posuere ac mattis non nunc estibulum fringilla.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 mt-4 pt-2">
                    <h4>Company Review :</h4>
                </div>

                <div class="col-lg-8 col-md-7">
                    <div class="shadow rounded p-4 mt-4">
                        <img src="https://via.placeholder.com/400X400//88929f/5a6270C/O https://placeholder.com/" alt="" height="90" class="float-left shadow rounded-pill mr-3">
                        <div class="d-block overflow-hidden">
                            <h6 class="text-muted font-weight-light float-right mb-0"><i class="mdi mdi-clock-outline mr-1"></i>32 minutes ago</h6>
                            <h5 class="mb-1"><a href="#" class="text-dark">Mario Thomas</a></h5>
                            <small class="text-muted font-weight-bold">Web Developer</small>
                            <ul class="employers-icons list-inline mb-1">
                                <li class="list-inline-item mr-0 text-success"><i class="mdi mdi-star"></i></li>
                                <li class="list-inline-item mr-0 text-success"><i class="mdi mdi-star"></i></li>
                                <li class="list-inline-item mr-0 text-success"><i class="mdi mdi-star"></i></li>
                                <li class="list-inline-item mr-0 text-success"><i class="mdi mdi-star"></i></li>
                                <li class="list-inline-item mr-0 text-success"><i class="mdi mdi-star"></i></li>
                            </ul>
                            <p class="text-muted mb-0">Phasellus viverra nulla ut metus varius laoreet quisque rutrum aenean imperdiet etiam ultricies nisi avel augue curabitur ullamcorper ultricies nisi nam eget dui.</p>
                        </div>
                    </div>

                    <div class="shadow rounded p-4 mt-4">
                        <img src="https://via.placeholder.com/400X400//88929f/5a6270C/O https://placeholder.com/" alt="" height="90" class="float-left shadow rounded-pill mr-3">
                        <div class="d-block overflow-hidden">
                            <h6 class="text-muted font-weight-light float-right mb-0"><i class="mdi mdi-clock-outline mr-1"></i>49 minutes ago</h6>
                            <h5 class="mb-1"><a href="#" class="text-dark">Mario Thomas</a></h5>
                            <small class="text-muted font-weight-bold">Web Developer</small>
                            <ul class="employers-icons list-inline mb-1">
                                <li class="list-inline-item mr-0 text-success"><i class="mdi mdi-star"></i></li>
                                <li class="list-inline-item mr-0 text-success"><i class="mdi mdi-star"></i></li>
                                <li class="list-inline-item mr-0 text-success"><i class="mdi mdi-star"></i></li>
                                <li class="list-inline-item mr-0 text-success"><i class="mdi mdi-star"></i></li>
                                <li class="list-inline-item mr-0 text-success"><i class="mdi mdi-star"></i></li>
                            </ul>
                            <p class="text-muted mb-0">Phasellus viverra nulla ut metus varius laoreet quisque rutrum aenean imperdiet etiam ultricies nisi avel augue curabitur ullamcorper ultricies nisi nam eget dui.</p>
                        </div>
                    </div>

                    <div class="shadow rounded p-4 mt-4">
                        <img src="https://via.placeholder.com/400X400//88929f/5a6270C/O https://placeholder.com/" alt="" height="90" class="float-left shadow rounded-pill mr-3">
                        <div class="d-block overflow-hidden">
                            <h6 class="text-muted font-weight-light float-right mb-0"><i class="mdi mdi-clock-outline mr-1"></i>1 Days Ago</h6>
                            <h5 class="mb-1"><a href="#" class="text-dark">Mario Thomas</a></h5>
                            <small class="text-muted font-weight-bold">Web Developer</small>
                            <ul class="employers-icons list-inline mb-1">
                                <li class="list-inline-item mr-0 text-success"><i class="mdi mdi-star"></i></li>
                                <li class="list-inline-item mr-0 text-success"><i class="mdi mdi-star"></i></li>
                                <li class="list-inline-item mr-0 text-success"><i class="mdi mdi-star"></i></li>
                                <li class="list-inline-item mr-0 text-success"><i class="mdi mdi-star"></i></li>
                                <li class="list-inline-item mr-0 text-success"><i class="mdi mdi-star"></i></li>
                            </ul>
                            <p class="text-muted mb-0">Phasellus viverra nulla ut metus varius laoreet quisque rutrum aenean imperdiet etiam ultricies nisi avel augue curabitur ullamcorper ultricies nisi nam eget dui.</p>
                        </div>
                    </div>

                    <div class="shadow rounded p-4 mt-4">
                        <img src="https://via.placeholder.com/400X400//88929f/5a6270C/O https://placeholder.com/" alt="" height="90" class="float-left shadow rounded-pill mr-3">
                        <div class="d-block overflow-hidden">
                            <h6 class="text-muted font-weight-light float-right mb-0"><i class="mdi mdi-clock-outline mr-1"></i>3 Day Ago</h6>
                            <h5 class="mb-1"><a href="#" class="text-dark">Mario Thomas</a></h5>
                            <small class="text-muted font-weight-bold">Web Developer</small>
                            <ul class="employers-icons list-inline mb-1">
                                <li class="list-inline-item mr-0 text-success"><i class="mdi mdi-star"></i></li>
                                <li class="list-inline-item mr-0 text-success"><i class="mdi mdi-star"></i></li>
                                <li class="list-inline-item mr-0 text-success"><i class="mdi mdi-star"></i></li>
                                <li class="list-inline-item mr-0 text-success"><i class="mdi mdi-star"></i></li>
                                <li class="list-inline-item mr-0 text-success"><i class="mdi mdi-star"></i></li>
                            </ul>
                            <p class="text-muted mb-0">Phasellus viverra nulla ut metus varius laoreet quisque rutrum aenean imperdiet etiam ultricies nisi avel augue curabitur ullamcorper ultricies nisi nam eget dui.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-5 mt-4">
                    <div class="p-4 rounded text-center shadow">
                        <h5 class="text-dark">Share This Job</h5>
                        <ul class="social-icon social list-unstyled mb-0">
                            <li class="list-inline-item"><a href="#" class="rounded"><i class="mdi mdi-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="rounded"><i class="mdi mdi-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="rounded"><i class="mdi mdi-google-plus"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="rounded"><i class="mdi mdi-linkedin"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="rounded"><i class="mdi mdi-pinterest"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="rounded"><i class="mdi mdi-instagram"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="rounded"><i class="mdi mdi-share-variant"></i></a></li>
                        </ul>

                        <div class="map mt-3">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d6030.418742494061!2d-111.34563870463673!3d26.01036670629853!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2smx!4v1471908546569" class="rounded" style="border: 0" allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
>>>>>>> 00ba623784c1670fcf9ed4e4d70096915b0c2792
            </div>
        </div>
    </section>
    <!-- EMPLOYERS DETAILS END -->

<<<<<<< HEAD
    
=======
    <!-- subscribe start -->
    <section class="section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5">
                    <div class="float-left position-relative notification-icon mr-2">
                        <i class="mdi mdi-bell-outline text-primary"></i>
                        <span class="badge badge-pill badge-danger">1</span>
                    </div>
                    <h5 class="mt-2 mb-0">Your Job Notification</h5>
                </div>
                <div class="col-lg-8 col-md-7 mt-4 mt-sm-0">
                    <form>
                        <div class="form-group mb-0">
                            <div class="input-group mb-0">
                                <input name="email" id="email" type="email" class="form-control" placeholder="Your email :" required="" aria-describedby="newssubscribebtn">
                                <div class="input-group-append">
                                    <button class="btn btn-primary submitBnt" type="submit" id="newssubscribebtn">Subscribe</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
>>>>>>> 00ba623784c1670fcf9ed4e4d70096915b0c2792
