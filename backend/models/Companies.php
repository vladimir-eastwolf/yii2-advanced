<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "companies".
 *
 * @property int $company_id
 * @property string $company_name
 * @property string $company_email
 * @property string $company_address
 * @property string $company_created_date
 * @property string $company_status
 */
class Companies extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */

    public $file;

    public static function tableName()
    {
        return 'companies';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['company_created_date'], 'safe'],
            [['file'],'file'],
            [['company_name', 'logo','company_email', 'company_address', 'company_status'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'company_id' => 'Company ID',
            'company_name' => 'Company Name',
            'company_email' => 'Company Email',
            'company_address' => 'Company Address',
            'company_created_date' => 'Company Created Date',
            'company_status' => 'Company Status',
            'file' => 'Logo',
        ];
    }

//    public function getBranches()
//    {
//        return   $this->hasMany(Branches::class,['companies_company_id' => 'company_id']);
//
//    }
//
//    public function getDepartments()
//    {
//        return   $this->hasMany(Departments::class,['companies_company_id' => 'company_id']);
//
//    }
}
