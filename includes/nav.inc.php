<nav class="w3-bar w3-teal">
    <a href="" class="w3-bar-item w3-button"><?php echo $titulo; ?></a>
    <div class="w3-right">
        <button class="w3-bar-item w3-dropdown-click" onclic="dropdown('clientes')">Clientes</button> 
        <div id="clientes" class="w3-dropdown-content w3-bar-block w3-card">
            <a href="" class="w3-bar-item w3-button">Cadastrar</a>
            <a href="" class="w3-bar-item w3-button">Listar</a>
            <a href="" class="w3-bar-item w3-button">Editar</a>
            <a href="" class="w3-bar-item w3-button">Apagar</a>
        </div>
        <button class="w3-bar-item w3-dropdown-click" onclic="dropdown('placas')">Placas</button> 
        <div id="placas" class="w3-dropdown-content w3-bar-block w3-card">
            <a href="" class="w3-bar-item w3-button">Cadastrar</a>
            <a href="" class="w3-bar-item w3-button">Listar</a>
            <a href="" class="w3-bar-item w3-button">Editar</a>
            <a href="" class="w3-bar-item w3-button">Apagar</a>
        </div>
        <button class="w3-bar-item w3-dropdown-click" onclic="dropdown('funcionarios')">Funcionarios</button>
        <div id="funcionarios" class="w3-dropdown-content w3-bar-block w3-card">
            <a href="" class="w3-bar-item w3-button">Cadastrar</a>
            <a href="" class="w3-bar-item w3-button">Listar</a>
            <a href="" class="w3-bar-item w3-button">Editar</a>
            <a href="" class="w3-bar-item w3-button">Apagar</a>
        </div> 
    </div>
</nav>