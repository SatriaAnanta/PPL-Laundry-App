<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('includes.head')
    </head>
    <body>
        <header>
            @include('includes.header')
        </header>
        <section class="container position-relative mt-5">
            <div class="row justify-content-center">
                @if ($laundry->count() > 0 )
                    @foreach ($laundry as $result)
                        {{ $result->email}}
                    @endforeach
                @else
                    <h2>No Product Found !</h2>
                @endif
            </div>
        </section>
        <footer class="footer">
            @include('includes.footer')
        </footer>
    </body>
</html>
