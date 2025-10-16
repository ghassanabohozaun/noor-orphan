<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\ChildCreateRequest;
use App\Http\Requests\Dashboard\ChildUpdateRequest;
use App\Models\Child;
use App\Models\City;
use App\Services\Dashboard\ChildService;
use App\Services\Dashboard\CityService;
use App\Services\Dashboard\GovernorateService;
use Illuminate\Http\Request;
use PDF;

class ChildernController extends Controller
{
    protected $childService, $governorateService, $cityService;
    // __construct
    public function __construct(ChildService $childService, GovernorateService $governorateService, CityService $cityService)
    {
        $this->childService = $childService;
        $this->governorateService = $governorateService;
        $this->cityService = $cityService;
    }

    // index
    public function index()
    {
        $title = __('children.show_all_children');
        $governorates = $this->governorateService->getAllGovernoratesWithoutRelations();
        $cities = $this->cityService->getAllCitiesWithoutRelation();
        return view('dashboard.children.index', compact('title', 'governorates', 'cities'));
    }

    // get All
    public function getAll(Request $request)
    {
        return $this->childService->getAll($request);
    }

    // create
    public function create()
    {
        $title = __('children.create_new_child');
        $governorates = $this->governorateService->getAllGovernoratesWithoutRelations();
        $cities = $this->cityService->getAllCitiesWithoutRelation();
        return view('dashboard.children.create', compact('title', 'governorates', 'cities'));
    }

    // store
    public function store(ChildCreateRequest $request)
    {
        $childData = [
            'first_name' => ['ar' => $request->first_name_ar, 'en' => $request->first_name_en],
            'father_name' => ['ar' => $request->father_name_ar, 'en' => $request->father_name_en],
            'grand_father_name' => ['ar' => $request->grand_father_name_ar, 'en' => $request->grand_father_name_en],
            'family_name' => ['ar' => $request->family_name_ar, 'en' => $request->family_name_en],
            'password' => $request->password,
            'personal_id' => $request->personal_id,
            'birthday' => $request->birthday,
            'classification' => $request->classification,
            'gender' => $request->gender,
            'class' => $request->class,
            'health_status' => $request->health_status,
            'disease_clarification' => $request->disease_clarification,
            'governoate_id' => $request->governoate_id,
            'city_id' => $request->city_id,
            'address_details' => $request->address_details,
            'authorized_contact_number' => $request->authorized_contact_number,
            'backup_contact_number' => $request->backup_contact_number,
            'whatsApp_number' => $request->whatsApp_number,
        ];

        $childFamilyData = [
            'number_of_people_including_mother' => $request->number_of_people_including_mother,
            'male_number' => $request->male_number,
            'female_number' => $request->female_number,
        ];

        $childFatherData = [
            'father_full_name' => ['ar' => $request->father_full_name_ar, 'en' => $request->father_full_name_en],
            'father_personal_id' => $request->father_personal_id,
            'father_date_of_death' => $request->father_date_of_death,
            'father_respon_of_death' => $request->father_respon_of_death,
        ];

        $childMotherData = [
            'mother_full_name' => ['ar' => $request->mother_full_name_ar, 'en' => $request->mother_full_name_en],
            'mother_personal_id' => $request->mother_personal_id,
            'mother_date_of_death' => $request->mother_date_of_death,
            'is_mother_alive' => $request->is_mother_alive,
            'is_mother_the_guardian' => $request->is_mother_the_guardian,
        ];

        $childGuaridanData = [
            'guardian_full_name' => ['ar' => $request->guardian_full_name_ar, 'en' => $request->guardian_full_name_en],
            'guardian_personal_id' => $request->guardian_personal_id,
            'guardian_birthday' => $request->guardian_birthday,
            'why_not_the_mother_is_guardian' => $request->why_not_the_mother_is_guardian,
            'guardian_relationship_with_the_child' => $request->guardian_relationship_with_the_child,
        ];

        $childFileData = [
            'picture_of_the_orphan_child' => $request->picture_of_the_orphan_child,
            'orphan_child_birth_certificate' => $request->orphan_child_birth_certificate,
            'father_death_certificate' => $request->father_death_certificate,
            'guardian_personal_id_photo' => $request->guardian_personal_id_photo,
        ];

        $child = $this->childService->createChild($childData, $childFamilyData, $childFatherData, $childMotherData, $childGuaridanData, $childFileData);

        if (!$child) {
            return response()->json(['status' => false], 500);
        }

        $ChildID = $child->id;
        return response()->json(['status' => true, 'ChildID' => $ChildID], 201);

    }

    // show
    public function show(string $id)
    {
        $child = $this->childService->getChildWithRelations($id);
        if (!$child) {
            flash()->error(__('general.no_record_found'));
            return redirect()->route('dashboard.children.index');
        }

        $title = __('children.show_child');
        $governoates = $this->governorateService->getAllGovernoratesWithoutRelations();
        $cities = $this->cityService->getAllCitiesWithoutRelation();
        $childID = $id;
        return view('dashboard.children.show', compact('title', 'childID', 'child'));
    }

