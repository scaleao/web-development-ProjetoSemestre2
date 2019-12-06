<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">

        <button type="button" id="sidebarCollapse" class="btn btn-info">
            <i class="fas fa-align-left"></i>
            <span>Mais</span>
        </button>
        <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-align-justify"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('user.index_solicitacao')}}">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Envios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Recebidos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Assinaturas</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
