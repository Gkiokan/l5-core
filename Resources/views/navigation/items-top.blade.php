
<li class="dropdown-header">Profile</li>
<li> <a href="{{ route('profile.index') }}"> Profile Settings </a></li>
<li> <a href="{{ route('profile.index') }}"> My Profile </a></li>

<li role="separator" class="divider"></li>
<li>
    <a href="{{ url('/logout') }}"
        onclick="event.preventDefault();
                 document.getElementById('logout-form').submit();">
        Logout
    </a>

    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
</li>
