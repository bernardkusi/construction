<header>
        <nav>
            <a href={{ route('index') }} class="logo">Construction</a>

            @auth
            <p>Hi, {{ auth()->user()->firstname }}</p>
            @endauth

            <ul>
                @auth
                @if (auth()->user()->usertype==1)
                <button>
                    Admin

                    <ul>
                        <a href={{ route('admin-index') }} >Home</a>
                        <a href={{ route('admin-services') }} >Services</a>
                        <a href={{ route('admin-users') }} >Users</a>
                        <a href={{ route('admin-blogs') }} >Blogs</a>
                        <a href={{ route('admin-messages') }} >Messages</a>
                    </ul>
                </button>
                @endif
                @endauth
                <a href={{ route('index') }} >Home</a>
                <a href={{ route('aboutpage') }} >About</a>
                <a href={{ route('servicespage') }}>Services</a>
                <a href={{ route('blogspage') }}>Blogs</a>
                <a href={{ route('contactpage') }} >Contact</a>
                
                @guest
                <a href="/login" class="click secondary">Login</a>
                @endguest

                @auth
                <form action={{ route('logout') }} method="post">
                    @csrf
                    <button type="submit" class="click secondary">Logout</button>
                </form>
                @endauth
               
            </ul>
        </nav>
</header>