@extends('layouts.app')

@section('content')
<div class="container" id="page">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><p >INFINITY TASK</p> </div>

                <div class="panel-body">
                    <img src="{{ asset('im.jpg') }}" width= '798*3' height='366*3' class="img-responsive center-block" />

                </div>
            </div>
        </div>
    </div>
</div>
<div id="loading"></div>
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
