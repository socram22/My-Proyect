@extends('layouts.base')
<header id="header" class="transparent-barra">
    <div class="container">

        <div class="navbar-header">
            <!-- Logo -->
            <div class="navbar-brand">
                <h3 class="black-text"> Empresa</h3>
            </div>
            <!-- /Logo -->

            <!-- Mobile toggle -->
            <button class="navbar-toggle">
                <span></span>
            </button>
            <!-- /Mobile toggle -->
        </div>

        <!-- Navigation -->
        <nav id="nav" >
            <ul class="main-menu nav navbar-nav navbar-right">
                <li><a href="/empresa">Home</a></li>
                <li class="active"><a href="#">Ofertas de trabajo</a></li>
                <li><a href="#">Notificaciones</a></li>
                <li><a href="#">Historial de ofertas de Trabajo</a></li>
            </ul>
        </nav>
        <!-- /Navigation -->

    </div>
</header>
<!-- /Header -->
<!-- Home -->
<div id="about" class="section">

    <!-- container -->
    <div class="container">

        <!-- row -->
        <div class="row">

            <div class="col-md-12">
                <div class="section-header">
{{--tabla--}}
<div class="container">
    <section class="tabla">
        <div class="panel panel-default">
            <div class="panel-body">
                <table class="table  table-bordered" id="tabla">
                    <thead>
                    <th>Empresa</th>
                    <th>Titulo</th>
                    <th>Descripcion</th>
                    <th>Cantidad de Personas</th>
                    <th>Limite de Aplicantes</th>
                    <th>Opciones</th>
                    </thead>
                    <tbody>

                    @foreach($posicion as $i => $a)
                        <tr id="item_{{$a->id}}">
                            <td id="id_{{$a->id}}">{{$a->empresa}}</td>
                            <td id="id_{{$a->id}}">{{$a->titulo}}</td>
                            <td id="id_{{$a->id}}">{{$a->descripcion}}</td>
                            <td id="id_{{$a->id}}">{{$a->cantidad_depersonas}}</td>
                            <td id="id_{{$a->id}}">{{$a->limite_de_aplicantes}}</td>
                            <td>
                                <a href="#" onclick="editar({{$a}},'{{$i}}')" class="boton btn"><i class="fa fa-edit"></i>  Editar</a>

                                <button onclick="eliminar({{$a->id}},'{{$a->posicion}}')" class="boton btn"><i class="fa fa-eraser"></i>  Eliminar</button>

                                <button onclick="info({{$a}},'{{$i}}')" class="boton btn"><i class="fa fa-info"></i>  Información</button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>

                </table>
            </div>
            <div class="panel-footer">

                <a type="button" href="#" data-toggle="modal" id="addModal"
                   data-target="#modal" class="btnModal btn btn-primary btn-sm radio-inline">
                    <i class="glyphicon glyphicon-plus "> </i> Adicionar
                </a>
            </div>
        </div>
    </section>

</div>
                </div>
            </div>
        </div>
    </div>
</div>



<footer id="footer" class="section">

    <!-- container -->
    <div class="container">

        <!-- row -->
        <div class="row">

            <!-- footer logo -->
            <div class="col-md-6">
                <div class="footer-logo">
                    <h3 class="white-text"> Empresa</h3>
                </div>
            </div>
            <!-- footer logo -->

            <!-- footer nav -->
            <div class="col-md-6">
                <ul class="footer-nav">
                    <li><a href="/empresa">Home</a></li>
                    <li><a href="#">Back to Top</a></li>
                </ul>
            </div>
            <!-- /footer nav -->

        </div>
        <!-- /row -->

        <!-- row -->
        <div id="bottom-footer" class="row">

            <!-- copyright -->
            <div class="footer-copyright">
                <h4>&copy; Copyright 2019. All Rights Reserved. | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i></h4>
            </div>

            <!-- /copyright -->

        </div>
        <!-- row -->

    </div>
    <!-- /container -->

