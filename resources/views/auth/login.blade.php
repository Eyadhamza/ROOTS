<x-app>
<div class="container mx-auto sm:px-4">
    <div class="flex justify-center mx-auto mt-20">
        <div class="md:w-2/3 pr-4 pl-4">
            <div class="relative flex flex-col min-w-0 rounded break-words border bg-white border-1 border-gray-300">
                <div class="py-3 px-6 mb-0 bg-blue-100 border-b-1 border-blue-300 text-gray-900 flex justify-center text-4xl text-blue-800">Login</div>

                <div class="flex-auto p-6">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-4 flex flex-wrap ">
                            <label for="email" class="md:w-1/3 pr-4 pl-4 pt-2 pb-2 mb-0 leading-normal md:text-right text-xl flex justify-start ml-10">{{ __('E-Mail Address') }}</label>

                            <div class="md:w-1/2 pr-4 pl-4 mt-1">
                                <input id="email" type="email" class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded @error('email') bg-red-700 @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class=" mt-1 text-sm text-red-900" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4 flex flex-wrap ">
                            <label for="password" class="md:w-1/3 pr-4 pl-4 pt-2 pb-2 mb-0 leading-normal md:text-right text-xl flex justify-start ml-10">{{ __('Password') }}</label>

                            <div class="md:w-1/2 pr-4 pl-4 mt-1">
                                <input id="password" type="password" class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded @error('password') bg-red-700 @enderror" name="password" required autocomplete="current-password">


                            </div>


                        </div>
                        @error('password')
                        <span class=" mt-1 text-sm text-red-900" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        <div class="w-full flex justify-start ml-16 mb-6">
                            <input class="mt-2 mr-2 p-1"  type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="text-gray-700 text-lg	" for="remember">
                                {{ __('Remember Me') }}
                            </label>

                        </div>

                        <div class="mb-2 flex justify-center  mb-0 " >
                            <div class="md:w-2/3 pr-4 pl-4 md:mx-1/3 flex justify-center">
                                <button type="submit" class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-blue-600 text-white hover:bg-blue-600">
                                    {{ __('Login') }}
                                </button>

                            </div>


                        </div>
                        <div class="flex justify-center text-blue-900">
                            @if (Route::has('password.request'))
                                <a class="" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</x-app>
