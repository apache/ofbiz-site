#!/bin/sh
#####################################################################
# Licensed to the Apache Software Foundation (ASF) under one
# or more contributor license agreements.  See the NOTICE file
# distributed with this work for additional information
# regarding copyright ownership.  The ASF licenses this file
# to you under the Apache License, Version 2.0 (the
# "License"); you may not use this file except in compliance
# with the License.  You may obtain a copy of the License at
#
# http://www.apache.org/licenses/LICENSE-2.0
#
# Unless required by applicable law or agreed to in writing,
# software distributed under the License is distributed on an
# "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
# KIND, either express or implied.  See the License for the
# specific language governing permissions and limitations
# under the License.
#####################################################################

# This shell script creates the site HTML files from the PHP templates
php template/html.tpl.php template/page/about-ofbiz.tpl.php > about-ofbiz.html
php template/html.tpl.php template/page/business-users.tpl.php >business-users.html
php template/html.tpl.php template/page/developers.tpl.php > developers.html
php template/html.tpl.php template/page/download.tpl.php > download.html
php template/html.tpl.php template/page/release-notes-16.11.03.tpl.php > release-notes-16.11.03.html
php template/html.tpl.php template/page/release-notes-13.07.03.tpl.php > release-notes-13.07.03.html
php template/html.tpl.php template/page/faqs.tpl.php > faqs.html
php template/html.tpl.php template/page/getting-involved.tpl.php > getting-involved.html
php template/html.tpl.php template/page/index.tpl.php > index.html
php template/html.tpl.php template/page/mailing-lists.tpl.php > mailing-lists.html
php template/html.tpl.php template/page/ofbiz-demos.tpl.php > ofbiz-demos.html
php template/html.tpl.php template/page/our-users.tpl.php >our-users.html
php template/html.tpl.php template/page/service-providers.tpl.php > service-providers.html
php template/html.tpl.php template/page/source-repositories.tpl.php > source-repositories.html
php template/html.tpl.php template/page/user-stories.tpl.php > user-stories.html
