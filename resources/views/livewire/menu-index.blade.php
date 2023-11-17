<div class="py-3">
    <x-section-header title="A menu that resonates with every bite, inviting families to create their own chapters" />

    <div class="grid">
        <div class="flex flex-row justify-self-end md:w-fit bg-redder rounded-full p-2 px-3">
            <input type="text"
            name="search"
            wire:model.live="search"
            placeholder="Search for your favorites..."
            class="px-3 py-2 bg-white text-xs md:text-sm text-slate-800 rounded-full">

            <button wire:click="search" class="p-2 w-fit text-right px-3 font-bold text-white rounded-r-xl">Search</button>
        </div>
    </div>
    

    <div class="mt-4 py-5 lg:py-8">
        <h2 class="py-3 md:w-2/3 font-extrabold text-redder text-xl md:text-4xl">
            Safari Delights: Rise and shine with our breakfast menu
        </h2>
        <p class="py-2 pb-5 md:w-2/3 text-sm lg:text-base text-darkblue md:font-medium">
            Breakfast at Safari is an elegant affair. From the tempting aroma of freshly brewed coffee to the tantalizing stacks of pancakes kissed by morning sun, our breakfast options are a celebration of the most important meal of the day.
        </p>
        <x-breakfast-menu />
    </div>
    
    <div class="mt-4 py-5 lg:py-8">
        <h2 class="py-3 md:w-2/3 font-extrabold text-redder text-xl md:text-4xl">
            Lunch-Feast Express:  Every bite is a journey of taste and texture.
        </h2>
        <div class="py-2 pb-5 grid md:grid-cols-3 text-sm lg:text-base text-darkblue md:font-medium">
            <img src="/images/yummy-food-banner-landscape.png" alt="Yummy" class="md:hidden md:col-span-1 w-full rounded-md mt-2">

            <div class="md:col-span-2 py-3">
                <p class="py-2">
                    Whether you're craving the sizzle of a BBQ pulled pork sandwich or the freshness of a grilled veggie wrap, our lunch offerings promise a swift journey to satisfaction.
                </p>
                <p class="py-2">
                    Explore our salad symphony featuring the freshest ingredients, where each bite is a crescendo of flavors, creating a lunchtime experience that's both light and satisfying.
                </p>
                <p class="py-2">
                    Our lunch menu is a fast track to flavor paradise, where bold and vibrant dishes take center stage.
                </p>
            </div>
            
            <img src="/images/yummy-food-banner-landscape.png" alt="Yummy" class="hidden md:block md:col-span-1 w-full rounded-md mt-2">
        </div>
        <x-lunch-menu />
    </div>

    <div class="mt-4 py-5 lg:py-8">
        <h2 class="py-3 md:w-2/3 font-extrabold text-redder text-xl md:text-4xl">
            Mara Nightfire Grills:  When the night falls, our grills light up, creating a sizzling spectacle. 
        </h2>

        <div class="py-2 pb-5 grid md:grid-cols-3 items-center text-sm lg:text-base text-darkblue md:font-medium">
            <img src="/images/yummy-steak.png" alt="Yummy Steak" class="md:hidden md:col-span-1 w-full rounded-md mt-2">

            <div class="md:col-span-2 py-3">
                <p class="py-2">
                    As the sun sets, embark on a culinary journey with our dinner menu. From the richness of lamb tagine to the exquisite herb-crusted salmon, our dinner options are a celebration of flavors, creating a captivating evening filled with gourmet delights.
                </p>
                <p class="py-2">
                    Dive into our nightfire grills featuring bison burgers, swordfish steaks, and more—an evening dining experience that combines bold flavors with the enchantment of the night.
                </p>
                <p class="py-2">
                    From coconut chicken to aromatic vegetable tagines. Your dinner is a journey through the exotic, ensuring each dish is a celestial masterpiece.
                </p>
            </div>
            
            <img src="/images/yummy-steak.png" alt="Yummy Steak" class="hidden md:block md:col-span-1 w-full rounded-md mt-2">
        </div>

        <x-dinner-menu />
    </div>

    <div class="mt-4 py-5 lg:py-8">
        <h2 class="py-3 md:w-2/3 font-extrabold text-redder text-xl md:text-4xl">
            Sunset Refreshments and Libations: <span class="italic font-semibold font-serif">'Each sip is a moment of warmth and indulgence'</span>
        </h2>

        <div class="py-2 pb-5 grid md:grid-cols-3 items-center text-sm lg:text-base text-darkblue md:font-medium">
            <img src="/images/drinks-and-beverages-landscape.png" alt="Yummy Steak" class="md:hidden md:col-span-1 w-full rounded-md mt-2">

            <div class="md:col-span-2 py-3">
                <p class="py-2">
                    As the sun sets, embark on a culinary journey with our dinner menu. From the richness of lamb tagine to the exquisite herb-crusted salmon, our dinner options are a celebration of flavors, creating a captivating evening filled with gourmet delights.
                </p>
                <p class="py-2">
                    Dive into an extravaganza of flavors with our savanna sips. Whether you're in the mood for a wildberry fizz or a mango tango mocktail, our beverage menu promises a refreshing journey that complements the excitement of your Safari experience.
                </p>
                <p class="py-2">
                    Brew up joy with our jungle brew delights. From aromatic coffees to chai lattes, each sip is a moment of warmth and indulgence, ensuring that your dining experience at Safari is accompanied by the perfect beverage to elevate the flavors.
                </p>
            </div>
            
            <img src="/images/drinks-and-beverages-landscape.png" alt="Yummy Steak" class="hidden md:block md:col-span-1 w-full rounded-md mt-2">
        </div>

        <x-beverages-menu />
    </div>
</div>
