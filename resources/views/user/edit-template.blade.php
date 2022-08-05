@extends('layouts.app')

@section('extra-css')
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/grapesjs/dist/css/grapes.min.css">
    <link rel="stylesheet" href="https://grapesjs.com/stylesheets/grapesjs-preset-webpage.min.css">
@endsection

@section('extra-js')
    <script src="https://unpkg.com/grapesjs"></script>
    <script src="https://grapesjs.com/js/grapesjs-preset-webpage.min.js?v0.1.11"></script>
@endsection

@section('content')
    <div class="d-flex justify-content-around align-items-center">
        <p>Template Name: <input type="text" id="template-name" value="{{ $template->name }}"></p>
        @include('includes.status')
        @include('includes.errors')
        <div>
            <button id="update-template" type="submit" class="btn btn-success">Update Template</button>
        </div>
        <form id="template-form" method="post" action="{{ route('user.template.update', $template->id) }}">
            @csrf
            @method('PUT')
            <input type="hidden" id="form-name" name="name" value="{{ old('name', $template->name) }}">
            <input type="hidden" id="form-html" name="content_html"
                value="{{ old('content_html', $template->content_html) }}">
            <input type="hidden" id="form-css" name="content_css"
                value="{{ old('content_css', $template->content_css) }}">
        </form>

    </div>

    <div name="template" id="gjs"></div>

    <script type="text/javascript">
        var editor = grapesjs.init({
            container: '#gjs',
            plugins: ['gjs-preset-webpage'],
            storageManager: false,
        });

        editor.setComponents(document.getElementById('form-html').value);
        editor.setStyle(document.getElementById('form-css').value);

        document.getElementById('update-template').addEventListener("click", function(event) {
            const html = editor.getHtml();
            const css = editor.getCss();
            const template_name = document.getElementById('template-name').value;

            document.getElementById('form-html').value = html;
            document.getElementById('form-css').value = css;
            document.getElementById('form-name').value = template_name;

            // alert(document.getElementById('form-name').value);
            document.getElementById('template-form').submit();
        });
    </script>
@endsection
