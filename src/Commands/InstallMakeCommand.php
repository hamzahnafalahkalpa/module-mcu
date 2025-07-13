<?php

namespace Hanafalah\ModuleMcu\Commands;

class InstallMakeCommand extends EnvironmentCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'module-patient:install';


    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command is used for initial installation of module patient';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $provider = 'Hanafalah\ModuleMcu\ModulePatientServiceProvider';

        $this->comment('Installing Module Patient...');
        $this->callSilent('vendor:publish', [
            '--provider' => $provider,
            '--tag'      => 'config'
        ]);
        $this->info('✔️  Created config/module-patient.php');

        $this->callSilent('vendor:publish', [
            '--provider' => $provider,
            '--tag'      => 'migrations'
        ]);
        $this->info('✔️  Created migrations');
<<<<<<< HEAD

=======
>>>>>>> 5b82b07fdac87c6233746d8d74c3e111d7eb4639
        $this->comment('hanafalah/module-patient installed successfully.');
    }
}
