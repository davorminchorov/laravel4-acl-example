@section("header")
    <nav class="navbar navbar-default">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-menu">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">Laravel Authentication</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav">

                    @if(Auth::check())

                        <li class="active">

                            <a href="{{ URL::route("users/profile") }}">
                                Profile
                            </a>
                        </li>

                        <li>
                            <a href="{{ URL::route("groups/index") }}">
                                Groups
                            </a>
                        </li>

                        <li>
                            <a href="{{ URL::route("users/logout") }}">
                                Logout
                            </a>
                        </li>
                    @else
                        <li class="active">
                            <a href="{{ URL::route("users/login") }}">
                                Login
                            </a>
                        </li>
                    @endif

                </ul>

            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

@show