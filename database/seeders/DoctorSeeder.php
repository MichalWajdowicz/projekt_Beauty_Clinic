<?php

namespace Database\Seeders;

use App\Models\Doctor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Doctor::upsert(
            [
                [
                    'name' => 'Anna', 'surname' => 'Trzask', 'description' => 'Accusamus ducimus omnis et et veritatis quo qui totam. Fuga incidunt et optio et ut. Necessitatibus officia eos et. Alias porro accusantium saepe aut ducimus. Nemo suscipit consequuntur facilis iure sunt dolorem.',
                ],

                [
                    'name' => 'Adam', 'surname' => 'Bocian', 'description' => 'Eaque pariatur ut dolores minus quas. Libero qui numquam autem in ut consectetur. Commodi unde sit iusto esse voluptatibus laboriosam. Voluptatem sed explicabo nemo non. Aspernatur numquam neque beatae animi ducimus necessitatibus.',
                ],

                [
                    'name' => 'Magdalena', 'surname' => 'Motyl', 'description' => 'Quisquam libero rerum officia amet in corrupti laborum. Et reiciendis voluptatem explicabo ipsam libero similique saepe. In et est deleniti minima. Exercitationem vero eos debitis et. Asperiores ut molestias maiores perferendis. Iusto impedit placeat atque eos nemo doloribus. Velit veniam maiores perferendis delectus consequatur.',
                ],

                [
                    'name' => 'Tomasz', 'surname' => 'Szept', 'description' => 'Animi doloremque laudantium voluptas et neque pariatur. Pariatur et quisquam vel quis placeat veniam est. Sunt nobis voluptates reprehenderit maxime. Pariatur error quidem accusamus impedit distinctio eius suscipit. Sint sint quasi alias aperiam sint. In quia est ut tempore quidem quia rerum. Et dicta ducimus sunt similique. Laborum eos quia ut quia.',
                ],
            ],
            'name'
        );

    }

}
