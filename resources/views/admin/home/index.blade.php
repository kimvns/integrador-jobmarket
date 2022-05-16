@extends('adminlte::page')

@section('title', 'Home Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
    <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Últimas Atualizações</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Pesquisar">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                  <th>ID</th>
                  <th>Cliente</th>
                  <th>Data</th>
                  <th>Status</th>
                  <th>Problema</th>
                </tr>
                <tr>
                  <td>18</td>
                  <td>Manoel Jr.</td>
                  <td>04/12/2018</td>
                  <td><span class="label label-success">Concluído</span></td>
                  <td>Veículo trancado com as chaves dentro, foi realizado serviço de abertura.</td>
                </tr>
                <tr>
                  <td>13</td>
                  <td>Maradona</td>
                  <td>04/12/2018</td>
                  <td><span class="label label-warning">Pendente</span></td>
                  <td>Instalação de Guarda-Roupa.</td>
                </tr>
                <tr>
                  <td>02</td>
                  <td>Amanda</td>
                  <td>01/12/2018</td>
                  <td><span class="label label-success">Concluído</span></td>
                  <td>Instalação de janelas.</td>
                </tr>
                <tr>
                  <td>14</td>
                  <td>Evelyn</td>
                  <td>28/11/2018</td>
                  <td><span class="label label-danger">Cancelado</span></td>
                  <td>Problemas com fogão elétrico, não emite chamas.</td>
                </tr>
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
@stop