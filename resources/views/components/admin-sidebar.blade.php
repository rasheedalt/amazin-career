<div id="sidebar">
    <ol>
        <a href="PostJob.html"><li> Post Vacancies</li></a>
        <a href="Schoarship.html"><li> Post Scholarships</li></a>
        <a href="BlogP.html"><li> Blog Post</li></a>
        <a href="{{ route('login.generate') }}"><li> Generate Login </li></a>
        <a href="ChangeP.html"><li> Change Password</li></a>
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