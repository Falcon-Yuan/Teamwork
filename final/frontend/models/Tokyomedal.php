<?php
/**
 * Team:NKNextTeam
 * Coding by yangxiaoran 1811701, 20211127
 * This is the medal model
 */
namespace app\models;

use Yii;

/**
 * This is the model class for table "tokyo_medal".
 *
 * @property int|null $rank_by_gold
 * @property string $country
 * @property int|null $gold_medal
 * @property int|null $silver_medal
 * @property int|null $bronze_medal
 * @property int|null $medal_total
 * @property int|null $rank_by_medal
 * @property string|null $country_code
 * @property int|null $country_id
 */
class Tokyomedal extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tokyo_medal';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['country'], 'required'],
            [['country', 'rank_by_gold', 'gold_medal', 'silver_medal', 'bronze_medal', 'medal_total', 'rank_by_medal', 'country_id'], 'string', 'max' => 255],
            [['country'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'rank_by_gold' => 'Rank By Gold',
            'country' => 'Country',
            'gold_medal' => 'Gold Medal',
            'silver_medal' => 'Silver Medal',
            'bronze_medal' => 'Bronze Medal',
            'medal_total' => 'Medal Total',
            'rank_by_medal' => 'Rank By Medal',
            'country_code' => 'Country Code',
            'country_id' => 'Country ID',
        ];
    }

    /**
     * {@inheritdoc}
     * @return TokyomedalQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TokyomedalQuery(get_called_class());
    }
}
