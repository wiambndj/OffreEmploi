
  @extends('layouts.master')
@section('titre','Details de loffre')
@section('content1')
<body>
    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div>
    <!-- Loader -->

    
    <!-- Start home -->
    <section class="bg-half page-next-level"> 
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="text-center text-white">
                        <h4 class="text-uppercase title mb-4">Job Detail</h4>
                        <ul class="page-next d-inline-block mb-0">
                            <li><a href="index.html" class="text-uppercase font-weight-bold">Home</a></li>
                            <li><a href="#" class="text-uppercase font-weight-bold">Jobs</a></li> 
                            <li>
                                <span class="text-uppercase text-white font-weight-bold">Job Detail</span> 
                            </li> 
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end home -->

    <!-- JOB DETAILS START -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                
                    <h4 class="text-dark mb-3">{{$job->intitule}}</h4>
                    
                    <h6 class="mb-2"><a href="{{ url('entreprise/'.$job->user_id) }}" class="text-dark">cette offre publi par</a></h6>
                    @if(session('message'))
                    <div class="alert alert-success" role="alert">
                    {{session('message')}}
                    @endif
                    @if(session('error'))
                    <div class="alert alert-danger" role="alert">
                    {{session('error')}}
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8 col-md-7">
                    <div class="job-detail border rounded p-4">
                        <div class="job-detail-content">
                            <img src="images/featured-job/img-4.png" alt="" class="img-fluid float-left mr-md-3 mr-2 mx-auto d-block">
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
                            <h5 class="text-dark mt-4">Description  d'offre</h5>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="job-detail border rounded mt-2 p-4">
                                <div class="job-detail-desc">
                                    <p class="text-muted mb-3">{{$job->description}}</p>

                                   
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <h5 class="text-dark mt-4">Qualification :</h5>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="job-detail border rounded mt-2 p-4">
                                <div class="job-detail-desc">
                                    <div class="job-details-desc-item">
                                        <div class="float-left mr-3">
                                            <i class="mdi mdi-send text-primary"></i>
                                        </div>
                                        <p class="text-muted mb-2">Morbi mattis ullamcorper velit. Phasellus gravida semper nisi nullam vel sem.</p>
                                    </div>

                                    <div class="job-details-desc-item">
                                        <div class="float-left mr-3">
                                            <i class="mdi mdi-send text-primary"></i>
                                        </div>
                                        <p class="text-muted mb-2">Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet.</p>
                                    </div>

                                    <div class="job-details-desc-item">
                                        <div class="float-left mr-3">
                                            <i class="mdi mdi-send text-primary"></i>
                                        </div>
                                        <p class="text-muted mb-2">Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus.</p>
                                    </div>

                                    <div class="job-details-desc-item">
                                        <div class="float-left mr-3">
                                            <i class="mdi mdi-send text-primary"></i>
                                        </div>
                                        <p class="text-muted mb-2">Donec mollis hendrerit risus. Phasellus nec sem in justo pellentesque facilisis.</p>
                                    </div>

                                    <div class="job-details-desc-item">
                                        <div class="float-left mr-3">
                                            <i class="mdi mdi-send text-primary"></i>
                                        </div>
                                        <p class="text-muted mb-2">Praesent congue erat at massa. Sed cursus turpis vitae tortor. Donec posuere vulputate arcu.</p>
                                    </div>

                                    <div class="job-details-desc-item">
                                        <div class="float-left mr-3">
                                            <i class="mdi mdi-send text-primary"></i>
                                        </div>
                                        <p class="text-muted mb-2">Donec elit libero, sodales nec, volutpat a, suscipit non, turpis. Nullam sagittis.</p>
                                    </div>

                                    <div class="job-details-desc-item">
                                        <div class="float-left mr-3">
                                            <i class="mdi mdi-send text-primary"></i>
                                        </div>
                                        <p class="text-muted mb-2">Pellentesque auctor neque nec urna. Proin sapien ipsum, porta a, auctor quis, euismod ut, mi.</p>
                                    </div>

                                    <div class="job-details-desc-item">
                                        <div class="float-left mr-3">
                                            <i class="mdi mdi-send text-primary"></i>
                                        </div>
                                        <p class="text-muted mb-0">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <h5 class="text-dark mt-4">Primary Responsibilities :</h5>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="job-detail border rounded mt-2 p-4">
                                <div class="job-detail-desc">
                                    <div class="job-details-desc-item">
                                        <div class="float-left mr-3">
                                            <i class="mdi mdi-send text-primary"></i>
                                        </div>
                                        <p class="text-muted mb-2">HTML, CSS & Scss</p>
                                    </div>

                                    <div class="job-details-desc-item">
                                        <div class="float-left mr-3">
                                            <i class="mdi mdi-send text-primary"></i>
                                        </div>
                                        <p class="text-muted mb-2">Javascript</p>
                                    </div>

                                    <div class="job-details-desc-item">
                                        <div class="float-left mr-3">
                                            <i class="mdi mdi-send text-primary"></i>
                                        </div>
                                        <p class="text-muted mb-2">PHP</p>
                                    </div>

                                    <div class="job-details-desc-item">
                                        <div class="float-left mr-3">
                                            <i class="mdi mdi-send text-primary"></i>
                                        </div>
                                        <p class="text-muted mb-2">Photoshop</p>
                                    </div>

                                    <div class="job-details-desc-item">
                                        <div class="float-left mr-3">
                                            <i class="mdi mdi-send text-primary"></i>
                                        </div>
                                        <p class="text-muted mb-0">Illustrator</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-5 mt-4 mt-sm-0">
                    <div class="job-detail border rounded p-4">
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

                    <div class="job-detail border rounded mt-4 p-4">
                        <h5 class="text-muted text-center pb-2"><i class="mdi mdi-clock-outline mr-2"></i>Opening Hours</h5>

                        <div class="job-detail-time border-top pt-4">
                            <ul class="list-inline mb-0">
                                <li class="clearfix text-muted border-bottom pb-3">
                                    <div class="float-left">Monday</div>
                                    <div class="float-right">
                                        <h5 class="f-13 mb-0">9AM - 7PM</h5>
                                    </div>
                                </li>

                                <li class="clearfix text-muted border-bottom pb-3">
                                    <div class="float-left">Tuesday</div>
                                    <div class="float-right">
                                        <h5 class="f-13 mb-0">9AM - 7PM</h5>
                                    </div>
                                </li>

                                <li class="clearfix text-muted border-bottom pb-3">
                                    <div class="float-left">Wednesday</div>
                                    <div class="float-right">
                                        <h5 class="f-13 mb-0">9AM - 7PM</h5>
                                    </div>
                                </li>

                                <li class="clearfix text-muted border-bottom pb-3">
                                    <div class="float-left">Thursday</div>
                                    <div class="float-right">
                                        <h5 class="f-13 mb-0">9AM - 7PM</h5>
                                    </div>
                                </li>

                                <li class="clearfix text-muted border-bottom pb-3">
                                    <div class="float-left">Friday</div>
                                    <div class="float-right">
                                        <h5 class="f-13 mb-0">9AM - 7PM</h5>
                                    </div>
                                </li>

                                <li class="clearfix text-muted border-bottom pb-3">
                                    <div class="float-left">Saturday</div>
                                    <div class="float-right">
                                        <h5 class="f-13 mb-0">6:30AM - 1PM</h5>
                                    </div>
                                </li>

                                <li class="clearfix text-muted pb-0">
                                    <div class="float-left">Sunday</div>
                                    <div class="float-right">
                                        <h5 class="f-13 mb-0">Closed</h5>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
