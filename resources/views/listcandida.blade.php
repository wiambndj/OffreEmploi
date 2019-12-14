@extends('layouts.app')
@section('content')
<div class="page-container">
<div class="row">
                            <div class="col-lg-12">
                                <!-- USER DATA-->
                                <div class="user-data m-b-30">
                                    <h3 class="title-3 m-b-30">
                                        <i class="zmdi zmdi-account-calendar"></i>Table des candidatures</h3>
                                    <div class="filters m-b-45">
                                        <div class="rs-select2--dark rs-select2--md m-r-10 rs-select2--border">
                                            <select class="js-select2" name="property">
                                                <option selected="selected">All Properties</option>
                                                <option value="">Products</option>
                                                <option value="">Services</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <div class="rs-select2--dark rs-select2--sm rs-select2--border">
                                            <select class="js-select2 au-select-dark" name="time">
                                                <option selected="selected">All Time</option>
                                                <option value="">By Month</option>
                                                <option value="">By Day</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                    </div>
                                    <div class="table-responsive table-data">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <td>
                                                        <label class="au-checkbox">
                                                            <input type="checkbox">
                                                            <span class="au-checkmark"></span>
                                                        </label>
                                                    </td>
                                                    <td>Condidature pour le poste de</td>
                                                    <td>Nom</td>
                                                    <td>Télephone</td>
                                                    <td>Adresse</td>
                                                    <td>Gérer</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <label class="au-checkbox">
                                                            <input type="checkbox">
                                                            <span class="au-checkmark"></span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        Ingénieur en informatique
                                                    </td>
                                                    <td>
                                                        <!--<span class="role admin">admin</span>-->
                                                               <div class="table-data__info">
                                                            <h6>lori lynch</h6>
                                                            <span>
                                                                <a href="#">johndoe@gmail.com</a>
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>05 55 60 70 63
                                                      <!--  <div class="rs-select2--trans rs-select2--sm">
                                                            <select class="js-select2" name="property">
                                                                <option selected="selected">Full Control</option>
                                                                <option value="">Post</option>
                                                                <option value="">Watch</option>
                                                            </select>
                                                            <div class="dropDownSelect2"></div>
                                                        </div>-->
                                                    </td>
                                                    <td>Tlemcen
                                                       <!-- <span class="more">
                                                            <i class="zmdi zmdi-more"></i>
                                                        </span>-->
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-success">Consulter</button>
                                                        <button type="button" class="btn btn-danger">Supprimer</button>
                                                    </td>
                                                </tr>
                                                 <tr>
                                                    <td>
                                                        <label class="au-checkbox">
                                                            <input type="checkbox">
                                                            <span class="au-checkmark"></span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        Ingénieur en informatique
                                                    </td>
                                                    <td>
                                                        <!--<span class="role admin">admin</span>-->
                                                               <div class="table-data__info">
                                                            <h6>lori lynch</h6>
                                                            <span>
                                                                <a href="#">johndoe@gmail.com</a>
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>05 55 60 70 63
                                                      <!--  <div class="rs-select2--trans rs-select2--sm">
                                                            <select class="js-select2" name="property">
                                                                <option selected="selected">Full Control</option>
                                                                <option value="">Post</option>
                                                                <option value="">Watch</option>
                                                            </select>
                                                            <div class="dropDownSelect2"></div>
                                                        </div>-->
                                                    </td>
                                                    <td>Tlemcen
                                                       <!-- <span class="more">
                                                            <i class="zmdi zmdi-more"></i>
                                                        </span>-->
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-success">Consulter</button>
                                                        <button type="button" class="btn btn-danger">Supprimer</button>
                                                    </td>
                                                </tr>
                                               
                                               <tr>
                                                    <td>
                                                        <label class="au-checkbox">
                                                            <input type="checkbox">
                                                            <span class="au-checkmark"></span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        Ingénieur en informatique
                                                    </td>
                                                    <td>
                                                        <!--<span class="role admin">admin</span>-->
                                                               <div class="table-data__info">
                                                            <h6>lori lynch</h6>
                                                            <span>
                                                                <a href="#">johndoe@gmail.com</a>
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>05 55 60 70 63
                                                      <!--  <div class="rs-select2--trans rs-select2--sm">
                                                            <select class="js-select2" name="property">
                                                                <option selected="selected">Full Control</option>
                                                                <option value="">Post</option>
                                                                <option value="">Watch</option>
                                                            </select>
                                                            <div class="dropDownSelect2"></div>
                                                        </div>-->
                                                    </td>
                                                    <td>Tlemcen
                                                       <!-- <span class="more">
                                                            <i class="zmdi zmdi-more"></i>
                                                        </span>-->
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-success">Consulter</button>
                                                        <button type="button" class="btn btn-danger">Supprimer</button>
                                                    </td>
                                                </tr>
                                               
                                                 <tr>
                                                    <td>
                                                        <label class="au-checkbox">
                                                            <input type="checkbox">
                                                            <span class="au-checkmark"></span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        Ingénieur en informatique
                                                    </td>
                                                    <td>
                                                        <!--<span class="role admin">admin</span>-->
                                                               <div class="table-data__info">
                                                            <h6>lori lynch</h6>
                                                            <span>
                                                                <a href="#">johndoe@gmail.com</a>
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>05 55 60 70 63
                                                      <!--  <div class="rs-select2--trans rs-select2--sm">
                                                            <select class="js-select2" name="property">
                                                                <option selected="selected">Full Control</option>
                                                                <option value="">Post</option>
                                                                <option value="">Watch</option>
                                                            </select>
                                                            <div class="dropDownSelect2"></div>
                                                        </div>-->
                                                    </td>
                                                    <td>Tlemcen
                                                       <!-- <span class="more">
                                                            <i class="zmdi zmdi-more"></i>
                                                        </span>-->
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-success">Consulter</button>
                                                        <button type="button" class="btn btn-danger">Supprimer</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class="au-checkbox">
                                                            <input type="checkbox" checked="checked">
                                                            <span class="au-checkmark"></span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                     Ingénieur en Informatique
                                                    </td>
                                                    <td>
                                                           <div class="table-data__info">
                                                            <h6>lori lynch</h6>
                                                            <span>
                                                                <a href="#">johndoe@gmail.com</a>
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>05 55 60 70 63
                                                       <!-- <div class="rs-select2--trans rs-select2--sm">
                                                            <select class="js-select2" name="property">
                                                                <option value="">Full Control</option>
                                                                <option value="" selected="selected">Post</option>
                                                                <option value="">Watch</option>
                                                            </select>
                                                            <div class="dropDownSelect2"></div>
                                                        </div>-->
                                                    </td>
                                                    <td>
                                                        Oran
                                                    </td>
                                                    <td>  <button type="button" class="btn btn-success">Consulter</button>
                                                        <button type="button" class="btn btn-danger">Supprimer</button></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="user-data__footer">
                                        <button class="au-btn au-btn-load">Voir plus</button>
                                    </div>
                                </div>
                                <!-- END USER DATA-->
                            </div>
                            <div class="col-lg-12">
                                <!-- TOP CAMPAIGN-->
                               
                                <!--  END TOP CAMPAIGN-->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                               
                            </div>
                        </div>
                        <div class="row m-t-30">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                              
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection