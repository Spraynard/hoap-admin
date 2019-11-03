<?php

use TCG\Voyager\Models\Menu;
use TCG\Voyager\Models\Role;
use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataRow;
use TCG\Voyager\Models\DataType;
use TCG\Voyager\Models\MenuItem;
use TCG\Voyager\Models\Permission;

class ChildDataRowTypeSeeder extends Seeder
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
            'child_belongsto_participant_relationship' => [
                'type'         => 'relationship',
                'display_name' => 'Participant',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '{"model":"\\\App\\\Models\\\Participant","table":"participants","type":"belongsTo","column":"participant_id","key":"id","label":"first_name","pivot_table":"children","pivot":"0","taggable":null}',
                'order'        => 2,
            ],
            'participant_id' => [
                'type'         => 'text',
                'display_name' => 'participant_id',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '{}',
                'order'        => 3,
            ],
            'first_name' => [
                'type'         => 'text',
                'display_name' => 'First Name',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '{}',
                'order'        => 4,
            ],
            'last_name' => [
                'type'         => 'text',
                'display_name' => 'Last Name',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '{}',
                'order'        => 5,
            ],
            'dob' => [
                'type'         => 'date',
                'display_name' => 'Date of Birth(or expected due date)',
                'required'     => 1,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => json_encode([
                    "validation" => [
                        "rule" => ["required", "date"]
                    ]
                ]),
                'order'        => 6,
            ],
            'gender' => [
                'type'         => 'select_dropdown',
                'display_name' => 'Gender',
                'required'     => 1,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => json_encode([
                    "validation" => [
                        "rule" => ["required"]
                    ],
                    "default" => "",
                    "options" => ["" => "(Select One)", "male" => "Male", "female" => "Female", "other" => "Other", "unknown" => "Unknown"]
                ]),
                'order'        => 7,
            ],
            'email' => [
                'type'         => 'text',
                'display_name' => 'Email',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => json_encode([
                    "validation" => [
                        "rule" => ["email"]
                    ]
                ]),
                'order'        => 8,
            ],
            'phone' => [
                'type'         => 'text',
                'display_name' => 'Phone',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '{}',
                'order'        => 9,
            ],
            'dad_involved' => [
                'type'         => 'checkbox',
                'display_name' => 'Dad Involved',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '{"on":"Yes","off":"No","checked":"false"}',
                'order'        => 10,
            ],
            'cps_involvement' => [
                'type'         => 'checkbox',
                'display_name' => 'CPS Involvement',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '{"on":"Yes","off":"No","checked":"false"}',
                'order'        => 11,
            ],
            'care_info' => [
                'type'         => 'rich_text_box',
                'display_name' => 'Care Information',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '{}',
                'order'        => 12,
            ],
            'county' => [
                'type'         => 'text',
                'display_name' => 'County',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '{}',
                'order'        => 13,
            ],
            'line_1' => [
                'type'         => 'text',
                'display_name' => 'Address Line 1',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '{}',
                'order'        => 14,
            ],
            'line_2' => [
                'type'         => 'text',
                'display_name' => 'Address Line 2',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '{}',
                'order'        => 15,
            ],
            'city' => [
                'type'         => 'text',
                'display_name' => 'City',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '{}',
                'order'        => 16,
            ],
            'state' => [
                'type'         => 'text',
                'display_name' => 'State',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '{}',
                'order'        => 17,
            ],
            'zip' => [
                'type'         => 'text',
                'display_name' => 'Zip Code',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => json_encode([
                    "validation" => [
                        "rule" => ["numeric"]
                    ]
                ]),
                'order'        => 18,
            ],
            'notes' => [
                'type'         => 'rich_text_box',
                'display_name' => 'Notes',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '{}',
                'order'        => 19,
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

        $dataType = $this->dataType('slug', 'children');
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
            'name'                  => 'children',
            'display_name_singular' => 'Child',
            'display_name_plural'   => 'Children',
            'icon'                  => 'voyager-people',
            'model_name'            => 'App\\Models\\Child',
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
            'browse_children',
            'read_children',
            'edit_children',
            'add_children',
            'delete_children',
        ];
        $role = Role::where('name', 'admin')->firstOrFail();
        foreach ($keys as $key) {
            $permission = Permission::firstOrCreate([
                'key'        => $key,
                'table_name' => 'children',
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
        $menuItem = MenuItem::where('menu_id', $menu->id)->where('title', 'Children')->first();

        if (!$menuItem) {
            $menuItem = MenuItem::create([
                'menu_id' => $menu->id,
                'title'   => 'Children',
                'url'     => '',
                'target' => '_self',
                'icon_class' => 'voyager-people',
                'route'   => 'voyager.children.index',
                'order' => $order,
            ]);
        }
    }
}
