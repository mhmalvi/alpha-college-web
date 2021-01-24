<header>
    <nav class="navbar navbar-default navbar-fixed white no-background bootsnav">
        <div class="container"> 
            <div class="search_btn btn_common"><i class="icon-icons185"></i></div>
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
            <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="{{route('alpha')}}"><img src="{{asset('alpha.png')}}" alt="logo" class="logo logo-display" style="max-width: 200px;">
            <img src="{{asset('alpha.png')}}" class="logo logo-scrolled" alt="">
            </a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOut">
                <li>
                    <a href="{{route('alpha')}}">Home</a>
                </li>
                <li>
                    <a href="{{route('aboutAlpha')}}">About Us</a>
                </li>
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" >Courses</a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{route('AHC30916')}}">AHC30916 - Certificate III in Landscape Construction</a>
                        </li>
                        <li>
                            <a href="{{route('BSB51918')}}">BSB51918 - Diploma of Leadership and Management</a>
                        </li>
                        <li>
                            <a href="{{route('CPC10111')}}">CPC10111 - Certificate I in Construction</a>
                        </li>
                        <li>
                            <a href="{{route('RII30815')}}">RII30815 - Certificate III in Civil Construction Plant Operations</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{route('blogs')}}">Blogs</a>
                </li>
                <li><a href="{{route('contactAlpha')}}">Contact Us</a></li>
            </ul>
        </div>
        </div>   
    </nav>
</header>