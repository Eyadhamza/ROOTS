<div class="min-w-full ">

    <h1 class="text-2xl font-bold m-6 p-4 border bg-blue-200">Notifications </h1>


    <body>
    <ul class="w-50 p-5" >
        @foreach ($notifications as $notification)
            <div>You have a new Notification !</div>
            <div class="text-2xl font-bold p-4 bg-blue-300 border border-bottom flex justify-around">

                <strong>    {{$notification->data['task']}}</strong>
                <button class="text-sm font-bold text-dark hover:text-blue-600" wire:click="markAsRead('{{ $notification->id }}')">

                    Mark as read
                </button>
            </div>
        @endforeach
            {{ $notifications->links()}}
       </ul>


    </body>
</div>


