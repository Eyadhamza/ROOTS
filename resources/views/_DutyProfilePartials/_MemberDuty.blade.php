<div class="font-bold text-gray-900 w-full lg:w-1/2 mx-auto p-6 flex justify-center text-2xl lg:text-6xl  ">
    My Duty as a Member
</div>

@livewire('notifications')
<a href="#" class="font-bold text-gray-900 flex justify-center text-2xl lg:text-6xl p-4 m-4" >
    Performance
<div class="border-2 border-blue-800 w-fulldas lg:w-3/4 mx-auto">

    <div class="m-12 w-2/3 mx-auto">
        <div class="inline-block text-3xl w-1/3 flex justify-center mx-auto">Required Tasks</div>
        <div class="shadow w-full bg-grey-light">
            <div class="bg-blue-600 text-xs leading-none py-1 text-center text-white" style="width: {{$user->tasks_performance}}%">
                {{$user->tasks_performance}}%
            </div>
        </div>
    </div>
    <div class="m-12 w-2/3 mx-auto">

        <div class="inline-block text-3xl w-1/3 flex justify-center mx-auto">Interaction</div>

        <div class="shadow w-full bg-grey-light">
            <div class="bg-blue-600 text-xs leading-none py-1 text-center text-white" role="progressbar" style="width: {{$user->interaction_performance}}%" aria-valuenow="50" aria-valuemin="0"
                 aria-valuemax="100">
                {{$user->interaction_performance}}%
            </div>
        </div>
    </div>

    <div class="m-12 w-2/3 mx-auto">
        <div class="inline-block text-3xl w-1/3 flex justify-center mx-auto">Knowledge</div>

        <div class="shadow w-full bg-grey-light">
            <div class="bg-blue-600 text-xs leading-none py-1 text-center text-white" role="progressbar" style="width: {{$user->knowledge_performance}}%" aria-valuenow="75" aria-valuemin="0"
                 aria-valuemax="100">
                {{$user->knowledge_performance}}%
            </div>
        </div>
    </div>
</div>



<a href="#" class="font-bold text-gray-900 flex justify-center text-2xl lg:text-6xl p-4 m-4" >
    My Instructors
</a>
@foreach($user->committees as $committee)
    @foreach($committee->users as $user)
        @if($user->all_roles()->contains('Instructor'))
            <div class="p-2 m-4 border-2 border-blue-800 bg-blue-100 rounded-lg w-3/4 mx-auto">
                <div class="flex flex-col pl-0 mb-0 0 border-b">

                    <a href="/profile/{{$user->id}}" class=" font-bold text-black inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline btn-gray " style="font-size: 30px">Name :  {{$user->name}}</a>
                    <div class="w-full flex justify-center ">
                        <a  href="{{$user->telegram_url}}" class="mx-auto flex justify-center w-full title-s flex justify-center inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-blue-700 text-white hover:bg-blue-900 text-white m-1 w-full lg:w-1/2">
                            Send Message
                        </a>
                    </div>
                    <div class="w-full flex justify-center ">
                        <a  href="/profile/{{$user->id}}" class="mx-auto flex justify-center w-full title-s flex justify-center inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-blue-700 text-white hover:bg-blue-900 text-white m-1 w-full lg:w-1/2">
                            View Profile
                        </a>
                    </div>
                    <div class="w-full flex justify-center ">
                        <a href="/notifications/{{$user->id}}" class="mx-auto flex justify-center w-full title-s flex justify-center inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-blue-700 text-white hover:bg-blue-900 text-white m-1 w-full lg:w-1/2">
                            Deliver Task
                        </a>
                    </div>


                </div>
            </div>
        @endif
@endforeach
@endforeach
