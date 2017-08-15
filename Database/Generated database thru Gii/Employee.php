<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "employee".
 *
 * @property integer $emp_id
 * @property string $emp_name
 * @property integer $pos_code
 * @property integer $ini_ticketid
 */
class Employee extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'employee';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['emp_name', 'pos_code', 'ini_ticketid'], 'required'],
            [['pos_code', 'ini_ticketid'], 'integer'],
            [['emp_name'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'emp_id' => 'Emp ID',
            'emp_name' => 'Emp Name',
            'pos_code' => 'Pos Code',
            'ini_ticketid' => 'Ini Ticketid',
        ];
    }
}
