<?php $user = auth()->user(); ?>

<div id="sidebar">
    <ol>
        <a href="{{ route('admin.job_post') }}"><li> Post Vacancies</li></a>
        <a href="{{ route('scholarship.showform') }}"><li> Post Scholarships</li></a>
        <a href="{{ route('blog.post') }}"><li> Blog Post</li></a>
        <a href="{{ route('admin.job_requests') }}"><li> Service Requests</li></a>
        @if(!$user->isStaff())<a href="{{ route('admin.emails') }}"><li> Subscribed Emails </li></a>@endif
        @if(!$user->isStaff())<a href="{{ route('login.generate') }}"><li> Generate Login </li></a>@endif
        @if(!$user->isStaff())<a href="{{ route('admin.manage_jobs') }}"><li> Manage Jobs </li></a>@endif
        @if(!$user->isStaff())<a href="{{ route('admin.manage_scholarships') }}"><li> Manage Scholarships </li></a>@endif
        <a href="{{ route('password.change') }}"><li> Change Password</li></a>
        <a href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            <li>Logout</li>
        </a>
        <a href="{{ route('dashboard') }}"><li>Dashboard</li></a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </ol>

    <img src="/images/db.png" alt="">
    <p>Hello {{ $user->firstname }},<br> </p>
    <p>{{ $user->role->name }}<br> </p>
</div>