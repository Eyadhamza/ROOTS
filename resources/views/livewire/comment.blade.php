
<div class="comment-form">
    <h4>Leave a Comment</h4>
    <form wire:submit.prevent="submit"  >
        <div class="desc"  wire:model="comments">

            @foreach($comments as $comment)
                <div class="comment-list ">
                    <div class="single-comment justify-between flex">
                        <div class="user justify-between flex">
                            <div class="desc">
                                <h5><a href="#">{{@$comment->user->name}}</a></h5>
                                <p class="date">{{@$comment->created_at}} </p>
                                <p class="comment">
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
        <button class="primary-btn uppercase" wire:ac >Post A Comment</button>
    </form>
    @if (session()->has('message'))
        <div class="relative px-3 py-3 mb-4 border rounded bg-green-200 border-green-300 text-green-800">
            {{ session('message') }}
        </div>
    @endif
</div>
