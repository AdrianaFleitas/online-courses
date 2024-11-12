<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property string $email
 * @property string $token
 * @property string $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PasswordReset newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PasswordReset newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PasswordReset query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PasswordReset whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PasswordReset whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PasswordReset whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PasswordReset whereToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PasswordReset whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PasswordReset whereUserId($value)
 * @mixin \Eloquent
 */
class PasswordReset extends Model
{
    use HasFactory;
}
