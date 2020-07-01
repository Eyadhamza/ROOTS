<div>


    <p class="title-s d-flex justify-content-center">Performance</p>
    <div class="m-5">
        <span>Required Tasks</span><span class="pull-right">{{$tasks_performance}}%</span>
        <button type="button" wire:click="decreament_tasks_performance" class="btn btn-danger text-white" style="width: 50px;">-</button>
        <span class="">{{$tasks_performance}}%</span>
        <button type="button" wire:click="increament_tasks_performance" wire:model="tasks_performance" class="btn btn-dark text-white " style="width: 50px;">+</button>
        <div class="progress">
            <div class="progress-bar " role="progressbar" style="width: {{$tasks_performance}}%" aria-valuenow="85" aria-valuemin="0"
                 aria-valuemax="100">
            </div>
        </div>
    </div>
    <div class="m-5">

        <span >Interaction</span><span class="pull-right">{{$interaction_performance}}%</span>
        <button type="button" wire:click="decreament_interaction_performance" class="btn btn-danger text-white" style="width: 50px;">-</button>
        <span class="">{{$interaction_performance}}%</span>
        <button type="button" wire:click="increament_interaction_performance" wire:model="interaction_performance" class="btn btn-dark text-white" style="width: 50px;">+</button>
        <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: {{$interaction_performance}}%" aria-valuenow="50" aria-valuemin="0"
                     aria-valuemax="100">
            </div>
        </div>
    </div>

    <div class="m-5">
        <span>Knowledge</span><span class="pull-right">{{$knowledge_performance}}%</span>
        <button type="button" wire:click="decreament_knowledge_performance" class="btn btn-danger text-white" style="width: 50px;">-</button>
        <span class="">{{$knowledge_performance}}%</span>
        <button type="button" wire:click="increament_knowledge_performance" wire:model="knowledge_performance" class="btn btn-dark text-white" style="width: 50px;">+</button>
        <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: {{$knowledge_performance}}%" aria-valuenow="75" aria-valuemin="0"
                 aria-valuemax="100">
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-center m-4">
        <button wire:click="update()" class="btn btn-dark ">Update</button>
    </div>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
</div>
