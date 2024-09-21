<?php

namespace Database\Seeders;

use App\Models\Animal;
use App\Models\Habitat;
use App\Models\User;
use App\Models\Zoo;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class PersonaSeeder extends Seeder
{
    public function run(): void
    {
        $persona = config('personaSeeder.persona');

        $this->zoo($persona['zoo']);
        $this->users($persona['users']);
        $this->habitats($persona['habitats']);
        $this->animals($persona['animals']);
    }

    private function zoo(array $zoo): void
    {
        foreach ($zoo as $zooValue) {
            $newZoo = [
                'id' => $zooValue['id'],
                'name' => $zooValue['name'],
                'description' => $zooValue['description'],
            ];

            Zoo::factory()
                ->create($newZoo);
        }
    }

    private function users(array $users): void
    {
        foreach ($users as $user) {
            $newUser = [
                'id' => $user['id'],
                'zoo_id' => $user['zoo_id'],
                'name' => $user['name'],
                'email' => $user['email'],
                'password' => Hash::make($user['password']),
                'role' => $user['role'],
            ];

            User::factory()
                ->create($newUser);
        }
    }

    private function habitats(array $habitats): void
    {
        foreach ($habitats as $habitat) {
            $newHabitat = [
                'id' => $habitat['id'],
                'zoo_id' => $habitat['zoo_id'],
                'name' => $habitat['name'],
                'description' => $habitat['description'],
                'image' => $habitat['image'],
            ];

            Habitat::factory()
                ->create($newHabitat);
        }
    }

    private function services(array $services): void
    {
        // TODO : implement services
    }

    private function animals(array $animals): void
    {
        foreach ($animals as $animal) {
            $newAnimal = [
                'id' => $animal['id'],
                'habitat_id' => $animal['habitat_id'],
                'name' => $animal['name'],
                'breed' => $animal['breed'],
                'description' => $animal['description'],
                'image' => $animal['image'],
            ];

            Animal::factory()
                ->create($newAnimal);
        }
    }
}
