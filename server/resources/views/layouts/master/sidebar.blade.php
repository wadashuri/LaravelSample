<div class="position-sticky">
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link text" href="{{ route('master.logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                <span class="text" data-feather="log-out"></span>
                {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('master.logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>
    </ul>
</div>
