<div class="container-fluid">
    <div class="navigation">
        <div class="row">
            <ul class="topnav">
                <li></li>
                <li>
                    <a href="{{ route('home') }}">
                        <i class="fa fa-home"></i> Home
                    </a>
                </li>
                <li>
                    <a href="{{ route('articles.index') }}">
                        <i class="fa fa-file-text-o"></i> Articles
                    </a>
                </li>
                <li>
                    <a href="{{ route('faq.index') }}">
                        <i class="fa fa-lightbulb-o"></i> FAQ
                    </a>
                </li>
                @if(auth()->check() && auth()->user()->role === 'admin')
                <li>
                    <a href="/admin">
                        <i class="fa-solid fa-user"></i> Admin
                    </a>
                </li>
                @endif
                <li class="icon">
                    <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a>
                </li>
                <script src="https://kit.fontawesome.com/83c89e80e2.js" crossorigin="anonymous"></script>
                <li>
                    <a href="{{ url('/logout') }}">
                        <i class="fas fa-sign-out"></i> Logout
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
