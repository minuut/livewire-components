<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;

class ApiCall extends Component
{
    public $images = [];

    public function mount()
    {
        $response = Http::get('https://dog.ceo/api/breeds/image/random/9');

        $this->images = $response->json();
        Log::info('Component mounted!');
    }
    public function rotateImage($url)
    {
        $this->emit('rotateImage', $url);
    }

    public function resetImage($url)
    {
        $this->emit('resetImage', $url);
    }

    public function render()
    {
        return view('livewire.api-call');
    }
}
