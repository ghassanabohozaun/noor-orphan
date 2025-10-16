<h5 class="mb-1">{!! __('children.step') !!} 3 : {!! __('children.guardian_info') !!}</h5>
<hr />

<!-- begin: guardian_full_name_ar,guardian_full_name_en,guardian_personal_id  -->
<div class="row">
    <!-- begin: input -->
    <div class="col-md-4">
        <div class="form-group">
            <label for="guardian_full_name_ar">{!! __('children.guardian_full_name_ar') !!}</label>
            <input type="text" id="guardian_full_name_ar" name="guardian_full_name_ar" class="form-control"
                autocomplete="off" placeholder="{!! __('children.enter_guardian_full_name_ar') !!}" value="{!! $child->childGuardian->getTranslation('guardian_full_name', 'ar') !!}">
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
                autocomplete="off" placeholder="{!! __('children.enter_guardian_full_name_en') !!}" value="{!! $child->childGuardian->getTranslation('guardian_full_name', 'en') !!}">
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
                autocomplete="off" placeholder="{!! __('children.enter_guardian_personal_id') !!}" value="{!! $child->childGuardian->guardian_personal_id !!}">
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
                autocomplete="off" placeholder="{!! __('children.enter_guardian_birthday') !!}" value="{!! $child->childGuardian->guardian_birthday !!}">
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
                <option value="divorced" {!! $child->childGuardian->why_not_the_mother_is_guardian == 'divorced' ? 'selected' : '' !!}>{!! __('children.divorced') !!}</option>
                <option value="abandoned" {!! $child->childGuardian->why_not_the_mother_is_guardian == 'abandoned' ? 'selected' : '' !!}>{!! __('children.abandoned') !!}</option>
                <option value="sick" {!! $child->childGuardian->why_not_the_mother_is_guardian == 'sick' ? 'selected' : '' !!}>{!! __('children.sick') !!}</option>
                <option value="etc" {!! $child->childGuardian->why_not_the_mother_is_guardian == 'etc' ? 'selected' : '' !!}>{!! __('children.etc') !!}</option>
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
                <option value="mother" {!! $child->childGuardian->guardian_relationship_with_the_child == 'mother' ? 'selected' : '' !!}>{!! __('children.mother') !!}</option>
                <option value="uncle" {!! $child->childGuardian->guardian_relationship_with_the_child == 'uncle' ? 'selected' : '' !!}>{!! __('children.uncle') !!}</option>
                <option value="aunt" {!! $child->childGuardian->guardian_relationship_with_the_child == 'aunt' ? 'selected' : '' !!}>{!! __('children.aunt') !!}</option>
                <option value="grandfather" {!! $child->childGuardian->guardian_relationship_with_the_child == 'grandfather' ? 'selected' : '' !!}>{!! __('children.grandfather') !!}</option>
                <option value="grandmother" {!! $child->childGuardian->guardian_relationship_with_the_child == 'grandmother' ? 'selected' : '' !!}>{!! __('children.grandmother') !!}</option>
                <option value="brother" {!! $child->childGuardian->guardian_relationship_with_the_child == 'brother' ? 'selected' : '' !!}>{!! __('children.brother') !!}</option>
                <option value="sister" {!! $child->childGuardian->guardian_relationship_with_the_child == 'sister' ? 'selected' : '' !!}>{!! __('children.sister') !!}</option>
                <option value="uncle2" {!! $child->childGuardian->guardian_relationship_with_the_child == 'uncle2' ? 'selected' : '' !!}>{!! __('children.uncle2') !!}</option>
                <option value="aunt2" {!! $child->childGuardian->guardian_relationship_with_the_child == 'aunt2' ? 'selected' : '' !!}>{!! __('children.aunt2') !!}</option>
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
        <button type="button" class="prev-step btn btn-info btn-sm  btn-glow">{!! __('children.previous') !!}</button>
        <button type="button" class="next-step btn btn-primary btn-sm  btn-glow">{!! __('children.next') !!}</button>
        {{-- <button type="submit" class="btn btn-primary btn-md  btn-glow">{!! __('children.save') !!}</button> --}}
    </div>
</div>
