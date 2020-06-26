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
            <td>PHONE</td>
            <td>ACTION</td>
        </tr>

        @dump($data)
        @foreach($data as $row)
            <tr>
                <td>{{@$row->id}}</td>
                <td>{{@$row->name}}</td>
                <td>{{@$row->phone}}</td>
                <td width="100">
                    <button wire:click="edit({{@$row->id}})" class="btn btn-xs btn-warning">Edit</button>
                    <button wire:click="destroy({{@$row->id}})" class="btn btn-xs btn-danger">Del</button>
                </td>
            </tr>
        @endforeach
    </table>

</div>
