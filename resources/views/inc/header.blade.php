<style>
    .one {
        margin-top: 12px;
        margin-left: 25px;
    }
</style>

<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
    <h5 class="my-0 mr-md-auto font-weight-normal"><a href="/">LaraLearn</a></h5>
    <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="/">Home</a>
        @can('is_admin')
        <a class="p-2 text-dark" href="/author/add">Add author</a>
        <a class="p-2 text-dark" href="{{ route('add-book-page') }}">Add book</a>
        @endcan
        <a class="p-2 text-dark" href="{{ route('all-authors') }}">Authors</a>
        <a class="p-2 text-dark" href="/book/all">Books</a>
    </nav>
    @guest
    <a class="btn btn-outline-primary" href="{{ Route('register') }}">Sign up</a>
    <a class="btn btn-outline-primary" href="{{ Route('login') }}">Sign in</a>
    @endguest
    @auth
    <a class="btn btn-outline-primary" href="{{ Route('get-logout') }}">Sign out</a>
    @endauth

    @can('is_admin')
    <div class="alert alert-danger one" role="alert">
       Admin
    </div>
    @endcan

    @auth
    @cannot('is_admin')
    <div class="alert alert-primary one" role="alert">
        User
    </div>
    @endcannot
    @endauth
</div>

