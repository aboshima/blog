 <!-- Sidebar menu-->
 <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
 <aside class="app-sidebar doc-sidebar" style="font-family: cairo;">
     <div class="app-sidebar__user clearfix">
         <div class="dropdown user-pro-body">
             <div>
                 <a href="{{ route('dashboard') }}">
                     <img src="{{ asset('myassets/images/github.png') }}" alt="user-img" class="avatar avatar-lg brround">
                     <a href="#" class="profile-img">
                         <span class="fa fa-pencil" aria-hidden="true"></span>
                     </a>
                 </a>
             </div>
             <div class="user-info">
                 <h2>{{ __('sidebar_menu.aboaiman') }}</h2>
                 <span>{{ __('sidebar_menu.webprogramming') }}</span>
             </div>
         </div>
     </div>
     <ul class="side-menu">
         {{-- ===================== Dashboard ===================== --}}


         {{-- ===================== role ===================== --}}
         @role('admin')
             <li>
                 <a class="side-menu__item" href="{{ route('list_users') }}">
                     <i class="side-menu__icon fe fe-users"></i>
                     <span class="side-menu__label">{{ __('sidebar_menu.users') }}</span></a>
             </li>
         @endrole
         {{-- ===================== End role ===================== --}}

         {{-- ===================== Categories ===================== --}}

         <li>
             <a class="side-menu__item" href="{{ route('list_categories') }}">
                 <i class="side-menu__icon fe fe-airplay"></i>
                 <span class="side-menu__label">{{ __('sidebar_menu.list_categories') }}</span></a>
         </li>
         <li>
             <a class="side-menu__item" href="{{ route('list_posts') }}">
                 <i class="side-menu__icon fa fa-pencil-square-o"></i>
                 <span class="side-menu__label">{{ __('sidebar_menu.list_posts') }}</span></a>
         </li>
         {{-- ===================== Posts ===================== --}}

         {{-- ===================== Contact Us ===================== --}}
         @role('admin')
             <li>
                 <a class="side-menu__item" href="{{ route('message_list') }}">
                     <i class="side-menu__icon fa fa-commenting-o"></i>
                     <span class="side-menu__label">{{ __('sidebar_menu.view_message') }}</span></a>
             </li>
         @endrole

         {{-- ===================== End Api ===================== --}}

         <li class="slide">
             <a href="{{ route('documentation') }}"
                 class="btn btn-light btn-block mt-3">{{ __('sidebar_menu.documentation') }}</a>
         </li>
     </ul>
 </aside>
 <!-- /Sidebar menu-->
