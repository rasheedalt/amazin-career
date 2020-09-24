@extends('layouts.main-layout')
<style>
    ol li {
            /* padding-left: 15px; */
            /* text-align: center; */
            padding-bottom: 5px;
            padding-top: 5px;
            margin: 5px;
            list-style: none;
       }
</style>
<!-- <style>
        .OthJobs {
            color: #072638;
        }
        .home {
            color: #072638;
            height: 20px;
            Background-color: #F2EDED;
            border-radius: 5px;
            padding-top: 8px;
            padding-left: 20px;
            padding-right: 20px;
            padding-bottom: 8px;
        }
        #maincontent{
            height: 200px;
            
        }

        .post1 {
            padding: 50px;
            float: left;
           
       }
       .post1 ol li {
            padding-left: 15px;
            padding-bottom: 5px;
            padding-top: 5px;
            margin: 5px;
            list-style: none;
       }
       .post1 ol li a {
            text-decoration: none;
            color: #02977D;
        }
        .post1 ol li a:hover {
            color:  #072638;
            border-bottom-style: solid;
            border-width: 1px;
            border-color: #072638;
        }
        .post2 {
            padding: 50px;
            float: left;
           
       }
       .post2 ol li {
            padding-left: 15px;
            padding-bottom: 5px;
            padding-top: 5px;
            margin: 5px;
            list-style: none;
       }
       .post2 ol li a {
            text-decoration: none;
            color: #02977D;
        }
        .post2 ol li a:hover {
            color:  #072638;
            border-bottom-style: solid;
            border-width: 1px;
            border-color: #072638;
        }
        .post3 {
            padding: 50px;
            float: left;
           
       }
       .post3 ol li {
            padding-left: 15px;
            padding-bottom: 5px;
            padding-top: 5px;
            margin: 5px;
            list-style: none;
       }
       .post3 ol li a {
            text-decoration: none;
            color: #02977D;
        }
        .post3 ol li a:hover {
            color:  #072638;
            border-bottom-style: solid;
            border-width: 1px;
            border-color: #072638;
        }
        .nextBTN {
            Clear: both;
        }
</style> -->

@section('main')
    <h3>JOB VACANCIES IN OTHER STATES</h3>
    <div class="row">
        <div class="col">
            <ol>
                <li><a href="LagosJobs.html">LA|Lagos Jobs</a></li>
                <li><a href="AbujaJobs.html"> FC|Abuja Jobs</a></li>
                <li><a href="PorthaecourtJobs.html"> PH|Portharcourt Jobs</a></li>
                <li><a href="KanoJobs.html">KN|Kano Jobs</a></li>
                <li><a href="AB.html"> AB|Abia Jobs</a></li> 
                <li><a href="AD.html">AD|Adamawa Jobs </a></li>
                <li><a href="Ak.html">AK|Akwa Ibom Jobs</a></li>
                <li><a href="AN.html">AN|Anambra Jobs</a></li>
                <li><a href="BA.html">BA|Bauchi Jobs</a></li>
                <li><a href="BY.html">BY|Bayelsa Jobs</a></li>
                <li><a href="BE.html">BE|Benue Jobs</a></li>
                <li><a href="BO.html">BO|Borno Jobs</a></li>
            </ol>
        </div>

        <div class="col">
            <ol>
                <li><a href="CR.html">CR|Cross River Jobs</a></li>
                <li><a href="EB.html">EB|Ebonyi Jobs</a></li>
                <li><a href="ED.html">ED|Edo Jobs</a></li>
                <li><a href="EK.html">EK|Ekiti Jobs</a></li>
                <li><a href="EN.html">EN|Enugu Jobs</a></li>
                <li><a href="GO.html">GO|Gombe Jobs</a></li>
                <li><a href="IM.html">IM|Imo Jobs</a></li>
                <li><a href="JI.html">JI|Jigawa Jobs</a></li>
                <li><a href="KD.html">KD|Kaduna Jobs</a></li>
                <li><a href="KT.html">KT|Katsina Jobs</a></li>
                <li><a href="KE.html">KE|Kebbi Jobs</a></li>
                <li><a href="KO.html">KO|Kogi Jobs</a></li>
            </ol>
        </div>

        <div class="col">
            <ol>
                <li><a href="KW.html">KW|Kwara Jobs</a></li>
                <li><a href="NA.html">NA|Nassarawa Jobs</a></li>
                <li><a href="NI.html">NI|Niger Jobs</a></li>
                <li><a href="OG.html">OG|Ogun Jobs</a></li>
                <li><a href="ON.html">ON|Ondo Jobs</a></li>
                <li><a href="OS.html">OS|Osun Jobs</a></li>
                <li><a href="OY.html">OY|Oyo Jobs</a></li>
                <li><a href="PL.html">PL|Plateau Jobs</a></li>
                <li><a href="SO.html">SO|Sokoto Jobs</a></li>
                <li><a href="TA.html">TA|Taraba Jobs</a></li>
                <li><a href="YO.html">YO|Yobe Jobs</a></li>
                <li><a href="ZA.html">ZA|Zamfara Jobs</a></li>
            </ol>
        </div>

    </div>

@endsection