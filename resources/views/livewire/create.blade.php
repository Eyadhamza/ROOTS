<div class="w-full lg:w-3/4 mx-auto bg-gray-900 ">
    <div class="panel-heading ">
        <h3 class="panel-title text-white flex justify-center text-2xl p-3">Here you can create a new User</h3>
    </div>

    <div class="flex justify-center p-12 text-white  ">
        <div class="mb-4 lg-flex justify-center ">
            Name
            <div class="relative flex items-stretch w-full m-6">

                <input wire:model="name" type="text" class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded input-sm">
            </div>
            <label class="inline-block w-32 font-bold">Role1:</label>
            <div class="m-6">

                <select name="role1" wire:model="role1" class="border shadow p-2 bg-black ml-12">
                    <option value=''>Choose a Role</option>
                    @foreach($roles as $role)
                        <option value={{  $role->id }}>{{$role->name }}</option>
                    @endforeach
                </select>
            </div>
            <label class="inline-block w-32 font-bold">Role2:</label>
            <div class="m-6">

                <select name="role2" wire:model="role2" class="border shadow p-2 bg-black ml-12">
                    <option value=''>Choose a Role</option>
                    @foreach($roles as $role)
                        <option value={{  $role->id }}>{{$role->name }}</option>
                    @endforeach
                </select>
            </div>


            email
            <div class="relative flex items-stretch w-full m-6">

                <input wire:model="email" autocomplete="off" type="text" class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded input-sm">
            </div>
            password
            <div class="relative flex items-stretch w-full m-6">

                <input wire:model="password" type="password" class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded input-sm">
            </div>
{{--            @livewire('search-committee')--}}
{{--            Important note!--}}
{{--            <p>please search available committees before you type ! </p>--}}

{{--            First Committee--}}
{{--            <div class="relative flex items-stretch w-full m-6">--}}

{{--                <input wire:model="id1" type="text" class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded input-sm">--}}

{{--            </div>--}}

{{--            Second Committee--}}
{{--            <div class="relative flex items-stretch w-full m-6">--}}

{{--                <input wire:model="id2" type="text" class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded input-sm">--}}
{{--            </div>--}}
            <label class="inline-block w-32 font-bold">Committee1:</label>
            <div class="m-6">

                <select name="committee1" wire:model="id1" class="border shadow p-2 bg-black ml-10">
                    <option value=''>Choose a Committee</option>
                    @foreach($committees as $committee)
                        <option value={{  $committee->id }}>{{$committee->name }}</option>
                    @endforeach
                </select>
            </div>
            <label class="inline-block w-32 font-bold ">Committee2:</label>
            <div class="m-6">

                <select name="committee2" wire:model="id2" class="border shadow p-2 bg-black ml-10">
                    <option value=''>Choose a Committee</option>
                    @foreach($committees as $committee)
                        <option value={{$committee->id }}>{{$committee->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="relative flex items-stretch w-full m-6">
                <br>
                <button wire:click="store()" class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline btn-default mx-auto">  Save</button>
            </div>
{{--            committess--}}


{{--            end committees--}}
        </div>
    </div>
</div>
