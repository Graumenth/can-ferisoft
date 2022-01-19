<!doctype html>
<html lang="en">
<x-head>
    @yield('components.head')
</x-head>

<body>
<x-header>
    @yield('components.header')
</x-header>

<main>
    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <h1>Welcome</h1>
        </div>
        <a href="{{route('contact')}}" class="btn btn-primary float-left">Contact Us</a>
    </section>
</main>

<x-footer>
    @yield('components.footer')
</x-footer>
</body>
</html>
