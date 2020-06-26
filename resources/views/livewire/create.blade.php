<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">New User</h3>
    </div>

    <div class="panel-body">
        <div class="form-group">
            <div class="input-group">
                Name
                <input wire:model="name" type="text" class="form-control input-sm">
            </div>
            <div class="input-group">
                Role
                <input wire:model="role" type="text" class="form-control input-sm">
            </div>
            <div class="input-group">
                email
                <input wire:model="email" type="text" class="form-control input-sm">
            </div>
            <div class="input-group">
                password
                <input wire:model="password" type="password" class="form-control input-sm">
            </div>
            <div class="input-group">
                First Committee
                <input wire:model="id1" type="text" class="form-control input-sm">
            </div>
            <div class="input-group">
                Second Committee
                <input wire:model="id2" type="text" class="form-control input-sm">
            </div>
            <div class="input-group">
                <br>
                <button wire:click="store()" class="btn btn-default">Save</button>
            </div>
{{--            committess--}}


{{--            end committees--}}
        </div>
    </div>
</div>
