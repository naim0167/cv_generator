<div>
    @if(session()->has('message'))
    <div class="alert alert-success">{{session()->get('message')}}</div>
    @elseif(session()->has('message'))
    <div class="alert alert-danger">{{session()->get('error')}}</div>
    @endif
</div>
