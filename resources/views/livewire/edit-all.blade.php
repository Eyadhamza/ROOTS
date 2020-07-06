<div>


    @include('livewire.create')
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
    @livewire('search')


    <table class="w-3/4 mx-auto border-2  bg-blue-200 ">
        <div class ="flex justify-center text-4xl text-blue-800">Here are all users </div>

        <tr>
            <td class="font-bold text-2xl text-blue-800">NAME</td>
            <td class="font-bold text-2xl text-blue-800">Committees</td>
            <td class="font-bold text-2xl text-blue-800">Roles</td>
            <td class="font-bold text-2xl text-blue-800">ACTION</td>
        </tr>
        @foreach($users as $user)

            <tr class="border-2 rounded-full border-blue-400 bg-blue-100 text-2xl ">
                <td>{{$user->name}}</td>
                <td>
                    @foreach($user->committees as $committee)
                        {{$committee->name}},
                    @endforeach
                </td>
                <td>
                    @foreach($user->roles as $role)
                        {{$role->name}},
                    @endforeach
                </td>
                <td class="w-30">
                    <button wire:click="edit({{$user->id}})" class="bg-blue-900 text-white hover:bg-gray-900 w-full text-white">Edit</button>
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
                    <button onclick="confirm('Confirm delete?') || event.stopImmediatePropagation()" wire:click="destroy({{$user->id}})"
                            class="bg-red-500 text-white hover:bg-gray-900 w-full text-white bg-red-600 text-white hover:bg-red-700 w-full">
                        Delete
                    </button>
                </td>

            </tr>

        @endforeach
        {{$users->links()}}
    </table>

</div>
