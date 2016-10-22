<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/custom.css" rel="stylesheet">
    <link href="/css/select2.min.css" rel="stylesheet">


    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
<div class="container-fluid display-table">
    <div class="row display-table-row">
        <div class="col-md-2 display-table-cell valign-top" id="side-menu">
            <h1>MENU</h1>
            <ul>
                <li class="active"><a href="">teste</a></li>
                <li><a href="">teste</a></li>
                <li><a href="">teste</a></li>
                <li><a href="">teste</a></li>
                <li><a href="">#</a></li>
                <li><a href="">#</a></li>
                <li><a href="">#</a></li>
                <li><a href="">#</a></li>
                <li><a href="">#</a></li>
                <li><a href="">#</a></li>
            </ul>
        </div>
        <div class="col-md-10 display-table-cell valign-top">
            @yield('content')
        </div>
    </div>

</div>



<!-- Scripts -->
<script src="/js/app.js"></script>
<script src="/js/select2.min.js"></script>
<script type="text/javascript">
    $(".js-example-basic-multiple").select2();
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $(".js-example-basic-single").select2();
    });
</script>
</body>
</html>