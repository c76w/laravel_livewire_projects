<div class="p-3 fw-container">
    <!-- Page title -->
    <div class="p-3 text-center h1">Calculator</div>
    <!-- Calculator -->
    <div class="py-5 row g-3">
        <div class="col-sm-3">
            <input class="form-control" type="number" wire:model="number1" placeholder="Number 1">
        </div>
        <div class="col-sm-3">
            <select class="form-select" wire:model="action">
                <option>+</option>
                <option>-</option>
                <option>*</option>
                <option>/</option>
                <option>%</option>
            </select>
        </div>
        <div class="col-sm-3">
            <input class="form-control" type="number" wire:model="number2" placeholder="Number 2">
        </div>
        <div class="text-center col-sm-3">
            <button wire:click="calculate" type="button" class="btn btn-primary" {{ $disabled ? 'disabled' : ''}}> = </button>
        </div>
    </div>
    <!-- Display the result-->
    <div class="p-3 text-center row">
        <div class="col">
            <p class="h1">{{$result}}</p>
        </div>
    </div>
</div>