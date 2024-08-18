<?php

declare(strict_types=1);

namespace App\Models;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Database\Factories\PostcodeFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Spatie\LaravelData\Casts\Cast;
use Spatie\LaravelData\Casts\Castable;
use Spatie\LaravelData\Support\Creation\CreationContext;
use Spatie\LaravelData\Support\DataProperty;

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
 * @method static PostcodeFactory factory($count = null, $state = [])
 * @method static Builder|Postcode newModelQuery()
 * @method static Builder|Postcode newQuery()
 * @method static Builder|Postcode query()
 * @method static Builder|Postcode whereCreatedAt($value)
 * @method static Builder|Postcode whereId($value)
 * @method static Builder|Postcode whereIncode($value)
 * @method static Builder|Postcode whereLatitude($value)
 * @method static Builder|Postcode whereLongitude($value)
 * @method static Builder|Postcode whereOutcode($value)
 * @method static Builder|Postcode wherePostcode($value)
 * @method static Builder|Postcode whereUpdatedAt($value)
 * @mixin Eloquent
 */
class Postcode extends Model implements Castable
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

    public function getRouteKeyName(): string
    {
        return 'postcode';
    }


    public static function dataCastUsing(array ...$arguments): Cast
    {
        return new class implements Cast {
            public function cast(
                DataProperty $property,
                mixed $value,
                array $properties,
                CreationContext $context
            ): Postcode {
                return Postcode::where('postcode', $value)->firstOrFail();
            }
        };
    }
}
