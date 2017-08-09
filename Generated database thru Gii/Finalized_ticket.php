<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "finalizedticket".
 *
 * @property integer $fin_ticketid
 * @property string $ini_limit
 * @property integer $emp_id
 * @property integer $ini_ticketid
 */
class Finalized_ticket extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'finalizedticket';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ini_limit', 'emp_id', 'ini_ticketid'], 'required'],
            [['ini_limit'], 'safe'],
            [['emp_id', 'ini_ticketid'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'fin_ticketid' => 'Fin Ticketid',
            'ini_limit' => 'Ini Limit',
            'emp_id' => 'Emp ID',
            'ini_ticketid' => 'Ini Ticketid',
        ];
    }
}
