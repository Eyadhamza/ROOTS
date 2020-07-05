<div class="min-w-full ">

    <h1 class="text-2xl font-bold m-6 p-6 border bg-blue-200 flex justify-center">Notifications </h1>


    <body>
    <ul class="" >
        @foreach ($notifications as $notification)

            <div class="flex justify-center"> You have a new Notification !</div>
            <div class="text-2xl font-bold p-6">
                <div class="flex justify-center">
                    Title : <strong >    {{$notification->data['title']}}</strong>

                </div>

                <div class="flex justify-center">
                    Description : <strong >    {{$notification->data['user_message']}}</strong>

                </div>
            </div>

        @endforeach
            {{ $notifications->links()}}
       </ul>


    </body>
</div>


