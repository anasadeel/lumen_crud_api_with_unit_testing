<?php

use App\Employee;

class EmployeeTest extends TestCase {

    public function test_can_create_employee() {
        $data = [
            'name' => $this->faker->name,
            'salary' => $this->faker->numberBetween(25000, 500000),
        ];
        $this->post('api/v1/employee/create', $data)
                ->seeStatusCode(201)
                ->seeJsonStructure(
                        [
                            'name',
                            'salary',
                            'created_at',
                            'updated_at'
        ]);
    }

    public function test_can_update_employee() {
        $employee = factory(Employee::class)->create();
        $data = [
            'name' => $this->faker->name,
            'salary' => $this->faker->numberBetween(25000, 500000),
        ];
        $this->put('api/v1/employee/update/' . $employee->id, $data)
                ->seeStatusCode(200)
                ->seeJsonStructure([
                    'name',
                    'salary',
                    'created_at',
                    'updated_at'
        ]);
    }

    public function test_can_show_employee() {
        $employee = factory(Employee::class)->create();
        $this->get('api/v1/employee/' . $employee->id)
                ->seeStatusCode(200);
    }

    public function test_can_delete_employee() {
        $employee = factory(Employee::class)->create();
        $this->delete('api/v1/employee/delete/' . $employee->id)
                ->seeStatusCode(204);
    }

    public function test_can_list_employees() {
        $employees = factory(Employee::class, 2)->create()->map(function ($employee) {
            return $employee->only(['id', 'name', 'salary']);
        });
        $this->get('api/v1/employees')
                ->seeStatusCode(200)
                ->seeJsonStructure(
                        ['*' =>
                            [
                                'name',
                                'salary',
                                'created_at',
                                'updated_at'
                            ]
        ]);
    }
}
