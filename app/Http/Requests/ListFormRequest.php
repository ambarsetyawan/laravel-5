<?php namespace todoparrot\Http\Requests;

use todoparrot\Http\Requests\Request;

class ListFormRequest extends Request {

  public function rules()
{
      return [
          'title' => 'required',
          'lyrics' => 'required'
      ];
}

  public function authorize()
{
  return true;
}

}