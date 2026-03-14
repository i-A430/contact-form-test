<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            //
            //'first_name' => ['required', 'string', 'max:8'],
            //'last_name' => ['required', 'string', 'max:8'],
           // 'gender' => ['required'],
           // 'email' => ['required', 'string', 'email',],
           // 'tel_1' => ['required', 'numeric', 'digits_between:5'],
            //'tel_2' => ['required', 'numeric', 'digits_between:5'],
            //'tel_3' => ['required', 'numeric', 'digits_between:5'],
            //'address' => ['required', 'string'],
            //'category_id' => ['required',],
            //'detail' => ['required', 'string', 'max:120']

            'first_name' => 'required',
            'last_name' => 'required',
            'gender' => 'required',
            'email' => 'required | email',
            'tel_1' => 'required | max:5 | regex:/^[0-9]+$/',
            'tel_2' => 'required | max:5 | regex:/^[0-9]+$/',
            'tel_3' => 'required | max:5 | regex:/^[0-9]+$/',
            'address' => 'required',
            'category_id' => 'required',
            'detail' => 'required | max:120',

            ];
    }
    public function messages()
    {
        return [
            //'first_name.required' => '名前を入力してください',
            //'first_name.string' => '名前を文字列で入力してください',
            //'first_name.max' => '名前を8文字以下で入力してください',
            //'last_name.required' => '名前を入力してください',
            //'last_name.string' => '名前を文字列で入力してください',
            //'last_name.max' => '名前を8文字以下で入力してください',
            'gender.required' => '性別を選択してください',
            'email.required' => 'メールアドレスを入力してください',
            //'email.string' => 'メールアドレスを文字列で入力してください',
            //'email.email' => '有効なメールアドレス形式入力してください',
            'tel_1.required' => '電話番号を入力してください',
            //'tel_1.numeric' => '電話番号を数値で入力してください',
            //'tel_1.digits_between' => '電話番号を5桁以下で入力してください',
            'tel_2.required' => '電話番号を入力してください',
            //'tel_2.numeric' => '電話番号を数値で入力してください',
            //'tel_2.digits_between' => '電話番号を5桁以下で入力してください',
            'tel_3.required' => '電話番号を入力してください',
            //'tel_3.numeric' => '電話番号を数値で入力してください',
            //'tel_3.digits_between' => '電話番号を5桁以下で入力してください',
            'address.required' => '住所を入力してください',
            'address.string' => '住所を文字列で入力してください',
            'category_id.required' => 'お問い合わせの種類を選択してください',
            'detail.required' => 'お問い合わせ内容を入力してください',
            //'detail.string' => 'お問い合わせ内容を文字列で入力してください',
            'detail.max' => 'お問い合わせを120文字以下で入力してください',

            'first_name.required' => '姓を入力してください',
            'last_name.required' => '名を入力してください',
            'gender.required' => '性別を選択してください',
            //'email.required' => 'メールアドレスを入力してください',
            'email.email' => 'メールアドレスはメール形式で入力してください',
            //'tel_1.required' => '電話番号を入力してください',
            'tel_1.regex' => '電話番号は半角数字で入力してください',
            'tel_1.max' => '電話番号は5桁までの数字で入力してください',
            //'tel_2.required' => '電話番号を入力してください',
            'tel_2.regex' => '電話番号は半角数字で入力してください',
            'tel_2.max' => '電話番号は5桁までの数字で入力してください',
            //'tel_3.required' => '電話番号を入力してください',
            'tel_3.regex' => '電話番号は半角数字で入力してください',
            'tel_3.max' => '電話番号は5桁までの数字で入力してください',
            //'address.required' => '住所を入力してください',
            //'category_id.required' => 'お問い合わせの種類を選択してください',
            //'detail.required' => 'お問い合わせの内容を入力してください',
            //'detail.max' => 'お問い合わせ内容は120文字以内で入力してください',

        ];
    }

}
