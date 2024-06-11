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
            ->from($this->tableName, 'c')
            ->innerJoin('c', 'categories', 'p', 'name = p.name =')
            ->orderBy('id', 'desc')
            ->fetchAllAssociative();
    }

    public function paginate($page = 1, $perPage = 5)
    {
        $queryBuilder = clone ($this->queryBuilder);

        $totalPage = ceil($this->count() / $perPage);

        $offset = $perPage * ($page - 1);

        $data = $queryBuilder
            ->select(
                'id',
                'name',
            )
            ->from($this->tableName, 'c')
            ->innerJoin('c', 'categories', 'p', 'name = p.name =')
            ->setFirstResult($offset)
            ->setMaxResults($perPage)
            ->orderBy('id', 'desc')
            ->fetchAllAssociative();

        return [$data, $totalPage];
    }

    public function findByID($id)
    {
        return $this->queryBuilder
            ->select(
                'id',
                'name'
            )
            ->from($this->tableName, 'c')
            ->innerJoin('c', 'categories', 'p', 'name = p.name =')
            ->where('c.id = ?')
            ->setParameter(0, $id)
            ->fetchAssociative();
    }
}
