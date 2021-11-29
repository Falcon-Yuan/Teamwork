<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "olympicnews".
 *
 * @property string $event
 * @property string $title
 * @property string $content
 */
class Olympicnews extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'olympicnews';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['event', 'title', 'content'], 'required'],
            [['event'], 'string', 'max' => 50],
            [['title', 'content'], 'string', 'max' => 250],
            [['title'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'event' => 'Event',
            'title' => 'Title',
            'content' => 'Content',
        ];
    }

    /**
     * {@inheritdoc}
     * @return OlympicnewsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new OlympicnewsQuery(get_called_class());
    }
}
