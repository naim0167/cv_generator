<div>
    @if(session()->has('message'))
    <div class="alert alert-success bg-green-300">{{session()->get('message')}}</div>
    @elseif(session()->has('error'))
    <div class="alert alert-danger bg-red-300">{{session()->get('error')}}</div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger bg-red-300">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
