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

{{-- jQuery Daterange picker --}}
{{-- 
<div class="container">
    Start Date: <input id="startDate" width="276" />
    End Date: <input id="endDate" width="276" />
</div>
<script>
    var today = new Date(new Date().getFullYear(), new Date().getMonth(), new Date().getDate());
    $('#startDate').datepicker({
        uiLibrary: 'bootstrap4',
        iconsLibrary: 'fontawesome',
        minDate: today,
        maxDate: function () {
            return $('#endDate').val();
        }
    });
    $('#endDate').datepicker({
        uiLibrary: 'bootstrap4',
        iconsLibrary: 'fontawesome',
        minDate: function () {
            return $('#startDate').val();
        }
    });
</script>
 --}}


<table class="table table-bordered">
    <tr>
        <th>@sortablelink('timePosted', 'Time Posted')</th>
        <th>Item ID</th>
        <th>@sortablelink('title', 'Title')</th>
        <th>Price</th>
        <th>Note</th>
        <th width="280px" scope="col">Action</th>
    </tr>
    
    @foreach ($items as $item)
    <tr>
        <td>{{ $item->timePosted }}</td>
        <td>{{ $item->itemId }}</td>
        <td>{{ $item->title }}</td>
        <td>{{ $item->price }}</td>
        <td></td>
        <td>
            <form action="{{-- {{ route('domains.destroy',$item->oid) }} --}}" method="POST">

                <a class="btn btn-info" href="{{ route('items.show',$item->_id) }}">Show</a>

                <a class="btn btn-primary" href="{{-- {{ route('domains.edit',$item->oid) }} --}}" disabled>Edit</a>

                @csrf
                @method('DELETE')
  
                <button type="submit" class="btn btn-danger" disabled>Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
    
</table>



{!! $items->appends(\Request::except('page'))->render() !!}


@endsection