@extends('layouts.app')

@section('content')
    <div class="container" id="page">

    </div>
    <div id="loading">

    </div>
    <script>function onReady(callback) {

            var intervalID = window.setInterval(checkReady, 1000);

            function checkReady() {
                if (document.getElementsByTagName('body')[0] !== undefined) {
                    window.clearInterval(intervalID);
                    callback.call(this);
                }
            }
        }

        function show(id, value) {
            document.getElementById(id).style.display = value ? 'block' : 'none';
        }

        onReady(function () {
            show('page', true);
            show('loading', false);
        });</script>

@endsection
