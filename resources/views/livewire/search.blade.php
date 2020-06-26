<div class="relative">
    <input
        type="text"
        class="form-input"
        placeholder="Search Contacts..."
        wire:model="search"

    />

    <div wire:loading class="absolute z-10 list-group bg-white w-full rounded-t-none shadow-lg">
        <div class="list-item">Searching...</div>
    </div>

    @if(!empty($search))
        <div class="fixed top-0 right-0 bottom-0 left-0" wire:click="input_reset"></div>

        <div class="absolute z-10 list-group bg-white w-full rounded-t-none shadow-lg ">
            @if(!empty($users))
                @foreach($users as $user)

                    <li>   <a href="/profile/{{$user->username}}" class="w-full font-bold ">
                            {{$user->name}}
                        </a>
                    </li>

                @endforeach
            @else
                <div class="list-item">No results!</div>
            @endif
        </div>
    @endif
</div>
