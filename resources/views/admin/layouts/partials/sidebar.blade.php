<div class="sidebar" id="sidebar">
    <div class="brand">Admin Panel</div>

    <ul class="sidebar-menu">
        @foreach($adminMenu as $menu)
            @php
                $hasChildren = isset($menu['children']) && count($menu['children']) > 0;
                 $isActiveParent = $hasChildren && collect($menu['children'])->contains(function ($child) {
                    return request()->routeIs($child['route']);
                });
                $isActive = isset($menu['route']) && request()->routeIs($menu['route']);
            @endphp

            <li class="menu-item  {{ $isActive || $isActiveParent ? 'active' : '' }}  ">
             
                @if(!$hasChildren)
                    <a href="{{ route($menu['route']) ?? '#' }}" class="menu-link  {{ $isActive ? 'active' : '' }}       ">
                        <i class="{{ $menu['icon'] ?? 'bi bi-circle' }}"></i>
                        <span>{{ $menu['title'] }}</span>
                    </a>
                @else
                 
                    <a href="#" class="menu-link d-flex justify-content-between align-items-center">
                        <div>
                            <i class="{{ $menu['icon'] ?? 'bi bi-circle' }}"></i>
                            <span>{{ $menu['title'] }}</span>
                        </div>
                        <i class="bi bi-chevron-down small toggle-icon"></i>
                    </a>

                    <ul class="submenu collapse     {{ $isActiveParent ? 'show' : '' }}">
                        @foreach($menu['children'] as $child)
                            <li>
                                <a href="{{ isset($child['route']) ? route($child['route']) : '#' }}" class="submenu-link      {{ request()->routeIs($child['route']) ? 'active' : '' }}">
                                    <i class="bi bi-dot"></i> {{ $child['title'] }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </li>
        @endforeach
    </ul>
</div>
<div id="sideback" class="sideback">

</div>
