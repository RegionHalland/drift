@php($terms = get_terms('status', ['hide_empty' => false ]))

<div class="w-full px-4 mb-4">
	<a href="{{ esc_url(home_url( '/' )) }}" class="inline-block px-4 py-2 border rounded border-blue text-blue-dark no-underline {{ is_home() ? 'bg-blue-light' : '' }}">Alla</a>
	{{-- Terms--}}
	@if (!empty($terms))	
	@foreach ($terms as $term)
	<a href="{{ get_term_link($term->term_id, 'status') }}" class="inline-block px-4 py-2 border rounded border-blue text-blue-dark no-underline {{ is_tax('status', $term->term_id ) ? 'bg-blue-light' : '' }}">{{ $term->name }}</a>
	@endforeach
	@endif
	{{-- Terms END --}}
</div>
