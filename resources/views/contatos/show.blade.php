@extends('layout.layout')

@section('title', 'Contatos')

@section('content')

<div class="container-fluid">
        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Gerenciar Contatos
                        </h2>
                    </div>
                    <div class="body">
                        <!-- Botão para cadastrar -->
                         <a href="{{route('contatos.create')}}">
                            <button type="button" class="btn btn-info waves-effect pull-Left">
                                Cadastrar
                            </button>
                        </a>
                        <br><br>
                        <div class="table-responsive">
                            <table id="datatable" class="table table-bordered table-striped table-hover dataTable">
                                @if($contatos)
                                    <thead>
                                        <tr>
                                            <th>Nome</th>
                                            <th>Email</th>
                                            <th>Telefone</th>
                                            <th>Data Cadastro</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($contatos as $contato)
                                            <tr>
                                                <td>{{ $contato->nome }}</td>
                                                <td>{{ $contato->email }}</td>
                                                <td>{{ $contato->telefone }}</td>
                                                <td>{{ $contato->created_at->format('d/m/Y') }}</td>
                                                <td class="text-center">
                                                    <a class="btn btn-primary btn-sm" href="{{ route('contatos.edit', $contato->id) }}">
                                                        <i class="material-icons md-18">border_color</i>
                                                    </a>
                                                    <a class="btn btn-primary btn-sm" href="{{ route('contatos.destroy', $contato->id) }}" id="destroy" >
                                                        <i class="material-icons md-18">delete</i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                @else
                                    Não há contatos cadastrados
                                @endif
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Basic Examples -->
    </div>

@stop

@section('scripts')

    <script type="text/javascript">
        $(document).ready(function(){
            $("a#destroy").click(function(e){
                e.preventDefault();
                
                url = this.href;
                attr = $(this).parent().parent();
                swal({
                    title: 'Deletar?',
                    text: "Você deseja mesmo excluir este contato?",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Sim',
                    cancelButtonText: 'Não'
                }).then((result) => {
                    if (result.value) {
                        $.ajax({
                            data: {
                            _method: 'DELETE'
                            },
                            url: url,
                            type: 'POST',
                            dataType: 'json',
                            beforeSend: function()
                            {
                                swal({
                                    showConfirmButton: false,
                                    allowOutsideClick: false,
                                    type: "info",
                                    title: "Processando",
                                    text: "Registro sendo deletado"
                                })
                            },
                            success: function(response)
                            {
                                swal({
                                    type: "success",
                                    title: "Sucesso",
                                    text: response.message
                                })
                                .then(function (result) {
                                    attr.remove();
                                })
                            }
                        });
                    }
                });
            });
        });
    </script>

    <script>
        $(document).ready(function () {
            $('#datatable').dataTable({
                'language': {
                    'url': '{{asset('assets/plugins/datatables/json/Portuguese-Brasil.json')}}'
                }
            }); 
        });
        TableManageButtons.init();
    </script>

    @if(Session::has('success'))
    <script>
        
        $(window).ready(function(){
            Command: toastr["success"]("{{Session::get('success')}}")
        });

    </script>
    @endif

    @if(Session::has('error'))
    <script>
        
        $(window).ready(function(){
            Command: toastr["error"]("{{Session::get('error')}}")
        });
    </script>
    @endif

    <!-- DataTables -->   
    {{ Html::script('assets/plugins/datatables/jquery.dataTables.min.js') }}
    {{ Html::script('assets/plugins/datatables/dataTables.bootstrap.js') }}

    {{ Html::script('assets/plugins/datatables/dataTables.buttons.min.js') }}
    {{ Html::script('assets/plugins/datatables/buttons.bootstrap.min.js') }}
    {{ Html::script('assets/plugins/datatables/jszip.min.js') }}
    {{ Html::script('assets/plugins/datatables/pdfmake.min.js') }}
    {{ Html::script('assets/plugins/datatables/vfs_fonts.js') }}
    {{ Html::script('assets/plugins/datatables/buttons.html5.min.js') }}
    {{ Html::script('assets/plugins/datatables/buttons.print.min.js') }}
    {{ Html::script('assets/plugins/datatables/dataTables.fixedHeader.min.js') }}
    {{ Html::script('assets/plugins/datatables/dataTables.keyTable.min.js') }}
    {{ Html::script('assets/plugins/datatables/dataTables.responsive.min.js') }}
    {{ Html::script('assets/plugins/datatables/responsive.bootstrap.min.js') }}
    {{ Html::script('assets/plugins/datatables/dataTables.scroller.min.js') }}        
    {{ Html::script('assets/plugins/datatables/dataTables.colVis.js') }}
    {{ Html::script('assets/plugins/datatables/dataTables.fixedColumns.min.js') }}

@stop
