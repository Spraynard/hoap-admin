<?php

use TCG\Voyager\Models\Menu;
use TCG\Voyager\Models\Role;
use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataRow;
use TCG\Voyager\Models\DataType;
use TCG\Voyager\Models\MenuItem;
use TCG\Voyager\Models\Permission;

class CommunityPartnerDataRowTypeSeeder extends Seeder
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
            'agency_name' => [
                'type'         => 'text',
                'display_name' => 'Agency Name',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => json_encode([
                    "validation" => [
                        "rule" => ["required"]
                    ]
                ]),
                'order'        => 2,
            ],
            'contact_name' => [
                'type'         => 'text',
                'display_name' => 'Contact Name',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => json_encode([
                    "validation" => [
                        "rule" => ["required"]
                    ]
                ]),
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
                'details'      => json_encode([
                    "validation" => [
                        "rule" => ["required"]
                    ]
                ]),
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
                'details'      => json_encode([
                    "validation" => [
                        "rule" => ["required"]
                    ]
                ]),
                'order'        => 5,
            ],
            'email' => [
                'type'         => 'text',
                'display_name' => 'Email',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => json_encode([
                    "validation" => [
                        "rule" => ["required", "email"]
                    ]
                ]),
                'order'        => 6,
            ],
            'phone' => [
                'type'         => 'text',
                'display_name' => 'Phone',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => json_encode([
                    "validation" => [
                        "rule" => ["required"]
                    ]
                ]),
                'order'        => 7,
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
                'order'        => 8,
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
                'order'        => 9,
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
                'order'        => 10,
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
                'order'        => 11,
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
                'order'        => 12,
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
                'order'        => 13,
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
                'order'        => 14,
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
                'order'        => 15,
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
                'order'        => 16,
            ],
        ];

        $dataType = $this->dataType('slug', 'children');
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
            'name'                  => 'community_partners',
            'display_name_singular' => 'Community Partner',
            'display_name_plural'   => 'Community Partners',
            'icon'                  => 'voyager-people',
            'model_name'            => 'App\\Models\\CommunityPartner',
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
            'browse_community_partners',
            'read_community_partners',
            'edit_community_partners',
            'add_community_partners',
            'delete_community_partners',
        ];
        $role = Role::where('name', 'admin')->firstOrFail();
        foreach ($keys as $key) {
            $permission = Permission::firstOrCreate([
                'key'        => $key,
                'table_name' => 'community_partners',
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
        $menuItem = MenuItem::where('menu_id',$menu->id)->where('title','Community Partners')->first();

        if(!$menuItem) {
            $menuItem = MenuItem::create([
                'menu_id' => $menu->id,
                'title'   => 'Community Partners',
                'url'     => '',
                'target' => '_self',
                'icon_class' => 'voyager-people',
                'route'   => 'voyager.community-partners.index',
                'order' => $order,
            ]);
        }

    }
}
