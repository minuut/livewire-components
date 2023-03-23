<div class="bg-gray-700">
    <div class="flex flex-col items-center">
        <div class="flex p-16 mx-auto justify-center items-center gap-4">
            <input type ="number" wire:model="number1" placeholder="...">
            <select class="w-24" wire:model="action">
                <option>+</option>
                <option>-</option>
                <option>*</option>
                <option>/</option>
                <option>%</option>
            </select>
            <input type="number" wire:model="number2" placeholder="...">
            <button wire:click="calculate" class="bg-red-400 py-2 px-4 hover:bg-orange-300 rounded-sm rounded-text disabled:cursor-not-allowed disabled:bg-opacity-90">
                {{ $disabled ? 'disabled' : '=' }}
            </button>
        </div>
        <p class="text-3xl p-3">{{ $result }}</p>
    </div>
</div>
