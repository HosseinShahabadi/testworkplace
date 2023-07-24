<?php

namespace App\Jobs;

use App\Models\Names;
use Faker\Guesser\Name;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class DeleteRows implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
//        \Illuminate\Support\Facades\Mail::raw('This is Handle method.', function ($message) {
//            $message->to('mailtrap@gmil.vom');
//        });

        foreach (Names::all() as $name) {
            sleep(10);
            $status = Names::all()->firstOrFail()->delete();
        }
    }
}
