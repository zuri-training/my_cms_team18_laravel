@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-around align-items-center">
        <h1>{{$template->name}}</h1>
        {{-- @auth
            @if(!(Auth::user()->type === 2 || Auth::user()->type === 1))
                <div>
                    <a href="#" class="btn btn-primary">Save Template</a>
                </div>
            @endif
        @else --}}
            <div>
                <a href="{{route('public.template.modify', $template->id)}}" class="btn btn-primary">Modify Template</a>
            </div>
        {{-- @endauth --}}
    </div>
    <iframe width="100%" height="100%" src="{{route('public.template.iframe', $template->id)}}" style="height: calc(100vh - 50px);"></iframe>
@endsection