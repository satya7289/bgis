<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermissionTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $tableNames = config('permission.table_names');
        $columnNames = config('permission.column_names');

        Schema::create($tableNames['permissions'], function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('guard_name')->default(config('auth.defaults.guard'));
            $table->timestamps();
        });

        $defaultPermissions = array(
            array('name'=>'Administer roles & permissions'),
            array('name'=>'Contact'),
            array('name'=>'News'),
            array('name'=>'Admissions'),
            array('name'=>'Edit Ticket'),
            array('name'=>'View All Tickets'),
            array('name'=>'View Full Donations'),
            array('name'=>'Add Donation'),
            array('name'=>'Search Donations'),
            array('name'=>'Faculty'),
            array('name'=>'Noticeboard'),
            array('name'=>'Publications'),
            array('name'=>'Dates'),
        );

        DB::table('permissions')->insert($defaultPermissions);

        Schema::create($tableNames['roles'], function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('guard_name')->default(config('auth.defaults.guard'));
            $table->timestamps();
        });

        $defaultRoles = array(
            array('name'=>'Administrator'),
            array('name'=>'Department'),
            array('name'=>'Basic User'),
        );

        DB::table('roles')->insert($defaultRoles);

        Schema::create($tableNames['model_has_permissions'], function (Blueprint $table) use ($tableNames, $columnNames) {
            $table->unsignedInteger('permission_id');

            $table->string('model_type');
            $table->unsignedBigInteger($columnNames['model_morph_key']);
            $table->index([$columnNames['model_morph_key'], 'model_type', ]);

            $table->foreign('permission_id')
                ->references('id')
                ->on($tableNames['permissions'])
                ->onDelete('cascade');

            $table->primary(['permission_id', $columnNames['model_morph_key'], 'model_type'],
                    'model_has_permissions_permission_model_type_primary');
        });

        Schema::create($tableNames['model_has_roles'], function (Blueprint $table) use ($tableNames, $columnNames) {
            $table->unsignedInteger('role_id');

            $table->string('model_type');
            $table->unsignedBigInteger($columnNames['model_morph_key']);
            $table->index([$columnNames['model_morph_key'], 'model_type', ]);

            $table->foreign('role_id')
                ->references('id')
                ->on($tableNames['roles'])
                ->onDelete('cascade');

            $table->primary(['role_id', $columnNames['model_morph_key'], 'model_type'],
                    'model_has_roles_role_model_type_primary');
        });

        $defaultSuperUser = array(
            'role_id'=>'1',
            'model_type'=>'App\User',
            'model_id'=>'1',

        );
        DB::table('model_has_roles')->insert($defaultSuperUser);



        Schema::create($tableNames['role_has_permissions'], function (Blueprint $table) use ($tableNames) {
            $table->unsignedInteger('permission_id');
            $table->unsignedInteger('role_id');

            $table->foreign('permission_id')
                ->references('id')
                ->on($tableNames['permissions'])
                ->onDelete('cascade');

            $table->foreign('role_id')
                ->references('id')
                ->on($tableNames['roles'])
                ->onDelete('cascade');

            $table->primary(['permission_id', 'role_id']);
            
            app('cache')
                ->store(config('permission.cache.store') != 'default' ? config('permission.cache.store') : null)
                ->forget(config('permission.cache.key'));
        });

        $defaultRelations = array(
            array('permission_id'=>'1', 'role_id'=>'1'),
            array('permission_id'=>'2', 'role_id'=>'1'),
            array('permission_id'=>'3', 'role_id'=>'1'),
            array('permission_id'=>'4', 'role_id'=>'1'),
            array('permission_id'=>'5', 'role_id'=>'1'),
            array('permission_id'=>'6', 'role_id'=>'1'),
            array('permission_id'=>'7', 'role_id'=>'1'),
            array('permission_id'=>'8', 'role_id'=>'1'),
            array('permission_id'=>'9', 'role_id'=>'1'),
            array('permission_id'=>'10', 'role_id'=>'1'),
            array('permission_id'=>'11', 'role_id'=>'1'),
            array('permission_id'=>'12', 'role_id'=>'1'),
            array('permission_id'=>'13', 'role_id'=>'1'),
            array('permission_id'=>'5', 'role_id'=>'2'),
            array('permission_id'=>'7', 'role_id'=>'2'),
            array('permission_id'=>'8', 'role_id'=>'2'),
            array('permission_id'=>'9', 'role_id'=>'2'),
            array('permission_id'=>'8', 'role_id'=>'3'),
            array('permission_id'=>'9', 'role_id'=>'3'),
        );

        DB::table('role_has_permissions')->insert($defaultRelations);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $tableNames = config('permission.table_names');

        Schema::drop($tableNames['role_has_permissions']);
        Schema::drop($tableNames['model_has_roles']);
        Schema::drop($tableNames['model_has_permissions']);
        Schema::drop($tableNames['roles']);
        Schema::drop($tableNames['permissions']);
    }
}
