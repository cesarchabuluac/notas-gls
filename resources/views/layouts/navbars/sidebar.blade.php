 <!----- AQUÍ INICIA MENÚ PRINCIPAL--->
 <div class="side-content-wrap">
    <div class="sidebar-left open rtl-ps-none" data-perfect-scrollbar="" data-suppress-scroll-x="true">
        <ul class="navigation-left">
            <li class="nav-item">
                <a class="nav-item-hold" href="{{route('printer')}}">
                    <i class="nav-icon i-Video-Photographer"></i>
                    <span class="nav-text">Impresor</span>
                </a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item">
                <a class="nav-item-hold" href="{{route('sender')}}">
                    <i class="nav-icon i-Checked-User"></i>
                    <span class="nav-text">Remitentes</span>
                </a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item">
                <a class="nav-item-hold" href="{{route('receiver')}}">
                    <i class="nav-icon i-Plane"></i>
                    <span class="nav-text">Clientes</span>
                </a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item">
                <a class="nav-item-hold" href="{{route('setting')}}">
                    <i class="nav-icon i-Gear"></i>
                    <span class="nav-text">Configuración</span>
                </a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item">                
                <a class="nav-item-hold" href="{{ route('logout') }}"  onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    <i class="nav-icon i-Power-2"></i>
                    <span class="nav-text">Salir</span>
                </a>
                <div class="triangle"></div>
            </li>
        </ul>
    </div>
    <div class="sidebar-left-secondary rtl-ps-none" data-perfect-scrollbar="" data-suppress-scroll-x="true">
        <ul class="childNav" data-parent="web">
            <li class="nav-item"><a href="#"><i class="nav-icon i-Shutter"></i><span class="item-name">App </span></a></li>
            <li class="nav-item"><a href="#"><i class="nav-icon i-Shutter"></i><span class="item-name">Dos</span></a></li>
            <li class="nav-item"><a href="#"><i class="nav-icon i-Shutter"></i><span class="item-name">Tres</span></a></li>
        </ul>
        
    </div>
    <div class="sidebar-overlay"></div>
</div>
<!----- AQUÍ TERMINA MENÚ PRINCIPAL--->