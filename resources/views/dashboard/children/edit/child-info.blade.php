<h5 class="mb-1">{!! __('children.step') !!} 1 : {!! __('children.child_info') !!}</h5>
<hr />

<!-- begin: row -->
<div class="row d-none">
    <!-- begin: input -->
    <div class="col-md-12">
        <div class="form-group">
            <input type="hidden" id="id_edit" name="id" value="{!! $child->id !!}" class="form-control">
        </div>
    </div>
    <!-- end: input -->
</div>
<!-- end: row -->

<!-- begin: full name  ar-->
<div class="row mt-4">


    <!-- begin: input -->
    <div class="col-md-3">
        <div class="form-group">
            <label for="first_name_ar">{!! __('children.first_name_ar') !!}</label>
            <input type="text" id="first_name_ar" name="first_name_ar" class="form-control" autocomplete="off"
                placeholder="{!! __('children.enter_first_name_ar') !!}" value="{!! $child->getTranslation('first_name', 'ar') !!}">
            <span class="text text-danger">
                <strong id="first_name_ar_error"></strong>
            </span>
        </div>
    </div>
    <!-- end: input -->


    <!-- begin: input -->
    <div class="col-md-3">
        <div class="form-group">
            <label for="father_name_ar">{!! __('children.father_name_ar') !!}</label>
            <input type="text" id="father_name_ar" name="father_name_ar" class="form-control" autocomplete="off"
                placeholder="{!! __('children.enter_father_name_ar') !!}" value="{!! $child->getTranslation('father_name', 'ar') !!}">
            <span class="text text-danger">
                <strong id="father_name_ar_error"></strong>
            </span>
        </div>
    </div>
    <!-- end: input -->



    <!-- begin: input -->
    <div class="col-md-3">
        <div class="form-group">
            <label for="grand_father_name_ar">{!! __('children.grand_father_name_ar') !!}</label>
            <input type="text" id="grand_father_name_ar" name="grand_father_name_ar" class="form-control"
                autocomplete="off" placeholder="{!! __('children.enter_grand_father_name_ar') !!}" value="{!! $child->getTranslation('grand_father_name', 'ar') !!}">
            <span class="text text-danger">
                <strong id="grand_father_name_ar_error"></strong>
            </span>
        </div>
    </div>
    <!-- end: input -->

    <!-- begin: input -->
    <div class="col-md-3">
        <div class="form-group">
            <label for="family_name_ar">{!! __('children.family_name_ar') !!}</label>
            <input type="text" id='family_name_ar' name='family_name_ar' class="form-control" autocomplete="off"
                placeholder="{!! __('children.enter_family_name_ar') !!}" value="{!! $child->getTranslation('family_name', 'ar') !!}">
            <span class="text text-danger">
                <strong id="family_name_ar_error"></strong>
            </span>
        </div>
    </div>
    <!-- end: input -->
</div>
<!-- end: full name ar -->



