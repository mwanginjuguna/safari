<x-guest-layout>
    <div class="w-full mb-6 py-3 lg:py-8 bg-cover bg-center" style="background-image: url(/images/food-banner.png)">
        <div class="max-w-5xl h-fit grid items-center lg:h-[50vh] mx-auto mt-3 p-4 bg-slate-900 md:bg-transparent bg-opacity-75">
            <div>
                <h3 class="py-2 text-redder font-medium md:text-lg">
                    Safari Restaurant is The Best Family-Focused Dining
                </h3>
                <h1 class="py-2 lg:py-3 text-2xl lg:text-5xl font-extrabold text-white">
                    About Us
                </h1>

                <p class="py-1 lg:w-2/3 text-lighter text-sm lg:text-base">
                    Know more about your favorite and ideal destination for creating lasting memories over delectable meals.
                </p>
            </div>
            
        </div>
    </div>

    <div class="mt-6 py-6 lg:py-10 p-4 max-w-6xl mx-auto">
        <div class="grid grid-cols-2 gap-4 p-4 items-center rounded-lg border-2 border-redder">
            <img src="/storage/family_smiling_dinner.webp" alt="" class="w-full rounded-lg col-span-2 md:col-span-1">

            <div class="col-span-2 md:col-span-1 p-2 py-3 text-sm md:text-base text-darkblue">
                <h3 class="py-1 5 font-semibold text-redder">
                    Who we are - In a grasp!
                </h3>
                <p class="py-1">
                    Safari Restaurant is a destination where the art of dining meets the thrill of adventure. Nestled in the heart of culinary exploration, Safari is not just a restaurant; it's a destination.
                </p>
                <p class="py-1">
                    We invite you to embark on a gastronomic journey that transcends the ordinary. Every meal is a celebration and every visit is an unforgettable experience. At Safari, we blend passion, innovation, and the warmth of family to create a haven for food enthusiasts and memory-makers alike.
                </p>

                <div class="py-1">
                    <h3 class="py-1 5 font-semibold text-redder">
                        Culinary Philosophy
                    </h3>
                    <p class="py-1">
                        Embark on a culinary exploration guided by our philosophy. Every dish served to you is a manifestation of our commitment to using the freshest ingredients, embracing global influences, and crafting flavors that transcend boundaries.
                    </p>
                    <p class="py-1">
                        At Safari, we believe in the transformative power of food, turning each meal into a sensorial journey that awakens the palate and nourishes the soul.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-6 py-6 lg:py-10 p-4 max-w-6xl mx-auto">
        <x-section-header title="Our Story" />

        <div class="grid grid-cols-2 gap-4 py-3 mt-2 items-center">
            <div class="col-span-2 md:col-span-1">
                <h3 class="py-1 5 font-semibold lg:text-lg text-redder">
                    Picture this:
                </h3>
                <p class="px-2 pb-1.5 text-redder italic font-medium">"a humble beginning fueled by a shared love for exceptional cuisine."</p>
                <p class="py-1">
                    In the heart of every Safari Restaurant, our story unfolds like a culinary fairy tale. It began with a chef's dream, a dash of daring creativity, and the vision to create a dining experience that would transport guests to exotic realms of flavor.
                </p>
                <p class="py-1">
                    From the first sizzle on the grill to the laughter echoing in our vibrant dining rooms, every chapter of Safari's story is etched with the spirit of culinary magic, turning each meal into a symphony of taste, texture, and unbridled joy.
                </p>
            </div>
            
            <img src="/images/food_5-min.jpg" alt="" class="w-full rounded-lg col-span-2 md:col-span-1">
        </div>
    </div>

    <div class="w-full mt-5 py-6 bg-red-100">
        <div class="max-w-6xl mx-auto grid md:grid-cols-3 gap-4 p-4">
            <div class="md:col-span-2 py-2">
                <p class="py-2 flex gap-x-3 text-lg text-redder">
                    Tasty Memories
                    <x-yummy-svg />
                </p>

                <h3 class="py-2 font-bold text-xl md:text-3xl text-darkblue">
                    Our Chefs: Passionate Craftsmen
                </h3>

                <p class="py-1 pb-3 text-darkblue">
                    Meet the culinary maestros behind the Safari experience—the heart and soul of our kitchen. Our passionate chefs are not just masters of the grill and wizards of the wok; they are storytellers, infusing every dish with a tale of flavors, tradition, and innovation. With a shared commitment to culinary excellence, our chefs transform fresh ingredients into edible works of art. Each bite at Safari is a journey worth savoring.
                </p>

                <p class="mt-2 lg:mt-5 ">
                    <a href="{{ route('about') }}" class="px-3 py-2 w-fit items-center bg-redder text-lighter text-sm lg:text-lg text-center font-medium hover:underline underline-offset-2 rounded-md">
                        View all menus ...
                    </a>
                </p>
            </div>
            
            <img src="/storage/master_chef.jpeg" alt="" class="w-full rounded-lg md:col-span-1">
        </div>
    </div>

    <div class="max-w-6xl mx-auto mt-6 py-5">
        <div class="p-4">
            <x-section-header title="Our Team" />
            
            <p class="py-1">United by a love for hospitality and a passion for creating delightful experiences.</p>
        </div>

        <div class="grid md:grid-cols-3 gap-4 p-4">
            <div class="flex flex-col items-center">
                <img src="/storage/profile/male-customer_2.jpg" alt="Chef" class="h-20 z-10 rounded-full border-2 place-self-center ml-14 border-redder">

                <p class="rounded-full -mt-6 p-4 py-10 w-44 text-xs border border-redder">
                    Step into the vibrant world of Safari and meet the team that transforms ordinary moments into extraordinary memories. <br> <span class="text-redder font-semibold">~ Isaacs, CEO</span>
                </p>
            </div>

            <div class="flex flex-col items-center">
                <img src="/storage/profile/lady-customer_2.jpg" alt="Chef" class="h-20 z-10 rounded-full border-2 place-self-center ml-14 border-redder">

                <p class="rounded-full -mt-6 p-4 py-10 w-44 text-xs border border-redder">
                    From the welcoming smiles at the entrance to the skilled hands crafting culinary wonders in the kitchen.<br> <span class="text-redder font-semibold">~ Maxine, Chief Chef</span>
                </p>
            </div>

            <div class="flex flex-col items-center">
                <img src="/storage/profile/male-customer_1.jpg" alt="Chef" class="h-20 z-10 rounded-full border-2 place-self-center ml-14 border-redder">

                <p class="rounded-full -mt-6 p-4 py-10 w-44 text-xs border border-redder">
                    Dedicated to turning your dining adventure into a family tradition, one exceptional meal at a time.. <br> <span class="text-redder font-semibold">~ Sam, Attendant</span>
                </p>
            </div>
        </div>
    </div>
</x-guest-layout>