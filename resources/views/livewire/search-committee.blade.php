
<div class="relative ">
    <div class="m-6 flex justify-center" style="font-size: 35px">
        Here you can search the available committees :
    </div>
    <div class="flex justify-center">
        <input
            type="text"
            class="form-input p-6 m-6 "
            placeholder="Search committees..."
            wire:model="search"

        />
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
    <div class="flex m-6">
        <h2 class="font-bold p-6 flex justify-center">you can find and modify Committees Here..</h2>
        @foreach($all_committees as $committee)
        <div class="flex justify-center">
         <li class=" border-b bg-gray text-gray-900 ">
        <a href="/committees/{{$committee->id}}" class="w-full font-bold text-gray-900 m-2">
            <h5 class="text-gray-900"> Name : {{$committee->name}}</h5>
            <h5 class="text-gray-900">ID :  {{$committee->id}}

            </h5>

        </a>
        <a  href="/committees/{{$committee->id}}/edit" class="w-full font-bold text-white inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-gray-900 text-white hover:bg-gray-900 m-2">
            Edit
        </a>
        <a  href="/committees/{{$committee->id}}" class="w-full font-bold text-white inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-gray-900 text-white hover:bg-gray-900 m-2">
            View
        </a>
         </li>
        </div>



        @endforeach
    </div>

</div>
