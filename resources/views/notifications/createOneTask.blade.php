<x-app>
    @include('_MainWebsitePartials._header')
    @include('_MainWebsitePartials._banner')
    <div class="container mx-auto sm:px-4 contact-form">
        <div class="contact-image">
            <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/>
        </div>
        @include('_MainWebsitePartials.flash-message')

        <form action="/notifications/{{$user2->id}}" method="post">

        @if(auth()->user()->all_roles()->contains('Instructor'))
            <h3>Here you can send a task to Your Member</h3>
            Create A New Task , Feedback or maybe warning !
            @endif
            @if(auth()->user()->all_roles()->contains('Member'))
                    <h3>Here you can send a task to Your Instructor</h3>
                    deliver A Task Or Message !
            @endif
            @csrf
            <div class="mb-4">

                <input type="text" name="title" class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded" placeholder="Title *">
                <div class="mb-4">
                    <textarea name="user_message" class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded mt-3" placeholder="Your Message *" style="width: 900px; height: 150px;"></textarea>
                </div>

                @error('user_message')
                <p class="text-red-500 text-sm mt-2 ">{{$message}}</p>
                @enderror
            </div>

            <div>
                <button type="submit" class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-gray-900 text-white hover:bg-gray-900 p-2 text-white">submit</button>

            </div>


        </form>
    </div>
</x-app>