<!-- begin: full name en-->
<div class="row">
    <!-- begin: input -->
    <div class="col-md-3">
        <div class="form-group">
            <label for="first_name_en">{!! __('children.first_name_en') !!}</label>
            <input type="text" id="first_name_en" name="first_name_en" class="form-control" autocomplete="off"
                placeholder="{!! __('children.enter_first_name_en') !!}" value="{!! $child->getTranslation('first_name', 'en') !!}">
            <span class="text text-danger">
                <strong id="first_name_en_error"></strong>
            </span>
        </div>
    </div>
    <!-- end: input -->


    <!-- begin: input -->
    <div class="col-md-3">
        <div class="form-group">
            <label for="father_name_en">{!! __('children.father_name_en') !!}</label>
            <input type="text" id="father_name_en" name="father_name_en" class="form-control" autocomplete="off"
                placeholder="{!! __('children.enter_father_name_en') !!}" value="{!! $child->getTranslation('father_name', 'en') !!}">
            <span class="text text-danger">
                <strong id="father_name_en_error"></strong>
            </span>
        </div>
    </div>
    <!-- end: input -->


    <!-- begin: input -->
    <div class="col-md-3">
        <div class="form-group">
            <label for="grand_father_name_en">{!! __('children.grand_father_name_en') !!}</label>
            <input type="text" id="grand_father_name_en" name="grand_father_name_en" class="form-control"
                autocomplete="off" placeholder="{!! __('children.enter_grand_father_name_en') !!}" value="{!! $child->getTranslation('grand_father_name', 'en') !!}">
            <span class="text text-danger">
                <strong id="grand_father_name_en_error"></strong>
            </span>
        </div>
    </div>
    <!-- end: input -->


    <!-- begin: input -->
    <div class="col-md-3">
        <div class="form-group">
            <label for="family_name_en">{!! __('children.family_name_en') !!}</label>
            <input type="text" id='family_name_en' name='family_name_en' class="form-control" autocomplete="off"
                placeholder="{!! __('children.enter_family_name_en') !!}" value="{!! $child->getTranslation('family_name', 'en') !!}">
            <span class="text text-danger">
                <strong id="family_name_en_error"></strong>
            </span>
        </div>
    </div>
    <!-- end: input -->
</div>
<!-- end: full name en -->


<!-- end: personal_id , birthday , classification , gender ,password,password_confirm -->
<div class="row">
    <!-- begin: input -->
    <div class="col-md-2">
        <div class="form-group">
            <label for="personal_id">{!! __('children.personal_id') !!}</label>
            <input type="text" id="personal_id" name="personal_id" class="form-control" autocomplete="off"
                readonly placeholder="{!! __('children.enter_personal_id') !!}" value="{!! $child->personal_id !!}">
            <span class="text text-danger">
                <strong id="personal_id_error"></strong>
            </span>
        </div>
    </div>
    <!-- end: input -->

    <!-- begin: input -->
    <div class="col-md-2">
        <div class="form-group">
            <label for="birthday">{!! __('children.birthday') !!}</label>
            <input type="date" id="birthday" name="birthday" class="form-control" autocomplete="off"
                placeholder="{!! __('children.enter_birthday') !!}" max="2012-01-01" value="{!! $child->birthday !!}">
            <span class="text text-danger">
                <strong id="birthday_error"></strong>
            </span>
        </div>
    </div>
    <!-- end: input -->

    <!-- begin: input -->
    <div class="col-md-2">
        <div class="form-group">
            <label for="classification">{!! __('children.classification') !!}</label>
            <select class="form-control" id="classification" name="classification">
                <option value="">
                    {!! __('children.select_from_list') !!}
                </option>
                <option value="fatherless" {!! $child->classification == 'fatherless' ? 'selected' : '' !!}>
                    {!! __('children.fatherless') !!}
                </option>
                <option value="parentless" {!! $child->classification == 'parentless' ? 'selected' : '' !!}>
                    {!! __('children.parentless') !!}
                </option>
            </select>
            <span class="text text-danger">
                <strong id="classification_error"></strong>
            </span>
        </div>
    </div>
    <!-- end: input -->


    <!-- begin: input -->
    <div class="col-md-2">
        <div class="form-group">
            <label for="gender">{!! __('children.gender') !!} </label>
            <select id="gender" name="gender" class="form-control">
                <option value="">
                    {!! __('children.select_from_list') !!}
                </option>
                <option value="male" {!! $child->gender == 'male' ? 'selected' : '' !!}>
                    {!! __('children.male') !!}
                </option>
                <option value="female" {!! $child->gender == 'female' ? 'selected' : '' !!}>
                    {!! __('children.female') !!}
                </option>
            </select>
            <span class="text text-danger">
                <strong id="gender_error"></strong>
            </span>
        </div>
    </div>
    <!-- end: input -->

    <!-- begin: input -->
    <div class="col-md-2">
        <div class="form-group">
            <label for="password">{!! __('children.password') !!}</label>
            <input type="password" id="password" name="password" class="form-control" autocomplete="off"
                placeholder="{!! __('children.enter_password') !!}">
            <span class="text text-danger">
                <strong id="password_error"></strong>
            </span>
        </div>
    </div>
    <!-- end: input -->
    <!-- begin: input -->
    <div class="col-md-2">
        <div class="form-group">
            <label for="password_confirm">{!! __('children.password_confirm') !!}</label>
            <input type="password" id="password_confirm" name="password_confirm" class="form-control"
                autocomplete="off" placeholder="{!! __('children.enter_password_confirm') !!}">
            <span class="text text-danger">
                <strong id="password_confirm_error"></strong>
            </span>
        </div>
    </div>
    <!-- end: input -->
