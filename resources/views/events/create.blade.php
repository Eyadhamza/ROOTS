<x-app>
@include('_MainWebsitePartials._header')
    @include('_MainWebsitePartials._banner')
    @include('_MainWebsitePartials._featured')

        <div class="flex justify-center">
            <form  method="POST" action="/events" enctype="multipart/form-data" class=" p-12 text-white bg-gray-900 ">
                @csrf

                <h4 class=" flex justify-center ">Name of the Event</h4>
                <div class="m-12 flex justify-center " >
                    <input type="text" name="name" class="border border-gray-300 p-2 w-full" id="name">
                    @error('name')
                    <p class="text-red-500 text-sm mt-2 ">{{$message}}</p>
                    @enderror

                </div>
                <h4  class=" flex justify-center ">Description</h4>
                <div class="m-12 flex justify-center " >

            <textarea type="text" name="description" class="border border-gray-300 p-2 w-full" id="description" style="width: 800px"
                      required></textarea>



                    @error('description')
                    <p class="text-red-500 text-sm mt-2">{{$message}} </p>
                    @enderror

                </div>
                <h4  class=" flex justify-center ">Embed a Video url</h4>
                <div class="m-12 flex justify-center">
                    <input type="text" name="embedVideo" class="border border-gray-300 p-2 w-full" id="instructors"
                           required>
                    @error('bio')
                    <p class="text-red-500 text-sm mt-2">{{$message}} </p>
                    @enderror

                </div>
                <h4 class="flex justify-center">Embed an image </h4>
                <div class="m-12 text-white flex justify-center">
                    <div class="">

                        <input type="file" name="image" class="border border-gray-300 p-2 w-full" id="image" >


                        @error('image')
                        <p class="text-red-500 text-sm mt-2 ">{{$message}}</p>
                        @enderror

                    </div>

                </div>

                <div class="flex justify-center">

                    <button type="submit" class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-gray-900 text-white hover:bg-gray-900 p-2 bg-white text-gray-900 flex justify-center">SUBMIT</button>


                </div>

            </form>

        </div>

</x-app>
