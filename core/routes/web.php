<?php
use App\Http\Controllers\JobApplicationController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\HomesController;
use App\Http\Controllers\Admin\MediaUploadController;
use App\Http\Controllers\Admin\MentorChanakyaController;
use App\Http\Controllers\Admin\MentorTeamController;
use App\Http\Controllers\Admin\PagesController;
use App\Http\Controllers\Membership\EntrepreneurController;
use App\Http\Controllers\Membership\ExecutiveController;
use App\Http\Controllers\Membership\RazorpayController;
use App\Http\Controllers\Membership\StartupController;
use App\Http\Controllers\Membership\VolunteerController;
use Illuminate\Support\Facades\Route;
use App\Permalink;
use App\Http\Controllers\MembershipController;
use App\Http\Controllers\Membership\StudentController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\HeroSectionController;
use App\Http\Controllers\ChanakyaFormController;
use App\Http\Controllers\SponsorFormController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\PageController;
Route::get('/admin/hero-section', [HeroSectionController::class, 'edit'])->name('home.hero.edit');
Route::post('/admin/hero-section', [HeroSectionController::class, 'update'])->name('home.hero.update');
Route::get('/b',function(){
  return view('yc.b');
});
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
//YC Routes
Route::get('/home',[AdminController::class,'home'])->name('home');
Route::get('/about',[AdminController::class,'about'])->name('about');
Route::get('/mentor-team',[AdminController::class,'mentorTeam'])->name('mentor-team');
Route::get('/advisory-team',[AdminController::class,'advisoryTeam'])->name('advisory-team');
Route::get('/academic-team',[AdminController::class,'academicTeam'])->name('academic-team');
Route::get('/vc-team',[AdminController::class,'vcTeam'])->name('vc-team');
Route::get('/management-team',[AdminController::class,'managementTeam'])->name('management-team');
Route::get('/program',[AdminController::class,'program'])->name('program');  
Route::get('/learning',[AdminController::class,'learning'])->name('learning');
Route::get('/outcomes',[AdminController::class,'outcomes'])->name('outcomes');
Route::get('/ceo-md',[AdminController::class,'ceo'])->name('ceo-md');
Route::get('/executives',[AdminController::class,'executives'])->name('executives');
Route::get('/fortune500',[AdminController::class,'fortune'])->name('fortune500');
Route::get('/unicorn-founders',[AdminController::class,'unicornFounders'])->name('unicorn-founders');
Route::get('/about-chanakya',[AdminController::class,'aboutChanakya'])->name('about-chanakya');
Route::get('/become-a-chanakya',[AdminController::class,'becomeChanakya'])->name('become-a-chanakya');
Route::get('/become-a-sponsor',[AdminController::class,'becomeSponsor'])->name('become-a-sponsor');
Route::get('/stories',[AdminController::class,'blog'])->name('blog');
Route::get('/career',[AdminController::class,'career'])->name('career');
Route::get('/case-studies',[AdminController::class,'caseStudies'])->name('case-studies');
Route::get('/founder',[AdminController::class,'founder'])->name('founder');
Route::get('/institution-collaboration',[AdminController::class,'instituiton'])->name('institution-collaboration');
Route::get('/membership',[AdminController::class,'membership'])->name('membership');
Route::get('/podcast',[AdminController::class,'podcast'])->name('podcast');
Route::get('/privacy-policy',[AdminController::class,'privacy'])->name('privacy-policy');
Route::get('/terms-and-condition',[AdminController::class,'terms'])->name('terms-and-condition');
Route::get('/videos',[AdminController::class,'video'])->name('video-series');
Route::get('/clubs-and-activities',[AdminController::class,'club'])->name('clubs&activities');

//events
Route::get('/events','Front\FrontendController@events')->name('events');
Route::get('/event-detail/{slug}','Front\FrontendController@eventDetails')->name('event-detail');



Route::get('/mentor-team', [MentorTeamController::class, 'showMentorsTeam'])->name('mentor-team');
Route::get('/advisory-team', [MentorTeamController::class, 'showAdvisoryTeam'])->name('advisory-team');
Route::get('/academic-team', [MentorTeamController::class, 'showAcademicTeam'])->name('academic-team');
Route::get('/vc-team', [MentorTeamController::class, 'showVcTeam'])->name('vc-team');
Route::get('/management-team', [MentorTeamController::class, 'showManagementTeam'])->name('management-team');


Route::get('/home', [HomeController::class, 'showMentors'])->name('home');
Route::get('/ceo-md', [MentorChanakyaController::class, 'showCEOMentors'])->name('ceo-md');
Route::get('/unicorn-founders', [MentorChanakyaController::class, 'showUnicornFounders'])->name('unicorn-founders');
Route::get('/executives', [MentorChanakyaController::class, 'showExecutives'])->name('executives');
Route::get('/fortune500', [MentorChanakyaController::class, 'showFortune'])->name('fortune500');


