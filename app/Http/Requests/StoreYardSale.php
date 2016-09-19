<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreYardSale extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'address'                => 'required|max:255',
            'city'                   => 'required|max:20',
            'zip'                    => 'required|max:5',
            'privacy'                => 'required|max:20',
            'type_of_sale'           => 'required|max:20',
            'start_date'             => 'required|max:20',
            'end_date'               => 'required|max:20',
            'payment_types_accepted' => 'required|max:20',
            'display_on_map'         => 'required|boolean',
            'description'            => 'required|max:1000',
            'time'                   => 'required|max:20',
        ];
    }
}
