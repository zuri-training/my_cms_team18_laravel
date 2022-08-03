@if (Session::has('errors'))
    {{-- <p style="text-align: center; color: red">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>    
    </p> --}}

    <div style="margin: auto; padding-bottom: 10px;">
        <ul style="font-weight: 500; padding: 10px;">
            @foreach ($errors->all() as $error)
                <li style="margin-bottom: 5px; color: rgb(219, 23, 23); ">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
