<?php

namespace JetBrains\Contracts;

interface IRepository
{
    /**
     * Get by id.
     *
     * @param int $id ID
     * @return mixed Instance.
     */
    public function get($id);

    public function getAll();

    public function save($instance);

    public function delete($id);
}