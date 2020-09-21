@extends('items.layout')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Product Info</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('items.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Product title:</strong>
               
               {{  $item->title }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Item ID:</strong>
                {{ $item->itemId }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Scrape Date:</strong>
                {{  $item->timePosted }}
                
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Price on Date:</strong>
                {{ $item->price }}
            </div>
        </div>


    </div>

 
    <table class="table table-bordered">
        <tr>
            {{-- doesnt work
                 <th>@sortablelink('timePosted', 'Time Posted')</th> --}}
            <th>Time Posted</th>
            <th>Item ID</th>
            <th>Title</th>
            <th>Price</th>
            <th>Sold amount at that date</th>
        </tr>
        
      
        
	     @foreach ($similarResults as $result)
	    <tr>
            <td>{{ $result->timePosted }}</td>
	        <td>{{ $result->itemId }}</td>
	        <td>{{ $result->title }}</td>
            <td>{{ $result->price }}</td>
            <td>{{ $result->totalSold }}</td>
	    </tr>
        @endforeach
         
    </table>
   



        

        
{{-- 
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Moz linking root domains:</strong>
                <i>To be added</i>
            </div>
        </div> 
    
 --}}
        
@endsection