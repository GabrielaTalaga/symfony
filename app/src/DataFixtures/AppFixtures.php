<?php

namespace App\DataFixtures;

use App\Entity\Task;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // 5 przykładowych zadań
        for ($i = 1; $i <= 5; $i++) {
            $task = new Task();
            $task->setTitle('Przykładowe zadanie ' . $i);
            $task->setCreatedAt(new \DateTimeImmutable());
            $task->setUpdatedAt(new \DateTimeImmutable());
            $task->setComment('To jest przykładowy komentarz nr ' . $i);

            $manager->persist($task);
        }

        $manager->flush();
    }
}
