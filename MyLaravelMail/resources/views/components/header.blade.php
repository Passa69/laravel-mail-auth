<header>
    <h1>VIDEOGAMES</h1>

    @auth
        <h2>Hi {{ Auth::user() -> name }}!</h2>
        <a class="btn btn-danger" href="{{ route('logout') }}">LOGOUT</a>
    @else
        <h1>If you wanne see my site you have to login/register</h1>


        <h2>Register</h2>
        <form action="{{ route('register') }}" method="POST">

            @method('POST')
            @csrf

            <label for="name">Name</label>
            <input type="text" name="name" value="Tommaso"> <br>
            <label for="email">E-mail</label>
            <input type="text" name="email" value="aaa@bbb.ccc"> <br>
            <label for="password">Password</label>
            <input type="password" name="password" value="password"> <br>
            <label for="password_confirmation">Password confirm</label>
            <input type="password" name="password_confirmation" value="password"> <br>
            <br>
            <input type="submit" value="REGISTER">

        </form>

        <br><hr class="bg-white"><br>

        <h2>Login</h2>
            <form action="{{ route('login') }}" method="POST">

            @method('POST')
            @csrf

            <label for="email">E-mail</label>
            <input type="text" name="email" value="aaa@bbb.ccc"> <br>
            <label for="password">Password</label>
            <input type="password" name="password" value="password"> <br>
            <br>
            <input type="submit" value="LOGIN">

        </form>
    @endauth
</header>