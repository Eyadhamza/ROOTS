<div class="font-bold text-gray-900 bg-white fullwidth p-6 flex justify-center " style="font-size: 60px;">
    My Duty as an RR
</div>

@livewire('notifications')
@livewire('search-committee')
@foreach($user->committees as $committee)
    <div class="flex flex-col pl-0 mb-0 border rounded border-gray-300">
        <a href="#" class="relative block py-3 px-6 -mb-px border border-r-0 border-l-0 border-gray-300 no-underline w-fill active">
            MY MEMBERS OF {{$committee->name}}
        </a>

        @foreach($committee->users as $user)
            <div class="flex flex-col pl-0 mb-0 border rounded border-gray-300 border-b">

                <a href="/profile/{{$user->id}}" class="font-weight-bolder font-bold text-black inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline btn-gray " style="font-size: 30px">Name : {{$user->name}}</a>
                <a  href="{{$user->telegram_url}}" class=" font-bold text-white inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-gray-900 text-white hover:bg-gray-900">
                    Send Message
                </a>
                <a  href="/profile/{{$user->id}}" class=" font-bold text-white inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-gray-900 text-white hover:bg-gray-900">
                    View
                </a>
                <a  href="/notifications/{{$user->id}}" class=" font-bold text-white inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-gray-900 text-white hover:bg-gray-900">
                    Give A Warning
                </a>
            </div>

        @endforeach
    </div>
@endforeach
<div class="p-6 flex justify-center" style="font-size: 50px ">
    Content Management

</div>
<hr>

<div class="p-6 flex justify-around">

    <h3>Review Achievements ..</h3>
    <a href="/achievements/create" class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-gray-900 text-white hover:bg-gray-900">Create achievement</a>
    <a href="/achievements" class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-gray-900 text-white hover:bg-gray-900">View all achievements    </a>

</div>
<hr>

<div class="p-6 flex justify-around">

    <h3>Review Articles ..</h3>
    <a href="/articles/create" class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-gray-900 text-white hover:bg-gray-900">Create Article</a>
    <a href="/articles" class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-gray-900 text-white hover:bg-gray-900">View all articles    </a>

</div>
<hr>

<div class="p-6 flex justify-around">
    <h3>Review Tracks ..</h3>
    <a href="/tracks/create" class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-gray-900 text-white hover:bg-gray-900">Create Track</a>
    <a href="/tracks" class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-gray-900 text-white hover:bg-gray-900">View all Tracks</a>


</div>
<hr>
<div class="p-6 flex justify-around">

    <h3>Review Events ..</h3>
    <a href="/events/create" class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-gray-900 text-white hover:bg-gray-900">Create Event</a>
    <a href="/tracks" class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-gray-900 text-white hover:bg-gray-900">View all Events    </a>

</div>

<hr>
