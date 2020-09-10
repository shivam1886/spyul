	<!--STARt category-->
	<section class="top-padding category-strip">
		<div class="container">
			<div class="wrapper">
				<ul>
					@foreach($data['categories'] as $key => $category)
					@if($key == 0)
					<li><a  class="all-category active" href="javascript:void(0)">All Categories</a></li>
					@endif
					<li><a href="javascript:void(0)">{{$category->title}}</a></li>
					@endforeach
				</ul>
			</div>
		</div>
	</section><!--END category-->