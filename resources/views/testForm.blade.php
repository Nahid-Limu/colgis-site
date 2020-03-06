<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>

<body>
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ url('/home') }}">Home</a>
            @else
            <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
            @endif
            @endauth
        </div>
        @endif

        <div class="content">
            <div class="row justify-content-center">
                <div class="panel panel-info">
                    <div class="panel-heading">Delivery upload</div>
                    <div class="container">
                        @if ($errors)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif


                        {{-- @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                        </ul>
                    </div>
                    @endif --}}

                    @if ($message = Session::get('warning '))
                    <div class="alert alert-warning ">
                        <p>{{ $message }}</p>
                    </div>
                    @endif
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                    @endif
                    <form method="POST" action="{{ route('submit') }}" enctype="multipart/form-data">
                        @csrf
                        <br>

                        {{-- <div class="form-group row">
                        <div class="col-md-6">
                                <label for="sel1">Select File:</label>
                        </div>
                        <div class="col-md-6">
                                <input type="file" class="form-control-file" id="csv_file" name="csv_file">
                        </div>
                    </div> --}}
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="sel1">name</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control-file" id="name" name="name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="sel1">email:</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control-file" id="email" name="email">
                            </div>
                        </div>
                        <div class="form-group row">

                            <div class="col-md-6">
                                <input type="submit" class="btn btn-success" id="" value="okk">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>