@extends('layouts.app')

@section('content')
 <!-- ============ Body content start ============= -->
 <div class="main-content">
    <div class="breadcrumb">
        <h1>Directorio de Remitentes</h1>
        <ul>
            <li><a href="">Detalle</a></li>
            <li>Notas GLS</li>
        </ul>
    </div>
    <div class="separator-breadcrumb border-top"></div><!--- LINEA DE DIVISIÓN-->
    <section class="contact-list">
        <div class="row">
            <div class="col-md-12 mb-4">
                <div class="card text-left">
                    <div class="card-header text-right bg-transparent">
                        <button class="btn btn-success btn-md m-1" type="button" data-toggle="modal" data-target="#add-sender"><i class="fa fa-user-check text-white mr-2"></i> Agregar Remitente</button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive table-striped">
                            <table class="display table" id="ul-contact-list" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Identificador</th>
                                        <th>Nombre</th>
                                        <th>Teléfono</th>
                                        <th>Dirección</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="#"><i class="i-Home1"></i> Teotihuacan</a></td>
                                        <td>Victor Badillo Fulanito de Tal</td>
                                        <td>442 123 22 22</td>
                                        <td>Avenida Primero de Mayo Número 9, Fraccionamiento Industrial Tlalnepantla</td>
                                        <td>
                                            <!-- BOTÓN MODAL DETALLE--->
                                            <button class="btn btn-info btn-md m-1" type="button" data-toggle="modal" data-target="#detail-sender" title="Detalles"><i class="fa fa-search-plus text-white"></i></button>

                                            <!-- BOTÓN MODAL EDITAR--->
                                            <button class="btn btn-warning btn-md m-1" type="button" data-toggle="modal" data-target="#edit-sender" title="Editar"><i class="fa fa-pencil-alt text-white"></i></button>

                                            <!-- BOTÓN MODAL ELIMINAR-->
                                            <button class="btn btn-danger btn-md m-1" type="button" data-toggle="modal" data-target="#delete-sender" title="Eliminar"><i class="fa fa-trash text-white"></i></button>
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

     <!-- MODALS SENDER--->
    <!-- begin::modal ADD SENDER-->
    <div id="add-sender" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="">Alta de Remitentes</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <!--  start card -->
                    <!-- begin::form-->
                    <form action="action">
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label class="ul-form__label" for="">Identificador:</label><div class="input-right-icon">
                                    <input class="form-control" id="" type="text" placeholder="Ingrese el nombre identificador" /><span class="span-right-input-icon"><i class="ul-form__icon fa fa-home"></i></span>
                                    </div>
                                </div>
                                <div class="form-group col-md-8">
                                    <label class="ul-form__label" for="">Nombre del Remitente:</label><div class="input-right-icon">
                                    <input class="form-control" id="" type="text" placeholder="Ingrese el nombre del responsable" /><span class="span-right-input-icon"><i class="ul-form__icon fa fa-user"></i></span>
                                    </div>
                                </div>
                            </div>
                            <!---
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label class="ul-form__label" for="">Identificador de Propiedad:</label>
                                    <div class="input-right-icon">
                                        <select class="form-control">
                                            <option>Seleccione una propiedad</option>
                                            <option value="">{property-identifyer}</option>
                                            <option value="">option 2</option>
                                            <option value="">option 3</option>
                                        </select>
                                        <span class="span-right-input-icon">
                                            <i class="ul-form__icon fas fa-home"></i>
                                        </span>
                                        <small class="ul-form__text form-text" id="">
                                        Seleccione la propiedad a la que se asignará el nuevo Habitante
                                    </small>
                                    </div>
                                </div>
                            </div>-->
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label class="ul-form__label" for="">Teléfono(s) de Contacto:</label><div class="input-right-icon">
                                    <input class="form-control" id="" type="text" placeholder="Ingrese los números móviles" /><span class="span-right-input-icon"><i class="ul-form__icon fa fa-mobile-alt"></i></span>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="ul-form__label" for="">Dirección:</label><div class="input-right-icon">
                                    <input class="form-control" id="" type="text" placeholder="Ingrese la calle y número" /><span class="span-right-input-icon"><i class="ul-form__icon fa fa-map-marked-alt"></i></span>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="ul-form__label" for="">Colonia:</label><div class="input-right-icon">
                                    <input class="form-control" id="" type="text" placeholder="Ingrese la colonia" /><span class="span-right-input-icon"><i class="ul-form__icon fa fa-map-marked-alt"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label class="ul-form__label" for="">Ciudad / Municipio:</label><div class="input-right-icon">
                                    <input class="form-control" id="" type="text" placeholder="Ingrese la Ciudad" /><span class="span-right-input-icon"><i class="ul-form__icon fa fa-map-marked-alt"></i></span>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="ul-form__label" for="">Estado:</label><div class="input-right-icon">
                                    <input class="form-control" id="" type="text" placeholder="Ingrese la calle y número" /><span class="span-right-input-icon"><i class="ul-form__icon fa fa-map-marked-alt"></i></span>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="ul-form__label" for="">Código Postal:</label><div class="input-right-icon">
                                    <input class="form-control" id="" type="text" placeholder="Ingrese la colonia" /><span class="span-right-input-icon"><i class="ul-form__icon fa fa-map-marked-alt"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!--  end::form -->
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <button class="btn btn-success ml-2" type="button">Guardar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end::modal ADD SENDER-->
    <!-- begin::modal DETAIL SENDER-->
    <div id="detail-sender" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="">Detalle del Remitente</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <!--  start card -->
                    <!-- begin::form-->
                    <form action="action">
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label class="ul-form__label" for="">Identificador:</label><div class="input-right-icon">
                                    <input class="form-control" id="" type="text" placeholder="Ingrese el nombre identificador" disabled/><span class="span-right-input-icon"><i class="ul-form__icon fa fa-home"></i></span>
                                    </div>
                                </div>
                                <div class="form-group col-md-8">
                                    <label class="ul-form__label" for="">Nombre del Remitente:</label><div class="input-right-icon">
                                    <input class="form-control" id="" type="text" placeholder="Ingrese el nombre del responsable" disabled/><span class="span-right-input-icon"><i class="ul-form__icon fa fa-user"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label class="ul-form__label" for="">Teléfono(s) de Contacto:</label><div class="input-right-icon">
                                    <input class="form-control" id="" type="text" placeholder="Ingrese los números móviles" disabled/><span class="span-right-input-icon"><i class="ul-form__icon fa fa-mobile-alt"></i></span>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="ul-form__label" for="">Dirección:</label><div class="input-right-icon">
                                    <input class="form-control" id="" type="text" placeholder="Ingrese la calle y número" disabled/><span class="span-right-input-icon"><i class="ul-form__icon fa fa-map-marked-alt"></i></span>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="ul-form__label" for="">Colonia:</label><div class="input-right-icon">
                                    <input class="form-control" id="" type="text" placeholder="Ingrese la colonia" disabled/><span class="span-right-input-icon"><i class="ul-form__icon fa fa-map-marked-alt"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label class="ul-form__label" for="">Ciudad / Municipio:</label><div class="input-right-icon">
                                    <input class="form-control" id="" type="text" placeholder="Ingrese la Ciudad" disabled/><span class="span-right-input-icon"><i class="ul-form__icon fa fa-map-marked-alt"></i></span>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="ul-form__label" for="">Estado:</label><div class="input-right-icon">
                                    <input class="form-control" id="" type="text" placeholder="Ingrese la calle y número" disabled/><span class="span-right-input-icon"><i class="ul-form__icon fa fa-map-marked-alt"></i></span>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="ul-form__label" for="">Código Postal:</label><div class="input-right-icon">
                                    <input class="form-control" id="" type="text" placeholder="Ingrese la colonia" disabled/><span class="span-right-input-icon"><i class="ul-form__icon fa fa-map-marked-alt"></i></span>
                                    </div>
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
    <!-- end::modal DETAIL SENDER-->
    <!-- begin::modal EDIT SENDER-->
    <div id="edit-sender" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="">Edición del Remitente</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <!--  start card -->
                    <!-- begin::form-->
                    <form action="action">
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label class="ul-form__label" for="">Identificador:</label><div class="input-right-icon">
                                    <input class="form-control" id="" type="text" placeholder="Ingrese el nombre identificador" disabled/><span class="span-right-input-icon"><i class="ul-form__icon fa fa-home"></i></span>
                                    </div>
                                </div>
                                <div class="form-group col-md-8">
                                    <label class="ul-form__label" for="">Nombre del Remitente:</label><div class="input-right-icon">
                                    <input class="form-control" id="" type="text" placeholder="Ingrese el nombre del responsable"/><span class="span-right-input-icon"><i class="ul-form__icon fa fa-user"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label class="ul-form__label" for="">Teléfono(s) de Contacto:</label><div class="input-right-icon">
                                    <input class="form-control" id="" type="text" placeholder="Ingrese los números móviles"/><span class="span-right-input-icon"><i class="ul-form__icon fa fa-mobile-alt"></i></span>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="ul-form__label" for="">Dirección:</label><div class="input-right-icon">
                                    <input class="form-control" id="" type="text" placeholder="Ingrese la calle y número"/><span class="span-right-input-icon"><i class="ul-form__icon fa fa-map-marked-alt"></i></span>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="ul-form__label" for="">Colonia:</label><div class="input-right-icon">
                                    <input class="form-control" id="" type="text" placeholder="Ingrese la colonia"/><span class="span-right-input-icon"><i class="ul-form__icon fa fa-map-marked-alt"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label class="ul-form__label" for="">Ciudad / Municipio:</label><div class="input-right-icon">
                                    <input class="form-control" id="" type="text" placeholder="Ingrese la Ciudad"/><span class="span-right-input-icon"><i class="ul-form__icon fa fa-map-marked-alt"></i></span>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="ul-form__label" for="">Estado:</label><div class="input-right-icon">
                                    <input class="form-control" id="" type="text" placeholder="Ingrese la calle y número"/><span class="span-right-input-icon"><i class="ul-form__icon fa fa-map-marked-alt"></i></span>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="ul-form__label" for="">Código Postal:</label><div class="input-right-icon">
                                    <input class="form-control" id="" type="text" placeholder="Ingrese la colonia"/><span class="span-right-input-icon"><i class="ul-form__icon fa fa-map-marked-alt"></i></span>
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
    <!-- end::modal EDIT SENDER-->
    <!--  begin::modal DELETE SENDER -->
    <div class="modal fade" id="delete-sender" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <h2>¿Está seguro que desea Eliminar al Remitente <strong>Test</strong>?</h2>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cerrar</button>
                    <button class="btn btn-danger ml-2" type="button">Eliminar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end::modal DELETE SENDER-->
    <!--- TERMINA MODALS SENDER--->
</div>
@endsection
