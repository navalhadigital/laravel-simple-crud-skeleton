@extends('layout.layout')

@section('title', $title)

@section('content')

<div class="container-fluid">
        <div class="block-header">
            <h2>DASHBOARD</h2>
        </div>

        <!-- Widgets -->
        <div class="row clearfix">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-cyan hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">people</i>
                    </div>
                    <div class="content">
                        <div class="text">Contatos</div>                        
                        <div class="number count-to" data-from="0" data-to="{{ $contatos }}" data-speed="1000" data-fresh-interval="20"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Widgets -->
        @if(!$contatosList->isEmpty())
            <div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>Últimos Contatos</h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover dashboard-task-infos">
                                    <thead>
                                        <tr>
                                            <th>Nome</th>
                                            <th>Email</th>
                                            <th>Telefone</th>
                                            <th>Criado em</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($contatosList as $contato)
                                            <tr>
                                                <td>{{ $contato->nome }}</td>
                                                <td>{{ $contato->email }}</td>
                                                <td>{{ $contato->telefone }}</td>
                                                <td>{{ $contato->created_at->format('d/m/Y') }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{ $contatosList->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>

@stop

@section('scripts')

    {{ Html::script('assets/plugins/jquery-countto/jquery.countTo.js') }}
    {{ Html::script('assets/js/pages/widgets/infobox/infobox-1.js') }}

@stop
