@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-around align-items-center">
        <h1>{{ $template->name }}</h1>
        <div>
            <a href="{{ route('user.template.edit', $template->id) }}" class="btn btn-primary">Edit Template</a>
        </div>
    </div>
    <iframe width="100%" height="100%" src="{{ route('user.template.iframe', $template->id) }}"
        style="height: calc(100vh - 50px);"></iframe>
@endsection
