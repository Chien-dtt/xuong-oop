<?php

namespace Chien\XuongOop\Models;

use Chien\XuongOop\Commons\Model;

class Category extends Model
{
    protected string $tableName = 'categories';

    public function all()
    {
        return $this->queryBuilder
            ->select(
                'id',
                'name',
            )
            ->from($this->tableName, 'p')
            ->innerJoin('categories', 'p', 'p.id = p.name')
            ->orderBy('c.id', 'desc')
            ->fetchAllAssociative();
    }

    // public function paginate($page = 1, $perPage = 5)
    // {
    //     $queryBuilder = clone ($this->queryBuilder);

    //     $totalPage = ceil($this->count() / $perPage);

    //     $offset = $perPage * ($page - 1);

    //     $data = $queryBuilder
    //         ->select(
    //             'p.id',
    //             'p.category_id',
    //             'p.name',
    //             'p.img_thumbnail',
    //             'p.created_at',
    //             'p.updated_at',
    //             'c.name as c_name'
    //         )
    //         ->from($this->tableName, 'p')
    //         ->innerJoin('p', 'categories', 'c', 'c.id = p.category_id')
    //         ->setFirstResult($offset)
    //         ->setMaxResults($perPage)
    //         ->orderBy('p.id', 'desc')
    //         ->fetchAllAssociative();

    //     return [$data, $totalPage];
    // }

    public function findByID($id)
    {
        return $this->queryBuilder
            ->select(
                'id',
                'name'
            )
            ->from($this->tableName, 'p')
            ->innerJoin('categories', 'c', 'c.id = c.name')
            ->where('c.id = ?')
            ->setParameter(0, $id)
            ->fetchAssociative();
    }
}
