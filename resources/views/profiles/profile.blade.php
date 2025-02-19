
  @extends('layouts.master')
@section('titre','Profile')
@section('content1')
<section class="bg-half page-next-level"> 
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="candidates-profile-details text-center">
                        <img src="{{$user->avatar}}" height="150" alt="" class="d-block mx-auto shadow rounded-pill mb-4">
                        <h5 class="text-white mb-2">{{$user->name}}</h5>
                        <p class="text-white-50 h6 mb-2"><i class="mdi mdi-bank mr-2"></i>Web Themes.pvt.Ltd</p>
                        <p class="text-white-50 h6 mb-2">{{$user->email}}</p>
                        <ul class="candidates-profile-icons list-inline mb-3">
                            <li class="list-inline-item"><a href="#" class="text-warning"><i class="mdi mdi-star"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="text-warning"><i class="mdi mdi-star"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="text-warning"><i class="mdi mdi-star"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="text-warning"><i class="mdi mdi-star"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="text-warning"><i class="mdi mdi-star"></i></a></li>
                        </ul>

                        <ul class="list-unstyled social-icon social mb-0">
                            <li class="list-inline-item"><a href="#" class="rounded"><i class="mdi mdi-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="rounded"><i class="mdi mdi-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="rounded"><i class="mdi mdi-instagram"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="rounded"><i class="mdi mdi-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end home -->
    <br>
    <p class="text-center">
                                    @if(Auth::id() == $user->id)
                                          <a href="{{ route('profile.edit') }}" class="btn btn-info">Mes informations</a>
                                          <a href="{{ url('cvs') }}" class="btn btn-info">Mes cvs</a>
                                          <a href="{{ route('changepassword') }}" class="btn btn-info"> changerpassword</a>
                                    @endif
                              </p>
    <!-- CANDIDATES PROFILE START -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
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
                    <h4 class="text-dark">Overview :</h4>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 mt-3">
                    <div class="border rounded p-4">
                        <div class="job-detail-desc">
                            <p class="text-muted f-14 mb-3">Cras dapibus Vivamus elementum semper nisi Aenean vulputate eleifend tellus Aenean leo ligula porttitor eu consequat vitae eleifend ac enim aliquam lorem ante dapibus in viverra quis feugiat a tellus phasellus viverra nulla ut metus variuse laoreet quisque rutrum aenean imperdiet etiam ultricies nisi that is maecenas tempus tini tellus eget condimentum rhoncus sem semper libero sit amet adipiscing sem neque sed ipsum nam quam nunc blandit vel luctus pulvinar hendrerit lorem maecenas nec odio et ante tincidunt tempus donec vitae libero venenatis faucibus nullam quis ante etiam sit amet orci eget eros faucibus tincidunt Duis leo Sed fringilla a mauris sit amet nibh donec sodales sagittis magna vel augue curabitur ullamcorper ultricies nisi nam eget dui etiame rhoncus ut enim as minima veniam quis nostrum exercitationem ullam corporis suscipit laboriosam nisi ut aliquid commodi.</p>

                            <p class="text-muted f-14 mb-0">Sed consequat eget bibendum augue cursus nunc quis gravida magna mi a Itaque earum rerum hic tenetur a sapiente delectus ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat liber fusce vulputate eleifend sapien vestibulum purus quam scelerisque ut mollis sed nonummy id metus nullam accumsan lorem in dui cras ultricies mi eu turpis hendrerit fringilla vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia in dui quis consectetuer lacinia nam pretium turpis arcu duis arcu tortor.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 mt-4 pt-2">
                    <h4 class="text-dark">Education :</h4>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 mt-4 pt-5">
                    <div class="border rounded candidates-profile-education text-center text-muted">
                        <div class="profile-education-icon border rounded-pill bg-white text-primary">
                            <i class="mdi mdi-36px mdi-school"></i>
                        </div>
                        <h6 class="text-uppercase f-17"><a href="#" class="text-muted">University Of USA</a></h6>
                        <p class="f-14 mb-1">May 2016 - April 2017</p>
                        <p class="pb-3 mb-0">Diploma In Management Studies</p>
                        
                        <p class="pt-3 border-top mb-0">Suspendisse faucibus et pellentesque egestas lacus ante convallis.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mt-4 pt-5">
                    <div class="border rounded candidates-profile-education text-center text-muted">
                        <div class="profile-education-icon border rounded-pill bg-white text-primary">
                            <i class="mdi mdi-36px mdi-library"></i>
                        </div>
                        <h6 class="text-uppercase f-17"><a href="#" class="text-muted">University Of USA</a></h6>
                        <p class="f-14 mb-1">May 2017 - April 2018</p>
                        <p class="pb-3 mb-0">Diploma In Management</p>
                        
                        <p class="pt-3 border-top mb-0">Suspendisse faucibus et pellentesque egestas lacus ante convallis.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mt-4 pt-5">
                    <div class="border rounded candidates-profile-education text-center text-muted">
                        <div class="profile-education-icon border rounded-pill bg-white text-primary">
                            <i class="mdi mdi-36px mdi-briefcase-check"></i>
                        </div>
                        <h6 class="text-uppercase f-17"><a href="#" class="text-muted">University Of USA</a></h6>
                        <p class="f-14 mb-1">May 2018 - April 2019</p>
                        <p class="pb-3 mb-0">Management Of Company</p>
                        
                        <p class="pt-3 border-top mb-0">Suspendisse faucibus et pellentesque egestas lacus ante convallis.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 mt-4 pt-2">
                    <h4 class="text-dark">Experience :</h4>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mt-3 mt-md-0 pt-3">
                    <div class="border rounded job-list-box p-4">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="company-brand-logo text-center mb-4">
                                    <img src="images/featured-job/img-2.png" alt="" class="img-fluid mx-auto d-block">
                                </div>
                            </div>

                            <div class="col-lg-9">
                                <div class="job-list-desc candidates-profile-exp-desc">
                                    <h5 class="f-19 mb-2"><a href="#" class="text-dark">Web Themes Pvt.Ltd</a></h5>
                                    <p class="text-muted mb-0 f-16">PHP Developer</p>
                                    <p class="text-muted mb-0 f-16">Jan 2016 - Dec 2017</p>
                                    <p class="text-muted mb-0 f-16">Salary : $950</p>
                                    <p class="text-muted mb-0 f-16"><i class="mdi mdi-bank mr-2"></i>www.webthemesltd.co.in</p>
                                    <p class="text-muted mb-0 f-16"><i class="mdi mdi-map-marker mr-2"></i>1919 Ward Road West Nyack, NY 10994</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mt-3 mt-md-0 pt-3">
                    <div class="border rounded job-list-box p-4">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="company-brand-logo text-center mb-4">
                                    <img src="images/featured-job/img-3.png" alt="" class="img-fluid mx-auto d-block">
                                </div>
                            </div>

                            <div class="col-lg-9">
                                <div class="job-list-desc candidates-profile-exp-desc">
                                    <h5 class="f-19 mb-2"><a href="#" class="text-dark">Web code Pvt.Ltd</a></h5>
                                    <p class="text-muted mb-0 f-16">Web Developer</p>
                                    <p class="text-muted mb-0 f-16">Fab 2015 - July 2018</p>
                                    <p class="text-muted mb-0 f-16">Salary : $1100</p>
                                    <p class="text-muted mb-0 f-16"><i class="mdi mdi-bank mr-2"></i>www.webcodeltd.co.in</p>
                                    <p class="text-muted mb-0 f-16"><i class="mdi mdi-map-marker mr-2"></i>519 Leo Street Butler, PA 16001</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mt-3 mt-md-0 pt-3">
                    <div class="border rounded job-list-box p-4">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="company-brand-logo text-center mb-4">
                                    <img src="{{ $user->avatar}}" alt="" class="img-fluid mx-auto d-block">
                                </div>
                            </div>

                            <div class="col-lg-9">
                                <div class="job-list-desc candidates-profile-exp-desc">
                                    <h5 class="f-19 mb-2"><a href="#" class="text-dark">Brand Themes Pvt.Ltd</a></h5>
                                    <p class="text-muted mb-0 f-16">PHP Developer</p>
                                    <p class="text-muted mb-0 f-16">Jan 2016 - Dec 2017</p>
                                    <p class="text-muted mb-0 f-16">Salary : $1000</p>
                                    <p class="text-muted mb-0 f-16"><i class="mdi mdi-bank mr-2"></i>www.brandthemesltd.co.in</p>
                                    <p class="text-muted mb-0 f-16"><i class="mdi mdi-map-marker mr-2"></i>519 Leo Street Butler, PA 16001</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mt-3 mt-md-0 pt-3">
                    <div class="border rounded job-list-box p-4">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="company-brand-logo text-center mb-4">
                                    <img src="images/featured-job/img-7.png" alt="" class="img-fluid mx-auto d-block">
                                </div>
                            </div>

                            <div class="col-lg-9">
                                <div class="job-list-desc candidates-profile-exp-desc">
                                    <h5 class="f-19 mb-2"><a href="#" class="text-dark">Small Themes Pvt.Ltd</a></h5>
                                    <p class="text-muted mb-0 f-16">PHP Developer</p>
                                    <p class="text-muted mb-0 f-16">Jan 2016 - Dec 2017</p>
                                    <p class="text-muted mb-0 f-16">Salary : $900</p>
                                    <p class="text-muted mb-0 f-16"><i class="mdi mdi-bank mr-2"></i>www.smallthemesltd.co.in</p>
                                    <p class="text-muted mb-0 f-16"><i class="mdi mdi-map-marker mr-2"></i>519 Leo Street Butler, PA 16001</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
    </section>
    <!-- CANDIDATES PROFILE END -->

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