</div>
<!-- end: personal_id , birthday , classification , gender ,password,password_confirm -->


<!-- begin: class , health_status , disease_clarification-->
<div class="row">

    <!-- begin: input -->
    <div class="col-md-3">
        <div class="form-group">
            <label for="class">{!! __('children.class') !!}</label>
            <select id="class" name="class" class="form-control">
                <option value="" selected>{!! __('children.select_from_list') !!}</option>
                <option value="1" {!! $child->class == '1' ? 'selected' : '' !!}>{!! __('children.class_1') !!}</option>
                <option value="2" {!! $child->class == '2' ? 'selected' : '' !!}>{!! __('children.class_2') !!}</option>
                <option value="3" {!! $child->class == '3' ? 'selected' : '' !!}>{!! __('children.class_3') !!}</option>
                <option value="4" {!! $child->class == '4' ? 'selected' : '' !!}>{!! __('children.class_4') !!}</option>
                <option value="5" {!! $child->class == '5' ? 'selected' : '' !!}>{!! __('children.class_5') !!}</option>
                <option value="6" {!! $child->class == '6' ? 'selected' : '' !!}>{!! __('children.class_6') !!}</option>
                <option value="7" {!! $child->class == '7' ? 'selected' : '' !!}>{!! __('children.class_7') !!}</option>
                <option value="8" {!! $child->class == '8' ? 'selected' : '' !!}>{!! __('children.class_8') !!}</option>
            </select>
            <span class="text text-danger">
                <strong id="class_error"></strong>
            </span>
        </div>
    </div>
    <!-- end: input -->


    <!-- begin: input -->
    <div class="col-md-3">
        <div class="form-group">
            <label for="health_status">{!! __('children.health_status') !!}</label>
            <select id="health_status" name="health_status" class="form-control">
                <option value="" selected>{!! __('children.select_from_list') !!}</option>
                <option value="good" {!! $child->health_status == 'good' ? 'selected' : '' !!}>{!! __('children.good') !!}</option>
                <option value="sick" {!! $child->health_status == 'sick' ? 'selected' : '' !!}>{!! __('children.sick') !!}</option>
            </select>
            <span class="text text-danger">
                <strong id="health_status_error"></strong>
            </span>
        </div>
    </div>
    <!-- end: input -->


    <!-- begin: input -->
    <div class="col-md-6">
        <div class="form-group">
            <label for="disease_clarification">{!! __('children.disease_clarification') !!}</label>
            <input type="text" id="disease_clarification" name="disease_clarification" class="form-control"
                autocomplete="off" placeholder="{!! __('children.enter_disease_clarification') !!}" value="{!! $child->disease_clarification !!}">
            <span class="text text-danger">
                <strong id="disease_clarification_error"></strong>
            </span>
        </div>
    </div>
    <!-- end: input -->


</div>
<!-- end: class , health_status , disease_clarification -->


