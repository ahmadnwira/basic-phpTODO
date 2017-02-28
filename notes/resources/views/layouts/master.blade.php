
 @include('layouts.header')

<div class="container">
	<div class="row">

	    <div class="col-md-8">
	
	        @yield('content')
	
	    </div>

	    @include('layouts.side')
	
	</div>
</div>

 @include('layouts.footer')