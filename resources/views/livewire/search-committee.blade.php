
<div class="relative ">
    <div class="m-4 d-flex justify-content-center" style="font-size: 35px">
        Here you can search the available committees :
    </div>
    <div class="d-flex justify-content-center">
        <input
            type="text"
            class="form-input p-3 m-3 "
            placeholder="Search committees..."
            wire:model="search"

        />
    </div>


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
    <div class="flex m-4">
        <h2 class="font-weight-bold p-4 d-flex justify-content-center">you can find and modify Committees Here..</h2>
        @foreach($all_committees as $committee)
        <div class="d-flex justify-content-center">
         <li class=" border-bottom bg-gray text-dark ">
        <a href="/committees/{{$committee->id}}" class="w-full font-bold text-dark m-2">
            <h5 class="text-dark"> Name : {{$committee->name}}</h5>
            <h5 class="text-dark">ID :  {{$committee->id}}

            </h5>

        </a>
        <a  href="/committees/{{$committee->id}}/edit" class="w-full font-bold text-white btn btn-dark m-2">
            Edit
        </a>
        <a  href="/committees/{{$committee->id}}" class="w-full font-bold text-white btn btn-dark m-2">
            View
        </a>
         </li>
        </div>



        @endforeach
    </div>

</div>
