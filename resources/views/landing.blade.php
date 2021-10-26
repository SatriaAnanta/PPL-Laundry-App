<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('includes.head')
    </head>
    <body>
        <header>
            @include('includes.header')
        </header>
        <section class="hero-form">
            <div class="container position-relative">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="text-center text-white">
                            <h1 class="mb-3">Laundry Progress Tracking</h1>
                            <h4 class="mb-5">Track and monitor the progress. We understand the importance of keeping our customers constantly update.</h4>
                            <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{ route('laundry.index') }}">
                            @csrf
                                <div class="form-group">
                                    <input placeholder="Tracking Code" type="text" id="trackingCode" name="trackingCode" class="form-control" required="">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            <form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="footer">
            @include('includes.footer')
        </footer>
    </body>
<html>