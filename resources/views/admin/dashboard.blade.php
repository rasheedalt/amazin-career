@extends('layouts.admin-layout')
    <link  href="{{ asset('css/admin/dashboard.css') }}" rel="stylesheet">
@section('content')
<div id="sidebar">
            <ol>
                <a href="PostJob.html"><li> Post Vacancies</li></a>
                <a href="Schoarship.html"><li> Post Scholarships</li></a>
                <a href="BlogP.html"><li> Blog Post</li></a>
                <a href="GenerateLogin.html"><li> Generate Login </li></a>
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

       <div id="maincontent">
            <div class="CI">
                <p>Contact Inbox</p>
                <h2>36</h >
            </div>
            <div class="PJR">
                <p>Post Job Requests</p>
                <h2>6</h>
            </div>
        </div>

        <div id="maincontent2">
            <div class="Emails">
                <p>Email Subcription</p>
                <h2>36</h >
            </div>
            <div class="EmailCL">
                <ol>
                    <a href="AddMail.html"><li> Add Mail</li></a>
                    <a href="RemoveMail.html"><li> Remove Mail</li></a>
                    <a href="SendUP.html"><li> Send Update</li></a>
                </ol>
            </div>
        </div>

        <div id="maincontent3"> 
            <div class="WV">
                <p>Website Visitors</p>
                <h2>36.123</h >
            </div>
            <div class="DV">
                <p>Daily visitors</p>
                <h2>23,122</h>
            </div>
        </div>

        <div id="maincontent4"> 
        
            <div class="DCC">
                <p>Daily Click Counts</p>
                <h2>36.123</h >
            </div>

            <div class="MV">
                <p>Monthly visitors</p>
                <h2>23,122</h>
            </div>

            <div class="WV">
                <p>Weekly visitors</p>
                <h2>23,122</h>
            </div>
       </div>
        
       <!-- Mobile View-->

       <div id="MobSidebar">
        <ol>
            <a href="PostJob.html"><li> Post Vacancies</li></a>
            <a href="Schoarship.html"><li> Post Scholarships</li></a>
            <a href="BlogP.html"><li> Blog Post</li></a>
        </ol>

    </div>

    <div id="MobSidebar1">
        <ol>
            <a href="GenerateLogin.html"><li> Generate Login </li></a>
            <a href="ChangeP.html"><li> Change Password</li></a>
            <a href="Index.html"><li> Log Out</li></a>
        </ol>
    </div>

 

    <div id="MobStat1"> 
        <div class="WV">
            <p>Daily Click Counts</p>
            <h2>36,123</h >
        </div>

        <div class="DCC">
            <p>Monthly visitors</p>
            <h2>23,122</h>
        </div>
   </div>

   <div id="MobStat2"> 
    
    <div class="DV">
        <p>Weekly visitors</p>
        <h2>23,122</h>
    </div>

    <div class="MV">
        <p>Monthly visitors</p>
        <h2>23,122</h>
    </div>
</div>
@endsection
