<!-- begin: basic info div -->
<div class="row">
    <div class="col-lg-12">

        <ul class="nav nav-tabs mt-3">
            <li class="nav-item">
                <a class="nav-link active" id="base-child-info" data-toggle="tab" aria-controls="child-info"
                    href="#child-info" aria-expanded="true">{!! __('children.child_info') !!}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="base-parent-info" data-toggle="tab" aria-controls="parent-info"
                    href="#parent-info" aria-expanded="false">{!! __('children.parents_info') !!}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="base-guardian-info" data-toggle="tab" aria-controls="guardian-info"
                    href="#guardian-info" aria-expanded="false">{!! __('children.guardian_info') !!}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="base-file-info" data-toggle="tab" aria-controls="file-info" href="#file-info"
                    aria-expanded="false">{!! __('children.files') !!}</a>
            </li>
        </ul>

        <div class="tab-content px-1 pt-1">
            <div role="tabpanel" class="tab-pane active" id="child-info" aria-expanded="true"
                aria-labelledby="base-child-info">

                @include('dashboard.children.show._tabs.child-info')
            </div>
            <div class="tab-pane" id="parent-info" aria-labelledby="base-parent-info">
                @include('dashboard.children.show._tabs..parents-info')
            </div>
            <div class="tab-pane" id="guardian-info" aria-labelledby="base-guardian-info">
                @include('dashboard.children.show._tabs..guardian-info')
            </div>

            <div class="tab-pane" id="file-info" aria-labelledby="base-file-info">
                @include('dashboard.children.show._tabs.file-info')
            </div>
        </div>

    </div>
</div>
<!-- end: basic info div -->
