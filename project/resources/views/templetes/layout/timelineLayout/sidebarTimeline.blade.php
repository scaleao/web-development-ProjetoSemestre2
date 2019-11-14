<nav id="sidebar">
    <div class="sidebar-header">
        <h3>Project</h3>
    </div>

    <ul class="list-unstyled components">
        <p>{{Auth::user()->username}}</p>
        <li class="active">
            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Perfil</a>
            <ul class="collapse list-unstyled" id="homeSubmenu">
                <li>
                    <a href="{{route('user.perfil')}}">Perfil</a>
                </li>
                <li>
                    <a href="#">Documentos</a>
                </li>
                <li>
                    <a href="#">Meus contatos</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#">Cadastrar documentos</a>
        </li>
        <!--<li> EXEMPLO DE LISTA ATIVA
            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
            <ul class="collapse list-unstyled" id="pageSubmenu">
                <li>
                    <a href="#">Page 1</a>
                </li>
                <li>
                    <a href="#">Page 2</a>
                </li>
                <li>
                    <a href="#">Page 3</a>
                </li>
            </ul>
        </li>-->
        <li>
            <a href="#">Enviar solicitação</a>
        </li>
        <li>
            <a href="#">Ajuda</a>
        </li>
    </ul>

    <ul class="list-unstyled CTAs">
        <li>
            <a href="https://bootstrapious.com/tutorial/files/sidebar.zip" class="download">Sair</a>
        </li>
    </ul>
</nav>
