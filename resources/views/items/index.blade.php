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


    <table class="table table-bordered">
        <tr>
            <th>Item ID</th>
            <th>Name</th>
            <th>Description</th>
            <th width="280px">Action</th>
        </tr>
	    @foreach ($items as $item)
	    <tr>
	        <td></td>
	        <td>{{ $item->title }}</td>
	        <td>{{ $item->description }}</td>
	        <td>
                
	        </td>
	    </tr>
	    @endforeach
    </table>


@endsection