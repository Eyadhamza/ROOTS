<x-profile  :user="$user">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <div class="container">
        <div class="row flex-lg-nowrap">
            <div class="col-12 col-lg-auto mb-3" style="width: 200px;">
                <div class="card p-3">
                    <div class="e-navlist e-navlist--active-bg">
                        <ul class="nav">
                            <li class="nav-item"><a class="nav-link px-2 active" href="/profile/{{auth()->user()->id}}"><i class="fa fa-fw fa-bar-chart mr-1"></i><span>Overview</span></a></li>
                            <li class="nav-item"><a class="nav-link px-2" href="/home"><i class="fa fa-home mr-3"></i><span>Home</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="row">
                    <div class="col mb-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="e-profile">
                                    <div class="row">
                                        <div class="col-12 col-sm-auto mb-3">
                                            <div class="mx-auto" style="width: 140px;">
                                                <div class="d-flex justify-content-center align-items-center rounded" style="height: 140px; background-color: rgb(233, 236, 239);">
                                                    <span style="color: rgb(166, 168, 170); font: bold 8pt Arial;"><img
                                                            src="{{$user->avatar}}"
                                                            alt="eee"
                                                            class="rounded-full mr-4 "
                                                            style="width:150px; height: 140px "

                                                        ></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                                            <div class="text-center text-sm-left mb-2 mb-sm-0">
                                                <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap">{{$user->name}}</h4>
                                                <p class="mb-0">{{$user->username}}</p>
                                                <div class="text-muted"><small>last seen {{now()}}</small></div>
                                                <div class="">

                                                </div>
                                            </div>
                                            <div class="text-center text-sm-right">
                                                <span class="badge badge-secondary">{{$user->role}}</span>
                                                <div class="text-muted"><small>Joined {{$user->created_at}}</small></div>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="nav nav-tabs">
                                        <li class="nav-item"><a href="" class="active nav-link">Settings</a></li>
                                    </ul>
                                    <div class="tab-content pt-3">
                                        <div class="tab-pane active">
                                            <form class="form" novalidate="" method="POST" action="/profile/{{$user->id}}" enctype="multipart/form-data">
                                                @method('PATCH')
                                                @csrf
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="form-group">
                                                                    <label>Full Name</label>
                                                                    <input class="form-control" type="text" name="name" placeholder="Name" value="{{$user->name}}">
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <div class="form-group">
                                                                    <label>Username</label>
                                                                    <input class="form-control" type="text" name="username" placeholder="Username" value="{{$user->username}}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="form-group">
                                                                    <label>Email</label>
                                                                    <input class="form-control" type="text" placeholder="user@example.com" name="email" value="{{$user->email}}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="form-group">
                                                                    <label>Telegram</label>
                                                                    <input class="form-control" type="text" placeholder="http://t.me" name="telegram_url" value="{{$user->telegram_url}}">
                                                                </div>
                                                            </div>
                                                            @error('telegram_url')
                                                            <p class="text-danger text-sm mt-2 ">{{$message}}</p>
                                                            @enderror
                                                        </div>
                                                        <div class="row">
                                                            <div class="row">

                                                                <label for="avatar " class="block mb-2 uppercase font-bold text-sm text-white">
                                                                    avatar

                                                                </label>
                                                                <input type="file" name="avatar" class="border border-gray-300 p-2 w-full" id="avatar" >


                                                                @error('avatar')
                                                                <p class="text-danger text-sm mt-2 ">{{$message}}</p>
                                                                @enderror

                                                                <img
                                                                    src="{{$user->avatar}}"
                                                                    alt="eee"
                                                                    class="rounded-full mr-4 "
                                                                    style="width:50px; height: 50px "

                                                                >

                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col mb-3">
                                                                <div class="form-group">
                                                                    <label>About</label>
                                                                    <textarea class="form-control" rows="5" placeholder="My Bio" name="bio" ></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 col-sm-6 mb-3">
                                                        <div class="mb-2"><b>Change Password</b></div>

                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="form-group">
                                                                    <label>New Password</label>
                                                                    <input class="form-control" type="password" placeholder="••••••" name="password">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="form-group">
                                                                    <label>Confirm <span class="d-none d-xl-inline">Password</span></label>
                                                                    <input class="form-control" type="password" placeholder="••••••" name="password_confirmation"></div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col d-flex justify-content-end">
                                                        <button class="btn btn-primary" type="submit">Save Changes</button>
                                                    </div>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-3 mb-3">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="px-xl-3">
                                    <a href=" /logout" class="btn btn-block btn-secondary text-white" >
                                        <i class="fa fa-sign-out"></i>
                                        <span>Logout</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title font-weight-bold">Support</h6>
                                <p class="card-text">Get fast, free help from our friendly assistants.</p>
                                <a href="/contact"><button type="button" class="btn btn-primary">Contact Us</button></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</x-profile>



