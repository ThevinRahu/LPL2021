<!DOCTYPE html>
<html lang="en">

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Lanka Premier League 2021</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="icon" href="{{URL::asset('/image/download111.jpg')}}" type="image/x-icon">

    <!-- Styles -->
    <style>
    /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
    html {
        line-height: 1.15;
        -webkit-text-size-adjust: 100%
    }

    body {
        margin: 0
    }

    a {
        background-color: transparent
    }

    [hidden] {
        display: none
    }

    html {
        font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
        line-height: 1.5
    }

    *,
    :after,
    :before {
        box-sizing: border-box;
        border: 0 solid #e2e8f0
    }

    a {
        color: inherit;
        text-decoration: inherit
    }

    svg,
    video {
        display: block;
        vertical-align: middle
    }

    video {
        max-width: 100%;
        height: auto
    }

    .bg-white {
        --bg-opacity: 1;
        background-color: #fff;
        background-color: rgba(255, 255, 255, var(--bg-opacity))
    }

    .bg-gray-100 {
        --bg-opacity: 1;
        background-color: #f7fafc;
        background-color: rgba(247, 250, 252, var(--bg-opacity))
    }

    .border-gray-200 {
        --border-opacity: 1;
        border-color: #edf2f7;
        border-color: rgba(237, 242, 247, var(--border-opacity))
    }

    .border-t {
        border-top-width: 1px
    }

    .flex {
        display: flex
    }

    .grid {
        display: grid
    }

    .hidden {
        display: none
    }

    .items-center {
        align-items: center
    }

    .justify-center {
        justify-content: center
    }

    .font-semibold {
        font-weight: 600
    }

    .h-5 {
        height: 1.25rem
    }

    .h-8 {
        height: 2rem
    }

    .h-16 {
        height: 4rem
    }

    .text-sm {
        font-size: .875rem
    }

    .text-lg {
        font-size: 1.125rem
    }

    .leading-7 {
        line-height: 1.75rem
    }

    .mx-auto {
        margin-left: auto;
        margin-right: auto
    }

    .ml-1 {
        margin-left: .25rem
    }

    .mt-2 {
        margin-top: .5rem
    }

    .mr-2 {
        margin-right: .5rem
    }

    .ml-2 {
        margin-left: .5rem
    }

    .mt-4 {
        margin-top: 1rem
    }

    .ml-4 {
        margin-left: 1rem
    }

    .mt-8 {
        margin-top: 2rem
    }

    .ml-12 {
        margin-left: 3rem
    }

    .-mt-px {
        margin-top: -1px
    }

    .max-w-6xl {
        max-width: 72rem
    }

    .min-h-screen {
        min-height: 100vh
    }

    .overflow-hidden {
        overflow: hidden
    }

    .p-6 {
        padding: 1.5rem
    }

    .py-4 {
        padding-top: 1rem;
        padding-bottom: 1rem
    }

    .px-6 {
        padding-left: 1.5rem;
        padding-right: 1.5rem
    }

    .pt-8 {
        padding-top: 2rem
    }

    .fixed {
        position: fixed
    }

    .relative {
        position: relative
    }

    .top-0 {
        top: 0
    }

    .right-0 {
        right: 0
    }

    .shadow {
        box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
    }

    .text-center {
        text-align: center
    }

    .text-gray-200 {
        --text-opacity: 1;
        color: #edf2f7;
        color: rgba(237, 242, 247, var(--text-opacity))
    }

    .text-gray-300 {
        --text-opacity: 1;
        color: #e2e8f0;
        color: rgba(226, 232, 240, var(--text-opacity))
    }

    .text-gray-400 {
        --text-opacity: 1;
        color: #cbd5e0;
        color: rgba(203, 213, 224, var(--text-opacity))
    }

    .text-gray-500 {
        --text-opacity: 1;
        color: #a0aec0;
        color: rgba(160, 174, 192, var(--text-opacity))
    }

    .text-gray-600 {
        --text-opacity: 1;
        color: #718096;
        color: rgba(113, 128, 150, var(--text-opacity))
    }

    .text-gray-700 {
        --text-opacity: 1;
        color: #4a5568;
        color: rgba(74, 85, 104, var(--text-opacity))
    }

    .text-gray-900 {
        --text-opacity: 1;
        color: #1a202c;
        color: rgba(26, 32, 44, var(--text-opacity))
    }

    .underline {
        text-decoration: underline
    }

    .antialiased {
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale
    }

    .w-5 {
        width: 1.25rem
    }

    .w-8 {
        width: 2rem
    }

    .w-auto {
        width: auto
    }

    .grid-cols-1 {
        grid-template-columns: repeat(1, minmax(0, 1fr))
    }

    @media (min-width:640px) {
        .sm\:rounded-lg {
            border-radius: .5rem
        }

        .sm\:block {
            display: block
        }

        .sm\:items-center {
            align-items: center
        }

        .sm\:justify-start {
            justify-content: flex-start
        }

        .sm\:justify-between {
            justify-content: space-between
        }

        .sm\:h-20 {
            height: 5rem
        }

        .sm\:ml-0 {
            margin-left: 0
        }

        .sm\:px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .sm\:pt-0 {
            padding-top: 0
        }

        .sm\:text-left {
            text-align: left
        }

        .sm\:text-right {
            text-align: right
        }
    }

    @media (min-width:768px) {
        .md\:border-t-0 {
            border-top-width: 0
        }

        .md\:border-l {
            border-left-width: 1px
        }

        .md\:grid-cols-2 {
            grid-template-columns: repeat(2, minmax(0, 1fr))
        }
    }

    @media (min-width:1024px) {
        .lg\:px-8 {
            padding-left: 2rem;
            padding-right: 2rem
        }
    }

    @media (prefers-color-scheme:dark) {
        .dark\:bg-gray-800 {
            --bg-opacity: 1;
            background-color: #2d3748;
            background-color: rgba(45, 55, 72, var(--bg-opacity))
        }

        .dark\:bg-gray-900 {
            --bg-opacity: 1;
            background-color: #1a202c;
            background-color: rgba(26, 32, 44, var(--bg-opacity))
        }

        .dark\:border-gray-700 {
            --border-opacity: 1;
            border-color: #4a5568;
            border-color: rgba(74, 85, 104, var(--border-opacity))
        }

        .dark\:text-white {
            --text-opacity: 1;
            color: #fff;
            color: rgba(255, 255, 255, var(--text-opacity))
        }

        .dark\:text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
        }

        .dark\:text-gray-500 {
            --tw-text-opacity: 1;
            color: #6b7280;
            color: rgba(107, 114, 128, var(--tw-text-opacity))
        }

        a {
            text-decoration: none !important;
        }
    }
    </style>

    <style>
    body {
        font-family: 'Nunito', sans-serif;
    }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
    <center>
        <img src="{{URL::asset('/image/download111.jpg')}}" alt="profile Pic" height="300" width="300">
    </center>
    <br><br>
    <center>
        <h1 class="display-1">Teams</h1>
    </center>
    <table class="table table-dark table-striped">
        <tr>
            <th class="table-primary" style="text-align:center">Teams</th>
            <th class="table-primary" style="text-align:center">Jaffna Kings</th>
            <th class="table-secondary" style="text-align:center">Colombo Stars</th>
            <th class="table-success" style="text-align:center">Galle Gladiators</th>
            <th class="table-danger" style="text-align:center">Kandy Warriors</th>
            <th class="table-warning" style="text-align:center">Dambulla Giants</th>
        </tr>
        <tr>
            <th class="table-primary" style="text-align:center">Logo</th>

            <td class="table-primary" style="text-align:center"><img src="{{URL::asset('/image/download1.png')}}"
                    alt="profile Pic" height="100" width="100"></td>
            <td class="table-secondary" style="text-align:center"><img src="{{URL::asset('/image/download2.png')}}"
                    alt="profile Pic" height="100" width="100"></td>
            <td class="table-success" style="text-align:center"><img src="{{URL::asset('/image/download3.jpg')}}"
                    alt="profile Pic" height="100" width="100"></td>
            <td class="table-danger" style="text-align:center"><img src="{{URL::asset('/image/download4.png')}}"
                    alt="profile Pic" height="100" width="100"></td>
            <td class="table-warning" style="text-align:center"><img src="{{URL::asset('/image/download5.jpg')}}"
                    alt="profile Pic" height="100" width="100"></td>
        </tr>
        <tr>
            <th class="table-primary" style="text-align:center">Captain</th>
            <td class="table-primary" style="text-align:center">Thisara Perera</td>
            <td class="table-secondary" style="text-align:center">Angelo Mathews</td>
            <td class="table-success" style="text-align:center">Bhanuka Rajapaksa</td>
            <td class="table-danger" style="text-align:center">Angelo Perera</td>
            <td class="table-warning" style="text-align:center">Dasun Shanaka</td>
        </tr>
        <tr>
            <th class="table-primary" style="text-align:center">Coach</th>
            <td class="table-primary" style="text-align:center">Thilina Kandamby</td>
            <td class="table-secondary" style="text-align:center">Ruwan Kalpage</td>
            <td class="table-success" style="text-align:center">Umar Gul</td>
            <td class="table-danger" style="text-align:center">Lalchand Rajput</td>
            <td class="table-warning" style="text-align:center">Stuart Law</td>
        </tr>
    </table>
    <hr>
    <center>
        <h1 class="display-1">Players</h1>
    </center>
    <br>
    <center>
        <h4>Enter Players</h4>
    </center>
    @foreach($errors->all() as $error)
    <div class="alert alert-danger" role="alert">
        {{$error}}

    </div>
    @endforeach
    <form class="input-group mb-3" method="post" action="/saveplayer">
        {{ csrf_field() }}
        <input type="text" name="pname" class="form-control" placeholder="Name">
        <input type="text" name="country" class="form-control" placeholder="Country">
        <input type="text" name="pteam" class="form-control" placeholder="Team">
        <input type="text" name="nic" class="form-control" placeholder="NIC">
        <input type="text" name="mobile" class="form-control" placeholder="Mobile No">
        <input type="submit" name="submit" class="btn btn-success" value="Submit">

    </form>
    <br>
    <center>
        <p>(Click Player to Update)</p>
    </center>
    <center>
        <h2>Jaffna Kings</h2>
    </center>
    <table class="table table-dark table-hover">
        <tr style="text-align:center">
            <th>Name</th>
            <th>Country</th>
            <th>Delete</th>
        </tr>
        @foreach($data as $data6)
        @if($data6->team == 'Jaffna Kings')
        <tr style="text-align:center">
            <td><a href="/playerupdate/{{$data6->id}}">{{$data6->name}}</a></td>
            <td>{{$data6->country}}</td>
            <td><a href="/delete/{{$data6->id}}" type="button" class="btn btn-danger">Delete</a></td>
        </tr>
        @endif
        @endforeach
    </table>
    <center>
        <h2>Colombo Stars</h2>
    </center>
    <table class="table table-dark table-hover">
        <tr style="text-align:center">
            <th>Name</th>
            <th>Country</th>
            <th>Delete</th>
        </tr>
        @foreach($data as $data2)
        @if($data2->team == 'Colombo Stars')
        <tr style="text-align:center">
            <td><a href="/playerupdate/{{$data2->id}}">{{$data2->name}}</a></td>
            <td>{{$data2->country}}</td>
            <td><a href="/delete/{{$data2->id}}" type="button" class="btn btn-danger">Delete</a></td>
        </tr>
        @endif
        @endforeach
    </table>
    <center>
        <h2>Galle Gladiators</h2>
    </center>
    <table class="table table-dark table-hover">
        <tr style="text-align:center">
            <th>Name</th>
            <th>Country</th>
            <th>Delete</th>
        </tr>
        @foreach($data as $data3)
        @if($data3->team == 'Galle Gladiators')
        <tr style="text-align:center">
            <td><a href="/playerupdate/{{$data3->id}}">{{$data3->name}}</a></td>
            <td>{{$data3->country}}</td>
            <td><a href="/delete/{{$data3->id}}" type="button" class="btn btn-danger">Delete</a></td>
        </tr>
        @endif
        @endforeach
    </table>
    <center>
        <h2>Kandy Warriors</h2>
    </center>
    <table class="table table-dark table-hover">
        <tr style="text-align:center">
            <th>Name</th>
            <th>Country</th>
            <th>Delete</th>
        </tr>
        @foreach($data as $data4)
        @if($data4->team == 'Kandy Warriors')
        <tr style="text-align:center">
            <td><a href="/playerupdate/{{$data4->id}}">{{$data4->name}}</a></td>
            <td>{{$data4->country}}</td>
            <td><a href="/delete/{{$data4->id}}" type="button" class="btn btn-danger">Delete</a></td>
        </tr>
        @endif
        @endforeach
    </table>
    <center>
        <h2>Dambulla Giants</h2>
    </center>
    <table class="table table-dark table-hover">
        <tr style="text-align:center">
            <th>Name</th>
            <th>Country</th>
            <th>Delete</th>
        </tr>
        @foreach($data as $data5)
        @if($data5->team == 'Dambulla Giants')
        <tr style="text-align:center">
            <td><a href="/playerupdate/{{$data5->id}}">{{$data5->name}}</a></td>
            <td>{{$data5->country}}</td>
            <td><a href="/delete/{{$data5->id}}" type="button" class="btn btn-danger">Delete</a></td>
        </tr>
        @endif
        @endforeach
    </table>
    <center>
        <h1>By Countries</h1>
        <ul class="list-group">
            @foreach($countries as $countries)
            <li class="list-group-item list-group-item-info">
                {{$countries->country}}
                <p style="color:red; font-size:20px">{{$countries->count}}</p>
            </li>
            @endforeach
        </ul>
    </center>
    <hr>
    <center>
        <h1 class="display-1">Matches</h1>
    </center>
    <br>
    <center>
        <h4>Enter Matches</h4><br>
        <p>(Enter teams on match stats before entering matches)
    </center>

    <form class="input-group mb-3" method="post" action="/savematch">
        {{ csrf_field() }}
        <input type="text" name="matchno" class="form-control" placeholder="Match No">
        <input type="text" name="team1" class="form-control" placeholder="Team 1">
        <input type="text" name="team2" class="form-control" placeholder="Team 2">
        <input type="submit" name="submit" class="btn btn-success" value="Submit">

    </form>
    <br>
    <table class="table table-striped">
        <tr>
            <th style="text-align:center">Match No</th>
            <th style="text-align:center">Team 1</th>
            <th style="text-align:center">Team 2</th>
            <th style="text-align:center">Result</th>
            <th style="text-align:center">Won</th>
        </tr>
        @foreach($datam as $datam)
        <tr style="text-align:center">
            <td>{{$datam->matchno}}</td>
            <td>{{$datam->team1}}</td>
            <td>{{$datam->team2}}</td>
            @if($datam->won == '')
            <td><a href="/won1/{{$datam->matchno}}" type="button" class="btn btn-primary">{{$datam->team1}}</a><a
                    href="/won2/{{$datam->matchno}}" type="button" class="btn btn-primary">{{$datam->team2}}</a><a
                    href="/nr/{{$datam->matchno}}" type="button" class="btn btn-warning">N/R</button></td>
            @else
            <td><button type="button" class="btn btn-primary" disabled>{{$datam->team1}}</button><button type="button"
                    class="btn btn-primary" disabled>{{$datam->team2}}</button><button type="button"
                    class="btn btn-warning" disabled>N/R</button></td>

            @endif
            <td>{{$datam->won}}</td>
        </tr>
        @endforeach
    </table>
    <hr>
    <center>
        <h1 class="display-1">Match Stats</h1>
    </center>
    <br>
    <center>
        <h4>Enter Teams</h4>
    </center>
    <form class="input-group mb-3" method="post" action="/saveteam">
        {{ csrf_field() }}
        <input type="text" name="team1" class="form-control" placeholder="Team">
        <input type="submit" name="submit" class="btn btn-success" value="Submit">

    </form>
    <table style="text-align:center" class="table table-bordered table-dark">
        <tr style="text-align:center">
            <th>Team</th>
            <th>Won</th>
            <th>Lost</th>
            <th>N/R</th>
            <th>Points</th>
        </tr>
        @foreach($stats as $stats)
        <tr style="text-align:center">
            <td>{{$stats->team}}</td>
            <td>{{$stats->won}}</td>
            <td>{{$stats->lost}}</td>
            <td>{{$stats->nr}}</td>
            <td>{{$stats->points}}</td>
        </tr>
        @endforeach
    </table>
    <hr><br>
    <center>
        <h1 class="display-1">Player Stats</h1><br>
        <center>
            <h4>Enter Player Stats</h4>
        </center>
        <form class="input-group mb-3" method="post" action="/saveplayerstatbat">
            {{ csrf_field() }}
            <input type="text" name="ppname" class="form-control" placeholder="Name">
            <input type="text" name="ppteam" class="form-control" placeholder="Team">
            <input type="text" name="score" class="form-control" placeholder="Stat">
            <input type="submit" name="bat" class="btn btn-success" value="Bat">

        </form>
        <form class="input-group mb-3" method="post" action="/saveplayerstatbowl">
            {{ csrf_field() }}
            <input type="text" name="pppname" class="form-control" placeholder="Name">
            <input type="text" name="pppteam" class="form-control" placeholder="Team">
            <input type="text" name="scoreb" class="form-control" placeholder="Stat">
            <input type="submit" name="bowl" class="btn btn-success" value="Bowl">

        </form><br>

        <ul class="list-group">
            <li class="list-group-item active">50+ Scores</li>
            @foreach($pstat as $pstat1)
            @if($pstat1->bat == 1)
            <li class="list-group-item">{{$pstat1->name}} - {{$pstat1->team}} - {{$pstat1->score}}</li>
            @endif
            @endforeach
        </ul><br>
        <ul class="list-group">
            <li class="list-group-item active">3+ Wickets</li>
            @foreach($pstat as $pstat2)
            @if($pstat2->bowl == 1)
            <li class="list-group-item">{{$pstat2->name}} - {{$pstat2->team}} - {{$pstat2->score}}</li>
            @endif
            @endforeach
        </ul>

    </center><br>
    <div id="chart" style="height: 400px;"></div>
    <!-- Charting library -->
    <script src="https://unpkg.com/echarts/dist/echarts.min.js"></script>
    <!-- Chartisan -->
    <script src="https://unpkg.com/@chartisan/echarts/dist/chartisan_echarts.js"></script>
    <!-- Your application script -->
    <script>
    const chart = new Chartisan({
        el: '#chart',
        url: "@chart('/index')",
    });
    </script>
</body>

</html>