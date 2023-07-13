<?php

namespace Database\Seeders;

use App\Models\Verbindung;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VerbindungSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Verbindung::factory()->create(
            [
                'kuerzel' => 'AGP',
                'verbindung' => 'K.Ö.St.V. Aggstein St. Pölten',
                'plz' => 3100,
                'ort' => 'St. Pölten',
                'straße' => 'Kerensstraße 12'
            ]
        );

        Verbindung::factory()->create(
            [
                'kuerzel' => 'ARH',
                'verbindung' => 'K.Ö.St.V. Arminia Hollabrunn',
                'plz' => 2020,
                'ort' => 'Hollabrunn',
                'straße' => 'Rapfstraße (Hollabrunn) 32'
            ]
        );

        Verbindung::factory()->create(
            [
                'kuerzel' => 'ARK',
                'verbindung' => 'K.Ö.M.V. Arminia Klosterneuburg',
                'plz' => 3400,
                'ort' => 'Klosterneuburg',
                'straße' => 'Markgasse 1'
            ]
        );

        Verbindung::factory()->create(
            [
                'kuerzel' => 'AUK',
                'verbindung' => 'K.Ö.St.V. Austria Krems',
                'plz' => 3500,
                'ort' => 'Krems an der Donau',
                'straße' => 'Hafnerplatz 2'
            ]
        );

        Verbindung::factory()->create(
            [
                'kuerzel' => 'AUP',
                'verbindung' => 'K.Ö.St.V. Austria Purkersdorf',
                'plz' => 3002,
                'ort' => 'Purkersdorf',
                'straße' => 'Hauptplatz 6'
            ]
        );

        Verbindung::factory()->create(
            [
                'kuerzel' => 'BBD',
                'verbindung' => 'K.Ö.St.V. Babenberg Deutsch-Wagram',
                'plz' => 2232,
                'ort' => 'Deutsch-Wagram',
                'straße' => 'Ebner Eschenbach-Gasse 20'
            ]
        );

        Verbindung::factory()->create(
            [
                'kuerzel' => 'BBL',
                'verbindung' => 'K.Ö.St.V. Babenberg Lilienfeld',
                'plz' => 3180,
                'ort' => 'Lilienfeld',
                'straße' => 'Kolweißgasse 7'
            ]
        );

        Verbindung::factory()->create(
            [
                'kuerzel' => 'BBN',
                'verbindung' => 'K.Ö.St.V. Babenberg Wr. Neustadt',
                'plz' => 2700,
                'ort' => 'Wr. Neustadt',
                'straße' => '84-er Platz'
            ]
        );

        Verbindung::factory()->create(
            [
                'kuerzel' => 'BDB',
                'verbindung' => 'K.Ö.St.V. Badenia Baden',
                'plz' => 2500,
                'ort' => 'Baden',
                'straße' => 'Theaterplatz 9'
            ]
        );

        Verbindung::factory()->create(
            [
                'kuerzel' => 'BLW',
                'verbindung' => 'K.Ö.Agr.St.V. Bergland Wieselburg',
                'plz' => 3250,
                'ort' => 'Wieselburg',
                'straße' => 'Fürnbergstraße 32'
            ]
        );

        Verbindung::factory()->create(
            [
                'kuerzel' => 'CAP',
                'verbindung' => 'K.Ö.M.V. Carolina St. Pölten',
                'plz' => 3121,
                'ort' => 'Karlstetten',
                'straße' => 'Lärchenweg 7'
            ]
        );

        Verbindung::factory()->create(
            [
                'kuerzel' => 'CHK',
                'verbindung' => 'K.Ö.St.V. Chremisa Krems',
                'plz' => 3495,
                'ort' => 'Rohrendorf',
                'straße' => 'Bahnstraße 28'
            ]
        );

        Verbindung::factory()->create(
            [
                'kuerzel' => 'COT',
                'verbindung' => 'K.Ö.St.V. Comagena Tulln',
                'plz' => 3430,
                'ort' => 'Tulln an der Donau',
                'straße' => 'Donaulände (Tulln) 38'
            ]
        );

        Verbindung::factory()->create(
            [
                'kuerzel' => 'FBM',
                'verbindung' => 'K.Ö.St.V. Franzensburg Mödling',
                'plz' => 2340,
                'ort' => 'Mödling',
                'straße' => 'Josef Deutsch-Platz 2'
            ]
        );

        Verbindung::factory()->create(
            [
                'kuerzel' => 'FIR',
                'verbindung' => 'K.Ö.St.V. Fiducia Ravelsbach',
                'plz' => 3720,
                'ort' => 'Ravelsbach',
                'straße' => 'Hauptplatz 12'
            ]
        );

        Verbindung::factory()->create(
            [
                'kuerzel' => 'FSM',
                'verbindung' => 'K.Ö.St.V. Falkenstein Mistelbach',
                'plz' => 2130,
                'ort' => 'Mistelbach',
                'straße' => 'Wiedenstraße 8'
            ]
        );

        Verbindung::factory()->create(
            [
                'kuerzel' => 'HES',
                'verbindung' => 'K.Ö.St.V. Herulia Stockerau',
                'plz' => 2000,
                'ort' => 'Stockerau',
                'straße' => 'Hauptstraße 7'
            ]
        );

        Verbindung::factory()->create(
            [
                'kuerzel' => 'HRW',
                'verbindung' => 'K.Ö.St.V. Herulia Wolkersdorf',
                'plz' => 2120,
                'ort' => 'Wolkersdorf im Weinviertel',
                'straße' => 'Kellergasse (Wolkersdorf) 35'
            ]
        );

        Verbindung::factory()->create(
            [
                'kuerzel' => 'KRK',
                'verbindung' => 'K.Ö.St.V. Kuenring Krems',
                'plz' => 2100,
                'ort' => 'Korneuburg',
                'straße' => 'Im Frauental 3'
            ]
        );

        Verbindung::factory()->create(
            [
                'kuerzel' => 'LFZ',
                'verbindung' => 'K.Ö.St.V. Lichtenfels Zwettl',
                'plz' => 3910,
                'ort' => 'Zwettl-Niederösterreich',
                'straße' => 'Schulgasse 2'
            ]
        );

        Verbindung::factory()->create(
            [
                'kuerzel' => 'LGD',
                'verbindung' => 'K.St.V. Leopoldina Gmünd',
                'plz' => 3950,
                'ort' => 'Gmünd',
                'straße' => 'Grenzgasse 3/2'
            ]
        );

        Verbindung::factory()->create(
            [
                'kuerzel' => 'LGF',
                'verbindung' => 'K.Ö.St.V. Leopoldina Gänserndorf',
                'plz' => 2230,
                'ort' => 'Gänserndorf',
                'straße' => 'Protteser Straße 6'
            ]
        );

        Verbindung::factory()->create(
            [
                'kuerzel' => 'MDK',
                'verbindung' => 'K.Ö.St.V. Marko-Danubia Korneuburg',
                'plz' => 2100,
                'ort' => 'Korneuburg',
                'straße' => 'Bankmannring 1'
            ]
        );

        Verbindung::factory()->create(
            [
                'kuerzel' => 'MMA',
                'verbindung' => 'K.Ö.St.V. Makomannia St. Andrä',
                'plz' => 3423,
                'ort' => 'St. Andrä-Wördern',
                'straße' => 'Wiener Straße (St. Andrä) 18'
            ]
        );

        Verbindung::factory()->create(
            [
                'kuerzel' => 'MSB',
                'verbindung' => 'K.Ö.St.V. Merkenstein Berndorf',
                'plz' => 2560,
                'ort' => 'Berndorf',
                'straße' => 'Harllesstraße 4'
            ]
        );

        Verbindung::factory()->create(
            [
                'kuerzel' => 'NBM',
                'verbindung' => 'K.Ö.St.V. Nibelungia Melk',
                'plz' => 3390,
                'ort' => 'Melk',
                'straße' => 'J. Haidvogl-Gasse 6'
            ]
        );

        Verbindung::factory()->create(
            [
                'kuerzel' => 'NBP',
                'verbindung' => 'K.Ö.M.V. Nibelungia St. Pölten',
                'plz' => 3100,
                'ort' => 'St. Pölten',
                'straße' => 'Dr.Karl Renner-Promenade 35'
            ]
        );

        Verbindung::factory()->create(
            [
                'kuerzel' => 'NGL',
                'verbindung' => 'K.Ö.St.V. Nordgau Laa',
                'plz' => 2136,
                'ort' => 'Laa an der Thaya',
                'straße' => 'Hauptstraße 37'
            ]
        );

        Verbindung::factory()->create(
            [
                'kuerzel' => 'NKW',
                'verbindung' => 'K.Ö.St.V. Norika Waidhofen',
                'plz' => 3340,
                'ort' => 'Waidhofen an der Ybbs',
                'straße' => 'Durstgasse 2'
            ]
        );

        Verbindung::factory()->create(
            [
                'kuerzel' => 'NOH',
                'verbindung' => 'K.Ö.St.V. Nordmark Hohenau',
                'plz' => 2273,
                'ort' => 'Hohenau an der March',
                'straße' => 'Rathausstraße 88'
            ]
        );

        Verbindung::factory()->create(
            [
                'kuerzel' => 'OLS',
                'verbindung' => 'K.Ö.St.V. Ötscherland Scheibbs',
                'plz' => 3270,
                'ort' => 'Scheibbs',
                'straße' => 'Abt Berthold Dietmayr-Gasse 3'
            ]
        );

        Verbindung::factory()->create(
            [
                'kuerzel' => 'ORA',
                'verbindung' => 'K.Ö.St.V. Ostarrichia Amstetten',
                'plz' => 3300,
                'ort' => 'Amstetten',
                'straße' => 'Hauptplatz (Amstetten) 36-38'
            ]
        );

        Verbindung::factory()->create(
            [
                'kuerzel' => 'PAB',
                'verbindung' => 'K.Ö.St.V. Pannonia Bruck',
                'plz' => 2460,
                'ort' => 'Bruck an der Leitha',
                'straße' => 'Hainburger Straße 3'
            ]
        );

        Verbindung::factory()->create(
            [
                'kuerzel' => 'RGW',
                'verbindung' => 'K.Ö.St.V. Rugia Waidhofen',
                'plz' => 3830,
                'ort' => 'Waidhofen an der Thaya',
                'straße' => 'Aignerstraße 8'
            ]
        );

        Verbindung::factory()->create(
            [
                'kuerzel' => 'RNK',
                'verbindung' => 'K.Ö.St.V. Rhaeto-Norica Klosterneuburg',
                'plz' => 3400,
                'ort' => 'Klosterneuburg',
                'straße' => 'Leopoldstraße 33'
            ]
        );

        Verbindung::factory()->create(
            [
                'kuerzel' => 'SOP',
                'verbindung' => 'K.Ö.St.V. Sonnberg Perchtoldsdorf',
                'plz' => 2380,
                'ort' => 'Perchtoldsdorf',
                'straße' => 'Brunner Gasse 24'
            ]
        );

        Verbindung::factory()->create(
            [
                'kuerzel' => 'TUM',
                'verbindung' => 'K.Ö.St.V. Tuistonia Mödling',
                'plz' => 2340,
                'ort' => 'Mödling',
                'straße' => 'Brühler Straße 15'
            ]
        );

        Verbindung::factory()->create(
            [
                'kuerzel' => 'UDS',
                'verbindung' => 'K.Ö.St.V. Udonia Seitenstetten',
                'plz' => 3300,
                'ort' => 'Amstetten',
                'straße' => 'Zölestin-Schöller-Straße 8'
            ]
        );

        Verbindung::factory()->create(
            [
                'kuerzel' => 'WMH',
                'verbindung' => 'K.Ö.St.V. Waldmark Horn',
                'plz' => 3580,
                'ort' => 'Horn',
                'straße' => 'Rathausplatz 4'
            ]
        );

        Verbindung::factory()->create(
            [
                'kuerzel' => 'WMN',
                'verbindung' => 'K.Ö.St.V. Waldmark Neunkirchen',
                'plz' => 2620,
                'ort' => 'Neunkirchen',
                'straße' => 'Kirchengasse 10'
            ]
        );
    }
}
