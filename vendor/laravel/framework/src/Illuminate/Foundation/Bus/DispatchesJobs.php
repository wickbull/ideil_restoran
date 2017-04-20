<?php

namespace Illuminate\Foundation\Bus;

use Illuminate\Contracts\Bus\Dispatcher;

trait DispatchesJobs
{
    /**
     * Dispatch a job to its appropriate handler.
     *
     * @param  mixed  $job
     * @return mixed
     */
    protected function dispatch($job)
    {
        return app(Dispatcher::class)->dispatch($job);
    }

    /**
     * Dispatch a command to its appropriate handler in the current process.
     *
     * @param  mixed  $job
     * @return mixed
     */
    public function dispatchNow($job)
    {
<<<<<<< HEAD
        App::setLocale(session('language'));
=======
>>>>>>> 3840b407fbc3dfc6166d8209ae645b1a57f8128f
        return app(Dispatcher::class)->dispatchNow($job);
    }
}
