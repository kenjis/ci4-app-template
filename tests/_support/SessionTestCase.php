<?php

declare(strict_types=1);

namespace Tests\Support;

use CodeIgniter\Session\Handlers\ArrayHandler;
use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\Mock\MockSession;
use Config\Services;

class SessionTestCase extends CIUnitTestCase
{
    /** @var SessionHandler */
    protected $session;

    public function setUp(): void
    {
        parent::setUp();

        $this->mockSession();
    }

    /**
     * Pre-loads the mock session driver into $this->session.
     *
     * @var string
     */
    protected function mockSession(): void
    {
        $config        = config('App');
        $this->session = new MockSession(new ArrayHandler($config, '0.0.0.0'), $config);
        Services::injectMock('session', $this->session);
    }
}
