<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ticket_type".
 *
 * @property integer $id
 * @property string $type_name
 *
 * @property Ticket1[] $ticket1s
 */
class Tickettype extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ticket_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type_name'], 'required'],
            [['type_name'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type_name' => 'Type Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTicket1s()
    {
        return $this->hasMany(Ticket1::className(), ['ticket_type_id' => 'id']);
    }
}
