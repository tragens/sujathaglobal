<?php

namespace App\Models;

use CodeIgniter\Model;

class SliderModel extends Model
{
    protected $table = 'tb_slider';
    protected $allowedFields = [
        'id','header', 'content', 'sliderimage', 'link', 'status'
    ];
}
