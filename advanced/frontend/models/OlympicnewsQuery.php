<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Olympicnews]].
 *
 * @see Olympicnews
 */
class OlympicnewsQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Olympicnews[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Olympicnews|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
