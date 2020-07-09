<div class="panel panel-default bg-gray-900">
    <div class="panel-heading">
        <h3 class="panel-title text-white flex justify-center">Edit User</h3>
    </div>
    <div class="flex justify-center p-12 text-white  ">
        <input type="hidden" wire:model="selected_id">
        <div class="mb-4 lg-flex justify-center ">
            Name
            <div class="relative flex items-stretch w-full m-6">

                <input wire:model="name" type="text" class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded input-sm">
            </div>
            <div class="m-6">

                <select name="role1" wire:model="role1" class="border shadow p-2 bg-black">
                    <option value=''>Choose a Role</option>
                    @foreach($roles as $role)
                        <option value={{  $role->id }}>{{$role->name }}</option>
                    @endforeach
                </select>
            </div>
            <label class="inline-block w-32 font-bold">Role1:</label>
            <div class="m-6">

                <select name="role2" wire:model="role2" class="border shadow p-2 bg-black">
                    <option value=''>Choose a Role</option>
                    @foreach($roles as $role)
                        <option value={{  $role->id }}>{{$role->name }}</option>
                    @endforeach
                </select>
            </div>
            email
            <div class="relative flex items-stretch w-full m-6">

                <input wire:model="email" type="text" class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded input-sm">
            </div>
            password
            <div class="relative flex items-stretch w-full m-6">

                <input wire:model="password" type="password" class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded input-sm">
            </div>
            First Committee
            <div class="m-6">
                <label class="inline-block w-32 font-bold">Committee1:</label>
                <select name="committee1" wire:model="id1" class="border shadow p-2 bg-black">
                    <option value=''>Choose a Committee</option>
                    @foreach($committees as $committee)
                        <option value={{  $committee->id }}>{{$committee->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="m-6">
                <label class="inline-block w-32 font-bold">Committee2:</label>
                <select name="committee2" wire:model="id2" class="border shadow p-2 bg-black">
                    <option value=''>Choose a Committee</option>
                    @foreach($committees as $committee)
                        <option value={{$committee->id }}>{{$committee->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="relative flex items-stretch w-full flex justify-center m-6">
                <br>
                <button wire:click="update()" class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline btn-default ">Update</button>
            </div>

        </div>
    </div>


</div>
