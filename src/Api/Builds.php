<?php

namespace MingYuanYun\AppStore\Api;


class Builds extends AbstractApi
{
    public function all(array $params = [])
    {
        return $this->get('/builds', $params);
    }

    public function read(string $id, array $params = [])
    {
        return $this->get('/builds/'.$id, $params);
    }
}