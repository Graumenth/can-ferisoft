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
            <h1>Contact Us</h1>
        </div>
        <div id="contact-form">
            <form method="post" action="{{route('contact.save')}}"></form>
        </div>
    </section>
</main>

<x-footer>
    @yield('components.footer')
</x-footer>
</body>
</html>
