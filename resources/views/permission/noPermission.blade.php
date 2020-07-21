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

        <div class="alert">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                <strong>Apenas administradores podem executar essa função!!</strong>
            </div>
       
      </section>

    </section>
    <!--main content end-->
  </section>
  <!-- container section start -->

@endsection
