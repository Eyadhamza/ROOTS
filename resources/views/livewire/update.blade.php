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
            <div class="m-3">

                <select name="role1" wire:model="role1" class="border shadow p-2 bg-white">
                    <option value=''>Choose a Role</option>
                    @foreach($roles as $role)
                        <option value={{  $role->id }}>{{$role->name }}</option>
                    @endforeach
                </select>
            </div>
            <label class="inline-block w-32 font-bold">Role1:</label>
            <div class="m-3">

                <select name="role2" wire:model="role2" class="border shadow p-2 bg-white">
                    <option value=''>Choose a Role</option>
                    @foreach($roles as $role)
                        <option value={{  $role->id }}>{{$role->name }}</option>
                    @endforeach
                </select>
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
            <div class="m-3">
                <label class="inline-block w-32 font-bold">Committee1:</label>
                <select name="committee1" wire:model="id1" class="border shadow p-2 bg-white">
                    <option value=''>Choose a Committee</option>
                    @foreach($committees as $committee)
                        <option value={{  $committee->id }}>{{$committee->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="m-3">
                <label class="inline-block w-32 font-bold">Committee2:</label>
                <select name="committee2" wire:model="id2" class="border shadow p-2 bg-white">
                    <option value=''>Choose a Committee</option>
                    @foreach($committees as $committee)
                        <option value={{$committee->id }}>{{$committee->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="input-group flex justify-content-center m-3">
                <br>
                <button wire:click="update()" class="btn btn-default ">Update</button>
            </div>

        </div>
    </div>


</div>
