<?php

namespace Database\Seeders;

use App\Models\Shop;
use Illuminate\Database\Seeder;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $coordinates = [
            [
                'latitude' => 53.957121,
                'longitude' => -1.111519
            ],
            [
                'latitude' => 52.603732,
                'longitude' => -2.160488
            ],
            [
                'latitude' => 52.649059,
                'longitude' => -2.015787
            ],
            [
                'latitude' => 52.207203,
                'longitude' => -2.175721
            ],
            [
                'latitude' => 53.50456,
                'longitude' => -2.612352
            ],
            [
                'latitude' => 53.704398,
                'longitude' => -1.664008
            ],
            [
                'latitude' => 51.636075,
                'longitude' => -0.353715
            ],
            [
                'latitude' => 53.390012,
                'longitude' => -2.644207
            ],
            [
                'latitude' => 53.459826,
                'longitude' => -2.740616
            ],
            [
                'latitude' => 51.51034,
                'longitude' => -0.155172
            ],
            [
                'latitude' => 51.53229,
                'longitude' => -0.364858
            ],
            [
                'latitude' => 51.396873,
                'longitude' => -0.44674
            ],
            [
                'latitude' => 54.687415,
                'longitude' => -1.226368
            ],
            [
                'latitude' => 54.605247,
                'longitude' => -1.051874
            ],
            [
                'latitude' => 50.188142,
                'longitude' => -5.080977
            ],
            [
                'latitude' => 50.481327,
                'longitude' => -3.782074
            ],
            [
                'latitude' => 51.022647,
                'longitude' => 0.936494
            ],
            [
                'latitude' => 51.13924,
                'longitude' => 0.425741
            ],
            [
                'latitude' => 55.598841,
                'longitude' => -2.434274
            ],
            [
                'latitude' => 51.030923,
                'longitude' => -3.102951
            ],
            [
                'latitude' => 52.65341,
                'longitude' => -3.179369
            ],
            [
                'latitude' => 51.487,
                'longitude' => -0.199
            ],
            [
                'latitude' => 51.4163,
                'longitude' => -0.138913
            ],
            [
                'latitude' => 53.013787,
                'longitude' => -2.235863
            ],
            [
                'latitude' => 52.976725,
                'longitude' => -1.989564
            ],
            [
                'latitude' => 51.585339,
                'longitude' => 0.517225
            ],
            [
                'latitude' => 50.913,
                'longitude' => -1.852
            ],
            [
                'latitude' => 50.827728,
                'longitude' => -1.34772
            ],
            [
                'latitude' => 50.943982,
                'longitude' => -1.437434
            ],
            [
                'latitude' => 51.505453,
                'longitude' => -2.074397
            ],
            [
                'latitude' => 51.497864,
                'longitude' => -0.532544
            ],
            [
                'latitude' => 53.318766,
                'longitude' => -2.243457
            ],
            [
                'latitude' => 53.449098,
                'longitude' => -2.000187
            ],
            [
                'latitude' => 51.890106,
                'longitude' => -0.194288
            ],
            [
                'latitude' => 51.510215,
                'longitude' => 0.116851
            ],
            [
                'latitude' => 51.463388,
                'longitude' => 0.000572
            ],
            [
                'latitude' => 51.644236,
                'longitude' => -3.992458
            ],
            [
                'latitude' => 51.679828,
                'longitude' => -4.16012
            ],
            [
                'latitude' => 53.559389,
                'longitude' => -1.488424
            ],
            [
                'latitude' => 53.422752,
                'longitude' => -1.340954
            ],
            [
                'latitude' => 53.344394,
                'longitude' => -1.222464
            ],
            [
                'latitude' => 51.581037,
                'longitude' => 0.200755
            ],
            [
                'latitude' => 51.124774,
                'longitude' => -0.00719
            ],
            [
                'latitude' => 51.506484,
                'longitude' => -0.895476
            ],
            [
                'latitude' => 51.328568,
                'longitude' => -1.069434
            ],
            [
                'latitude' => 51.455376,
                'longitude' => -0.951632
            ],
            [
                'latitude' => 53.774372,
                'longitude' => -2.723642
            ],
            [
                'latitude' => 50.730388,
                'longitude' => -1.171633
            ],
            [
                'latitude' => 50.856381,
                'longitude' => -1.197989
            ],
            [
                'latitude' => 50.389232,
                'longitude' => -4.106243
            ],
            [
                'latitude' => 50.365047,
                'longitude' => -4.149438
            ],
            [
                'latitude' => 52.602978,
                'longitude' => 0.373415
            ],
            [
                'latitude' => 52.990677,
                'longitude' => 0.079708
            ],
            [
                'latitude' => 52.572177,
                'longitude' => -0.246849
            ],
            [
                'latitude' => 51.917378,
                'longitude' => -1.455351
            ],
            [
                'latitude' => 52.063505,
                'longitude' => -1.332753
            ],
            [
                'latitude' => 53.543176,
                'longitude' => -2.071128
            ],
            [
                'latitude' => 51.531509,
                'longitude' => -0.17009
            ],
            [
                'latitude' => 51.52771,
                'longitude' => -0.140616
            ],
            [
                'latitude' => 52.712328,
                'longitude' => 1.534833
            ],
            [
                'latitude' => 52.895293,
                'longitude' => 1.391265
            ],
            [
                'latitude' => 51.598047,
                'longitude' => -2.979235
            ],
            [
                'latitude' => 52.26835,
                'longitude' => -0.859644
            ],
            [
                'latitude' => 52.914148,
                'longitude' => -1.234205
            ],
            [
                'latitude' => 52.97,
                'longitude' => -1.143
            ],
            [
                'latitude' => 53.022906,
                'longitude' => -1.32871
            ],
            [
                'latitude' => 55.328365,
                'longitude' => -1.572191
            ],
            [
                'latitude' => 54.907487,
                'longitude' => -1.53164
            ],
            [
                'latitude' => 55.14124,
                'longitude' => -1.56681
            ],
            [
                'latitude' => 51.564732,
                'longitude' => -0.118618
            ],
            [
                'latitude' => 51.533075,
                'longitude' => -0.105581
            ],
            [
                'latitude' => 55.783837,
                'longitude' => -3.982602
            ],
            [
                'latitude' => 52.089671,
                'longitude' => -0.80296
            ],
            [
                'latitude' => 51.307578,
                'longitude' => 0.435068
            ],
            [
                'latitude' => 53.513654,
                'longitude' => -2.216254
            ],
            [
                'latitude' => 53.429642,
                'longitude' => -2.309273
            ],
            [
                'latitude' => 53.390869,
                'longitude' => -2.270303
            ],
            [
                'latitude' => 51.878784,
                'longitude' => -0.594879
            ],
            [
                'latitude' => 53.74971,
                'longitude' => -1.602686
            ],
            [
                'latitude' => 53.805949,
                'longitude' => -1.628682
            ],
            [
                'latitude' => 53.331907,
                'longitude' => 0.26902
            ],
            [
                'latitude' => 53.253523,
                'longitude' => -3.980165
            ],
            [
                'latitude' => 53.089904,
                'longitude' => -2.9923
            ],
            [
                'latitude' => 52.604548,
                'longitude' => -1.182735
            ],
            [
                'latitude' => 52.526386,
                'longitude' => -1.364116
            ],
            [
                'latitude' => 54.148674,
                'longitude' => -3.184188
            ],
            [
                'latitude' => 53.410079,
                'longitude' => -2.823425
            ],
            [
                'latitude' => 53.402154,
                'longitude' => -2.86853
            ],
            [
                'latitude' => 56.071314,
                'longitude' => -3.438846
            ],
            [
                'latitude' => 51.290375,
                'longitude' => -0.2437
            ],
            [
                'latitude' => 55.521295,
                'longitude' => -4.387073
            ],
            [
                'latitude' => 57.591005,
                'longitude' => -3.652622
            ],
            [
                'latitude' => 52.254299,
                'longitude' => 0.865502
            ],
            [
                'latitude' => 52.185977,
                'longitude' => 0.95523
            ],
            [
                'latitude' => 51.55971,
                'longitude' => 0.075679
            ],
            [
                'latitude' => 53.743002,
                'longitude' => -0.374294
            ],
            [
                'latitude' => 52.075463,
                'longitude' => -3.124458
            ],
            [
                'latitude' => 51.817434,
                'longitude' => -0.841697
            ],
            [
                'latitude' => 53.576697,
                'longitude' => -1.777232
            ],
            [
                'latitude' => 51.579831,
                'longitude' => -0.392797
            ],
            [
                'latitude' => 51.26314,
                'longitude' => -0.549993
            ],
            [
                'latitude' => 51.331651,
                'longitude' => -0.763762
            ],
            [
                'latitude' => 51.967972,
                'longitude' => -2.038672
            ],
            [
                'latitude' => 51.833257,
                'longitude' => -2.612068
            ],
            [
                'latitude' => 55.780078,
                'longitude' => -4.14695
            ],
            [
                'latitude' => 55.847246,
                'longitude' => -4.338328
            ],
            [
                'latitude' => 55.859028,
                'longitude' => -4.262938
            ],
            [
                'latitude' => 53.820491,
                'longitude' => -3.046322
            ],
            [
                'latitude' => 50.82471,
                'longitude' => -3.421387
            ],
            [
                'latitude' => 50.714864,
                'longitude' => -3.479523
            ],
            [
                'latitude' => 51.703208,
                'longitude' => -0.145413
            ],
            [
                'latitude' => 55.934066,
                'longitude' => -3.451811
            ],
            [
                'latitude' => 55.91097,
                'longitude' => -3.105067
            ],
            [
                'latitude' => 51.52196,
                'longitude' => -0.108359
            ],
            [
                'latitude' => 51.494682,
                'longitude' => -0.018354
            ],
            [
                'latitude' => 52.543752,
                'longitude' => -2.122904
            ],
            [
                'latitude' => 50.837,
                'longitude' => -2.629
            ],
            [
                'latitude' => 53.530054,
                'longitude' => -0.100982
            ],
            [
                'latitude' => 53.706339,
                'longitude' => -1.14829
            ],
            [
                'latitude' => 54.642061,
                'longitude' => -1.688836
            ],
            [
                'latitude' => 54.817056,
                'longitude' => -1.452123
            ],
            [
                'latitude' => 53.016701,
                'longitude' => -1.365789
            ],
            [
                'latitude' => 52.926483,
                'longitude' => -1.497415
            ],
            [
                'latitude' => 56.475702,
                'longitude' => -2.9928
            ],
            [
                'latitude' => 51.442602,
                'longitude' => 0.369874
            ],
            [
                'latitude' => 53.104202,
                'longitude' => -2.466304
            ],
            [
                'latitude' => 52.291515,
                'longitude' => -1.535345
            ],
            [
                'latitude' => 51.355549,
                'longitude' => 1.248759
            ],
            [
                'latitude' => 51.33684,
                'longitude' => 1.310993
            ],
            [
                'latitude' => 51.945913,
                'longitude' => 0.627273
            ],
            [
                'latitude' => 52.056172,
                'longitude' => 0.549305
            ],
            [
                'latitude' => 51.778105,
                'longitude' => 0.126873
            ],
            [
                'latitude' => 53.281818,
                'longitude' => -2.946661
            ],
            [
                'latitude' => 53.40931,
                'longitude' => -3.078746
            ],
            [
                'latitude' => 51.389689,
                'longitude' => -3.281336
            ],
            [
                'latitude' => 51.453567,
                'longitude' => -3.617435
            ],
            [
                'latitude' => 52.420892,
                'longitude' => 0.120439
            ],
            [
                'latitude' => 54.530565,
                'longitude' => -3.594087
            ],
            [
                'latitude' => 51.478945,
                'longitude' => -2.596267
            ],
            [
                'latitude' => 51.448194,
                'longitude' => -2.485106
            ],
            [
                'latitude' => 51.407682,
                'longitude' => -2.604037
            ],
            [
                'latitude' => 50.93793,
                'longitude' => -0.022005
            ],
            [
                'latitude' => 50.805164,
                'longitude' => -0.041499
            ],
            [
                'latitude' => 53.600682,
                'longitude' => -2.279877
            ],
            [
                'latitude' => 51.818,
                'longitude' => -0.374
            ],
            [
                'latitude' => 57.6465,
                'longitude' => -1.981659
            ],
            [
                'latitude' => 53.66872,
                'longitude' => -2.310418
            ],
            [
                'latitude' => 50.747941,
                'longitude' => -1.988949
            ],
            [
                'latitude' => 53.963582,
                'longitude' => -2.09803
            ],
            [
                'latitude' => 53.795026,
                'longitude' => -1.753246
            ],
            [
                'latitude' => 53.775158,
                'longitude' => -2.239417
            ],
            [
                'latitude' => 51.322408,
                'longitude' => -2.204674
            ],
            [
                'latitude' => 52.40621,
                'longitude' => -1.823253
            ],
            [
                'latitude' => 52.499951,
                'longitude' => -1.971438
            ],
            [
                'latitude' => 52.521067,
                'longitude' => -1.795587
            ],
            [
                'latitude' => 52.477676,
                'longitude' => -1.91649
            ],
            [
                'latitude' => 54.559698,
                'longitude' => -7.450458
            ],
            [
                'latitude' => 54.527078,
                'longitude' => -6.079011
            ],
            [
                'latitude' => 54.912142,
                'longitude' => -7.163477
            ],
            [
                'latitude' => 54.592115,
                'longitude' => -7.321006
            ],
            [
                'latitude' => 52.486643,
                'longitude' => -1.916296
            ],
            [
                'latitude' => 51.378069,
                'longitude' => -0.113291
            ],
            [
                'latitude' => 53.37116,
                'longitude' => -2.595271
            ],
            [
                'latitude' => 52.631,
                'longitude' => -1.136
            ],
            [
                'latitude' => 51.60644,
                'longitude' => -1.113094
            ],
            [
                'latitude' => 51.496619,
                'longitude' => -2.564173
            ],
            [
                'latitude' => 52.14429,
                'longitude' => 1.444827
            ],
            [
                'latitude' => 52.590531,
                'longitude' => -2.213531
            ],
            [
                'latitude' => 53.025,
                'longitude' => -2.091
            ],
            [
                'latitude' => 50.839643,
                'longitude' => -1.781914
            ],
            [
                'latitude' => 50.979481,
                'longitude' => -3.207526
            ],
            [
                'latitude' => 52.253174,
                'longitude' => -1.395147
            ],
            [
                'latitude' => 50.729493,
                'longitude' => -2.086413
            ],
            [
                'latitude' => 52.128591,
                'longitude' => -0.288529
            ],
            [
                'latitude' => 52.935103,
                'longitude' => -1.50548
            ],
            [
                'latitude' => 55.12755,
                'longitude' => -1.506877
            ],
            [
                'latitude' => 50.192833,
                'longitude' => -5.308355
            ]
        ];

        foreach ($coordinates as $coordinatePair) {
            Shop::factory()->create($coordinatePair);
        }
    }
}
