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
                <li><a href="{{ route('job.state', 'LA') }}">LA|Lagos Jobs</a></li>
                <li><a href="{{ route('job.state', 'FC') }}"> FC|Abuja Jobs</a></li>
                <li><a href="{{ route('job.state', 'RI') }}"> PH|Portharcourt Jobs</a></li>
                <li><a href="{{ route('job.state', 'KN') }}">KN|Kano Jobs</a></li>
                <li><a href="{{ route('job.state', 'AB') }}"> AB|Abia Jobs</a></li>
                <li><a href="{{ route('job.state', 'AD') }}">AD|Adamawa Jobs </a></li>
                <li><a href="{{ route('job.state', 'AK') }}">AK|Akwa Ibom Jobs</a></li>
                <li><a href="{{ route('job.state', 'AN') }}">AN|Anambra Jobs</a></li>
                <li><a href="{{ route('job.state', 'BA') }}">BA|Bauchi Jobs</a></li>
                <li><a href="{{ route('job.state', 'BY') }}">BY|Bayelsa Jobs</a></li>
                <li><a href="{{ route('job.state', 'BE') }}">BE|Benue Jobs</a></li>
                <li><a href="{{ route('job.state', 'BO') }}">BO|Borno Jobs</a></li>
            </ol>
        </div>

        <div class="col">
            <ol>
                <li><a href="{{ route('job.state', 'CR') }}">CR|Cross River Jobs</a></li>
                <li><a href="{{ route('job.state', 'EB') }}">EB|Ebonyi Jobs</a></li>
                <li><a href="{{ route('job.state', 'ED') }}">ED|Edo Jobs</a></li>
                <li><a href="{{ route('job.state', 'EK') }}">EK|Ekiti Jobs</a></li>
                <li><a href="{{ route('job.state', 'EN') }}">EN|Enugu Jobs</a></li>
                <li><a href="{{ route('job.state', 'GO') }}">GO|Gombe Jobs</a></li>
                <li><a href="{{ route('job.state', 'IM') }}">IM|Imo Jobs</a></li>
                <li><a href="{{ route('job.state', 'JI') }}">JI|Jigawa Jobs</a></li>
                <li><a href="{{ route('job.state', 'KD') }}">KD|Kaduna Jobs</a></li>
                <li><a href="{{ route('job.state', 'KT') }}">KT|Katsina Jobs</a></li>
                <li><a href="{{ route('job.state', 'KE') }}">KE|Kebbi Jobs</a></li>
                <li><a href="{{ route('job.state', 'KO') }}">KO|Kogi Jobs</a></li>
            </ol>
        </div>

        <div class="col">
            <ol>
                <li><a href="{{ route('job.state', 'KW') }}">KW|Kwara Jobs</a></li>
                <li><a href="{{ route('job.state', 'NA') }}">NA|Nassarawa Jobs</a></li>
                <li><a href="{{ route('job.state', 'NI') }}">NI|Niger Jobs</a></li>
                <li><a href="{{ route('job.state', 'OG') }}">OG|Ogun Jobs</a></li>
                <li><a href="{{ route('job.state', 'ON') }}">ON|Ondo Jobs</a></li>
                <li><a href="{{ route('job.state', 'OS') }}">OS|Osun Jobs</a></li>
                <li><a href="{{ route('job.state', 'OY') }}">OY|Oyo Jobs</a></li>
                <li><a href="{{ route('job.state', 'PL') }}">PL|Plateau Jobs</a></li>
                <li><a href="{{ route('job.state', 'SO') }}">SO|Sokoto Jobs</a></li>
                <li><a href="{{ route('job.state', 'TA') }}">TA|Taraba Jobs</a></li>
                <li><a href="{{ route('job.state', 'YO') }}">YO|Yobe Jobs</a></li>
                <li><a href="{{ route('job.state', 'ZA') }}">ZA|Zamfara Jobs</a></li>
            </ol>
        </div>

    </div>

@endsection
