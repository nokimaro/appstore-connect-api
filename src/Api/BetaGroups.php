<?php

namespace MingYuanYun\AppStore\Api;


class BetaGroups extends AbstractApi
{
    public function all(array $params = [])
    {
        return $this->get('/betaGroups', $params);
    }

    public function app(string $id, array $params = [])
    {
        return $this->get('/betaGroups/'.$id.'/app', $params);
    }
}