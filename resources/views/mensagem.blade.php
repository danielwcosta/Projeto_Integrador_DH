@if(Session::has('sucess'))
<div class="alert alert-sucess">
    <p>{{ Session::get('sucess') }}</p>
</div>
@endif

@if(count($errors) > 0)
<div class="alert alert-danger">
    <strong>Errors:</strong>
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
