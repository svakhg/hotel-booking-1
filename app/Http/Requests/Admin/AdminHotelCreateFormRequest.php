<?php

namespace HotelBooking\Http\Requests\Admin;

use HotelBooking\Http\Requests\Request;

/**
 * A Request class for validating the requests from create hotel admin forms.
 */
class AdminHotelCreateFormRequest extends Request
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
            'username' => 'required|regex:/^[a-z0-9,.\'-_]+$/i|min:6|max:20|unique:admin_hotels',
            'password' => 'required|alpha_num|min:6|max:20',
            'name' => 'required|regex:/^[a-z ,.\'-]+$/i',
            'email' => 'required|email|unique:admin_hotels',
            'phone' => 'required|regex:/^0[0-9]*$/|min:10|max:15',
        ];
    }
}
