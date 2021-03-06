<?php

namespace App\Http\Requests;


class UpdateMediaRequest extends StoreMediaRequest
{

    public function rules()
    {
        return array_merge(
            parent::rules(),
            [
                'providing' => 'required|boolean',
                'consuming' => 'required|boolean',
                'consume_bid' => 'required|integer',
            ]
        );
    }


    public function getInputs()
    {
        return array_merge(
            parent::getInputs(),
            [
                'providing' => (boolean)$this->get('providing'),
                'consuming' => (boolean)$this->get('consuming'),
                'consume_bid' => (int)$this->get('consume_bid'),
            ]
        );
    }

}
