<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Writers Model
 *
 * @property \App\Model\Table\BooksTable&\Cake\ORM\Association\BelongsToMany $Books
 * @property \App\Model\Table\CategoriesTable&\Cake\ORM\Association\BelongsToMany $Categories
 *
 * @method \App\Model\Entity\Writer get($primaryKey, $options = [])
 * @method \App\Model\Entity\Writer newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Writer[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Writer|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Writer saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Writer patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Writer[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Writer findOrCreate($search, callable $callback = null, $options = [])
 */
class WritersTable extends Table
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

        $this->setTable('writers');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsToMany('Books', [
            'foreignKey' => 'writer_id',
            'targetForeignKey' => 'book_id',
            'joinTable' => 'books_writers',
        ]);
        $this->belongsToMany('Categories', [
            'foreignKey' => 'writer_id',
            'targetForeignKey' => 'category_id',
            'joinTable' => 'writers_categories',
        ]);
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
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('firstname')
            ->maxLength('firstname', 64)
            ->requirePresence('firstname', 'create')
            ->notEmptyString('firstname');

        $validator
            ->scalar('lastname')
            ->maxLength('lastname', 64)
            ->requirePresence('lastname', 'create')
            ->notEmptyString('lastname');

        $validator
            ->scalar('middlename')
            ->maxLength('middlename', 64)
            ->allowEmptyString('middlename');

        $validator
            ->scalar('photo')
            ->maxLength('photo', 100)
            ->allowEmptyString('photo');

        $validator
            ->scalar('bio')
            ->allowEmptyString('bio');

        $validator
            ->integer('year_b')
            ->allowEmptyString('year_b');

        $validator
            ->integer('year_d')
            ->allowEmptyString('year_d');

        return $validator;
    }
}
