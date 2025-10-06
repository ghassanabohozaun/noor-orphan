<?php

namespace App\Repositories\Dashboard;

use App\Models\Child;
use App\Models\ChildFamily;
use App\Models\ChildFather;
use App\Models\ChildFile;
use App\Models\ChildGuardian;
use App\Models\ChildMother;

class ChildRepository
{
    // get child
    public function getChild($id)
    {
        return Child::find($id);
    }

    // get child by personal id
    public function getChildByPersonalID($personal_id)
    {
        return Child::where('personal_id', $personal_id)->firstOrFail();
    }
    // get child with relation
    public function getChildWithRelations($id)
    {
        return Child::with(['childFile', 'childFamily', 'childFather', 'childMother', 'childGuardian', 'childFile', 'governorate', 'city'])->find($id);
    }

    // get child with relation
    public function getChildWithRelations2($id)
    {
        return Child::with(['childFile'])->find($id);
    }

    // get children
    public function getChildren()
    {
        return Child::with(['childFile', 'childFamily', 'childFather', 'childMother', 'childGuardian', 'childFile', 'governorate', 'city'])->latest()->limit(10)->get();
    }

    // create child
    public function createChild($data)
    {
        return Child::create($data);
    }

    // update child
    public function updateChild($child, $data)
    {
        return $child->update($data);
    }

    // destory child
    public function destoryChild($child)
    {
        return $child->forceDelete();
    }

    // change status
    public function changeStatus($child, $status)
    {
        return $child->update(['status' => $status]);
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    // child family
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    // create child family
    public function createChildFamily($childFamilyData)
    {
        return ChildFamily::create($childFamilyData);
    }

    // update child family
    public function updateChildFamily($myChild, $childFamilyData)
    {
        return $myChild->childFamily->update($childFamilyData);
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    // child father
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    // create child father
    public function createChildFather($childFatherData)
    {
        return ChildFather::create($childFatherData);
    }
    //update child father
    public function updateChildFather($myChild, $childFatherData)
    {
        return $myChild->childFather->update($childFatherData);
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    // child mother
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //  create child mother
    public function createChildMother($childMotherData)
    {
        return ChildMother::create($childMotherData);
    }

    //update child mother
    public function updateChildMother($myChild, $childMotherData)
    {
        return $myChild->childMother->update($childMotherData);
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    // child guardian
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    // create child guardian
    public function createChildGuardian($childGuaridanData)
    {
        return ChildGuardian::create($childGuaridanData);
    }

    //update child guardian
    public function updateChildGuardian($myChild, $childGuaridanData)
    {
        return $myChild->childGuardian->update($childGuaridanData);
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    // child guardian
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    // create child Files
    public function createChildFiles($childFileData)
    {
        return ChildFile::create($childFileData);
    }

    //update child guardian
    public function updateChildFiles($myChild, $childFileData)
    {
        return $myChild->childFile->update($childFileData);
    }
}
