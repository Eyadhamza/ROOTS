
<div class=" mx-auto">


    <div class="p-2 w-full mx-auto ">
        <p class ="mx-auto text-2xl text-blue-800 m-4 flex justify-center lg:text-4xl"> Search achievements </p>

        <div class="bg-white flex items-center rounded-full shadow-xl">

            <input wire:model="search" class="font-bold rounded-l-full w-full py-4 px-6 text-gray-700 leading-tight focus:outline-none" id="search" type="text" placeholder="Search">

            <div class="p-1">
                <button class="bg-blue-500 text-white rounded-full p-2 hover:bg-blue-400 focus:outline-none w-12 h-12 flex items-center justify-center">
                    <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M15.853 16.56c-1.683 1.517-3.911 2.44-6.353 2.44-5.243 0-9.5-4.257-9.5-9.5s4.257-9.5 9.5-9.5 9.5 4.257 9.5 9.5c0 2.442-.923 4.67-2.44 6.353l7.44 7.44-.707.707-7.44-7.44zm-6.353-15.56c4.691 0 8.5 3.809 8.5 8.5s-3.809 8.5-8.5 8.5-8.5-3.809-8.5-8.5 3.809-8.5 8.5-8.5z"/></svg>                </button>
            </div>
        </div>
    </div>

    <div wire:loading class="absolute z-10 flex flex-col pl-0 mb-0 border rounded border-gray-300 bg-white w-full rounded-t-none shadow-lg">
        <div class="list-item">Searching...</div>
    </div>


    @if(!empty($search))
        <div class="fixed top-0 right-0 bottom-0 left-0" wire:click="input_reset"></div>

        <div class="absolute z-10 flex flex-col pl-0 mb-0 border rounded-lg border-gray-300 bg-white w-1/6 rounded-lg shadow-lg ">
            @if(!empty($achievements))
                @foreach($achievements as $achievement)

                    <li class=" p-2 bg-blue-500 text-black border-2 border-blue-200 rounded-lg">   <a href="/achievement/{{$achievement->id}}" class="w-full font-bold text-white">
                            <h3 class="text-white"> {{$achievement->title}}</h3>

                        </a>

                    </li>

                @endforeach
            @else
                <div class="list-item">No results!</div>
            @endif
        </div>
    @endif
</div>
