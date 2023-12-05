<?php

use App\Models\setting;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('key');
            $table->string('label');
            $table->string('value')->nullable();
            $table->string('type');
            $table->timestamps();
        });

        setting::create([
            'key' => '_site_name',
            'label' => 'Judul Situs',
            'value' => 'Tasty Food',
            'type' => 'text'
        ]);

        setting::create([
            'key' => '_location',
            'label' => 'Alamat',
            'value' => 'Kota Bandung, Jawa Barat',
            'type' => 'text'
        ]);

        setting::create([
            'key' => '_facebook',
            'label' => 'Facebook',
            'value' => 'https://web.facebook.com/',
            'type' => 'text'
        ]);

        setting::create([
            'key' => '_twitter',
            'label' => 'Twitter',
            'value' => 'https://twitter.com/',
            'type' => 'text'
        ]);

        setting::create([
            'key' => '_site_description',
            'label' => 'Site Description',
            'value' => 'Tasty Food, sebuah website yang menyediakan berita tentang kuliner',
            'type' => 'text'
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
