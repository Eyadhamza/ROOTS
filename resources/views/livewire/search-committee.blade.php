
<div class="relativ ">
    <div class="m-4" style="font-size: 35px">
        Here you can search the available committees :
    </div>
    <input
        type="text"
        class="form-input p-3 m-3"
        placeholder="Search committees..."
        wire:model="search"

    />

    <div wire:loading class="absolute z-10 list-group bg-white w-full rounded-t-none shadow-lg">
        <div class="list-item">Searching...</div>
    </div>

    @if(!empty($search))
        <div class="fixed top-0 right-0 bottom-0 left-0" wire:click="input_reset"></div>

        <div class="absolute z-10 list-group bg-white w-full rounded-t-none shadow-lg ">
            @if(!empty($committees))
                @foreach($committees as $committee)

                    <li class=" border-bottom bg-dark text-white">   <a href="/profile/{{$committee->id}}" class="w-full font-bold text-white">
                            <h5 class="text-white"> Name : {{$committee->name}}</h5>
                            <h5 class="text-white">ID :  {{$committee->id}}</h5>
                        </a>

                    </li>

                @endforeach
            @else
                <div class="list-item">No results!</div>
            @endif
        </div>
    @endif
</div>
