@extends('_layouts.main')

@section('body')


<a id="menu" name="menu"></a>
<div class="bg-gray-100 pt-16">
	<div class="max-w-7xl mx-auto px-1 sm:px-10 px-8">
		<h1 class="text-3xl font-medium text-gray-900">Our Special</h1>
	</div>
</div>

<div class="bg-gray-100 py-6">
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		<div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
			
			<div class="relative rounded-lg border border-gray-300 bg-white px-6 py-5 shadow-sm flex items-center space-x-3 hover:border-deli_red focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
				<div class="flex-shrink-0"></div>
				<div class="flex-1 min-w-0">
					<h1 class="text-2xl font-medium text-gray-900 pb-2">The Other One</h1>
					Prosciutto, Turkey, Brie, Sweet Onions, Local Honey,Dijon Mustard, pickles<br>
					$13.00 Roll<br>
					$15.00 Sub
				</div>
			</div>
			<div class="relative rounded-lg border border-gray-300 bg-white px-6 py-5 shadow-sm flex items-center space-x-3 hover:border-deli_red focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
				<div class="flex-shrink-0"></div>
				<div class="flex-1 min-w-0">
					<h1 class="text-2xl font-medium text-gray-900 pb-2">That’s it for the other one</h1>
					Prosciutto, Tavern Ham, Brie, Grilled Sweet Onions, Local Honey,Dijon Mustard, Sweet Pickles<br>
					$13.00 Hard Roll<br>
					$15.00 Sub
				</div>
			</div>
			
		</div>
	</div>
</div>




<div class="bg-gray-100 pt-6 pb-16">
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		<div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
			
			<div class="relative rounded-lg border border-gray-300 bg-white px-6 py-5 shadow-sm flex items-center space-x-3 hover:border-deli_blue focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
				<div class="flex-shrink-0"></div>
				<div class="flex-1 min-w-0">
					<h1 class="text-2xl font-medium text-gray-800">Breakfast Menu</h1>
					<h2 class="text-sm mb-8 font-medium text-gray-700">Served till 11:30am</h1>
					
					<div class="pb-8">
						<p class="text-md">Two Eggs and cheese on a roll: $4.50</p>
						<p class="text-sm">Add bacon, ham, or sausage: $6.00</p>
					</div>
					<div class="pb-8">
						<p class="text-md">Two eggs with bacon, sausage, cheddar cheese served on a roll: $8.00</p>
					</div>
					<div class="pb-8">
						<p class="text-md">Everything bagel with butter: $3.50</p>
						<p class="text-sm">With cream cheese:  $4.50</p>
					</div>
					<div class="pb-8">
						<p class="text-md">Everything Bagel with cream cheese, tomato, and sprouts: $6.50</p>
					</div>
					<div class="pb-8">
						<p class="text-md">Everything bagel with humus avocado tomato: $7.00</p>
					</div>
				</div>
			</div>
			
			<div class="relative rounded-lg border border-gray-300 bg-white px-6 py-5 shadow-sm flex items-top space-x-3 hover:border-deli_blue focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
				<div class="flex-1 min-w-0 pl-3">
					<h1 class="text-2xl font-medium text-gray-800">Scrambled Specials</h1>
					<h2 class="text-sm mb-8 font-medium text-gray-700">Served till 11:30am</h1>
					<div class="pb-8">
						<p class="text-md">Scrambled eggs with goat cheese: $8.00</p>
						<p class="text-sm">Add bacon ham or sausage: $2.00</p>
					</div>
					<div class="pb-8">
						<p class="text-md">Scrambled eggs with goat cheese: $8.00</p>
						<p class="text-sm">Add bacon ham or sausage: $2.00</p>
					</div>
					<div class="pb-8">
						<p class="text-md">Scrambled eggs with avocado, sausage, and Swiss cheese: $8.00</p>
						<p class="text-sm">Served on freshly baked Rye or whole wheat</p>
						<p class="text-sm">Add our house made pesto aioli: $2.00</p>
					</div>
					<div class="pb-8">
						<p class="text-md">Scrambled eggs with avocado, salsa, bacon, Spanish  onions, jalapeños topped with sour cream, served  in a wrap: $8.00</p>
					</div>
				</div>
			</div>
			
		</div>
	</div>
	
</div>




@include('_partials.banner')


@endsection
