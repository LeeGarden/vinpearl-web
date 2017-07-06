<div class="shadow">
	<ul class="slide">
		@foreach ($imageSlide as $item)
            <li>
                <img src="{{ asset('uploads/images') }}/{{ $item->image }}">
            </li>
        @endforeach
	</ul>
</div>