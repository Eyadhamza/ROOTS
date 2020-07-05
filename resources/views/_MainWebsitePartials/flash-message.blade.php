@if ($message = Session::get('success'))
    <div class="relative px-3 py-3 mb-4 border rounded bg-green-200 border-green-300 text-green-800 alert-block">
        <button type="button" class="absolute top-0 bottom-0 right-0 px-4 py-3" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
@endif


@if ($message = Session::get('error'))
    <div class="relative px-3 py-3 mb-4 border rounded bg-red-200 border-red-300 text-red-800 alert-block">
        <button type="button" class="absolute top-0 bottom-0 right-0 px-4 py-3" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
@endif


@if ($message = Session::get('warning'))
    <div class="relative px-3 py-3 mb-4 border rounded bg-orange-200 bg-orange-300 bg-orange-800 alert-block">
        <button type="button" class="absolute top-0 bottom-0 right-0 px-4 py-3" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
@endif


@if ($message = Session::get('info'))
    <div class="relative px-3 py-3 mb-4 border rounded bg-teal-200 bg-teal-300 bg-teal-800 alert-block">
        <button type="button" class="absolute top-0 bottom-0 right-0 px-4 py-3" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
@endif


@if ($errors->any())
    <div class="relative px-3 py-3 mb-4 border rounded bg-red-200 border-red-300 text-red-800">
        <button type="button" class="absolute top-0 bottom-0 right-0 px-4 py-3" data-dismiss="alert">×</button>
        Please check the form below for errors
    </div>
@endif
