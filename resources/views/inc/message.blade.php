@if(session('success'))

<div>
    <span class="alert alert-success">{{session('success')}}</span>
</div>

@endif

@if(session('delete'))

<div>
    <span class="alert alert-danger">{{session('delete')}}</span>
</div>

@endif