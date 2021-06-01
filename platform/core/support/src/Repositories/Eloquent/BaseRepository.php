<?php

namespace Workable\Support\Repositories\Eloquent;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Workable\Support\Traits\ScopeRepositoryTrait;

abstract class BaseRepository
{
    use ScopeRepositoryTrait;

    protected $total = 0;
    protected $model;

    /**
     * @param bool $filter
     * @param bool $sort
     * @param bool $limit
     * @param array $select
     * @return mixed
     */
    public function getAll($filter = false, $sort = false, $limit = false, $select = [])
    {
        $query = $this->model;
        $query = $this->scopeFilter($query, $filter);
        if ($select) $query->select($select);

        if ($sort)
        {
            list($col, $dir) = $sort;
            $query->orderBy($col, $dir);
        }

        return $limit ? $query->paginate($limit) : $query->get($select);
    }

    /**
     * @return int
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function find($id)
    {
        return $this->model->find($id);
    }

    /**
     * @param $id
     * @param array $select
     * @return mixed
     */
    public function findById($id, $select = ['*'])
    {
        return $this->model->findOrFail($id, $select);
    }

    /**
     * @param array $condition
     * @param array $field
     * @return mixed
     */
    public function findBy($condition = array(), $field = array('*'))
    {
        $filter = Arr::get($condition, 'filter');
        if (!$filter) return null;

        $query = $this->model;
        $item = $this->scopeFilter($query, $filter)->first($field);
        return $item;
    }

    /**
     * @param $id
     * @param array $data
     * @return mixed
     */
    public function updateOrCreateData($id, $data = array())
    {
        return $this->model->updateOrCreate([$this->model->getPrimaryKey() => $id], $data);
    }

    /**
     * @param $id
     * @param $data
     * @return mixed
     */
    public function updateById($id, $data)
    {
        $model = $this->findById($id);
        $model->fill($data)->save();
        return $model;
    }

    /**
     * @param $id
     * @param $field
     * @param string $otherValue
     * @return mixed
     */
    public function updateByField($id, $field, $otherValue = '')
    {
        $row = $this->findById($id);
        $row->$field = ($otherValue ? $otherValue : (($row->$field == 1) ? 0 : 1));
        $row->save();
        return $row;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id)
    {
        return is_array($id) ? $this->model->destroy($id) : $this->findById($id)->delete();
    }

    /**
     * @param $value
     * @param $key
     * @return mixed
     */
    public function getPluck($value, $key)
    {
        return $this->model->pluck($value, $key);
    }

    /**
     * @return mixed
     */
    public function getInstance()
    {
        return new $this->model;
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function create(array $data)
    {
        return $this->model->create($data);
    }

    /**
     * @param $data
     * @return mixed
     */
    public function insert($data=[])
    {
        return DB::table($this->model->getTable())->insert($data);
    }

    /**
     * @param array $data
     * @return int
     */
    public function insertGetId($data=[])
    {
        return DB::table($this->model->getTable())->insertGetId($data);
    }

    /**
     * @param $id
     * @param array $data
     * @return mixed
     */
    public function update($id, array $data)
    {
        return $this->model->where('id', $id)->update($data);
    }

    /**
     * @param $column
     * @param $value
     * @param array $data
     * @return mixed
     */
    public function updateBy($column, $value, array $data)
    {
        return $this->model->where($column, $value)->update($data);
    }

    /**
     * @param array $filter
     * @return mixed
     */
    public function countBy(array $filter)
    {
        $query = $this->model->whereRaw(1);
        $query = $this->scopeFilter($query, $filter);

        return $query->count();
    }

    /**
     * @param $id
     * @param $column
     * @param int $hit
     * @return mixed
     */
    public function increment($id, $column, $hit=1)
    {
        return $this->model->where('id', $id)->increment($column, $hit);
    }
}
