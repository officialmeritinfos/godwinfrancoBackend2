<?php
namespace App\Defaults;

use App\Models\ReturnType;
use App\Models\User;

class Custom{

    public function getInvestor($id)
    {
        $user = User::where('id',$id)->first();
        return $user->name;
    }
    public function getInvestorUsername($id)
    {
        $user = User::where('id',$id)->first();
        return $user->username;
    }

    public function getReturnType($id)
    {
        $type = ReturnType::where('id',$id)->first();
        return $type->name;
    }
}
