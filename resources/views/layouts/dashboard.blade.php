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
                <h2><i class="fa fa-product-hunt" aria-hidden="true"></i><strong>Lista de produtos</strong></h2>
           
              </div>
              <div class="panel-body">
                <table class="table table-bordered table-hover table-striped table-condesed" id="products">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Produto</th>
                      <th>Quantidade</th>
                      <th>Criado por</th>
                      <th>Criado em</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($product as $products)
                   
                    <tr>
                      <td>{{$products->id}}</td>
                      <td>{{$products->name}}</td>
                      <td>{{$products->balance}}</td>
                      <td>{{$products->created_by}}</td>
                      <td>{{$products->created_at}}                
                      </td>
                    </tr>
                    @endforeach
                                  
                    
                  </tbody>
                </table>
                

                <script type="text/javascript">
            
                  $(document).ready(function() {
                    $('#products').DataTable( {
                      dom: 'Bfrtip',
                      buttons: [
                        'copyHtml5',
                        'excelHtml5',
                        'csvHtml5',
                        'pdfHtml5'
                      ]
                    } );
                  } );
                </script>
              </div>

            </div>

          </div>
          

@endsection