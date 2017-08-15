<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Initialticket;

/**
 * InitialticketSearch represents the model behind the search form about `app\models\Initialticket`.
 */
class InitialticketSearch extends Initialticket
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'ROOM_id', 'receptionist', 'ticket_type_id'], 'integer'],
            [['ini_subject', 'ini_status', 'ini_priority', 'ini_date', 'ini_limit'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Initialticket::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'ini_date' => $this->ini_date,
            'ini_limit' => $this->ini_limit,
            'ROOM_id' => $this->ROOM_id,
            'receptionist' => $this->receptionist,
            'ticket_type_id' => $this->ticket_type_id,
        ]);

        $query->andFilterWhere(['like', 'ini_subject', $this->ini_subject])
            ->andFilterWhere(['like', 'ini_status', $this->ini_status])
            ->andFilterWhere(['like', 'ini_priority', $this->ini_priority]);

        return $dataProvider;
    }
}
