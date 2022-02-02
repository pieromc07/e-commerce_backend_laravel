<nav class="sidebar sidebar-offcanvas dynamic-active-class-disabled" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile not-navigation-link">
            <div class="nav-link">
                <div class="user-wrapper">
                    <div class="profile-image">
                        <img src="{{ url('assets/images/faces/face8.jpg') }}" alt="profile image">
                    </div>
                    <div class="text-wrapper">
                        <p class="profile-name">{{auth()->user()->name}}</p>
                        <div class="dropdown" data-display="static">
                            <a href="#" class="nav-link d-flex user-switch-dropdown-toggler" id="UsersettingsDropdown"
                                href="#" data-toggle="dropdown" aria-expanded="false">
                                <small class="designation text-muted">{{auth()->user()->role}}</small>
                                <span class="status-indicator online"></span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="UsersettingsDropdown">
                                <a class="dropdown-item p-0">
                                </a>
                                <a href="/admin/logout" class="dropdown-item"> Sign Out </a>

                            </div>
                        </div>
                    </div>
                </div>
                {{-- <button class="btn btn-success btn-block">New Project <i class="mdi mdi-plus"></i> --}}
                </button>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/home') }}">
                <i class="menu-icon mdi mdi-television"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#collapse_product" aria-expanded="" aria-controls="collapse_product">
                <i class="menu-icon mdi mdi-dna"></i>
                <span class="menu-title">Productos</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="collapse_product">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/products') }}">listar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/products/create') }}">crear</a>
                    </li>
                    {{-- <li class="nav-item">
            <a class="nav-link" href="{{ url('/basic-ui/typography') }}">Typography</a>
          </li> --}}
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#collapse_categories" aria-expanded="collapse_categories"
                aria-controls="collapse_categories">
                <i class="menu-icon mdi mdi-dna"></i>
                <span class="menu-title">Categorias</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="collapse_categories">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/categories') }}">listar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/categories/create') }}">crear</a>
                    </li>
                    <li class="nav-item" >
                        <a class="nav-link"data-toggle="collapse" href="#collapse_subcategories" aria-expanded="collapse_subcategories"
                        aria-controls="collapse_subcategories">
                           <i class="menu-icon mdi mdi-dna"></i>
                            <span class="menu-title">Subcategorias</span>
                            <i class="menu-arrow"></i>
                        </a>

                        <div class="collapse" id="collapse_subcategories">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/subcategories') }}">listar</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/subcategories/create') }}">crear</a>
                                </li>
                            </ul>

                    </li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#basic-ui" aria-expanded="" aria-controls="basic-ui">
                <i class="menu-icon mdi mdi-dna"></i>
                <span class="menu-title">Pedidos</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="basic-ui">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/orders') }}">Listar</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="{{ url('/orders/edit') }}">edit</a>
                    </li> --}}
                </ul>
            </div>
        </li>

    </ul>
</nav>
