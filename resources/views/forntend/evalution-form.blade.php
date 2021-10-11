@extends('layouts.app')
@section('content')
    <div class="breadcrumbs overlay" style="background-image:url('http://pific-bd.com/pific-web-site/img/apply.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <div class="bread-menu">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about.html">Apply</a></li>
                                <li><a href="about.html"></a></li>
                            </ul>
                        </div>
                        <div class="bread-title"><h2>Apply Online</h2></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="about-us section-space">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div>
                    <iframe id="fred" style="border:1px solid #666CCC" title="PDF in an i-Frame" src="{{ asset('pific-web-site') }}/evalution-form.pdf#toolbar=0" frameborder="1" scrolling="auto" height="1100" width="750px" ></iframe>
                </div>
            </div>
        </div>
    </section>
@endsection
