<h5 class="mb-1">{!! __('children.step') !!} 4 : {!! __('children.files') !!}</h5>
<hr />


<!-- begin: picture_of_the_orphan_child ,orphan_child_birth_certificate, father_death_certificate,guardian_personal_id_photo-->
<div class="row">
    <!-- begin: input -->
    <div class="col-md-3">
        <fieldset class="form-group">
            <label for="picture_of_the_orphan_child">{!! __('children.picture_of_the_orphan_child') !!}
            </label>

            <input type="file"class="form-control" id="picture_of_the_orphan_child" name="picture_of_the_orphan_child"
                accept="image/*" />

            @if ($child->childFile->picture_of_the_orphan_child)
                <img id="picture_of_the_orphan_child_preview" src="{!! asset('/uploads/children/' . $child->childFile->picture_of_the_orphan_child) !!}" alt="{!! __('children.picture_of_the_orphan_child') !!}"
                    style="height: fit-content; max-height: 200px"
                    class="picture_of_the_orphan_child_preview w-100 shadow-sm img-fluid img-thumbnail round-md mt-1" />
            @endif

            <span class="text text-danger">
                <strong id="picture_of_the_orphan_child_error"></strong>
            </span>
        </fieldset>
    </div>
    <!-- end: input -->

    <!-- begin: input -->
    <div class="col-md-3">
        <fieldset class="form-group">
            <label for="orphan_child_birth_certificate">{!! __('children.orphan_child_birth_certificate') !!}
            </label>
            <input type="file" class="form-control" id="orphan_child_birth_certificate"
                name="orphan_child_birth_certificate">

            @if ($child->childFile->orphan_child_birth_certificate)
                <img id="orphan_child_birth_certificate_preview" src="{!! asset('/uploads/children/' . $child->childFile->orphan_child_birth_certificate) !!}"
                    alt="{!! __('children.orphan_child_birth_certificate') !!}" style="height: fit-content; max-height: 200px"
                    class="orphan_child_birth_certificate_preview w-100 shadow-sm img-fluid img-thumbnail round-md mt-1" />
            @endif

            <span class="text text-danger">
                <strong id="orphan_child_birth_certificate_error"></strong>
            </span>
        </fieldset>
    </div>
    <!-- end: input -->

    <!-- begin: input -->
    <div class="col-md-3">
        <fieldset class="form-group">
            <label for="father_death_certificate">{!! __('children.father_death_certificate') !!}
            </label>
            <input type="file" class="form-control" id="father_death_certificate" name="father_death_certificate">

            @if ($child->childFile->father_death_certificate)
                <img id="father_death_certificate_preview" src="{!! asset('/uploads/children/' . $child->childFile->father_death_certificate) !!}" alt="{!! __('children.father_death_certificate') !!}"
                    style="height: fit-content; max-height: 200px"
                    class="father_death_certificate_preview w-100 shadow-sm img-fluid img-thumbnail round-md mt-1" />
            @endif


            <span class="text text-danger">
                <strong id="father_death_certificate_error"></strong>
            </span>
        </fieldset>
    </div>
    <!-- end: input -->

    <!-- begin: input -->
    <div class="col-md-3">
        <fieldset class="form-group">
            <label for="guardian_personal_id_photo">{!! __('children.guardian_personal_id_photo') !!}
            </label>
            <input type="file" class="form-control" id="guardian_personal_id_photo"
                name="guardian_personal_id_photo">

            @if ($child->childFile->guardian_personal_id_photo)
                <img id="guardian_personal_id_photo_preview" src="{!! asset('/uploads/children/' . $child->childFile->guardian_personal_id_photo) !!}"
                    alt="{!! __('children.guardian_personal_id_photo') !!}" style="height: fit-content; max-height: 200px"
                    class="guardian_personal_id_photo_preview w-100 shadow-sm img-fluid img-thumbnail round-md mt-1" />
            @endif

            <span class="text text-danger">
                <strong id="guardian_personal_id_photo_error"></strong>
            </span>
        </fieldset>
    </div>
    <!-- end: input -->

</div>
<!-- end: picture_of_the_orphan_child ,orphan_child_birth_certificate, father_death_certificate,guardian_personal_id_photo -->



<div class="row  {!! Lang() == 'ar' ? 'pull-left' : 'pull-right' !!}">
    <div class="col-md-12">
        <button type="button" class="prev-step btn btn-info btn-sm  btn-glow">{!! __('children.previous') !!}</button>
        <button type="button" class="next-step btn btn-primary btn-sm  btn-glow">{!! __('children.next') !!}</button>
    </div>
</div>