</footer>



{{--add modal--}}
<div class="modal fade " id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Posicion</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="formulario-tab" data-toggle="tab" href="#formulario" role="tab"
                           aria-controls="contact" aria-selected="true">Adicionar Posicion</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="formulario" role="tabpanel" aria-labelledby="home-tab">
                        <form class="form-horizontal form">

                            <br>
                            <div class="form-group row">
                                <label for="0" class="col-sm-6 col-form-label">Empresa</label>
                                <div class="col-sm-5">
                                    <input type="text" id="0" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="1" class="col-sm-6 col-form-label">Titulo</label>
                                <div class="col-sm-5">
                                    <input type="text" id="1" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="2" class="col-sm-6 col-form-label">Descripcion</label>
                                <div class="col-sm-5">
                                    <textarea id="2" class="form-control" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="3" class="col-sm-6 col-form-label">Cantidad de Personas</label>
                                <div class="col-sm-5">
                                    <input type="number" id="3" class="form-control">
                                </div>
                            </div>

                            <div class=" form-group row">
                                <label for="4" class="col-sm-6 col-form-label">Limite de Aplicantes</label>
                                <div class="col-sm-5">
                                    <input type="number" id="4" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="5" class="col-sm-6 col-form-label">Activa</label>
                                <div class="col-sm-5">
                                    <input type="checkbox" id="5" class="form-control">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="add" data-dismiss="modal">Guardar</button>
            </div>
        </div>
    </div>
</div>

{{--editar--}}

<div class="modal fade " id="editarModal" tabindex="-1" role="dialog"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Editar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="formulario-tab" data-toggle="tab" href="#editformulario" role="tab"
                           aria-controls="contact" aria-selected="true">Posicion</a>
                    </li>

                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="editformulario" role="tabpanel" aria-labelledby="home-tab">
                        <form class="form-horizontal form">
                            <input type="hidden" id="id" >
                            <br>
                            <div class="form-group row">
                                <label for="0" class="col-sm-6 col-form-label">Empresa</label>
                                <div class="col-sm-5">
                                    <input type="text" id="edit0" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="1" class="col-sm-6 col-form-label">Titulo</label>
                                <div class="col-sm-5">
                                    <input type="text" id="edit1" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="2" class="col-sm-6 col-form-label">Descripcion</label>
                                <div class="col-sm-5">
                                    <textarea id="edit2" class="form-control" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="3" class="col-sm-6 col-form-label">Cantidad de Personas</label>
                                <div class="col-sm-5">
                                    <input type="number" id="edit3" class="form-control">
                                </div>
                            </div>

                            <div class=" form-group row">
                                <label for="4" class="col-sm-6 col-form-label">Limite de Aplicantes</label>
                                <div class="col-sm-5">
                                    <input type="number" id="edit4" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="5" class="col-sm-6 col-form-label">Activa</label>
                                <div class="col-sm-5">
                                    <input type="checkbox" id="edit5" class="form-control">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-success" id="edit" data-dismiss="modal">editar</button>
            </div>
        </div>
    </div>
</div>


{{--delete--}}

<div class="modal fade " id="deleteModal" tabindex="-1" role="dialog"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Eliminar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" id="id_delete" >
                <p> Desea eliminar esta posicion <span id="posdelete"></span>  </p>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-success" id="delete" data-dismiss="modal">eliminar</button>
            </div>
        </div>
    </div>
</div>
{{----------------------------------------------------------------------------------------}}

