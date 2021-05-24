<div class="sidebar" data-color="purple" data-background-color="white" data-image="{{asset('images/admin_image//sidebar-1.jpg')}}">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo">
        <a href="{{url('/')}}" target="_blank" class="simple-text logo-normal">
            <img src="{{asset('/images/logo.jpg')}}" alt="" width="80px" height="80px;">
        </a>
    </div>
 <div class="sidebar-wrapper">
        <ul class="nav">
       
            <li class="nav-item {{ Request::path() === 'admin/index' ? 'active' : '' }}">
                <a class="nav-link" href="{{url('admin/index')}}">
                    <i class="material-icons">person</i>
                    <p>Home</p>
                </a>
            </li>

            <li class="nav-item {{ Request::path() === 'admin/about' ? 'active' : '' }}">
                <a class="nav-link" href="{{url('admin/about')}}">
                    <i class="material-icons">book</i>
                    <p>About</p>
                </a>
            </li>
            <li class="nav-item {{ Request::path() === 'admin/service' ? 'active' : '' }}">
                <a class="nav-link" href="{{url('admin/service')}}">
                    <i class="material-icons">bubble_chart</i>
                    <p>Services</p>
                </a>
            </li>

            <li class="nav-item {{ Request::path() === 'admin/ticket' ? 'active' : '' }}">
                <a class="nav-link" href="{{url('admin/ticket')}}">
                    <i class="material-icons">book</i>
                    <p>Tickets</p>
                </a>
            </li>
            
            <li class="nav-item {{ Request::path() === 'admin/course' ? 'active' : '' }}">
                <a class="nav-link" href="{{url('admin/course')}}">
                    <i class="material-icons">bubble_chart</i>
                    <p>Courses</p>
                </a>
            </li>
            <li class="nav-item {{ Request::path() === 'admin/blog' ? 'active' : '' }}">
                <a class="nav-link" href="{{url('admin/blog')}}">
                    <i class="material-icons">view_module</i>
                    <p>Blog</p>
                </a>
            </li>
            <li class="nav-item {{ Request::path() === 'admin/event' ? 'active' : '' }}">
                <a class="nav-link" href="{{url('admin/event')}}">
                    <i class="material-icons">event</i>
                    <p>Event</p>
                </a>
            </li>

            <li class="nav-item {{ Request::path() === 'admin/contact' ? 'active' : '' }}">
                <a class="nav-link" href="{{url('admin/contact')}}">
                    <i class="material-icons">content_paste</i>
                    <p>Contact</p>
                </a>
            </li>
    



            {{-- {{url('logout')}}             --}}
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/logout') }}">
                    <i class="material-icons">logout</i>
                    <p>Logout</p>
                </a>
            </li>
             <li class="nav-item">
                <a class="nav-link" href="">
                    <i class="material-icons"></i>
                    <p></p>
                </a>
            </li>

         
        </ul>
    </div>
</div>
