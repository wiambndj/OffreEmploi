

  @extends('layouts.master')
@section('titre','Profile')
@section('content1')
<section class="bg-half page-next-level"> 
     <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="text-center text-white">
                        <h4 class="text-uppercase title mb-4">{{$cvs->titre}}</h4>
                     
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br><br>
<div class="container" id="app">
	<div class="row">
		<div class="col-md-12">
<!---------------------------------Ajouter experience ------------------------------>
	
			
<div class="panel panel-primary">
				<div class="panel-heading">
					<div class="row">
						<div class="col-md-10"><h3 class="panel-title">Experience</h3></div>
						<div class="col-md-2 text-right">
						<button type="button" class="btn btn-primary align-right" data-toggle="modal" data-target="#myModal">
+
</button>
		
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header ">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Nouvelle experience</h4>
      </div>
      <form action="{{route('experience.store',[$cvs->id])}}"   method="post">
      		{{csrf_field()}}
	      <div class="modal-body">
				@include('profiles.createexp')
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
	        <button type="submit" class="btn btn-primary">Enregistrer</button>
	      </div>
      </form>
    </div>
    </div>
    </div>
		<!-- Modal -->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit Category</h4>
      </div>
      <form action="{{route('experience.update',[$cvs->id])}}" method="post">
      		
      		{{csrf_field()}}
	       <div class="modal-body">
	      	
				@include('profiles.createexp')
	         </div>
	       <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary">Save Changes</button>
	      </div>
      </form>
    </div>
  </div>
</div>
    				</div>
					</div>
					
				</div>
				<!-------Afficher experience--------------------->
				<div class="faq-content">
                    
                        <div class="faq-content mt-3">
                            <div class="accordion" id="accordionExample">
							
                                <div class="card border rounded shadow mb-3">
                                    <a data-toggle="collapse" href="#collapseOne" class="faq position-relative" aria-expanded="true" aria-controls="collapseOne">
									
                                        <div class="card-header bg-light p-3" id="headingOne">
                                            <h4 class="title mb-0 faq-question"> Experience   </h4>
                                        </div> </a>
					@foreach($experiences as $experience)
					
                                   
                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body">
										<div class="col-lg-12 mt-4 pt-2">
                            <div class="job-list-box border rounded">
                                <div class="p-3">
                                    <div class="row align-items-center">
                                        <div class="col-lg-2">
                                            <div class="company-logo-img">
                                                <img src="/images/featured-job/img-1.png" alt="" class="img-fluid mx-auto d-block">
                                            </div>
                                        </div>
                                        <div class="col-lg-7 col-md-9">
                                            <div class="job-list-desc">
                                                <h6 class="mb-2"><a href="#" class="text-dark">{{$experience->intitule}}</a></h6>
                                                <p class="text-muted mb-0">	{{$experience->description}}.</p>
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item mr-3">
                                                        <p class="text-muted mb-0"><i class="mdi mdi-map-marker mr-2"></i>{{$experience->lieu}}</p>
                                                    </li>

                                                    <li class="list-inline-item">
                                                        <p class="text-muted mb-0"><i class="mdi mdi-clock-outline mr-2"></i>{{$experience->debut}} -{{$experience->fin}}</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3">
                                            <div class="job-list-button-sm text-right">
											<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit"data-mytitle="{{$experience->intitule}}" data-mydescription="{{$experience->description}}"data-mylieu="{{$experience->lieu}}"data-mydebut="{{$experience->debut}}"data-myfin="{{$experience->fin}}" data-catid="{{$experience->id}}" >
+
</button>

                                                <div class="mt-3">
												<a href="{{ url('exp/'. $experience->id.'/edit') }}"class="btn btn-success btn-circle"><i class="fa fa-pen"></i></a>
											
												<form action ="{{url('exp/'.$experience->id)}}" method="post">
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}
									<br>
                                    <button   type="submit" class="btn btn-danger btn-circle"><i class="fa fa-times">  </i></button></form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                                        </div>
                                    </div>
                               
					
						@endforeach
						</div> </div>
								</div>
                                    </div>
                         
			</div>

			<hr>
