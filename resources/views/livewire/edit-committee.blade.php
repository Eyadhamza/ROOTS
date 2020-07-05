<div>


    @include('livewire.create')
        @livewire('search')
        @if (session()->has('message'))
            <div class="relative px-3 py-3 mb-4 border rounded bg-green-200 border-green-300 text-green-800">
                {{ session('message') }}
            </div>
        @endif
    @if (count($errors) > 0)
        <div class="relative px-3 py-3 mb-4 border rounded bg-red-200 border-red-300 text-red-800">
            <a href="#" class="absolute top-0 bottom-0 right-0 px-4 py-3" data-dismiss="alert">&times;</a>
            <strong>Sorry!</strong> invalid input.<br><br>
            <ul style="list-style-type:none;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <table class="w-full max-w-full mb-4 bg-transparent table-bordered table-condensed">

        @foreach($data as $user)
            <tr>
                <td>ID</td>
                <td>NAME</td>
                <td>Committees</td>
                <td>ACTION</td>
            </tr>
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>
                    @foreach($user->committees as $committee)
                        {{$committee->name}},
                    @endforeach
                </td>
                <td width="300">
                    <button wire:click="edit({{$user->id}})" class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline btn-xs bg-gray-900 text-white hover:bg-gray-900 w-full text-white">Edit</button>
                    @if($updateMode && $selected_id==$user->id)
                        @include('livewire.update')


                    @endif
                    @if (count($errors) > 0 &&  $selected_id==$user->id )
                        <div class="relative px-3 py-3 mb-4 border rounded bg-red-200 border-red-300 text-red-800">
                            <a href="#" class="absolute top-0 bottom-0 right-0 px-4 py-3" data-dismiss="alert">&times;</a>
                            <strong>Sorry!</strong> invalid input.<br><br>
                            <ul style="list-style-type:none;">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <button onclick="confirm('Confirm delete?') || event.stopImmediatePropagation()" wire:click="destroy({{$user->id}})" class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline btn-xs bg-red-600 text-white hover:bg-red-700 w-full">Delete</button>
                </td>

            </tr>

        @endforeach

    </table>

</div>
