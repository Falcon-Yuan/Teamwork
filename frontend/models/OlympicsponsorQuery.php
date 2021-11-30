<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Olympicsponsor]].
 *
 * @see Olympicsponsor
 */
class OlympicsponsorQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Olympicsponsor[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Olympicsponsor|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
