<?php
/**
 * Team:NKNextTeam
 * Coding by wanghanwei 1811430, 20211127
 * This is the world medal model
 */
namespace backend\models;

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
 * @property string $country_code
 * @property int $country_id
 */
class World extends \yii\db\ActiveRecord
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
            [['rank_by_gold', 'gold_medal', 'silver_medal', 'bronze_medal', 'medal_total', 'rank_by_medal', 'country_id'], 'integer'],
            [['country', 'country_code', 'country_id'], 'required'],
            [['country'], 'string', 'max' => 6],
            [['country_code'], 'string', 'max' => 3],
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
     * @return TokyoMedalQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TokyoMedalQuery(get_called_class());
    }
}
