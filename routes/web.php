<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdministratorController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\BulkEmailController;
use App\Http\Controllers\CareerApplicationController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ChiefTestimonialController;
use App\Http\Controllers\ClassesController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\FeeController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ManagementTeamController;
use App\Http\Controllers\NewsCategoryControler;
use App\Http\Controllers\ScholarshipController;
use App\Http\Controllers\SubscribeController;
use App\Http\Controllers\TeacherController;
use App\Models\Scholarship;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [FrontendController::class, 'index'])->name('index');







//career
Route::get('/Career/front', [FrontendController::class, 'career'])->name('career.front');








//Sunscribe
Route::post('/subscribe', [SubscribeController::class, 'store'])->name('subscribe');






// Message Faculty chief
Route::get('chief/faculty/message', [FrontendController::class, 'msgFaculty'])->name('faculty.message');




// alumin
Route::get('/alumni', [FrontendController::class, 'alumni'])->name('alumni');

// Faculty
Route::get('/pre-school', [FrontendController::class, 'preSchool'])->name('pre.school');
Route::get('/pre-primary-education', [FrontendController::class, 'prePrimaryEducation'])->name('pre.primary.education');
Route::get('/primary-education', [FrontendController::class, 'primaryEducation'])->name('primary.education');
Route::get('/secondary-education', [FrontendController::class, 'secondaryEducation'])->name('secondary.education');





//career application
Route::post('/career/applicaiton', [CareerApplicationController::class, 'careerApplication'])->name('carrer.application');


// About Section
// About us
// Route::get('/about/about-us', [FrontendController::class, 'about'])->name('about');
// Teacher
Route::get('/about/teachers', [FrontendController::class, 'teachers'])->name('teacher');
// administrator
Route::get('/administrator', [FrontendController::class, 'administrator'])->name('administrator');
// management team
Route::get('/team', [FrontendController::class, 'mgmgtTeam'])->name('management.team');
// alumni
Route::get('/about/alumni',[FrontendController::class,'almuni'])->name('about.alumni');
// Message from executives
Route::get('/about/executive',[FrontendController::class,'executiveMessage'])->name('about.executive');
// about us routes
Route::get('/about', [FrontendController::class, 'aboutUs'])->name('about.us');


// Resources Section
// Gallery
Route::get('/resources/gallery',[FrontendController::class,'displayGallery'])->name('resourcesGallery');
//front download
Route::get('/download/file', [FrontendController::class, 'downloadFile'])->name('download.file');


// Update section
// events
Route::get('/events-all', [FrontendController::class, 'events'])->name('events.front');
Route::get('/event/details/{id}', [FrontendController::class, 'eventDetails'])->name('event.details.front');
// news
Route::get('/news-all', [FrontendController::class, 'news'])->name('news.front');
Route::get('/news-category/{id}', [FrontendController::class, 'newsCategories'])->name('news.categories');
Route::get('/read-news/{id}', [FrontendController::class, 'newsSingle'])->name('news.single');
// notice
Route::get('/notice-all', [FrontendController::class, 'notice'])->name('notice.front');
Route::get('/notice/details/{id}', [FrontendController::class, 'noticeDetails'])->name('notice.details.front');


// Academic Section
//scholarship
Route::get('/scholarship', [FrontendController::class, 'scholarship'])->name('scholarship');
//fee structure
Route::get('/fee/structure', [FrontendController::class, 'feeStructure'])->name('fee.structure');

// Course Section
// +2 science
Route::get('/course/+2science',[FrontendController::class,'displayScience'])->name('course.science');
// +2 management
Route::get('/course/+2management',[FrontendController::class,'displayManagement'])->name('course.management');

// contact routes
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::post('/contact', [FrontendController::class, 'storeContact'])->name('store.contact');








