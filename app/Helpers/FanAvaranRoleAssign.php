<?php

namespace App\Helpers;

use App\Models\FanAvaranRole;

class FanAvaranRoleAssign
{
    public function fanAvaranSetRole($formdata,$role){
        $roleResult=FanAvaranRole::where('slug',$role)->first();
        if($roleResult)
            $role_id=$roleResult->fanavaran_id;
        else
            return 'نقش درست وارد نشده است.';
        $body= ['NationalCode'=>$formdata['NationalCode'],
            'BirthYear'=>$formdata['BirthYear'],
            'BirthMonth'=>$formdata['BirthMonth'],
            'BirthDay'=>$formdata['BirthDay']
        ];
        $result=fanAvaranCallApi('Api/BimeApi/v2.0/common/parties/inquiry-by-unique-identifier','get',['body'=>$body]);
        if($result['status']==200) {
            foreach ($result['data'] as $item) {
                if ($item['RoleId'] == $role_id) {
                    return $item['Id'];
                }
            }
        }
        return $this->signInRole($formdata,$role);
    }

    private function signInRole($formdata,$role){
        $route='';
        switch($role){
            case 'zinaf':
                $route='beneficiaries';
            case 'bimehgozar':
                $route='customers';
            case 'bimehshodeh':
                $route='insured-people';
            case 'sayer':
                $route='other-people';
        }
        return $this->sign_in_api($route,$formdata);
    }

    private function sign_in_api($route,$formdata){
        return fanAvaranCallApi('Api/BimeApi/v2.0/common/'.$route,'post',['body'=>$formdata]);
    }
    public function fanAvaranSaveRoles(){
        $result=fanAvaranCallApi('api/BimeApi/v2.0/common/code-list/person-role','get');
//       dd($result);
        if($result['status']==200){
            foreach ($result['data'] as $item){
                $entity=new FanAvaranRole();
                $entity->fanavaran_id=$item['Id'];
                $entity->caption=$item['Caption'];
                $entity->is_active=$item['IsActive'];
                $entity->slug=$this->getRoleSlug($item['Caption']);
                $entity->save();
            }
        }
    }

    private function getRoleSlug($caption){
        switch ($caption){
            case 'بيمه گذار':
                return 'bimehgozar';
            case 'بيمه شده':
                return 'bimehshodeh';
            case 'ذينفع':
                return 'zinaf';
            case 'کارشناس':
                return 'karshenas';
            case 'ساير':
                return 'sayer';
            case 'نماينده / شعبه':
                return 'BMGZR6';
            case 'مرکز درماني':
                return 'BMGZR7';
            case 'بانک ذينفع':
                return 'BMGZR8';
            case 'دارائي':
                return 'BMGZR9';
            case 'بازارياب':
                return 'BMGZR10';
            case 'پرسنل شرکت بيمه':
                return 'BMGZR11';
            case 'شرکت کمک رسان':
                return 'BMGZR12';
            case 'وزارت بهداشت':
                return 'BMGZR13';
            case 'بيمه مرکزي':
                return 'BMGZR14';
            case 'شهرداري':
                return 'BMGZR15';
            case 'بروکر':
                return 'BMGZR16';
            case 'بيمه گر اتکايي':
                return 'BMGZR17';
            case 'تامين اجتماعي':
                return 'BMGZR18';
        }
        return 'default';
    }
}
