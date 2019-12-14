@extends('layouts.master')
@section('titre','Modifier profil')
@section('content1')
    <!-- Start home -->
    <section class="bg-half page-next-level"> 
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="candidates-profile-details text-center">
                        <img src="{{ $info->avatar}}" height="150" alt="" class="d-block mx-auto shadow rounded-pill mb-4">

                        <h5 class="text-white mb-2">{{ $info->name }}&nbsp;{{ $info->lastname}}</h5>
                        <p class="text-white-50 h6 mb-2"><i class="mdi mdi-bank mr-2"></i>Web Themes.pvt.Ltd</p>
                        <p class="text-white-50 h6 mb-2">{{ $info->email }}</p>
                        <ul class="candidates-profile-icons list-inline mb-3">
                            <li class="list-inline-item"><a href="#" class="text-warning"><i class="mdi mdi-star"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="text-warning"><i class="mdi mdi-star"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="text-warning"><i class="mdi mdi-star"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="text-warning"><i class="mdi mdi-star"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="text-warning"><i class="mdi mdi-star"></i></a></li>
                        </ul>

                       
                    </div>
                </div>
            </div>
        </div>
    </section>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h4>Modifier </h4></div>

                <div class="panel-body">
                    <form action="{{ route('profile.update') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                              <label for="avatar">Upload avatar</label>
                              <input type="file" name="avatar" class="form-control" accept="image/*">
                        </div>
                        <div class="form-group">
                              <label for="location">location</label>
                              <input type="text" name="location" value="{{ $info->profile->location }}" class="form-control" required>
                        </div>
                        <div class="form-group">
                              <label for="date_naissance">date naissance </label>
                              <input type="date" name="date_naissance" id="date_naissance" value="{{ $info->profile->date_naissance }}" class="form-control" required>
                        </div>
                        <div class="form-group">
                              <label for="name">name</label>
                              <input type="text" name="name" value="{{ $info->name }}" class="form-control" required>
                        </div>
                        <div class="form-group">
                              <label for="lastname">lastname</label>
                              <input type="text" name="lastname" value="{{ $info->lastname }}" class="form-control" required>
                        </div>
                        <div class="form-group">
                              <label for="phone">numero de telephone</label>
                              <input type="text" name="phone" value="{{ $info->phone }}" class="form-control" required>
                        </div>
                        <div class="form-group">
                              <label for="email">email</label>
                              <input type="email" name="email" value="{{ $info->email }}" class="form-control" required>
                        </div>
                        <div class="form-group">
                              <p class="text-center">
                                    <button class="btn btn-primary" type="submit">
                                          Save your information
                                    </button>
                              </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
