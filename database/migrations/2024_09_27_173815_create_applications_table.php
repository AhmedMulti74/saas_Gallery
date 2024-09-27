<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id(); // إنشاء حقل id
            $table->string('name'); // حقل الاسم
            $table->text('description'); // حقل الوصف
            $table->boolean('is_featured')->default(false); // حقل لتحديد ما إذا كان التطبيق مميزًا
            $table->timestamps(); // حقل timestamps (created_at و updated_at)
        });
    }

    public function down()
    {
        Schema::dropIfExists('applications'); // حذف الجدول عند التراجع
    }
}
