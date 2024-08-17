<?php

namespace App\Models;

use DB;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Expression;
use Illuminate\Support\Carbon;

/**
 *
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property float $latitude
 * @property float $longitude
 * @property int $open
 * @property float $max_delivery_distance
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static \Database\Factories\ShopFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Shop newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Shop newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Shop query()
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereLatitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereLongitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereMaxDeliveryDistance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereOpen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereUpdatedAt($value)
 * @method Builder distanceFrom()
 * @mixin Eloquent
 */
class Shop extends Model
{
    use HasFactory;

    protected $fillable =
        [
            'name',
            'latitude',
            'longitude',
            'open',
            'type',
            'max_delivery_distance'
        ];

    public function scopeDistanceFrom(Builder $query, Postcode $to): Builder
    {
        return $query->select(self::getDistanceQuery($to));
    }

    private static function getDistanceQuery(Postcode $from): Expression
    {
        return DB::raw(
            "*, ( 6371 * acos( cos( radians($from->latitude) )
            * cos( radians( latitude ) ) * cos( radians( longitude )
            - radians($from->longitude) ) + sin( radians($from->latitude) )
            * sin( radians( latitude ) ) ) ) AS distance"
        );
    }
}

