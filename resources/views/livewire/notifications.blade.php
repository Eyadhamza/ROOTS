<div class="min-w-full ">

    <h1 class="text-2xl font-bold m-6 p-4 border bg-blue-200 d-flex justify-content-center">Notifications </h1>


    <body>
    <ul class="" >
        @foreach ($notifications as $notification)

            <div class="d-flex justify-content-center"> You have a new Notification !</div>
            <div class="text-2xl font-bold p-4">
                <div class="d-flex justify-content-center">
                    Title : <strong >    {{$notification->data['title']}}</strong>

                </div>

                <div class="d-flex justify-content-center">
                    Description : <strong >    {{$notification->data['user_message']}}</strong>

                </div>
            </div>

        @endforeach
            {{ $notifications->links()}}
       </ul>


    </body>
</div>


