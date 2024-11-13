<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController\FrontendController;
use App\Http\Controllers\UserController\UserController;
use App\Http\Controllers\AdminController\AdminController;
use App\Http\Controllers\EventController\EventController;
use App\Http\Controllers\Blogcontroller\Blogcontroller;
use App\Http\Controllers\Membershipcontroller\Membershipcontroller;
use App\Http\Controllers\Offercontrolle\Offercontroller;
use App\Http\controllers\gallerycontroller\gallerycontroller;





/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|   
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return redirect()->to('/');
    // return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('book-ticket-now/{id}',[EventController::class,'bookticket']);
    
});

require __DIR__.'/auth.php';

Route::get('/', [FrontendController::class,'home'])->name('/');

Route::get('about', [FrontendController::class,'about']);

Route::get('gallery', [FrontendController::class,'gallery']);

Route::get('membership', [FrontendController::class,'membership']);

Route::get('contact', [FrontendController::class,'contact']);

Route::get('offer', [FrontendController::class,'offer']);

Route::get('ticket-pdf', [FrontendController::class,'ticket_pdf']);


Route::get('events-details/{id}', [FrontendController::class,'events_details']);




// Route::get('login', [FrontendController::class,'login']);

// Route::get('signup', [FrontendController::class,'signup']);

Route::prefix('admin')->middleware(['CheckAdminAuth'])->group(function () {
    Route::get('dashboard', [AdminController::class,'dashboard']);
    Route::get('post-event', [AdminController::class,'PostEvent']);
    Route::get('post-Gallery', [AdminController::class,'PostGallery']);
    Route::get('post-membership', [AdminController::class,'PostMembership']);
    Route::get('post-offer', [AdminController::class,'PostOffer']);
    Route::get('post-blog', [AdminController::class,'PostBlog']);
    Route::get('post-booking', [AdminController::class,'PostBooking']);
    Route::get('post-contactreply', [AdminController::class,'Postcontactreply']);
    Route::get('post-contactus', [AdminController::class,'Postcontactus']);
    Route::get('post-pdfticket', [AdminController::class,'Postpdfticket']);
    Route::get('post-user', [AdminController::class,'Postuser']);
    Route::get('view-event', [AdminController::class,'ViewEvent']);
    Route::get('view-blog', [AdminController::class,'ViewBlog']);
    Route::get('view-gallery', [AdminController::class,'ViewGallery']);
    Route::get('view-membership', [AdminController::class,'ViewMembership']);
    Route::get('view-offer', [AdminController::class,'ViewOffer']);
    Route::get('view-contactreply', [AdminController::class,'ViewContactreply']);
    Route::get('view-contactus', [AdminController::class,'ViewContactus']);
    Route::get('view-pdfticket', [AdminController::class,'ViewPdfticket']);
    Route::get('view-booking', [AdminController::class,'ViewBooking']);
    Route::get('event-edit/{id}', [AdminController::class,'EventEdit']);
    Route::get('blog-edit/{id}', [AdminController::class,'BlogEdit']);
    Route::get('membership-edit/{id}', [AdminController::class,'MembershipEdit']);
    Route::get('offer-edit/{id}', [AdminController::class,'OfferEdit']);
    Route::get('gallery-edit/{id}', [AdminController::class,'GalleryEdit']);
    Route::get('event-applications', [AdminController::class,'EventApplication']);




});


Route::get('admin-login', [AdminController::class,'AdminLogin']);

Route::post('adminlogin', [AdminController::class,'loginadmin']);

Route::get('admin-logout', [AdminController::class,'Adminlogout']);

Route::post('add-events-post', [EventController::class,'AddEventsPost']);

Route::post('add-gallery-post', [galleryController::class,'AddGalleryPost']);

Route::post('add-membership-post', [Membershipcontroller::class,'AddMembershipPost']);

Route::post('add-blog-post', [Blogcontroller::class,'AddBlogPost']);

Route::post('add-offer-post', [Offercontroller::class,'AddOfferPost']);



Route::post('update-events-post', [EventController::class,'UpdateEvent']);
Route::post('update-blog-post', [Blogcontroller::class,'UpdateBlog']);
Route::post('update-membership-post', [Membershipcontroller::class,'UpdateMembership']);
Route::post('update-offer-post', [Offercontroller::class,'UpdateOffer']);
Route::post('update-gallery-post', [gallerycontroller::class,'UpdateGallery']);





Route::get('event-delete/{id}', [EventController::class,'DeleteEvent']);
Route::get('blog-delete/{id}', [Blogcontroller::class,'DeleteBlog']);
Route::get('membership-delete/{id}', [Membershipcontroller::class,'DeleteMembership']);
Route::get('offer-delete/{id}', [Offercontroller::class,'DeleteOffer']);
Route::get('gallery-delete/{id}', [gallerycontroller::class,'DeleteGallery']);


Route::post('add-newsletter', [gallerycontroller::class,'AddNewsletter']);

Route::post('add-testpage', [gallerycontroller::class,'AddTestpage']);
Route::get('add-testform', [FrontendController::class,'testform']);










