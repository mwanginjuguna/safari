<div class="grid grid-cols-3 gap-6 mt-6 lg:mt-10 py-2 lg:py-6">
    <x-section-header title="Featured Dishes"></x-section-header>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <div class="flex flex-row gap-x-3 p-3 rounded shadow-sm shadow-limegreen hover:bg-orange-100 hover:scale-101 items-center">
        <img src="/images/breakfast-min.jpg" alt="Breakfast meal" class="w-40 rounded-md">
        <div class="gap-y-2 text-sm">
            <h3 class="py-2 border-b text-red-600 text-lg font-bold">Breakfast meal</h3>
            <ul class="pt-2 list-disc grid gap-y-2">
                <li>Enjoy freshly cooked breakfast - Mouth Watering, Spicy!</li>
            </ul>
            <p class="pb-2 pt-1 text-redder font-semibold">Price: ${{ $price ?? 17.69 }}</p>

            <x-primary-button wire:click="addToCart">Add To Cart</x-primary-button>
        </div>
    </div>

    <div class="flex flex-row gap-x-3 p-3 rounded shadow-sm shadow-limegreen hover:bg-orange-100 hover:scale-101 items-center">
        <img src="/images/delicious-burgers-of-beef-min.jpg" alt="Burger" class="w-40 rounded-md">
        <div class="gap-y-2 text-sm">
            <h3 class="py-2 border-b text-red-600 text-lg font-bold">Plant-it Burgers</h3>
            <ul class="pt-2 list-disc grid gap-y-2">
                <li>American cheese, pickles, lettuce, tomato, caramelized onions</li>
                <li>Vegan Tree Island sauce</li>
            </ul>
            <p class="pb-2 pt-1 text-redder font-semibold">Price: ${{ $price ?? 10.50 }}</p>

            <x-primary-button wire:click="addToCart">Add To Cart</x-primary-button>
        </div>
    </div>

    <div class="flex flex-row gap-x-3 p-3 rounded shadow-sm shadow-limegreen hover:bg-orange-100 hover:scale-101 items-center">
        <img src="/images/food_4-min.jpg" alt="Breakfast meal" class="w-40 rounded-md object-center object-cover">
        <div class="gap-y-2 text-sm">
            <h3 class="py-2 border-b text-red-600 text-lg font-bold">Finger-Licking Steak!</h3>
            <ul class="pt-2 list-disc grid gap-y-2">
                <li>Roasted and Spicy</li>
                <li><span class="text-redder">Fresh</span> from Trusted and High Quality Farmers</li>
            </ul>

            <p class="pb-2 pt-1 text-redder font-semibold">Price: ${{ $price ?? 36.00 }}</p>

            <x-primary-button wire:click="addToCart">Add To Cart</x-primary-button>
        </div>
    </div>

</div>
