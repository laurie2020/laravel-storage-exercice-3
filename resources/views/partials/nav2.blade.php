<nav id="sidebar" class="img" style="background-image: url(images/bg_1.jpg);">
    <div class="p-4">
        <h1><a href="index.html" class="logo">Travel <span>Travel Agency</span></a></h1>
        <ul class="list-unstyled components mb-5">
            <li class="active">
                <a href={{ route('home') }}><span class="fa fa-home mr-3"></span> Home</a>
            </li>
            <li>
                <a href="{{ route('users.index') }}"><span class="fa fa-user mr-3"></span> Users</a>
            </li>
            <li>
                <a href={{ route('caracteristiques.index') }}><span class="fas fa-info-circle mr-3"></span> Caracteristiques</a>
            </li>
            <li>
                <a href={{ route('galeries.index') }}><span class="fas fa-images mr-3"></span> Galeries</a>
            </li>
            <li>
                <a href={{ route('portfolios.index') }}><span class="fas fa-file mr-3"></span> Portfolios</a>
            </li>
            <li>
                <a href={{ route('services.index') }}><span class="fas fa-hands-helping mr-3"></span> Services</a>
            </li>
        </ul>

        <div class="mb-5">
            <h3 class="h6 mb-3">Subscribe for newsletter</h3>
            <form action="#" class="subscribe-form">
                <div class="form-group d-flex">
                    <div class="icon"><span class="icon-paper-plane"></span></div>
                    <input type="text" class="form-control" placeholder="Enter Email Address">
                </div>
            </form>
        </div>
    </div>
</nav>
