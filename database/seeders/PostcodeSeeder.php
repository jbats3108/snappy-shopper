<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PostcodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $postcodesToSeed = [
            [
                "postcode" => "YO25 9YE",
                "latitude" => 54.018193,
                "longitude" => -0.577378,
                "outcode" => "YO25",
                "incode" => "9YE"
            ],
            [
                "postcode" => "WV7 3LN",
                "latitude" => 52.632486,
                "longitude" => -2.286597,
                "outcode" => "WV7",
                "incode" => "3LN"
            ],
            [
                "postcode" => "WS6 6NQ",
                "latitude" => 52.664207,
                "longitude" => -2.012052,
                "outcode" => "WS6",
                "incode" => "6NQ"
            ],
            [
                "postcode" => "WR5 1QF",
                "latitude" => 52.18689,
                "longitude" => -2.194919,
                "outcode" => "WR5",
                "incode" => "1QF"
            ],
            [
                "postcode" => "WN3 4TQ",
                "latitude" => 53.528247,
                "longitude" => -2.611834,
                "outcode" => "WN3",
                "incode" => "4TQ"
            ],
            [
                "postcode" => "WF17 5AY",
                "latitude" => 53.708977,
                "longitude" => -1.631581,
                "outcode" => "WF17",
                "incode" => "5AY"
            ],
            [
                "postcode" => "WD24 4PD",
                "latitude" => 51.665577,
                "longitude" => -0.390024,
                "outcode" => "WD24",
                "incode" => "4PD"
            ],
            [
                "postcode" => "WA5 8DG",
                "latitude" => 53.39907,
                "longitude" => -2.633425,
                "outcode" => "WA5",
                "incode" => "8DG"
            ],
            [
                "postcode" => "WA10 6QY",
                "latitude" => 53.4694,
                "longitude" => -2.773758,
                "outcode" => "WA10",
                "incode" => "6QY"
            ],
            [
                "postcode" => "W1T 5HY",
                "latitude" => 51.523388,
                "longitude" => -0.139221,
                "outcode" => "W1T",
                "incode" => "5HY"
            ],
            [
                "postcode" => "UB8 2BG",
                "latitude" => 51.541317,
                "longitude" => -0.476364,
                "outcode" => "UB8",
                "incode" => "2BG"
            ],
            [
                "postcode" => "TW2 6AR",
                "latitude" => 51.444603,
                "longitude" => -0.375618,
                "outcode" => "TW2",
                "incode" => "6AR"
            ],
            [
                "postcode" => "TS3 7AS",
                "latitude" => 54.562309,
                "longitude" => -1.20571,
                "outcode" => "TS3",
                "incode" => "7AS"
            ],
            [
                "postcode" => "TS12 2XL",
                "latitude" => 54.566624,
                "longitude" => -0.926423,
                "outcode" => "TS12",
                "incode" => "2XL"
            ],
            [
                "postcode" => "TR14 7HQ",
                "latitude" => 50.216586,
                "longitude" => -5.305967,
                "outcode" => "TR14",
                "incode" => "7HQ"
            ],
            [
                "postcode" => "TQ13 7EU",
                "latitude" => 50.533838,
                "longitude" => -3.72075,
                "outcode" => "TQ13",
                "incode" => "7EU"
            ],
            [
                "postcode" => "TN31 7BW",
                "latitude" => 50.953252,
                "longitude" => 0.720523,
                "outcode" => "TN31",
                "incode" => "7BW"
            ],
            [
                "postcode" => "TN15 6TA",
                "latitude" => 51.308355,
                "longitude" => 0.229006,
                "outcode" => "TN15",
                "incode" => "6TA"
            ],
            [
                "postcode" => "TF1 1QA",
                "latitude" => 52.699372,
                "longitude" => -2.522158,
                "outcode" => "TF1",
                "incode" => "1QA"
            ],
            [
                "postcode" => "TA23 0SH",
                "latitude" => 51.129306,
                "longitude" => -3.452886,
                "outcode" => "TA23",
                "incode" => "0SH"
            ],
            [
                "postcode" => "SY25 6DS",
                "latitude" => 52.341228,
                "longitude" => -3.863978,
                "outcode" => "SY25",
                "incode" => "6DS"
            ],
            [
                "postcode" => "SW8 4SR",
                "latitude" => 51.479565,
                "longitude" => -0.128864,
                "outcode" => "SW8",
                "incode" => "4SR"
            ],
            [
                "postcode" => "SW18 5AL",
                "latitude" => 51.444928,
                "longitude" => -0.199671,
                "outcode" => "SW18",
                "incode" => "5AL"
            ],
            [
                "postcode" => "ST6 5HF",
                "latitude" => 53.063554,
                "longitude" => -2.215079,
                "outcode" => "ST6",
                "incode" => "5HF"
            ],
            [
                "postcode" => "ST15 8PJ",
                "latitude" => 52.897255,
                "longitude" => -2.135053,
                "outcode" => "ST15",
                "incode" => "8PJ"
            ],
            [
                "postcode" => "SS17 8HN",
                "latitude" => 51.530792,
                "longitude" => 0.440793,
                "outcode" => "SS17",
                "incode" => "8HN"
            ],
            [
                "postcode" => "SR3 1WZ",
                "latitude" => 54.918391,
                "longitude" => -1.420249,
                "outcode" => "SR3",
                "incode" => "1WZ"
            ],
            [
                "postcode" => "SO52 9JL",
                "latitude" => 50.977111,
                "longitude" => -1.445153,
                "outcode" => "SO52",
                "incode" => "9JL"
            ],
            [
                "postcode" => "SO20 6LP",
                "latitude" => 51.087736,
                "longitude" => -1.514478,
                "outcode" => "SO20",
                "incode" => "6LP"
            ],
            [
                "postcode" => "SN3 6DZ",
                "latitude" => 51.552199,
                "longitude" => -1.741238,
                "outcode" => "SN3",
                "incode" => "6DZ"
            ],
            [
                "postcode" => "SM6 7AU",
                "latitude" => 51.378377,
                "longitude" => -0.158744,
                "outcode" => "SM6",
                "incode" => "7AU"
            ],
            [
                "postcode" => "SL3 0ED",
                "latitude" => 51.48808,
                "longitude" => -0.502568,
                "outcode" => "SL3",
                "incode" => "0ED"
            ],
            [
                "postcode" => "SK22 4PH",
                "latitude" => 53.365504,
                "longitude" => -1.990959,
                "outcode" => "SK22",
                "incode" => "4PH"
            ],
            [
                "postcode" => "SG7 5HB",
                "latitude" => 52.041295,
                "longitude" => -0.196162,
                "outcode" => "SG7",
                "incode" => "5HB"
            ],
            [
                "postcode" => "SE8 5LY",
                "latitude" => 51.482382,
                "longitude" => -0.030179,
                "outcode" => "SE8",
                "incode" => "5LY"
            ],
            [
                "postcode" => "SE18 1HE",
                "latitude" => 51.486793,
                "longitude" => 0.09609,
                "outcode" => "SE18",
                "incode" => "1HE"
            ],
            [
                "postcode" => "SA68 0NY",
                "latitude" => 51.754548,
                "longitude" => -4.796565,
                "outcode" => "SA68",
                "incode" => "0NY"
            ],
            [
                "postcode" => "SA3 1HY",
                "latitude" => 51.599423,
                "longitude" => -4.269806,
                "outcode" => "SA3",
                "incode" => "1HY"
            ],
            [
                "postcode" => "S81 9LS",
                "latitude" => 53.360603,
                "longitude" => -1.122906,
                "outcode" => "S81",
                "incode" => "9LS"
            ],
            [
                "postcode" => "S65 1QT",
                "latitude" => 53.43751,
                "longitude" => -1.345709,
                "outcode" => "S65",
                "incode" => "1QT"
            ],
            [
                "postcode" => "S40 4QN",
                "latitude" => 53.244562,
                "longitude" => -1.459891,
                "outcode" => "S40",
                "incode" => "4QN"
            ],
            [
                "postcode" => "S10 1LR",
                "latitude" => 53.384689,
                "longitude" => -1.50139,
                "outcode" => "S10",
                "incode" => "1LR"
            ],
            [
                "postcode" => "RH8 0SF",
                "latitude" => 51.277642,
                "longitude" => 0.02225,
                "outcode" => "RH8",
                "incode" => "0SF"
            ],
            [
                "postcode" => "RH12 1AG",
                "latitude" => 51.063636,
                "longitude" => -0.328192,
                "outcode" => "RH12",
                "incode" => "1AG"
            ],
            [
                "postcode" => "RG41 3AA",
                "latitude" => 51.418113,
                "longitude" => -0.85455,
                "outcode" => "RG41",
                "incode" => "3AA"
            ],
            [
                "postcode" => "RG19 3SF",
                "latitude" => 51.398595,
                "longitude" => -1.258015,
                "outcode" => "RG19",
                "incode" => "3SF"
            ],
            [
                "postcode" => "PR5 0LY",
                "latitude" => 53.741767,
                "longitude" => -2.623832,
                "outcode" => "PR5",
                "incode" => "0LY"
            ],
            [
                "postcode" => "PO6 4JB",
                "latitude" => 50.848939,
                "longitude" => -1.093866,
                "outcode" => "PO6",
                "incode" => "4JB"
            ],
            [
                "postcode" => "PO20 2DL",
                "latitude" => 50.837443,
                "longitude" => -0.719262,
                "outcode" => "PO20",
                "incode" => "2DL"
            ],
            [
                "postcode" => "PL9 7RA",
                "latitude" => 50.364304,
                "longitude" => -4.099037,
                "outcode" => "PL9",
                "incode" => "7RA"
            ],
            [
                "postcode" => "PL2 1HH",
                "latitude" => 50.382876,
                "longitude" => -4.164705,
                "outcode" => "PL2",
                "incode" => "1HH"
            ],
            [
                "postcode" => "PH10 6HJ",
                "latitude" => 56.594931,
                "longitude" => -3.344132,
                "outcode" => "PH10",
                "incode" => "6HJ"
            ],
            [
                "postcode" => "PE3 7LT",
                "latitude" => 52.593881,
                "longitude" => -0.273784,
                "outcode" => "PE3",
                "incode" => "7LT"
            ],
            [
                "postcode" => "PE14 9DX",
                "latitude" => 52.596133,
                "longitude" => 0.214977,
                "outcode" => "PE14",
                "incode" => "9DX"
            ],
            [
                "postcode" => "PA2 8QR",
                "latitude" => 55.816424,
                "longitude" => -4.442919,
                "outcode" => "PA2",
                "incode" => "8QR"
            ],
            [
                "postcode" => "OX29 7TZ",
                "latitude" => 51.767016,
                "longitude" => -1.484188,
                "outcode" => "OX29",
                "incode" => "7TZ"
            ],
            [
                "postcode" => "OX11 7XT",
                "latitude" => 51.614223,
                "longitude" => -1.235806,
                "outcode" => "OX11",
                "incode" => "7XT"
            ],
            [
                "postcode" => "OL14 6DF",
                "latitude" => 53.720521,
                "longitude" => -2.060351,
                "outcode" => "OL14",
                "incode" => "6DF"
            ],
            [
                "postcode" => "NW3 5PP",
                "latitude" => 51.553064,
                "longitude" => -0.173581,
                "outcode" => "NW3",
                "incode" => "5PP"
            ],
            [
                "postcode" => "NR35 2ES",
                "latitude" => 52.473424,
                "longitude" => 1.494242,
                "outcode" => "NR35",
                "incode" => "2ES"
            ],
            [
                "postcode" => "NR20 3AY",
                "latitude" => 52.679623,
                "longitude" => 0.965364,
                "outcode" => "NR20",
                "incode" => "3AY"
            ],
            [
                "postcode" => "NP44 5ED",
                "latitude" => 51.65386,
                "longitude" => -3.055736,
                "outcode" => "NP44",
                "incode" => "5ED"
            ],
            [
                "postcode" => "NP11 6JZ",
                "latitude" => 51.60719,
                "longitude" => -3.088646,
                "outcode" => "NP11",
                "incode" => "6JZ"
            ],
            [
                "postcode" => "NN16 0LB",
                "latitude" => 52.403209,
                "longitude" => -0.711662,
                "outcode" => "NN16",
                "incode" => "0LB"
            ],
            [
                "postcode" => "NG6 7FG",
                "latitude" => 53.006009,
                "longitude" => -1.217305,
                "outcode" => "NG6",
                "incode" => "7FG"
            ],
            [
                "postcode" => "NG21 9BZ",
                "latitude" => 53.177092,
                "longitude" => -1.101082,
                "outcode" => "NG21",
                "incode" => "9BZ"
            ],
            [
                "postcode" => "NG12 1AG",
                "latitude" => 52.950409,
                "longitude" => -1.038319,
                "outcode" => "NG12",
                "incode" => "1AG"
            ],
            [
                "postcode" => "NE6 1RF",
                "latitude" => 54.972775,
                "longitude" => -1.581574,
                "outcode" => "NE6",
                "incode" => "1RF"
            ],
            [
                "postcode" => "NE30 4PR",
                "latitude" => 55.015205,
                "longitude" => -1.426454,
                "outcode" => "NE30",
                "incode" => "4PR"
            ],
            [
                "postcode" => "NE15 8TW",
                "latitude" => 54.987317,
                "longitude" => -1.716209,
                "outcode" => "NE15",
                "incode" => "8TW"
            ],
            [
                "postcode" => "N2 9BL",
                "latitude" => 51.594892,
                "longitude" => -0.157191,
                "outcode" => "N2",
                "incode" => "9BL"
            ],
            [
                "postcode" => "ML8 5RU",
                "latitude" => 55.740602,
                "longitude" => -3.834998,
                "outcode" => "ML8",
                "incode" => "5RU"
            ],
            [
                "postcode" => "MK5 8EB",
                "latitude" => 52.02817,
                "longitude" => -0.781864,
                "outcode" => "MK5",
                "incode" => "8EB"
            ],
            [
                "postcode" => "MK15 9JR",
                "latitude" => 52.064202,
                "longitude" => -0.727828,
                "outcode" => "MK15",
                "incode" => "9JR"
            ],
            [
                "postcode" => "ME17 1XA",
                "latitude" => 51.261692,
                "longitude" => 0.630817,
                "outcode" => "ME17",
                "incode" => "1XA"
            ],
            [
                "postcode" => "M6 5JX",
                "latitude" => 53.485979,
                "longitude" => -2.288751,
                "outcode" => "M6",
                "incode" => "5JX"
            ],
            [
                "postcode" => "M31 4BJ",
                "latitude" => 53.433543,
                "longitude" => -2.386487,
                "outcode" => "M31",
                "incode" => "4BJ"
            ],
            [
                "postcode" => "M20 2DY",
                "latitude" => 53.421833,
                "longitude" => -2.246183,
                "outcode" => "M20",
                "incode" => "2DY"
            ],
            [
                "postcode" => "LU3 1QA",
                "latitude" => 51.902,
                "longitude" => -0.428,
                "outcode" => "LU3",
                "incode" => "1QA"
            ],
            [
                "postcode" => "LS25 5ND",
                "latitude" => 53.741273,
                "longitude" => -1.256051,
                "outcode" => "LS25",
                "incode" => "5ND"
            ],
            [
                "postcode" => "LS11 9HP",
                "latitude" => 53.785422,
                "longitude" => -1.550306,
                "outcode" => "LS11",
                "incode" => "9HP"
            ],
            [
                "postcode" => "LN1 2NX",
                "latitude" => 53.279983,
                "longitude" => -0.681684,
                "outcode" => "LN1",
                "incode" => "2NX"
            ],
            [
                "postcode" => "LL29 8AG",
                "latitude" => 53.286893,
                "longitude" => -3.711488,
                "outcode" => "LL29",
                "incode" => "8AG"
            ],
            [
                "postcode" => "LE9 8AE",
                "latitude" => 52.571173,
                "longitude" => -1.337618,
                "outcode" => "LE9",
                "incode" => "8AE"
            ],
            [
                "postcode" => "LE2 5AP",
                "latitude" => 52.59795,
                "longitude" => -1.083362,
                "outcode" => "LE2",
                "incode" => "5AP"
            ],
            [
                "postcode" => "LD6 5BB",
                "latitude" => 52.302221,
                "longitude" => -3.512539,
                "outcode" => "LD6",
                "incode" => "5BB"
            ],
            [
                "postcode" => "LA13 9SX",
                "latitude" => 54.11296,
                "longitude" => -3.212602,
                "outcode" => "LA13",
                "incode" => "9SX"
            ],
            [
                "postcode" => "L34 6HG",
                "latitude" => 53.429831,
                "longitude" => -2.804361,
                "outcode" => "L34",
                "incode" => "6HG"
            ],
            [
                "postcode" => "L13 6SD",
                "latitude" => 53.420577,
                "longitude" => -2.912513,
                "outcode" => "L13",
                "incode" => "6SD"
            ],
            [
                "postcode" => "KY11 3JA",
                "latitude" => 56.032797,
                "longitude" => -3.479445,
                "outcode" => "KY11",
                "incode" => "3JA"
            ],
            [
                "postcode" => "KT2 5HR",
                "latitude" => 51.416578,
                "longitude" => -0.302922,
                "outcode" => "KT2",
                "incode" => "5HR"
            ],
            [
                "postcode" => "KA3 7ET",
                "latitude" => 55.610943,
                "longitude" => -4.475426,
                "outcode" => "KA3",
                "incode" => "7ET"
            ],
            [
                "postcode" => "IV30 5TN",
                "latitude" => 57.706881,
                "longitude" => -3.428015,
                "outcode" => "IV30",
                "incode" => "5TN"
            ],
            [
                "postcode" => "IP31 1BD",
                "latitude" => 52.322628,
                "longitude" => 0.856254,
                "outcode" => "IP31",
                "incode" => "1BD"
            ],
            [
                "postcode" => "IP14 1SG",
                "latitude" => 52.188157,
                "longitude" => 0.98003,
                "outcode" => "IP14",
                "incode" => "1SG"
            ],
            [
                "postcode" => "HX7 7NL",
                "latitude" => 53.749484,
                "longitude" => -2.021451,
                "outcode" => "HX7",
                "incode" => "7NL"
            ],
            [
                "postcode" => "HU3 1XS",
                "latitude" => 53.749268,
                "longitude" => -0.347817,
                "outcode" => "HU3",
                "incode" => "1XS"
            ],
            [
                "postcode" => "HR2 9HP",
                "latitude" => 52.022851,
                "longitude" => -2.839381,
                "outcode" => "HR2",
                "incode" => "9HP"
            ],
            [
                "postcode" => "HP18 9TA",
                "latitude" => 51.820708,
                "longitude" => -1.052687,
                "outcode" => "HP18",
                "incode" => "9TA"
            ],
            [
                "postcode" => "HD9 1AN",
                "latitude" => 53.576408,
                "longitude" => -1.776418,
                "outcode" => "HD9",
                "incode" => "1AN"
            ],
            [
                "postcode" => "HA5 1EP",
                "latitude" => 51.585859,
                "longitude" => -0.385164,
                "outcode" => "HA5",
                "incode" => "1EP"
            ],
            [
                "postcode" => "GU4 8BJ",
                "latitude" => 51.219398,
                "longitude" => -0.568926,
                "outcode" => "GU4",
                "incode" => "8BJ"
            ],
            [
                "postcode" => "GU16 6BJ",
                "latitude" => 51.291223,
                "longitude" => -0.723,
                "outcode" => "GU16",
                "incode" => "6BJ"
            ],
            [
                "postcode" => "GL53 9JP",
                "latitude" => 51.876582,
                "longitude" => -2.057419,
                "outcode" => "GL53",
                "incode" => "9JP"
            ],
            [
                "postcode" => "GL16 9SG",
                "latitude" => 51.792044,
                "longitude" => -2.618512,
                "outcode" => "GL16",
                "incode" => "9SG"
            ],
            [
                "postcode" => "G75 0DG",
                "latitude" => 55.757868,
                "longitude" => -4.186786,
                "outcode" => "G75",
                "incode" => "0DG"
            ],
            [
                "postcode" => "G53 5HD",
                "latitude" => 55.828248,
                "longitude" => -4.338193,
                "outcode" => "G53",
                "incode" => "5HD"
            ],
            [
                "postcode" => "G20 8NQ",
                "latitude" => 55.884237,
                "longitude" => -4.281451,
                "outcode" => "G20",
                "incode" => "8NQ"
            ],
            [
                "postcode" => "FY1 6NN",
                "latitude" => 53.801234,
                "longitude" => -3.03854,
                "outcode" => "FY1",
                "incode" => "6NN"
            ],
            [
                "postcode" => "EX6 8TT",
                "latitude" => 50.682565,
                "longitude" => -3.504454,
                "outcode" => "EX6",
                "incode" => "8TT"
            ],
            [
                "postcode" => "EX20 3BU",
                "latitude" => 50.768003,
                "longitude" => -4.085532,
                "outcode" => "EX20",
                "incode" => "3BU"
            ],
            [
                "postcode" => "EN8 8NF",
                "latitude" => 51.698694,
                "longitude" => -0.034822,
                "outcode" => "EN8",
                "incode" => "8NF"
            ],
            [
                "postcode" => "EH54 7ET",
                "latitude" => 55.887191,
                "longitude" => -3.553748,
                "outcode" => "EH54",
                "incode" => "7ET"
            ],
            [
                "postcode" => "EH26 8JB",
                "latitude" => 55.82866,
                "longitude" => -3.216715,
                "outcode" => "EH26",
                "incode" => "8JB"
            ],
            [
                "postcode" => "EC3N 2ES",
                "latitude" => 51.512561,
                "longitude" => -0.077695,
                "outcode" => "EC3N",
                "incode" => "2ES"
            ],
            [
                "postcode" => "E17 4DT",
                "latitude" => 51.598771,
                "longitude" => 0.000252,
                "outcode" => "E17",
                "incode" => "4DT"
            ],
            [
                "postcode" => "DY5 1SP",
                "latitude" => 52.481304,
                "longitude" => -2.11089,
                "outcode" => "DY5",
                "incode" => "1SP"
            ],
            [
                "postcode" => "DT4 7LA",
                "latitude" => 50.624278,
                "longitude" => -2.456514,
                "outcode" => "DT4",
                "incode" => "7LA"
            ],
            [
                "postcode" => "DN37 7BW",
                "latitude" => 53.542083,
                "longitude" => -0.167846,
                "outcode" => "DN37",
                "incode" => "7BW"
            ],
            [
                "postcode" => "DN15 8XT",
                "latitude" => 53.599772,
                "longitude" => -0.680695,
                "outcode" => "DN15",
                "incode" => "8XT"
            ],
            [
                "postcode" => "DL2 2FE",
                "latitude" => 54.546029,
                "longitude" => -1.592365,
                "outcode" => "DL2",
                "incode" => "2FE"
            ],
            [
                "postcode" => "DH7 8UN",
                "latitude" => 54.756726,
                "longitude" => -1.641607,
                "outcode" => "DH7",
                "incode" => "8UN"
            ],
            [
                "postcode" => "DG12 6TP",
                "latitude" => 54.988156,
                "longitude" => -3.180227,
                "outcode" => "DG12",
                "incode" => "6TP"
            ],
            [
                "postcode" => "DE24 8LW",
                "latitude" => 52.893689,
                "longitude" => -1.44855,
                "outcode" => "DE24",
                "incode" => "8LW"
            ],
            [
                "postcode" => "DD5 4SH",
                "latitude" => 56.48672,
                "longitude" => -2.8256,
                "outcode" => "DD5",
                "incode" => "4SH"
            ],
            [
                "postcode" => "DA17 5QH",
                "latitude" => 51.489316,
                "longitude" => 0.150607,
                "outcode" => "DA17",
                "incode" => "5QH"
            ],
            [
                "postcode" => "CW2 6JD",
                "latitude" => 53.086,
                "longitude" => -2.44,
                "outcode" => "CW2",
                "incode" => "6JD"
            ],
            [
                "postcode" => "CV36 4JF",
                "latitude" => 52.087446,
                "longitude" => -1.701233,
                "outcode" => "CV36",
                "incode" => "4JF"
            ],
            [
                "postcode" => "CV10 8EN",
                "latitude" => 52.519848,
                "longitude" => -1.489893,
                "outcode" => "CV10",
                "incode" => "8EN"
            ],
            [
                "postcode" => "CT16 3DG",
                "latitude" => 51.153369,
                "longitude" => 1.267453,
                "outcode" => "CT16",
                "incode" => "3DG"
            ],
            [
                "postcode" => "CR2 0AR",
                "latitude" => 51.346464,
                "longitude" => -0.07444,
                "outcode" => "CR2",
                "incode" => "0AR"
            ],
            [
                "postcode" => "CO15 5TU",
                "latitude" => 51.805955,
                "longitude" => 1.208174,
                "outcode" => "CO15",
                "incode" => "5TU"
            ],
            [
                "postcode" => "CM3 6TX",
                "latitude" => 51.681154,
                "longitude" => 0.763192,
                "outcode" => "CM3",
                "incode" => "6TX"
            ],
            [
                "postcode" => "CM1 6FE",
                "latitude" => 51.756929,
                "longitude" => 0.490662,
                "outcode" => "CM1",
                "incode" => "6FE"
            ],
            [
                "postcode" => "CH49 0UE",
                "latitude" => 53.379601,
                "longitude" => -3.098709,
                "outcode" => "CH49",
                "incode" => "0UE"
            ],
            [
                "postcode" => "CF83 1NZ",
                "latitude" => 51.576838,
                "longitude" => -3.217538,
                "outcode" => "CF83",
                "incode" => "1NZ"
            ],
            [
                "postcode" => "CF39 0AS",
                "latitude" => 51.621434,
                "longitude" => -3.410382,
                "outcode" => "CF39",
                "incode" => "0AS"
            ],
            [
                "postcode" => "CF11 1ZB",
                "latitude" => 51.469895,
                "longitude" => -3.163451,
                "outcode" => "CF11",
                "incode" => "1ZB"
            ],
            [
                "postcode" => "CB1 1AH",
                "latitude" => 52.207431,
                "longitude" => 0.12311,
                "outcode" => "CB1",
                "incode" => "1AH"
            ],
            [
                "postcode" => "CA11 9SJ",
                "latitude" => 54.709658,
                "longitude" => -2.893409,
                "outcode" => "CA11",
                "incode" => "9SJ"
            ],
            [
                "postcode" => "BS39 4BE",
                "latitude" => 51.368819,
                "longitude" => -2.54562,
                "outcode" => "BS39",
                "incode" => "4BE"
            ],
            [
                "postcode" => "BS20 7BD",
                "latitude" => 51.489979,
                "longitude" => -2.763531,
                "outcode" => "BS20",
                "incode" => "7BD"
            ],
            [
                "postcode" => "BR4 9AT",
                "latitude" => 51.375572,
                "longitude" => -0.00136,
                "outcode" => "BR4",
                "incode" => "9AT"
            ],
            [
                "postcode" => "BN26 6JH",
                "latitude" => 50.820582,
                "longitude" => 0.260726,
                "outcode" => "BN26",
                "incode" => "6JH"
            ],
            [
                "postcode" => "BN12 6LP",
                "latitude" => 50.818177,
                "longitude" => -0.429774,
                "outcode" => "BN12",
                "incode" => "6LP"
            ],
            [
                "postcode" => "B13 8JL",
                "latitude" => 52.445922,
                "longitude" => -1.892892,
                "outcode" => "B13",
                "incode" => "8JL"
            ],
            [
                "postcode" => "AB56 4NT",
                "latitude" => 57.701543,
                "longitude" => -2.85972,
                "outcode" => "AB56",
                "incode" => "4NT"
            ],
            [
                "postcode" => "AB31 4AW",
                "latitude" => 57.061099,
                "longitude" => -2.538352,
                "outcode" => "AB31",
                "incode" => "4AW"
            ],
            [
                "postcode" => "BH23 5DR",
                "latitude" => 50.741355,
                "longitude" => -1.69784,
                "outcode" => "BH23",
                "incode" => "5DR"
            ],
            [
                "postcode" => "BD8 9HL",
                "latitude" => 53.80582,
                "longitude" => -1.785511,
                "outcode" => "BD8",
                "incode" => "9HL"
            ],
            [
                "postcode" => "BD18 2HY",
                "latitude" => 53.824149,
                "longitude" => -1.763132,
                "outcode" => "BD18",
                "incode" => "2HY"
            ],
            [
                "postcode" => "BB5 1AY",
                "latitude" => 53.756725,
                "longitude" => -2.366805,
                "outcode" => "BB5",
                "incode" => "1AY"
            ],
            [
                "postcode" => "BA3 4DR",
                "latitude" => 51.282764,
                "longitude" => -2.542362,
                "outcode" => "BA3",
                "incode" => "4DR"
            ],
            [
                "postcode" => "BA1 5YX",
                "latitude" => 51.378857,
                "longitude" => -2.355562,
                "outcode" => "BA1",
                "incode" => "5YX"
            ],
            [
                "postcode" => "B75 6UW",
                "latitude" => 52.576058,
                "longitude" => -1.817451,
                "outcode" => "B75",
                "incode" => "6UW"
            ],
            [
                "postcode" => "B5 4BN",
                "latitude" => 52.475019,
                "longitude" => -1.897487,
                "outcode" => "B5",
                "incode" => "4BN"
            ],
            [
                "postcode" => "B28 9EL",
                "latitude" => 52.427332,
                "longitude" => -1.838934,
                "outcode" => "B28",
                "incode" => "9EL"
            ],
            [
                "postcode" => "AB24 4HB",
                "latitude" => 57.166287,
                "longitude" => -2.126954,
                "outcode" => "AB24",
                "incode" => "4HB"
            ],
            [
                "postcode" => "BT19 6HT",
                "latitude" => 54.67365,
                "longitude" => -5.611596,
                "outcode" => "BT19",
                "incode" => "6HT"
            ],
            [
                "postcode" => "BT24 7HR",
                "latitude" => 54.478111,
                "longitude" => -5.812987,
                "outcode" => "BT24",
                "incode" => "7HR"
            ],
            [
                "postcode" => "BT25 2JT",
                "latitude" => 54.373259,
                "longitude" => -5.98072,
                "outcode" => "BT25",
                "incode" => "2JT"
            ],
            [
                "postcode" => "BT66 6JF",
                "latitude" => 54.467517,
                "longitude" => -6.341354,
                "outcode" => "BT66",
                "incode" => "6JF"
            ],
            [
                "postcode" => "BN11 9WE",
                "latitude" => 50.814126,
                "longitude" => -0.370715,
                "outcode" => "BN11",
                "incode" => "9WE"
            ],
            [
                "postcode" => "TR7 1FR",
                "latitude" => 50.412111,
                "longitude" => -5.105574,
                "outcode" => "TR7",
                "incode" => "1FR"
            ],
            [
                "postcode" => "WN3 6NH",
                "latitude" => 53.515991,
                "longitude" => -2.665874,
                "outcode" => "WN3",
                "incode" => "6NH"
            ],
            [
                "postcode" => "ME13 9FF",
                "latitude" => 51.276763,
                "longitude" => 0.941019,
                "outcode" => "ME13",
                "incode" => "9FF"
            ],
            [
                "postcode" => "PR2 5RX",
                "latitude" => 53.791644,
                "longitude" => -2.653323,
                "outcode" => "PR2",
                "incode" => "5RX"
            ],
            [
                "postcode" => "BT92 2GF",
                "latitude" => 54.314347,
                "longitude" => -7.652467,
                "outcode" => "BT92",
                "incode" => "2GF"
            ],
            [
                "postcode" => "NG24 3XH",
                "latitude" => 53.054973,
                "longitude" => -0.801908,
                "outcode" => "NG24",
                "incode" => "3XH"
            ],
            [
                "postcode" => "RG23 7FD",
                "latitude" => 51.224207,
                "longitude" => -1.144774,
                "outcode" => "RG23",
                "incode" => "7FD"
            ],
            [
                "postcode" => "IP28 8ZN",
                "latitude" => 52.300194,
                "longitude" => 0.502309,
                "outcode" => "IP28",
                "incode" => "8ZN"
            ],
            [
                "postcode" => "E1 2FA",
                "latitude" => 51.514376,
                "longitude" => -0.058448,
                "outcode" => "E1",
                "incode" => "2FA"
            ],
            [
                "postcode" => "LS2 8FL",
                "latitude" => 53.801191,
                "longitude" => -1.542049,
                "outcode" => "LS2",
                "incode" => "8FL"
            ],
            [
                "postcode" => "BT74 5FD",
                "latitude" => 54.351698,
                "longitude" => -7.667515,
                "outcode" => "BT74",
                "incode" => "5FD"
            ],
            [
                "postcode" => "NN2 1JX",
                "latitude" => 52.247728,
                "longitude" => -0.811893,
                "outcode" => "NN2",
                "incode" => "1JX"
            ],
            [
                "postcode" => "EH7 9HW",
                "latitude" => 55.956701,
                "longitude" => -3.124824,
                "outcode" => "EH7",
                "incode" => "9HW"
            ],
            [
                "postcode" => "NW6 5HF",
                "latitude" => 51.532986,
                "longitude" => -0.19851,
                "outcode" => "NW6",
                "incode" => "5HF"
            ],
            [
                "postcode" => "YO24 3FP",
                "latitude" => 53.950809,
                "longitude" => -1.127098,
                "outcode" => "YO24",
                "incode" => "3FP"
            ]
        ];

        foreach ($postcodesToSeed as $postcode) {
            DB::table('postcodes')->insert($postcode);
        }
    }
}
