@extends('layouts.layout')

@section('content')
<div id="breadcrumbs">
		<div class="container">
			<ul>
				<li><a href="#">Home</a></li>
				<li>Product results</li>
			</ul>
		</div>
		<!-- / container -->
	</div>
	<!-- / body -->

	<div id="body">
		<div class="container">
			<div class="pagination">
				<ul>
					<li><a href="#"><span class="ico-prev"></span></a></li>
					<li><a href="#">1</a></li>
					<li class="active"><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li><a href="#"><span class="ico-next"></span></a></li>
				</ul>
			</div>
			<div class="products-wrap">
				<aside id="sidebar">
					<div class="widget">
						<h3>Products per page:</h3>
						<fieldset>
							<input checked type="checkbox">
							<label>8</label>
							<input type="checkbox">
							<label>16</label>
							<input type="checkbox">
							<label>32</label>
						</fieldset>
					</div>
					<div class="widget">
						<h3>Sort by:</h3>
						<fieldset>
							<input checked type="checkbox">
							<label>Popularity</label>
							<input type="checkbox">
							<label>Date</label>
							<input type="checkbox">
							<label>Price</label>
						</fieldset>
					</div>
					<div class="widget">
						<h3>Condition:</h3>
						<fieldset>
							<input checked type="checkbox">
							<label>New</label>
							<input type="checkbox">
							<label>Used</label>
						</fieldset>
					</div>
					<div class="widget">
						<h3>Price range:</h3>
						<fieldset>
							<div id="price-range"></div>
						</fieldset>
					</div>
				</aside>
				<div id="content">
					<section class="products">
						<article>
							<a href="product.html"><img src="/images/12.jpg" alt=""></a>
							<h3><a href="product.html">Lorem ipsum dolor</a></h3>
							<h4><a href="product.html">$990.00</a></h4>
							<a href="cart.html" class="btn-add">Add to cart</a>
						</article>
						<article>
							<a href="product.html"><img src="/images/12.jpg" alt=""></a>
							<h3><a href="product.html">cupidatat non proident</a></h3>
							<h4><a href="product.html">$1 200.00</a></h4>
							<a href="cart.html" class="btn-add">Add to cart</a>
						</article>
						<article>
							<a href="product.html"><img src="/images/13.jpg" alt=""></a>
							<h3><a href="product.html">Duis aute irure</a></h3>
							<h4><a href="product.html">$2 650.00</a></h4>
							<a href="cart.html" class="btn-add">Add to cart</a>
						</article>
						<article>
							<a href="product.html"><img src="/images/14.jpg" alt=""></a>
							<h3><a href="product.html">magna aliqua</a></h3>
							<h4><a href="product.html">$3 500.00</a></h4>
							<a href="cart.html" class="btn-add">Add to cart</a>
						</article>
						<article>
							<a href="product.html"><img src="../public/images/15.jpg" alt=""></a>
							<h3><a href="product.html">Lorem ipsum dolor</a></h3>
							<h4><a href="product.html">$1 500.00</a></h4>
							<a href="cart.html" class="btn-add">Add to cart</a>
						</article>
						<article>
							<a href="product.html"><img src="../public/images/1.jpg" alt=""></a>
							<h3><a href="product.html">cupidatat non proident</a></h3>
							<h4><a href="product.html">$3 200.00</a></h4>
							<a href="cart.html" class="btn-add">Add to cart</a>
						</article>
						<article>
							<a href="product.html"><img src="../public/images/16.jpg" alt=""></a>
							<h3><a href="product.html">Duis aute irure</a></h3>
							<h4><a href="product.html">$2 650.00</a></h4>
							<a href="cart.html" class="btn-add">Add to cart</a>
						</article>
						<article>
							<a href="product.html"><img src="../public/images/17.jpg" alt=""></a>
							<h3><a href="product.html">magna aliqua</a></h3>
							<h4><a href="product.html">$3 500.00</a></h4>
							<a href="cart.html" class="btn-add">Add to cart</a>
						</article>
					</section>
				</div>
				<!-- / content -->
			</div>
			<div class="pagination">
				<ul>
					<li><a href="#"><span class="ico-prev"></span></a></li>
					<li><a href="#">1</a></li>
					<li class="active"><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li><a href="#"><span class="ico-next"></span></a></li>
				</ul>
			</div>
		</div>
		<!-- / container -->
	</div>
	<!-- / body -->
@endsection
