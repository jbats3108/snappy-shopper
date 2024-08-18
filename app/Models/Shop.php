<?php

declare(strict_types=1);

namespace App\Models;

use Database\Factories\ShopFactory;
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
 * @property ?float $distance
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static ShopFactory factory($count = null, $state = [])
 * @method static Builder|Shop newModelQuery()
 * @method static Builder|Shop newQuery()
 * @method static Builder|Shop query()
 * @method static Builder|Shop whereCreatedAt($value)
 * @method static Builder|Shop whereId($value)
 * @method static Builder|Shop whereLatitude($value)
 * @method static Builder|Shop whereLongitude($value)
 * @method static Builder|Shop whereMaxDeliveryDistance($value)
 * @method static Builder|Shop whereName($value)
 * @method static Builder|Shop whereOpen($value)
 * @method static Builder|Shop whereSlug($value)
 * @method static Builder|Shop whereUpdatedAt($value)
 * @method Builder distanceFrom(Postcode $postcode)
 * @method Builder withinDistanceFromPostcode(Postcode $postcode, float $distance)
 * @method Builder canDeliverToPostcode(Postcode $postcode)
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

    public function scopeCanDeliverToPostcode(Builder $query, Postcode $postcode): Builder
    {
        return self::distanceFrom($postcode)->havingRaw('distance <= `max_delivery_distance`');
    }

    public function scopeWithinDistanceFromPostcode(Builder $query, Postcode $postcode, float $distance): Builder
    {
        return self::distanceFrom($postcode)->having('distance', '<=', $distance);
    }

    public function scopeDistanceFrom(Builder $query, Postcode $to): Builder
    {
        return $query->select(self::distanceSelect($to));
    }

    private static function distanceSelect(Postcode $from): Expression
    {
        return DB::raw(
            "*,( 6371 * acos( cos( radians($from->latitude) )
            * cos( radians( latitude ) ) * cos( radians( longitude )
            - radians($from->longitude) ) + sin( radians($from->latitude) )
            * sin( radians( latitude ) ) ) ) AS distance"
        );
    }
}

