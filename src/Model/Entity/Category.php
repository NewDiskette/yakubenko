<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Category Entity
 *
 * @property int $id
 * @property string $title
 * @property int|null $parent_id
 * @property string|null $description
 * @property int|null $lft
 * @property int|null $rght
 * @property int|null $level
 *
 * @property \App\Model\Entity\ParentCategory $parent_category
 * @property \App\Model\Entity\ChildCategory[] $child_categories
 * @property \App\Model\Entity\Book[] $books
 * @property \App\Model\Entity\Writer[] $writers
 */
class Category extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'title' => true,
        'parent_id' => true,
        'description' => true,
        'lft' => true,
        'rght' => true,
        'level' => true,
        'parent_category' => true,
        'child_categories' => true,
        'books' => true,
        'writers' => true,
    ];
}
