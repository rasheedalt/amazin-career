<div id="sidebar">
    <ol>
        <a href="{{ route('job.post') }}"><li> Post Vacancies</li></a>
        <a href="{{ route('scholarship.post') }}"><li> Post Scholarships</li></a>
        <a href="{{ route('blog.post') }}"><li> Blog Post</li></a>
        <a href="{{ route('login.generate') }}"><li> Generate Login </li></a>
        <a href="{{ route('password.change') }}"><li> Change Password</li></a>
        <a href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            <li>Logout</li>
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </ol>

    <img src="/images/db.png" alt="">
    <p>Hello {{ auth()->user()->firstname }},<br> </p>
</div>