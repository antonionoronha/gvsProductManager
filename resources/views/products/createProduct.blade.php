@extends('layouts.master')
@section('content')

<!--overview start-->
<div class="row">
    <div class="col-lg-12">
            @if(isset($product))
            <h3 class="page-header"><i class="fa fa-pencil"></i> Editar produto</h3>
            @else
            <h3 class="page-header"><i class="fa fa-plus"></i> Cadastrar produto</h3>
            @endif
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i>Home</li>
              <li><i class="fa fa-laptop"></i>Dashboard</li>
              @if(isset($product))
              <li><i class="fa fa-pencil"></i>Editar produto</li>
              @else
              <li><i class="fa fa-plus"></i>Cadastrar produto</li>
              @endif
            </ol>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <section class="panel panel-default">
            @if(isset($product))
            <form class="form-horizontal" name="formCad" id="formCad" method="post" action="{{ url("product/$product->id") }}">
            @method('PUT')
            @else
            <form class="form-horizontal" name="formCad" id="formCad" method="post" action="{{ route('createProduct') }}">
            @endif   
                @csrf
                <div class="panel-body" style="border-bottom: 1px solid #ccc;">

                    <div class="form-group">
                    
                        <div class="col-sm-3">
                            <label for="name">Nome</label>

                            <div class="input-group">
                            <input type="text"class="form-control" name="name" id="name" value="{{$product->name ?? ''}}" required>
                            </input>
                            </div>

                        </div>

                        <div class="col-sm-3">

                            <label for="name">Quantidade</label>
                            <div class="input-group">
                                <input type="number"class="form-control" name="balance" id="balance" value="{{$product->balance ?? ''}}" required>
                                </input>
                            </div>


                        </div>

                    </div>

                </div>

                <div class="panel-footer">
                    <input type="submit" class="btn btn-primary" value="@if(isset($product)) Editar @else Cadastrar @endif">
                </div>

            </form>
        
        </section>
    </div>
</div>

@endsection