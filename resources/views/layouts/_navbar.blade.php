<nav class="navbar navbar-inverse navbar-fixed-top"  role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/') }}">UBER</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                  @if (!Auth::guest())
                  <li>
                      <a href="{{ url('/#booktaxi') }}">Book Texi</a>
                  </li>
                  @endif
                    <li>
                        <a href="{{ url('../promotions') }}">Promotion</a>
                    </li>
                    <li>
                        <a href="{{ url('../vouchers') }}">Voucher</a>
                    </li>
                     @if (!Auth::guest())
                     <li>
                         <a href="{{ url('../redeem') }}">Redeem<small> for test</small></a>
                     </li>
                      @if (Auth::user()->isAdmin())
                        <li class="dropdown">
                          <a  class="dropdown-toggle" data-toggle="dropdown" role="button" href="#">Add Event<span class="caret"></span></a>
                          <ul class="dropdown-menu" role="menu">
                            <li>
                              <a href="{{ url('../promotions/create') }}"> Add Promotions</a>
                            </li>
                            <li>
                              <a href="{{ url('../vouchers/create') }}"> Add Vouchers</a>
                            </li>
                          </ul>
                        </li>
                      @endif
                    @endif
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
          <ul class="nav navbar-nav navbar-right top-right">

                 @if (Auth::guest())
                     <li><a href="{{ route('login') }}">Login</a></li>
                     <li><a href="{{ route('register') }}">Register</a></li>
                 @else
                     <li class="dropdown">
                         <a  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                             {{ Auth::user()->name }} <span class="caret"></span>
                         </a>

                         <ul class="dropdown-menu" role="menu">
                           <li>
                             <li><a> You have {{ Auth::user()->point }} </span>  points </a></li>
                           </li>
                           <li>
                             <li><a href="{{ url('/profile') }}"><img src="../img/user-16.ico" > &nbsp; Profile</a></li>
                           </li>
                             <li>
                                 <a href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                    <img src="../img/logout-16.ico" >
                                     &nbsp;Logout
                                 </a>

                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                     {{ csrf_field() }}
                                 </form>
                             </li>
                         </ul>
                     </li>
                 @endif
            </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
