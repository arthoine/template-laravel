<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Settings
 *
 * @property int $id
 * @property mixed|null $site_logo
 * @property string|null $scripts_head
 * @property string|null $scripts_body
 * @property string|null $google_verification
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Settings newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Settings newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Settings query()
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereGoogleVerification($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereScriptsBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereScriptsHead($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereSiteLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereUpdatedAt($value)
 * @method static \Database\Factories\SettingsFactory factory($count = null, $state = [])
 *
 * @mixin \Eloquent
 */
class Settings extends Model
{
    use HasFactory;

    protected $table = 'site_settings';

    protected $guarded = ['id'];
}
