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
SITE_DIR="$(cd -P "$(dirname "$0")" && pwd)"
for template in $SITE_DIR/template/page/*.tpl.php; do
    filename=$(basename $template)
    php $SITE_DIR/template/html.tpl.php $template > $SITE_DIR/${filename%.tpl.php}.html
done
