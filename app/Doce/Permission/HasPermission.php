<?php


namespace App\Doce\Permission;


use App\User;

/**
 * Class HasPermission
 * @package App\Doce\Permission
 * @mixin User
 */
trait HasPermission
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function permissions() {
        return $this->belongsToMany(Permission::class);
    }

    /**
     * @param string|Permission $permission
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function assignPermission($permission) {
        if (is_string($permission)) {
            return $this->permissions()->save(
                Permission::where('name', $permission)->firstOrFail()
            );
        }
        elseif ($permission instanceof Permission) {
            return $this->permissions()->save($permission);
        }
    }

    /**
     * @param string|Permission $permission
     * @return int
     */
    public function removePermission($permission)
    {
        if (is_string($permission)) {
            return $this->permissions()->detach(
                Permission::where('name', $permission)->firstOrFail()
            );
        }
        elseif ($permission instanceof Permission) {
            return $this->permissions()->detach($permission);
        }
    }

    /**
     * @param string|Permission $permission
     * @return bool
     */
    public function hasPermission($permission)
    {
        if (is_string($permission)) {
            return $this->permissions()->get()->contains('name', $permission);
        }
        elseif ($permission instanceof Permission) {
            return !! $this->permissions()->get()->intersect($permission->get())->count();
        }
    }
}