    // edit
    public function edit(string $id)
    {
        $child = $this->childService->getChildWithRelations($id);
        if (!$child) {
            flash()->error(__('general.no_record_found'));
            return redirect()->route('dashboard.children.index');
        }
        $title = __('children.update_child');
        $governorates = $this->governorateService->getAllGovernoratesWithoutRelations();
        $cities = $this->cityService->getAllCitiesWithoutRelation();
        $childID = $id;
        return view('dashboard.children.edit', compact('title', 'childID', 'child', 'governorates', 'cities'));
    }

    // update
    public function update(ChildUpdateRequest $request, string $id)
    {
        $myChild = $this->childService->getChild($id);
        if (!$myChild) {
            return response()->json(['status' => false], 500);
        }

        $childData = [
            'first_name' => ['ar' => $request->first_name_ar, 'en' => $request->first_name_en],
            'father_name' => ['ar' => $request->father_name_ar, 'en' => $request->father_name_en],
            'grand_father_name' => ['ar' => $request->grand_father_name_ar, 'en' => $request->grand_father_name_en],
            'family_name' => ['ar' => $request->family_name_ar, 'en' => $request->family_name_en],
            'password' => $request->password == null ? $myChild->password : $request->password,
            'personal_id' => $request->personal_id,
            'birthday' => $request->birthday,
            'classification' => $request->classification,
            'gender' => $request->gender,
            'class' => $request->class,
            'health_status' => $request->health_status,
            'disease_clarification' => $request->disease_clarification,
            'governoate_id' => $request->governoate_id,
            'city_id' => $request->city_id,
            'address_details' => $request->address_details,
            'authorized_contact_number' => $request->authorized_contact_number,
            'backup_contact_number' => $request->backup_contact_number,
            'whatsApp_number' => $request->whatsApp_number,
        ];

        $childFamilyData = [
            'number_of_people_including_mother' => $request->number_of_people_including_mother,
            'male_number' => $request->male_number,
            'female_number' => $request->female_number,
        ];

        $childFatherData = [
            'father_full_name' => ['ar' => $request->father_full_name_ar, 'en' => $request->father_full_name_en],
            'father_personal_id' => $request->father_personal_id,
            'father_date_of_death' => $request->father_date_of_death,
            'father_respon_of_death' => $request->father_respon_of_death,
        ];

        $childMotherData = [
            'mother_full_name' => ['ar' => $request->mother_full_name_ar, 'en' => $request->mother_full_name_en],
            'mother_personal_id' => $request->mother_personal_id,
            'mother_date_of_death' => $request->mother_date_of_death,
            'is_mother_alive' => $request->is_mother_alive,
            'is_mother_the_guardian' => $request->is_mother_the_guardian,
        ];

        $childGuaridanData = [
            'guardian_full_name' => ['ar' => $request->guardian_full_name_ar, 'en' => $request->guardian_full_name_en],
            'guardian_personal_id' => $request->guardian_personal_id,
            'guardian_birthday' => $request->guardian_birthday,
            'why_not_the_mother_is_guardian' => $request->why_not_the_mother_is_guardian,
            'guardian_relationship_with_the_child' => $request->guardian_relationship_with_the_child,
        ];

        $childFileData = [
            'picture_of_the_orphan_child' => $request->picture_of_the_orphan_child,
            'orphan_child_birth_certificate' => $request->orphan_child_birth_certificate,
            'father_death_certificate' => $request->father_death_certificate,
            'guardian_personal_id_photo' => $request->guardian_personal_id_photo,
        ];

        $ChildID = $id;

        $child = $this->childService->updateChild($ChildID, $myChild, $childData, $childFamilyData, $childFatherData, $childMotherData, $childGuaridanData, $childFileData);

        if (!$child) {
            return response()->json(['status' => false], 500);
        }
        return response()->json(['status' => true, 'ChildID' => $ChildID], 200);
    }

    // destroy
    public function destroy(string $id)
    {
        $child = $this->childService->destoryChild($id);
        if (!$child) {
            return response()->json(['status' => false], 500);
        }
        return response()->json(['status' => true], 200);
    }

    // changeStatus
    public function changeStatus(Request $request)
    {
        if ($request->ajax()) {
            $child = $this->childService->changeStatus($request->id, $request->statusSwitch);
            if (!$child) {
                return response()->json(['status' => false], 500);
            }
            return response()->json(['status' => true], 200);
        }
    }

    // download pdf
    public function downloadPDF($id)
    {
        $child = $this->childService->getChildWithRelations($id);

        $data = [
            'picture_of_the_orphan_child' => public_path('uploads/children/' . $child->childFile->picture_of_the_orphan_child),
            'image' => public_path('assets/dashbaord/images/pdf-logo.png'),
            'child' => $child,
        ];

        $pdf = PDF::loadView('dashboard.children.pdf', $data);

        return $pdf->stream($child->childFullName() . '.pdf');
        //  return $pdf->stream($child->childFullName().'.pdf');
    }

    // get cities
    public function getCities($governorate_id)
    {
        $cities = City::where('governorate_id', $governorate_id)->pluck('name', 'id');
        return response()->json($cities);
    }

    public function checkEmailUniqueness(Request $request)
    {
        $isUnique = !Child::where('personal_id', $request->personal_id)->exists();
        return response()->json($isUnique);
    }
}
