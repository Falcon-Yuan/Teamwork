<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Athlete]].
 *
 * @see Athlete
 */
class AthleteQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Athlete[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Athlete|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
