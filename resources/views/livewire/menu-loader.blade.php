<div>
    <div class="grid grid-cols-3 gap-y-3 sm:grid-cols-5 divide-x divide-slate-300 py-1">
        <div class="grid items-center">
            <button wire:click="loadmenu('breakfast')" class="w-fit mx-auto p-2 lg:px-3 text-sm lg:text-base font-medium rounded text-center text-redder {{ $menus['breakfast'] ? 'bg-redder text-white' : '' }} hover:bg-red-600 hover:text-slate-200 transition-all ease-in-out 150ms hover:underline underline-offset-4">
                Breakfast
            </button>
        </div>
        
        <div class="grid items-center">
            <button wire:click="loadmenu('lunch')" class="w-fit mx-auto p-2 text-sm lg:text-base font-medium rounded text-center active:bg-redder hover:bg-red-600 hover:text-slate-200 transition-all ease-in-out 150ms text-redder {{ $menus['lunch'] ? 'bg-redder text-white' : '' }} hover:underline underline-offset-4">
                Lunch
            </button>
        </div>
        
        <div class="grid items-center">
            <button wire:click="loadmenu('dinner')" class="w-fit mx-auto p-2 lg:px-3 text-sm lg:text-base font-medium rounded text-center active:bg-redder hover:bg-red-600 hover:text-slate-200 transition-all ease-in-out 150ms text-redder {{ $menus['dinner'] ? 'bg-redder text-white' : '' }} hover:underline underline-offset-4">
                Dinner
            </button>
        </div>
        
        <div class="grid items-center">
            <button wire:click="loadmenu('starters')" class="w-fit mx-auto p-2 lg:px-3 text-sm lg:text-base font-medium rounded text-center active:bg-redder hover:bg-red-600 hover:text-slate-200 transition-all ease-in-out 150ms text-redder {{ $menus['starters'] ? 'bg-redder text-white' : '' }} hover:underline underline-offset-4">
                Starters
            </button>
        </div>
        
        <div class="grid items-center">
            <button wire:click="loadmenu('beverages')" class="w-fit mx-auto p-2 lg:px-3 text-sm lg:text-base font-medium rounded text-center active:bg-redder hover:bg-red-600 hover:text-slate-200 transition-all ease-in-out 150ms text-redder {{ $menus['beverages'] ? 'bg-redder text-white' : '' }} hover:underline underline-offset-4">
                Beverages
            </button>
        </div>
    </div>

    
    <div class="mt-4 py-2 lg:py-6">
        @if ($menus['breakfast'] === true)
            <x-breakfast-menu></x-breakfast-menu>
        @elseif($menus['lunch'] === true)
            <x-lunch-menu></x-lunch-menu>
        @elseif($menus['dinner'] === true)
            <x-dinner-menu></x-dinner-menu>
        @elseif($menus['starters'] === true)
            <x-starters-menu></x-starters-menu> 
        @elseif($menus['beverages'] === true)
            <x-beverages-menu></x-beverages-menu>
        @endif
    </div>

    <div class="pb-6">
        <a href="{{ route('menu.index') }}" class="px-3 py-2 flex flex-row gap-x-2 w-fit items-center bg-slate-200 text-redder text-sm lg:text-lg text-center font-medium hover:underline underline-offset-2 rounded-md">
            Browse All Menus
            <x-yummy-svg />
        </a>
    </div>
</div>
