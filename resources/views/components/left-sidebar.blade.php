<div id="sidebar">
    <div class="sidebarOne">
        <h3>JOBS BY STATES</h3>
        <ol>
            <li><a href="HtmlFiles/LagosJobs.html">Jobs in Lagos</a></li>
            <li><a href="HtmlFiles/AbujaJobs.html">Jobs in Abuja</a></li>
            <li><a href="HtmlFiles/PorthaecourtJobs.html">Jobs in Portharcourt</a></li>
            <li><a href="HtmlFiles/KanoJobs.html">Jobs in Kano</a></li>
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
            <li><a href="HtmlFiles/Disclamier.html">Disclamier</a></li>
            <li><a href="HtmlFiles/Policy.html">Privacy Policy</a></li>
            <li><a href="HtmlFiles/Terms.html">Terms of Services</a></li> 
        </ol>
    </div>

</div>