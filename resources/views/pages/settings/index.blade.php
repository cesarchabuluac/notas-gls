@extends('layouts.app')

@section('content')
 <!-- ============ Body content start ============= -->
 <div class="main-content">
    <div class="breadcrumb">
        <h1>Configuración de Página</h1>
        <ul>
            <li><a href="">Impresora</a></li>
            <li>Notas GLS</li>
        </ul>
    </div>
    <div class="separator-breadcrumb border-top"></div><!--- LINEA DE DIVISIÓN-->
    <div class="row">
        <div class="col-lg-6 col-md-12">
            <div class="card mb-5">
                <div class="card-body">
                    <div class="row mt-3">
                        <div class="col-6">
                            <label>Identificador</label>
                            <input class="form-control" type="text" placeholder="Nombre de la Impresora" />
                        </div>
                        <div class="col-6">
                            <label>Tamaño de Letra</label>
                            <input class="form-control" type="text" placeholder="Tamaño en Pixeles" />
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-6">
                            <label>Ancho de Etiqueta</label>
                            <input class="form-control" type="text" placeholder="Ancho en pulgadas" />
                        </div>
                        <div class="col-6">
                            <label>Alto de Etiqueta</label>
                            <input class="form-control" type="text" placeholder="Alto en Pulgadas" />
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-10">
                        </div>
                        <div class="col-2">
                            <button class="btn btn-primary btn-block">Agregar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <section class="contact-list">
        <div class="row">
            <div class="col-md-9 mb-4">
                <div class="card text-left">
                    <div class="card-header text-left bg-transparent">
                        <h3>Usuarios disponibles</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive table-striped">
                            <table class="display table" id="ul-contact-list" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Usuario</th>
                                        <th>Impresora Asignada</th>
                                        <th>Reasignar Impresora</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>admin</td>
                                        <td>Impresora 1 Bodega Querétaro</td>
                                        <td>
                                            <!-- BOTÓN MODAL EDITAR--->
                                            <button class="btn btn-warning btn-md m-1" type="button" data-toggle="modal" data-target="#edit-printer" title="Reasignar"><i class="fa fa-pencil-alt text-white"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>victor</td>
                                        <td>Impresora 2 Bodega San Martín</td>
                                        <td>
                                            <!-- BOTÓN MODAL EDITAR--->
                                            <button class="btn btn-warning btn-md m-1" type="button" data-toggle="modal" data-target="#edit-printer" title="Reasignar"><i class="fa fa-pencil-alt text-white"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>vicky</td>
                                        <td>Impresora 3 Bodega Paricutin</td>
                                        <td>
                                            <!-- BOTÓN MODAL EDITAR--->
                                            <button class="btn btn-warning btn-md m-1" type="button" data-toggle="modal" data-target="#edit-printer" title="Reasignar"><i class="fa fa-pencil-alt text-white"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>ruraga</td>
                                        <td>Impresora 3 Bodega Paricutin</td>
                                        <td>
                                            <!-- BOTÓN MODAL EDITAR--->
                                            <button class="btn btn-warning btn-md m-1" type="button" data-toggle="modal" data-target="#edit-printer" title="Reasignar"><i class="fa fa-pencil-alt text-white"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            
            
            <div class="col-md-3 mb-4">
                <div class="card text-left">
                    <div class="card-header text-right bg-transparent">
                    </div>
                    <div class="card-body">
                        <div class="table-responsive table-striped">
                            <table class="display table" id="ul-contact-list" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Identificador Impresora</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><i class="fa fa-print"></i> 1</td>
                                        <td>Impresora 1 Bodega Querétaro</td>
                                    </tr>
                                    <tr>
                                        <td><i class="fa fa-print"></i> 1</td>
                                        <td>Impresora 2 Bodega San Martín</td>
                                    </tr>
                                    <tr>
                                        <td><i class="fa fa-print"></i> 1</td>
                                        <td>Impresora 3 Bodega Paricutín</td>
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
    <!-- MODALS REASIGNAR PRINTER--->
    <!-- begin::modal EDIT ADDRESS-->
    <div id="edit-printer" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="">Reasignación de Impresora</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <!--  start card -->
                    <!-- begin::form-->
                    <form action="action">
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label class="ul-form__label" for="">Usuario:</label><div class="input-right-icon">
                                    <input class="form-control" id="" type="text" placeholder="admin" disabled/><span class="span-right-input-icon"><i class="ul-form__icon fa fa-user"></i></span>
                                    </div>
                                </div>
                                
                                <div class="form-group col-md-8">
                                    <label class="ul-form__label" for="">Impresora:</label>
                                    <div class="input-right-icon">
                                        <select class="form-control">
                                            <option>Seleccione una Impresora</option>
                                            <option value="">Impresora 1 Bodega Querétaro</option>
                                            <option value="">Impresora 2 Bodega San Martín</option>
                                            <option value="">Impresora 3 Bodega Paricutín</option>
                                        </select>
                                        <span class="span-right-input-icon">
                                            <i class="ul-form__icon fa fa-print"></i>
                                        </span>
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