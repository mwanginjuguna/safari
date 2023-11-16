<div class="grid grid-cols-4 items-center gap-x-2">
    <img src="{{ $imageUrl }}" alt="Customer" class="rounded-full h-12 col-span-1 justify-self-end ring-4 ring-redder">
    <div class="col-span-3 text-darkblue">
        <h4 class="py-1 font-semibold text-redder">
            {{ $title }}
        </h4>

        <p class="py-1 5 text-sm italic">
            "{{ $description }}"
        </p>
    </div>
</div>