<!------------------------------------ajouter formation ---------------------->
			<div class="panel panel-primary">
				<div class="panel-heading">
					<div class="row">
						<div class="col-md-10"><h3 class="panel-title">Formation</h3></div>
						<div class="col-md-2 text-right">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal2">
+
</button>
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Nouvelle formation</h4>
      </div>
      <form action="{{route('formation.store',[$cvs->id])}}" method="post">
      		{{csrf_field()}}
	      <div class="modal-body">
				@include('profiles.createfor')
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary">Save</button>
	      </div>
      </form>
    </div>
  </div>
</div>

						</div>
					</div>
					
				</div>
<!---------------------afficher formation---------------->
<div class="faq-content">
                    
					<div class="faq-content mt-3">
						<div class="accordion" id="accordionExample">
						
							<div class="card border rounded shadow mb-3">
								<a data-toggle="collapse" href="#collapseTwo" class="faq position-relative collapsed" aria-expanded="false" aria-controls="collapseTwo">
								
									<div class="card-header bg-light p-3" id="headingOne">
										<h4 class="title mb-0 faq-question"> Formation  </h4>
									</div> </a>
					@foreach($formations as $formation)
					<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                        <div class="card-body">
										<div class="col-lg-12 mt-4 pt-2">
                            <div class="job-list-box border rounded">
                                <div class="p-3">
                                    <div class="row align-items-center">
                                        <div class="col-lg-2">
                                            <div class="company-logo-img">
                                                <img src="/images/featured-job/img-1.png" alt="" class="img-fluid mx-auto d-block">
                                            </div>
                                        </div>
                                        <div class="col-lg-7 col-md-9">
                                            <div class="job-list-desc">
                                                <h6 class="mb-2"><a href="#" class="text-dark">{{$formation->titre}}</a></h6>
                                                <p class="text-muted mb-0">{{$formation->diplome}} , {{$formation->domaine}}.</p>
												<p class="text-muted mb-0">Etablissement:{{$formation->etablissement}} </p>
												<p class="text-muted mb-0">{{$formation->description}} </p>
                                                <ul class="list-inline mb-0">
												    <li class="list-inline-item mr-3">
                                                        <p class="text-muted mb-0"><i class="mdi mdi-map-marker mr-2"></i>{{$formation->lieu}}</p>
                                                    </li>
                                                    <li class="list-inline-item mr-3">
													  <p class="text-muted mb-0"><i class="mdi mdi-clock-outline mr-2"></i>{{$formation->debut}} -{{$formation->fin}}</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
				
					                 	<div class="col-lg-3 col-md-3">
                                            <div class="job-list-button-sm text-right">
                                                 <div class="mt-3">
												      <a href="{{ url('for/'. $formation->id.'/edit') }}" class="btn btn-success btn-circle"><i class="fa fa-pen"></i>
												     </a>
											         	    <form action ="{{url('for/'.$formation->id)}}" method="post">
                                                                 {{csrf_field()}}
                                                             {{method_field('DELETE')}}
								                        	    <br>
                                                              <button  type="submit"  class="btn btn-danger btn-circle"><i class="fa fa-times">  </i></button>
														   </form>
                                                 </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                                        </div>
                                    </div>
					      	@endforeach
				

						   </div> </div>
								</div>
                                    </div>
                         
			</div>
			<hr>
			 <!--------------------------------------Ajouter langue---------------------------------------------------------->
			<div class="panel panel-primary">
				<div class="panel-heading">
					<div class="row">
						<div class="col-md-10"><h3 class="panel-title">Langues</h3></div>
						<div class="col-md-2 text-right">
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal4">
+
</button>
<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Nouvelle langue</h4>
      </div>
      <form action="{{route('langue.store',[$cvs->id])}}" method="post">
      		{{csrf_field()}}
	      <div class="modal-body">
				@include('profiles.createlang')
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary">Save</button>
	      </div>
      </form>
    </div>
  </div>
