@if (session('status'))
    {{-- <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div> --}}
    <div style="margin: auto; padding-bottom: 10px;">
        <span style="
            font-size: 14px;
            font-weight: bold;
            padding: 10px;
            margin-bottom: 5px;
            color: rgb(0, 126, 8);
        ">{{session('status')}}</span>
    </div>
@endif