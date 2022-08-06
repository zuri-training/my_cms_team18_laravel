@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-start">
            <div class="col-md-12">
                <h1>
                    <center class="fw-bold">{{ __('My Templates') }}</center>
                </h1>
                <div class="container py-5">
                    <div class="row row-cols-1 row-cols-lg-3">
                        @forelse($templates as $template)
                            <div class="col pb-3 mb-5">
                                <div class="d-flex flex-column align-items-start justify-content-center">
                                    <div class="mb-2"><img
                                            src="https://dummyimage.com/280x170/797ff7/f7f7f7.png&text=Template+Preview" />
                                    </div>
                                    <div class="mb-2">
                                        <strong class="fs-4">{{ $template->name }}</strong>
                                    </div>
                                    <div>
                                        <form method="post" action="{{ route('user.template.destroy', $template->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <a target="_blank" href="{{ route('user.template.preview', $template->id) }}"
                                                class="btn btn-sm btn-success">Preview</a>
                                            <a class="btn btn-sm btn-primary"
                                                href="{{ route('user.template.edit', $template->id) }}">Edit</a>
                                            <button class="btn btn-sm btn-danger">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col">No templates have been saved</div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
