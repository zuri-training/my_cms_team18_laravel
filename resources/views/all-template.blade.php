@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Templates') }}</div>

                    <div class="card-body">
                        <div class="container">
                            <div class="row row-cols-1 row-cols-lg-3">
                                @forelse($templates as $template)
                                    <div class="col border border-dark m-2 pb-3">
                                        <div class="d-flex flex-column align-items-center justify-content-center">
                                            <div><img src="" /></div>
                                            <div>
                                                <h2>{{ $template->name }}</h2>
                                            </div>
                                            <div>
                                                <a target="_blank"
                                                    href="{{ route('public.template.preview', $template->id) }}"
                                                    class="btn btn-success">Preview</a>
                                                <a href="{{route('public.template.modify', $template->id)}}"
                                                    class="btn btn-primary">Modify Template</a>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
