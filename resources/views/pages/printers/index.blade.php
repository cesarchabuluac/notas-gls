@extends('layouts.app')

@section('content')
  <!-- ============ Body content start ============= -->
  <div class="main-content">
    <div class="breadcrumb">
        <h1>Zona de Impresión</h1>
        <ul>
            <li><a href="">Detalle</a></li>
            <li>Notas GLS</li>
        </ul>
    </div>
    <div class="separator-breadcrumb border-top"></div><!--- LINEA DE DIVISIÓN-->
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card mb-5">
                <div class="card-body">
                    <!--- DEFINE REMITENTE-->
                    <div class="row mt-3">
                        <div class="form-group col-6">
                        <label class="ul-form__label" for="">Remitente:</label>
                            <div class="input-right-icon">
                                <select class="form-control">
                                    <option>Seleccione un Remitente</option>
                                    <option value="">Teotihuacan</option>
                                    <option value="">Paricutin</option>
                                    <option value="">Querétaro</option>
                                </select>
                                <span class="span-right-input-icon">
                                    <i class="ul-form__icon fa fa-user-check"></i>
                                </span>
                            </div>
                        </div>
                        <div class="form-group col-6">
                            <label class="ul-form__label" for="">Nombre del Remitente</label>
                            <input class="form-control" type="text" placeholder="Victor Badillo Fulanito de Tal" disabled/>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-3">
                            <label>Dirección</label>
                            <input class="form-control" type="text" placeholder="Avenida Primero de Mayo Número Nueve" disabled/>
                        </div>
                        <div class="col-3">
                            <label>Colonia</label>
                            <input class="form-control" type="text" placeholder="Fraccionamiento Industrial Tlalnepantla" disabled/>
                        </div>
                        <div class="col-2">
                            <label>Ciudad / Municipio</label>
                            <input class="form-control" type="text" placeholder="San José del Cabo" disabled/>
                        </div>
                        <div class="col-2">
                            <label>Estado</label>
                            <input class="form-control" type="text" placeholder="Veracruz de Ignacio de la Llave" disabled/>
                        </div>
                        <div class="col-2">
                            <label>Código Postal</label>
                            <input class="form-control" type="text" placeholder="99999" disabled/>
                        </div>
                    </div>
                    <div class="separator-breadcrumb border-top mt-4"></div>
                    
                    <!-- DEFINE RECEIVER--->
                    <div class="row mt-3">
                        <div class="form-group col-6">
                        <label class="ul-form__label" for="">Cliente:</label>
                            <div class="input-right-icon">
                                <select class="form-control">
                                    <option>Seleccione un Cliente</option>
                                    <option value="">Crear Cliente y Dirección Temporal</option>
                                    <option value="">Teotihuacan</option>
                                    <option value="">Paricutin</option>
                                    <option value="">Querétaro</option>
                                </select>
                                <span class="span-right-input-icon">
                                    <i class="ul-form__icon fa fa-plane"></i>
                                </span>
                            </div>
                        </div>
                        <div class="form-group col-6">
                            <label class="ul-form__label" for="">Nombre del Remitente</label>
                            <input class="form-control" type="text" placeholder="Victor Badillo Fulanito de Tal" disabled/>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-3">
                            <label>Dirección</label>
                            <input class="form-control" type="text" placeholder="Avenida Primero de Mayo Número Nueve" disabled/>
                        </div>
                        <div class="col-3">
                            <label>Colonia</label>
                            <input class="form-control" type="text" placeholder="Fraccionamiento Industrial Tlalnepantla" disabled/>
                        </div>
                        <div class="col-2">
                            <label>Ciudad / Municipio</label>
                            <input class="form-control" type="text" placeholder="San José del Cabo" disabled/>
                        </div>
                        <div class="col-2">
                            <label>Estado</label>
                            <input class="form-control" type="text" placeholder="Veracruz de Ignacio de la Llave" disabled/>
                        </div>
                        <div class="col-2">
                            <label>Código Postal</label>
                            <input class="form-control" type="text" placeholder="99999" disabled/>
                        </div>
                    </div>
                    
                    <div class="separator-breadcrumb border-top mt-4"></div>
                    
                    
                    <!--- DEFINE IMPRESORA Y BOTÓN-->
                    <div class="row mt-3">
                        <div class="form-group col-4">
                            <label class="ul-form__label" for="">Etiquetas a imprimir</label>
                            <input class="form-control" type="number" placeholder="99999" />
                        </div>
                        <div class="form-group col-4">
                        <label class="ul-form__label" for="">Impresora:</label>
                            <div class="input-right-icon">
                                <select class="form-control">
                                <option value="">Default to this user</option>
                                <option value="">Impresora 2 Bodega San Martín</option>
                                <option value="">Impresora 3 Bodega Paricutín</option>
                            </select>
                                <span class="span-right-input-icon">
                                    <i class="ul-form__icon fa fa-print"></i>
                                </span>
                            </div>
                        </div>
                        <div class="form-group col-4">
                            <label class="ul-form__label" for=""><i class="fa fa-print"></i></label>
                            <button class="btn btn-success btn-block"><i class="fa fa-print"></i> Imprimir</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <section class="contact-list">
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
                    <h2>¿Está seguro que desea Eliminar al Remitente <strong>TEST</strong>?</h2>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cerrar</button>
                    <button class="btn btn-danger ml-2" type="button">Eliminar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end::modal DELETE SENDER-->
</div>
@endsection