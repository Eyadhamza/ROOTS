<x-app>
    @include('_header')
    @include('_banner')
<div class="container contact-form">
    <div class="contact-image">
        <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/>
    </div>
    <form action="/articles" method="POST" enctype="multipart/form-data">
        @csrf
        <h3>Post an Article!</h3>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text"  name="title" class="form-control mt-3" placeholder="The Title *" value="" style="width: 700px;" />
                </div>

                @error('title')
                <p class="text-red-500 text-sm mt-2 ">{{$message}}</p>
                @enderror
                <div class="form-group">
                    <input type="text" name="committee" class="form-control mt-3" placeholder="Your Committee *" value="" style="width: 700px;"/>
                </div>

                @error('committee')
                <p class="text-red-500 text-sm mt-2 ">{{$message}}</p>
                @enderror

                <div class="form-group">
                    <div class="form-group">
                        <textarea name="description" class="form-control mt-3" placeholder="Your Article *" style="width: 700px; height: 150px;"></textarea>
                    </div>

                    @error('description')
                    <p class="text-red-500 text-sm mt-2 ">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-6 text-dark">
                    <div class="flex">

                        <label for="image " class="block m-4 uppercase font-bold text-sm text-dark">
                            image

                        </label>
                        <input type="file" name="image" class="border border-gray-300 p-2 w-full" >


                        @error('image')
                        <p class="text-red-500 text-sm mt-2 ">{{$message}}</p>
                        @enderror

                    </div>

                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-dark w-75" value="Post">Submit</button>
                </div>
            </div>
        </div>
    </form>
</div>
</x-app>
