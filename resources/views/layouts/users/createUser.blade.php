@extends('layouts.master')
@section('content')

<!--overview start-->
<div class="row">
    <div class="col-lg-12">
            @if(isset($user))
            <h3 class="page-header"><i class="fa fa-pencil"></i> Editar usuário</h3>
            @else
            <h3 class="page-header"><i class="fa fa-plus"></i> Cadastrar usuário</h3>
            @endif
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i>Home</li>
              <li><i class="fa fa-laptop"></i>Dashboard</li>
              @if(isset($user))
              <li><i class="fa fa-pencil"></i>Editar usuário</li>
              @else
              <li><i class="fa fa-plus"></i>Cadastrar usuário</li>
              @endif
            </ol>
    </div>
</div>

        @if(isset($error_email))
        <div class="alert">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                <strong>Este e-mail já está cadastrado!!!</strong>
        </div>
        @endif

<div class="row">
    <div class="col-lg-12">
        <section class="panel panel-default">
            @if(isset($user))
            <form class="form-horizontal" name="formCad" id="formCad" method="post" action="{{ url("users/$user->id") }}">
            @method('PUT')
            @else
            <form class="form-horizontal" name="formCad" id="formCad" method="post" action="{{ url("users") }}">
            @endif   
                @csrf
                <div class="panel-body" style="border-bottom: 1px solid #ccc;">

                    <div class="form-group">
                    
                        <div class="col-sm-4">
                            <label for="name">Nome</label>

                            <div class="input-group">
                            <input type="text"class="form-control" name="name" id="name" value="{{$user->name ?? ''}}" required>
                            </input>
                            </div>

                        </div>

                        <div class="col-sm-4">
                            <label for="name">E-mail</label>

                            <div class="input-group">
                            <input type="text"class="form-control" name="email" id="email" value="{{$user->email ?? ''}}" required>
                            </input>
                            </div>

                        </div>

                        <div class="col-sm-4">
                            <label for="name">Setor</label>
                            <datalist id="setores">
                            <option value="TI">
                            <option value="Comercial">
                            <option value="Financeiro">
                            <option value="Contabilidade">
                            </datalist>
                            <div class="input-group">
                            <input list="setores" type="text" class="form-control" name="department" id="department"  required>
                            
                            </input>
                            </div>

                        </div>

                        <div class="col-sm-4">
                            <label for="name">Tipo usuário</label>

                            <div class="input-group">
                            <datalist id="roles">
                            <option value="Admin">
                            <option value="Regular">
                            </datalist>                           
                            <input list="roles" type="text"class="form-control" name="role" id="role" required-->                             
                            </input>
                            </div>

                        </div>

                        <div class="col-sm-4">
                            <label for="name">Senha</label>

                            <div class="input-group">
                            <input type="password" class="form-control" name="password" id="password" required>
                            </input>
                            </div>

                        </div>

                        
                    </div>

                </div>

                <div class="panel-footer">
                    <input type="submit" class="btn btn-primary" value="@if(isset($user)) Editar @else Cadastrar @endif">
                </div>

            </form>
        
        </section>
    </div>
</div>

@endsection