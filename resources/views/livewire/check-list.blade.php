<div>
    <!-- Change the size of the container "max-w-full", ideally to w-1/6-->
        <div class="container w-3/4 flex justify-center mx-auto ml-8 mt-6 text-base font-sans">

            <div class="flex flex-col w-full border border-gray-400 shadow-lg overflow-hidden mx-auto pb-4">
                <div class="justify-around flex flex-row items-baseline m-3">
                    <h1 class=" text-lg mt-2 ml-3 text-2xl lg:text-3xl " >FollowUp list</h1>
                </div>
                <label class="custom-label flex mt-2 ml-3">
                    <div class="bg-white shadow w-6 h-6 p-1 flex justify-center items-center mr-2">
                        <input type="checkbox" class="hidden" wire:model="task_followup" {{$this->task_followup ? 'checked' : ''}}>
                        <svg class="hidden w-4 h-4 text-green-600 pointer-events-none" viewBox="0 0 172 172"><g fill="none" stroke-width="none" stroke-miterlimit="10" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode:normal"><path d="M0 172V0h172v172z"/><path d="M145.433 37.933L64.5 118.8658 33.7337 88.0996l-10.134 10.1341L64.5 139.1341l91.067-91.067z" fill="currentColor" stroke-width="1"/></g></svg>
                    </div>
                    <span class="select-none"> Task Followup</span>
                </label>

                <label class="custom-label flex mt-2 ml-3">
                    <div class="bg-white shadow w-6 h-6 p-1 flex justify-center items-center mr-2">
                        <input type="checkbox" class="hidden" wire:model="chat_followup"  {{$this->chat_followup ? 'checked' : ''}}>
                        <svg class="hidden w-4 h-4 text-green-600 pointer-events-none" viewBox="0 0 172 172"><g fill="none" stroke-width="none" stroke-miterlimit="10" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode:normal"><path d="M0 172V0h172v172z"/><path d="M145.433 37.933L64.5 118.8658 33.7337 88.0996l-10.134 10.1341L64.5 139.1341l91.067-91.067z" fill="currentColor" stroke-width="1"/></g></svg>
                    </div>
                    <span class="select-none"> chat followup</span>
                </label>

                <label class="custom-label flex mt-2 ml-3">
                    <div class="bg-white shadow w-6 h-6 p-1 flex justify-center items-center mr-2">
                        <input type="checkbox" class="hidden" wire:model="problem_followup"  {{$this->problem_followup ? 'checked' : ''}}>
                        <svg class="hidden w-4 h-4 text-green-600 pointer-events-none" viewBox="0 0 172 172"><g fill="none" stroke-width="none" stroke-miterlimit="10" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode:normal"><path d="M0 172V0h172v172z"/><path d="M145.433 37.933L64.5 118.8658 33.7337 88.0996l-10.134 10.1341L64.5 139.1341l91.067-91.067z" fill="currentColor" stroke-width="1"/></g></svg>
                    </div>
                    <span class="select-none">problem followup</span>
                </label>

                <label class="custom-label flex mt-2 ml-3">
                    <div class="bg-white shadow w-6 h-6 p-1 flex justify-center items-center mr-2">
                        <input type="checkbox" class="hidden" wire:model="activity_followup"  {{$this->activity_followup ? 'checked' : ''}}>
                        <svg class="hidden w-4 h-4 text-green-600 pointer-events-none" viewBox="0 0 172 172"><g fill="none" stroke-width="none" stroke-miterlimit="10" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode:normal"><path d="M0 172V0h172v172z"/><path d="M145.433 37.933L64.5 118.8658 33.7337 88.0996l-10.134 10.1341L64.5 139.1341l91.067-91.067z" fill="currentColor" stroke-width="1"/></g></svg>
                    </div>
                    <span class="select-none">activity followup</span>
                </label>

                <label class="custom-label flex mt-2 ml-3">
                    <div class="bg-white shadow w-6 h-6 p-1 flex justify-center items-center mr-2">
                        <input type="checkbox" class="hidden" wire:model="interaction_followup"  {{$this->interaction_followup ? 'checked' : ''}}>
                        <svg class="hidden w-4 h-4 text-green-600 pointer-events-none" viewBox="0 0 172 172"><g fill="none" stroke-width="none" stroke-miterlimit="10" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode:normal"><path d="M0 172V0h172v172z"/><path d="M145.433 37.933L64.5 118.8658 33.7337 88.0996l-10.134 10.1341L64.5 139.1341l91.067-91.067z" fill="currentColor" stroke-width="1"/></g></svg>
                    </div>
                    <span class="select-none"> interaction followup</span>
                </label>

                <div class="flex justify-center mx-auto mt-4">
                    <br>
                    <button wire:click="update()" class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline btn-default bg-blue-900 text-white">Update</button>
                </div>
                @if (session()->has('message'))
                    <div class="relative px-3 py-3 mb-4 border rounded bg-green-200 border-green-300 text-green-800">
                        {{ session('message') }}
                    </div>
                @endif
            </div>

        </div>


        <style>
            .custom-label input:checked + svg {
                display: block !important;
            }

        </style>
</div>
