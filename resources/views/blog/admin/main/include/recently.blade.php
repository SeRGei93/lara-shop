<div class="box box-primary">
	<div class="box-header with-border">
		<h3 class="box-title">Последние добавленные товары</h3>

		<div class="box-tools pull-right">
			<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
			</button>
			<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
		</div>
	</div>
	<!-- /.box-header -->
	<div class="box-body">
		<ul class="products-list product-list-in-box">
			@foreach($lastProducts as $product)
				<li class="item">
					<div class="product-img">

							@if (!empty($product->img))
								<img src="{{ asset('uploads/single/' . $product->img) }}" alt="Product Image">
							@else
								<img src="{{ asset('images/no_image.png') }}" alt="Product Image">
							@endif

					</div>
					<div class="product-info">
						<a href="javascript:void(0)" class="product-title">{{ $product->title }}
							<span class="label label-warning pull-right">{{ $product->price }}</span>
						</a>
						<span class="product-description">{{ $product->description }}</span>
					</div>
				</li>
			@endforeach
			
		</ul>
	</div>
	<!-- /.box-body -->
	<div class="box-footer text-center">
		<a href="javascript:void(0)" class="uppercase">Все товары</a>
	</div>
	<!-- /.box-footer -->
</div>