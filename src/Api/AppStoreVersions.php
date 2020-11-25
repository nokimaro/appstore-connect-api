<?php

namespace MingYuanYun\AppStore\Api;


class AppStoreVersions extends AbstractApi
{

    public function phasedRelease(string $id, array $params = []) {
        return $this->get('/appStoreVersions/'.$id.'/appStoreVersionPhasedRelease', $params);
    }
}