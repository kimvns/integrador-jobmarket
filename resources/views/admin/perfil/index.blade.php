@extends('adminlte::page')

@section('title', 'Financeiro')

@section('content_header')
    <h1>Perfil</h1>
    <ol class="breadcrumb">
    </li><a href="">Dashboard</a></li>        
        </li><a href="">Consulta</a></li>
    </ol>
@stop

@section('content')
   
<section class="content">

        <div class="row">
          <div class="col-md-3">
  
            <form action="">
            <div class="box box-primary">
              <div class="box-body box-profile">
                    <img class="profile-user-img img-responsive img-circle"  src="{{ url('storage/user/'.auth()->user()->image) }}" alt=" {{ auth()->User()->image}}">
              <h3 class="profile-username text-center">{{ auth()->User()->name }}</h3>
  
              </br>
  
                <ul class="list-group list-group-unbordered">
                  <li class="list-group-item">
                    <b>Responsável:</b> <a class="pull-right">{{ auth()->User()->name }}</a><br>
                    <b>Email:</b> <a class="pull-right">{{ auth()->User()->email }}</a>
                  </li>
                </ul>
  
                <a href="{{ url('/alterar') }}" class="btn btn-primary btn-block"><b>Alterar Informações</b></a>
              </div>
            </form>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
  
            <!-- About Me Box -->
            <!-- /.box -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="nav-tabs-custom">
              <ul class="nav nav-tabs">
                <li class="active"><a href="#activity" data-toggle="tab">Demais Informações</a></li>
                
                
              </ul>
              <div class="tab-content">
                <div class="active tab-pane" id="activity">
                  <!-- Post -->
                  <div class="post">
                    <div class="user-block">
                    </div>
                    <!-- /.user-block -->
                    <p>
                      Lorem ipsum represents a long-held tradition for designers,
                      typographers and the like. Some people hate it and argue for
                      its demise, but others ignore the hate as they create awesome
                      tools to help create filler text for everyone from bacon lovers
                      to Charlie Sheen fans.
                    </p>
                    

                  </div>
                  <!-- /.post -->
  
                  
                <!-- /.tab-pane -->
                <div class="tab-pane" id="timeline">
                  <!-- The timeline -->
                  <ul class="timeline timeline-inverse">
                    <!-- timeline time label -->
                    <li class="time-label">
                          
                    </li>
                    <!-- /.timeline-label -->
                    <!-- timeline item -->
                    <li>
                      <i class="fa fa-map-marker bg-red"></i>
  
                      <div class="timeline-item">
                        
  
                        <h3 class="timeline-header"><a href="#">Endereço</a></h3>
  
                        <div class="timeline-body">
                          Rua das Paineiras, S/N, Bairro São Mateus - Araçuaí-MG - 39600-000
                        </div>
                        
                    
                </div>
                <!-- /.tab-pane -->                
              <!-- /.tab-content -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
  </section> 
@stop