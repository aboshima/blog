 <!--App-Header-->
 <div class="app-header1 header d-flex py-1">
     <div class="container-fluid">
         <div class="d-flex">
             <a class="header-brand text-info" style="font-size: 22px;" href="{{ route('dashboard') }}">
                 <img src="{{ asset('myassets/images/logo2.png') }}" width="10px" style="margin-left: 20px; "
                     class="header-brand-img" alt="Lmslist logo">
                 {{-- CMS By Laravel --}}
             </a>
             <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-toggle="sidebar" href="#"></a>
             <div class="header-navicon">
                 <a href="#" data-toggle="search" class="nav-link d-lg-none navsearch-icon">
                     <i class="fa fa-search"></i>
                 </a>
             </div>
             <div class="header-navsearch">
                 <a href="#" class=""></a>
                 <form class="form-inline mr-auto">
                     <div class="nav-search">
                         <input type="search " class="form-control header-search"
                             placeholder="{{ __('sidebar_menu.search') }}" aria-label="Search">
                         <button class="btn btn-light" style="border: 2px solid #e1e6ed;" type="submit">
                             <i class="fa fa-search"></i>
                         </button>
                     </div>
                 </form>
             </div>


             <div class="d-flex order-lg-2 mr-auto mt-4">
                 <h5><i class="fa fa-user-circle-o text-primary" aria-hidden="true"></i>:-
                     &nbsp;
                     {{ Auth::User()->name }}
                 </h5>
             </div>
             <div class="d-flex order-lg-2 justify-content-between items-center">
                 <div class="d-flex order-lg-2 nav-link mr-auto items-center">
                     <a href="{{ route('logout') }}" style="font-size: 17px;">
                         <i class="fa fa-sign-out text-danger"></i> &nbsp;
                         خروج</a>
                 </div>
                 {{-- ===================== Language ===================== --}}
                 <div class="dropdown d-none d-md-flex">
                     <a href="#" class="d-flex nav-link leading-none" data-toggle="dropdown">
                         <div>
                             <span class="text-dark"><i class="fa fa-globe fa-3x text-secondary" {{-- fa-spin --}}
                                     style="margin-top: -10px;" aria-hidden="true"></i>
                             </span>
                         </div>
                     </a>
                     <div class="language-width dropdown-menu dropdown-menu-left dropdown-menu-arrow">
                         @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                             <a href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                                 class="dropdown-item d-flex pb-3">
                                 <i class="fa fa-language fa-2x text-primary br-3" aria-hidden="true"></i>
                                 &nbsp;&nbsp;
                                 <div>
                                     <strong>{{ $properties['native'] }}</strong>
                                 </div>
                             </a>
                         @endforeach
                     </div>
                 </div>
                 {{-- ===================== End Lang ===================== --}}

                 <div class="dropdown d-none d-md-flex">
                     <a class="nav-link icon full-screen-link">
                         <i class="fe fe-maximize-2" id="fullscreen-button"></i>
                     </a>
                 </div>

                 {{-- ===================== notification ===================== --}}
                 <div class="dropdown d-none d-md-flex">
                     <a class="nav-link icon" data-toggle="dropdown">
                         <i class="fa fa-bell-o"></i>
                         <span
                             class="nav-unread badge badge-danger badge-pill">{{ Auth::User()->unreadNotifications->count() }}</span>
                     </a>
                     <div class="dropdown-menu dropdown-menu-left dropdown-menu-arrow">
                         {{-- -------  Mark all Read ---------- --}}

                         <a href="{{ route('markAsRead') }}" class="dropdown-item alert alert-primary text-center">
                             <h4> تعيين أنها قرأت </h4>
                         </a>
                         {{-- -------  End Mark all Read ---------- --}}

                         <div class="dropdown-divider"></div>

                         {{-- -------  count---------- --}}
                         <a href="#" class="dropdown-item text-center">لديك
                             {{ Auth::User()->unreadNotifications->count() }} إشعار</a>
                         <div class="dropdown-divider"></div>
                         {{-- ------- End count---------- --}}
                         @foreach (Auth::user()->unreadNotifications as $notification)
                             {{-- -------  icone - date---------- --}}
                             <a href="#" class="dropdown-item d-flex pb-1">
                                 <div class="notifyimg">
                                     <i class="fa fa-envelope-o"></i>
                                 </div>
                                 <div>
                                     {{-- -------- user -------- --}}
                                     <strong>{{ $notification->data['user_create'] }}</strong>
                                     {{-- -------- end user -------- --}}

                                     <div class="small text-muted">{{ $notification->created_at }}</div>
                                 </div>
                             </a>
                             {{-- ------- End icone - date---------- --}}
                             {{-- ------------------ Post ------------------ --}}
                             <div class="dropdown-item text-start">
                                 {{-- ====================== link ======================== --}}
                                 <a href="{{ route('post_view', $notification->data['post_id']) }}">
                                     <h4 class="fa fa-bullhorn font-weight-semibold text-primary">
                                         {{ $notification->data['title'] }}
                                     </h4>
                                 </a>
                                 {{-- ====================== End link ======================== --}}
                             </div>
                             <div class="dropdown-divider"></div>
                         @endforeach
                         {{-- ----------------- --}}
                         <a href="#" class="dropdown-item text-center">إطلع على كل الإشعارات</a>
                     </div>
                 </div>
                 {{-- ===================== End notification ===================== --}}

                 {{-- ===================== Email ===================== --}}
                 <div class="dropdown d-none d-md-flex">
                     <a class="nav-link icon" data-toggle="dropdown">
                         <i class="fa fa-envelope-o"></i>
                         <span class="nav-unread badge badge-warning badge-pill">3</span>
                     </a>
                     <div class="dropdown-menu dropdown-menu-left dropdown-menu-arrow">
                         <a href="#" class="dropdown-item d-flex pb-3">
                             <img src="{{ asset('admin/assets/images/users/male/41.jpg') }}" alt="avatar-img"
                                 class="avatar brround align-self-center ml-3">
                             <div>
                                 <strong>Blake</strong> I've finished it! See you so.......
                                 <div class="small text-muted">30 mins ago</div>
                             </div>
                         </a>
                         <a href="#" class="dropdown-item d-flex pb-3">
                             <img src="{{ asset('admin/assets/images/users/female/1.jpg') }}" alt="avatar-img"
                                 class="avatar brround align-self-center ml-3">
                             <div>
                                 <strong>Caroline</strong> Just see the my Admin....
                                 <div class="small text-muted">12 mins ago</div>
                             </div>
                         </a>
                         <div class="dropdown-divider"></div>
                         <a href="#" class="dropdown-item text-center">أنظر كل الرسائل</a>
                     </div>
                 </div>
                 <div class="dropdown d-none d-md-flex">
                     <a class="nav-link icon" data-toggle="dropdown">
                         <i class="fe fe-grid"></i>
                     </a>
                     <div class="dropdown-menu dropdown-menu-left dropdown-menu-arrow app-selector">
                         <ul class="drop-icon-wrap">
                             <li>
                                 <a href="{{ url('https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox') }}"
                                     target="_blank" class="drop-icon-item">
                                     <i class="icon icon-speech text-dark"></i>
                                     <span class="block"> إيميل</span>
                                 </a>
                             </li>
                             <li>
                                 <a href="{{ route('message_list') }}" class="drop-icon-item">
                                     <i class="icon icon-bubbles text-dark"></i>
                                     <span class="block">رسائل</span>
                                 </a>
                             </li>
                         </ul>
                         <div class="dropdown-divider"></div>
                         <a href="#" class="dropdown-item text-center">شاهد الكل</a>
                     </div>
                 </div>

                 {{-- ===================== profile ===================== --}}
                 <div class="dropdown mr-0">
                     <a href="#" class="nav-link user-img pl-0 leading-none" data-toggle="dropdown">
                         <img src="{{ asset('myassets/images/profile.png') }}" alt="profile-img"
                             class="avatar avatar-md brround" style="border: 1px solid blue;">
                     </a>
                     <div class="dropdown-menu dropdown-menu-left dropdown-menu-arrow">
                         <a class="dropdown-item" href="">
                             <i class="dropdown-icon icon icon-user"></i> ملفي
                         </a>
                         <a class="dropdown-item" href="">
                             <i class="dropdown-icon icon icon-speech"></i> صندوق الوارد
                         </a>
                         <a class="dropdown-item" href="">
                             <i class="dropdown-icon icon icon-settings"></i> إعدادات الحساب
                         </a>
                         <a class="dropdown-item" href="{{ route('logout') }}">
                             <i class="dropdown-icon icon icon-power"></i> خروج
                         </a>
                     </div>
                 </div>
                 {{-- ===================== End profile ===================== --}}

             </div>
         </div>
     </div>
 </div>

 <!--/App-Header-->
