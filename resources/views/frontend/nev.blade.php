<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li class=""><a href="{{ '/' }}">Home</a></li>
						@foreach ($categories as $category)

						<li class=""><a href="{{ url('/cat_by_product/'.$category->id) }}">{{ $category->name }}</a></li>
						@endforeach
						
						
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>