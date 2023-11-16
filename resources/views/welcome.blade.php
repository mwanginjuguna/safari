<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class=" bg-lighter selection:bg-red-500 selection:text-white">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased">
        <div class="relative min-h-screen">
            <livewire:welcome.navigation />

            <div class="max-w-6xl mx-auto p-4 lg:py-8">
                <livewire:welcome.hero />

                <div class="pb-3 lg:pb-6">
                    <livewire:welcome.popular-dishes />
                </div>

                <div class="my-3 lg:mt-10 p-3 lg:py-6 grid md:grid-cols-3 gap-4 items-center border-t">
                    <div class="col-span-1 md:col-span-3">
                        <x-section-header title="Fresh, Quality Meals that guarantees your family's health." />
                    </div>
                    
                    <div class="col-span-1">
                        <img src="/images/meal_1-min.jpg" alt="Best Meal Ever" class="w-fit rounded-md">
                    </div>

                    <div class="md:col-span-2">
                        <h3 class="md:w-[70%] py-2 lg:pt-4 text-redder font-semibold md:text-2xl">
                            Delight Your Family with the Highest Quality Delicacies Across the Sahara
                        </h3>
                        <p class="md:w-[90%] py-1 text-sm md:text-base font-medium text-darkblue">
                            Embark on a flavor-packed journey with our Savory Safari Platter, a feast designed for the adventurous foodie in you! Perfect for families craving a shared experience of delightful, healthy indulgence. It's not just a meal; it's a culinary safari that brings joy to your table!
                        </p>

                        <div class="grid md:grid-cols-2 py-2 md:pt-4 text-darkblue">
                            <ul class="md:col-span-1 list-disc pt-2 grid gap-y-2">

                                <li class="flex flex-row gap-x-2">
                                    <x-star-bullet-svg />
                                    
                                    <p class="font-medium text-sm">each spoonful is a burst of freshness, and...</p>
                                </li>

                                <li class="flex flex-row gap-x-2">
                                    <x-star-bullet-svg />
                                    
                                    <p class="font-medium text-sm">it's not just a meal; it's a celebration of health and happiness.</p>
                                </li>
                                
                                <li class="flex flex-row gap-x-2">
                                    <x-star-bullet-svg />
                                    
                                    <p class="font-medium text-sm">Make health-conscious choices!</p>
                                </li>

                                <a href="{{ route('about')}}" class="mt-2 w-fit h-fit p-1.5 lg:px-2 bg-lime-200 hover:bg-lime-300 text-redder hover:text-red-500 font-semibold hover:underline hover:underline-offset-2 rounded-md">
                                    <p>Learn More...</p>
                                </a>
                            </ul>
                            
                            <img src="/images/fruity-min.jpg" alt="Fresh Meals" class="mt-3 w-fit rounded-md">
                        </div>
                    </div>
                    
                </div>
            </div>

            <div class="mt-4 lg:mt-6 p-4 lg:py-8 border-t">
                <div class="mt-5 py-3 lg:py-6 flex flex-row gap-x-3 max-w-6xl mx-auto items-center">
                    <x-application-logo class="block h-20 w-auto fill-current text-gray-800" />
                   
                    <div class="flex flex-col gap-x-2 lg:w-[60%]">
                        <h3 class="text-redder text-2xl lg:text-4xl font-bold">Amazing Offers</h3>

                        <p class="py-2 md:text-xl text-darkblue">Dive into the mystic world of flavors: it's a sizzling experience for families who crave a healthy, flavor-packed adventure!</p>
                    </div>
                </div>
                
                <div class="mt-4 py-3 lg:py-6">
                    <x-video-offers />
                </div>
            </div>

            <div class="mt-3 lg:mt-6 p-4 lg:pb-6 max-w-6xl mx-auto border-t">
                <div class="grid gap-3">
                    <x-section-header title="Our Menus" ></x-section-header>

                    <h3 class="py-2 font-semibold text-lg uppercase text-redder">
                        All Your Family's Favorites
                    </h3>
                </div>

                <livewire:menu-loader />
            </div>

            <div class="mt-4 lg:mt-8 p-4 max-w-6xl mx-auto lg:py-10 border-t">
                <x-our-story-card />
            </div>

            <div class="mt-4 lg:mt-8 p-4 max-w-6xl mx-auto lg:py-10 border-t">
                <x-we-deliver-card />
            </div>
            
            <div class="mt-4 lg:mt-8 p-4 max-w-6xl mx-auto lg:py-10 border-t">
                <x-section-header title="Experience the best Dining Moments!" />

                <x-key-features-card />
            </div>

            <div class="mt-4 lg:mt-8 p-4 max-w-6xl mx-auto lg:py-10 border-t">
                <x-section-header title="Testimonials" />

                <livewire:slider />
            </div>

            <x-main-footer />
        </div>
    </body>
</html>
