<ul class="list-group">

    <div class="row">

        <div class="col-lg-3">
            <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">
                    <p> {!! __('children.picture_of_the_orphan_child') !!}:
                </strong>&nbsp;
                </p>
                <div class="position-relative d-inline-block mr-2 mb-2">

                    <img src="{!! asset('uploads/children/' . $child->childFile->picture_of_the_orphan_child) !!}" alt="profile_image"
                        class="w-100 border-radius-lg shadow-sm img-fluid img-thumbnail round-md"
                        style="max-height: 220px" />

                    <a href="{!! asset('uploads/children/' . $child->childFile->picture_of_the_orphan_child) !!}" target="_blank" class="badge badge-sm bg-info position-absolute"
                        style="top: 5px; left: 6px;">
                        {!! __('general.download') !!}
                    </a>
                </div>
            </li>

        </div>

        <div class="col-lg-3">
            <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">
                    <p> {!! __('children.orphan_child_birth_certificate') !!}:
                </strong>&nbsp;
                </p>
                <div class="position-relative d-inline-block mr-2 mb-2">

                    <img src="{!! asset('uploads/children/' . $child->childFile->orphan_child_birth_certificate) !!}" alt="profile_image"
                        class="w-100 border-radius-lg shadow-sm shadow-sm img-fluid img-thumbnail round-md"
                        style="max-height: 220px" />

                    <a href="{!! asset('uploads/children/' . $child->childFile->orphan_child_birth_certificate) !!}" target="_blank" class="badge badge-sm bg-info position-absolute"
                        style="top: 5px; left: 6px;">
                        {!! __('general.download') !!}
                    </a>
                </div>
            </li>

        </div>

        <div class="col-lg-3">
            <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">
                    <p> {!! __('children.father_death_certificate') !!}:
                </strong>&nbsp;
                </p>
                <div class="position-relative d-inline-block mr-2 mb-2">

                    <img src="{!! asset('uploads/children/' . $child->childFile->father_death_certificate) !!}" alt="profile_image"
                        class="w-100 border-radius-lg shadow-sm shadow-sm img-fluid img-thumbnail round-md "
                        style="max-height: 220px" />

                    <a href="{!! asset('uploads/children/' . $child->childFile->father_death_certificate) !!}" target="_blank" class="badge badge-sm bg-info position-absolute"
                        style="top: 5px; left: 6px;">
                        {!! __('general.download') !!}
                    </a>
                </div>
            </li>
        </div>

        <div class="col-lg-3">
            <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">
                    <p> {!! __('children.guardian_personal_id_photo') !!}:
                </strong>&nbsp;
                </p>
                <div class="position-relative d-inline-block mr-2 mb-2">

                    <img src="{!! asset('uploads/children/' . $child->childFile->guardian_personal_id_photo) !!}" alt="profile_image"
                        class="w-100 border-radius-lg shadow-sm shadow-sm img-fluid img-thumbnail round-md"
                        style="max-height: 220px" />

                    <a href="{!! asset('uploads/children/' . $child->childFile->guardian_personal_id_photo) !!}" target="_blank" class="badge badge-sm bg-info position-absolute"
                        style="top: 5px; left: 6px;">
                        {!! __('general.download') !!}
                    </a>
                </div>
            </li>

        </div>

    </div>

</ul>
