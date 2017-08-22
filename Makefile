#     Digota <http://digota.com> - eCommerce microservice
#     Copyright (C) 2017  Yaron Sumel <yaron@digota.com>. All Rights Reserved.
#
#     This program is free software: you can redistribute it and/or modify
#     it under the terms of the GNU Affero General Public License as published
#     by the Free Software Foundation, either version 3 of the License, or
#     (at your option) any later version.
#
#     This program is distributed in the hope that it will be useful,
#     but WITHOUT ANY WARRANTY; without even the implied warranty of
#     MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#     GNU Affero General Public License for more details.
#
#     You should have received a copy of the GNU Affero General Public License
#     along with this program.  If not, see <http://www.gnu.org/licenses/>.

php:

# clean src
	(rm -rf src\*)

# pull digota
#	(git clone https://github.com/digota/digota.git github.com/digota/digota)
	(git clone -b fix-proto-lowercase https://github.com/digota/digota.git github.com/digota/digota)

# create clean proto files
	(grep -vw 'import "github.com/gogo/protobuf/gogoproto/gogo.proto";' github.com/digota/digota/order/orderpb/order.proto | sed -e 's/\[[^][]*\]//g' > github.com/digota/digota/order/orderpb/order.clean.proto)
	(grep -vw 'import "github.com/gogo/protobuf/gogoproto/gogo.proto";' github.com/digota/digota/payment/paymentpb/payment.proto | sed -e 's/\[[^][]*\]//g' > github.com/digota/digota/payment/paymentpb/payment.clean.proto)
	(grep -vw 'import "github.com/gogo/protobuf/gogoproto/gogo.proto";' github.com/digota/digota/product/productpb/product.proto | sed -e 's/\[[^][]*\]//g' > github.com/digota/digota/product/productpb/product.clean.proto)
	(grep -vw 'import "github.com/gogo/protobuf/gogoproto/gogo.proto";' github.com/digota/digota/sku/skupb/sku.proto | sed -e 's/\[[^][]*\]//g' > github.com/digota/digota/sku/skupb/sku.clean.proto)

# create clean proto files
	(mv github.com/digota/digota/order/orderpb/order.clean.proto github.com/digota/digota/order/orderpb/order.proto)
	(mv github.com/digota/digota/payment/paymentpb/payment.clean.proto github.com/digota/digota/payment/paymentpb/payment.proto)
	(mv github.com/digota/digota/product/productpb/product.clean.proto github.com/digota/digota/product/productpb/product.proto)
	(mv github.com/digota/digota/sku/skupb/sku.clean.proto github.com/digota/digota/sku/skupb/sku.proto)

# generate order pb
	(protoc \
	-I=. \
	-I=../../../ \
	--php_out=src/ \
	--grpc_out=src/ \
	--plugin=protoc-gen-grpc=/tmp/grpc/bins/opt/grpc_php_plugin \
	github.com/digota/digota/order/orderpb/order.proto)

# generate payment pb
	(protoc \
	-I=. \
	-I=../../../ \
	--php_out=src/ \
	--grpc_out=src/ \
	--plugin=protoc-gen-grpc=/tmp/grpc/bins/opt/grpc_php_plugin \
	github.com/digota/digota/payment/paymentpb/payment.proto)

# generate sku pb
	(protoc \
	-I=. \
	-I=../../../ \
	--php_out=src/ \
	--grpc_out=src/ \
	--plugin=protoc-gen-grpc=/tmp/grpc/bins/opt/grpc_php_plugin \
	github.com/digota/digota/sku/skupb/sku.proto)

# generate product pb
	(protoc \
	-I=. \
	-I=../../../ \
    --php_out=src/ \
	--grpc_out=src/ \
	--plugin=protoc-gen-grpc=/tmp/grpc/bins/opt/grpc_php_plugin \
	github.com/digota/digota/product/productpb/product.proto)

# tear down
	(rm -rf github.com)
	(composer install)