Route::post('/student-form', [StudentController::class, 'store'])->name('student.store');
Route::post('/volunteer-form', [VolunteerController::class, 'store'])->name('volunteer.store');
Route::post('/entrepreneur-form', [EntrepreneurController::class, 'store'])->name('entrepreneur.store');
Route::post('/startup-membership', [StartupController::class, 'store'])->name('startup.store');
Route::post('/executive-membership', [ExecutiveController::class, 'store'])->name('executive.store');


Route::get('/razorpay/pay/{id}', [RazorpayController::class, 'payWithRazorpay'])->name('razorpay.pay');
Route::post('/razorpay/payment', [RazorpayController::class, 'payment'])->name('razorpay.payment');
Route::get('/razorpay/success', [RazorpayController::class, 'success'])->name('payment.success');
Route::get('/razorpay/failed', [RazorpayController::class, 'failed'])->name('payment.failed');



Route::get('/admin/pages', [PagesController::class, 'index'])->name('admin.page.index');
Route::get('/admin/pages/create', [PagesController::class, 'create'])->name('admin.page.create');
Route::post('/admin/pages/store', [PagesController::class, 'store'])->name('admin.page.store');
Route::get('/admin/pages/{id}', [PagesController::class, 'show'])->name('admin.page.show');
Route::get('/admin/pages/{id}/edit', [PagesController::class, 'edit'])->name('admin.page.edit');
Route::put('/admin/pages/{id}', [PagesController::class, 'update'])->name('admin.page.update');
Route::delete('/admin/pages/{id}', [PagesController::class, 'destroy'])->name('admin.page.destroy');



Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('media-uploads', [MediaUploadController::class, 'index'])->name('media.upload.index');
    Route::get('media-upload/create', [MediaUploadController::class, 'create'])->name('media.upload.create');
    Route::post('media-upload', [MediaUploadController::class, 'store'])->name('media.upload.store');
    Route::get('media-upload/{id}', [MediaUploadController::class, 'show'])->name('media.upload.show');
    Route::get('media-upload/{id}/edit', [MediaUploadController::class, 'edit'])->name('media.upload.edit');
    Route::put('media-upload/{id}', [MediaUploadController::class, 'update'])->name('media.upload.update');
    Route::delete('media-upload/{id}', [MediaUploadController::class, 'destroy'])->name('media.upload.destroy');
});


Route::get('/admin/homes', [HomesController::class, 'index'])->name('admin.homes.index');
Route::get('/admin/homes/create', [HomesController::class, 'create'])->name('admin.homes.create');
Route::post('/admin/homes/store', [HomesController::class, 'store'])->name('admin.homes.store');
Route::get('/admin/homes/{id}', [HomesController::class, 'show'])->name('admin.homes.show');
Route::get('/admin/homes/{id}/edit', [HomesController::class, 'edit'])->name('admin.homes.edit');
Route::put('/admin/homes/{id}', [HomesController::class, 'update'])->name('admin.homes.update');
Route::delete('/admin/homes/{id}', [HomesController::class, 'destroy'])->name('admin.homes.destroy');


Route::get('/career-detail',function(){
    return view('yc.career-detail');
})->name('career-detail');

Route::get('/careers',function(){
    return view('yc.careers');
})->name('careers');

Route::get('/clubs-and-activities',function(){
    return view('yc.clubs&activities');
  })->name('clubs-and-activities');
  
  Route::get('/cookie-policy',function(){
    return view('yc.cookie_policy');
  })->name('cookie-policy');
  
  Route::get('/community-ethics',function(){
    return view('yc.community-ethics');
  })->name('community-ethics');
  
  Route::get('/code-of-conduct',function(){
    return view('yc.code-of-conduct');
  })->name('code-of-conduct');
  Route::get('/contact-us',function(){
    return view('yc.contact');
  })->name('contact');
  Route::get('/internship',function(){
    return view('yc.internship');
  })->name('internship');
  
  

Route::get('/admin/mentor-chanakya', [MentorChanakyaController::class, 'index'])->name('admin.mentor_chanakya.index');
Route::get('/admin/mentor-chanakya/create', [MentorChanakyaController::class, 'create'])->name('admin.mentor_chanakya.create');
Route::post('/admin/mentor-chanakya/store', [MentorChanakyaController::class, 'store'])->name('admin.mentor_chanakya.store');
Route::get('/admin/mentor-chanakya/{id}', [MentorChanakyaController::class, 'show'])->name('admin.mentor_chanakya.show');
Route::get('/admin/mentor-chanakya/{id}/edit', [MentorChanakyaController::class, 'edit'])->name('admin.mentor_chanakya.edit');
Route::put('/admin/mentor-chanakya/{id}', [MentorChanakyaController::class, 'update'])->name('admin.mentor_chanakya.update');
Route::delete('/admin/mentor-chanakya/{id}', [MentorChanakyaController::class, 'destroy'])->name('admin.mentor_chanakya.destroy');

