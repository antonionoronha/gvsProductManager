@extends('layouts.master')
@section('content')

<!--overview start-->
<div class="row">
    <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-plus"></i> Editar produto</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i>Home</li>
              <li><i class="fa fa-laptop"></i>Dashboard</li>
              <li><i class="fa fa-pencil"></i>Editar produto</li>
            </ol>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <section class="panel panel-default">

            <form class="form-horizontal" name="formCad" id="formCad" method="post" action="{{ route('createProduct') }}">
                @csrf
                <div class="panel-body" style="border-bottom: 1px solid #ccc;">

                    <div class="form-group">
                    
                        <div class="col-sm-3">
                            <label for="name">Nome</label>

                            <div class="input-group">
                            <input type="text"class="form-control" name="name" id="name" required>
                            </input>
                            </div>

                        </div>

                        <div class="col-sm-3">

                            <label for="name">Quantidade</label>
                            <div class="input-group">
                                <input type="number"class="form-control" name="balance" id="balance" required>
                                </input>
                            </div>


                        </div>

                    </div>

                </div>

                <div class="panel-footer">
                    <button type="submit" class="btn btn-primary">Editar</button>
                </div>

            </form>
        
        </section>
    </div>
</div>

@endsection