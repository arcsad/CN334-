<!DOCTYPE html>
<html>
    <head>
        <title>503</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                color: #B0BEC5;
                display: table;
                font-weight: 100;
                font-family: 'Lato';

            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 72px;
                margin-bottom: 40px;
            }
            a {
                all: unset;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <img src = "{{ asset('error.svg') }}" width= '500' height ='500' class="img-responsive center-block">
                <h2>Oops!</h2>
                <p>sorry ,no data found</p>
               <div style="padding: 10px"> <button type="button" class="btn btn-danger" style="border: 1px solid black;background-color: #434343;"><a href = "{{ url('/') }}" >กลับหน้าหลัก</a></button> </div>
            </div>
        </div>
    </body>

</html>
