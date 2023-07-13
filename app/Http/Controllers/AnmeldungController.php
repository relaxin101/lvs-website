<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\AnmeldungsRequest;
use App\Models\Couleurstudent;
use App\Models\Verbindung;
use Illuminate\Database\Query\Builder;
use Illuminate\Http\Request;
use function PHPUnit\TestFixture\func;

class AnmeldungController extends Controller
{
    public function store(AnmeldungsRequest $request)
    {
        $data = $request->validated();
        $cs = Couleurstudent::query()
            ->where('vornname', $data['vorname'])
            ->where('nachname', $data['nachname'])
            ->where('couleurname', $data['couleurName'])
            ->whereHas('verbindung', function (Builder $query) use ($data) {
                return $query->where('kuerzel', $data['verbindung'])->exists();
            })->first();

        $fields = array_filter($data, function ($key, $value) {
            return $key != 'verbindung';
        });
        if (!empty($cs)) {
            $cs->fill($fields);
            $cs->save();
            $cs->verbindungen()->save(Verbindung::query()->where('kuerzel', $data['verbindung'])->first());


        } else {
            $cs = Couleurstudent::factory()->create($fields);
            $cs->verbindungen()->save(Verbindung::query()->where('kuerzel', $data['verbindung'])->first());

        }

    }

}
