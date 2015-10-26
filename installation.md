1. $ init
2. set config database in common/config/main-local if development or  common/config/main if production
3. $ yii migrate
4. $ yii migrate --migrationPath=@yii/rbac/migrations/
5. $ yii migrate --migrationPath=@sheillendra/user/migrations/