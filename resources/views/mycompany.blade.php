@extends('layouts.app')
@section('content')
<div class="page-container">
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <form action="{{ route('company.update') }}"  method="post"  class="form-horizontal"enctype="multipart/form-data">
                            @csrf
                        <div class="row">
<div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Company</strong>
                                        <small> Form</small>
                                    </div>
                                    <div class="card-body card-block">
                                        <div class="form-group">
                                            <label for="company" class=" form-control-label">Entreprise</label>
                                            <input type="text" id="company"   value="{{ $info->company->entreprise}}"name="entreprise" placeholder="Enter your company name" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="tlf" class=" form-control-label">Télephone</label>
                                            <input type="number" id="vat" value="{{ $info->company->tlp}}" name="tlp" placeholder="+213 00 00 00 00" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="mail" class=" form-control-label">Email</label>
                                            <input type="email" name="email"  value="{{ $info->company->email}}" id="vat" placeholder="entreprise@gmail.com" class="form-control">
                                        </div>
                                          <div class="form-group">
                                            <label for="site" class=" form-control-label">Site Web</label>
                                            <input type="text" name="site" id="vat" value="{{ $info->company->site}}" placeholder="www.entreprise.com" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="street" class=" form-control-label">Adresse</label>
                                            <input type="text" name="adresse"  value="{{ $info->company->adresse}}"id="street" placeholder="l'adresse de votre entreprise" class="form-control">
                                        </div>
                                            <div class="row form-group">
                                                <div class="col col-md-12">
                                                    <label for="Wilaya"  class=" form-control-label">Wilaya</label>
                                                </div>
                                                <div class="col-12 col-md-12">
                                                    <input type="text "  value="{{ $info->company->wilaya}}" name="wilaya" class="form-control">
                                                </div>
                                            </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="postal-code" class=" form-control-label">Code Postal </label>
                                                    <input type="number" name="postal"  value="{{ $info->company->postal}}" id="postal-code" placeholder="0000 " class="form-control">
                                                </div>
                                            </div>
                                               <div class="col-12">
                                            <div class="form-group">
                                            <label for="country" class=" form-control-label">Pays</label>
                                            <input type="text" name="pays" value="{{ $info->company->pays}}" id="country" placeholder="Pays" class="form-control">
                                        </div></div>
                                        
                                           <div class="col-12">
                                            <div class="row form-group">
                                                <div class="col col-md-12">
                                                    <label class=" form-control-label">Type de l'entreprise </label>
                                                </div></div></div>
                                                <div class="col col-md-12">
                                                    <div class="form-check-inline form-check">
                                                        <label for="inline-radio1" class="form-check-label ">
                                                            <input type="text" name="type" id="inline-radio1"  value="{{ $info->company->type}}"   class="form-control">
                                                        </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                       <!-- <label for="inline-radio2" class="form-check-label ">
                                                            <input type="radio" id="inline-radio2" name="type" value="option2" class="form-check-input">Privé
                                                        </label>-->

                                                    </div>
                                                </div>
                                            




                                                <div class="col col-md-3">
                                                    <label for="logo" class=" form-control-label">Ajouter un logo</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" id="file-input" name="logo" class="form-control-file">
                                                </div>

                                                <div class="form-group">
                                            <label for="street" class=" form-control-label">Description</label>
<textarea name="description"   value="{{ $info->company->description}}" cols="30" rows="10"></textarea>                                        </div>
                                     <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Ajouter
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Annuler
                                        </button>
                                    </div>
                                </div></div></div></form>
                            </div>
@endsection