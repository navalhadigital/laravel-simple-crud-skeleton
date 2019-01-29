@extends('layout.layout')

@section('title', $title)

@section('content')

    <div class="container-fluid">

        <!-- Input Group -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Cadastrar Contato
                        </h2>
                    </div>
                    <div class="body demo-masked-input">
                        {!! Form::open(['method'=>'POST', 'route' => ['contatos.store'], 'autocomplete'=>'off']) !!}
                            <div class="row clearfix">
                                <div class="col-md-6">
                                        <b>Nome</b>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">person</i>
                                        </span>
                                        <div class="form-line">
                                            {!! Form::text('nome', null, ['class'=>'form-control', 'required' => 'required',  'placeholder' => 'Nome completo']) !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-md-6">
                                    <b>Email</b>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">mail</i>
                                        </span>
                                        <div class="form-line">
                                            {!! Form::text('email', null, ['class'=>'form-control email', 'required' => 'required',  'placeholder' => 'Ex: contato@sobracom.com.br']) !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-md-6">
                                    <b>Telefone</b>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">phone</i>
                                        </span>
                                        <div class="form-line">
                                            {!! Form::text('telefone', null, ['class'=>'form-control phone-number-br', 'required' => 'required',  'placeholder' => 'Ex: (51) 99999-9999']) !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-rounded w-md waves-effect waves-light">Cadastrar</button>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Input Group -->

    </div>

    @stop

    @section('scripts')
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

        @if(Session::has('errors'))
        <script>
            $(window).ready(function(){
                Command: toastr["error"]("{{ Session::get('errors')->first() }}")
            });
        </script>
        @endif
    
    {{ Html::script('assets/admin/js/pages/forms/advanced-form-elements.js') }}
            
    {{ Html::script('assets/admin/js/pages/index.js') }}
    @stop
