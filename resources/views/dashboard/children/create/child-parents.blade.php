<h5 class="mb-1">{!! __('children.step') !!} 2 : {!! __('children.parents_info') !!}</h5>
<hr />


<!-- begin: number_of_people_including_mother , male_number , female_number -->
<div class="row">
    <!-- begin: input -->
    <div class="col-md-4">
        <div class="form-group">
            <label for="number_of_people_including_mother">{!! __('children.number_of_people_including_mother') !!}</label>
            <input type="number" id="number_of_people_including_mother" name="number_of_people_including_mother"
                class="form-control" autocomplete="off" placeholder="{!! __('children.enter_number_of_people_including_mother') !!}">
            <span class="text text-danger">
                <strong id="number_of_people_including_mother_error"></strong>
            </span>
        </div>
    </div>
    <!-- end: input -->


    <!-- begin: input -->
    <div class="col-md-4">
        <div class="form-group">
            <label for="male_number">{!! __('children.male_number') !!}</label>
            <input type="number" id="male_number" name="male_number" class="form-control" autocomplete="off"
                placeholder="{!! __('children.enter_male_number') !!}">
            <span class="text text-danger">
                <strong id="male_number_error"></strong>
            </span>
        </div>
    </div>
    <!-- end: input -->


    <!-- begin: input -->
    <div class="col-md-4">
        <div class="form-group">
            <label for="female_number">{!! __('children.female_number') !!}</label>
            <input type="number" id="female_number" name="female_number" class="form-control" autocomplete="off"
                placeholder="{!! __('children.enter_female_number') !!}">
            <span class="text text-danger">
                <strong id="female_number_error"></strong>
            </span>
        </div>
    </div>
    <!-- end: input -->

</div>
<!-- end: number_of_people_including_mother , male_number , female_number -->




<!--------------------------------------------------------------------------------------------------------------------------------------------------------->
<!-------------------------------------------------------- Father ----------------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------------------------------------------------------------------------------->

<h4 class="text-info"> {!! __('children.child_father') !!}</h4>
<hr>

<!-- begin: father_full_name_ar,father_full_name_en  -->
<div class="row">
    <!-- begin: input -->
    <div class="col-md-6">
        <div class="form-group">
            <label for="father_full_name_ar">{!! __('children.father_full_name_ar') !!}</label>
            <input type="text" id="father_full_name_ar" name="father_full_name_ar" class="form-control"
                autocomplete="off" placeholder="{!! __('children.enter_father_full_name_ar') !!}">
            <span class="text text-danger">
                <strong id="father_full_name_ar_error"></strong>
            </span>
        </div>
    </div>
    <!-- end: input -->

    <!-- begin: input -->
    <div class="col-md-6">
        <div class="form-group">
            <label for="father_full_name_en">{!! __('children.father_full_name_en') !!}</label>
            <input type="text" id="father_full_name_en" name="father_full_name_en" class="form-control"
                autocomplete="off" placeholder="{!! __('children.enter_father_full_name_en') !!}">
            <span class="text text-danger">
                <strong id="father_full_name_en_error"></strong>
            </span>
        </div>
    </div>
    <!-- end: input -->
</div>
<!-- end: father_full_name_ar,father_full_name_en -->

<!-- begin: father_personal_id , father_date_of_death , father_respon_of_death -->
<div class="row">

    <!-- begin: input -->
    <div class="col-md-4">
        <div class="form-group">
            <label for="father_personal_id">{!! __('children.father_personal_id') !!}</label>
            <input type="text" id="father_personal_id" name="father_personal_id" class="form-control"
                autocomplete="off" placeholder="{!! __('children.enter_father_personal_id') !!}">
            <span class="text text-danger">
                <strong id="father_personal_id_error"></strong>
            </span>
        </div>
    </div>
    <!-- end: input -->

    <!-- begin: input -->
    <div class="col-md-4">
        <div class="form-group">
            <label for="father_date_of_death">{!! __('children.father_date_of_death') !!}</label>
            <input type="date" id="father_date_of_death" name="father_date_of_death" class="form-control"
                autocomplete="off" placeholder="{!! __('children.enter_father_date_of_death') !!}">
            <span class="text text-danger">
                <strong id="father_date_of_death_error"></strong>
            </span>
        </div>
    </div>
    <!-- end: input -->

    <!-- begin: input -->
    <div class="col-md-4">
        <div class="form-group">
            <label for="father_respon_of_death">{!! __('children.father_respon_of_death') !!}</label>
            <select id="father_respon_of_death" name="father_respon_of_death" class="form-control">
                <option value="" selected>{!! __('children.select_from_list') !!}</option>
                <option value="illness">{!! __('children.illness') !!}</option>
                <option value="martyr">{!! __('children.martyr') !!}</option>
            </select>
            <span class="text text-danger">
                <strong id="father_respon_of_death_error"></strong>
            </span>
        </div>
    </div>
    <!-- end: input -->
