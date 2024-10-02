<?php

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\AppSettings;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\Admin\ApiController;
use App\Http\Controllers\Admin\PostsController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\ContactUsControler;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\client\CommentsController;
use App\Http\Controllers\Client\HomePageController;
use App\Http\Controllers\Admin\CategoriesController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers\client\PostsController as ClientPostsController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/store_user', [UsersController::class, 'store']);

Route::get('/home', function () {
    return view('admin.layout.master');
});

// ========================== Start ==========================
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale() . '/admin_control',
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {
        Route::group(['middleware' => ['auth', 'role:admin|content']], function () {

            Route::group(['middleware' => ['role:admin']], function () {
                // ================= Users =================
                Route::get('/list_users', [UsersController::class, 'index'])->name('list_users');
                Route::get('/add_user', [UsersController::class, 'create'])->name('new_user');
                Route::post('/save_user', [UsersController::class, 'store'])->name('save_user');
                Route::get('/edit_user/{id}', [UsersController::class, 'edit'])->name('edit_user');
                Route::post('/update_user/{id}', [UsersController::class, 'update'])->name('update_user');
                Route::get('/show_user/{id}', [UsersController::class, 'show'])->name('show_user');
                Route::get('/delete_user/{id}', [UsersController::class, 'destroy'])->name('delete_user');
                Route::post('/search', [UsersController::class, 'search'])->name('search');
                Route::get('/documentation', [UsersController::class, 'documentation'])->name('documentation');
            });
            Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
            Route::get('/show_post_notification', [DashboardController::class, 'show_post_notification'])->name('show_post_notification');

            // ================= Category =================
            Route::get('/list_categories', [CategoriesController::class, 'index'])->name('list_categories');
            Route::get('/add_category', [CategoriesController::class, 'create'])->name('new_category');
            Route::post('/save_category', [CategoriesController::class, 'store'])->name('save_category');
            Route::get('/edit_category/{id}', [CategoriesController::class, 'edit'])->name('edit_category');
            Route::post('/update_category/{id}', [CategoriesController::class, 'update'])->name('update_category');
            Route::get('/show_category/{id}', [CategoriesController::class, 'show'])->name('show_category');
            Route::get('/delete_category/{id}', [CategoriesController::class, 'destroy'])->name('delete_category');
            Route::post('/search_category', [CategoriesController::class, 'search'])->name('search_category');

            // ================= Posts =================
            Route::get('/list_posts', [PostsController::class, 'index'])->name('list_posts');
            Route::get('/post_view/{id}', [PostsController::class, 'show'])->name('post_view');
            Route::get('Notification/markAsRead', [PostsController::class, 'markAsRead'])->name('Notification.read');
            Route::get('/edit_post/{id}', [PostsController::class, 'edit'])->name('edit_post');
            Route::get('/add_post', [PostsController::class, 'create'])->name('new_post');
            Route::post('/save_post', [PostsController::class, 'store'])->name('save_post');
            Route::post('/update_post/{id}', [PostsController::class, 'update'])->name('update_post');
            Route::get('/delete_post/{id}', [PostsController::class, 'destroy'])->name('delete_post');
            Route::post('/search_post', [PostsController::class, 'search'])->name('search_post');
            Route::get('/markAsRead', [PostsController::class, 'markAsRead'])->name('markAsRead');

            // -------------------
            Route::get('/message_list', [ContactUsControler::class, 'index'])->name('message_list');
            Route::get('/message_delete/{id}', [ContactUsControler::class, 'destroy'])->name('message_delete');
        });

        Route::get('/login', [UsersController::class, 'login'])->name('login');
        Route::get('/logout', [UsersController::class, 'logout'])->name('logout');
        Route::post('/checkUser', [UsersController::class, 'checkUser'])->name('checkUser');

        // ================= Api =================
        Route::get('/generateAPI', [ApiController::class, 'generateAPI'])->name('generateAPI');
        Route::get('/generateAPI_url', [ApiController::class, 'generateAPI_url'])->name('generateAPI_url');
        Route::get('/generateAPI_database', [ApiController::class, 'generateAPI_database'])->name('generateAPI_database');
    }
);



// ============== Client Route ===============
Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
], function () {
    Route::get('/', [HomePageController::class, 'index'])->name('home');
    Route::get('about', [HomePageController::class, 'about'])->name('about');

    Route::get('/show_post/{id}', [ClientPostsController::class, 'show'])->name('show_post');
    Route::get('/postsByCategory/{id}', [ClientPostsController::class, 'postsByCategory'])->name('postsByCategory');
    Route::post('/save_comment/{id}', [CommentsController::class, 'store'])->name('save_comment');
    Route::post('/search_post_home', [ClientPostsController::class, 'search'])->name('search_post_home');
    Route::get('show_last_post', [ClientPostsController::class, 'show_last_post'])->name('show_last_post');

    Route::get('/contact_us', [ContactUsControler::class, 'create'])->name('contact_us');
    Route::post('/save_message', [ContactUsControler::class, 'saveContactUs'])->name('save_message');
    Route::get('/message_list', [ContactUsControler::class, 'index'])->name('message_list');
});


// ============================ page Normal ============================






// routes/web.php

Route::post('/like/{post}', 'LikeController@like')->name('like');
Route::post('/unlike/{post}', 'LikeController@unlike')->name('unlike');

Route::get('/generateRoles', [AppSettings::class, 'generateRoles'])->name('generateRoles');
