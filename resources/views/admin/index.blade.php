<!doctype html>
<html lang="en">
<x-head>
    @yield('components.head')
</x-head>

<body>
<x-header>
    @yield('components.header')
</x-header>

@if(session('message'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        {{session('message')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

<main>
    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <h1>Admin Panel</h1>
        </div>
        <div id="admin-table">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Message</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($posts as $post)
                <tr>
                    <td>{{$post->name}}</td>
                    <td>{{$post->message}}</td>
                    <td>
                        <form method="post" action="{{route('admin.posts.destroy', $post->id)}}" enctype="multipart/form-data">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </section>
</main>

<x-footer>
    @yield('components.footer')
</x-footer>
</body>
</html>
