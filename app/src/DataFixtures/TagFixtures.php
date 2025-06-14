<?php

namespace App\DataFixtures;

use App\Entity\Tag;
use Doctrine\Persistence\ObjectManager;

class TagFixtures extends AbstractBaseFixtures
{
    protected function loadData(): void
    {
        $this->createMany(20, 'tag', function (int $i) {
            $title = $this->faker->unique()->word();
            $slug = strtolower(trim(preg_replace('/[^a-z0-9]+/', '-', $title), '-'));

            $tag = new Tag();
            $tag->setTitle($title);
            $tag->setSlug($slug);
            $tag->setCreatedAt(
                \DateTimeImmutable::createFromMutable(
                    $this->faker->dateTimeBetween('-100 days', '-1 days')
                )
            );
            $tag->setUpdatedAt(
                \DateTimeImmutable::createFromMutable(
                    $this->faker->dateTimeBetween('-100 days', 'now')
                )
            );

            return $tag;
        });
    }
}
