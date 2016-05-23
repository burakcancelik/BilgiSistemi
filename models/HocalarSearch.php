<?php

namespace frontend\modules\BilgiSistemi\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\modules\BilgiSistemi\models\Hocalar;

/**
 * HocalarSearch represents the model behind the search form about `frontend\modules\BilgiSistemi\models\Hocalar`.
 */
class HocalarSearch extends Hocalar
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['hocaid'], 'integer'],
            [['hocaadi', 'dersi'], 'safe'],
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
        $query = Hocalar::find();

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
            'hocaid' => $this->hocaid,
        ]);

        $query->andFilterWhere(['like', 'hocaadi', $this->hocaadi])
            ->andFilterWhere(['like', 'dersi', $this->dersi]);

        return $dataProvider;
    }
}
