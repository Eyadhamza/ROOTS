<div>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong>Sorry!</strong> invalid input.<br><br>
            <ul style="list-style-type:none;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @include('livewire.create')
    @livewire('search')


    <table class="table table-bordered table-condensed">

        @foreach($users as $user)
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
                    <button wire:click="edit({{$user->id}})" class="btn btn-xs btn-warning w-100">Edit</button>
                    @if($updateMode && $selected_id==$user->id)
                        @include('livewire.update')


                    @endif
                    @if (count($errors) > 0 &&  $selected_id==$user->id )
                        <div class="alert alert-danger">
                            <a href="#" class="close" data-dismiss="alert">&times;</a>
                            <strong>Sorry!</strong> invalid input.<br><br>
                            <ul style="list-style-type:none;">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <button wire:click="destroy({{$user->id}})" class="btn btn-xs btn-danger w-100">Delete</button>
                </td>

            </tr>

        @endforeach
        {{$users->links()}}
    </table>

</div>
