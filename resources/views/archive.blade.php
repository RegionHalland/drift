@extends('layouts.app')

@section('content')

@include('partials.header')

@if(have_posts())
<div class="py-6">
	<div class="container mx-auto px-4">
		<div class="flex flex-wrap items-stretch -mx-4 pt-4">
			@include('partials.tabs')
			@include('partials.table-header')
			<div class="w-full px-4">
				@while(have_posts())
					@php(the_post())
					@include('partials.card')
				@endwhile
			</div>
		</div>
	</div>
</div>
@endif

@include('partials.push')

@endsection