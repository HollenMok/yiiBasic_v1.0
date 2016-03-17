<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "customers".
 *
 * @property integer $customers_id
 * @property string $customers_gender
 * @property string $customers_nickname
 * @property string $customers_firstname
 * @property string $customers_lastname
 * @property integer $customers_points
 * @property integer $customers_affiliate_points
 * @property string $affiliate_amount
 * @property string $customers_avatars
 * @property integer $customers_credit
 * @property string $customers_dob
 * @property string $customers_email_address
 * @property integer $customers_default_address_id
 * @property string $customers_telephone
 * @property string $customers_fax
 * @property string $customers_password
 * @property string $customers_newsletter
 * @property string $customers_paypal_payerid
 * @property integer $customers_paypal_ec
 * @property string $customers_ip_address
 * @property integer $customers_locked
 * @property string $customers_paypal_payerids
 * @property integer $customers_is_registerd
 * @property integer $customers_to_affiliate_status
 * @property string $affiliate_code
 * @property integer $customers_affiliate_level
 * @property integer $super_affiliate_rate
 * @property integer $customers_confirm_email
 * @property string $affiliate_email
 * @property integer $send_affiliate_group_mail
 * @property string $affiliate_site
 * @property string $affiliate_blog
 * @property string $affiliate_referral_place
 * @property string $affiliate_remarks
 * @property string $apply_affiliater_date
 * @property string $apply_affiliater_success_date
 * @property integer $is_dropship
 * @property integer $dropshipper_level
 * @property integer $is_wholesale
 * @property integer $wholesale_level
 * @property integer $auto_register
 * @property integer $assign_admin_id
 * @property string $fb_id
 * @property string $twitter_id
 * @property string $countries
 * @property string $pp_billing_agreement_id
 * @property integer $privileged
 */
class Customers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'customers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['customers_gender', 'customers_firstname', 'customers_lastname', 'affiliate_amount', 'customers_avatars', 'customers_email_address', 'customers_telephone', 'customers_password', 'is_dropship', 'is_wholesale', 'assign_admin_id'], 'required'],
            [['customers_points', 'customers_affiliate_points', 'customers_credit', 'customers_default_address_id', 'customers_paypal_ec', 'customers_locked', 'customers_is_registerd', 'customers_to_affiliate_status', 'customers_affiliate_level', 'super_affiliate_rate', 'customers_confirm_email', 'send_affiliate_group_mail', 'is_dropship', 'dropshipper_level', 'is_wholesale', 'wholesale_level', 'auto_register', 'assign_admin_id', 'fb_id', 'twitter_id', 'privileged'], 'integer'],
            [['affiliate_amount'], 'number'],
            [['customers_dob', 'apply_affiliater_date', 'apply_affiliater_success_date'], 'safe'],
            [['affiliate_remarks'], 'string'],
            [['customers_gender', 'customers_newsletter'], 'string', 'max' => 1],
            [['customers_nickname', 'customers_avatars', 'customers_paypal_payerids', 'affiliate_site', 'affiliate_blog', 'affiliate_referral_place', 'pp_billing_agreement_id'], 'string', 'max' => 255],
            [['customers_firstname', 'customers_lastname', 'customers_telephone', 'customers_fax'], 'string', 'max' => 32],
            [['customers_email_address', 'affiliate_email'], 'string', 'max' => 96],
            [['customers_password'], 'string', 'max' => 40],
            [['customers_paypal_payerid', 'affiliate_code'], 'string', 'max' => 20],
            [['customers_ip_address'], 'string', 'max' => 50],
            [['countries'], 'string', 'max' => 10]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'customers_id' => 'Customers ID',
            'customers_gender' => 'Customers Gender',
            'customers_nickname' => 'Customers Nickname',
            'customers_firstname' => 'Customers Firstname',
            'customers_lastname' => 'Customers Lastname',
            'customers_points' => 'Customers Points',
            'customers_affiliate_points' => 'Customers Affiliate Points',
            'affiliate_amount' => 'Affiliate Amount',
            'customers_avatars' => 'Customers Avatars',
            'customers_credit' => 'Customers Credit',
            'customers_dob' => 'Customers Dob',
            'customers_email_address' => 'Customers Email Address',
            'customers_default_address_id' => 'Customers Default Address ID',
            'customers_telephone' => 'Customers Telephone',
            'customers_fax' => 'Customers Fax',
            'customers_password' => 'Customers Password',
            'customers_newsletter' => 'Customers Newsletter',
            'customers_paypal_payerid' => 'Customers Paypal Payerid',
            'customers_paypal_ec' => 'Customers Paypal Ec',
            'customers_ip_address' => 'Customers Ip Address',
            'customers_locked' => 'Customers Locked',
            'customers_paypal_payerids' => 'Customers Paypal Payerids',
            'customers_is_registerd' => 'Customers Is Registerd',
            'customers_to_affiliate_status' => 'Customers To Affiliate Status',
            'affiliate_code' => 'Affiliate Code',
            'customers_affiliate_level' => 'Customers Affiliate Level',
            'super_affiliate_rate' => 'Super Affiliate Rate',
            'customers_confirm_email' => 'Customers Confirm Email',
            'affiliate_email' => 'Affiliate Email',
            'send_affiliate_group_mail' => 'Send Affiliate Group Mail',
            'affiliate_site' => 'Affiliate Site',
            'affiliate_blog' => 'Affiliate Blog',
            'affiliate_referral_place' => 'Affiliate Referral Place',
            'affiliate_remarks' => 'Affiliate Remarks',
            'apply_affiliater_date' => 'Apply Affiliater Date',
            'apply_affiliater_success_date' => 'Apply Affiliater Success Date',
            'is_dropship' => 'Is Dropship',
            'dropshipper_level' => 'Dropshipper Level',
            'is_wholesale' => 'Is Wholesale',
            'wholesale_level' => 'Wholesale Level',
            'auto_register' => 'Auto Register',
            'assign_admin_id' => 'Assign Admin ID',
            'fb_id' => 'Fb ID',
            'twitter_id' => 'Twitter ID',
            'countries' => 'Countries',
            'pp_billing_agreement_id' => 'Pp Billing Agreement ID',
            'privileged' => 'Privileged',
        ];
    }
}
