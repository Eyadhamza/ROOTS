<x-app>
    @include('_header')
    @include('_banner')
    <div class="container contact-form">
        <div class="contact-image">
            <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/>
        </div>
        @include('flash-message')

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
            <div class="form-group">

                <input type="text" name="title" class="form-control" placeholder="Title *">
                <div class="form-group">
                    <textarea name="user_message" class="form-control mt-3" placeholder="Your Message *" style="width: 900px; height: 150px;"></textarea>
                </div>

                @error('user_message')
                <p class="text-red-500 text-sm mt-2 ">{{$message}}</p>
                @enderror
            </div>

            <div>
                <button type="submit" class="btn btn-dark p-2 text-white">submit</button>

            </div>


        </form>
    </div>
</x-app>
