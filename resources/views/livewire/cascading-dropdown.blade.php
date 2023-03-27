<div class="flex flex-col gap-6 w-[400px] mx-auto py-16">
    <select wire:model="selectedContinent" wire:change="changeContinent" class="w-full">
      <option value="-1">Please select continent</option>
      @foreach($continents as $continent)
        <option value="{{$continent->id}}">{{$continent->name}}</option>
      @endforeach
    </select>
    <div class="flex relative">
      <select wire:model="selectedCountry" class="w-full pr-10">
        <option value="-1">Please select country</option>
        @foreach($countries as $country)
          <option value="{{$country->id}}">{{$country->name}}</option>
        @endforeach
      </select>
      
        <svg wire:loading wire:target="changeContinent, selectedCountry" class="absolute right-0 top-0 mt-1 mr-[-25px] h-5 w-5 text-black animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
          <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
          <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-3.647z"></path>
        </svg>
      
    </div>
  </div>
  