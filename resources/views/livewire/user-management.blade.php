<div>
    <div class="title">Laravel - Livewire CRUD</div>

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


    @if($updateMode)
        @include('livewire.update')
    @else
        @include('livewire.create')
    @endif


    <table class="table table-bordered table-condensed">
        <tr>
            <td>ID</td>
            <td>NAME</td>
            <td>Committees</td>
            <td>ACTION</td>
        </tr>
        @foreach($data as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>

                    @foreach($user->committees as $committee)
                    <td>{{$committee->name}},</td>
                @endforeach
                <td width="100">
                    <button wire:click="edit({{$user->id}})" class="btn btn-xs btn-warning">Edit</button>
                    <button wire:click="destroy({{$user->id}})" class="btn btn-xs btn-danger">Del</button>
                </td>
            </tr>
        @endforeach
    </table>

</div>
