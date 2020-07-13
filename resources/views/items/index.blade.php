@extends('items.layout')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Ebay Items Scraped</h2>
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
<form action="{{route('search')}}" method="GET">
<div class="form-group">
    <input type="search" class="form-control" name="q">
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
        @if($items->count())
	    @foreach ($items as $item)
	    <tr>
            <td>{{ $item->timePosted }}</td>
	        <td>{{ $item->itemId }}</td>
	        <td>{{ $item->title }}</td>
	        <td>{{ $item->price }}</td>
	    </tr>
        @endforeach
        @endif
    </table>

    
   
     {!! $items->appends(\Request::except('page'))->render() !!} 


@endsection