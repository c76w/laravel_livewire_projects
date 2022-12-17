<div class="p-3 fw-container">
    <!-- Page title -->
    <div class="p-3 text-center h1">To-Do List</div>
    <!-- Add to-Do -->
    <div class="p-2 row g-3">
        <div class="col-9">
            <input class="form-control" type="text" wire:model="todoText" wire:keydown.enter="addTodo" placeholder="Type and hit enter">
        </div>
        <div class="text-center col-3">
            <button type="button" wire:click="addTodo" class="btn btn-primary">Add To-Do</button>
        </div>
    </div>

    <!-- Display the To-Do List-->
    <div class="p-2 mt-5 text-center row">
        <div class="col">
            <div class="p-3 card">
                <!-- If there are no To-Dos then display a message -->
                @if (count($todos) == 0)
                    <!-- Display text -->
                    <p class="card-text">
                        {{ __('There are no To-Dos ') }}
                    </p>
                @endif
                
                <!-- If there are To-Dos then loop through each To-Do -->
                @foreach ($todos as $index => $todo)
                    <div class="my-3 row">
                        <div class="col-2">
                            <input class="form-check-input" type="checkbox" {{$todo->completed ? 'checked' : ''}} wire:change="toggleTodo({{$todo->id}})">
                        </div>
                        <div class="text-start col-xs-10 col-sm-8">
                            <label class="form-check-label fs-3 {{$todo->completed ? 'text-success' : ''}}">{!!$todo->completed ? '<del>' : ''!!}{{$todo->todo}}{!!$todo->completed ? '</del>' : ''!!}</label>
                        </div>
                        <div class="col-sm-2">
                            <button type="button" wire:click="deleteTodo({{$todo->id}})" style="border: none; background-color: transparent; color: #f00">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="48" height="48" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <line x1="4" y1="7" x2="20" y2="7"></line>
                                    <line x1="10" y1="11" x2="10" y2="17"></line>
                                    <line x1="14" y1="11" x2="14" y2="17"></line>
                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                    </svg>
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
