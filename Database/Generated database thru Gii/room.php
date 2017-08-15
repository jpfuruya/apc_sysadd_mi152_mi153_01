<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "room".
 *
 * @property integer $room_no
 * @property string $room_details
 */
class room extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'room';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['room_no', 'room_details'], 'required'],
            [['room_no'], 'integer'],
            [['room_details'], 'string', 'max' => 40],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'room_no' => 'Room No',
            'room_details' => 'Room Details',
        ];
    }
}
