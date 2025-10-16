<h5 class="mb-1">{!! __('children.step') !!} 3 : {!! __('children.guardian_info') !!}</h5>
<hr />

<!-- begin: guardian_full_name_ar,guardian_full_name_en,guardian_personal_id  -->
<div class="row">
    <!-- begin: input -->
    <div class="col-md-4">
        <div class="form-group">
            <label for="guardian_full_name_ar">{!! __('children.guardian_full_name_ar') !!}</label>
            <input type="text" id="guardian_full_name_ar" name="guardian_full_name_ar" class="form-control"
                autocomplete="off" placeholder="{!! __('children.enter_guardian_full_name_ar') !!}">
            <span class="text text-danger">
                <strong id="guardian_full_name_ar_error"></strong>
            </span>
        </div>
    </div>
    <!-- end: input -->

    <!-- begin: input -->
    <div class="col-md-4">
        <div class="form-group">
            <label for="guardian_full_name_en">{!! __('children.guardian_full_name_en') !!}</label>
            <input type="text" id="guardian_full_name_en" name="guardian_full_name_en" class="form-control"
                autocomplete="off" placeholder="{!! __('children.enter_guardian_full_name_en') !!}">
            <span class="text text-danger">
                <strong id="guardian_full_name_en_error"></strong>
            </span>
        </div>
    </div>
    <!-- end: input -->


    <!-- begin: input -->
    <div class="col-md-4">
        <div class="form-group">
            <label for="guardian_personal_id">{!! __('children.guardian_personal_id') !!}</label>
            <input type="text" id="guardian_personal_id" name="guardian_personal_id" class="form-control"
                autocomplete="off" placeholder="{!! __('children.enter_guardian_personal_id') !!}">
            <span class="text text-danger">
                <strong id="guardian_personal_id_error"></strong>
            </span>
        </div>
    </div>
    <!-- end: input -->
</div>
<!-- end: guardian_full_name_ar,,guardian_full_name_en,,guardian_personal_id  -->


<!-- begin: guardian_birthday , why_not_the_mother_is_guardian  ,guardian_relationship_with_the_child -->
<div class="row">

    <!-- begin: input -->
    <div class="col-md-4">
        <div class="form-group">
            <label for="guardian_birthday">{!! __('children.guardian_birthday') !!}</label>
            <input type="date" id="guardian_birthday" name="guardian_birthday" class="form-control"
                autocomplete="off" placeholder="{!! __('children.enter_guardian_birthday') !!}">
            <span class="text text-danger">
                <strong id="guardian_birthday_error"></strong>
            </span>
        </div>
    </div>
    <!-- end: input -->

    <!-- begin: input -->
    <div class="col-md-4">
        <div class="form-group">
            <label for="why_not_the_mother_is_guardian">{!! __('children.why_not_the_mother_is_guardian') !!}</label>
            <select id="why_not_the_mother_is_guardian" name="why_not_the_mother_is_guardian" class="form-control">
                <option value="" selected>{!! __('children.select_from_list') !!}</option>
                <option value="divorced">{!! __('children.divorced') !!}</option>
                <option value="abandoned">{!! __('children.abandoned') !!}</option>
                <option value="sick">{!! __('children.sick') !!}</option>
                <option value="etc">{!! __('children.etc') !!}</option>
            </select>
            <span class="text text-danger">
                <strong id="why_not_the_mother_is_guardian_error"></strong>
            </span>
        </div>
    </div>
    <!-- end: input -->

    <!-- begin: input -->
    <div class="col-md-4">
        <div class="form-group">
            <label for="guardian_relationship_with_the_child">{!! __('children.guardian_relationship_with_the_child') !!}</label>
            <select id="guardian_relationship_with_the_child" name="guardian_relationship_with_the_child"
                class="form-control">
                <option value="" selected>{!! __('children.select_from_list') !!}</option>
                <option value="mother">{!! __('children.mother') !!}</option>
                <option value="uncle">{!! __('children.uncle') !!}</option>
                <option value="aunt">{!! __('children.aunt') !!}</option>
                <option value="grandfather">{!! __('children.grandfather') !!}</option>
                <option value="grandmother">{!! __('children.grandmother') !!}</option>
                <option value="brother">{!! __('children.brother') !!}</option>
                <option value="sister">{!! __('children.sister') !!}</option>
                <option value="uncle2">{!! __('children.uncle2') !!}</option>
                <option value="aunt2">{!! __('children.aunt2') !!}</option>
            </select>
            <span class="text text-danger">
                <strong id="guardian_relationship_with_the_child_error"></strong>
            </span>
        </div>
    </div>
    <!-- end: input -->
</div>
<!-- end:  father_date_of_death , why_not_the_mother_is_guardian ,guardian_relationship_with_the_child -->



<div class="row  {!! Lang() == 'ar' ? 'pull-left' : 'pull-right' !!}">
    <div class="col-md-12">
        <button type="button" class="prev-step btn btn-info btn-md  btn-glow">{!! __('children.previous') !!}</button>
        <button type="button" class="next-step btn btn-primary btn-md  btn-glow">{!! __('children.next') !!}</button>
        {{-- <button type="submit" class="btn btn-primary btn-md  btn-glow">{!! __('children.save') !!}</button> --}}
    </div>
</div>