Auth::routes(['register' => false]);



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {
    // dashboard
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    // notice
    Route::get('/notice', [NoticeController::class, 'index'])->name('notice.index');
    Route::get('/notice/create', [NoticeController::class, 'create'])->name('notice.create');
    Route::post('/notice', [NoticeController::class, 'store'])->name('notice.store');
    Route::get('/notice/edit/{id}', [NoticeController::class, 'edit'])->name('notice.edit');
    Route::post('/notice/edit/{id}', [NoticeController::class, 'update'])->name('notice.update');
    Route::get('/notice/delete/{id}', [NoticeController::class, 'delete'])->name('notice.delete');
    Route::get('/notice/show/{id}', [NoticeController::class, 'view'])->name('notice.show');


    // faculty
    Route::get('/faculty', [facultyController::class, 'index'])->name('faculty.index');
    Route::get('/faculty/create', [facultyController::class, 'create'])->name('faculty.create');
    Route::post('/faculty', [facultyController::class, 'store'])->name('faculty.store');
    Route::get('/faculty/edit/{id}', [facultyController::class, 'edit'])->name('faculty.edit');
    Route::post('/faculty/edit/{id}', [facultyController::class, 'update'])->name('faculty.update');
    Route::get('/faculty/delete/{id}', [facultyController::class, 'delete'])->name('faculty.delete');
    Route::get('/faculty/show/{id}', [facultyController::class, 'view'])->name('faculty.show');


    //News Category
    Route::get('/news-category', [NewsCategoryControler::class, 'index'])->name('news.category.index');
    Route::get('/news-category/create', [NewsCategoryControler::class, 'create'])->name('news.category.create');
    Route::post('/news-category', [NewsCategoryControler::class, 'store'])->name('news.category.store');
    Route::get('/news-category/edit/{id}', [NewsCategoryControler::class, 'edit'])->name('news.category.edit');
    Route::post('/news-category/edit/{id}', [NewsCategoryControler::class, 'update'])->name('news.category.update');
    Route::get('/news-category/delete/{id}', [NewsCategoryControler::class, 'destroy'])->name('news.category.delete');


    // news
    Route::get('/news', [NewsController::class, 'index'])->name('news.index');
    Route::get('/news/create', [NewsController::class, 'create'])->name('news.create');
    Route::post('/news', [NewsController::class, 'store'])->name('news.store');
    Route::get('/news/edit/{id}', [NewsController::class, 'edit'])->name('news.edit');
    Route::post('/news/edit/{id}', [NewsController::class, 'update'])->name('news.update');
    Route::get('/news/delete/{id}', [NewsController::class, 'delete'])->name('news.delete');
    Route::get('/news/show/{id}', [NewsController::class, 'view'])->name('news.show');


    //scholarship
    Route::get('/scholarship', [ScholarshipController::class, 'index'])->name('scholarship.index');
    Route::get('/scholarship/create', [ScholarshipController::class, 'create'])->name('scholarship.create');
    Route::post('/scholarship/store', [ScholarshipController::class, 'store'])->name('scholarship.store');
    Route::get('/scholarship/edit/{id}', [ScholarshipController::class, 'edit'])->name('scholarship.edit');
    Route::post('/scholarship/edit/{id}', [ScholarshipController::class, 'update'])->name('scholarship.update');
    Route::get('/scholarship/delete/{id}', [ScholarshipController::class, 'destroy'])->name('scholarship.delete');


    // Gallery
    Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.index');
    Route::get('/gallery/create', [GalleryController::class, 'create'])->name('gallery.create');
    Route::post('/gallery', [GalleryController::class, 'store'])->name('gallery.store');
    Route::get('/gallery/edit/{id}', [GalleryController::class, 'edit'])->name('gallery.edit');
    Route::post('/gallery/edit/{id}', [GalleryController::class, 'update'])->name('gallery.update');
    Route::get('/gallery/delete/{id}', [GalleryController::class, 'delete'])->name('gallery.delete');
    // Route::get('/gallery/show/{id}', [GalleryController::class, 'view'])->name('gallery.show');



    // Chief_testimonial
    Route::get('/testimonial', [ChiefTestimonialController::class, 'index'])->name('testimonial.index');
    Route::get('/testimonial/create', [ChiefTestimonialController::class, 'create'])->name('testimonial.create');
    Route::post('/testimonial', [ChiefTestimonialController::class, 'store'])->name('testimonial.store');
    Route::get('/testimonial/edit/{id}', [ChiefTestimonialController::class, 'edit'])->name('testimonial.edit');
    Route::post('/testimonial/edit/{id}', [ChiefTestimonialController::class, 'update'])->name('testimonial.update');
    Route::get('/testimonial/delete/{id}}', [ChiefTestimonialController::class, 'delete'])->name('testimonial.delete');
    Route::get('/testimonial/show/{id}', [ChiefTestimonialController::class, 'view'])->name('testimonial.show');


    // alium
    Route::get('/alumni', [AlumniController::class, 'index'])->name('alumni.index');
    Route::get('/alumni/create', [AlumniController::class, 'create'])->name('alumni.create');
    Route::post('/alumni', [AlumniController::class, 'store'])->name('alumni.store');
    Route::get('/alumni/edit/{id}', [AlumniController::class, 'edit'])->name('alumni.edit');
    Route::post('/alumni/edit/{id}', [AlumniController::class, 'update'])->name('alumni.update');
    Route::get('/alumni/delete/{id}', [AlumniController::class, 'delete'])->name('alumni.delete');


    // downloads
    Route::get('/download', [DownloadController::class, 'index'])->name('download.index');
    Route::get('/download/create', [DownloadController::class, 'create'])->name('download.create');
    Route::post('/download', [DownloadController::class, 'store'])->name('download.store');
    Route::get('/download/edit/{id}', [DownloadController::class, 'edit'])->name('download.edit');
    Route::post('/download/edit/{id}', [DownloadController::class, 'update'])->name('download.update');
    Route::get('/download/delete/{id}', [DownloadController::class, 'delete'])->name('download.delete');

    // event
    Route::get('/event', [EventController::class, 'index'])->name('event.index');
    Route::get('/event/create', [EventController::class, 'create'])->name('event.create');
    Route::post('/event', [EventController::class, 'store'])->name('event.store');
    Route::get('/event/edit/{id}', [EventController::class, 'edit'])->name('event.edit');
    Route::post('/event/edit/{id}', [EventController::class, 'update'])->name('event.update');
    Route::get('/event/delete/{id}', [EventController::class, 'delete'])->name('event.delete');
    Route::get('/event/show/{id}', [EventController::class, 'view'])->name('event.show');


    // career
    Route::get('/career', [CareerController::class, 'index'])->name('career.index');
    Route::get('/career/create', [CareerController::class, 'create'])->name('career.create');
    Route::post('/career', [CareerController::class, 'store'])->name('career.store');
    Route::get('/career/edit/{id}', [CareerController::class, 'edit'])->name('career.edit');
    Route::post('/career/edit/{id}', [CareerController::class, 'update'])->name('career.update');
    Route::get('/career/delete/{id}', [CareerController::class, 'delete'])->name('career.delete');
    Route::get('/career/application/index', [CareerController::class, 'careerApplication'])->name('career.application');
    Route::get('/career/application/view/{id}', [CareerController::class, 'careerApplicationView'])->name('career.application.view');
    Route::get('/career/application/delete/{id}', [CareerController::class, 'careerApplicationDelete'])->name('career.application.delete');


    // management team
    Route::get('/team', [ManagementTeamController::class, 'index'])->name('team.index');
    Route::get('/team/create', [ManagementTeamController::class, 'create'])->name('team.create');
    Route::post('/team', [ManagementTeamController::class, 'store'])->name('team.store');
    Route::get('/team/edit/{id}', [ManagementTeamController::class, 'edit'])->name('team.edit');
    Route::post('/team/edit/{id}', [ManagementTeamController::class, 'update'])->name('team.update');
    Route::get('/team/delete/{id}', [ManagementTeamController::class, 'delete'])->name('team.delete');
    Route::get('/team/show/{id}', [ManagementTeamController::class, 'view'])->name('team.show');


    // adminstration team
    Route::get('/administrator', [AdministratorController::class, 'index'])->name('administrator.index');
    Route::get('/administrator/create', [AdministratorController::class, 'create'])->name('administrator.create');
    Route::post('/administrator', [AdministratorController::class, 'store'])->name('administrator.store');
    Route::get('/administrator/edit/{id}', [AdministratorController::class, 'edit'])->name('administrator.edit');
    Route::post('/administrator/edit/{id}', [AdministratorController::class, 'update'])->name('administrator.update');
    Route::get('/administrator/delete/{id}', [AdministratorController::class, 'delete'])->name('administrator.delete');
    Route::get('/administrator/show/{id}', [AdministratorController::class, 'view'])->name('administrator.show');


    // fee sturucture
    Route::get('/fee', [FeeController::class, 'index'])->name('fee.index');
    Route::get('/fee/create', [FeeController::class, 'create'])->name('fee.create');
    Route::post('/fee', [FeeController::class, 'store'])->name('fee.store');
    Route::get('/fee/edit/{id}', [FeeController::class, 'edit'])->name('fee.edit');
    Route::post('/fee/edit/{id}', [FeeController::class, 'update'])->name('fee.update');
    Route::get('/fee/delete/{id}', [FeeController::class, 'delete'])->name('fee.delete');

    // teacher
    Route::get('/teacher', [TeacherController::class, 'index'])->name('teacher.index');
    Route::get('/teacher/create', [TeacherController::class, 'create'])->name('teacher.create');
    Route::post('/teacher', [TeacherController::class, 'store'])->name('teacher.store');
    Route::get('/teacher/edit/{id}', [TeacherController::class, 'edit'])->name('teacher.edit');
    Route::post('/teacher/edit/{id}', [TeacherController::class, 'update'])->name('teacher.update');
    Route::get('/teacher/delete/{id}', [TeacherController::class, 'delete'])->name('teacher.delete');

    // classes
    Route::get('/classes', [ClassesController::class, 'index'])->name('classes.index');
    Route::get('/classes/create', [classesController::class, 'create'])->name('classes.create');
    Route::post('/classes', [classesController::class, 'store'])->name('classes.store');
    Route::get('/classes/edit/{id}', [classesController::class, 'edit'])->name('classes.edit');
    Route::post('/classes/edit/{id}', [classesController::class, 'update'])->name('classes.update');
    Route::get('/classes/delete/{id}', [classesController::class, 'delete'])->name('classes.delete');
    Route::get('/classes/show/{id}', [classesController::class, 'view'])->name('classes.show');

    // contact
    Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
    Route::get('/contact/{id}', [ContactController::class, 'delete'])->name('contact.delete');

    //Bulk Email
    Route::get('/bulk-email', [BulkEmailController::class, 'index'])->name('email.index');
    Route::post('/bulk-email', [BulkEmailController::class, 'send'])->name('email.send');
    //changepassword
    Route::get('/changepassword', [ChangePasswordController::class, 'index'])->name('password.index');
    Route::post('/changepassword-store', [ChangePasswordController::class, 'update'])->name('password.store');
});
