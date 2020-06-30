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
            <label class="inline-block w-32 font-bold">Role1:</label>
            <div class="mb-8">

                <select name="role1" wire:model="role1" class="border shadow p-2 bg-white">
                    <option value=''>Choose a Role</option>
                    @foreach($roles as $role)
                        <option value={{  $role->id }}>{{$role->name }}</option>
                    @endforeach
                </select>
            </div>
            <label class="inline-block w-32 font-bold">Role1:</label>
            <div class="mb-8">

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
{{--            @livewire('search-committee')--}}
{{--            Important note!--}}
{{--            <p>please search available committees before you type ! </p>--}}

{{--            First Committee--}}
{{--            <div class="input-group m-3">--}}

{{--                <input wire:model="id1" type="text" class="form-control input-sm">--}}

{{--            </div>--}}

{{--            Second Committee--}}
{{--            <div class="input-group m-3">--}}

{{--                <input wire:model="id2" type="text" class="form-control input-sm">--}}
{{--            </div>--}}
            <div class="mb-8">
                <label class="inline-block w-32 font-bold">Committee1:</label>
                <select name="committee1" wire:model="id1" class="border shadow p-2 bg-white">
                    <option value=''>Choose a Committee</option>
                    @foreach($committees as $committee)
                        <option value={{  $committee->id }}>{{$committee->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-8">
                <label class="inline-block w-32 font-bold">Committee2:</label>
                <select name="committee2" wire:model="id2" class="border shadow p-2 bg-white">
                    <option value=''>Choose a Committee</option>
                    @foreach($committees as $committee)
                        <option value={{$committee->id }}>{{$committee->name }}</option>
                    @endforeach
                </select>
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
