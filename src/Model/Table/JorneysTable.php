<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Jorneys Model
 *
 * @method \App\Model\Entity\Jorney newEmptyEntity()
 * @method \App\Model\Entity\Jorney newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Jorney[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Jorney get($primaryKey, $options = [])
 * @method \App\Model\Entity\Jorney findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Jorney patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Jorney[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Jorney|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Jorney saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Jorney[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Jorney[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Jorney[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Jorney[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class JorneysTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('jorneys');
        $this->setDisplayField('ip');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('path')
            ->requirePresence('path', 'create')
            ->notEmptyString('path');

        $validator
            ->scalar('ip')
            ->maxLength('ip', 255)
            ->requirePresence('ip', 'create')
            ->notEmptyString('ip');

        return $validator;
    }
}
