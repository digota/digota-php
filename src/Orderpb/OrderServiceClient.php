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
namespace Orderpb {

  class OrderServiceClient extends \Grpc\BaseStub {

     // @param string $hostname hostname
     // @param array $opts channel options
     // @param \Grpc\Channel $channel (optional) re-use channel object
    public function __construct($hostname, $opts, $channel = null) {
      parent::__construct($hostname, $opts, $channel);
    }

     // @param \Orderpb\NewRequest $argument input argument
     // @param array $metadata metadata
     // @param array $options call options
    public function New(\Orderpb\NewRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/orderpb.OrderService/New',
      $argument,
      ['\Orderpb\Order', 'decode'],
      $metadata, $options);
    }

     // @param \Orderpb\GetRequest $argument input argument
     // @param array $metadata metadata
     // @param array $options call options
    public function Get(\Orderpb\GetRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/orderpb.OrderService/Get',
      $argument,
      ['\Orderpb\Order', 'decode'],
      $metadata, $options);
    }

     // @param \Orderpb\PayRequest $argument input argument
     // @param array $metadata metadata
     // @param array $options call options
    public function Pay(\Orderpb\PayRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/orderpb.OrderService/Pay',
      $argument,
      ['\Orderpb\Order', 'decode'],
      $metadata, $options);
    }

     // @param \Orderpb\ReturnRequest $argument input argument
     // @param array $metadata metadata
     // @param array $options call options
    public function Return(\Orderpb\ReturnRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/orderpb.OrderService/Return',
      $argument,
      ['\Orderpb\Order', 'decode'],
      $metadata, $options);
    }

     // @param \Orderpb\ListRequest $argument input argument
     // @param array $metadata metadata
     // @param array $options call options
    public function List(\Orderpb\ListRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/orderpb.OrderService/List',
      $argument,
      ['\Orderpb\OrderList', 'decode'],
      $metadata, $options);
    }

  }

}
