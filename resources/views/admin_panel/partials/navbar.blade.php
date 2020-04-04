<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <!-- Brand -->
    <a class="navbar-brand" href="#">Logo</a>

    <!-- Links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="#">Link 1</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link 2</a>
        </li>

        <!-- Dropdown -->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                Upload
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="{{route('upload_page',['type'=>'event'])}}">Event</a>
                <a class="dropdown-item" href="{{route('upload_page',['type'=>'expo'])}}">Expo</a>
                <a class="dropdown-item" href="{{route('upload_page',['type'=>'organization'])}}">Organization</a>
                <a class="dropdown-item" href="{{route('upload_page',['type'=>'job'])}}">Jobs</a>
                <a class="dropdown-item" href="{{route('upload_page',['type'=>'opportunity'])}}">Opportunities</a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                Show List
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="{{route('list',['type'=>'event'])}}">Event</a>
                <a class="dropdown-item" href="{{route('list',['type'=>'expo'])}}">Expo</a>
                <a class="dropdown-item" href="{{route('list',['type'=>'organization'])}}">Organization</a>
                <a class="dropdown-item" href="{{route('list',['type'=>'job'])}}">Jobs</a>
                <a class="dropdown-item" href="{{route('list',['type'=>'opportunity'])}}">Opportunities</a>
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
    </ul>
</nav>
<br>