<div class="modal fade " id="infoModal" tabindex="-1" role="dialog"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Información</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="formulario-tab" data-toggle="tab" href="#infoformulario" role="tab"
                           aria-controls="contact" aria-selected="true">Condición material</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="infoformulario" role="tabpanel" aria-labelledby="home-tab">
                        <form class="form-horizontal form">
                            <input type="hidden" id="id" >
                            <br>
                            <div class="form-group row">
                                <label for="0" class="col-sm-6 col-form-label">Empresa</label>
                                <div class="col-sm-5">
                                    <input type="text" id="info0" class="form-control" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="1" class="col-sm-6 col-form-label">Titulo</label>
                                <div class="col-sm-5">
                                    <input type="text" id="info1" class="form-control" disabled>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="2" class="col-sm-6 col-form-label">Descripcion</label>
                                <div class="col-sm-5">
                                    <textarea  id="info2" class="form-control" disabled cols="30" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="3" class="col-sm-6 col-form-label">Cantidad de Personas</label>
                                <div class="col-sm-5">
                                    <input type="number" id="info3" class="form-control" disabled>
                                </div>
                            </div>

                            <div class=" form-group row">
                                <label for="4" class="col-sm-6 col-form-label">Limite de Aplicantes</label>
                                <div class="col-sm-5">
                                    <input type="number" id="info4" class="form-control" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="5" class="col-sm-6 col-form-label">Activa</label>
                                <div class="col-sm-5">
                                    <input type="checkbox" id="info5" class="form-control" disabled>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

            </div>
        </div>
    </div>
</div>

