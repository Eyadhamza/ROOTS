<div class=" bg-dark  ">
    <div class="panel-heading ">
        <h3 class="panel-title text-white flex justify-content-center">Here you can create a new User</h3>
    </div>

    <div class="flex justify-content-center p-5 text-white  ">
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

            <div class="input-group m-3">
                <br>
                <button wire:click="store()" class="btn btn-default ">  Save</button>
            </div>
{{--            committess--}}


{{--            end committees--}}
        </div>
    </div>
</div>
