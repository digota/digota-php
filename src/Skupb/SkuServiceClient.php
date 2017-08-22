<?php
// GENERATED CODE -- DO NOT EDIT!

// Original file comments:
//     Digota <http://digota.com> - eCommerce microservice
//     Copyright (C) 2017  Yaron Sumel <yaron@digota.com>. All Rights Reserved.
//
//     This program is free software: you can redistribute it and/or modify
//     it under the terms of the GNU Affero General Public License as published
//     by the Free Software Foundation, either version 3 of the License, or
//     (at your option) any later version.
//
//     This program is distributed in the hope that it will be useful,
//     but WITHOUT ANY WARRANTY; without even the implied warranty of
//     MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//     GNU Affero General Public License for more details.
//
//     You should have received a copy of the GNU Affero General Public License
//     along with this program.  If not, see <http://www.gnu.org/licenses/>.
//
namespace Skupb {

  class SkuServiceClient extends \Grpc\BaseStub {

     // @param string $hostname hostname
     // @param array $opts channel options
     // @param \Grpc\Channel $channel (optional) re-use channel object
    public function __construct($hostname, $opts, $channel = null) {
      parent::__construct($hostname, $opts, $channel);
    }

     // @param \Skupb\NewRequest $argument input argument
     // @param array $metadata metadata
     // @param array $options call options
    public function New(\Skupb\NewRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/skupb.SkuService/New',
      $argument,
      ['\Skupb\Sku', 'decode'],
      $metadata, $options);
    }

     // @param \Skupb\GetRequest $argument input argument
     // @param array $metadata metadata
     // @param array $options call options
    public function Get(\Skupb\GetRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/skupb.SkuService/Get',
      $argument,
      ['\Skupb\Sku', 'decode'],
      $metadata, $options);
    }

     // @param \Skupb\UpdateRequest $argument input argument
     // @param array $metadata metadata
     // @param array $options call options
    public function Update(\Skupb\UpdateRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/skupb.SkuService/Update',
      $argument,
      ['\Skupb\Sku', 'decode'],
      $metadata, $options);
    }

     // @param \Skupb\DeleteRequest $argument input argument
     // @param array $metadata metadata
     // @param array $options call options
    public function Delete(\Skupb\DeleteRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/skupb.SkuService/Delete',
      $argument,
      ['\Skupb\Empty', 'decode'],
      $metadata, $options);
    }

     // @param \Skupb\ListRequest $argument input argument
     // @param array $metadata metadata
     // @param array $options call options
    public function List(\Skupb\ListRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/skupb.SkuService/List',
      $argument,
      ['\Skupb\SkuList', 'decode'],
      $metadata, $options);
    }

  }

}
