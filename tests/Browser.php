<?php

namespace Tests;

use Facebook\WebDriver\Exception\TimeoutException;
use Laravel\Dusk\Browser as BaseBrowser;

class Browser extends BaseBrowser
{
    public function withinModal(callable $callable): self
    {
        return $this->within('@modal-content', $callable);
    }

    /**
     * @return self
     * @throws TimeoutException
     */
    public function waitForModal(): self
    {
        return $this->waitFor('@modal-content');
    }

    /**
     * @throws TimeoutException
     */
    public function waitUntilMissingModal(): self
    {
        return $this->waitUntilMissing('@modal-wrapper');
    }
}
