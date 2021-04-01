<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title-block')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
    @include('inc/header')

    <div class="container mt-5">
        <div class="row">
            <div class="col-8">
                @yield('content')
                <div class="col-8">
                    <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                        <li><form action="{{ route('firstpage') }}">
                                <div>
                                    <button type="submit" class="btn btn-success">1 страница</button>
                                </div>
                            </form></li>
                        <li><form action="{{ route('secondpage') }}">
                                <div>
                                    <button type="submit" class="btn btn-success">2 страница</button>
                                </div>
                            </form></li>
                        <li><form action="{{ route('thirdpage') }}">
                                <div>
                                    <button type="submit" class="btn btn-success">3 страница</button>
                                </div>
                            </form></li>
                        <li><form action="{{ route('fourthpage') }}">
                                <div>
                                    <button type="submit" class="btn btn-success">4 страница</button>
                                </div>
                            </form></li>
                        <li><form action="{{ route('fifthpage') }}">
                                <div>
                                    <button type="submit" class="btn btn-success">5 страница</button>
                                </div>
                            </form></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @include('inc/footer')
</body>
</html>
