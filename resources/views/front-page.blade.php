@extends('layouts.app')

@section('content')
<div class="bg-blue-dark pt-16 pb-8">
	<div class="container mx-auto px-4">
		<div class="flex flex-wrap items-stretch -mx-4">
			<div class="w-full px-4 mb-8">
				<h1 class="text-white">Driftinformation</h1>
			</div>
		</div>
	</div>
</div>

@php(var_dump($tist));

<div class="py-6">
	<div class="container mx-auto px-4">
		<div class="flex flex-wrap items-stretch -mx-4 pt-4">
			{{-- Table Header--}}
			<header class="hidden md:flex flex-wrap w-full pb-6 px-4">
				<div class="w-full md:w-4/12 px-6">
					<p class="text-sm">Information</p>
				</div>
				<div class="w-full md:w-2/12 px-6">
					<p class="text-sm">Tjänst</p>
				</div>
				<div class="w-full md:w-2/12 px-6">
					<p class="text-sm">Start</p>
				</div>
				<div class="w-full md:w-2/12 px-6">
					<p class="text-sm">Beräknat avslut</p>
				</div>
				<div class="w-full md:w-2/12 px-6">
					<p class="text-sm">Status</p>
				</div>
			</header>
			{{-- Table Header END --}}

			<div class="w-full px-4">
				{{-- Card --}}
				<div class="mb-4">
					<div class="flex flex-wrap relative items-stretch w-full border py-6 overflow-hidden">
						<span aria-hidden class="absolute h-full w-1 bg-orange pin-t pin-l"></span>
						<div class="w-full md:w-4/12 px-6 mb-3 md:mb-0">
							<h3 class="mb-1">Driftstörning självservice</h3>
							<p class="text-sm text-grey-dark">Skapad: 2019/07/19</p>
						</div>
						<div class="w-full md:w-2/12 px-6 mb-3 md:mb-0">
							<p class="text-sm text-grey-dark md:hidden mb-1">Tjänst</p>
							<p>It/Telefoni</p>
						</div>
						<div class="w-full md:w-2/12 px-6 mb-3 md:mb-0">
							<p class="inline-block text-sm text-grey-dark md:hidden mb-1">Start</p>
							<p>2018/08/10 11:00</p>
						</div>
						<div class="w-full md:w-2/12 px-6 mb-3 md:mb-0">
							<p class="inline-block text-sm text-grey-dark md:hidden mb-1">Beräknat avslut</p>
							<p>2018/08/09 15:00</p>
						</div>
						<div class="w-full md:w-2/12 px-6 md:mb-0">
							<p class="text-sm text-grey-dark md:hidden mb-1">Status</p>
							<p class="inline-flex py-1 p-3 rounded-full bg-orange">Planerad</p>
						</div>
					</div>
				</div>
				{{-- Card END --}}

				{{-- Card --}}
				<div class="mb-4">
					<div class="flex flex-wrap relative items-stretch w-full border py-6 overflow-hidden">
						<span aria-hidden class="absolute h-full w-1 bg-green pin-t pin-l"></span>
						<div class="w-full md:w-4/12 px-6 mb-3 md:mb-0">
							<h3 class="mb-1">Driftstörning självservice</h3>
							<p class="text-sm text-grey-dark">Skapad: 2019/07/19</p>
						</div>
						<div class="w-full md:w-2/12 px-6 mb-3 md:mb-0">
							<p class="text-sm text-grey-dark md:hidden mb-1">Tjänst</p>
							<p>It/Telefoni</p>
						</div>
						<div class="w-full md:w-2/12 px-6 mb-3 md:mb-0">
							<p class="inline-block text-sm text-grey-dark md:hidden mb-1">Start</p>
							<p>2018/08/10 11:00</p>
						</div>
						<div class="w-full md:w-2/12 px-6 mb-3 md:mb-0">
							<p class="inline-block text-sm text-grey-dark md:hidden mb-1">Beräknat avslut</p>
							<p>2018/08/09 15:00</p>
						</div>
						<div class="w-full md:w-2/12 px-6 md:mb-0">
							<p class="text-sm text-grey-dark md:hidden mb-1">Status</p>
							<p class="inline-flex py-1 p-3 rounded-full bg-green text-white">Slutförd</p>
						</div>
					</div>
				</div>
				{{-- Card END --}}

				{{-- Card --}}
				<div class="mb-4">
					<div class="flex flex-wrap relative items-stretch w-full border py-6 overflow-hidden">
						<span aria-hidden class="absolute h-full w-1 bg-orange pin-t pin-l"></span>
						<div class="w-full md:w-4/12 px-6 mb-3 md:mb-0">
							<h3 class="mb-1">Driftstörning självservice</h3>
							<p class="text-sm text-grey-dark">Skapad: 2019/07/19</p>
						</div>
						<div class="w-full md:w-2/12 px-6 mb-3 md:mb-0">
							<p class="text-sm text-grey-dark md:hidden mb-1">Tjänst</p>
							<p>It/Telefoni</p>
						</div>
						<div class="w-full md:w-2/12 px-6 mb-3 md:mb-0">
							<p class="inline-block text-sm text-grey-dark md:hidden mb-1">Start</p>
							<p>2018/08/10 11:00</p>
						</div>
						<div class="w-full md:w-2/12 px-6 mb-3 md:mb-0">
							<p class="inline-block text-sm text-grey-dark md:hidden mb-1">Beräknat avslut</p>
							<p>2018/08/09 15:00</p>
						</div>
						<div class="w-full md:w-2/12 px-6 md:mb-0">
							<p class="text-sm text-grey-dark md:hidden mb-1">Status</p>
							<p class="inline-flex py-1 p-3 rounded-full bg-orange">Planerad</p>
						</div>
					</div>
				</div>
				{{-- Card END --}}

				{{-- Card --}}
				<div class="mb-4">
					<div class="flex flex-wrap relative items-stretch w-full border py-6 overflow-hidden">
						<span aria-hidden class="absolute h-full w-1 bg-red pin-t pin-l"></span>
						<div class="w-full md:w-4/12 px-6 mb-3 md:mb-0">
							<h3 class="mb-1">Driftstörning självservice</h3>
							<p class="text-sm text-grey-dark">Skapad: 2019/07/19</p>
						</div>
						<div class="w-full md:w-2/12 px-6 mb-3 md:mb-0">
							<p class="text-sm text-grey-dark md:hidden mb-1">Tjänst</p>
							<p>It/Telefoni</p>
						</div>
						<div class="w-full md:w-2/12 px-6 mb-3 md:mb-0">
							<p class="inline-block text-sm text-grey-dark md:hidden mb-1">Start</p>
							<p>2018/08/10 11:00</p>
						</div>
						<div class="w-full md:w-2/12 px-6 mb-3 md:mb-0">
							<p class="inline-block text-sm text-grey-dark md:hidden mb-1">Beräknat avslut</p>
							<p>2018/08/09 15:00</p>
						</div>
						<div class="w-full md:w-2/12 px-6 md:mb-0">
							<p class="text-sm text-grey-dark md:hidden mb-1">Status</p>
							<p class="inline-flex py-1 p-3 rounded-full bg-red text-white">Pågående</p>
						</div>
					</div>
				</div>
				{{-- Card END --}}

				{{-- Card --}}
				<div class="mb-4">
					<div class="flex flex-wrap relative items-stretch w-full border py-6 overflow-hidden">
						<span aria-hidden class="absolute h-full w-1 bg-green pin-t pin-l"></span>
						<div class="w-full md:w-4/12 px-6 mb-3 md:mb-0">
							<h3 class="mb-1">Driftstörning självservice</h3>
							<p class="text-sm text-grey-dark">Skapad: 2019/07/19</p>
						</div>
						<div class="w-full md:w-2/12 px-6 mb-3 md:mb-0">
							<p class="text-sm text-grey-dark md:hidden mb-1">Tjänst</p>
							<p>It/Telefoni</p>
						</div>
						<div class="w-full md:w-2/12 px-6 mb-3 md:mb-0">
							<p class="inline-block text-sm text-grey-dark md:hidden mb-1">Start</p>
							<p>2018/08/10 11:00</p>
						</div>
						<div class="w-full md:w-2/12 px-6 mb-3 md:mb-0">
							<p class="inline-block text-sm text-grey-dark md:hidden mb-1">Beräknat avslut</p>
							<p>2018/08/09 15:00</p>
						</div>
						<div class="w-full md:w-2/12 px-6 md:mb-0">
							<p class="text-sm text-grey-dark md:hidden mb-1">Status</p>
							<p class="inline-flex py-1 p-3 rounded-full bg-green text-white">Slutförd</p>
						</div>
					</div>
				</div>
				{{-- Card END --}}
			</div>
		</div>
	</div>
</div>

<div class="py-6">
	<div class="container mx-auto px-4">
		<div class="-mx-4">
			<div class="w-full px-4">
				<div class="bg-blue-light p-6 md:p-8 rounded">
					<h3 class="mb-1">Har du frågor eller vill anmäla en driftstörning?</h3>
					<p class="leading-normal">Kontakta <a href="#">drift@regionhalland.se</a></p>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection