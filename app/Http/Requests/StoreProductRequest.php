<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'eventName' => 'required|min:21',
            'bandNames' => 'required',
            'startDate' => 'required|after:today',
            'endDate' => 'required|after:startDate',
            'ticketPrice' => 'required|gt:0',
            'status' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'eventName.required' => 'Vui lòng nhập event name',
            'eventName.min' => 'Event name phải nhiều hơn 20 kí tự',
            'bandNames.required' => 'Vui lòng nhập band names',
            'startDate.required' => 'Vui lòng nhập start date',
            'startDate.after' => 'Start date phải sau hôm nay',
            'endDate.required' => 'Vui lòng nhập end date',
            'endDate.after' => 'End date phải sau start date',
            'ticketPrice.required' => 'Vui lòng nhập ticket price',
            'ticketPrice.gt' => 'Ticket price phải lớn hơn 0',
            'status.required' => 'Vui lòng chọn status',

        ];
    }
}
