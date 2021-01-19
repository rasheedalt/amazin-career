@extends('layouts.admin-layout')
    <link  href="{{ asset('css/admin/dashboard.css') }}" rel="stylesheet">
@section('content')
<div class="row mt-2">
    <div class="col-md-3 col-sm-4">
        <div class="card bg-muted">
            <div class="card-body bg-primary">
                <p>Contact Inbox</p>
                <h2>0</h >
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-4">
        <div class="card bg-muted">
            <div class="card-body bg-primary">
                <p>Job Requests</p>
                <h2>{{ $jobRequests }}</h >
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-4">
        <div class="card bg-muted">
            <div class="card-body bg-primary">
                <p>Emails</p>
                <h2>{{ $emailCount }}</h >
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-4">
        <div class="card bg-muted">
            <div class="card-body bg-primary">
                <p>Jobs Available</p>
                <h2>{{ $jobs }}</h >
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-4">
        <div class="card bg-muted">
            <div class="card-body bg-primary">
                <p>Business Plan Requests</p>
                <h2>{{ $businessPlan }}</h >
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-4">
        <div class="card bg-muted">
            <div class="card-body bg-primary">
                <p>CV Rewrite Requests</p>
                <h2>{{ $cvs }}</h>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-4">
        <div class="card bg-muted">
            <div class="card-body bg-primary">
                <p>LinkedIn Opt. Requests</p>
                <h2>{{ $linkedInOpt }}</h>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-4">
        <div class="card bg-muted">
            <div class="card-body bg-primary">
                <p>Cover Letter Requests</p>
                <h2>{{ $coverLetters }}</h>
            </div>
        </div>
    </div>
    
</div>
       <!-- <div id="maincontent">
            <div class="CI">
                <p>Contact Inbox</p>
                <h2>0</h >
            </div>
            <div class="PJR">
                <p>Post Job Requests</p>
                <h2>{{ $jobRequests }}</h>
            </div>
        </div>

        <div id="maincontent2">
            <div class="EmailCL">
                <ol>
                    <a href="AddMail.html"><li> Add Mail</li></a>
                    <a href="RemoveMail.html"><li> Remove Mail</li></a>
                    <a href="SendUP.html"><li> Send Update</li></a>
                </ol>
            </div>
        </div>

        <div id="maincontent3"> 
            
            <div class="DV">
                
            </div>
        </div>

        
       -->
       <!-- Mobile View-->
<!-- 
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
    </div>  -->

 

    <!-- <div id="MobStat1"> 
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
    </div> -->
</div>
@endsection
