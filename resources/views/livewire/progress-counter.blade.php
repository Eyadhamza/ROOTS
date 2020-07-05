<div class="w-full">


    <btn class="title-s flex justify-center inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-gray-900 text-white hover:bg-gray-900 text-white" wire:click="Performance()">Performance</btn>
    @if($updateMode)
    <div class="m-12">
        <span>Required Tasks</span><span class="pull-right">{{$tasks_performance}}%</span>
        <button type="button" wire:click="decreament_tasks_performance" class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-red-600 text-white hover:bg-red-700 text-white" style="width: 50px;">-</button>
        <button type="button" wire:click="increament_tasks_performance" wire:model="tasks_performance" class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-gray-900 text-white hover:bg-gray-900 text-white " style="width: 50px;">+</button>
        <div class="shadow w-full bg-grey-light">
            <div class="bg-blue-300 text-xs leading-none py-1 text-center  " style="width: {{$tasks_performance}}%">
                {{$tasks_performance}}%
            </div>
        </div>


    </div>

    <div class="m-12">

        <span >Interaction</span><span class="pull-right">{{$interaction_performance}}%</span>
        <button type="button" wire:click="decreament_interaction_performance" class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-red-600 text-white hover:bg-red-700 text-white" style="width: 50px;">-</button>
        <span class="">{{$interaction_performance}}%</span>
        <button type="button" wire:click="increament_interaction_performance" wire:model="interaction_performance" class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-gray-900 text-white hover:bg-gray-900 text-white" style="width: 50px;">+</button>
        <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: {{$interaction_performance}}%" aria-valuenow="50" aria-valuemin="0"
                     aria-valuemax="100">
            </div>
        </div>
    </div>

    <div class="m-12">
        <span>Knowledge</span><span class="pull-right">{{$knowledge_performance}}%</span>
        <button type="button" wire:click="decreament_knowledge_performance" class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-red-600 text-white hover:bg-red-700 text-white" style="width: 50px;">-</button>
        <span class="">{{$knowledge_performance}}%</span>
        <button type="button" wire:click="increament_knowledge_performance" wire:model="knowledge_performance" class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-gray-900 text-white hover:bg-gray-900 text-white" style="width: 50px;">+</button>
        <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: {{$knowledge_performance}}%" aria-valuenow="75" aria-valuemin="0"
                 aria-valuemax="100">
            </div>
        </div>
    </div>

    <div class="flex justify-center m-6">
        <button wire:click="update()" class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-gray-900 text-white hover:bg-gray-900 ">Update</button>
    </div>
    @if (session()->has('message'))
        <div class="relative px-3 py-3 mb-4 border rounded bg-green-200 border-green-300 text-green-800">
            {{ session('message') }}
        </div>
    @endif

     @endif
</div>
