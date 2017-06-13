<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Bags Model
 *
 * @method \App\Model\Entity\Bag get($primaryKey, $options = [])
 * @method \App\Model\Entity\Bag newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Bag[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Bag|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Bag patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Bag[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Bag findOrCreate($search, callable $callback = null, $options = [])
 */
class BagsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('bags');
        $this->setDisplayField('bagID');
        $this->setPrimaryKey('bagID');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('bagID')
            ->allowEmpty('bagID', 'create');

        $validator
            ->requirePresence('bagName', 'create')
            ->notEmpty('bagName');

        $validator
            ->integer('supplierID')
            ->requirePresence('supplierID', 'create')
            ->notEmpty('supplierID');

        $validator
            ->integer('categoryID')
            ->requirePresence('categoryID', 'create')
            ->notEmpty('categoryID');

        $validator
            ->decimal('price')
            ->requirePresence('price', 'create')
            ->notEmpty('price');

        $validator
            ->allowEmpty('description');

        $validator
            ->allowEmpty('imagePath');

        return $validator;
    }
}
