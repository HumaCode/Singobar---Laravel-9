@php
$user = App\Models\User::findOrFail(auth()->user()->id);
@endphp


<nav class="pcoded-navbar">
    <div class="navbar-wrapper">
        <div class="navbar-content scroll-div ">

            <div class="">
                <div class="main-menu-header">
                    <img class="img-radius" src="{{ asset('backend') }}/assets/images/user/avatar-2.jpg"
                        alt="User-Profile-Image">
                    <div class="user-details">
                        <span>{{ $user->name }}</span>
                        <div id="more-details">{{ $user->username }}<i class="fa fa-chevron-down m-l-5"></i></div>
                    </div>
                </div>
                <div class="collapse" id="nav-user-link">
                    <ul class="list-unstyled">
                        <li class="list-group-item "><a href="{{ route('profile.edit') }}"><i
                                    class="feather icon-user m-r-5"></i>Profile</a></li>
                        <li class="list-group-item"><a href="#!"><i class="feather icon-settings m-r-5"></i>Setting</a>
                        </li>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <li class="list-group-item"><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                this.closest('form').submit();"><i class="feather icon-log-out m-r-5"></i>Logout</a>
                            </li>
                        </form>

                    </ul>
                </div>
            </div>

            <ul class="nav pcoded-inner-navbar ">
                <li class="nav-item pcoded-menu-caption">
                    <label>Navigation</label>
                </li>
                <li class="nav-item ">
                    <a href="index.html" class="nav-link"><span class="pcoded-micon"><i
                                class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link "><span class="pcoded-micon"><i
                                class="feather icon-layout"></i></span><span class="pcoded-mtext">Page
                            layouts</span></a>
                    <ul class="pcoded-submenu">
                        <li><a href="layout-vertical.html" target="_blank">Vertical</a></li>
                        <li><a href="layout-horizontal.html" target="_blank">Horizontal</a></li>
                    </ul>
                </li>


            </ul>
        </div>
    </div>
</nav>