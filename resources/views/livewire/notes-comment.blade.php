
<div class="comment-form">
    <h4 class="text-xl lg:text-4xl">Leave a note</h4>
    <form wire:submit.prevent="submit"  >
        <div class="desc "  wire:model="comments">

            @foreach($comments as $comment)
                <div class="comment-list flex justify-center mb-5 border-2 border-blue-300 p-3">
                    <div class="single-comment justify-between flex">
                        <div class="user justify-between flex">
                            <div class="desc">

                                <div class="flex justify-center mb-8">
                                    <img src="{{@$comment->user->avatar}}"  style="width:70px; height: 70px;border-radius: 100% "  alt="">

                                    <h5 class="text-xl text-blue-800 hover:text-gray-700 p-3"><a href="#">{{@$comment->user->name}} <span class="flex block text-xs">{{@$comment->created_at}}</span></a></h5>
                                </div>

                                <p class="comment text-2xl ">
                                    {{@$comment->body}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="mb-4">
            <textarea class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded mb-10" rows="5" name="body" wire:model.lazy="body" placeholder="Messege"></textarea>

        </div>
        <button class="primary-btn uppercase"  >Share a Note</button>
    </form>
    @if (session()->has('message'))
        <div class="relative px-3 py-3 mb-4 border rounded bg-green-200 border-green-300 text-green-800">
            {{ session('message') }}
        </div>
    @endif
</div>
