@extends('layouts.app')

@section('extra-css')
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/grapesjs/dist/css/grapes.min.css">
    <link rel="stylesheet" href="https://grapesjs.com/stylesheets/grapesjs-preset-webpage.min.css">
    <style>
        #old_template{
            display: none;
        }
    </style>
@endsection

@section('extra-js')
    <script src="https://unpkg.com/grapesjs"></script>
    <script src="https://grapesjs.com/js/grapesjs-preset-webpage.min.js?v0.1.11"></script>
@endsection

@section('content')
    <div class="d-flex justify-content-around align-items-center">
        <h1>{{ $template->name }}</h1>
        @include('includes.status')
        @include('includes.errors')
        <div>
            <button id="save-template" type="submit" class="btn btn-success">Save Template</button>
        </div>
        <form id="template-form" method="post" action="{{route('user.template.store')}}">
            @csrf
            <input type="hidden" name="template" value="{{$template->id}}">
            <input type="hidden" name="html" value="" id="form-html">
            <input type="hidden" name="css" value="" id="form-css">
        </form>

    </div>
    <div id="old_template">{!! $template->content !!}</div>
    <div name="template" id="gjs"></div>

    <script type="text/javascript">
        var editor = grapesjs.init({
            container: '#gjs',
            plugins: ['gjs-preset-webpage']
        });
        editor.setComponents(document.getElementById('old_template').innerHTML);

        document.getElementById('save-template').addEventListener("click", function (event) {
            const html = editor.getHtml();
            const css = editor.getCss();
            document.getElementById('form-html').value = html;
            document.getElementById('form-css').value = css;
            document.getElementById('template-form').submit();
        });

    </script>
@endsection
