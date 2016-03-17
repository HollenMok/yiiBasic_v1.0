<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Customers;

/**
 * CustomersSearch represents the model behind the search form about `app\models\Customers`.
 */
class CustomersSearch extends Customers
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['customers_id', 'customers_points', 'customers_affiliate_points', 'customers_credit', 'customers_default_address_id', 'customers_paypal_ec', 'customers_locked', 'customers_is_registerd', 'customers_to_affiliate_status', 'customers_affiliate_level', 'super_affiliate_rate', 'customers_confirm_email', 'send_affiliate_group_mail', 'is_dropship', 'dropshipper_level', 'is_wholesale', 'wholesale_level', 'auto_register', 'assign_admin_id', 'fb_id', 'twitter_id', 'privileged'], 'integer'],
            [['customers_gender', 'customers_nickname', 'customers_firstname', 'customers_lastname', 'customers_avatars', 'customers_dob', 'customers_email_address', 'customers_telephone', 'customers_fax', 'customers_password', 'customers_newsletter', 'customers_paypal_payerid', 'customers_ip_address', 'customers_paypal_payerids', 'affiliate_code', 'affiliate_email', 'affiliate_site', 'affiliate_blog', 'affiliate_referral_place', 'affiliate_remarks', 'apply_affiliater_date', 'apply_affiliater_success_date', 'countries', 'pp_billing_agreement_id'], 'safe'],
            [['affiliate_amount'], 'number'],
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
        $query = Customers::find();

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
            'customers_id' => $this->customers_id,
            'customers_points' => $this->customers_points,
            'customers_affiliate_points' => $this->customers_affiliate_points,
            'affiliate_amount' => $this->affiliate_amount,
            'customers_credit' => $this->customers_credit,
            'customers_dob' => $this->customers_dob,
            'customers_default_address_id' => $this->customers_default_address_id,
            'customers_paypal_ec' => $this->customers_paypal_ec,
            'customers_locked' => $this->customers_locked,
            'customers_is_registerd' => $this->customers_is_registerd,
            'customers_to_affiliate_status' => $this->customers_to_affiliate_status,
            'customers_affiliate_level' => $this->customers_affiliate_level,
            'super_affiliate_rate' => $this->super_affiliate_rate,
            'customers_confirm_email' => $this->customers_confirm_email,
            'send_affiliate_group_mail' => $this->send_affiliate_group_mail,
            'apply_affiliater_date' => $this->apply_affiliater_date,
            'apply_affiliater_success_date' => $this->apply_affiliater_success_date,
            'is_dropship' => $this->is_dropship,
            'dropshipper_level' => $this->dropshipper_level,
            'is_wholesale' => $this->is_wholesale,
            'wholesale_level' => $this->wholesale_level,
            'auto_register' => $this->auto_register,
            'assign_admin_id' => $this->assign_admin_id,
            'fb_id' => $this->fb_id,
            'twitter_id' => $this->twitter_id,
            'privileged' => $this->privileged,
        ]);

        $query->andFilterWhere(['like', 'customers_gender', $this->customers_gender])
            ->andFilterWhere(['like', 'customers_nickname', $this->customers_nickname])
            ->andFilterWhere(['like', 'customers_firstname', $this->customers_firstname])
            ->andFilterWhere(['like', 'customers_lastname', $this->customers_lastname])
            ->andFilterWhere(['like', 'customers_avatars', $this->customers_avatars])
            ->andFilterWhere(['like', 'customers_email_address', $this->customers_email_address])
            ->andFilterWhere(['like', 'customers_telephone', $this->customers_telephone])
            ->andFilterWhere(['like', 'customers_fax', $this->customers_fax])
            ->andFilterWhere(['like', 'customers_password', $this->customers_password])
            ->andFilterWhere(['like', 'customers_newsletter', $this->customers_newsletter])
            ->andFilterWhere(['like', 'customers_paypal_payerid', $this->customers_paypal_payerid])
            ->andFilterWhere(['like', 'customers_ip_address', $this->customers_ip_address])
            ->andFilterWhere(['like', 'customers_paypal_payerids', $this->customers_paypal_payerids])
            ->andFilterWhere(['like', 'affiliate_code', $this->affiliate_code])
            ->andFilterWhere(['like', 'affiliate_email', $this->affiliate_email])
            ->andFilterWhere(['like', 'affiliate_site', $this->affiliate_site])
            ->andFilterWhere(['like', 'affiliate_blog', $this->affiliate_blog])
            ->andFilterWhere(['like', 'affiliate_referral_place', $this->affiliate_referral_place])
            ->andFilterWhere(['like', 'affiliate_remarks', $this->affiliate_remarks])
            ->andFilterWhere(['like', 'countries', $this->countries])
            ->andFilterWhere(['like', 'pp_billing_agreement_id', $this->pp_billing_agreement_id]);

        return $dataProvider;
    }
}
