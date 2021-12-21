<?php

namespace Exit11\SocialLogin\Models;

use Illuminate\Database\Eloquent\Model;
use Mpcs\Core\Facades\Core;
use Mpcs\Core\Traits\ModelTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

class Visitor extends Model
{
    use SoftDeletes, ModelTrait;

    protected $table = 'visitors';
    protected $guarded = ['id'];
    protected $hidden = ['password', 'remember_token', 'uuid'];
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
    protected static $m_params = [
        'default_load_relations' => ['socialLogins'],
        'view_load_relations' => [],
        'column_maps' => [
            // json_key : {컬렁명}->{데이터 키}
            'last_login_ip' => 'last_login->ip',
            'last_login_date' => 'last_login->date',
            'last_login_agent' => 'last_login->agent',
        ],
    ];
    // $sortable 정의시 정렬기능을 제공할 필드는 필수 기입
    public $sortable = ['id', 'email', 'name'];

    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:i',
        'updated_at' => 'datetime:Y-m-d H:i',
        'deleted_at' => 'datetime:Y-m-d H:i',
    ];


    /**
     * socialLogins
     *
     * @return void
     */
    public function socialLogins()
    {
        return $this->hasMany(SocialLogin::class, 'visitor_id');
    }

    /**
     * uuidToId
     *
     * @param  mixed $uuid
     * @return void
     */
    public static function uuidToId($uuid)
    {
        $model = static::where('uuid', $uuid)->first();
        return $model->id;
    }

    /**
     * getLastLoginAttribute
     *
     * @return void
     */
    public function getLastLoginAttribute($value)
    {
        return json_decode($value, true);
    }

    /**
     * getLastLoginIpAttribute
     *
     * @return void
     */
    public function getLastLoginIpAttribute()
    {
        return $this->last_login['ip'] ?? null;
    }

    /**
     * getLastLoginDateAttribute
     *
     * @return void
     */
    public function getLastLoginDateAttribute()
    {
        if ($this->last_login && $this->last_login['date']) {
            return date('Y-m-d h:i:s', strtotime($this->last_login['date']));
        }

        return null;
    }

    /**
     * boot
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();
        static::setMemberParams(self::$m_params);
    }
}
