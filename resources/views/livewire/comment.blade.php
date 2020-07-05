
<div class="comment-form">
    <h4>Leave a Comment</h4>
    <form wire:submit.prevent="submit"  >
        <div class="desc"  wire:model="comments">

            @foreach($comments as $comment)
                <div class="comment-list ">
                    <div class="single-comment justify-content-between d-flex">
                        <div class="user justify-content-between d-flex">
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
        <div class="form-group">
            <textarea class="form-control mb-10" rows="5" name="body" wire:model.lazy="body" placeholder="Messege"></textarea>

        </div>
        <button class="primary-btn text-uppercase" wire:ac >Post A Comment</button>
    </form>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
</div>
