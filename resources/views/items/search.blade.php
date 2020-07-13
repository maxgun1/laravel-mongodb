@extends('items.layout')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Ebay Items Search Results</h2>
            </div>
            <div class="pull-right">
            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
 <div class="row">
<div class="col-md-4">
<form action="/search" method="GET">
<div class="form-group">
    <input type="search" class="form-control" name="search">
    <span class="form-group-btn">
        <button type="submit" class="btn btn-primary">Search</button>
    </span>
</div>
</form>

</div>
</div> 

    <table class="table table-bordered">
        <tr>
            <th>@sortablelink('timePosted', 'Time Posted')</th>
            <th>Item ID</th>
            <th>Title</th>
            <th>Price</th>
        </tr>
        
	    @foreach ($results as $result)
	    <tr>
            <td>{{ $result->timePosted }}</td>
	        <td>{{ $result->itemId }}</td>
	        <td>{{ $result->title }}</td>
	        <td>{{ $result->price }}</td>
	    </tr>
        @endforeach
        
    </table>
   
{{-- {!! $results->appends(\Request::except('page'))->render() !!} --}}

@endsection