<?php

namespace MingYuanYun\AppStore\Api;


class PrereleaseVersions extends AbstractApi
{
    public function all(array $params = [])
    {
        return $this->get('/preReleaseVersions', $params);
    }

    public function read(string $id, array $params = [])
    {
        return $this->get('/preReleaseVersions/'.$id, $params);
    }
}