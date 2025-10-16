<hr class="horizontal gray-light my-4">
<ul class="list-group">

    <div class="row">

        <div class="col-lg-3">
            <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">
                    <p> {!! __('children.picture_of_the_orphan_child') !!}:
                </strong>&nbsp;
                </p>

                @if ($child->childFile->picture_of_the_orphan_child)
                    <img id="picture_of_the_orphan_child_preview" src="{!! asset('/uploads/children/' . $child->childFile->picture_of_the_orphan_child) !!}"
                        alt="{!! __('children.picture_of_the_orphan_child') !!}"
                        class="picture_of_the_orphan_child_preview mt-1  img-fluid img-thumbnail round-md " />
                @endif

            </li>

        </div>

        <div class="col-lg-3">
            <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">
                    <p> {!! __('children.orphan_child_birth_certificate') !!}:
                </strong>&nbsp;
                </p>

                @if ($child->childFile->picture_of_the_orphan_child)
                    <img id="orphan_child_birth_certificate_preview" src="{!! asset('/uploads/children/' . $child->childFile->orphan_child_birth_certificate) !!}"
                        alt="{!! __('children.orphan_child_birth_certificate') !!}"
                        class="orphan_child_birth_certificate_preview mt-1  img-fluid img-thumbnail round-md " />
                @endif

            </li>

        </div>

        <div class="col-lg-3">
            <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">
                    <p> {!! __('children.father_death_certificate') !!}:
                </strong>&nbsp;
                </p>

                @if ($child->childFile->father_death_certificate)
                    <img id="father_death_certificate_preview" src="{!! asset('/uploads/children/' . $child->childFile->father_death_certificate) !!}"
                        alt="{!! __('children.father_death_certificate') !!}"
                        class="father_death_certificate_preview mt-1  img-fluid img-thumbnail round-md " />
                @endif

            </li>
        </div>

        <div class="col-lg-3">
            <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">
                    <p> {!! __('children.guardian_personal_id_photo') !!}:
                </strong>&nbsp;
                </p>

                @if ($child->childFile->guardian_personal_id_photo)
                    <img id="guardian_personal_id_photo_preview" src="{!! asset('/uploads/children/' . $child->childFile->guardian_personal_id_photo) !!}"
                        alt="{!! __('children.guardian_personal_id_photo') !!}"
                        class="guardian_personal_id_photo_preview mt-1  img-fluid img-thumbnail round-md " />
                @endif

            </li>

        </div>


    </div>

</ul>
