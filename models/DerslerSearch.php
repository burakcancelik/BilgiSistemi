<?php

namespace frontend\modules\BilgiSistemi\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\modules\BilgiSistemi\models\Dersler;

/**
 * DerslerSearch represents the model behind the search form about `frontend\modules\BilgiSistemi\models\Dersler`.
 */
class DerslerSearch extends Dersler
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'Kredi'], 'integer'],
            [['Adi', 'hocaadi'], 'safe'],
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
        $query = Dersler::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'ID' => $this->ID,
            'Kredi' => $this->Kredi,
        ]);

        $query->andFilterWhere(['like', 'Adi', $this->Adi])
            ->andFilterWhere(['like', 'hocaadi', $this->hocaadi]);

        return $dataProvider;
    }
}
