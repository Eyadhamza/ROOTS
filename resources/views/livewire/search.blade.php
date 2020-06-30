
<div class="relative  ">
    <div class="m-4" style="font-size: 35px">
        Here you can search users :
    </div>
    <input
        type="text"
        class="form-input p-3 m-3"
        placeholder="Search users..."
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

                    <li class="m-4 border-bottom p-3 bg-dark text-white">   <a href="/profile/{{$user->id}}" class="w-full font-bold text-white">
                          <h3 class="text-white"> Name : {{$user->name}}</h3>
                            <h3 class="text-white">ID :  {{$user->id}}</h3>
                            <h3 class="text-white">@foreach($user->committees as $committee)
                                    {{$committee->name}},
                                @endforeach</h3>
                            <h3></h3>
                        </a>

                    </li>

                @endforeach
            @else
                <div class="list-item">No results!</div>
            @endif
        </div>
    @endif
</div>
