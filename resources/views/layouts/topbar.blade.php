<div class="header-dashboard">
    <div class="wrap">
        <div class="header-left">
            <a href="index.html">
                <img src="{{asset('images/logo/logo.png')}}">
            </a>
            <div class="button-show-hide">
                <i class="icon-menu-left"></i>
            </div>
        </div>
        <div class="header-grid">
            <div class="header-item country">
                <select class="image-select no-text">
                    <option data-thumbnail="images/country/1.png">ENG</option>
                    <option data-thumbnail="images/country/9.png">VIE</option>
                </select>
            </div>
            <div class="header-item button-dark-light">
                <i class="icon-moon"></i>
            </div>
            <div class="popup-wrap noti type-header">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="header-item">
                            <span class="text-tiny">1</span>
                            <i class="icon-bell"></i>
                        </span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end has-content" aria-labelledby="dropdownMenuButton1" >
                        <li>
                            <h6>Message</h6>
                        </li>
                        <li>
                            <div class="noti-item w-full wg-user active">
                                <div class="image">
                                    <img src="images/avatar/user-11.png" alt="">
                                </div>
                                <div class="flex-grow">
                                    <div class="flex items-center justify-between">
                                        <a href="#" class="body-title">Cameron Williamson</a>
                                        <div class="time">10:13 PM</div>
                                    </div>
                                    <div class="text-tiny">Hello?</div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="noti-item w-full wg-user active">
                                <div class="image">
                                    <img src="images/avatar/user-12.png" alt="">
                                </div>
                                <div class="flex-grow">
                                    <div class="flex items-center justify-between">
                                        <a href="#" class="body-title">Ralph Edwards</a>
                                        <div class="time">10:13 PM</div>
                                    </div>
                                    <div class="text-tiny">Are you there?  interested i this...</div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="noti-item w-full wg-user active">
                                <div class="image">
                                    <img src="images/avatar/user-13.png" alt="">
                                </div>
                                <div class="flex-grow">
                                    <div class="flex items-center justify-between">
                                        <a href="#" class="body-title">Eleanor Pena</a>
                                        <div class="time">10:13 PM</div>
                                    </div>
                                    <div class="text-tiny">Interested in this loads?</div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="noti-item w-full wg-user active">
                                <div class="image">
                                    <img src="images/avatar/user-11.png" alt="">
                                </div>
                                <div class="flex-grow">
                                    <div class="flex items-center justify-between">
                                        <a href="#" class="body-title">Jane Cooper</a>
                                        <div class="time">10:13 PM</div>
                                    </div>
                                    <div class="text-tiny">Okay...Do we have a deal?</div>
                                </div>
                            </div>
                        </li>
                        <li><a href="#" class="tf-button w-full">View all</a></li>
                    </ul>
                </div>
            </div>
            <div class="header-item button-zoom-maximize">
                <div class="">
                    <i class="icon-maximize"></i>
                </div>
            </div>
            <div class="popup-wrap user type-header">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="header-user wg-user">
                            <span class="image">
                                <img src="images/avatar/user-1.png" alt="">
                            </span>
                            <span class="flex flex-column">
                                <span class="body-title mb-2">{{ Auth::user()->name }}</span>
                                <span class="text-tiny text-capitalize">{{ Auth::user()->role->name }}</span>
                            </span>
                        </span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end has-content" aria-labelledby="dropdownMenuButton3" >
                        <li>
                            <a href="#" class="user-item">
                                <div class="icon">
                                    <i class="icon-user"></i>
                                </div>
                                <div class="body-title-2">Account</div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="user-item">
                                <div class="icon">
                                    <i class="icon-mail"></i>
                                </div>
                                <div class="body-title-2">Inbox</div>
                                <div class="number">27</div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="user-item">
                                <div class="icon">
                                    <i class="icon-file-text"></i>
                                </div>
                                <div class="body-title-2">Taskboard</div>
                            </a>
                        </li>
                        <li>
                            <a href="setting.html" class="user-item">
                                <div class="icon">
                                    <i class="icon-settings"></i>
                                </div>
                                <div class="body-title-2">Setting</div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="user-item">
                                <div class="icon">
                                    <i class="icon-headphones"></i>
                                </div>
                                <div class="body-title-2">Support</div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('logout') }}" class="user-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <div class="icon">
                                    <i class="icon-log-out"></i>
                                </div>
                                <div class="body-title-2">Log out</div>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>