Route::get('/admin/mentor-team', [MentorTeamController::class, 'index'])->name('admin.mentor_team.index');
Route::get('/admin/mentor-team/create', [MentorTeamController::class, 'create'])->name('admin.mentor_team.create');
Route::post('/admin/mentor-team/store', [MentorTeamController::class, 'store'])->name('admin.mentor_team.store');
Route::get('/admin/mentor-team/{id}', [MentorTeamController::class, 'show'])->name('admin.mentor_team.show');
Route::get('/admin/mentor-team/{id}/edit', [MentorTeamController::class, 'edit'])->name('admin.mentor_team.edit');
Route::put('/admin/mentor-team/{id}', [MentorTeamController::class, 'update'])->name('admin.mentor_team.update');
Route::delete('/admin/mentor-team/{id}', [MentorTeamController::class, 'destroy'])->name('admin.mentor_team.destroy');


Route::get('/student-membership', function () {
    $plan = request('plan', 'student'); // Default to 'student' if no plan is selected
    $type = request('type', 'monthly'); // Default to 'monthly' if no type is selected

    return view('yc.student-membership', compact('plan', 'type'));
})->name('student-membership');

  Route::get('/volunteer-membership',function(){
    return view('yc.volunteer-membership');
  })->name('volunteer-membership');
  Route::get('/entrepreneur-membership',function(){
    return view('yc.entrepreneur-membership');
  })->name('entrepreneur-membership');
  Route::get('/startup-membership',function(){
    return view('yc.startup-membership');
  })->name('startup-membership');
  Route::get('/executive-membership',function(){
    return view('yc.executive-membership');
  })->name('executive-membership');

Route::fallback(function () {
  return view('errors.404');
});

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth:admin', 'setLfmPath']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
    Route::post('summernote/upload', 'Admin\SummernoteController@uploadFileManager')->name('lfm.summernote.upload');
});

Route::get('/backup', 'Front\FrontendController@backup');


// /*=======================================================
// ******************** Front Routes **********************
// =======================================================*/

Route::post('/push', 'Front\PushController@store');

Route::group(['middleware' => 'setlang'], function () {
  Route::get('/', 'Front\FrontendController@index')->name('front.index');

  Route::group(['prefix' => 'donation'], function () {
    Route::get('/paystack/success', 'Payment\causes\PaystackController@successPayment')->name('donation.paystack.success');
  });

});

Route::group(['middleware' => ['web', 'setlang']], function () {
  Route::post('/login', 'User\LoginController@login')->name('user.login.submit');

  Route::get('/login/facebook', 'User\LoginController@redirectToFacebook')->name('front.facebook.login');
  Route::get('/login/facebook/callback', 'User\LoginController@handleFacebookCallback')->name('front.facebook.callback');

  Route::get('/login/google', 'User\LoginController@redirectToGoogle')->name('front.google.login');
  Route::get('/login/google/callback', 'User\LoginController@handleGoogleCallback')->name('front.google.callback');

  Route::get('/register', 'User\RegisterController@registerPage')->name('user-register');
  Route::post('/register/submit', 'User\RegisterController@register')->name('user-register-submit');
  Route::get('/register/verify/{token}', 'User\RegisterController@token')->name('user-register-token');
  Route::get('/forgot', 'User\ForgotController@showforgotform')->name('user-forgots');
  Route::post('/forgot', 'User\ForgotController@forgot')->name('user-forgot-submit');

  // Course Route For Front-End
  Route::post('/course/review', 'Front\CourseController@giveReview')->name('course.review');
});






Route::group(['middleware' => ['web', 'setlang']], function () {
  Route::get('/login', 'User\LoginController@showLoginForm')->name('user.login');
  Route::post('/login', 'User\LoginController@login')->name('user.login.submit');
  Route::get('/register', 'User\RegisterController@registerPage')->name('user-register');
  Route::post('/register/submit', 'User\RegisterController@register')->name('user-register-submit');
  Route::get('/register/verify/{token}', 'User\RegisterController@token')->name('user-register-token');
  Route::get('/forgot', 'User\ForgotController@showforgotform')->name('user-forgots');
  Route::post('/forgot', 'User\ForgotController@forgot')->name('user-forgot-submit');
});


Route::group(['prefix' => 'user', 'middleware' => ['auth', 'userstatus', 'setlang']], function () {
  // Summernote image upload
  Route::post('/summernote/upload', 'User\SummernoteController@upload')->name('user.summernote.upload');

  Route::get('/dashboard', 'User\UserController@index')->name('user-dashboard');
  Route::get('/reset', 'User\UserController@resetform')->name('user-reset');
  Route::post('/reset', 'User\UserController@reset')->name('user-reset-submit');
  Route::get('/profile', 'User\UserController@profile')->name('user-profile');
  Route::post('/profile', 'User\UserController@profileupdate')->name('user-profile-update');
  Route::get('/logout', 'User\LoginController@logout')->name('user-logout');
 
});

// /*=======================================================
// ******************** Admin Routes **********************
// =======================================================*/

