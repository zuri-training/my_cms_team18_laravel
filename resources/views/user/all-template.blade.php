@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('View Templates') }}</div>

                    <div class="card-body">
                        @include('includes.status')
                        
                        <table>
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($templates as $template)
                                    <tr>
                                        <td>{{$template->id}}</td>
                                        <td>{{$template->name}}</td>
                                        <td>
                                            <form method="post" action="{{route('original.template.destroy', $template->id)}}">
                                                @csrf
                                                @method('DELETE')
                                                <a target="_blank" href="{{route('user.template.preview', $template->id)}}" class="btn btn-success">Preview</a>
                                                <a class="btn btn-primary" href="{{route('original.template.edit', $template->id)}}">Edit</a>
                                                <button class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr><td colspan="5"><center>No templates added yet!!!</center></td></tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
