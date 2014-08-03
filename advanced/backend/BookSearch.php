<?php

namespace backend;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Book;

/**
 * BookSearch represents the model behind the search form about `backend\models\Book`.
 */
class BookSearch extends Book
{
    public function rules()
    {
        return [
            [['id', 'udk1', 'udk2', 'udk3', 'tip', 'str'], 'integer'],
            [['avtor', 'io', 'avtor2', 'io2', 'nazva', 'izdat', 'god'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Book::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'udk1' => $this->udk1,
            'udk2' => $this->udk2,
            'udk3' => $this->udk3,
            'tip' => $this->tip,
            'god' => $this->god,
            'str' => $this->str,
        ]);

        $query->andFilterWhere(['like', 'avtor', $this->avtor])
            ->andFilterWhere(['like', 'io', $this->io])
            ->andFilterWhere(['like', 'avtor2', $this->avtor2])
            ->andFilterWhere(['like', 'io2', $this->io2])
            ->andFilterWhere(['like', 'nazva', $this->nazva])
            ->andFilterWhere(['like', 'izdat', $this->izdat]);

        return $dataProvider;
    }
}
