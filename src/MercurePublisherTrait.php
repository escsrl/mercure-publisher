<?php

namespace Esc;

use Symfony\Component\Mercure\Update;

trait MercurePublisherTrait
{
    private $publisher;

    public function publish(
        $topics,
        string $data,
        array $targets = [],
        string $id = null,
        string $type = null,
        int $retry = null
    ): void {
        $update = new Update(
            $topics,
            $data,
            $targets,
            $id,
            $type,
            $retry
        );

        $publish = $this->publisher;
        $publish($update);
    }
}
