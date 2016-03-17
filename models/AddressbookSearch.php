<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Addressbook;

/**
 * AddressbookSearch represents the model behind the search form about `app\models\Addressbook`.
 */
class AddressbookSearch extends Addressbook
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['address_book_id', 'customers_id', 'entry_country_id', 'entry_zone_id'], 'integer'],
            [['entry_gender', 'entry_company', 'entry_firstname', 'entry_lastname', 'entry_street_address', 'entry_street_address2', 'entry_suburb', 'entry_postcode', 'entry_city', 'entry_state'], 'safe'],
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
        $query = Addressbook::find();

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
            'address_book_id' => $this->address_book_id,
            'customers_id' => $this->customers_id,
            'entry_country_id' => $this->entry_country_id,
            'entry_zone_id' => $this->entry_zone_id,
        ]);

        $query->andFilterWhere(['like', 'entry_gender', $this->entry_gender])
            ->andFilterWhere(['like', 'entry_company', $this->entry_company])
            ->andFilterWhere(['like', 'entry_firstname', $this->entry_firstname])
            ->andFilterWhere(['like', 'entry_lastname', $this->entry_lastname])
            ->andFilterWhere(['like', 'entry_street_address', $this->entry_street_address])
            ->andFilterWhere(['like', 'entry_street_address2', $this->entry_street_address2])
            ->andFilterWhere(['like', 'entry_suburb', $this->entry_suburb])
            ->andFilterWhere(['like', 'entry_postcode', $this->entry_postcode])
            ->andFilterWhere(['like', 'entry_city', $this->entry_city])
            ->andFilterWhere(['like', 'entry_state', $this->entry_state]);

        return $dataProvider;
    }
}
