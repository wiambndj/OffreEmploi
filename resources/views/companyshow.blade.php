@extends('layouts.app')
@section('content')


<div class="page-container">
            <div class="main-content">
            <div class="section__content section__content--p30">

            <div class="row">
                <div class="col-lg-12">
                    <div class="text-sm-center">
                   
                 &nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;  &nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;  &nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;  &nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;  &nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;  &nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;  &nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;  &nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;  &nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;  &nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;  &nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;  &nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;  &nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;  &nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;
                    <button type="button" class="btn btn-success mb-1" data-toggle="modal" data-target="#scrollmodal">
                    <i class="fa fa-download"></i> 	Publier une offre
										</button>
                  
                    @foreach ($companies as $company)
                        <img src="{{$company->logo}}"alt="" class="img-fluid mx-md-auto d-block">
                        <h4 class="mt-3"><a href="#" class="text-dark">{{$company->entreprise}}</a></h4>
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item mr-3">
                                <p class="text-muted mb-0"><i class="mdi mdi-map-marker mr-2"></i>{{$company->adresse}},{{$company->wilaya}},{{$company->pays}}</p>
                            </li>

                            <li class="list-inline-item">
                                <p class="text-success mb-0"><i class="mdi mdi-bookmark-check mdi-18px mr-2"></i>Verified</p>
                            </li>
                        </ul>

                        <ul class="list-inline mb-2">
                            <li class="list-inline-item mr-3 ">
                                <p class="text-muted"><i class="mdi mdi-earth mr-2"></i>{{$company->site}}</p>
                            </li>

                            <li class="list-inline-item mr-3">
                                <p class="text-muted"><i class="mdi mdi-email mr-2"></i>{{$company->email}}</p>
                            </li>

                            <li class="list-inline-item">
                                <p class="text-muted"><i class="mdi mdi-cellphone-iphone mr-2"></i>{{$company->tlp}}</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row" >
                <div class="col-lg-12" >
                    <div class="border-top border-bottom pt-4 pb-4" style="background: white;">
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
                                    <p class="text-muted mb-0">{{$company->type}}</p>
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
                <div class="col-lg-12 mt-4 pt-2" >
                    <h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Description d'entreprise:</h4>
                    <div class="rounded border p-4 mt-3" style="background: white;">
                        <p class="text-muted">{{$company->description}}.</p>
                    </div>
                </div>
            </div>



            <br>

             
            </div>
            <div class="modal fade" id="scrollmodal" tabindex="-1" role="dialog" aria-labelledby="scrollmodalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="scrollmodalLabel">Ajouter une offre</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="{{ route('offre.store',[$company->id]) }}"  method="post"  class="form-horizontal">
              @csrf
                                                       <div class="row form-group">
                                                           <div class="col col-md-3">
                                                               <label for="text-input" class=" form-control-label">Intitulé du poste</label>
                                                           </div>
                                                           <div class="col-12 col-md-9">
                                                               <input type="text" id="text-input" name="intitule" placeholder="Ingénieur" class="form-control @error('intitule') is-invalid @enderror" value="{{ old('intitule') }}" required autocomplete="intitule" autofocus>
                                                               @error('intitule')
                                               <span class="invalid-feedback" role="alert">
                                                   <strong>{{ $message }}</strong>
                                               </span>
                                           @enderror
                                                           </div>
                                                       </div>
           
                                                         <div class="row form-group">
                                                           <div class="col col-md-3">
                                                               <label for="select" class=" form-control-label">Domaine</label>
                                                           </div>
                                                           <div class="col-12 col-md-9">
                                                               <select name="domaine" id="select" class="form-control @error('domaine') is-invalid @enderror"  value="{{ old('domaine') }}" required autocomplete="domaine" autofocus>
                                                                   <option value="Informatique">Informatique</option>
                                                                   <option value="Sante">Santé</option>
                                                                   <option value="Transport">Transport</option>
                                                                   <option value="Urbanisme">Urbanisme</option>
                                                               </select>
                                                               @error('domaine')
                                               <span class="invalid-feedback" role="alert">
                                                   <strong>{{ $message }}</strong>
                                               </span>
                                           @enderror
                                                           </div>
                                                       </div>
                                                       <div class="row form-group">
                                                           <div class="col col-md-3">
                                                               <label for="multiple-select" class=" form-control-label">Diplomes requis</label>
                                                           </div>
                                                           <div class="col col-md-9">
                                                              <input type="text" name="diplome" class="form-control  @error('diplome') is-invalid @enderror"  value="{{ old('diplome') }}" required autocomplete="diplome" autofocus>
                                                              @error('diplome')
                                               <span class="invalid-feedback" role="alert">
                                                   <strong>{{ $message }}</strong>
                                               </span>
                                           @enderror
                                                           </div>
                                                       </div>
           
           
                                                       <div class="row form-group">
                                                           <div class="col col-md-3">
                                                               <label for="text-input" class=" form-control-label">Nombre d'années d'expérience</label>
                                                           </div>
                                                           <div class="col-12 col-md-9">
                                                               <input type="number" id="text-input" name="experience" placeholder="2ans" class="form-control @error('experience') is-invalid @enderror"  value="{{ old('experience') }}" required autocomplete="experience" autofocus>
                                                               @error('experience')
                                               <span class="invalid-feedback" role="alert">
                                                   <strong>{{ $message }}</strong>
                                               </span>
                                           @enderror
                                                           </div>
                                                       </div>
           
           
                                                       <div class="row form-group">
                                                           <div class="col col-md-3">
                                                               <label for="textarea-input" class=" form-control-label">Description de l'offre</label>
                                                           </div>
                                                           <div class="col-12 col-md-9">
                                                               <textarea name="description" id="textarea-input" rows="9" placeholder="Content..." class="form-control @error('description') is-invalid @enderror"  value="{{ old('description') }}" required autocomplete="description" autofocus></textarea>
                                                               @error('description')
                                               <span class="invalid-feedback" role="alert">
                                                   <strong>{{ $message }}</strong>
                                               </span>
                                           @enderror
                                                           </div>
                                                       </div>
           
           
           
           
           
           
                                                       <div class="row form-group">
                                                           <div class="col col-md-3">
                                                               <label for="lieu" class=" form-control-label">Lieu de travail</label>
                                                           </div>
                                                           <div class="col-12 col-md-9">
                                                               <input type="text" id="" name="lieu" placeholder="Ajouter un lieu" class="form-control @error('lieu') is-invalid @enderror"  value="{{ old('lieu') }}" required autocomplete="lieu" autofocus>
                                                               @error('lieu')
                                               <span class="invalid-feedback" role="alert">
                                                   <strong>{{ $message }}</strong>
                                               </span>
                                           @enderror
                                                           </div>
                                                       </div>
           
                                                       <div class="row form-group">
                                                           <div class="col col-md-3">
                                                               <label for="textarea-input" class=" form-control-label">Compétences pour le poste</label>
                                                           </div>
                                                           <div class="col-12 col-md-9">
                                                               <textarea name="competence" id="textarea-input" rows="9" placeholder="Content..." class="form-control @error('competence') is-invalid @enderror"  value="{{ old('competence') }}" required autocomplete="competence" autofocus></textarea>
                                                            @error('competence')
                                               <span class="invalid-feedback" role="alert">
                                                   <strong>{{ $message }}</strong>
                                               </span>
                                           @enderror
                                                           </div>
                                                       </div>
                                                        <div class="row form-group">
                                                           <div class="col col-md-3">
                                                               <label for="remun" class=" form-control-label">Rémunération</label>
                                                           </div>
                                                           <div class="col-12 col-md-9">
                                                               <input type="text" id="remun" name="remun" placeholder="00.00DA" class="form-control @error('remun') is-invalid @enderror"  value="{{ old('remun') }}" required autocomplete="remun" autofocus>
                                                               @error('remun')
                                               <span class="invalid-feedback" role="alert">
                                                   <strong>{{ $message }}</strong>
                                               </span>
                                           @enderror
                                                           </div>
                                                       </div>
                                                        <div class="row form-group">
                                                           <div class="col col-md-3">
                                                               <label for="date" class=" form-control-label">Date de depot de l'offre</label>
                                                           </div>
                                                           <div class="col-12 col-md-9">
                                                               <input type="date" id="date" name="depot" placeholder="Ajouter un lieu" class="form-control @error('depot') is-invalid @enderror" value="{{ old('depot') }}" required autocomplete="depot" autofocus>
                                                               @error('depot')
                                               <span class="invalid-feedback" role="alert">
                                                   <strong>{{ $message }}</strong>
                                               </span>
                                           @enderror
                                                           </div>
                                                       </div>
                                                       <div class="row form-group">
                                                           <div class="col col-md-3">
                                                               <label class=" form-control-label">Type de l'offre</label>
                                                           </div>
                                                           <div class="col col-md-9">
                                                               <div class="form-check">
                                                                   <div class="radio">
                                                                       <label for="radio1" class="form-check-label ">
                                                                       <input type="text" name="type" class="form-control @error('type') is-invalid @enderror"  value="{{ old('type') }}" required autocomplete="type" autofocus>
                                                                       @error('type')
                                               <span class="invalid-feedback" role="alert">
                                                   <strong>{{ $message }}</strong>
                                               </span>
                                           @enderror
                                                                   </div>
                                                               </div>
                                                           </div>
                                                       </div>
                                                      <div class="row form-group">
                                                           <div class="col col-md-3">
                                                               <label for="date" class=" form-control-label">Date de debut  de l'offre</label>
                                                           </div>
                                                           <div class="col-12 col-md-9">
                                                               <input type="date" id="date" name="debut" placeholder="Ajouter un lieu" class="form-control @error('debut') is-invalid @enderror"  value="{{ old('debut') }}" required autocomplete="debut" autofocus>
                                                               @error('debut')
                                               <span class="invalid-feedback" role="alert">
                                                   <strong>{{ $message }}</strong>
                                               </span>
                                           @enderror
                                                           </div>
                                                       </div>
                                                    <div class="row form-group">
                                                           <div class="col col-md-3">
                                                               <label for="date" class=" form-control-label">Dernier délai de postulation</label>
                                                           </div>
                                                           <div class="col-12 col-md-9">
                                                               <input type="date" id="date" name="delai" placeholder="Ajouter un lieu" class="form-control @error('delai') is-invalid @enderror"  value="{{ old('delai') }}" required autocomplete="delai" autofocus>
                                                               @error('delai')
                                               <span class="invalid-feedback" role="alert">
                                                   <strong>{{ $message }}</strong>
                                               </span>
                                           @enderror
                                                           </div>
                                                       </div>
                                                       
           
           
           
           
           
           
                                                      
                                               <div class="card-footer align-center" >
                                                   <button type="submit" class="btn btn-primary btn-sm">
                                                       <i class="fa fa-dot-circle-o"></i> Publier
                                                   </button>
                                                   <button type="reset" class="btn btn-danger btn-sm">
                                                       <i class="fa fa-ban"></i> Reinitialiser
                                                   </button>
                                               </div>
                                           </div></form></div></div></div></div></div></div></div></div>
          </div>
        
        </div>
      </div>
    </div>
    <!-- end modal scroll -->
            @endforeach

        </div>
 </div></div>
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
                                        <tr>  <th>Nom</th>
                                           <th>Nom</th>
                                                <th>Nom</th>
                                                <th>Email</th>
                                                <th>id</th>
                                                <th>Etat</th>
                                                <th>Cv</th>
                                                <th>lettre de motivation</th>
                                                <th>Consultez leur profile</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($spontanes as $spontane)

                                            <tr><td>{{$spontane->name}}  {{$spontane->lastname}}</td> <td>{{$spontane->name}}  {{$spontane->lastname}}</td>
                                                <td>{{$spontane->name}}  {{$spontane->lastname}}</td>
                                                <td>{{$spontane->email}}</td>
                                                <td>{{$spontane->id}}  {{$spontane->lastname}}</td>
                                                <td>  @if($spontane->etat == 0)<a href="{{ url('spontaneaccpt/'.$spontane->id) }}">Accepter</a>
                                                 <a href="{{ url('spontanerefuse/'.$spontane->id) }}">refuser</a>
                                                 @endif</td>
                                                <td class="process"><a href="{{ url('condidature/spontane/postuler/'.$spontane->doc) }}"> {{$spontane->doc}}</a></td>
                                           
                                                <td>
<A HREF="{{$spontane->lettre}}"> <i class="fa fa-download"></i> Télécharger</A>

                                       </td>
                                       <td>
<a href="{{ url('condidature/'.$spontane->user_id) }}"> voir</a>

                                       </td>
                             
                                            </tr>
                                        
@endforeach
                                        </tbody>
                                    </table>
                                </div>
                        </div>
                    </div>

                  

               
                
    @endsection