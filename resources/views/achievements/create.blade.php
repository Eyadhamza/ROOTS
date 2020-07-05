<x-app>
    @include('_MainWebsitePartials._header')
    @include('_MainWebsitePartials._banner')
<div class="container mx-auto sm:px-4 contact-form">
    <div class="contact-image">
        <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/>
    </div>
    <form action="/achievements" method="POST" enctype="multipart/form-data">
        @csrf
        <h3>Share an Achievement!</h3>
        <div class="flex flex-wrap ">
            <div class="md:w-1/2 pr-4 pl-4">
                <div class="mb-4">
                    <input type="text"  name="title" class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded mt-3" placeholder="The Title *" value="" style="width: 700px;" />
                </div>

                @error('title')
                <p class="text-red-500 text-sm mt-2 ">{{$message}}</p>
                @enderror
                <div class="mb-4">
                    <input type="text" name="committee" class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded mt-3" placeholder="Your Committee *" value="" style="width: 700px;"/>
                </div>

                @error('committee')
                <p class="text-red-500 text-sm mt-2 ">{{$message}}</p>
                @enderror

                <div class="mb-4">
                    <div class="mb-4">
                        <textarea name="description" class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded mt-3" placeholder="Your Achievement *" style="width: 700px; height: 150px;"></textarea>
                    </div>

                    @error('description')
                    <p class="text-red-500 text-sm mt-2 ">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-6 text-gray-900">
                    <div class="flex">

                        <label for="image " class="block m-6 uppercase font-bold text-sm text-gray-900">
                            image

                        </label>
                        <input type="file" name="image" class="border border-gray-300 p-2 w-full" >


                        @error('image')
                        <p class="text-red-500 text-sm mt-2 ">{{$message}}</p>
                        @enderror

                    </div>

                </div>
                <div class="mb-4">
                    <button type="submit" class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-gray-900 text-white hover:bg-gray-900 w-3/4" value="Post">Submit</button>
                </div>
            </div>
        </div>
    </form>
</div>
</x-app>
