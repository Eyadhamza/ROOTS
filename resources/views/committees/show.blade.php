<x-app>
@include('_header')
@include('_banner')

<ul class="list-group">
    <li class="list-group-item"></li>




</ul>
<section class="blog-area section-gap" id="blog">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-70 col-lg-8">
                <div class="title text-center">

                    <h1 class="mb-10">{{$committee->name}} members </h1>   <h3>@livewire('search')</h3>
                    @foreach(@$committee->users as $user)
                        <a href="/profile/{{@$user->id}}" class="list-group-item list-group-item-action">{{@$user->name}}</a>
                    @endforeach
                </div>
            </div>
        </div>
        @livewire('edit-committee', ['committee' => $committee])
    </div>
</section>



</x-app>
