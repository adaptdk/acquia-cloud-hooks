#!/bin/sh

site="$1"
target_env="$2"

drush @$site.$target_env -y updb
drush @$site.$target_env -y fra
drush @$site.$target_env -y cc all
