<div class="mt-5 py-6">
    <div class="grid grid-cols-5 gap-x-3 font-semibold text-redder text-sm">
        <p class="col-span-1">Item</p>
        <p class="col-span-1">Unit Price</p>
        <p class="col-span-1">Quantity</p>
        <p class="col-span-1">Total</p>
        <p class="col-span-1">Action</p>
    </div>
    <div class="grid grid-cols-5 gap-x-3 py-2 items-center border-b border-red-300 text-sm">
        <div class="p-1">
            <img src="/images/burger-plant-based-protein-min.jpg" alt="" class="rounded h-16">
            <p class="py-1 font-medium">Savanna Bison Burger</p>
        </div>

        <p class="p-1 font-medium hidden md:block">$6.50</p>

        <div class="p1 flex flex-row text-sm h-fit">
            <button class="w-fit" wire:click="decreaseQuantity(1)">
                <svg width="14px" height="14px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M6 12L18 12" stroke="#CC3333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
            </button>

            <p class="w-fit p-1 border border-red-200 text-redder">1</p>

            <button class="w-fit" wire:click="increaseQuantity(1)">
                <svg width="14px" height="14px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>Add 1</title> <g id="Complete"> <g data-name="add" id="add-2"> <g> <line fill="none" stroke="#CC3333" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" x1="12" x2="12" y1="19" y2="5"></line> <line fill="none" stroke="#CC3333" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" x1="5" x2="19" y1="12" y2="12"></line> </g> </g> </g> </g></svg>
            </button>
        </div>

        <p class="p-1 font-medium">$6.50</p>

        <button class="w-fit" wire:click="increaseQuantity h-fit" wire:click="removeFromCart(1)">
            <svg width="15px" height="15px" viewBox="-0.5 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M3 21.32L21 3.32001" stroke="#CC3333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M3 3.32001L21 21.32" stroke="#CC3333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
        </button>
    </div>
    
    <div class="grid grid-cols-5 gap-x-3 py-2 items-center border-b border-red-300 text-sm">
        <div class="p-1">
            <img src="/images/burger-plant-based-protein-min.jpg" alt="" class="rounded h-16">
            <p class="py-1 font-medium">Savanna Bison Burger</p>
        </div>

        <p class="p-1 font-medium hidden md:block">$6.50</p>

        <div class="p1 flex flex-row text-sm h-fit">
            <button class="w-fit" wire:click="decreaseQuantity(1)">
                <svg width="14px" height="14px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M6 12L18 12" stroke="#CC3333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
            </button>

            <p class="w-fit p-1 border border-red-200 text-redder">1</p>

            <button class="w-fit" wire:click="increaseQuantity(1)">
                <svg width="14px" height="14px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>Add 1</title> <g id="Complete"> <g data-name="add" id="add-2"> <g> <line fill="none" stroke="#CC3333" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" x1="12" x2="12" y1="19" y2="5"></line> <line fill="none" stroke="#CC3333" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" x1="5" x2="19" y1="12" y2="12"></line> </g> </g> </g> </g></svg>
            </button>
        </div>

        <p class="p-1 font-medium">$6.50</p>

        <button class="w-fit" wire:click="increaseQuantity h-fit" wire:click="removeFromCart(1)">
            <svg width="15px" height="15px" viewBox="-0.5 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M3 21.32L21 3.32001" stroke="#CC3333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M3 3.32001L21 21.32" stroke="#CC3333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
        </button>
    </div>

    <div class="mt-5 py-6 grid grid-cols-2">
        <div class="py-1 col-span-2 md:col-span-1">
            <h3 class="py-1 text-lg lg:text-2xl text-redder font-bold">
                Get a discount
            </h3>

            <form action="" class="py-3">
                <div class="flex flex-col w-fit">

                    <input type="text" name="coupon" placeholder="Enter Coupon Code" class="mt-4 py-1 px-2 text-sm rounded-md text-redder border-red-500">

                    <x-primary-button class="mt-4 w-fit">Apply</x-primary-button>
                </div>
            </form>
        </div>

        <div class="py-1 col-span-2 md:col-span-1">
            <h3 class="py-1 text-lg lg:text-2xl text-redder font-bold">
                Cart Summary
            </h3>

            <form action="" class="py-3">
                <div class="flex flex-col text-sm">
                    <div class="flex justify-between py-2 border-b border-red-200">
                        <p class="py-1">Order Subtotal</p>

                        <p class="py-1">$12.34</p>
                    </div>

                    <div class="flex justify-between py-2 border-b border-red-200">
                        <p class="py-1">Shipping</p>

                        <p class="py-1">Free</p>
                    </div>

                    <div class="flex justify-between py-2 border-b border-red-200">
                        <p class="py-1">Coupon</p>

                        <p class="py-1">$2.34</p>
                    </div>

                    <div class="flex justify-between py-2 border-b border-red-200">
                        <p class="py-1">Total</p>

                        <p class="py-1">$12.34</p>
                    </div>

                    <select name="payment-mode" id="payment-mode" class="w-2/3 mt-4 p-2 text-sm bg-redder text-white rounded-lg boder-redder">
                        <option value="" selected>Select your payment mode</option>
                        <option value="card">Card</option>
                        <option value="mpesa">Mpesa</option>
                        <option value="paypal">PayPal</option>
                        <option value="bank">Bank</option>
                        <option value="cash">Cash on Delivery</option>
                    </select>

                    <x-primary-button class="mt-4 w-fit">Place an Order</x-primary-button>
                </div>
            </form>
        </div>
    </div>
</div>