{{-----------------------------------------------------------------------------------------------}}
<script type="text/javascript">
    var tabla = $('#tabla');
    var tablaDT;

    var editar;
    var eliminar;
    var elim;
    var info;
    $(document).ready(function () {
        tablaDT = tabla.DataTable();


//          $.ajaxSetup({
//
//              headers: {
//
//                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//
//              }
//
//          });


        // add

        $('#add').click(function () {

            var empresa = $('#0').val();
            var titulo = $('#1').val();
            var descripcion = $('#2').val();
            var cantidad_depersonas = $('#3').val();
            var limite_de_aplicantes = $('#4').val();
            var activa = $('#5').val();

            $.ajax({
                type: 'POST',
                url: '/addPos',
                data: {
                    _token: '{{ csrf_token() }}',
                    empresa: empresa,
                    titulo: titulo,
                    descripcion: descripcion,
                    cantidad_depersonas: cantidad_depersonas,
                    limite_de_aplicantes: limite_de_aplicantes,
                    activa: activa,
                },

// modificar esto
                success: function (data) {
                    var id_ano = data.ano.id;
                    var ano = data.ano.ano;


                    tablaDT.destroy();
                    tabla.append('<tr id="item_' + id_ano + '">' +

                        ' <td id="id_' + ano + '" >' + ano + '</td>' +
                        ' <td >' +
                        '<button onclick="editar(' + id_ano + ')" class="boton btn"><i class="fa fa-edit"></i>  Editar</button> ' +




                        '<button onclick="eliminar(' + id_ano + ',' + ano + ')" class="boton btn"><i class="fa fa-eraser"></i>  Eliminar</button>' +

                        '<button onclick="info(' + data.ano + ',' + ano + ')" class="boton btn"><i class="fa fa-info"></i>  Información</button>' +
                        '</td>' +
                        //                          drop +
                        '</tr>');

                    tablaDT = tabla.DataTable();
                    var defaultColor = $('#item_'+id_ano).css('color');
                    $('#item_'+id_ano)
                        .css('opacity', '0.20').css('color', 'green').animate({opacity: 1}, 500).animate({opacity: 0.20}, 500).animate({opacity: 1}, 500)
                        .animate({opacity: 0.20}, 500).animate({opacity: 1}, 500, function () {
                        $('#item_'+id_ano).css('color', defaultColor);
                    });
//

                }, error: function () {
                    alert('error')
                }
            });
        });
// hasta aqui


        editar=function (a,i) {
            $("#id").val(a.id);
            $('#edit0').val(a.empresa);
            $('#edit1').val({!! $posicion !!}[i].titulo);
            $('#edit2').val({!! $posicion !!}[i].descripcion);
            $('#edit3').val({!! $posicion !!}[i].cantidad_depersonas);
            $('#edit4').val({!! $posicion !!}[i].limite_de_aplicantes);
            $('#edit5').val({!! $posicion !!}[i].activa);
            $("#editarModal").modal('show');
        }


        $('#editCM').click(function () {
            var id=$('#id').val();
            var empresa = $('#edit0').val();
            var titulo = $('#edit1').val();
            var descripcion = $('#edit2').val();
            var cantidad_depersonas = $('#edit3').val();
            var limite_de_aplicantes = $('#edit4').val();
            var activa = $('#edit5').val();

            $.ajax({
                type: 'POST',
                url: '/editPos',
                data: {
                    _token: '{{ csrf_token() }}',
                    id:id,
                    empresa: empresa,
                    titulo: titulo,
                    descripcion: descripcion,
                    cantidad_depersonas: cantidad_depersonas,
                    limite_de_aplicantes: limite_de_aplicantes,
                    activa: activa,

                },

// modificar esto

                success: function (data) {
                    var id_ano = data.ano.id;
                    var ano = data.ano.ano;



// a
                    tablaDT.destroy();
                    $('#item_' + id_ano ).replaceWith(
                        "<tr id='item_"+id_ano+"'>"+
                        ' <td >' + ano + '</td>' +
                        ' <td >' +
                        '<button onclick="editar(' + id_ano + ')" class="boton btn"><i class="fa fa-edit"></i>  Editar</button> ' +




                        '<button onclick="eliminar(' + id_ano + ',' + ano + ')" class="boton btn"><i class="fa fa-eraser"></i>  Eliminar</button>' +

                        '<button onclick="info()" class="boton btn"><i class="fa fa-info"></i>  Información</button>' +
                        '</td>' +

                        '</tr>');

                    tablaDT = tabla.DataTable();
                    var defaultColor = $('#item_'+id_ano).css('color');
                    $('#item_'+id_ano)
                        .css('opacity', '0.20').css('color', 'orange').animate({opacity: 1}, 500).animate({opacity: 0.20}, 500).animate({opacity: 1}, 500)
                        .animate({opacity: 0.20}, 500).animate({opacity: 1}, 500, function () {
                        $('#item_'+id_ano).css('color', defaultColor);
                    });
//

                }, error: function () {
                    alert('error')
                }
            });
        });
        eliminar=function (id,ano) {
            $("#id_delete").val(id);
            $("#anodelete").html(ano)
            $("#deleteModal").modal('show')
        }

// hasta aqui

        $('#delete').click(function () {
            var id=$('#id_delete').val();


            $.ajax({
                type: 'POST',
                url: '/deletePos',
                data: {
                    _token: '{{ csrf_token() }}',
                    id:id,

                },

                success: function (data) {
                    var id_ano = data.id;




                    var defaultColor = $('#item_'+id_ano).css('color');
                    $('#item_'+id_ano)
                        .css('opacity', '0.20').css('color', 'red').animate({opacity: 1}, 500).animate({opacity: 0.20}, 500).animate({opacity: 1}, 500)
                        .animate({opacity: 0.20}, 500).animate({opacity: 1}, 500, function () {
                        $('#item_'+id_ano).css('color', defaultColor);
                    });

                    elim=    function () {
                        tablaDT.destroy();

                        $('#item_' + id_ano ).remove();

                        tablaDT = tabla.DataTable();
                    };
                    setTimeout(elim,3000);

//

                }, error: function () {
                    alert('error')
                }
            });
        });
        info=function (a,i) {
            $('#info0').val(a.empresa)
            $('#info1').val({!! $posicion !!}[i].titulo)
            $('#info2').val({!! $posicion !!}[i].descripcion)
            $('#info3').val({!! $posicion !!}[i].cantidad_depersonas)
            $('#info4').val({!! $posicion !!}[i].limite_de_aplicantes)
            $('#info5').val({!! $posicion !!}[i].activa)
            {{--alert({!! $pre !!}[i].cond_legal)--}}
            $('#infoModal').modal('show');
        }
    });
</script>
