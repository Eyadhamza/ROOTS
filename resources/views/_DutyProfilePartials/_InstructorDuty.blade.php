
<div class="font-bold text-gray-900 bg-white fullwidth p-6 flex justify-center " style="font-size: 60px;">
    My Duty as an Instructor
</div>

@livewire('notifications')


@foreach($user->committees as $committee)
    <div class="p-10 m-4 border-2 border-blue-800 bg-blue-100 rounded-lg w-3/4 mx-auto">
        <a href="#" class="font-bold text-gray-900 bg-blue-100 flex justify-center " style="font-size: 60px">
            MEMBERS OF {{$committee->name}}
        </a>
        <a  href="/committees/{{$committee->id}}" class=" w-1/2 mx-auto m-1 font-bold text-white inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-gray-900 text-white hover:bg-gray-900 flex justify-center">
            View Committee.
        </a>
        <a  href="/notifications" class=" w-1/2 mx-auto m-1 font-bold text-white inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-gray-900 text-white hover:bg-gray-900 flex justify-center">
            Give Everyone A Task.
        </a>
        @foreach($committee->users as $user)
            <div class="p-10 m-4 border-2 border-blue-800 bg-blue-100 rounded-lg w-3/4 mx-auto">
                <div class="flex flex-col pl-0 mb-0 border rounded border-gray-300 border-b">

                    <a href="/profile/{{$user->id}}" class=" font-bold text-black inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline btn-gray " style="font-size: 30px">Name :  {{$user->name}}</a>
                    <div class="w-full flex justify-center ">
                        <a  href="{{$user->telegram_url}}" class="mx-auto flex justify-center w-1/2 title-s flex justify-center inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-gray-900 text-white hover:bg-gray-900 text-white m-1">
                            Send Message
                        </a>
                    </div>
                    <div class="w-full flex justify-center ">
                        <a  href="/profile/{{$user->id}}" class="mx-auto flex justify-center w-1/2 title-s flex justify-center inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-gray-900 text-white hover:bg-gray-900 text-white m-1">
                            View Profile
                        </a>
                    </div>
                    <div class="w-full flex justify-center ">
                        <a href="/notifications/{{$user->id}}" class="mx-auto flex justify-center w-1/2 title-s flex justify-center inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-gray-900 text-white hover:bg-gray-900 text-white m-1">
                            Give Task
                        </a>
                    </div>

                    @livewire('progress-counter',['user' => $user])

                    <div class="w-full flex justify-center ">
                        <a  href="/notifications/{{$user->id}}" class="mx-auto flex justify-center w-1/2 font-bold text-white inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-gray-900 text-white hover:bg-gray-900 m-1">
                            Give A Warning
                        </a>
                    </div>

                </div>



            </div>
        @endforeach

    </div>
@endforeach