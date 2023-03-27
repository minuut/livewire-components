<div class="container mx-auto py-16 px-8">
    <div class="mb-4">
        <input type="text" wire:model.debounce.300ms="search" placeholder="Search for Users">
    </div>
    <table class="table-auto w-full">
        <thead>
        <tr>
            <th class="py-2 px-3 bg-gray-100 border-b-2 text-left">ID</th>
            <th class="py-2 px-3 bg-gray-100 border-b-2 text-left">Name</th>
            <th class="py-2 px-3 bg-gray-100 border-b-2 text-left">Email</th>
            <th class="py-2 px-3 bg-gray-100 border-b-2 text-left">Email verified at</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td class="py-2 px-3 border-b">{{$user->id}}</td>
                <td class="py-2 px-3 border-b">{{$user->name}}"</td>
                <td class="py-2 px-3 border-b">{{$user->email}}"</td>
                <td class="py-2 px-3 border-b">{{$user->email_verified_at}}"</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

@push('scripts')
    <script src="{{ asset('js/search.js') }}"></script>
@endpush