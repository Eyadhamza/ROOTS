<x-profile  :user="$user">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <div class="container mx-auto sm:px-4">
        <div class="flex flex-wrap  lg:flex-no-wrap">
            <div class="w-full col-lg-auto mb-3" style="width: 200px;">
                <div class="relative flex flex-col min-w-0 rounded break-words border bg-white border-1 border-gray-300 p-6">
                    <div class="e-navlist e-navlist--active-bg">
                        <ul class="flex flex-wrap list-none pl-0 mb-0">
                            <li class=""><a class="inline-block py-2 px-4 no-underline px-2 active" href="/profile/{{auth()->user()->id}}"><i class="fa fa-fw fa-bar-chart mr-1"></i><span>Overview</span></a></li>
                            <li class=""><a class="inline-block py-2 px-4 no-underline px-2" href="/home"><i class="fa fa-home mr-3"></i><span>Home</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="relative flex-grow max-w-full flex-1 px-4">
                <div class="flex flex-wrap ">
                    <div class="relative flex-grow max-w-full flex-1 px-4 mb-3">
                        <div class="relative flex flex-col min-w-0 rounded break-words border bg-white border-1 border-gray-300">
                            <div class="flex-auto p-6">
                                <div class="e-profile">
                                    <div class="flex flex-wrap ">
                                        <div class="w-full col-sm-auto mb-3">
                                            <div class="mx-auto" style="width: 140px;">
                                                <div class="flex justify-center items-center rounded" style="height: 140px; background-color: rgb(233, 236, 239);">
                                                    <span style="color: rgb(166, 168, 170); font: bold 8pt Arial;"><img
                                                            src="{{$user->avatar}}"
                                                            alt="eee"
                                                            class="rounded-full mr-4 "
                                                            style="width:150px; height: 140px "

                                                        ></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="relative flex-grow max-w-full flex-1 px-4 flex flex-col sm:flex-row justify-between mb-3">
                                            <div class="text-center sm:text-left mb-2 sm:mb-0">
                                                <h4 class="sm:pt-2 pb-1 mb-0 whitespace-no-wrap">{{$user->name}}</h4>
                                                <p class="mb-0">{{$user->username}}</p>
                                                <div class="text-gray-700"><small>last seen {{now()}}</small></div>
                                                <div class="">

                                                </div>
                                            </div>
                                            <div class="text-center sm:text-right">
                                                <span class="inline-block p-1 text-center font-semibold text-sm align-baseline leading-none rounded bg-gray-600 text-white hover:bg-gray-700">{{$user->role}}</span>
                                                <div class="text-gray-700"><small>Joined {{$user->created_at}}</small></div>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="flex flex-wrap list-none pl-0 mb-0 border border-t-0 border-r-0 border-l-0 border-b-1 border-gray-200">
                                        <li class=""><a href="" class="active inline-block py-2 px-4 no-underline">Settings</a></li>
                                    </ul>
                                    <div class="tab-content pt-3">
                                        <div class="tab-pane active">
                                            <form class="form" novalidate="" method="POST" action="/profile/{{$user->id}}" enctype="multipart/form-data">
                                                @method('PATCH')
                                                @csrf
                                                <div class="flex flex-wrap ">
                                                    <div class="relative flex-grow max-w-full flex-1 px-4">
                                                        <div class="flex flex-wrap ">
                                                            <div class="relative flex-grow max-w-full flex-1 px-4">
                                                                <div class="mb-4">
                                                                    <label>Full Name</label>
                                                                    <input class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded" type="text" name="name" placeholder="Name" value="{{$user->name}}">
                                                                </div>
                                                            </div>
                                                            @error('name')
                                                            <p class="text-red-600 text-sm mt-2 ">{{$message}}</p>
                                                            @enderror
                                                            <div class="relative flex-grow max-w-full flex-1 px-4">
                                                                <div class="mb-4">
                                                                    <label>Username</label>
                                                                    <input class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded" type="text" name="username" placeholder="Username" value="{{$user->username}}">
                                                                </div>
                                                            </div>
                                                            @error('username')
                                                            <p class="text-red-600 text-sm mt-2 ">{{$message}}</p>
                                                            @enderror

                                                        </div>
                                                        <div class="flex flex-wrap ">
                                                            <div class="relative flex-grow max-w-full flex-1 px-4">
                                                                <div class="mb-4">
                                                                    <label>Email</label>
                                                                    <input class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded" type="text" placeholder="user@example.com" name="email" value="{{$user->email}}">
                                                                </div>
                                                            </div>
                                                            @error('email')
                                                            <p class="text-red-600 text-sm mt-2 ">{{$message}}</p>
                                                            @enderror
                                                        </div>
                                                        <div class="flex flex-wrap ">
                                                            <div class="relative flex-grow max-w-full flex-1 px-4">
                                                                <div class="mb-4">
                                                                    <label>Telegram</label>
                                                                    <input class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded" type="text" placeholder="http://t.me" name="telegram_url" value="{{$user->telegram_url}}">
                                                                </div>
                                                            </div>
                                                            @error('telegram_url')
                                                            <p class="text-red-600 text-sm mt-2 ">{{$message}}</p>
                                                            @enderror
                                                        </div>
                                                        <div class="flex flex-wrap ">
                                                            <div class="relative flex-grow max-w-full flex-1 px-4 mb-3">
                                                                <div class="mb-4">
                                                                    <label>phone</label>
                                                                    <input class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded" type="text" placeholder="011111" name="phone" value="{{$user->phone}}">
                                                                </div>
                                                            </div>
                                                            @error('bio')
                                                            <p class="text-red-600 text-sm mt-2 ">{{$message}}</p>
                                                            @enderror
                                                        </div>
                                                        <div class="flex flex-wrap ">
                                                            <div class="flex flex-wrap ">

                                                                <label for="avatar " class="block mb-2 uppercase font-bold text-sm text-white">
                                                                    avatar

                                                                </label>
                                                                <input type="file" name="avatar" class="border border-gray-300 p-2 w-full" id="avatar" >


                                                                @error('avatar')
                                                                <p class="text-red-600 text-sm mt-2 ">{{$message}}</p>
                                                                @enderror

                                                                <img
                                                                    src="{{$user->avatar}}"
                                                                    alt="eee"
                                                                    class="rounded-full mr-4 "
                                                                    style="width:50px; height: 50px "

                                                                >

                                                            </div>
                                                        </div>
                                                        <div class="flex flex-wrap ">
                                                            <div class="relative flex-grow max-w-full flex-1 px-4 mb-3">
                                                                <div class="mb-4">
                                                                    <label>About</label>
                                                                    <textarea class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded" rows="5" placeholder="My Bio" name="bio" ></textarea>
                                                                </div>
                                                            </div>
                                                            @error('bio')
                                                            <p class="text-red-600 text-sm mt-2 ">{{$message}}</p>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex flex-wrap ">
                                                    <div class="w-full sm:w-1/2 pr-4 pl-4 mb-3">
                                                        <div class="mb-2"><b>Change Password</b></div>

                                                        <div class="flex flex-wrap ">
                                                            <div class="relative flex-grow max-w-full flex-1 px-4">
                                                                <div class="mb-4">
                                                                    <label>New Password</label>
                                                                    <input class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded" type="password" placeholder="••••••" name="password">
                                                                </div>
                                                            </div>
                                                            @error('password')
                                                            <p class="text-red-600 text-sm mt-2 ">{{$message}}</p>
                                                            @enderror
                                                        </div>
                                                        <div class="flex flex-wrap ">
                                                            <div class="relative flex-grow max-w-full flex-1 px-4">
                                                                <div class="mb-4">
                                                                    <label>Confirm <span class="hidden xl:inline">Password</span></label>
                                                                    <input class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded" type="password" placeholder="••••••" name="password_confirmation"></div>
                                                            </div>
                                                            @error('password_confirmation')
                                                            <p class="text-red-600 text-sm mt-2 ">{{$message}}</p>
                                                            @enderror
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="flex flex-wrap ">
                                                    <div class="relative flex-grow max-w-full flex-1 px-4 flex justify-end">
                                                        <button class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-blue-600 text-white hover:bg-blue-600" type="submit">Save Changes</button>
                                                    </div>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="w-full md:w-1/4 pr-4 pl-4 mb-3">
                        <div class="relative flex flex-col min-w-0 rounded break-words border bg-white border-1 border-gray-300 mb-3">
                            <div class="flex-auto p-6">
                                <div class="xl:px-4">
                                    <a href=" /logout" class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline block w-full bg-gray-600 text-white hover:bg-gray-700 text-white" >
                                        <i class="fa fa-sign-out"></i>
                                        <span>Logout</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="relative flex flex-col min-w-0 rounded break-words border bg-white border-1 border-gray-300">
                            <div class="flex-auto p-6">
                                <h6 class="mb-3 font-bold">Support</h6>
                                <p class="mb-0">Get fast, free help from our friendly assistants.</p>
                                <a href="/contact"><button type="button" class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-blue-600 text-white hover:bg-blue-600">Contact Us</button></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</x-profile>



