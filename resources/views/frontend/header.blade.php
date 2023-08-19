<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li><a href="#"><i class="fa fa-phone"></i> 01832246775</a></li>
						<li><a href="#"><i class="fa fa-envelope-o"></i> Syeed.sharek1995@gmail.com</a></li>
						<li><a href="#"><i class="fa fa-map-marker"></i> Chittagong, Bangladesh</a></li>
					</ul>
					<ul class="header-links pull-right">
						<li><a href="#"><i class=""> &#2547; </i> BDT</a></li>
						@php
							$customer_id = Session::get('id');

						@endphp
						@if ($customer_id!=Null)

							<li><a href="{{ url('/cus_logout') }}"><i class="fa fa-user-o"></i> LogOut</a></li>

						@else

						  <li><a href="{{ url('customer-login') }}"><i class="fa fa-user-o"></i> LogIn</a></li>
							
						@endif


						
					</ul>
				</div>
			</div>
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="/" class="logo">
									<img src="./img/logo.png" alt="">
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">
								<form action="{{ url('/search/') }}" method="get">
									<select class="input-select" name="category">
										<option value="ALL" {{ request('category')== "ALL" ? 'selected':'' }}>All Categories</option>
										@foreach ($categories as $category)
											<option value="{{ $category->id }} {{ request('category')== $category->id ? 'selected':'' }}">{{ $category->name }}</option>
										@endforeach
																		
									</select>

									<input class="input" placeholder="Search here" value="{{ request('product') }}"><button class="search-btn">Search</button> 
									
									
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								<!-- Wishlist -->
								<div>
									<a href="#">
										<i class="fa fa-heart-o"></i>
										<span>Your Wishlist</span>
										<div class="qty">2</div>
									</a>
								</div>
								<!-- /Wishlist -->

								<!-- Cart -->
								@php
									$cart_Array = cartArray();
								@endphp
								<div class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
										<i class="fa fa-shopping-cart"></i>
										<span>Your Cart</span>
										<div class="qty"><?= count($cart_Array)?></div>
									</a>
									<div class="cart-dropdown">
																			
											<div class="cart-list">
											@foreach ($cart_Array as $all_carts )
											{{-- @php
												$images = $all_carts['attributes'][0];
												$images = explode('|',$images);
												$images = $images[0];
											@endphp		 --}}

											<div class="product-widget">
												<div class="product-img">
													{{-- <img src="{{ asset('/product_image/'.$images) }}" alt=""> --}}
												</div>
												<div class="product-body">
													<h3 class="product-name"><a href="#">{{ $all_carts['name'] }}</a></h3>
													<h4 class="product-price"><span class="qty">{{ $all_carts['quantity'] }}</span>{{ $all_carts['price'] }} 	&#2547;</h4>
												</div>
												<a class="delete" href={{ url('/delete_cart/'.$all_carts['id']) }}> <i class="fa fa-close"></i></a>
											</div>

											@endforeach

										
										</div>
										<div class="cart-summary">
											<small><?= count($cart_Array) ?> Item(s) Selected</small>
											<h5>SUBTOTAL: {{  Cart::getSubTotal(); }} &#2547;</h5>
										</div>
										<div class="cart-btns">
											<a href=""> View</a>
											@php
												$customer_id = Session::get('id');
											@endphp

											@if ($customer_id!=Null)
												<a href="{{ url('/checkout_list') }}"> Checkout  <i class="fa fa-arrow-circle-right"></i></a>
											@else
												<a href="{{ url('/login_check') }}"> Checkout  <i class="fa fa-arrow-circle-right"></i></a>
											@endif
											
										</div>
									</div>
								</div>
								<!-- /Cart -->

								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>