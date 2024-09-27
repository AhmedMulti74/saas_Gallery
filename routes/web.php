<?php

// routes/web.php

use App\Http\Controllers\ApplicationsController;
use App\Models\Application; // تأكد من استيراد النموذج

// تعريف المسار لعرض تفاصيل التطبيق
Route::get('/applications/{id}', [ApplicationsController::class, 'show'])->name('applications.show');

// يمكنك أيضًا تعريف مسار الصفحة الرئيسية إذا لم يكن موجودًا بالفعل
Route::get('/', function () {
    $featuredApplications = Application::where('is_featured', true)->get();
    $applications = Application::all(); // لاسترجاع جميع التطبيقات

    return view('home', [
        'featuredApplications' => $featuredApplications,
        'applications' => $applications,
    ]);
});
