@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h1>
                    <center class="fw-bold">{{ __('Explore Templates') }}</center>
                </h1>
                <div class="container py-5">
                    <div class="row row-cols-1 row-cols-lg-3">
                        @forelse($templates as $template)
                            <div class="col pb-3">
                                <div class="d-flex flex-column align-items-start justify-content-center">
                                    <div class="mb-2"><img
                                            src="https://dummyimage.com/280x170/797ff7/f7f7f7.png&text=Template+Preview" />
                                    </div>
                                    <div class="mb-2">
                                        <strong class="fs-4">{{ $template->name }}</strong>
                                    </div>
                                    <div>
                                        <a href="{{ route('public.template.preview', $template->id) }}"
                                            class="btn btn-success btn-sm me-2">Preview</a>
                                        <a href="{{ route('public.template.modify', $template->id) }}"
                                            class="btn btn-primary btn-sm">Modify</a>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col">No templates have been created</div>
                        @endforelse
                    </div>

                    @if ($templates && $templates->count() > 0)
                        <div class="col-8 mx-auto">
                            {!! $templates->links() !!}
                        </div>
                    @endif
                </div>
                {{-- </div> --}}
            </div>
        </div>
    </div>
@endsection
