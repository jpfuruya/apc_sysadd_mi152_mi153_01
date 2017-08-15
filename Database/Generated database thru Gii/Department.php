<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "department".
 *
 * @property integer $dept_id
 * @property string $dept_name
 * @property integer $emp_id
 */
class Department extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'department';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['dept_id', 'dept_name', 'emp_id'], 'required'],
            [['dept_id', 'emp_id'], 'integer'],
            [['dept_name'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'dept_id' => 'Dept ID',
            'dept_name' => 'Dept Name',
            'emp_id' => 'Emp ID',
        ];
    }
}
