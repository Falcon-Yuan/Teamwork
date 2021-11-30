<?php
/**
 * Team:NKNextTeam
 * Coding by sunxuerou 1911567, 20211127
 * This is the athlete view
 */
namespace app\models;

use Yii;

/**
 * This is the model class for table "athlete".
 *
 * @property string|null $country
 * @property string $athlete
 */
class Athlete extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'athlete';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['athlete'], 'required'],
            [['country'], 'string', 'max' => 6],
            [['athlete'], 'string', 'max' => 31],
            [['athlete'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'country' => 'Country',
            'athlete' => 'Athlete',
        ];
    }

    /**
     * {@inheritdoc}
     * @return AthleteQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new AthleteQuery(get_called_class());
    }
}
