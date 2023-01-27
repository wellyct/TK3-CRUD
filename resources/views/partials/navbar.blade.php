<nav class="navbar navbar-expand-lg" style="background-color: hsl(207, 90%, 51%)">
    <div class="container">
        <a class="navbar-brand" href="/">TK3   Web Programming</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link " href="/">Home</a>
                    {{-- <a class="nav-link {{ ($active === "home") ? 'active' : '' }}" href="/">Home</a> --}}
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="/products">Product</a>
                    {{-- <a class="nav-link {{ ($active === "product") ? 'active' : '' }}" href="/product">Product</a> --}}
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="/customers">Customer</a>
                    {{-- <a class="nav-link {{ ($active === "customer") ? 'active' : '' }}" href="/customer">Customer</a> --}}
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="/staffs">Staff</a>
                    {{-- <a class="nav-link {{ ($active === "staff") ? 'active' : '' }}" href="/staff">Staff</a> --}}
                </li>

                
            </ul>
  
            {{-- <ul class="navbar-nav ms-auto">
                  @auth
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Welcome back, {{ auth()->user()->name }}
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <form action="/logout" method="post">
                                  @csrf
                                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                            </form>
                        </li>
                      </ul>
                    </li>
                  @else
                  <li class="nav-item">
                      <a href="/login" class="nav-link {{ ($active === "login") ? 'active' : '' }}"><i class="bi bi-box-arrow-in-right"></i> Login</a>
                  </li>
                  <li class="nav-item">
                      <a href="/register" class="nav-link {{ ($active === "register") ? 'active' : '' }}"><i class="bi bi-person-down"></i> Register</a>
                  </li>
  
                  @endauth
              </ul> --}}
            
        </div>
    </div>
  </nav>