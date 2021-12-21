<?php

namespace Exit11\SocialLogin\Models;

use Illuminate\Database\Eloquent\Model;
use Mpcs\Core\Facades\Core;
use Mpcs\Core\Traits\ModelTrait;

class SocialLogin extends Model
{
    use ModelTrait;

    protected $table = 'social_logins';
    protected $guarded = ['id'];
    protected $hidden = ['social_id'];
    protected $dates = ['created_at', 'updated_at'];
    protected static $m_params = [
        'default_load_relations' => ['visitor'],
        'view_load_relations' => [],
    ];

    // $sortable 정의시 정렬기능을 제공할 필드는 필수 기입
    public $sortable = [];

    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:i',
        'updated_at' => 'datetime:Y-m-d H:i',
    ];


    /**
     * visitor
     *
     * @return void
     */
    public function visitor()
    {
        return $this->belongsTo(Visitor::class);
    }

    /**
     * boot
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();
        //static::setMemberParams(self::$m_params);
    }
}
