{{-- Card --}}
@php($status = get_the_terms($post->ID, 'status')[0])
<div class="mb-4">
	<div class="flex flex-wrap relative items-center w-full border py-6 overflow-hidden">
		@if ($status->slug === 'planned')
		<span aria-hidden class="absolute h-full w-1 bg-orange pin-t pin-l"></span>
		@elseif ($status->slug === 'started')
		<span aria-hidden class="absolute h-full w-1 bg-red pin-t pin-l"></span>
		@elseif ($status->slug === 'finished')
		<span aria-hidden class="absolute h-full w-1 bg-green pin-t pin-l"></span>
		@endif
		<div class="w-full md:w-4/12 px-6 mb-3 md:mb-0">
			<h3 class="mb-1">{{ the_title() }}</h3>
			<p class="text-sm text-grey-dark">Skapad: {{ get_the_date('Y-m-d H:i') }}</p>
		</div>
		<div class="w-full md:w-2/12 px-6 mb-3 md:mb-0">
			<p class="text-sm text-grey-dark md:hidden mb-1">Tjänst</p>
			@php($terms = get_the_terms($post->ID, 'department'))
			@foreach($terms as $term)
			<p>{{ $term->name }}</p>
			@endforeach
		</div>
		<div class="w-full md:w-2/12 px-6 mb-3 md:mb-0">
			<p class="inline-block text-sm text-grey-dark md:hidden mb-1">Start</p>
			<p>{{ the_field('start') }}</p>
		</div>
		<div class="w-full md:w-2/12 px-6 mb-3 md:mb-0">
			<p class="inline-block text-sm text-grey-dark md:hidden mb-1">Beräknat avslut</p>
			<p>{{ the_field('end') }}</p>
		</div>
		<div class="w-full md:w-2/12 px-6 md:mb-0">
			<p class="text-sm text-grey-dark md:hidden mb-1">Status</p>
			@if ($status->slug === 'planned')
			<p class="inline-flex py-1 p-3 rounded-full bg-orange">Planerad</p>
			@elseif ($status->slug === 'started')
			<p class="inline-flex py-1 p-3 rounded-full bg-red text-white">Pågående</p>
			@elseif ($status->slug === 'finished')
			<p class="inline-flex py-1 p-3 rounded-full bg-green">Avslutad</p>
			@endif
		</div>
	</div>
</div>
{{-- Card END --}}