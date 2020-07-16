
<div class="relative mx-auto">

    <div class="p-8 w-full mx-auto lg:w-1/2">
        <p class ="mx-auto text-xl text-blue-800 m-3 lg:text-4xl sm:flex">Search the available committees :</p>

        <div class="bg-white flex items-center   rounded-full shadow-xl w-full">

            <input wire:model="search" class="rounded-l-full w-full sm:flex  py-4 px-6 text-gray-700 leading-tight focus:outline-none" id="search" type="text" placeholder="Search">

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

        <div class="absolute z-10 flex flex-col pl-0 mb-0 border rounded border-gray-300 bg-white w-full rounded-t-none shadow-lg ">
            @if(!empty($committees))
                @foreach($committees as $committee)

                    <li class=" border-b bg-gray-900 text-white">   <a href="/profile/{{$committee->id}}" class="w-full font-bold text-white">
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



        <h2 class="font-bold p-6 flex justify-center text-2xl lg:text-4xl">Find and modify Committees Here..</h2>
        @foreach($all_committees as $committee)

            <div class="flex justify-around p-4 rounded-lg border-2 border-blue-300 w-full lg:w-3/4 mx-auto">
                <div class="w-1/3">
                    <p class="text-gray-900 text-2xl lg:text-4xl "> {{$committee->name}}</p>

                </div>

                <div class="w-2/3  lg:w-1/6 flex justify-around">
                    <a  href="/committees/{{$committee->id}}/edit" class="block lg:inline-block py-2 px-4 m-2 font-bold bg-blue-700 hover:bg-blue-900 text-white rounded-lg  flex justify-center ">
                        Edit
                    </a>
                    <a  href="/committees/{{$committee->id}}" class="block lg:inline-block py-2 px-4 m-2 font-bold bg-black text-white rounded-lg  flex justify-center " >
                        View
                    </a>
                </div>

            </div>




        @endforeach

</div>
