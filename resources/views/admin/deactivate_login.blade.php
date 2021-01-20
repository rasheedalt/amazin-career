@extends('layouts.admin-layout')
    <link  href="{{ asset('css/admin/dashboard.css') }}" rel="stylesheet">
@section('more-styles')

<style>
        .GL {
            padding: 12px;
            background-color: #072638;
            color: white;
        }
        .DL {
            padding: 12px;
            background-color: #072638;
            color: white;
        }

        .PostJ button{
        /* width: 100px; */
        /* padding: 10px; */
        border-style: none;
        background-color: red;
        color: white;
        border-radius: 3px;
        font-family: tahoma;
        font-size: 14px;
       }
       .PostJ button:hover {
        background-color: #072638;
        color: white;
        transition: 0.8s ease;
        }

        .sideG {
            
            padding-top: 20px;
            background-color:#E3E3E3;
        }
        .sideG ul a {
            text-decoration: none;
            list-style: none;
            color:  #072638;
            font-family: tahoma;
            font-size: 15px;
            
        }
        .sideG ul a li {
            padding: 12px;
            padding-left: 29px;
            border-bottom-style: solid;
            border-color: white;
            border-width: 1px;
        }
        .sideG ul li:hover {
            background-color: #072638;
            color: white;
            transition: 1s ease;
        }
        ul{
            list-style-type:none;
        }

    </style>
@endsection

@section('content')
<div id="maincontent" class="my-2">
        <h3>MANAGE LOGIN</h3>
        <hr>
        <div class="row">
            <div class="col-md-3">
                <div class= "sideG">
                    <ul>
                        <a href="{{ route('login.generate') }}"><li>New Login</li></a>
                        <li Class = "DL"> Deactivite Login</li>
                        
                    </ul>
                </div>
            </div>
            <div class="col-md-9">
                <div class="PostJ">
                            @foreach($users as $user)
                            <tr>
                                <form method="post" action="{{ route('login.deactivate', $user->id) }}" >
                                    @csrf
                                    <div class="row mb-1">
                                        <div class="col-8">
                                            <td>{{ strtolower($user->email) }}</td>
                                        </div>
                                        <div class="col-2">
                                            <td><button class="btn" style="{{ !$user->is_active ? 'background-color:green;' : '' }}">{{ $user->is_active ? 'Deactivate' : 'Activate'}}</button> <br/></td>
                                        </div>
                                    </div>
                            </form>
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

</div>
@endsection