<div class="p-3 fw-container">
    <!-- Page title -->
    <div class="p-3 text-center h1">Simple Counter</div>
    <!-- Counter -->
    <div class="py-5 row g-3">
        <div class="text-center col">
            <button type="button" wire:click="decrement" class="btn btn-primary">-</button>
            <span class="px-3">{{ $count }}</span>
            <button type="button" wire:click="increment" class="btn btn-primary">+</button>
        </div>
    </div>
</div>
