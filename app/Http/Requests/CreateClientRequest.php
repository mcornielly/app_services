<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateClientRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'type'          => 'required',
            'nacionality'   => 'required',
            'exempt_ob'   => 'required',
            'name'      => 'required|unique:clients,name',
            'cod_rif' => 'required|unique:clients,cod_rif,max:9',
            'comercial_name' => 'required',
            'business_group' => 'required',
            'sector_id' => 'required',
            'branch_id' => 'required',
            'origin_id' => 'required',
            'years_op' => 'required'
        ];
    }
}