Route::group(['prefix' => 'admin', 'middleware' => 'guest:admin'], function () {
  Route::post('/login', 'Admin\LoginController@authenticate')->name('admin.auth');

  Route::get('/mail-form', 'Admin\ForgetController@mailForm')->name('admin.forget.form');
  Route::post('/sendmail', 'Admin\ForgetController@sendmail')->name('admin.forget.mail');
});


Route::group(['prefix' => 'admin', 'middleware' => ['auth:admin', 'checkstatus', 'setLfmPath']], function () {

  // RTL check
  Route::get('/rtlcheck/{langid}', 'Admin\LanguageController@rtlcheck')->name('admin.rtlcheck');

  // Summernote image upload
  Route::post('/summernote/upload', 'Admin\SummernoteController@upload')->name('admin.summernote.upload');

  // Admin logout Route
  Route::get('/logout', 'Admin\LoginController@logout')->name('admin.logout');

  Route::group(['middleware' => 'checkpermission:Dashboard'], function () {
    // Admin Dashboard Routes
    Route::get('/dashboard', 'Admin\DashboardController@dashboard')->name('admin.dashboard');
  });


  // Admin Profile Routes
  Route::get('/changePassword', 'Admin\ProfileController@changePass')->name('admin.changePass');
  Route::post('/profile/updatePassword', 'Admin\ProfileController@updatePassword')->name('admin.updatePassword');
  Route::get('/profile/edit', 'Admin\ProfileController@editProfile')->name('admin.editProfile');
  Route::post('/propic/update', 'Admin\ProfileController@updatePropic')->name('admin.propic.update');
  Route::post('/profile/update', 'Admin\ProfileController@updateProfile')->name('admin.updateProfile');


  Route::group(['middleware' => 'checkpermission:Theme & Home'], function () {
    // Admin Home Version Setting Routes
    Route::get('/home-settings', 'Admin\BasicController@homeSettings')->name('admin.homeSettings');
    Route::post('/homeSettings/post', 'Admin\BasicController@updateHomeSettings')->name('admin.homeSettings.update');
  });


  Route::group(['middleware' => 'checkpermission:Basic Settings'], function () {

    // Admin File Manager Routes
    Route::get('/file-manager', 'Admin\BasicController@fileManager')->name('admin.file-manager');

    // Admin Logo Routes
    Route::get('/logo', 'Admin\BasicController@logo')->name('admin.logo');
    Route::post('/logo/post', 'Admin\BasicController@updatelogo')->name('admin.logo.update');


    // Admin preloader Routes
    Route::get('/preloader', 'Admin\BasicController@preloader')->name('admin.preloader');
    Route::post('/preloader/post', 'Admin\BasicController@updatepreloader')->name('admin.preloader.update');


    // Admin Scripts Routes
    Route::get('/feature/settings', 'Admin\BasicController@featuresettings')->name('admin.featuresettings');
    Route::post('/feature/settings/update', 'Admin\BasicController@updatefeatrue')->name('admin.featuresettings.update');


    // Admin Basic Information Routes
    Route::get('/basicinfo', 'Admin\BasicController@basicinfo')->name('admin.basicinfo');
    Route::post('/basicinfo/{langid}/post', 'Admin\BasicController@updatebasicinfo')->name('admin.basicinfo.update');

    // Admin Email Settings Routes
    Route::get('/mail-from-admin', 'Admin\EmailController@mailFromAdmin')->name('admin.mailFromAdmin');
    Route::post('/mail-from-admin/update', 'Admin\EmailController@updateMailFromAdmin')->name('admin.mailfromadmin.update');
    Route::get('/mail-to-admin', 'Admin\EmailController@mailToAdmin')->name('admin.mailToAdmin');
    Route::post('/mail-to-admin/update', 'Admin\EmailController@updateMailToAdmin')->name('admin.mailtoadmin.update');
    Route::get('/email-templates', 'Admin\EmailController@templates')->name('admin.email.templates');
    Route::get('/email-template/{id}/edit', 'Admin\EmailController@editTemplate')->name('admin.email.editTemplate');
    Route::post('/emailtemplate/{id}/update', 'Admin\EmailController@templateUpdate')->name('admin.email.templateUpdate');

    // Admin Email Settings Routes
    Route::get('/mail-from-admin', 'Admin\EmailController@mailFromAdmin')->name('admin.mailFromAdmin');
    Route::post('/mail-from-admin/update', 'Admin\EmailController@updateMailFromAdmin')->name('admin.mailfromadmin.update');
    Route::get('/mail-to-admin', 'Admin\EmailController@mailToAdmin')->name('admin.mailToAdmin');
    Route::post('/mail-to-admin/update', 'Admin\EmailController@updateMailToAdmin')->name('admin.mailtoadmin.update');


    // Admin Support Routes
    Route::get('/support', 'Admin\BasicController@support')->name('admin.support');
    Route::post('/support/{langid}/post', 'Admin\BasicController@updatesupport')->name('admin.support.update');


    // Admin Page Heading Routes
    Route::get('/heading', 'Admin\BasicController@heading')->name('admin.heading');
    Route::post('/heading/{langid}/update', 'Admin\BasicController@updateheading')->name('admin.heading.update');


    // Admin Scripts Routes
    Route::get('/script', 'Admin\BasicController@script')->name('admin.script');
    Route::post('/script/update', 'Admin\BasicController@updatescript')->name('admin.script.update');

    // Admin Social Routes
    Route::get('/social', 'Admin\SocialController@index')->name('admin.social.index');
    Route::post('/social/store', 'Admin\SocialController@store')->name('admin.social.store');
    Route::get('/social/{id}/edit', 'Admin\SocialController@edit')->name('admin.social.edit');
    Route::post('/social/update', 'Admin\SocialController@update')->name('admin.social.update');
    Route::post('/social/delete', 'Admin\SocialController@delete')->name('admin.social.delete');

    // Admin SEO Information Routes
    Route::get('/seo', 'Admin\BasicController@seo')->name('admin.seo');
    Route::post('/seo/{langid}/update', 'Admin\BasicController@updateseo')->name('admin.seo.update');


    // Admin Maintanance Mode Routes
    Route::get('/maintainance', 'Admin\BasicController@maintainance')->name('admin.maintainance');
    Route::post('/maintainance/update', 'Admin\BasicController@updatemaintainance')->name('admin.maintainance.update');

    // Admin Section Customization Routes
    Route::get('/sections', 'Admin\BasicController@sections')->name('admin.sections.index');
    Route::post('/sections/update', 'Admin\BasicController@updatesections')->name('admin.sections.update');

    // Admin Offer Banner Routes
    Route::get('/announcement', 'Admin\BasicController@announcement')->name('admin.announcement');
    Route::post('/announcement/{langid}/update', 'Admin\BasicController@updateannouncement')->name('admin.announcement.update');


    // Admin Section Customization Routes
    Route::get('/sections', 'Admin\BasicController@sections')->name('admin.sections.index');
    Route::post('/sections/update', 'Admin\BasicController@updatesections')->name('admin.sections.update');


    // Admin Section Customization Routes
    Route::get('/sections', 'Admin\BasicController@sections')->name('admin.sections.index');
    Route::post('/sections/update', 'Admin\BasicController@updatesections')->name('admin.sections.update');

    // Admin Cookie Alert Routes
    Route::get('/cookie-alert', 'Admin\BasicController@cookiealert')->name('admin.cookie.alert');
    Route::post('/cookie-alert/{langid}/update', 'Admin\BasicController@updatecookie')->name('admin.cookie.update');


    // Admin Payment Gateways
    Route::get('/gateways', 'Admin\GatewayController@index')->name('admin.gateway.index');
    Route::post('/stripe/update', 'Admin\GatewayController@stripeUpdate')->name('admin.stripe.update');
    Route::post('/paypal/update', 'Admin\GatewayController@paypalUpdate')->name('admin.paypal.update');
    Route::post('/paystack/update', 'Admin\GatewayController@paystackUpdate')->name('admin.paystack.update');
    Route::post('/paytm/update', 'Admin\GatewayController@paytmUpdate')->name('admin.paytm.update');
    Route::post('/flutterwave/update', 'Admin\GatewayController@flutterwaveUpdate')->name('admin.flutterwave.update');
    Route::post('/instamojo/update', 'Admin\GatewayController@instamojoUpdate')->name('admin.instamojo.update');
    Route::post('/mollie/update', 'Admin\GatewayController@mollieUpdate')->name('admin.mollie.update');
    Route::post('/razorpay/update', 'Admin\GatewayController@razorpayUpdate')->name('admin.razorpay.update');
    Route::post('/mercadopago/update', 'Admin\GatewayController@mercadopagoUpdate')->name('admin.mercadopago.update');
    Route::post('/payumoney/update', 'Admin\GatewayController@payumoneyUpdate')->name('admin.payumoney.update');
    Route::get('/offline/gateways', 'Admin\GatewayController@offline')->name('admin.gateway.offline');
    Route::post('/offline/gateway/store', 'Admin\GatewayController@store')->name('admin.gateway.offline.store');
    Route::post('/offline/gateway/update', 'Admin\GatewayController@update')->name('admin.gateway.offline.update');
    Route::post('/offline/status', 'Admin\GatewayController@status')->name('admin.offline.status');
    Route::post('/offline/gateway/delete', 'Admin\GatewayController@delete')->name('admin.offline.gateway.delete');


    // Admin Language Routes
    Route::get('/languages', 'Admin\LanguageController@index')->name('admin.language.index');
    Route::get('/language/{id}/edit', 'Admin\LanguageController@edit')->name('admin.language.edit');
    Route::get('/language/{id}/edit/keyword', 'Admin\LanguageController@editKeyword')->name('admin.language.editKeyword');
    Route::post('/language/store', 'Admin\LanguageController@store')->name('admin.language.store');
    Route::post('/language/upload', 'Admin\LanguageController@upload')->name('admin.language.upload');
    Route::post('/language/{id}/uploadUpdate', 'Admin\LanguageController@uploadUpdate')->name('admin.language.uploadUpdate');
    Route::post('/language/{id}/default', 'Admin\LanguageController@default')->name('admin.language.default');
    Route::post('/language/{id}/delete', 'Admin\LanguageController@delete')->name('admin.language.delete');
    Route::post('/language/update', 'Admin\LanguageController@update')->name('admin.language.update');
    Route::post('/language/{id}/update/keyword', 'Admin\LanguageController@updateKeyword')->name('admin.language.updateKeyword');


    // Admin Sitemap Routes
    Route::get('/sitemap', 'Admin\SitemapController@index')->name('admin.sitemap.index');
    Route::post('/sitemap/store', 'Admin\SitemapController@store')->name('admin.sitemap.store');
    Route::get('/sitemap/{id}/update', 'Admin\SitemapController@update')->name('admin.sitemap.update');
    Route::post('/sitemap/{id}/delete', 'Admin\SitemapController@delete')->name('admin.sitemap.delete');
    Route::post('/sitemap/download', 'Admin\SitemapController@download')->name('admin.sitemap.download');

    // Admin Database Backup
    Route::get('/backup', 'Admin\BackupController@index')->name('admin.backup.index');
    Route::post('/backup/store', 'Admin\BackupController@store')->name('admin.backup.store');
    Route::post('/backup/{id}/delete', 'Admin\BackupController@delete')->name('admin.backup.delete');
    Route::post('/backup/download', 'Admin\BackupController@download')->name('admin.backup.download');


    // Admin Cache Clear Routes
    Route::get('/cache-clear', 'Admin\CacheController@clear')->name('admin.cache.clear');
  });










    Route::group(['middleware' => 'checkpermission:Pages'], function () {
        // Menu Manager Routes
        // Route::get('/pages', 'Admin\PageController@index')->name('admin.page.index');
        Route::get('/page/settings', 'Admin\PageController@settings')->name('admin.page.settings');
        Route::post('/page/update-settings', 'Admin\PageController@updateSettings')->name('admin.page.updateSettings');
        // Route::get('/page/create', 'Admin\PageController@create')->name('admin.page.create');
        // Route::post('/page/store', 'Admin\PageController@store')->name('admin.page.store');
        // Route::get('/page/{menuID}/edit', 'Admin\PageController@edit')->name('admin.page.edit');
        // Route::post('/page/update', 'Admin\PageController@update')->name('admin.page.update');
        // Route::post('/page/delete', 'Admin\PageController@delete')->name('admin.page.delete');
        Route::post('/page/bulk-delete', 'Admin\PageController@bulkDelete')->name('admin.page.bulk.delete');
        Route::post('/upload/pagebuilder', 'Admin\PageController@uploadPbImage')->name('admin.pb.upload');
        Route::post('/remove/img/pagebuilder', 'Admin\PageController@removePbImage')->name('admin.pb.remove');
        Route::post('/upload/tui/pagebuilder', 'Admin\PageController@uploadPbTui')->name('admin.pb.tui.upload');
    });


    // Page Builder Routes
    Route::get('/pagebuilder/content', 'Admin\PageBuilderController@content')->name('admin.pagebuilder.content');
    Route::post('/pagebuilder/save', 'Admin\PageBuilderController@save')->name('admin.pagebuilder.save');






    //Event Manage Routes
    Route::group(['middleware' => 'checkpermission:Events Management'], function () {
        Route::get('/event/categories', 'Admin\EventCategoryController@index')->name('admin.event.category.index');
        Route::post('/event/category/store', 'Admin\EventCategoryController@store')->name('admin.event.category.store');
        Route::post('/event/category/update', 'Admin\EventCategoryController@update')->name('admin.event.category.update');
        Route::post('/event/category/delete', 'Admin\EventCategoryController@delete')->name('admin.event.category.delete');
        Route::post('/event/categories/bulk-delete', 'Admin\EventCategoryController@bulkDelete')->name('admin.event.category.bulk.delete');


        // Admin Event Routes
        Route::get('/event/settings', 'Admin\EventController@settings')->name('admin.event.setting');
        Route::post('/event/settings', 'Admin\EventController@updateSettings')->name('admin.event.settings');
        Route::get('/events', 'Admin\EventController@index')->name('admin.event.index');
        Route::post('/event/upload', 'Admin\EventController@upload')->name('admin.event.upload');
        Route::post('/event/slider/remove', 'Admin\EventController@sliderRemove')->name('admin.event.slider-remove');
        Route::post('/event/store', 'Admin\EventController@store')->name('admin.event.store');
        Route::get('/event/{id}/edit', 'Admin\EventController@edit')->name('admin.event.edit');
        Route::get('/event/{id}/images', 'Admin\EventController@images')->name('admin.event.images');
        Route::post('/event/update', 'Admin\EventController@update')->name('admin.event.update');
        Route::post('/event/{id}/uploadUpdate', 'Admin\EventController@uploadUpdate')->name('admin.event.uploadUpdate');
        Route::post('/event/delete', 'Admin\EventController@delete')->name('admin.event.delete');
        Route::post('/event/bulk-delete', 'Admin\EventController@bulkDelete')->name('admin.event.bulk.delete');
        Route::get('/event/{lang_id}/get-categories', 'Admin\EventController@getCategories')->name('admin.event.get-categories');
        Route::get('/events/payment-log', 'Admin\EventController@paymentLog')->name('admin.event.payment.log');
        Route::post('/events/payment-log/delete', 'Admin\EventController@paymentLogDelete')->name('admin.event.payment.delete');
        Route::post('/events/payment/bulk-delete', 'Admin\EventController@paymentLogBulkDelete')->name('admin.event.payment.bulk.delete');
        Route::post('/events/payment-log-update', 'Admin\EventController@paymentLogUpdate')->name('admin.event.payment.log.update');
        Route::get('/events/report', 'Admin\EventController@report')->name('admin.event.report');
        Route::get('/events/export', 'Admin\EventController@exportReport')->name('admin.event.export');
    });





  


    Route::group(['middleware' => 'checkpermission:Package Management'], function () {

        // Admin Package Form Builder Routes
        Route::get('/package/settings', 'Admin\PackageController@settings')->name('admin.package.setting');
        Route::post('/package/settings', 'Admin\PackageController@updateSettings')->name('admin.package.settings');

        // Admin Package Category Routes
        Route::get('/package/categories', 'Admin\PackageCategoryController@index')->name('admin.package.categories');
        Route::post('/package/store_category', 'Admin\PackageCategoryController@store')->name('admin.package.store_category');
        Route::post('/package/update_category', 'Admin\PackageCategoryController@update')->name('admin.package.update_category');
        Route::post('/package/delete_category', 'Admin\PackageCategoryController@delete')->name('admin.package.delete_category');
        Route::post('/package/bulk_delete_category', 'Admin\PackageCategoryController@bulkDelete')->name('admin.package.bulk_delete_category');

        Route::get('/package/form', 'Admin\PackageController@form')->name('admin.package.form');
        Route::post('/package/form/store', 'Admin\PackageController@formstore')->name('admin.package.form.store');
        Route::post('/package/inputDelete', 'Admin\PackageController@inputDelete')->name('admin.package.inputDelete');
        Route::get('/package/{id}/inputEdit', 'Admin\PackageController@inputEdit')->name('admin.package.inputEdit');
        Route::get('/package/{id}/options', 'Admin\PackageController@options')->name('admin.package.options');
        Route::post('/package/inputUpdate', 'Admin\PackageController@inputUpdate')->name('admin.package.inputUpdate');
        Route::post('/package/feature', 'Admin\PackageController@feature')->name('admin.package.feature');



        // Admin Packages Routes
        Route::get('/packages', 'Admin\PackageController@index')->name('admin.package.index');
        Route::get('/package/{langId}/get_categories', 'Admin\PackageController@getCategories');
        Route::post('/package/store', 'Admin\PackageController@store')->name('admin.package.store');
        Route::get('/package/{id}/edit', 'Admin\PackageController@edit')->name('admin.package.edit');
        Route::post('/package/update', 'Admin\PackageController@update')->name('admin.package.update');
        Route::post('/package/delete', 'Admin\PackageController@delete')->name('admin.package.delete');
        Route::post('/package/bulk-delete', 'Admin\PackageController@bulkDelete')->name('admin.package.bulk.delete');
        Route::post('/package/payment-status', 'Admin\PackageController@paymentStatus')->name('admin.package.paymentStatus');

        // Admin Package Orders Routes
        Route::get('/all/orders', 'Admin\PackageController@all')->name('admin.all.orders');
        Route::get('/pending/orders', 'Admin\PackageController@pending')->name('admin.pending.orders');
        Route::get('/processing/orders', 'Admin\PackageController@processing')->name('admin.processing.orders');
        Route::get('/completed/orders', 'Admin\PackageController@completed')->name('admin.completed.orders');
        Route::get('/rejected/orders', 'Admin\PackageController@rejected')->name('admin.rejected.orders');
        Route::post('/orders/status', 'Admin\PackageController@status')->name('admin.orders.status');
        Route::post('/orders/mail', 'Admin\PackageController@mail')->name('admin.orders.mail');
        Route::post('/package/order/delete', 'Admin\PackageController@orderDelete')->name('admin.package.order.delete');
        Route::post('/order/bulk-delete', 'Admin\PackageController@bulkOrderDelete')->name('admin.order.bulk.delete');
        Route::get('/package/order/report', 'Admin\PackageController@report')->name('admin.package.report');
        Route::get('/package/order/export', 'Admin\PackageController@exportReport')->name('admin.package.export');

        // Admin Subscription Routes
        Route::get('/subscriptions', 'Admin\SubscriptionController@subscriptions')->name('admin.subscriptions');
        Route::get('/subscription/requests', 'Admin\SubscriptionController@requests')->name('admin.requests.subscriptions');
        Route::post('/subscription/mail', 'Admin\SubscriptionController@mail')->name('admin.subscription.mail');
        Route::post('/package/subscription/delete', 'Admin\SubscriptionController@subDelete')->name('admin.package.subDelete');
        Route::post('/package/subscription/status', 'Admin\SubscriptionController@status')->name('admin.subscription.status');
        Route::post('/sub/bulk-delete', 'Admin\SubscriptionController@bulkSubDelete')->name('admin.sub.bulk.delete');
    });



  });
  Route::get('/career',[FrontendController::class,'career'])->name('front.career');



  // Dynamic Routes

  Route::get('/login', 'User\LoginController@showLoginForm')->name('user.login');

  // Dynamic Routes - Fixed version
  Route::group(['middleware' => ['setlang']], function () {
    try {
        // Routes with details=0 (listing pages)
        $wdPermalinks = Permalink::where('details', 0)->get();
        
        foreach ($wdPermalinks as $pl) {
            $type = $pl->type;
            $permalink = $pl->permalink;
  
            switch ($type) {
                case 'packages':
                    Route::get($permalink, 'Front\FrontendController@packages')->name('front.packages');
                    break;
                    
                case 'services':
                    Route::get($permalink, 'Front\FrontendController@services')->name('front.services');
                    break;
                        
                case 'portfolios':
                    Route::get($permalink, 'Front\FrontendController@portfolios')->name('front.portfolios');
                    break;
                        
                case 'products':
                    Route::get($permalink, 'Front\ProductController@product')->name('front.product');
                    break;
                        
                case 'cart':
                    Route::get($permalink, 'Front\ProductController@cart')->name('front.cart');
                    break;
                        
                case 'product_checkout':
                    Route::get($permalink, 'Front\ProductController@checkout')->name('front.checkout');
                    break;
                        
                case 'team':
                    Route::get($permalink, 'Front\FrontendController@team')->name('front.team');
                    break;
                        
                case 'courses':
                    Route::get($permalink, 'Front\CourseController@courses')->name('courses');
                    break;
                        
                case 'causes':
                    Route::get($permalink, 'Front\FrontendController@causes')->name('front.causes');
                    break;
                        
                case 'events':
                    Route::get($permalink, 'Front\FrontendController@events')->name('front.events');
                    break;
                        
                case 'career':
                    Route::get($permalink, 'Front\FrontendController@career')->name('front.career');
                    break;
                        
                case 'event_calendar':
                    Route::get($permalink, 'Front\FrontendController@calendar')->name('front.calendar');
                    break;
                        
                case 'knowledgebase':
                    Route::get($permalink, 'Front\FrontendController@knowledgebase')->name('front.knowledgebase');
                    break;
                        
                case 'gallery':
                    Route::get($permalink, 'Front\FrontendController@gallery')->name('front.gallery');
                    break;
                        
                case 'faq':
                    Route::get($permalink, 'Front\FrontendController@faq')->name('front.faq');
                    break;
                        
                case 'blogs':
                    Route::get($permalink, 'Front\FrontendController@blogs')->name('front.blogs');
                    break;
                        
                case 'rss':
                    Route::get($permalink, 'Front\FrontendController@rss')->name('front.rss');
                    break;
                        
                case 'contact':
                    Route::get($permalink, 'Front\FrontendController@contact')->name('front.contact');
                    break;
                        
                case 'quote':
                    Route::get($permalink, 'Front\FrontendController@quote')->name('front.quote');
                    break;
                        
                case 'login':
                    Route::get($permalink, 'User\LoginController@showLoginForm')->name('user.login');
                    break;
                        
                case 'register':
                    Route::get($permalink, 'User\RegisterController@registerPage')->name('user-register');
                    break;
                        
                case 'forget_password':
                    Route::get($permalink, 'User\ForgotController@showforgotform')->name('user-forgot');
                    break;
                        
                case 'admin_login':
                    Route::get($permalink, 'Admin\LoginController@login')
                        ->name('admin.login')
                        ->middleware('guest:admin');
                    break;
            }
        }
    } catch (\Exception $e) {
        \Log::error("Dynamic route registration failed: " . $e->getMessage());
    }
  });


// Dynamic Page Routes
Route::group(['middleware' => 'setlang'], function () {
  Route::get('/{slug}', 'Front\FrontendController@dynamicPage')->name('front.dynamicPage');
});

Route::post('/chanakya-form', [ChanakyaFormController::class, 'store'])->name('chanakya.store');

Route::post('/become-a-sponsor', [SponsorFormController::class, 'store'])->name("sponsor");
Route::post('/course-enroll', [CourseController::class, 'store'])->name('Course');
Route::post('/job-application', [JobApplicationController::class, 'store'])->name('job.apply');      