<nav class="nav nav-tabs flex-column">
    <div class="navbar-nav">

    @foreach ($list as $row )
        <a class="nav-link {{ $isActive($row['label']) ? 'active font-weight-bold' : '' }}"  href="#">
            {{ $row['label'] }}
        </a>
    @endforeach
    </div>
</nav>
