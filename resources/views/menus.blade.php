<x-guest-layout>
    <div class="w-full mb-6 py-3 lg:py-8 bg-cover bg-center" style="background-image: url(/images/food-banner.png)">
        <div class="max-w-5xl h-fit grid items-center lg:h-[50vh] mx-auto mt-3 p-4 bg-slate-900 md:bg-transparent bg-opacity-75">
            <div>
                <h3 class="py-2 flex flex-row gap-x-3 text-redder font-medium md:text-lg">
                    All your favorite dishes in one place!

                    <x-yummy-svg />
                </h3>
                <h1 class="py-2 lg:w-2/3 lg:py-3 text-2xl lg:text-5xl font-extrabold text-white">
                    Artistry on Every Plate: Explore Menus
                </h1>

                <p class="py-1 lg:w-2/3 text-lighter text-sm lg:text-base">
                    Dive into a world where each dish is a canvas, painted with flavors and textures that transform every meal into a culinary masterpiece—a true testament to our commitment to gastronomic artistry.
                </p>
            </div>
        </div>
    </div>


    <div class="mt-6 py-5 p-4 max-w-6xl mx-auto">
        <livewire:menu-index />
    </div>

</x-guest-layout>