</div>
<!-- end:  father_personal_id, father_date_of_death , father_respon_of_death -->



<!--------------------------------------------------------------------------------------------------------------------------------------------------------->
<!-------------------------------------------------------- Mother ----------------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------------------------------------------------------------------------------->

<h4 class="text-info"> {!! __('children.child_mother') !!}</h4>
<hr>

<!-- begin: mother_full_name_ar,mother_full_name_en  -->
<div class="row">
    <!-- begin: input -->
    <div class="col-md-6">
        <div class="form-group">
            <label for="mother_full_name_ar">{!! __('children.mother_full_name_ar') !!}</label>
            <input type="text" id="mother_full_name_ar" name="mother_full_name_ar" class="form-control"
                autocomplete="off" placeholder="{!! __('children.enter_mother_full_name_ar') !!}">
            <span class="text text-danger">
                <strong id="mother_full_name_ar_error"></strong>
            </span>
        </div>
    </div>
    <!-- end: input -->

    <!-- begin: input -->
    <div class="col-md-6">
        <div class="form-group">
            <label for="mother_full_name_en">{!! __('children.mother_full_name_en') !!}</label>
            <input type="text" id="mother_full_name_en" name="mother_full_name_en" class="form-control"
                autocomplete="off" placeholder="{!! __('children.enter_mother_full_name_en') !!}">
            <span class="text text-danger">
                <strong id="mother_full_name_en_error"></strong>
            </span>
        </div>
    </div>
    <!-- end: input -->
</div>
<!-- end: mother_full_name_ar,,mother_full_name_en,  -->



<!-- begin: mother_personal_id  , mother_date_of_death , is_mother_alive ,is_mother_the_guardian-->
<div class="row">

    <!-- begin: input -->
    <div class="col-md-3">
        <div class="form-group">
            <label for="mother_personal_id">{!! __('children.mother_personal_id') !!}</label>
            <input type="text" id="mother_personal_id" name="mother_personal_id" class="form-control"
                autocomplete="off" placeholder="{!! __('children.enter_mother_personal_id') !!}">
            <span class="text text-danger">
                <strong id="mother_personal_id_error"></strong>
            </span>
        </div>
    </div>
    <!-- end: input -->
    <!-- begin: input -->
    <div class="col-md-3">
        <div class="form-group">
            <label for="mother_date_of_death">{!! __('children.mother_date_of_death') !!}</label>
            <input type="date" id="mother_date_of_death" name="mother_date_of_death" class="form-control"
                autocomplete="off" placeholder="{!! __('children.enter_mother_date_of_death') !!}">
            <span class="text text-danger">
                <strong id="mother_date_of_death_error"></strong>
            </span>
        </div>
    </div>
    <!-- end: input -->

    <!-- begin: input -->
    <div class="col-md-3">
        <div class="form-group">
            <label for="is_mother_alive">{!! __('children.is_mother_alive') !!}</label>
            <select id="is_mother_alive" name="is_mother_alive" class="form-control">
                <option value="" selected>{!! __('children.select_from_list') !!}</option>
                <option value="0">{!! __('children.no') !!}</option>
                <option value="1">{!! __('children.yes') !!}</option>
            </select>
            <span class="text text-danger">
                <strong id="is_mother_alive_error"></strong>
            </span>
        </div>
    </div>
    <!-- end: input -->

    <!-- begin: input -->
    <div class="col-md-3">
        <div class="form-group">
            <label for="is_mother_the_guardian">{!! __('children.is_mother_the_guardian') !!}</label>
            <select id="is_mother_the_guardian" name="is_mother_the_guardian" class="form-control">
                <option value="" selected>{!! __('children.select_from_list') !!}</option>
                <option value="0">{!! __('children.no') !!}</option>
                <option value="1">{!! __('children.yes') !!}</option>
            </select>
            <span class="text text-danger">
                <strong id="is_mother_the_guardian_error"></strong>
            </span>
        </div>
    </div>
    <!-- end: input -->
</div>
<!-- end: mother_personal_id, mother_date_of_death , father_respon_of_death ,is_mother_the_guardian-->



<div class="row  {!! Lang() == 'ar' ? 'pull-left' : 'pull-right' !!}">
    <div class="col-md-12">
        <button type="button" class="prev-step btn btn-info btn-md  btn-glow">{!! __('children.previous') !!}</button>
        <button type="button" class="next-step btn btn-primary btn-md  btn-glow">{!! __('children.next') !!}</button>
        {{-- <button type="submit" class="btn btn-primary btn-md  btn-glow">{!! __('children.save') !!}</button> --}}
    </div>
</div>
