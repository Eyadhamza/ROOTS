<div class="w-full">


    <a class="mx-auto flex justify-center w-1/2 title-s flex justify-center inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-gray-900 text-white hover:bg-gray-900 text-white m-2" wire:click="Performance()">Performance</a>
    @if($updateMode)
    <div class="m-12 w-2/3 mx-auto">
        <div class="flex justify-around">
            <div class="inline-block text-2xl w-1/3">
                <button type="button" wire:click="decreament_tasks_performance" class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-red-600  hover:bg-red-700 text-white " style="width: 50px;">-</button>
            </div>
            <div class="inline-block text-3xl w-1/3 flex justify-center">Required Tasks</div>
            <div class="inline-block text-2xl w-1/3 flex justify-end">
                <button type="button" wire:click="increament_tasks_performance" wire:model="tasks_performance" class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-gray-900 text-black hover:bg-gray-900 text-white " style="width: 50px;">+</button>

            </div>
        </div>

        <div class="shadow w-full bg-grey-light">
            <div class="bg-blue-600 text-xs leading-none py-1 text-center text-white" style="width: {{$tasks_performance}}%">
                {{$tasks_performance}}%
            </div>
        </div>


    </div>

    <div class="m-12 w-2/3 mx-auto">

        <div class="flex justify-around">
            <div class="inline-block text-2xl w-1/3">
                <button type="button" wire:click="decreament_interaction_performance" class="w-1/3 inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-red-600 text-white hover:bg-red-700 text-white" style="width: 50px;">-</button>
            </div>
            <div class="inline-block text-3xl w-1/3 flex justify-center">Interaction</div>
            <div class="inline-block text-2xl w-1/3 flex justify-end">
                <button type="button" wire:click="increament_interaction_performance" wire:model="interaction_performance" class= " w-1/3 inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-gray-900 text-white hover:bg-gray-900 text-white" style="width: 50px;">+</button>

            </div>
        </div>

        <div class="shadow w-full bg-grey-light">
            <div class="bg-blue-600 text-xs leading-none py-1 text-center text-white" role="progressbar" style="width: {{$interaction_performance}}%" aria-valuenow="50" aria-valuemin="0"
                     aria-valuemax="100">
                {{$interaction_performance}}%
            </div>
        </div>
    </div>

    <div class="m-12 w-2/3 mx-auto">
        <div class="flex justify-around">
            <div class="inline-block text-2xl w-1/3">
                <button type="button" wire:click="decreament_knowledge_performance" class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-red-600 text-white hover:bg-red-700 text-white" style="width: 50px;">-</button>
            </div>
            <div class="inline-block text-3xl w-1/3 flex justify-center">Knowledge</div>
            <div class="inline-block text-2xl w-1/3 flex justify-end">
                <button type="button" wire:click="increament_knowledge_performance" wire:model="knowledge_performance" class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-gray-900 text-white hover:bg-gray-900 text-white" style="width: 50px;">+</button>

            </div>
        </div>

        <div class="shadow w-full bg-grey-light">
            <div class="bg-blue-600 text-xs leading-none py-1 text-center text-white" role="progressbar" style="width: {{$knowledge_performance}}%" aria-valuenow="75" aria-valuemin="0"
                 aria-valuemax="100">
                {{$knowledge_performance}}%
            </div>
        </div>
    </div>

    <div class="flex justify-center m-6">
        <button wire:click="update()" class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-3 px-4 leading-normal no-underline bg-gray-900 text-white hover:bg-gray-900 ">Update</button>
    </div>
    @if (session()->has('message'))
        <div class="relative px-3 py-3 mb-4 border rounded bg-green-200 border-green-300 text-green-800">
            {{ session('message') }}
        </div>
    @endif

     @endif
</div>
