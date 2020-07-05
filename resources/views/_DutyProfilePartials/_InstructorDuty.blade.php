
<div class="font-bold text-gray-900 bg-white fullwidth p-6 flex justify-center " style="font-size: 60px;">
    My Duty as an Instructor
</div>

@livewire('notifications')


@foreach($user->committees as $committee)
    <div class="flex flex-col pl-0 mb-0 border rounded border-gray-300">
        <a href="#" class="font-bold text-white inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-gray-900 text-white hover:bg-gray-900 " style="font-size: 60px">
            MY MEMBERS OF {{$committee->name}}
        </a>
        <a  href="/committees/{{$committee->id}}" class=" font-bold text-white inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-gray-900 text-white hover:bg-gray-900">
            View Committee.
        </a>
        <a  href="/notifications" class=" font-bold text-white inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-gray-900 text-white hover:bg-gray-900">
            Give Everyone A Task.
        </a>
        @foreach($committee->users as $user)
            <div class="flex flex-col pl-0 mb-0 border rounded border-gray-300 border-b">

                 <a href="/profile/{{$user->id}}" class=" font-bold text-black inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline btn-gray " style="font-size: 30px">Name :  {{$user->name}}</a>
                <a  href="{{$user->telegram_url}}" class=" font-bold text-white inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-gray-900 text-white hover:bg-gray-900">
                    Send Message
                </a>
                <a  href="/profile/{{$user->id}}" class=" font-bold text-white inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-gray-900 text-white hover:bg-gray-900">
                    View Profile
                </a>
                <a  href="/notifications/{{$user->id}}" class=" font-bold text-white inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-gray-900 text-white hover:bg-gray-900">
                    Give Task
                </a>
                    @livewire('progress-counter',['user' => $user])

                <a  href="/notifications/{{$user->id}}" class=" font-bold text-white inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-gray-900 text-white hover:bg-gray-900">
                    Give A Warning
                </a>


            </div>

        @endforeach
    </div>
@endforeach
