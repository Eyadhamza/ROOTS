<div class="panel panel-default bg-dark">
    <div class="panel-heading">
        <h3 class="panel-title text-white flex justify-content-center">Edit User</h3>
    </div>
    <div class="flex justify-content-center p-5 text-white  ">
        <input type="hidden" wire:model="selected_id">
        <div class="form-group lg-flex justify-content-center ">
            Name
            <div class="input-group m-3">

                <input wire:model="name" type="text" class="form-control input-sm">
            </div>
            Role
            <div class="input-group m-3">

                <input wire:model="role" type="text" class="form-control input-sm">
            </div>
            email
            <div class="input-group m-3">

                <input wire:model="email" type="text" class="form-control input-sm">
            </div>
            password
            <div class="input-group m-3">

                <input wire:model="password" type="password" class="form-control input-sm">
            </div>
            First Committee
            <div class="input-group m-3">

                <input wire:model="id1" type="text" class="form-control input-sm">
            </div>
            Second Committee
            <div class="input-group m-3">

                <input wire:model="id2" type="text" class="form-control input-sm">
            </div>

            <div class="input-group flex justify-content-center">
                <br>
                <button wire:click="update()" class="btn btn-default ">Update</button>
            </div>
        </div>
    </div>


</div>
