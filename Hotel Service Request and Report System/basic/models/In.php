<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "initialticket".
 *
 * @property integer $ini_ticketid
 * @property string $ini_subj
 * @property string $ini_status
 * @property string $ini_priority
 * @property string $ini_date
 * @property string $ini_limit
 * @property integer $type_id
 * @property integer $room_no
 */
class In extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'initialticket';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ini_subj', 'ini_status', 'ini_priority', 'ini_date', 'ini_limit', 'type_id', 'room_no'], 'required'],
            [['ini_date', 'ini_limit'], 'safe'],
            [['type_id', 'room_no'], 'integer'],
            [['ini_subj', 'ini_status', 'ini_priority'], 'string', 'max' => 60],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ini_ticketid' => 'Ini Ticketid',
            'ini_subj' => 'Ini Subj',
            'ini_status' => 'Ini Status',
            'ini_priority' => 'Ini Priority',
            'ini_date' => 'Ini Date',
            'ini_limit' => 'Ini Limit',
            'type_id' => 'Type ID',
            'room_no' => 'Room No',
        ];
    }
}
