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
namespace Productpb {

  class ProductServiceClient extends \Grpc\BaseStub {

     // @param string $hostname hostname
     // @param array $opts channel options
     // @param \Grpc\Channel $channel (optional) re-use channel object
    public function __construct($hostname, $opts, $channel = null) {
      parent::__construct($hostname, $opts, $channel);
    }

     // @param \Productpb\NewRequest $argument input argument
     // @param array $metadata metadata
     // @param array $options call options
    public function New(\Productpb\NewRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/productpb.ProductService/New',
      $argument,
      ['\Productpb\Product', 'decode'],
      $metadata, $options);
    }

     // @param \Productpb\GetRequest $argument input argument
     // @param array $metadata metadata
     // @param array $options call options
    public function Get(\Productpb\GetRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/productpb.ProductService/Get',
      $argument,
      ['\Productpb\Product', 'decode'],
      $metadata, $options);
    }

     // @param \Productpb\UpdateRequest $argument input argument
     // @param array $metadata metadata
     // @param array $options call options
    public function Update(\Productpb\UpdateRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/productpb.ProductService/Update',
      $argument,
      ['\Productpb\Product', 'decode'],
      $metadata, $options);
    }

     // @param \Productpb\ListRequest $argument input argument
     // @param array $metadata metadata
     // @param array $options call options
    public function List(\Productpb\ListRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/productpb.ProductService/List',
      $argument,
      ['\Productpb\ProductList', 'decode'],
      $metadata, $options);
    }

     // @param \Productpb\DeleteRequest $argument input argument
     // @param array $metadata metadata
     // @param array $options call options
    public function Delete(\Productpb\DeleteRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/productpb.ProductService/Delete',
      $argument,
      ['\Productpb\Empty', 'decode'],
      $metadata, $options);
    }

  }

}
