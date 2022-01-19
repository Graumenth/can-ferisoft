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
        <div id="contact-form" class="text-left">
            <form method="post" action="{{route('contact.save')}}">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" class="form-control" cols="30" rows="10" placeholder="Please write your message"></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" name="send" value="Submit" class="btn btn-primary">
                </div>
            </form>
        </div>
    </section>
</main>

<x-footer>
    @yield('components.footer')
</x-footer>
</body>
</html>
