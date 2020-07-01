<div>


    @include('livewire.create')
        @livewire('search')
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
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
    <table class="table table-bordered table-condensed">

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
                    <button wire:click="edit({{$user->id}})" class="btn btn-xs btn-dark w-100 text-white">Edit</button>
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
                    <button onclick="confirm('Confirm delete?') || event.stopImmediatePropagation()" wire:click="destroy({{$user->id}})" class="btn btn-xs btn-danger w-100">Delete</button>
                </td>

            </tr>

        @endforeach

    </table>

</div>
