<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PpdbSetting extends Model
{
    protected $table = 'ppdb_settings';

    protected $fillable = [
        'title',
        'publish_date',
        'poster',
        'alur',
        'syarat',
        'jadwal',
        'jalur',
        'faq',
        'link_resmi',

        'section_badge',
        'section_title',
        'section_description',
        'section_jalur_afirmasi',
        'section_jalur_pindah',
        'section_jalur_prestasi',
        'section_jalur_zonasi',
        'button_panduan_text',
        'button_panduan_link',
        'button_wa_text',
        'button_wa_link',
        'slider_1',
        'slider_2',
        'slider_3',
    ];

    protected $casts = [
        'publish_date' => 'date',
    ];
}
