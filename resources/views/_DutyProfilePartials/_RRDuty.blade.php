<div class="font-bold text-gray-900 bg-white fullwidth p-6 flex justify-center " style="font-size: 60px;">
    My Duty as an RR
</div>

@livewire('notifications')
@livewire('search-committee')
@foreach($user->committees as $committee)
    <div class="p-10 m-4 border-2 border-blue-800 bg-blue-100 rounded-lg w-3/4 mx-auto">
        <a href="#" class="text-4xl font-bold text-gray-900 bg-blue-100 flex justify-center">
             Members of {{$committee->name}}
        </a>

        @foreach($committee->users as $user)
            <div class="p-10 m-4 border-2 border-blue-800 bg-blue-100 rounded-lg w-full mx-auto">
                <div class="flex flex-col pl-0 mb-0 border rounded border-gray-300 border-b">

                    <a href="/profile/{{$user->id}}" class=" font-bold text-black inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline btn-gray " style="font-size: 30px">Name :  {{$user->name}}</a>
                    <div class="w-full flex justify-center ">
                        <a  href="{{$user->telegram_url}}" class="mx-auto flex justify-center w-full title-s flex justify-center inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-gray-900 text-white hover:bg-gray-900 text-white m-1">
                            Send Message
                        </a>
                    </div>
                    <div class="w-full flex justify-center ">
                        <a  href="/profile/{{$user->id}}" class="mx-auto flex justify-center w-full title-s flex justify-center inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-gray-900 text-white hover:bg-gray-900 text-white m-1">
                            View Profile
                        </a>
                    </div>


                    <div class="w-full flex justify-center ">
                        <a  href="/notifications/{{$user->id}}" class="mx-auto flex justify-center w-full font-bold text-white inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-gray-900 text-white hover:bg-gray-900 m-1">
                            Give A Warning
                        </a>
                    </div>

                </div>



            </div>
        @endforeach
    </div>
@endforeach
@include('_DutyProfilePartials._content-management')

