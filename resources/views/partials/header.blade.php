<!--==========================
  Header
  ============================-->
<header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="{{ url('/') }}">PHP Laravel Assessment</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/contacts') }}">View Contacts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/contacts/create') }}">Add Contact</a>
                </li>
            </ul>
            <form class="form-inline mt-2 mt-md-0" method="GET" action="/search">
                @csrf
                <input class="form-control mr-sm-2" type="text" name="keywords" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
</header>
