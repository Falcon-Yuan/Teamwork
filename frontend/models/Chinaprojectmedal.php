<?php
/**
 * Team:NKNextTeam
 * Coding by yuanweifeng 1911509, 20211127
 * This is the cnmedal model
 */
namespace app\models;

use Yii;

/**
 * This is the model class for table "china_project_medal".
 *
 * @property string|null $country
 * @property string $sport
 * @property string|null $medal_number
 */
class Chinaprojectmedal extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'china_project_medal';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sport'], 'required'],
            [['country'], 'string', 'max' => 2],
            [['sport'], 'string', 'max' => 6],
            [['medal_number'], 'string', 'max' => 4],
            [['sport'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'country' => 'Country',
            'sport' => 'Sport',
            'medal_number' => 'Medal Number',
        ];
    }

    /**
     * {@inheritdoc}
     * @return ChinaProjectMedalQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ChinaProjectMedalQuery(get_called_class());
    }
}
