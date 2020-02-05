
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  @extends('layouts.master')
@section('titre','Profile')
@section('content1')

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header ">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Nouveau cv</h4>
      </div>
      <form action="{{ route('profile.store') }}" method="post" enctype="multipart/form-data">
      		{{csrf_field()}}
	      <div class="modal-body">
				@include('profiles.moncv')
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
	        <button type="submit" class="btn btn-primary">Enregistrer</button>
	      </div>
      </form>
    </div>
    </div>
    </div>
    <section class="bg-half page-next-level"> 
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="candidates-profile-details text-center">
                        <img src="{{$info->avatar}}" height="150" alt="" class="d-block mx-auto shadow rounded-pill mb-4">
                        <h5 class="text-white mb-2">{{$info->name}}</h5>
                        <p class="text-white-50 h6 mb-2">{{$info->email}}</p>
                     
                    </div>
                </div>
            </div>
        </div>
    </section>

<div class="container">
	<div class="row">
		<div class="col-md-12">
            
           <br>
    <div class="section-title text-center mb-4 pb-2">
                        <h4 class="title title-line pb-5">Liste de mes cvs</h4>
                     
                    </div>

                    <div class="buy-button">
 
               &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
               &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                     &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                     
                     &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                  
               
         <!--  <a href="{{ route('profile.cv') }}" class="btn btn-success" style="text-align: right;"><i class="mdi mdi-cloud-upload"></i> Nouveau cv</a>-->
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal"><i class="mdi mdi-cloud-upload"></i> Nouveau cv
</button>
              </div>
              <br><br>
            
             
          <div class="col-lg-12">
                    <div class="row">
                   
      @foreach($cvs as $cv)
      
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
        <img src="{{$cv->photo}}" height="150"class="rounded-circle" alt="Cinque Terre">
          
           <a href="{{ url('dynamic_pdf/pdf/'.$cv->id) }}" class="btn btn-light"><i class="mdi mdi-cloud-upload"></i></a>
          <div class="caption">
            <h3>{{ $cv->titre }}</h3>
            <p>{{ $cv->presentation }}</p>
            <p> 
               <form action="{{ url('cvs', ['id' => $cv->id]) }}" method="post">
                 {{ method_field('DELETE') }}

                 {{ csrf_field() }}

               
                <a href="{{ url('experiences/'.$cv->id) }}" class="btn btn-primary btn-circle"><i class="fa fa-list"></i></a> 
                

              
                <a href="{{ url('cvs/'.$cv->id.'/edit') }}"  class="btn btn-success  btn-circle" role="button"> <i class='fas fa-pen'></i></a>
        

              
               
                                    <button type="submit"  class="btn btn-danger btn-circle"><i class="fa fa-times"></i></button>
           
               </form>
            </p>
          </div>
        </div>
      </div>
      @endforeach
      <div class="col-lg-12 mt-4 pt-2">
                            <nav aria-label="Page navigation example">
                            <ul class="pagination job-pagination mb-0 justify-content-center">
                            <li class="page-item active">{{$cvs->links()}}</li>
      </ul>   <br>
      </nav>
      </div>
    
      <br>   <br>
    </div>

		</div>
	</div>
</div>
</div>
	
			

							
