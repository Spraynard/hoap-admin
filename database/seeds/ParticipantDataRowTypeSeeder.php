<?php

use TCG\Voyager\Models\Menu;
use TCG\Voyager\Models\Role;
use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataRow;
use TCG\Voyager\Models\DataType;
use TCG\Voyager\Models\MenuItem;
use TCG\Voyager\Models\Permission;

class ParticipantDataRowTypeSeeder extends Seeder
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
                'order'        => 2,
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
                'order'        => 3,
            ],
            'participant_belongstomany_program_relationship' =>  [
                'type'         => 'relationship',
                'display_name' => 'Programs',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '{"model":"\\\App\\\Models\\\Program","table":"programs","type":"belongsToMany","column":"id","key":"id","label":"name","pivot_table":"participant_program","pivot":"1","taggable":"on"}',
                'order'        => 4,
            ],
            'service_interest' => [
                'type'         => 'text',
                'display_name' => 'Service Interest',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '{}',
                'order'        => 5,
            ],
            'dob' => [
                'type'         => 'date',
                'display_name' => 'Date of Birth',
                'required'     => 1,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '{}',
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
                'details'      => '{"default":"","options":{"":"(Select One)","male":"Male","female":"Female","other":"Other"}}',
                'order'        => 7,
            ],
            'ethnicity' => [
                'type'         => 'select_dropdown',
                'display_name' => 'Ethnicity',
                'required'     => 1,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '{"default":"","options":{"":"(Select One)","White":"White","Hispanic":"Hispanic","Black":"Black", "Asian or Pacific Islander": "Asian or Pacific Islander", "Native American or Alaskan Native": "Native American or Alaskan Native", "Other": "Other"}}',
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
                'details'      => '{}',
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
                'order'        => 10,
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
                'order'        => 11,
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
                'order'        => 12,
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
                'order'        => 13,
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
                'order'        => 14,
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
                'details'      => '{}',
                'order'        => 15,
            ],
            'ok_to_text' => [
                'type'         => 'checkbox',
                'display_name' => 'Ok to text',
                'required'     => 1,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '{"on":"Yes","off":"No","checked":"false"}',
                'order'        => 16,
            ],
            'last_grade_completed' => [
                'type'         => 'select_dropdown',
                'display_name' => 'Last Grade Completed',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '{"default":"","options":{"":"(Select One)","1st":"1st Grade","2nd":"2nd Grade","3rd":"3rd Grade","4th":"4th Grade","5th":"5th Grade","6th":"6th Grade","7th":"7th Grade","8th":"8th Grade","9th":"9th Grade","10th":"10th Grade","11th":"11th Grade","12th":"12th Grade"}}',
                'order'        => 17,
            ],
            'employment_status' => [
                'type'         => 'select_dropdown',
                'display_name' => 'Employement Status',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '{"default":"","options":{"":"(Select One)","employed":"Employed","unemployed":"Unemployed"}}',
                'order'        => 18,
            ],
            'number_of_children' => [
                'type'         => 'number',
                'display_name' => 'Number Of Children',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '{}',
                'order'        => 19,
            ],
            'annual_income' => [
                'type'         => 'number',
                'display_name' => 'Annual Income',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '{}',
                'order'        => 20,
            ],
            'additional_services' => [
                'type'         => 'text',
                'display_name' => 'Additional Services',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '{}',
                'order'        => 21,
            ],
            'referrer' => [
                'type'         => 'text',
                'display_name' => 'Referrer',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '{}',
                'order'        => 22,
            ],
            'enrollment_date' => [
                'type'         => 'date',
                'display_name' => 'Enrollment Date',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '{}',
                'order'        => 23,
            ],
            'status' => [
                'type'         => 'select_dropdown',
                'display_name' => 'Status',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '{"default":"applicant","options":{"participant":"Participant","applicant":"Applicant"}}',
                'order'        => 24,
            ],
            'exit_date' => [
                'type'         => 'date',
                'display_name' => 'Exit Date',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '{}',
                'order'        => 25,
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

        $dataType = $this->dataType('slug', 'participants');
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
            'name'                  => 'participants',
            'display_name_singular' => 'Participant',
            'display_name_plural'   => 'Participants',
            'icon'                  => 'voyager-people',
            'model_name'            => 'App\\Models\\Participant',
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
            'browse_participants',
            'read_participants',
            'edit_participants',
            'add_participants',
            'delete_participants',
        ];
        $role = Role::where('name', 'admin')->firstOrFail();
        foreach ($keys as $key) {
            $permission = Permission::firstOrCreate([
                'key'        => $key,
                'table_name' => 'participants',
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
        $menuItem = MenuItem::where('menu_id',$menu->id)->where('title','Participants')->first();

        if(!$menuItem) {
            $menuItem = MenuItem::create([
                'menu_id' => $menu->id,
                'title'   => 'Participants',
                'url'     => '',
                'target' => '_self',
                'icon_class' => 'voyager-people',
                'route'   => 'voyager.participants.index',
                'order' => $order,
            ]);
        }

    }
}
