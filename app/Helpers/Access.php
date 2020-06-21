<?php

    namespace App\Helpers;

    use Illuminate\Support\Facades\Gate;

    class Access
    {
        public function check ($permission)
        {
            abort_if(Gate::denies($permission), 403, config('global.error.403'));
        }
    }
