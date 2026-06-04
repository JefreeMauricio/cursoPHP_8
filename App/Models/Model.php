<?php
namespace App\Models;

use Core\App;

class Model
{
    protected $properties = [];
    protected $table;
    
    public function __construct($properties = [])
    {
        $this->properties = $properties;
    }

    public static function all()
    {
        $model = new static;
        $rows  = App::get('database')
            ->selectAll($model->getTable());

        return array_map(fn ($row) => new static($row), $rows); // array($model) {
    }

    public static function create($properties)
    {
        $model = new static($properties); //Task
        $model->save();
        
        return $model;
    }

    public function update($properties)
    {
        App::get('database')
            ->update($this->getTable(),$this->properties['id'], $properties);

        $this->setProperties($properties); 

        return $this;
    }



    public static function find($id)
    {
        $model = new static;
        $properties = App::get('database') ->find($model->getTable(), $id);
        $model->setProperties($properties);

        return $model;
    }

    

    public function save($name = null)
    {
        if(empty($this->table)){
            throw new Exception('El nombre de la tabla no ha sido definido');
            
        }
        App::get('database')
            ->create($this->table, $this->properties);
    }

    public function getTable()
    {
        return $this->table;
    }

    public function setProperties($properties)
    {
        $this->properties = array_merge($this->properties, $properties);
        return $this;
    }

    public function __get($name)
    {
        if (array_key_exists($name, $this->properties)) {
            return $this->properties[$name];
        }
        
        return null;
    }

    public static function findBy($params)
    {
        $model = new static;
        $rows  = App::get('database')
            ->findBy($model->getTable(), $params);

        return array_map(fn ($row) => new static($row), $rows); // array($model) {
    }
}
