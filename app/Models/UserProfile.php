<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property int $user_id
 * @property string|null $company
 * @property string|null $job
 * @property string|null $country
 * @property string|null $address
 * @property int|null $phone
 * @property string|null $Facebook
 * @property string|null $Twitter
 * @property string|null $LinkedIn
 * @property string|null $Instagram
 * @property string|null $about
 * @property string|null $image
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserProfile newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserProfile newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserProfile query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserProfile whereAbout($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserProfile whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserProfile whereCompany($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserProfile whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserProfile whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserProfile whereFacebook($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserProfile whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserProfile whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserProfile whereInstagram($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserProfile whereJob($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserProfile whereLinkedIn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserProfile wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserProfile whereTwitter($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserProfile whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserProfile whereUserId($value)
 * @mixin \Eloquent
 */
class UserProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'company',
        'job',
        'country',
        'address',
        'phone',
        'Facebook',
        'Twitter',
        'LinkedIn',
        'Instagram',
    ];
}
