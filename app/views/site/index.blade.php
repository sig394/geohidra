@extends('layouts.base')
@section('content_body')
	<div class="container">
		<div class="row">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					@foreach($banners as $key => $b)
						@if($key == 0)
				   			<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				   		@else
				   			<li data-target="#carousel-example-generic" data-slide-to="{{$key}}"></li>
				   		@endif
				   	@endforeach
				</ol>

				<div class="carousel-inner">
					@foreach($banners as $key => $b)
						@if($key == 0)
				   			<div class="item active">
						@else
							<div class="item">
						@endif
				   			<img src="{{asset('uploads/banners')}}/{{$b->img}}">
				   		</div>
				   	@endforeach
				</div>
			</div>				
    	</div>
    	<div class="row sections">
    		<div class="col-md-11 col-md-offset-1 items">
				@foreach($info as $key => $i)
					<div class="col-md-4">
	    				<h4><b><font style="text-transform: uppercase;">{{ $i->title }}</font></b></h4>
	    				<p></p>
	    				<img src="{{asset('uploads/info')}}/{{$i->img}}" width="235" height="150">
	    				<p></p>
	    				<p style="text-align:justify;">{{ $i->content }}</p>
	    				<p></p>
	    				<div style="text-align:right">
	    					<button class="btn btn-default btn-xs" type="button">Ver mas (+)</button>
	    				</div>
    				</div>
				@endforeach
    			
    		</div>
    	</div>
    </div>
@endsection