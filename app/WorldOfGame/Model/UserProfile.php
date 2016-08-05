<?php

namespace App\WorldOfGame\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $user_id
 * @property integer $mail_agg_id
 * @property string $description
 * @property string $status
 * @property string $photo
 * @property integer $mail_hour
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property WogUsers $wogUsers
 * @property WogMailAggs $wogMailAggs
 */
class UserProfile extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'wog_user_profiles';

    /**
     * @var array
     */
    protected $fillable = ['user_id', 'mail_agg_id', 'description', 'status', 'photo', 'mail_hour', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function wogUsers()
    {
        return $this->belongsTo('WogUsers', 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function wogMailAggs()
    {
        return $this->belongsTo('WogMailAggs', 'mail_agg_id');
    }
}
