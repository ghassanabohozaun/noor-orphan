<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ChildUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            // child
            'first_name_ar' => ['required', 'string', 'min:3'],
            'father_name_ar' => ['required', 'string', 'min:3'],
            'grand_father_name_ar' => ['required', 'string', 'min:3'],
            'family_name_ar' => ['required', 'string', 'min:3'],
            'first_name_en' => ['required', 'string', 'min:3'],
            'father_name_en' => ['required', 'string', 'min:3'],
            'grand_father_name_en' => ['required', 'string', 'min:3'],
            'family_name_en' => ['required', 'string', 'min:3'],
            'password_confirm' => ['same:password'],
            'personal_id' => ['required', 'min:9', 'string', Rule::unique('children')->ignore($this->child)],
            'birthday' => ['required', 'date'],
            'classification' => ['required'],
            'gender' => ['required'],
            'class' => ['required'],
            'health_status' => ['required'],
            'disease_clarification' => ['required', 'string'],
            'governoate_id' => ['required', 'exists:governorates,id'],
            'city_id' => ['required', 'exists:cities,id'],
            'address_details' => ['required', 'string'],
            'authorized_contact_number' => ['required', 'string'],
            'backup_contact_number' => ['required', 'string'],
            'whatsApp_number' => ['required', 'string'],

            // family
            'number_of_people_including_mother' => ['required', 'numeric'],
            'male_number' => ['required', 'numeric'],
            'female_number' => ['required', 'numeric'],
            // father
            'father_full_name_ar' => ['required', 'string'],
            'father_full_name_en' => ['required', 'string'],
            'father_personal_id' => ['required', 'string'],
            'father_date_of_death' => ['required', 'date'],
            'father_respon_of_death' => ['required', 'in:illness,martyr'],
            // mother
            'mother_full_name_ar' => ['required', 'string'],
            'mother_full_name_en' => ['required', 'string'],
            'mother_personal_id' => ['required', 'string'],
            'mother_date_of_death' => ['required', 'date'],
            'is_mother_alive' => ['required', 'in:0,1'],
            'is_mother_the_guardian' => ['required', 'in:0,1'],

            'guardian_full_name_ar' => ['required', 'string'],
            'guardian_full_name_en' => ['required', 'string'],
            'guardian_personal_id' => ['required', 'string'],
            'guardian_birthday' => ['required', 'date'],
            'why_not_the_mother_is_guardian' => ['required', 'in:divorced,abandoned,sick,etc'],
            'guardian_relationship_with_the_child' => ['required', 'in:mother,uncle,aunt,grandfather,grandmother,brother,sister,uncle2,aunt2'],

            // 'picture_of_the_orphan_child' => ['required', 'mimes:png,jpg,jpeg,gif,pdf', 'max:2024'],
            // 'orphan_child_birth_certificate' => ['required', 'mimes:png,jpg,jpeg,gif,pdf', 'max:2024'],
            // 'father_death_certificate' => ['required', 'mimes:png,jpg,jpeg,gif,pdf', 'max:2024'],
            // 'guardian_personal_id_photo' => ['required', 'mimes:png,jpg,jpeg,gif,pdf', 'max:2024'],
        ];
    }
}
