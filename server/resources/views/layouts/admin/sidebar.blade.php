<div class="position-sticky">
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link link-dark" href="{{ route('admin.logout') }}"
                onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                <span data-feather="log-out"></span>
                {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>
    </ul>
</div>
