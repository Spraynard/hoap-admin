<?php

use TCG\Voyager\Models\Menu;
use TCG\Voyager\Models\Role;
use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataRow;
use TCG\Voyager\Models\DataType;
use TCG\Voyager\Models\MenuItem;
use TCG\Voyager\Models\Permission;

class TimeEntriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataRows = [
            'id' => [
                'type'         => 'text',
                'display_name' => __('voyager::seeders.data_rows.id'),
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => '{}',
                'order'        => 1,
            ],

            'time_entry_belongsto_volunteer_relationship' => [
                'type'         => 'relationship',
                'display_name' => 'Volunteer',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '{"model":"\\\App\\\Models\\\Volunteer","table":"volunteers","type":"belongsTo","column":"volunteer_id","key":"id","label":"first_name"}',
                'order'        => 2,
            ] ,
            'volunteer_id' => [
                'type'         => 'text',
                'display_name' => 'volunteer_id',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '{}',
                'order'        => 3,
            ],
            'date' => [
                'type'         => 'date',
                'display_name' => 'Date of Volunteering',
                'required'     => 1,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '{}',
                'order'        => 6,
            ],
            'duration_hours' => [
                'type'         => 'number',
                'display_name' => 'Hours Volunteered Today',
                'required'     => 1,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '{}',
                'order'        => 7,
            ],
            'description' => [
                'type'         => 'text',
                'display_name' => 'Description',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '{}',
                'order'        => 18,
            ],
            'created_at' => [
                'type'         => 'timestamp',
                'display_name' => 'Created At',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => '{}',
                'order'        => 20,
            ],
            'updated_at' => [
                'type'         => 'timestamp',
                'display_name' => 'Updated At',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => '{}',
                'order'        => 21,
            ],
        ];

        $dataType = $this->dataType('slug', 'time_entries');
        foreach ($dataRows as $field => $values) {
            $this->dataRow($dataType, $field, $values);
        }

        $this->permissions();
        $this->menu();
    }

    /**
     * [dataType description].
     *
     * @param [type] $field [description]
     * @param [type] $for   [description]
     *
     * @return [type] [description]
     */
    protected function dataType($field, $for)
    {
        $dataType = DataType::firstOrNew([$field => $for]);

        $dataType->fill([
            'name'                  => 'time_entries',
            'display_name_singular' => 'Time Entry',
            'display_name_plural'   => 'Time Entries',
            'icon'                  => 'voyager-people',
            'model_name'            => 'App\\Models\\TimeEntry',
            'controller'            => '',
            'generate_permissions'  => 1,
            'server_side'           => 1,
            'description'           => '',
            'details'               => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}'
        ])->save();

        if (!$dataType->exists) {
            $this->command->info(sprintf('Data type "%s" created', $for));
        } else {
            $this->command->info(sprintf('Data type "%s" updated', $for));
        }

        return $dataType;
    }


    /**
     * [dataRow description].
     *
     * @param [type] $type  [description]
     * @param [type] $field [description]
     *
     * @return [type] [description]
     */
    protected function dataRow($type, $field, $data)
    {
        $data['details'] = json_decode($data['details']);
        $dataRow = DataRow::firstOrNew([
            'data_type_id' => $type->id,
            'field'        => $field,
        ]);
        $dataRow->fill($data)->save();
        if (!$dataRow->exists) {
            $this->command->info(sprintf('Data row "%s" for type "%s" created.', $field, $type->slug));
        } else {
            $this->command->info(sprintf('Data row "%s" for type "%s" updated.', $field, $type->slug));
        }
    }

    public function permissions()
    {
        $keys = [
            'browse_time_entries',
            'read_time_entries',
            'edit_time_entries',
            'add_time_entries',
            'delete_time_entries',
        ];
        $role = Role::where('name', 'admin')->firstOrFail();
        foreach ($keys as $key) {
            $permission = Permission::firstOrCreate([
                'key'        => $key,
                'table_name' => 'time_entries',
            ]);

            if (!$permission->exists) {
                $permission->save();
            }
            $permission->roles()->sync($role);
        }
    }

    public function menu()
    {
        $menu = Menu::where('name', 'admin')->firstOrFail();
        $lastMenuItem = MenuItem::where('menu_id', $menu->id)->orderBy('order', 'DESC')->first();

        $order = 1;
        if ($lastMenuItem) {
            $order = $lastMenuItem->order + 1;
        }
        $menuItem = MenuItem::where('menu_id', $menu->id)->where('title', 'Time Entries')->first();

        if (!$menuItem) {
            $menuItem = MenuItem::create([
                'menu_id' => $menu->id,
                'title'   => 'Time Entries',
                'url'     => '',
                'target' => '_self',
                'icon_class' => 'voyager-people',
                'route'   => 'voyager.time_entries.index',
                'order' => $order,
            ]);
        }
    }
}
