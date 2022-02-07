<?php
namespace Modules\Roles\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class RolesDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        $permissionsByRole = [
            'Administrator' => ['users:read', 'users:update', 'users:delete', 'users:create', 'roles:read', 'roles:update', 'roles:delete', 'roles:create'],
            'Executive' => ['companies:create'],
            'User' => ['companies:read'],
        ];

        $insertPermissions = fn ($role) => collect($permissionsByRole[$role])
            ->map(fn ($name) => DB::table('permissions')->insertGetId(['name' => $name, 'guard_name' => 'web']))
            ->toArray();

        $permissionIdsByRole = [
            'Administrator' => $insertPermissions('Administrator'),
            'Executive' => $insertPermissions('Executive'),
            'User' => $insertPermissions('User')
        ];

        foreach ($permissionIdsByRole as $role => $permissionIds) {
            $role = Role::create(['name' => $role]);

            DB::table('role_has_permissions')
                ->insert(
                    collect($permissionIds)->map(
                        fn ($id) => [
                            'role_id' => $role->id,
                            'permission_id' => $id
                        ]
                    )->toArray()
                );
        }
    }
}
