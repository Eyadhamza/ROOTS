
<div class=" mx-auto">


    <div class="p-8 w-full mx-auto lg:w-1/2">
            <p class ="mx-auto text-2xl text-blue-800 m-4 flex justify-center lg:text-4xl"> Search users :</p>

        <div class="bg-white flex items-center rounded-full shadow-xl">

            <input wire:model="search" class="rounded-l-full w-full py-4 px-6 text-gray-700 leading-tight focus:outline-none" id="search" type="text" placeholder="Search">

            <div class="p-4">
                <button class="bg-blue-500 text-white rounded-full p-2 hover:bg-blue-400 focus:outline-none w-12 h-12 flex items-center justify-center">
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </div>
    </div>

    <div wire:loading class="absolute z-10 flex flex-col pl-0 mb-0 border rounded border-gray-300 bg-white w-full rounded-t-none shadow-lg">
        <div class="list-item">Searching...</div>
    </div>


    @if(!empty($search))
        <div class="fixed top-0 right-0 bottom-0 left-0" wire:click="input_reset"></div>

        <div class="absolute z-10 flex flex-col pl-0 mb-0 border rounded border-gray-300 bg-white w-1/3 rounded-t-none shadow-lg ">
            @if(!empty($users))
                @foreach($users as $user)

                    <li class="m-2  p-2 bg-gray-900 text-white">   <a href="/profile/{{$user->id}}" class="w-full font-bold text-white">
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
