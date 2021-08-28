

@if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close btn btn-dark" data-dismiss="alert">×</button>
        <strong class="pl-3">{{ $message }}</strong>
    </div>
@endif

@if ($message = Session::get('error'))
    <div class="alert alert-danger alert-block">
        <button type="button" class="close btn btn-dark" data-dismiss="alert">×</button>
        <strong class="pl-3">{{ $message }}</strong>
    </div>
@endif
