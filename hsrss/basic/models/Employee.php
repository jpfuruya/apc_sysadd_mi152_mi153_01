<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "employee".
 *
 * @property integer $id
 * @property string $emp_name
 * @property integer $pos_id
 * @property integer $dept_id
 *
 * @property Department $dept
 * @property Position $pos
 * @property FinalizedTicket[] $finalizedTickets
 * @property FinalizedTicket[] $finalizedTickets0
 * @property InitialTicket[] $initialTickets
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
            [['emp_name', 'pos_id', 'dept_id'], 'required'],
            [['pos_id', 'dept_id'], 'integer'],
            [['emp_name'], 'string', 'max' => 100],
            [['dept_id'], 'exist', 'skipOnError' => true, 'targetClass' => Department::className(), 'targetAttribute' => ['dept_id' => 'id']],
            [['pos_id'], 'exist', 'skipOnError' => true, 'targetClass' => Position::className(), 'targetAttribute' => ['pos_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'emp_name' => 'Emp Name',
            'pos_id' => 'Pos ID',
            'dept_id' => 'Dept ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDept()
    {
        return $this->hasOne(Department::className(), ['id' => 'dept_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPos()
    {
        return $this->hasOne(Position::className(), ['id' => 'pos_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFinalizedTickets()
    {
        return $this->hasMany(FinalizedTicket::className(), ['dept_staff' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFinalizedTickets0()
    {
        return $this->hasMany(FinalizedTicket::className(), ['supervisor' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInitialTickets()
    {
        return $this->hasMany(InitialTicket::className(), ['receptionist' => 'id']);
    }
}
