<div class="container-fluid cursosTax">
	<div class="container">
		@foreach($taxs as $i=>$tax)
			@if(($i % 4)==0)
				@if($i!=0)
					</ul>
				@endif
				<ul class="nav nav-pills nav-justified pills-civscg">
					@endif
					<li role="presentation">
						<a href="{!!route('cursosTipos',$tax->term->slug)!!}">
							{!!$tax->term->name!!}
							<span class="badge">{!!$tax->count!!}</span>
						</a>
					</li>
					@endforeach
				</ul>
	</div>
</div>
