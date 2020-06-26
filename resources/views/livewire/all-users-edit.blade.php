<x-master>
@livewire('single-user-edit')

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
            <td>
            @foreach($user->committees as $committee)
                 {{$committee->name}},
            @endforeach
            </td>
            <td width="100">
                <button wire:click="edit({{$user->id}})" class="btn btn-xs btn-warning">Edit</button>
                <button wire:click="destroy({{$user->id}})" class="btn btn-xs btn-danger">Del</button>
            </td>
        </tr>
    @endforeach
    </table>
</x-master>
