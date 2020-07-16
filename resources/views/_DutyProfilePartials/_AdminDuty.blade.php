<div class="font-bold text-gray-900 w-full lg:w-1/2 mx-auto p-6 flex justify-center text-2xl lg:text-6xl ">
    My Duty as an Admin
</div>

@livewire('edit-all')
@livewire('notifications')
@livewire('search-committee')

        <div class="p-2 m-4 border-2 border-blue-800 bg-blue-100 rounded-lg w-3/4 mx-auto">
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
                            <div class="p-2 m-4 border-2 border-blue-800 bg-blue-100 rounded-lg w-3/4 mx-auto">
                                <div class="flex flex-col pl-0 mb-0  border-b">

                                    <a href="/profile/{{$user->id}}" class="text-2xl lg:text-4xl font-bold text-black inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline btn-gray flex justify-center" >Name :  {{$user->name}}</a>
                                    <div class="w-full flex justify-center ">
                                        <a  href="{{$user->telegram_url}}" class="mx-auto flex justify-center w-full title-s flex justify-center inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-blue-600 text-white hover:bg-gray-900 text-white m-1 w-full lg:w-1/2">
                                            Send Message
                                        </a>
                                    </div>
                                    <div class="w-full flex justify-center ">
                                        <a  href="/profile/{{$user->id}}" class="mx-auto flex justify-center w-full title-s flex justify-center inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-blue-600 text-white hover:bg-gray-900 text-white m-1 w-full lg:w-1/2">
                                            View Profile
                                        </a>
                                    </div>
                                    <div class="w-full flex justify-center ">
                                        <a href="/notifications/{{$user->id}}" class="mx-auto flex justify-center w-full title-s flex justify-center inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-blue-600 text-white hover:bg-gray-900 text-white m-1 w-full lg:w-1/2">
                                            Give Task
                                        </a>
                                    </div>

                                    @livewire('progress-counter',['user' => $user])

                                    <div class="w-full flex justify-center ">
                                        <a  href="/notifications/{{$user->id}}" class="mx-auto flex justify-center w-full font-bold text-white inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-blue-600 text-white hover:bg-gray-900 m-1 w-full lg:w-1/2">
                                            Give A Warning
                                        </a>
                                    </div>

                                </div>



                            </div>

                @endforeach


@include('_DutyProfilePartials._content-management')
