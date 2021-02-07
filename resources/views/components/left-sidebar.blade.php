<div id="sidebar">
    <div class="sidebarOne">
        <h3>JOBS BY STATES</h3>
        <ol>
            <li><a href="{{ route('job.state', 'LA') }}">Jobs in Lagos</a></li>
            <li><a href="{{ route('job.state', 'FC') }}">Jobs in Abuja</a></li>
            <li><a href="{{ route('job.state', 'RI') }}">Jobs in Portharcourt</a></li>
            <li><a href="{{ route('job.state', 'KN') }}">Jobs in Kano</a></li>
            <li><a href="{{ route('states.all') }}">Jobs in Other States</a></li> 
        </ol>
    </div>

    <div class="sidebarTwo">
        <form action="{{ route('email.subscribe') }}" method="POST">
            @csrf
            <p>For job adevrt, Enter your mail and Subcribe</p>
            <input name="email" placeholder= "email addresss" type="text">
            <button>Subcribe</button>
        </form>
    </div>

    <div class="sidebarThree">
        <button><a href="HtmlFiles/AdvertwithUs.html">ADVERSITE WITH US </a> </button>
        <ol>
            <li>Facebook</li>
            <li>Instagram</li>
            <li>Twitter</li>
            <li>LinkedIn</li>    
            <li>Youtube</li>    
        </ol>
    </div>

    <div class="sidebarFour">
        <ol>
            <li><a href="{{ route('disclaimer.page') }}">Disclamier</a></li>
            <li><a href="{{ route('policy.page') }}">Privacy Policy</a></li>
            <li><a href="{{ route('terms.page') }}">Terms of Services</a></li> 
        </ol>
    </div>

</div>