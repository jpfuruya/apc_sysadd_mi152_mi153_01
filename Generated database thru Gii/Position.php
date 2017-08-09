<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "position".
 *
 * @property integer $pos_id
 * @property string $pos_des
 */
class Position extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'position';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pos_des'], 'required'],
            [['pos_des'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pos_id' => 'Pos ID',
            'pos_des' => 'Pos Des',
        ];
    }
}