<!-- begin: governoate_id , city_id , address_details-->
<div class="row">

    <!-- begin: input -->
    <div class="col-md-3">
        <div class="form-group">
            <label for="governorate_id">{!! __('users.governorate_id') !!}</label>
            <select type="text" id="governoate_id" name="governoate_id" class="form-control">
                <option value="" selected='selected'>
                    {!! __('users.select') !!} {!! __('users.governorate_id') !!}
                </option>
                @foreach ($governorates as $key => $governorate)
                    <option value="{!! $governorate->id !!}" {!! $child->governoate_id == $governorate->id ? 'selected' : '' !!}>{!! $governorate->name !!}</option>
                @endforeach
            </select>
            <span class="text text-danger">
                <strong id="governoate_id_error"></strong>
            </span>
        </div>
    </div>
    <!-- end: input -->

    <!-- begin: input -->
    <div class="col-md-3">
        <div class="form-group ">
            <label for="governorate_id">{!! __('users.city_id') !!}</label>
            <select type="text" id="city_id" name="city_id" class="form-control">
                <option value="">
                    {!! __('users.select') !!} {!! __('users.city_id') !!}
                </option>
                @foreach ($cities as $key => $city)
                    <option value="{!! $city->id !!}" {!! $child->city_id == $city->id ? 'selected' : '' !!}>{!! $city->name !!}</option>
                @endforeach
            </select>
            <span class="text text-danger">
                <strong id="city_id_error"></strong>
            </span>
        </div>
    </div>
    <!-- end: input -->

    <!-- begin: input -->
    <div class="col-md-6">
        <div class="form-group">
            <label for="address_details">{!! __('children.address_details') !!}</label>
            <input type="text" id="address_details" name="address_details" class="form-control"
                autocomplete="off" placeholder="{!! __('children.enter_address_details') !!}" value="{!! $child->address_details !!}">
            <span class="text text-danger">
                <strong id="address_details_error"></strong>
            </span>
        </div>
    </div>
    <!-- end: input -->


</div>
<!-- end: governoate_id , city_id , address_details -->

<!-- begin: authorized_contact_number , backup_contact_number , whatsApp_number-->
<div class="row">

    <!-- begin: input -->
    <div class="col-md-4">
        <div class="form-group">
            <label for="authorized_contact_number">{!! __('children.authorized_contact_number') !!}</label>
            <input type="text" id="authorized_contact_number" name="authorized_contact_number"
                class="form-control" autocomplete="off" placeholder="{!! __(key: 'children.enter_authorized_contact_number') !!}"
                value="{!! $child->authorized_contact_number !!}">
            <span class="text text-danger">
                <strong id="authorized_contact_number_error"></strong>
            </span>
        </div>
    </div>
    <!-- end: input -->


    <!-- begin: input -->
    <div class="col-md-4">
        <div class="form-group">
            <label for="backup_contact_number">{!! __('children.backup_contact_number') !!}</label>
            <input type="text" id="backup_contact_number" name="backup_contact_number" class="form-control"
                autocomplete="off" placeholder="{!! __('children.enter_backup_contact_number') !!}" value="{!! $child->backup_contact_number !!}">
            <span class="text text-danger">
                <strong id="backup_contact_number_error"></strong>
            </span>
        </div>
    </div>
    <!-- end: input -->


    <!-- begin: input -->
    <div class="col-md-4">
        <div class="form-group">
            <label for="whatsApp_number">{!! __('children.whatsApp_number') !!}</label>
            <input type="text" id="whatsApp_number" name="whatsApp_number" class="form-control"
                autocomplete="off" placeholder="{!! __('children.enter_whatsApp_number') !!}" value="{!! $child->whatsApp_number !!}">
            <span class="text text-danger">
                <strong id="whatsApp_number_error"></strong>
            </span>
        </div>
    </div>
    <!-- end: input -->


</div>
<!-- end: authorized_contact_number , backup_contact_number , whatsApp_number -->



<div class="row  {!! Lang() == 'ar' ? 'pull-left' : 'pull-right' !!}">
    <div class="col-md-12">
        <button type="button" class="next-step btn btn-primary btn-sm  btn-glow "
            id="child_btn">{!! __('children.next') !!}</button>

        {{-- <button type="submit" class="next-step btn btn-primary btn-md  btn-glow">{!! __('children.save') !!}</button> --}}
    </div>
</div>
