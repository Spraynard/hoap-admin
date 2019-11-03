<?php

use TCG\Voyager\Models\Menu;
use TCG\Voyager\Models\Role;
use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataRow;
use TCG\Voyager\Models\DataType;
use TCG\Voyager\Models\MenuItem;
use TCG\Voyager\Models\Permission;

class ProgramDataRowTypeSeeder extends Seeder
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
            'name' => [
                'type'         => 'text',
                'display_name' => 'Program Name',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '{}',
                'order'        => 2,
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
                'order'        => 26,
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
                'order'        => 27,
            ],
        ];

        $dataType = $this->dataType('slug', 'programs');
        foreach($dataRows as $field => $values) {
            $this->dataRow($dataType,$field,$values);
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
            'name'                  => 'programs',
            'display_name_singular' => 'Participant',
            'display_name_plural'   => 'Programs',
            'icon'                  => 'voyager-people',
            'model_name'            => 'App\\Models\\Program',
            'controller'            => '',
            'generate_permissions'  => 1,
            'server_side'           => 1,
            'description'           => '',
            'details'               => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}'
        ])->save();

        if(!$dataType->exists) {
            $this->command->info(sprintf('Data type "%s" created',$for));
        } else {
            $this->command->info(sprintf('Data type "%s" updated',$for));
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
        if(!$dataRow->exists) {
            $this->command->info(sprintf('Data row "%s" for type "%s" created.',$field,$type->slug));
        } else {
            $this->command->info(sprintf('Data row "%s" for type "%s" updated.',$field,$type->slug));
        }
    }

    public function permissions() {
        $keys = [
            'browse_programs',
            'read_programs',
            'edit_programs',
            'add_programs',
            'delete_programs',
        ];
        $role = Role::where('name', 'admin')->firstOrFail();
        foreach ($keys as $key) {
            $permission = Permission::firstOrCreate([
                'key'        => $key,
                'table_name' => 'programs',
            ]);
            
            if(!$permission->exists) {
                $permission->save();
            }
            $permission->roles()->sync($role);
            
        }
    }

    public function menu()
    {
        $menu = Menu::where('name', 'admin')->firstOrFail();
        $lastMenuItem = MenuItem::where('menu_id',$menu->id)->orderBy('order','DESC')->first();

        $order = 1;
        if($lastMenuItem) {
            $order = $lastMenuItem->order + 1;
        }
        $menuItem = MenuItem::where('menu_id',$menu->id)->where('title','Programs')->first();

        if(!$menuItem) {
            $menuItem = MenuItem::create([
                'menu_id' => $menu->id,
                'title'   => 'Programs',
                'url'     => '',
                'target' => '_self',
                'icon_class' => 'voyager-window-list',
                'route'   => 'voyager.programs.index',
                'order' => $order,
            ]);
        }

    }
}
