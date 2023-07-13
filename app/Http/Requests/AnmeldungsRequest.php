<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class AnmeldungsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [

            'mkvNr' => ['sometimes', 'number'],
            'verbindung' => ['required', 'string', 'size:3'], //todo: check if in verbindungs-table
            'couleurname' => ['string', 'required'],
            'vorname' => ['string', 'required'],
            'nachname' => ['string', 'required'],
            'birthdate' => ['Date', 'required'],
            'email' => ['string', 'required'],
            'telefon' => ['string', 'required'],
            'chargen' => ['string', 'required'],
            'anreise' => ['string', 'required'], //todo: enum
            'verpflegungsTyp' => ['string', 'required'],
            'fk' => ['boolean', 'required'],
            'street' => ['string', 'required'],
            'plz' => ['string', 'required'],
            'ort' => ['string', 'required'],
            'notfallkontakt' => ['string', 'required'],
            'bemerkungen' => ['string', 'required'],

        ];
    }
}
