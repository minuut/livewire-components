<div class="flex flex-col w-[300px] mx-auto py-16">
    <div class="flex gap-4 justify-between">
        <input type="text" wire:model="todoText" wire:keydown.enter="addTodo" class="flex-1">
        <button wire:click="addTodo">Toevoegen
        </button>
    </div>

    <div class="py-6">
        @if (count($todos) == 0) 
        <p> no todos </p>
        @endif

        @foreach($todos)
    </div>
</div>
