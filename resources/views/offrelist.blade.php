@extends('layouts.app')
@section('content')
<div class="page-container">
           <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                    </div>

<div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                               <h3 class="title-5 m-b-35">Les offres de mon entreprise</h3>
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                        <div class="rs-select2--light rs-select2--md">
                                            <select class="js-select2" name="property">
                                                <option selected="selected">All Properties</option>
                                                <option value="">Option 1</option>
                                                <option value="">Option 2</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <div class="rs-select2--light rs-select2--sm">
                                            <select class="js-select2" name="time">
                                                <option selected="selected">Today</option>
                                                <option value="">3 Days</option>
                                                <option value="">1 Week</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <button class="au-btn-filter">
                                            <i class="zmdi zmdi-filter-list"></i>filters</button>
                                    </div>
                                    <div class="table-data__tool-right">
                                        <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                            <i class="zmdi zmdi-plus"></i>add item</button>
                                        <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                                            <select class="js-select2" name="type">
                                                <option selected="selected">Export</option>
                                                <option value="">Option 1</option>
                                                <option value="">Option 2</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2" align="left">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </th>
                                                <th>Num Offre</th>
                                                <th>Intitulé</th>
                                                <th>Domaine</th>
                                                <th>Diplome</th>
                                                
                                                
                                                <th>Rémunération</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <ul class="pagination job-pagination mb-0 justify-content-center">
                            <li class="page-item active">{{$offres->links()}}</li>
      </ul> 
                                        <tbody>
                                            @foreach($offres as $job)
                                            <tr class="tr-shadow">
                                                <td>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </td>
                                                <td>{{$job->id}}</td>
                                                <td>
                                                    <span class="block-email">{{$job->intitule}}</span>
                                                </td>
                                                <td class="desc">{{$job->domaine}}</td>
                                                
                                                <td>
                                                    <span class="status--process">{{$job->diplome}}</span>
                                                </td>
                                                <td>{{$job->remun}}DA</td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        
                                                            <a href="{{ url('jobs/'. $job->id.'/edit') }}"  class="btn btn-success "><i class="zmdi zmdi-edit"></i></a>

                                                            <form action ="{{url('jobs/'.$job->id)}}" method="post">
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}
                                         
                                                        <button  class="btn btn-danger btn-circle" data-toggle="tooltip" data-placement="top" title="Supprimer">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button></form>
                                                        <a href="{{ url('emplois/'.$job->id) }}" class="item" data-toggle="tooltip" data-placement="top" title="Details">
                                                            <i class="zmdi zmdi-more"></i>
                                                        
                                                    </div>
                                                </td>
                                            </tr>
                                               <tr class="spacer"></tr>
                                           @endforeach
                                         
                                        </tbody>
                                    </table>
                                </div></div></div></div></div></div>
@endsection