<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "initial_ticket".
 *
 * @property integer $id
 * @property string $ini_subject
 * @property string $ini_status
 * @property string $ini_priority
 * @property string $ini_date
 * @property string $ini_limit
 * @property integer $ROOM_id
 * @property integer $receptionist
 * @property integer $ticket_type_id
 *
 * @property FinalizedTicket[] $finalizedTickets
 * @property Room $rOOM
 * @property Employee $receptionist0
 * @property TicketType $ticketType
 */
class Initialticket extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'initial_ticket';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ini_subject', 'ini_status', 'ini_priority', 'ini_date', 'ini_limit', 'ROOM_id', 'receptionist', 'ticket_type_id'], 'required'],
            [['ini_date', 'ini_limit'], 'safe'],
            [['ROOM_id', 'receptionist', 'ticket_type_id'], 'integer'],
            [['ini_subject'], 'string', 'max' => 255],
            [['ini_status', 'ini_priority'], 'string', 'max' => 10],
            [['ROOM_id'], 'exist', 'skipOnError' => true, 'targetClass' => Room::className(), 'targetAttribute' => ['ROOM_id' => 'id']],
            [['receptionist'], 'exist', 'skipOnError' => true, 'targetClass' => Employee::className(), 'targetAttribute' => ['receptionist' => 'id']],
            [['ticket_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => TicketType::className(), 'targetAttribute' => ['ticket_type_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ini_subject' => 'Ini Subject',
            'ini_status' => 'Ini Status',
            'ini_priority' => 'Ini Priority',
            'ini_date' => 'Ini Date',
            'ini_limit' => 'Ini Limit',
            'ROOM_id' => 'Room ID',
            'receptionist' => 'Receptionist',
            'ticket_type_id' => 'Ticket Type ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFinalizedTickets()
    {
        return $this->hasMany(FinalizedTicket::className(), ['initial_ticket_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getROOM()
    {
        return $this->hasOne(Room::className(), ['id' => 'ROOM_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReceptionist0()
    {
        return $this->hasOne(Employee::className(), ['id' => 'receptionist']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTicketType()
    {
        return $this->hasOne(TicketType::className(), ['id' => 'ticket_type_id']);
    }
}
