<x-guest-layout>
    <div class="w-full mb-6 py-3 lg:py-8 bg-cover bg-center" style="background-image: url(/images/food-banner.png)">
        <div class="max-w-6xl h-fit grid items-center lg:h-[50vh] mx-auto mt-3 p-4 bg-slate-900 md:bg-transparent bg-opacity-75">
            <div>
                <h3 class="py-2 flex flex-row gap-x-3 italic text-redder font-medium md:text-lg">
                    Great Picks of taste and texture!

                    <x-yummy-svg />
                </h3>
                <h1 class="py-2 lg:w-1/2 lg:py-3 text-2xl lg:text-5xl font-extrabold text-white">
                    My Wishlist
                </h1>

                <p class="py-1 lg:w-1/2 text-lighter text-sm lg:text-base">
                    Embark on a flavor-packed journey with our Savory Safari Platter, a feast designed for the adventurous foodie in you! Perfect for families craving a shared experience of delightful, healthy indulgence. It's not just a meal; it's a culinary safari that brings joy to your table!
                </p>
            </div>
        </div>
    </div>


    <div class="mt-6 py-5 p-4 max-w-6xl mx-auto">
        <livewire:wishlist />
    </div>

</x-guest-layout>
