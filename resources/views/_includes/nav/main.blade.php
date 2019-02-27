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

              {{-- @if (Auth::guest())
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
                @endif --}}
              
               {{-- @if (Auth::guest())
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
                @else
                  <div class="navbar-end">
                    <div class="navbar-item">
                      <div class="buttons">
                        <a href="/logout" class="button is-custom">
                          Log Out
                        </a>
                        <p>Hey Jet</p>
                      </div>
                    </div>
                  </div>
                @endif
          
              
            </div>
          </nav> --}}

<nav class="navbar has-shadow">
  <div class="navbar-left">
    <a class="navbar-item">
      Website
    </a>
  </div>
  <label for="menu-toggle" class="nav-toggle">
    <span></span>
    <span></span>
    <span></span>
  </label>
  <div class="navbar-right navbar-menu">
    <div class="navbar-end">
      <a class="navbar-item is-tab is-active">
        <span class="icon"><i class="fa fa-user"></i></span>
      </a>
      <a href="/logout" class="navbar-item is-tab">
        <span class="icon"><i class="fa fa-sign-out"></i></span>
      </a>
    </div>
  </div>
</nav>