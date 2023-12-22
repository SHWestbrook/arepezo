{{-- This file is used for menu items by any Backpack v6 theme --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<x-backpack::menu-item title="Categoriamenus" icon="la la-question" :link="backpack_url('categoriamenu')" />
<x-backpack::menu-item title="Ingredientes" icon="la la-question" :link="backpack_url('ingrediente')" />
<x-backpack::menu-item title="Menus" icon="la la-question" :link="backpack_url('menu')" />
<x-backpack::menu-item title="Pedidos" icon="la la-question" :link="backpack_url('pedido')" />
<x-backpack::menu-item title="Recetas" icon="la la-question" :link="backpack_url('receta')" />
<x-backpack::menu-item title="Tipoalimentos" icon="la la-question" :link="backpack_url('tipoalimento')" />
<x-backpack::menu-item title="Usuarios" icon="la la-question" :link="backpack_url('usuario')" />