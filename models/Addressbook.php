<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "address_book".
 *
 * @property integer $address_book_id
 * @property integer $customers_id
 * @property string $entry_gender
 * @property string $entry_company
 * @property string $entry_firstname
 * @property string $entry_lastname
 * @property string $entry_street_address
 * @property string $entry_street_address2
 * @property string $entry_suburb
 * @property string $entry_postcode
 * @property string $entry_city
 * @property string $entry_state
 * @property integer $entry_country_id
 * @property integer $entry_zone_id
 */
class Addressbook extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'address_book';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['customers_id', 'entry_gender', 'entry_firstname', 'entry_lastname', 'entry_street_address', 'entry_street_address2', 'entry_postcode', 'entry_city'], 'required'],
            [['customers_id', 'entry_country_id', 'entry_zone_id'], 'integer'],
            [['entry_gender'], 'string', 'max' => 1],
            [['entry_company', 'entry_firstname', 'entry_lastname', 'entry_street_address', 'entry_suburb'], 'string', 'max' => 255],
            [['entry_street_address2'], 'string', 'max' => 96],
            [['entry_postcode'], 'string', 'max' => 10],
            [['entry_city', 'entry_state'], 'string', 'max' => 32]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'address_book_id' => 'Address Book ID',
            'customers_id' => 'Customers ID',
            'entry_gender' => 'Entry Gender',
            'entry_company' => 'Entry Company',
            'entry_firstname' => 'Entry Firstname',
            'entry_lastname' => 'Entry Lastname',
            'entry_street_address' => 'Entry Street Address',
            'entry_street_address2' => 'Entry Street Address2',
            'entry_suburb' => 'Entry Suburb',
            'entry_postcode' => 'Entry Postcode',
            'entry_city' => 'Entry City',
            'entry_state' => 'Entry State',
            'entry_country_id' => 'Entry Country ID',
            'entry_zone_id' => 'Entry Zone ID',
        ];
    }
}
