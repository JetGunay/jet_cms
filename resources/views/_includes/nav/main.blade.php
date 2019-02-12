{{-- <nav class="navbar has-shadow">
        <div class="container">
            <div class="navbar-left">
                <a class="nav-item" href="{{ route('home') }}">
                    <img src="{{ asset('images/logo-sample.png') }}" alt="Jet" />
                    Jet
                </a>
                <a href="#" class="nav-item is-tab is-hidden-mobile m-l-10">About</a>
                <a href="#" class="nav-item is-tab is-hidden-mobile">Portfolio</a>
                <a href="#" class="nav-item is-tab is-hidden-mobile">Contact</a>
            </div>
            <div class="navbar-right">
                @if (Auth::guest())
                    <a href="#" class="nav-item is-tab">Log In</a>
                    <a href="#" class="nav-item is-tab">Sign Up</a>   
                @else
                    <button class="dropdown nav-item is-tab">
                        Hey Jet <span class="icon"><i class="fa fa-caret-down"></i></span>

                        <ul class="dropdown-menu">
                            <li><a href="#">Profile</a></li>
                            <li><a href="#">Notifications</a></li>
                            <li><a href="#">Settings</a></li>
                            <li class="seperator"></li>
                            <li><a href="#">Log Out</a></li>
                        </ul>
                    </button>         
                @endif
            </div>
        </div>
    </nav> --}}
    {{-- <nav class="navbar" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
              <a class="navbar-item" href="https://bulma.io">
                <img src="{{ asset('images/logo.png') }}" width="112" height="28">
              </a>
          
              <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
              </a>
            </div>
          
            <div id="navbarBasicExample" class="navbar-menu">
              <div class="navbar-start">
                <a class="navbar-item">
                  Home
                </a>
          
                <a class="navbar-item">
                  Documentation
                </a>
          
                <div class="navbar-item has-dropdown is-hoverable">
                  <a class="navbar-link">
                    More
                  </a>
          
                  <div class="navbar-dropdown">
                    <a class="navbar-item">
                      About
                    </a>
                    <a class="navbar-item">
                      Jobs
                    </a>
                    <a class="navbar-item">
                      Contact
                    </a>
                    <hr class="navbar-divider">
                    <a class="navbar-item">
                      Report an issue
                    </a>
                  </div>
                </div>
              </div>
          
              <div class="navbar-end">
                <div class="navbar-item">
                  <div class="buttons">
                    <a class="button is-custom">
                      <strong>Sign up</strong>
                    </a>
                    <a class="button is-light">
                      Log in
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </nav> --}}
          <nav class="level navbar desktop" role="navigation" aria-label="main navigation">
                <p class="level-item has-text-centered">
                  <a class="link is-info">About</a>
                </p>
                <p class="level-item has-text-centered">
                  <a class="link is-info">Profile</a>
                </p>
                <p class="level-item has-text-centered">
                    <a class="link is-info">Contact</a>
                </p>
                <p class="level-item has-text-centered">
                  <img src="{{ asset('images/logo-jet.png') }}" alt="" style="height: 30px;">
                </p>
                <p class="level-item has-text-centered">
                  <a class="link is-info">Settings</a>
                </p>
                <p class="level-item has-text-centered">
                  <a class="link is-info">Signup</a>
                </p>
                <p class="level-item has-text-centered">
                    <a class="link is-info">Login</a>
                </p>
              </nav>

        <nav class="level navbar mobile" role="navigation" aria-label="main navigation">
            <p class="level-item has-text-centered">
                <a class="link is-info"><i class="fa fa-info" aria-hidden="true"></i></a>
            </p>
            <p class="level-item has-text-centered">
                <img src="{{ asset('images/logo-jet.png') }}" alt="" style="height: 30px;">
            </p>
            <p class="level-item has-text-centered">
                <a class="link is-info"><i class="fa fa-info" aria-hidden="true"></i></a>
            </p>
        </nav>