<aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="active">
            <a class="" href="{{ route('dashboard')}}">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>Produtos</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="{{ route('createProduct') }}">Cadastrar</a></li>
              <!--li><a class="" href="form_validation.html">Form Validation</a></li-->
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_desktop"></i>
                          <span>Usuários</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a  href="/users/create">Cadastrar</a></li>
              <li><a  href="/users">Listar</a></li>
            </ul>
          </li>





        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>