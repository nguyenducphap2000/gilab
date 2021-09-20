@extends('layouts.FirstProject')
@section('head')
@section('content')
<div class="container-profile">
    <div class="container-profile-hello">
        <h3>Hello {{ Session('username') }}</h3>
    </div>
    <main class="container-profile-main">
        <div class="container-profile-user">
            <div class="container-profile-img-name">
                <div class="container-profile-smImg">
                    <img src="{{ asset('img/phap.jpg') }}" alt="user-image">
                </div>
                <div class="container-profile-yourname">
                    <label>Jackson</label>
                </div>
            </div>
            <div class="container-profile-blog">
                <div class="container-profile-img">
                    <img src="{{ asset('img/post-sample-image.jpg') }}" alt="">
                </div>
                <p>
                    Laravel is a web application framework with expressive, 
                    elegant syntax. A web framework provides a structure and 
                    starting point for creating your application, allowing you
                    to focus on creating something amazing while we sweat the
                    details.
        
                    Laravel strives to provide an amazing developer experience 
                    while providing powerful features such as thorough dependency 
                    injection, an expressive database abstraction layer, queues and
                    scheduled jobs, unit and integration testing, and more.
        
                    Whether you are new to PHP or web frameworks or have years of 
                    experience, Laravel is a framework that can grow with you. We'
                    ll help you take your first steps as a web developer or give 
                    you a boost as you take your expertise to the next level. We 
                    can't wait to see what you build.
                </p>
            </div>
        </div>
    </main>
</div>
<div class="profile-task">
    
</div>
@endsection 