<?php

namespace MingYuanYun\AppStore\Api;


class Apps extends AbstractApi
{
    public function all(array $params = [])
    {
        return $this->get('/apps', $params);
    }

    public function read(string $id, array $params = [])
    {
        return $this->get('/apps/'.$id, $params);
    }
    public function builds(string $id, array $params = [])
    {
        return $this->get('/apps/'.$id.'/builds', $params);
    }

    public function prerelease(string $id, array $params = [])
    {
        return $this->get('/apps/'.$id.'/preReleaseVersions', $params);
    }
    public function appstoreversions(string $id, array $params = [])
    {
        return $this->get('/apps/'.$id.'/appStoreVersions', $params);
    }
}