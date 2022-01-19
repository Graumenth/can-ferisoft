<!doctype html>
<html lang="en">
<x-head>
    @yield('components.head')
</x-head>

<body>
<x-header>
    @yield('components.header')
</x-header>

@if(session('message-post-created'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{session('message-post-created')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@elseif(session('message-post-failed'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{session('message-post-failed')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@else

@endif
<main>
    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <h1>Contact Us</h1>
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
                <tr>
                    @foreach($posts as $post)
                    <td>{{$post->name}}</td>
                    <td>{{$post->message}}</td>
                    <td>
                        <form method="post" action="{{route('admin.posts.destroy', $post->id)}}" enctype="multipart/form-data">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                    @endforeach
                </tr>
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
