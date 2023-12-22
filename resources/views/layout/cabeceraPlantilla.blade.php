<header class="cabecera ">
    <img src="/images/edgerunner.png">
    <nav class="navi">
        <div class="menu-container">
            <button class="toggle-btn" onclick="toggleDropdown('menu1')">Despliega</button>
            <ul class="dropdown-menu" id="menu1">
                <li><a class="au" href="#">Productos</a></li>
                <li><a class="au" href="#">Clientes</a></li>
                <li><a class="au" href="#">Creacion</a></li>
            </ul>
        </div>
        <div class="menu-container">
            <button class="toggle-btn" onclick="toggleDropdown('menu2')">Despliega</button>
            <ul class="dropdown-menu" id="menu2">
                <li><a class="au" href="#"></a></li>
                <li><a class="au" href="#">Clientes</a></li>
                <li><a class="au" href="#">Creacion</a></li>
            </ul>
        </div>
        <div class="menu-container">
            <button class="toggle-btn" onclick="toggleDropdown('menu3')">Despliega</button>
            <ul class="dropdown-menu" id="menu3">
                <li><a class="au" href="#">Hola</a></li>
                <li><a class="au" href="#">Buenas</a></li>
                <li><a class="au" href="#">Tardes</a></li>
            </ul>
        </div>
    </nav>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="{{ asset('js/cabecera.js') }}"></script>
</header>
