<div class="grid grid-cols-3 gap-4">
    @foreach ($images as $image)
        @if (is_array($image) && count($image) > 0)
            
                @foreach ($image as $url)
                    <img src="{{ $url }}" class="rounded-lg shadow-lg hover:scale-105 transition-transform duration-500 p-3"
                         wire:mouseover="rotateImage('{{ $url }}')"
                         wire:mouseout="resetImage('{{ $url }}')">
                @endforeach
           
        @endif
    @endforeach
</div>

@push('scripts')
    <script src="{{ asset('resources/js/rotate.js') }}"></script>
@endpush

