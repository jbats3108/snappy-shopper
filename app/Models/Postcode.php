<?php
declare(strict_types=1);

namespace App\Models;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Database\Factories\PostcodeFactory;
use Illuminate\Database\Eloquent\Builder;
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

    public function getRouteKeyName(): string
    {
        return 'postcode';
    }
}
