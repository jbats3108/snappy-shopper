<?php

namespace App\Models;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 *
 *
 * @property int $id
 * @property string $postcode
 * @property string $outcode
 * @property string $incode
 * @property string $longitude
 * @property string $latitude
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static \Database\Factories\PostcodeFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Postcode newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Postcode newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Postcode query()
 * @method static \Illuminate\Database\Eloquent\Builder|Postcode whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Postcode whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Postcode whereIncode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Postcode whereLatitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Postcode whereLongitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Postcode whereOutcode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Postcode wherePostcode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Postcode whereUpdatedAt($value)
 * @mixin Eloquent
 */
class Postcode extends Model
{
    use HasFactory;

    protected $fillable =
        [
            'postcode',
            'outcode',
            'incode',
            'longitude',
            'latitude'
        ];
}
