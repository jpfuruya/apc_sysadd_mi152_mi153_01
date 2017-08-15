<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "finalized_ticket".
 *
 * @property integer $id
 * @property string $fin_closedtime
 * @property integer $initial_ticket_id
 * @property integer $dept_staff
 * @property integer $supervisor
 *
 * @property Employee $deptStaff
 * @property Employee $supervisor0
 * @property InitialTicket $initialTicket
 */
class Finalizedticket extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'finalized_ticket';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fin_closedtime', 'initial_ticket_id', 'dept_staff', 'supervisor'], 'required'],
            [['fin_closedtime'], 'safe'],
            [['initial_ticket_id', 'dept_staff', 'supervisor'], 'integer'],
            [['dept_staff'], 'exist', 'skipOnError' => true, 'targetClass' => Employee::className(), 'targetAttribute' => ['dept_staff' => 'id']],
            [['supervisor'], 'exist', 'skipOnError' => true, 'targetClass' => Employee::className(), 'targetAttribute' => ['supervisor' => 'id']],
            [['initial_ticket_id'], 'exist', 'skipOnError' => true, 'targetClass' => InitialTicket::className(), 'targetAttribute' => ['initial_ticket_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fin_closedtime' => 'Fin Closedtime',
            'initial_ticket_id' => 'Initial Ticket ID',
            'dept_staff' => 'Dept Staff',
            'supervisor' => 'Supervisor',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDeptStaff()
    {
        return $this->hasOne(Employee::className(), ['id' => 'dept_staff']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSupervisor0()
    {
        return $this->hasOne(Employee::className(), ['id' => 'supervisor']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInitialTicket()
    {
        return $this->hasOne(InitialTicket::className(), ['id' => 'initial_ticket_id']);
    }
}
