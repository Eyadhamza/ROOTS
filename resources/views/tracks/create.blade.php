<x-app>
    @include('_header')
    @include('_banner')
    @include('_featured')

    <div class="d-flex justify-content-center">
    <form  method="POST" action="/tracks" enctype="multipart/form-data" class=" p-5 text-white bg-dark ">
        @csrf

            <h4 class=" d-flex justify-content-center ">Name of the track</h4>
            <div class="m-5 d-flex justify-content-center " >
                <input type="text" name="name" class="border border-gray-300 p-2 w-full" id="name">
                @error('name')
                <p class="text-red-500 text-sm mt-2 ">{{$message}}</p>
                @enderror

            </div>
            <h4  class=" d-flex justify-content-center ">Description</h4>
            <div class="m-5 d-flex justify-content-center " >

            <textarea type="text" name="description" class="border border-gray-300 p-2 w-full" id="description" style="width: 800px"
                      required></textarea>



                @error('description')
                <p class="text-red-500 text-sm mt-2">{{$message}} </p>
                @enderror

            </div>
        <h4  class=" d-flex justify-content-center ">Embed a Video url</h4>
            <div class="m-5 d-flex justify-content-center">
                <input type="text" name="embedVideo" class="border border-gray-300 p-2 w-full" id="instructors"
                       required>
                @error('bio')
                <p class="text-red-500 text-sm mt-2">{{$message}} </p>
                @enderror

            </div>
            <h4 class="d-flex justify-content-center">Embed an image </h4>
            <div class="m-5 text-white d-flex justify-content-center">
                <div class="">

                    <input type="file" name="image" class="border border-gray-300 p-2 w-full" id="image" >


                    @error('image')
                    <p class="text-red-500 text-sm mt-2 ">{{$message}}</p>
                    @enderror

                </div>

            </div>

            <div class="d-flex justify-content-center">

                <button type="submit" class="btn btn-dark p-2 bg-white text-dark d-flex justify-content-center">SUBMIT</button>


            </div>

    </form>

    </div>
</x-app>
