<li class="nav-item">
    <a href="{{ route('dota2s.index') }}"
       class="nav-link {{ Request::is('dota2s*') ? 'active' : '' }}">
        <p>Dota2S</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('logs.index') }}"
       class="nav-link {{ Request::is('logs*') ? 'active' : '' }}">
        <p>Logs</p>
    </a>
</li>


