@extends('layouts.master')
@section('content')

        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i>Home</li>
              <li><i class="fa fa-laptop"></i>Dashboard</li>
            </ol>
          </div>
        </div>



        <div class="row">
        @csrf
          <div class="col-lg-12 col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2><i class="fa fa-product-hunt" aria-hidden="true"></i><strong>Lista de usuários</strong></h2>
                <!--div class="panel-actions">
                  <a href="index.html#" class="btn-setting"><i class="fa fa-rotate-right"></i></a>
                  <a href="index.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
                  <a href="index.html#" class="btn-close"><i class="fa fa-times"></i></a>
                </div-->
              </div>
              <div class="panel-body">
                <table class="table bootstrap-datatable countries">
                  <thead>
                    <tr>
                      <th>Nome</th>
                      <th>E-mail</th>
                      <th>Departamento</th>
                      <th>Tipo</th>
                      <th>Ação</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($user as $users)
                   
                    <tr>
                      <td>{{$users->name}}</td>
                      <td>{{$users->email}}</td>
                      <td>{{$users->department}}</td>
                      @if($users->role_id==1)
                      <td>Admin</td>
                      @else
                      <td>Regular</td>
                      @endif
                      <td>
                      <a href="{{url("/users/$users->id/edit")}}">
                            <button class="btn btn-primary">Editar</button>
                        </a>

                        <a href="{{url("/users/$users->id")}}" class="js-del">
                            <button class="btn btn-danger">Deletar</button>
                        </a>
                      </td>
                    </tr>
                    @endforeach
                                  
                    
                  </tbody>
                </table>
              </div>

            </div>

          </div>

@endsection