<div class="row">
                <div class="col-lg-12 mt-3">
                    <div class="border rounded p-4">
                      

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Postuler</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form  action="{{ route('postuler.store',[$job->id]) }}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <script>function fun_showtextbox()
{
    var select_status=$('#messagetype').val();
    /* if select personal from select box then show my text box */
    
if(select_status == 'Personal')
    {
        $('#mobileno_textbox').show();// By using this id you can show your content    
        $('#mobileno_textbox2').hide();
    }
    else
    {   $('#mobileno_textbox2').show();
        $('#mobileno_textbox').hide();// otherwise hide   
    }
    
}</script>
           <div class="form-group" >
        <select name="messagetype" id="messagetype"  class="form-control"  data-style="select-wih-transition" title="News Type" data-size="7"  onchange="fun_showtextbox()">
        <option disabled="">Select</option>
        <option value="All">Parmi mes cvs</option>
        <option value="Personal">chargez un autre cv</option>
        </select>
       </div>
        <div class="form-group">
            <label for="recipient-name" class="col-form-label">Titre<span style="color: red;">*</span></label>
     <input type="text" name="nom" class="form-control" >
          </div>
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
     
           <div class="form-group" style="display: none;"  id="mobileno_textbox">
            <label for="message-text" class="col-form-label">Pièce jointe</label>
              <input type="file" class="form-control" name="doc" >
          </div>

           <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
        <button type="submit" class="btn btn-primary">Postuler</button>
      </div>
        </form>
      </div>
     
    </div>
  </div>
</div>

                    
                    </div>
                </div>
            </div>

                    <div class="job-detail border rounded mt-4">
                         <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#exampleModal" >Postuler</button>
                     <!-- <script>
                      $(document).ready(function(){
$("select").change(function()
{
$(this).find("option:selected").each(function(){
var optionValue = $(this).attr("value");
if(optionValue){

    #("." + optionValue).show();
}
else
{$(".box").hide();}
});

}).change();



                      }
                     
                      );
                      
                      
                      
                      
                      </script>-->
                     
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- JOB DETAILS END -->

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
    <!-- subscribe end -->

   

    <!-- Back to top -->
    <a href="#" class="back-to-top rounded text-center" id="back-to-top"> 
        <i class="mdi mdi-chevron-up d-block"> </i> 
    </a>
    <!-- Back to top -->

    <!-- javascript -->
 

</body>
