<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "room".
 *
 * @property integer $id
 * @property integer $room_no
 * @property string $room_details
 *
 * @property InitialTicket[] $initialTickets
 */
class Room extends \yii\db\ActiveRecord
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
            [['room_details'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'room_no' => 'Room Number',
            'room_details' => 'Room Details',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInitialTickets()
    {
        return $this->hasMany(InitialTicket::className(), ['ROOM_id' => 'id']);
    }
}
