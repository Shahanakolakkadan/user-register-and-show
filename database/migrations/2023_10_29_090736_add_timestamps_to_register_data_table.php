<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTimestampsToRegisterDataTable extends Migration {
    public function up() {
        Schema::table('register_data', function (Blueprint $table) {
            $table->timestamps(); // This will create created_at and updated_at columns
        });
    }

    public function down() {
        Schema::table('register_data', function (Blueprint $table) {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
}
?>