</div>
						</div>
					</div>
					
				</div>
				<div class="faq-content">
                    
					<div class="faq-content mt-3">
						<div class="accordion" id="accordionExample">
						
							<div class="card border rounded shadow mb-3">
								<a data-toggle="collapse" href="#collapsethree" class="faq position-relative collapsed" aria-expanded="false" aria-controls="collapsethree">
								
									<div class="card-header bg-light p-3" id="headingOne">
										<h4 class="title mb-0 faq-question"> Langue  </h4>
									</div> </a>
					@foreach($langues as $langue)
					<div id="collapsethree" class="collapse" aria-labelledby="headingthree" data-parent="#accordionExample">
					  <div class="card-body">
						
					
					
							<h3>{{$langue->lang}}</h3>

							     <form action ="{{url('exp/'.$formation->id)}}" method="post">
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}
 
                                    <button type="submit" class="btn btn-danger btn-circle"><i class="fa fa-times">  </i></button></form>
				
					
						</div>
                                    </div>
                               
						@endforeach
					
					</div>
				</div>
			</div>

			<hr>
<!-------------------------------------------ajouter competance-------------------------------------->
			<div class="panel panel-primary">
				<div class="panel-heading">
					<div class="row">
						<div class="col-md-10"><h3 class="panel-title">Competence</h3></div>
						<div class="col-md-2 text-right">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal1">
+
</button>
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Nouvelle competence</h4>
      </div>
      <form action="{{route('competance.store',[$cvs->id])}}" method="post">
      		{{csrf_field()}}
	      <div class="modal-body">
				@include('profiles.createcmp')
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary">Save</button>
	      </div>
      </form>
    </div>
  </div>
</div>
					</div>
					
				</div>
        <!-------------------------------------afficher competence--------------------------->
		<div class="faq-content">
                    
					<div class="faq-content mt-3">
						<div class="accordion" id="accordionExample">
						
							<div class="card border rounded shadow mb-3">
								<a data-toggle="collapse" href="#collapsefour" class="faq position-relative collapsed" aria-expanded="false" aria-controls="collapsefour">
								
									<div class="card-header bg-light p-3" id="headingfour">
										<h4 class="title mb-0 faq-question"> Competence </h4>
									</div> </a>
					@foreach($competances as $competance)
				
						<div  id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordionExample">
                                        <div class="card-body">
										<div class="col-lg-12 mt-4 pt-2">
                            <div class="job-list-box border rounded">
                                <div class="p-3">
                                    <div class="row align-items-center">
                                        <div class="col-lg-2">
                                            <div class="company-logo-img">
                                                <img src="/images/featured-job/img-1.png" alt="" class="img-fluid mx-auto d-block">
                                            </div>
                                        </div>
                                        <div class="col-lg-7 col-md-9">
                                            <div class="job-list-desc">
                                              
												<p class="text-muted mb-0">{{$competance->description}}. </p>
                                                
                                            </div>
                                        </div>
				
					                 	<div class="col-lg-3 col-md-3">
                                            <div class="job-list-button-sm text-right">
                                                 <div class="mt-3">
												      <a href="{{ url('cmp/'. $competance->id.'/edit') }}" class="btn btn-success btn-circle"><i class="fa fa-pen"></i>
												     </a>
											         	    <form action ="{{url('cmp/'.$competance->id)}}" method="post">
                                                                 {{csrf_field()}}
                                                             {{method_field('DELETE')}}
								                        	    <br>
                                                              <button  type="submit"  class="btn btn-danger btn-circle"><i class="fa fa-times">  </i></button>
														   </form>
                                                 </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                                        </div>
                                    </div>
						@endforeach
				
						</div> </div>
								</div>
                                    </div>
                         
			</div>
			<hr>
                  <!------------------------------------------------------------------->
			</div>
		   
		    </div>
	       </div>


          </div>
</div>