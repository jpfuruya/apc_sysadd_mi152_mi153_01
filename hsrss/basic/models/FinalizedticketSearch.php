<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Finalizedticket;

/**
 * FinalizedticketSearch represents the model behind the search form about `app\models\Finalizedticket`.
 */
class FinalizedticketSearch extends Finalizedticket
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'initial_ticket_id', 'dept_staff', 'supervisor'], 'integer'],
            [['fin_closedtime'], 'safe'],
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
        $query = Finalizedticket::find();

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
            'fin_closedtime' => $this->fin_closedtime,
            'initial_ticket_id' => $this->initial_ticket_id,
            'dept_staff' => $this->dept_staff,
            'supervisor' => $this->supervisor,
        ]);

        return $dataProvider;
    }
}
