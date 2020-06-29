<x-app>
    @include('_header')
    @include('_banner')
    <form  method="POST" action="/tracks" enctype="multipart/form-data" class="inline-flex justify-content-center p-5 text-white bg-dark" >
        @csrf


        <div class="mb-6">
            <label for="name " class="block mb-2 uppercase font-bold text-sm text-white">
                Name

            </label>
            <input type="text" name="name" class="border border-gray-300 p-2 w-full" id="name">



            @error('name')
            <p class="text-red-500 text-sm mt-2 ">{{$message}}</p>
            @enderror

        </div>
        <div class="mb-6">
            <label for="description " class="block mb-2 uppercase font-bold text-sm text-white">
                description

            </label>
            <input type="text" name="description" class="border border-gray-300 p-2 w-full" id="description"
                   required>



            @error('description')
            <p class="text-red-500 text-sm mt-2">{{$message}} </p>
            @enderror

        </div>
        <div class="mb-6">
            <label for="instructors " class="block mb-2 uppercase font-bold text-sm text-white">
                instructors

            </label>
            <input type="text" name="instructors" class="border border-gray-300 p-2 w-full" id="instructors"
                   required>

            @error('bio')
            <p class="text-red-500 text-sm mt-2">{{$message}} </p>
            @enderror

        </div>

        <div class="mb-6 text-white">
            <div class="flex">

                <label for="image " class="block mb-2 uppercase font-bold text-sm text-white">
                    image

                </label>
                <input type="file" name="image" class="border border-gray-300 p-2 w-full" id="image" >


                @error('image')
                <p class="text-red-500 text-sm mt-2 ">{{$message}}</p>
                @enderror

            </div>

        </div>

        <div>

            <button type="submit" class="btn btn-dark p-2 bg-white text-dark">submit</button>


        </div>

    </form>
</x-app>
