<div class="font-bold text-gray-900  w-1/2 mx-auto p-6 flex justify-center " style="font-size: 60px;">
    My Duty as an Admin
</div>

@livewire('edit-all')
@livewire('notifications')
@livewire('search-committee')

        <div class="p-10 m-4 border-2 border-blue-800 bg-blue-100 rounded-lg w-3/4 mx-auto">
            <a href="#" class="font-bold text-gray-900 bg-blue-100 flex justify-center lg:text-5xl text-2xl mx-auto" >
                RR Members
            </a>

            <a  href="/notifications/rr" class="lg:w-1/2 sm:w-full mx-auto m-1 font-bold text-white inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-gray-900 text-white hover:bg-gray-900 flex justify-center">
                Give Everyone A Task.
            </a>
            <a  href="/notifications/rr" class="lg:w-1/2 sm:w-full mx-auto m-1 font-bold text-white inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-gray-900 text-white hover:bg-gray-900 flex justify-center">
                Send Everyone a message
            </a>
        </div>


                @foreach($RRusers as $user)
                    <div class="p-10 m-4 border-2 border-blue-800 bg-blue-100 rounded-lg w-3/4 mx-auto">

                        <div class="mx-auto w-full flex justify-center mx-auto">
                            <a href="/profile/{{$user->id}}" class=" font-bold text-black rounded py-1 px-3 lg:text-4xl text-xl ">Name :  {{$user->name}}</a>

                        </div>
                            <div class="w-full flex justify-center mx-auto">
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
                                <a href="/notifications/{{$user->id}}" class="mx-auto flex justify-center w-full title-s flex justify-center inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-gray-900 text-white hover:bg-gray-900 text-white m-1">
                                    Give Task
                                </a>
                            </div>

                            @livewire('progress-counter',['user' => $user])

                            <div class="w-full flex justify-center ">
                                <a  href="/notifications/{{$user->id}}" class="mx-auto flex justify-center w-full font-bold text-white inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-gray-900 text-white hover:bg-gray-900 m-1">
                                    Give A Warning
                                </a>
                            </div>

                    </div>



            </div>
                @endforeach


@include('_DutyProfilePartials._content-management')
