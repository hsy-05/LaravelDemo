<!-- Navigation Start-->
        <nav class="navbar bg-info navbar-dark">
            <div class="container-fluid">
              <ul class="nav navbar-nav"  style="font-weight:bold;font-size: 20px; width:100%">
                <li class="active"><a href="{{ route('new') }}" style="font-size: 30px;margin-right: 36px;">歡迎進入管理頁面</a></li>
                <li><a href="{{ route('admin.posts.index') }}">消息</a></li>
                <li><a href="#">商品</a></li>
                <ul class="nav navbar-nav navbar-right" style="margin-right: 12px">
                  @if (Route::has('login'))
                      <li>
                          @auth
                          <li class="nav-item dropdown">
                              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  {{ Auth::user()->name }}<span class="caret"></span>
                              </a>

                              <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                  <li><a class="dropdown-item" href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                      {{ __('Logout') }}
                                  </a>

                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                      @csrf
                                  </form>

                                  </li>
                                  @can('admin')
                                  <li><a class="dropdown-item" href="{{ route('firstHome') }}">
                                      返回主頁
                                      </a>
                                  </li>
                                  @endcan

                              </ul>
                          </li>
                          @else
                              <a href="{{ route('login') }}" style="font-size:15px; text-align: right;"><span class="glyphicon glyphicon-user">&nbsp;</span>Login</a>
                      </li>
                          <li>
                              @if (Route::has('register'))
                                  <a href="{{ route('register') }}" style="font-size:15px; text-align: right;"><span class="glyphicon glyphicon-log-in">&nbsp;</span>Register</a>
                              @endif
                          @endauth
                          </li>
                  @endif
              </ul>
    </div>
</nav>
<!-- Navigation End  -->
