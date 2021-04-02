<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ url('/') }}" class="brand-link">
        <span class="brand-text font-weight-light">{{ config('app.name', 'Laravel') }}</span>
    </a>
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image"></div>
            <div class="info">
                <a href="" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a class="nav-link" href="">
                        <i class="nav-icon fa fa-chart-pie"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/admin/ajout-formulaire') }}">
                        <i class="nav-icon fas fa-question-circle"></i>
                        <p>Questionnaires</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Utilisateurs</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
