@extends('layouts.app')

@section('content')
    <!-- ============ Body content start ============= -->
    <div class="main-content">
        <div class="breadcrumb">
            <h1>Directorio de Clientes</h1>
            <ul>
                <li><a href="">Detalle</a></li>
                <li>Notas GLS</li>
            </ul>
        </div>
        <div class="separator-breadcrumb border-top"></div><!--- LINEA DE DIVISIÓN-->
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="card mb-5">
                    <div class="card-body">
                        <div class="row row-xs">
                            <div class="col-md-5 mt-3 mt-md-0">
                                <input class="form-control" type="text" placeholder="Nombre del Cliente" />
                            </div>
                            <div class="col-md-2 mt-3 mt-md-0">
                                <button class="btn btn-primary btn-block">Buscar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="contact-list">
            <div class="row">
                <div class="col-md-12 mb-4">
                    <div class="card text-left">
                        <div class="card-header text-right bg-transparent">
                            <!--
                            <button class="btn btn-success btn-md m-1" type="button" data-toggle="modal" data-target="#add-receiver"><i class="fa fa-plane text-white mr-2"></i> Agregar Cliente</button>-->
                        </div>
                        <div class="card-body">
                            <div class="table-responsive table-striped">
                                <table class="display table" id="ul-contact-list" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>No. Cliente</th>
                                            <th>Nombre</th>
                                            <th>Teléfono Fijo</th>
                                            <th>Dirección Prin.</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="#"><i class="i-Home1"></i> C-302</a></td>
                                            <td>Victor Badillo Fulanito de Tal</td>
                                            <td>442 123 22 22</td>
                                            <td>Avenida Primero de Mayo Número 9, Fraccionamiento Industrial Tlalnepantla</td>
                                            <td>
                                                <!-- BOTÓN MODAL DETALLE--->
                                                <button class="btn btn-info btn-md m-1" type="button" data-toggle="modal" data-target="#address-detail" title="Detalles"><i class="fa fa-search-plus text-white"></i></button>

                                                <!-- BOTÓN MODAL EDITAR--->
                                                <button class="btn btn-warning btn-md m-1" type="button" data-toggle="modal" data-target="#edit-address" title="Editar"><i class="fa fa-pencil-alt text-white"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of main-content -->

        <!-- MODALS RECEIVER--->
    <!-- begin::modal DETAIL ADDRESS-->
    <div id="address-detail" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="">Detalle de Direcciones</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <!--  start card -->
                    <!-- begin::form-->
                    <form action="action">
                        <div class="card-body">
                            <div class="form-row">
                                <p>Aquí encontrará todas las direcciones disponibles de su cliente.</p>
                            </div>
                            <div class="form-row">
                                <div class="col-sm-4">
                                    <address>
                                        <strong>Dirección Principal</strong><br>
                                        Ave. Primero de Mayo 9<br>
                                        Fracc. Industrial Tlalnepantla<br>
                                        C.P. 54030<br>
                                        Estado de México<br>
                                    </address>
                                </div>
                                <div class="col-sm-4">
                                    <address>
                                        <strong>Dirección Dos</strong><br>
                                        Ave. Primero de Mayo 9<br>
                                        Fracc. Industrial Tlalnepantla<br>
                                        C.P. 54030<br>
                                        Estado de México<br>
                                    </address>
                                </div>
                                 <div class="col-sm-4">
                                    <address>
                                        <strong>Dirección Tres</strong><br>
                                        Ave. Primero de Mayo 9<br>
                                        Fracc. Industrial Tlalnepantla<br>
                                        C.P. 54030<br>
                                        Estado de México<br>
                                    </address>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!--  end::form -->
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end::modal DETAIL ADDRESS-->
    
    <!-- begin::modal EDIT ADDRESS-->
    <div id="edit-address" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="">Edición de Direcciones del Cliente</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <!--  start card -->
                    <!-- begin::form-->
                    <form action="action">
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-2">
                                    <label class="ul-form__label" for="">No. de Cliente:</label><div class="input-right-icon">
                                    <input class="form-control" id="" type="text" placeholder="C-302" disabled/><span class="span-right-input-icon"><i class="ul-form__icon fa fa-user"></i></span>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="ul-form__label" for="">Nombre Completo:</label><div class="input-right-icon">
                                    <input class="form-control" id="" type="text" placeholder="Victor Andrés Fulanito de Tal Pérez" disabled/><span class="span-right-input-icon"><i class="ul-form__icon fa fa-user"></i></span>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="ul-form__label" for="">Teléfono(s):</label><div class="input-right-icon">
                                    <input class="form-control" id="" type="text" placeholder="771 123 45 45" disabled/><span class="span-right-input-icon"><i class="ul-form__icon fa fa-phone"></i></span>
                                    </div>
                                </div>
                            </div>
                            <!-- DIRECCIÓN PRINCIPAL-->
                            <div class="form-row">
                                <h4 class="text-info" style="margin-top: 10px;">Dirección Principal</h4>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-8">
                                    <label class="ul-form__label" for="">Calle y Número:</label><div class="input-right-icon">
                                    <input class="form-control" id="" type="text" placeholder=""/><span class="span-right-input-icon"><i class="ul-form__icon fa fa-map-marker-alt"></i></span>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="ul-form__label" for="">Colonia:</label><div class="input-right-icon">
                                    <input class="form-control" id="" type="text" placeholder=""/><span class="span-right-input-icon"><i class="ul-form__icon fa fa-map-marker-alt"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label class="ul-form__label" for="">Ciudad / Municipio:</label><div class="input-right-icon">
                                    <input class="form-control" id="" type="text" placeholder=""/><span class="span-right-input-icon"><i class="ul-form__icon fa fa-map-marker-alt"></i></span>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="ul-form__label" for="">Estado:</label>
                                    <div class="input-right-icon">
                                        <select class="form-control">
                                            <option>Seleccione un Estado</option>
                                            <option value="">Aguascalientes</option>
                                            <option value="">Hidalgo</option>
                                            <option value="">Zacatecas</option>
                                        </select>
                                        <span class="span-right-input-icon">
                                            <i class="ul-form__icon fa fa-map-marker-alt"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="ul-form__label" for="">Código Postal:</label><div class="input-right-icon">
                                    <input class="form-control" id="" type="text" placeholder=""/><span class="span-right-input-icon"><i class="ul-form__icon fa fa-map-marker-alt"></i></span>
                                    </div>
                                </div>
                            </div>
                            
                            <!--- DIRECCIÓN DOS--->
                            <div class="form-row">
                                <h4 class="text-info" style="margin-top: 10px;">Dirección Dos</h4>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-8">
                                    <label class="ul-form__label" for="">Calle y Número:</label><div class="input-right-icon">
                                    <input class="form-control" id="" type="text" placeholder=""/><span class="span-right-input-icon"><i class="ul-form__icon fa fa-map-marker-alt"></i></span>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="ul-form__label" for="">Colonia:</label><div class="input-right-icon">
                                    <input class="form-control" id="" type="text" placeholder=""/><span class="span-right-input-icon"><i class="ul-form__icon fa fa-map-marker-alt"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label class="ul-form__label" for="">Ciudad / Municipio:</label><div class="input-right-icon">
                                    <input class="form-control" id="" type="text" placeholder=""/><span class="span-right-input-icon"><i class="ul-form__icon fa fa-map-marker-alt"></i></span>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="ul-form__label" for="">Estado:</label>
                                    <div class="input-right-icon">
                                        <select class="form-control">
                                            <option>Seleccione un Estado</option>
                                            <option value="">Aguascalientes</option>
                                            <option value="">Hidalgo</option>
                                            <option value="">Zacatecas</option>
                                        </select>
                                        <span class="span-right-input-icon">
                                            <i class="ul-form__icon fa fa-map-marker-alt"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="ul-form__label" for="">Código Postal:</label><div class="input-right-icon">
                                    <input class="form-control" id="" type="text" placeholder=""/><span class="span-right-input-icon"><i class="ul-form__icon fa fa-map-marker-alt"></i></span>
                                    </div>
                                </div>
                            </div>
                            
                            <!--- DIRECCIÓN TRES--->
                            <div class="form-row">
                                <h4 class="text-info" style="margin-top: 10px;">Dirección Tres</h4>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-8">
                                    <label class="ul-form__label" for="">Calle y Número:</label><div class="input-right-icon">
                                    <input class="form-control" id="" type="text" placeholder=""/><span class="span-right-input-icon"><i class="ul-form__icon fa fa-map-marker-alt"></i></span>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="ul-form__label" for="">Colonia:</label><div class="input-right-icon">
                                    <input class="form-control" id="" type="text" placeholder=""/><span class="span-right-input-icon"><i class="ul-form__icon fa fa-map-marker-alt"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label class="ul-form__label" for="">Ciudad / Municipio:</label><div class="input-right-icon">
                                    <input class="form-control" id="" type="text" placeholder=""/><span class="span-right-input-icon"><i class="ul-form__icon fa fa-map-marker-alt"></i></span>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="ul-form__label" for="">Estado:</label>
                                    <div class="input-right-icon">
                                        <select class="form-control">
                                            <option>Seleccione un Estado</option>
                                            <option value="">Aguascalientes</option>
                                            <option value="">Hidalgo</option>
                                            <option value="">Zacatecas</option>
                                        </select>
                                        <span class="span-right-input-icon">
                                            <i class="ul-form__icon fa fa-map-marker-alt"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="ul-form__label" for="">Código Postal:</label><div class="input-right-icon">
                                    <input class="form-control" id="" type="text" placeholder=""/><span class="span-right-input-icon"><i class="ul-form__icon fa fa-map-marker-alt"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!--  end::form -->
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <button class="btn btn-success ml-2" type="button">Actualizar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end::modal EDIT ADDRESS-->
    </div>
@endsection
