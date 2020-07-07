<div class="min-w-full ">

    <h1 class="text-2xl lg:text-4xl font-bold m-6 p-6   flex justify-center">Notifications </h1>


    <body>
    <ul class="" >
        @foreach ($notifications as $notification)

            <div class="text-2xl font-bold p-6 border-2 border-blue-800 rounded-lg w-full lg:w-3/4 mx-auto m-2 ">
                <div class="flex justify-center font-bold text-2xl m-4 text-blue-900"> You have a new Notification !</div>

                <div class="flex justify-center p-4 m-4 text-blue-900">
                    Title : <strong >    {{$notification->data['title']}}</strong>

                </div>

                <div class="flex justify-center text-blue-900">
                    Description : <strong >    {{$notification->data['user_message']}}</strong>

                </div>
            </div>

        @endforeach
            {{ $notifications->links()}}
       </ul>


    </body>
</div>


